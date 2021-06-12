<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\ProposalReview;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Carbon;

class ProposalController extends Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('blacklist');
        $this->middleware('profilecheck');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            $proposaldetails = Proposal::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->paginate(30);

                return view('layouts.regusers.proposal.list',compact('proposaldetails'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.regusers.proposal.create');
    }

    public function createtype(Project $project)
    {

        $date1 = Carbon::create($project->enddate);
        $date2 = Carbon::now();

        $result = $date2->gt($date1);


        if($result)
        {
            $data['proposal'] = "no";
            $project->update($data);
        }


        if($project->proposal == "no")
        {
            return redirect()->route('reguser.projectindex')->with('delete', 'Proposal submission for this project is currently off ');
        }


        if(Auth::user()->status == "disable")
        {

            return redirect()->route('reguser.projectindex')->with('delete', 'You must pay the monthly fee to active your account');
        }

        if ($project->user_id == Auth::user()->id) {
            return redirect()->route('reguser.projectindex')->with('delete', 'You can not submit proposal to your own project');
        }

       foreach ($project->proposals as $key => $projectvalue) {
           if($projectvalue->user_id == Auth::user()->id)
        {
            return back()->with('delete', 'You had already subbmitted a proposal for this project');
        }
       }


    //    if(Auth::user()->status == "active")
    //    {

    //     $type = $project->jobtype;
    //     return view('layouts.regusers.proposal.create',compact('project'));

    //     }

        $type = $project->jobtype;
        return view('layouts.regusers.proposal.create',compact('project'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validateRequest();

        $getproposal = Proposal::where('user_id', $data['user_id'])
                            ->where('project_id', $data['project_id'])
                            ->get();



        if (count($getproposal)>0)
         {

            return redirect()->route('reguser.projectindex')->with('delete', 'You have already subbmitted a proposal for this project');

        }

        else
        {


        $users = User::where('type', 'admin')
                            ->orWhere('type', 'subadmin')
                            ->orWhere('type', 'superadmin')
                            ->get();

                             $ProposalInstance = Proposal::create($data);

        $message = "A New Proposal is Submitted";
        Notification::send($users, new ProposalReview($ProposalInstance, $message));

        return redirect()->route('reguser.projectindex')->with('success', 'Proposal submitted & Send for Review');


        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        //
        if( (Auth::user()->id != $proposal->user_id) && (Auth::user()->id == $proposal->project->user_id) ){

            $data['seen'] = "yes";

            $proposal->update($data);
        }

        $jobInstance = $proposal;
        return view('layouts.regusers.proposal.show', compact('jobInstance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        //
        if($proposal->seen=="yes")
        {
            return back()->with('delete', 'You can not edit proposal because it already seen by buyer');
        }
        $data = $proposal;
        return view('layouts.regusers.proposal.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $proposal)
    {
        //



        $data = $this->validateRequest();



        $data['reviewby'] = null;
        $data['review_time'] = null;
        $data['actionby'] = null;
        $data['action_time'] = null;

        $proposal->update($data);

        $ProposalInstance = Proposal::find($proposal->id);
        $users = User::where('type', 'admin')
            ->orWhere('type', 'subadmin')
            ->orWhere('type', 'superadmin')
            ->get();

            $message = "A old Proposal is Updated";
            Notification::send($users, new ProposalReview($ProposalInstance, $message));

        return redirect()->route('proposals.index')->with('update', 'Data Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //

        $proposal->delete();
        return back()->with('delete', 'Data Deleted');
    }

    private function validateRequest()
    {



            $data = request()->validate([

                'user_id' => 'required',
                'project_id' => 'required',
                'description' => 'required|min:10',
                'amount' => 'required',

            ]);


        return $data;
    }


    public function accept(Proposal $proposal)

    {
        $data['awarded'] = "yes";
        $proposal->update($data);

        $ProposalInstance = Proposal::find($proposal->id);
        $users = User::find($proposal->user_id);


            $message = "!!!Congats" . $users->name . " your proposal is accepted";
            Notification::send($users, new ProposalReview($ProposalInstance, $message));



        $project = Project::find($proposal->project_id);

        $projectdata['proposal'] = "no";

        $project->update($projectdata);

        return back()->with('update', 'Proposal accepted');

    }

    public function requestproposal()
    {

        $projectdetails = Project::where('user_id', Auth::user()->id)
                                    ->where('status', 'active')
                                    ->orderBy('id', 'desc')
                                    ->with('proposals')
                                    ->paginate(20);


        return view('layouts.regusers.proposal.projectproposallist', compact('projectdetails'));



    }
}
