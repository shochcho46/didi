<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Gig;
use App\Models\Project;
use App\Models\User;
use App\Models\Proposal;
use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\Mainmenu;

use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RegUserController extends Controller
{
    //
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('blacklist');

    }

    public function index()
    {

        return view('layouts.regusers.home');
    }

    public function dashboard()
    {

        $user = User::find(Auth::user()->id);
        // dd($user->gigs->where('status','inactive')->count() );


        return view('layouts.regusers.dashboard.show',compact('user'));
    }


    public function showAllGig()
    {
        $data = Gig::where('status', 'active')->get();
        return view('layouts.regusers.gig.showgig', compact('data'));
    }


    public function descripGig(Gig $gig)
    {
        $jobInstance = $gig;

        return view('layouts.regusers.gig.show', compact('jobInstance'));
    }

    public function searchGig(Request $request)
    {

        // $ndata = $this->validateRequest();
        $searchobj = $request->gigsearch;

        $data = Gig::where('heading', 'LIKE', '%' . $request->gigsearch . '%')->get();

        // $jobInstance = $gig;

        return view('layouts.regusers.gig.showgig', compact('data'));
    }


    //projects



    public function searchProject(Request $request)
    {

         return redirect()->route('reguser.searchprojectget',  $request->projectsearch);

    }

    public function searchProjectget(Request $request, $search)
    {


        $searchobj = $search;

        $projectdetails = Project::where('heading', 'LIKE', '%' . $searchobj . '%')->paginate(20);

        return view('layouts.regusers.project.home', compact('projectdetails'));




    }

    public function describeProject(Project $project)
    {
        $date1 = Carbon::create($project->enddate);
        $date2 = Carbon::now();

        $result = $date2->gt($date1);
        if(Auth::user()->id !== $project->user_id)
        {
            $project->increment('view',1);
        }

        if($result)
        {
            $data['proposal'] = "no";
            $project->update($data);
        }


        $jobInstance = $project;
        $value = $project;

        return view('layouts.regusers.project.desproject', compact('jobInstance', 'value'));
    }




    public function showAllProject()
    {
        $projectdetailshome = Project::where('pintohome','yes')
                                        ->whereDate('pindatehome','>=', Carbon::now())
                                        ->orderBy('id', 'desc')
                                        ->get();

        $projectdetails = Project::orderBy('id', 'desc')->paginate(20);
        return view('layouts.regusers.project.home', compact('projectdetails','projectdetailshome'));
    }



    public function showMainProject(Mainmenu $mainmenu)
    {
        $projectdetailshome = Project::where('pintocategory','yes')
                                        ->whereDate('pindatecategory','>=', Carbon::now())
                                        ->orderBy('id', 'desc')
                                        ->get();

        $projectdetails = $mainmenu->projects()->orderBy('id', 'desc')->paginate(20);

        $getsubmenu = Submenu::where('mainmenu_id', $mainmenu->id)->get();

        return view('layouts.regusers.project.subhome', compact('projectdetails', 'getsubmenu','projectdetailshome'));
    }

    public function showSubProject(Submenu $submenu)
    {
        $projectdetailshome = array();

        $projectdetails = $submenu->projects()->orderBy('id', 'desc')->paginate(20);

        $getsubmenu = Submenu::where('mainmenu_id', $submenu->mainmenu_id)->get();

        return view('layouts.regusers.project.subhome', compact('projectdetails', 'getsubmenu','projectdetailshome'));
    }



    public function event($eventname, $eventid, $notificationid)
    {
        if ($eventname == "GiG") {

            $this->notificationRead($notificationid);

            return redirect()->route('gigs.show', $eventid);
        }
        if ($eventname == "PROJECT") {

            $this->notificationRead($notificationid);

            return redirect()->route('projects.show', $eventid);
        }
        if ($eventname == "PROPOSAL") {

            $this->notificationRead($notificationid);

            return redirect()->route('proposals.show', $eventid);
        }
        if ($eventname == "PROFILE") {

            $this->notificationRead($notificationid);

            return redirect()->route('profiles.profileshow', $eventid);

        }

    }

    public function notificationRead($notificationid)
    {

        $notification = DatabaseNotification::find($notificationid);
        if ($notification) {

            $notification->markAsRead();

        }
    }
}
