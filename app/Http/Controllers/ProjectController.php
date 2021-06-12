<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Submenu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\ProjectReview;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
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
        //

        $projectdetails = Project::where('user_id', Auth::user()->id)
                                    ->where('status', 'active')
                                    ->orderBy('id', 'desc')
                                    ->paginate(20);

        return view('layouts.regusers.project.list', compact('projectdetails'));
    }


    public function disableindex()
    {
        //

        $projectdetails = Project::where('user_id', Auth::user()->id)
                                    ->where('status', 'disable')
                                    ->orderBy('id', 'desc')
                                    ->paginate(20);

        return view('layouts.regusers.project.disablelist', compact('projectdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.regusers.project.create');

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
        $current = Carbon::parse($request->startdate);
        $dateEnd = $current->addDays(30);

        $data = $this->validateRequest();
        $data['enddate'] = $dateEnd;



        $ProjectInstance = Project::create($data);

        $users = User::where('type', 'admin')
            ->orWhere('type', 'subadmin')
            ->orWhere('type', 'superadmin')
            ->get();

        $message = "A New Project is Created";
        Notification::send($users, new ProjectReview($ProjectInstance, $message));


        return back()->with('success', 'Project Submit Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        // $jobInstance = User::find($project->user_id);
        $value = $project;
        $jobInstance = $project;
        return view('layouts.regusers.project.show', compact('value', 'jobInstance'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $data = $project;
        return view('layouts.regusers.project.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $current = Carbon::parse($request->startdate);

        $dateEnd = $current->addDays(30);

        $data = $this->validateRequest();
        $data['enddate'] = $dateEnd;

        $data['reviewby'] = null;
        $data['review_time'] = null;
        $data['actionby'] = null;
        $data['action_time'] = null;
        $data['status'] = "inactive";

        $project->update($data);

        $ProjectInstance = Project::find($project->id);

        $users = User::where('type', 'admin')
        ->orWhere('type', 'subadmin')
        ->orWhere('type', 'superadmin')
        ->get();

        $message = "A old Project is Updated";
        Notification::send($users, new ProjectReview($ProjectInstance, $message));


        return redirect()->route('projects.index')->with('update', 'Data Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return back()->with('delete', 'Data Deleted');
    }

    public function getSubMenu($mainmenu_id)
    {
        $data = Submenu::orderby("serial", "asc")

            ->where('mainmenu_id', $mainmenu_id)
            ->get();

        return response()->json(['data' => $data]);
    }

    public function validateRequest()
    {

        $data = request()->validate([

            'user_id' => 'required',
            'mainmenu_id' => 'required',
            'submenu_id' => 'required',
            'heading' => 'required',
            'description' => 'required',
            'jobtype' => 'required',
            'startdate' => 'required',
            'amount' => 'required',
            'skill_name' => 'required',

        ]);

        return $data;

    }



    public function disable(Project $project)
    {

        $data['status'] = "disable";
        $project->update($data);
        return back()->with('delete', 'Project is Disable');

    }


    public function enable(Project $project)
    {

        $data['status'] = "active";
       
        
        $project->update($data);

        return back()->with('update', 'Project is Enable');

    }

    public function proposaloff(Project $project)
    {

        $data['proposal'] = "no";
        $project->update($data);
        return back()->with('delete', 'Proposal submission is disable for this project');

    }

    public function proposalon(Project $project)
    {

        $data['proposal'] = "yes";
        $project->update($data);
        return back()->with('update', 'Proposal submission is enable for this project');

    }

    public function allproposal(Project $project)
    {
        $jobInstance = $project;

        return view('layouts.regusers.project.proposallist', compact('jobInstance'));

    }

    public function pinproject(Project $project)
    {
        return view('layouts.regusers.project.projectpin', compact('project'));
    }

    public function pincategory (Request $request, Project $project)

    {
        $data = $this->validateRequestpincategory();
        $store['pintocategory'] = "yes";

        if(empty($project->pindatecategory))
        {
            $current = Carbon::now();
            $pincategorydate = $current->addDays($data['pindatecategory'] );
            $store['pindatecategory'] = $pincategorydate;
            $project->update($store);

            return back()->with('update', 'Project pin to Category page');

        }

        else
        {



        $pindate = Carbon::create($project->pindatecategory);
        $currentdate = Carbon::now();

        $result = $currentdate->gt($pindate);

            if($result)
            {
                $pincategorydate = $currentdate->addDays($data['pindatecategory'] );
                $store['pindatecategory'] = $pincategorydate;

                $project->update($store);

                return back()->with('update', 'Project pin to Category page');
            }

            else
            {

                $pincategorydate = $pindate->addDays($data['pindatecategory'] );
                $store['pindatecategory'] = $pincategorydate;

                $project->update($store);

                return back()->with('update', 'Project pin to Category page');

            }


        }

    }

    public function pinhome (Request $request, Project $project)

    {

        $data = $this->validateRequestpinhome();
        $store['pintohome'] = "yes";


        if(empty($project->pindatehome))
        {
            $current = Carbon::now();
            $pinhome = $current->addDays($data['pindatehome'] );
            $store['pindatehome'] = $pinhome;
            $project->update($store);

            return back()->with('update', 'Project pin to Home page');

        }

        else
        {
            $pindate = Carbon::create($project->pindatehome);
            $currentdate = Carbon::now();

            $result = $currentdate->gt($pindate);

            if($result)
            {
                $pinhome = $currentdate->addDays($data['pindatehome'] );
                $store['pindatehome'] = $pinhome;

                $project->update($store);

                return back()->with('update', 'Project pin to Home page');
            }


            else
            {

                $pinhome = $pindate->addDays($data['pindatehome'] );
                $store['pindatehome'] = $pinhome;

                $project->update($store);

                return back()->with('update', 'Project pin to Home page');

            }



        }


    }


    public function validateRequestpinhome()
    {

        $data = request()->validate([

            'pindatehome' => 'required',

        ]);

        return $data;

    }

    public function validateRequestpincategory()
    {

        $data = request()->validate([

            'pindatecategory' => 'required',

        ]);

        return $data;

    }

}
