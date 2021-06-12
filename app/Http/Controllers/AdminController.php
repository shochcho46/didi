<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\User;
use App\Models\Project;
use App\Models\Proposal;
use App\Notifications\GigReview;
use App\Notifications\UserReview;
use App\Notifications\ProjectReview;
use App\Notifications\ProposalReview;
use App\Models\Country;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('subadmincheck');
        $this->middleware('blacklist');

    }

    public function index()
    {
        $gigs = new Gig();
        $projects = new Project();
        $proposals = new Proposal();
        $users = new User();

        return view('layouts.admins.home',compact('gigs','projects','proposals','users'));
    }

    public function event($eventname, $eventid, $notificationid)
    {
        if ($eventname == "GiG") {

            $this->notificationRead($notificationid);

            return redirect()->route('admins.gigshow', $eventid);
        }
        if ($eventname == "PROJECT") {

            $this->notificationRead($notificationid);
            return redirect()->route('admins.projectshow', $eventid);
        }
        if ($eventname == "PROPOSAL") {

            $this->notificationRead($notificationid);
            return redirect()->route('admins.proposalshow', $eventid);
        }
        if ($eventname == "PROFILE") {

            $this->notificationRead($notificationid);

            return redirect()->route('admins.profileshow', $eventid);

        }

    }

    public function showGig(Gig $gig)
    {
        if (empty($gig->review_time) || is_null($gig->review_time)) {
            $this->reviewStore($gig);
        }
        $reviewName = User::find($gig->reviewby);
        $actionName = User::find($gig->actionby);
        $NewJobName = "GiG";
        $jobInstance = $gig;

        return view('layouts.admins.gig.show', compact('jobInstance', 'reviewName', 'actionName', 'NewJobName'));
    }

    public function showProfile(User $user)
    {
        if (empty($user->review_time) || is_null($user->review_time)) {
            $this->reviewStore($user);
        }
        $reviewName = User::find($user->reviewby);
        $actionName = User::find($user->actionby);
        $NewJobName = "PROFILE";
        $jobInstance = $user;

        return view('layouts.admins.profile.show', compact('jobInstance', 'reviewName', 'actionName', 'NewJobName'));

    }

    public function showProject(Project $project)
    {
        if (empty($project->review_time) || is_null($project->review_time)) {
            $this->reviewStore($project);
        }
        $reviewName = User::find($project->reviewby);
        $actionName = User::find($project->actionby);
        $NewJobName = "PROJECT";
        $jobInstance = $project;

        return view('layouts.admins.project.show', compact('jobInstance', 'reviewName', 'actionName', 'NewJobName'));

    }


    public function showProposal(Proposal $proposal)
    {
        if (empty($proposal->review_time) || is_null($proposal->review_time)) {
            $this->reviewStore($proposal);
        }
        $reviewName = User::find($proposal->reviewby);
        $actionName = User::find($proposal->actionby);
        $NewJobName = "PROPOSAL";
        $jobInstance = $proposal;

        return view('layouts.admins.proposal.show', compact('jobInstance', 'reviewName', 'actionName', 'NewJobName'));

    }




    public function notificationRead($notificationid)
    {

        $notification = DatabaseNotification::find($notificationid);
        if ($notification) {

            $notification->markAsRead();

        }
    }

    public function reviewStore($reviewstore)
    {

        $data['reviewby'] = Auth::id();
        $data['review_time'] = Carbon::now();
        $reviewstore->update($data);

    }

    public function task($taskname, $taskid, $taskaction)
    {
        $loginUser = Auth::user();

        if ($taskname == "GiG") {

            $object = Gig::findOrFail($taskid);
            if (empty($object->action_time) || is_null($object->action_time)) {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->user->id);

                $message = $object->user->name . " " . ", your GiG is " . $taskaction;
                $notifyUser->notify(new GigReview($object, $message));

                return back()->with('update', 'Data Updated');

            }

            if ($loginUser->type == "superadmin" || $loginUser->type == "admin") {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->user->id);

                $message = $object->user->name . " " . ",your GiG is " . $taskaction;
                $notifyUser->notify(new GigReview($object, $message));

                return back()->with('update', 'Data Updated');

            } else {
                $adminusers = User::where('type', 'admin')
                    ->orWhere('type', 'superadmin')
                    ->get();

                $message = $loginUser->name . " try to reupdate GiG status";
                Notification::send($adminusers, new GigReview($object, $message));

                return back()->with('warning', 'Your are Forcefully Trying to change the Status of GiG. which is already  reviewed. Automatically a notification will send to the Authority. Do not try it again');

            }

        }
        if ($taskname == "PROJECT") {

            $object = Project::findOrFail($taskid);
            if (empty($object->action_time) || is_null($object->action_time)) {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->user->id);

                $message = $object->user->name . " " . ", your PROJECT is " . $taskaction;
                $notifyUser->notify(new ProjectReview($object, $message));

                return back()->with('update', 'Data Updated');

            }

            if ($loginUser->type == "superadmin" || $loginUser->type == "admin") {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->user->id);

                $message = $object->user->name . " " . ",your PROJECT is " . $taskaction;
                $notifyUser->notify(new ProjectReview($object, $message));

                return back()->with('update', 'Data Updated');

            } else {
                $adminusers = User::where('type', 'admin')
                    ->orWhere('type', 'superadmin')
                    ->get();

                $message = $loginUser->name . " try to reupdate PROJECT status";
                Notification::send($adminusers, new ProjectReview($object, $message));

                return back()->with('warning', 'Your are Forcefully Trying to change the Status of PROJECT. which is already  reviewed. Automatically a notification will send to the Authority. Do not try it again');

            }



        }
        if ($taskname == "PROPOSAL") {

            $object = Proposal::findOrFail($taskid);
            if (empty($object->action_time) || is_null($object->action_time)) {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->user->id);

                $message = $object->user->name . " " . ", your PROPOSAL is " . $taskaction;
                $notifyUser->notify(new ProposalReview($object, $message));

                return back()->with('update', 'Data Updated');

            }

            if ($loginUser->type == "superadmin" || $loginUser->type == "admin") {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->user->id);

                $message = $object->user->name . " " . ",your PROPOSAL is " . $taskaction;
                $notifyUser->notify(new ProposalReview($object, $message));

                return back()->with('update', 'Data Updated');

            } else {
                $adminusers = User::where('type', 'admin')
                    ->orWhere('type', 'superadmin')
                    ->get();

                $message = $loginUser->name . " try to reupdate PROPOSAL status";
                Notification::send($adminusers, new ProposalReview($object, $message));

                return back()->with('warning', 'Your are Forcefully Trying to change the Status of PROPOSAL. which is already  reviewed. Automatically a notification will send to the Authority. Do not try it again');

            }




        }
        if ($taskname == "PROFILE") {

            $object = User::findOrFail($taskid);

            if (empty($object->action_time) || is_null($object->action_time)) {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->id);

                $message = $object->name . " " . ", your Profile is " . $taskaction;
                $notifyUser->notify(new UserReview($object, $message));

                return back()->with('update', 'Data Updated');

            }

            if ($loginUser->type == "superadmin" || $loginUser->type == "admin") {

                $this->taskUpdate($object, $taskaction);

                $notifyUser = User::findOrFail($object->id);

                $message = $object->name . " " . ",your Profile is " . $taskaction;
                $notifyUser->notify(new UserReview($object, $message));

                return back()->with('update', 'Data Updated');

            } else {
                $adminusers = User::where('type', 'admin')
                    ->orWhere('type', 'superadmin')
                    ->get();

                $message = $loginUser->name . " try to reupdate Profile status";
                Notification::send($adminusers, new UserReview($object, $message));

                return back()->with('warning', 'Your are Forcefully Trying to change the Status of Profile. which is already  reviewed. Automatically a notification will send to the Authority. Do not try it again');

            }

        }

    }

    public function taskUpdate($taskobject, $taskaction)
    {
        $data['actionby'] = Auth::id();
        $data['action_time'] = Carbon::now();
        $data['status'] = $taskaction;
        $taskobject->update($data);
    }


    public function normaluser($value)
    {
        if($value == "normal")
        {
            $heading = "NORMAL USER LIST";
            $jobInstance = User::where('type',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if($value == "active")
        {
            $heading = "ACTIVE USER LIST";
            $jobInstance = User::where('type','normal')->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if($value == "inactive")
        {

            $heading = "INACTIVE USER LIST";
            $jobInstance = User::where('type','normal')->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if($value == "disable")
        {
            $heading = "DISABLE USER LIST";
            $jobInstance = User::where('type','normal')->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if($value == "blacklist")
        {
            $heading = "BLACKLIST USER LIST";
            $jobInstance = User::where('type','normal')->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }

    }


    public function adminuser($value)
    {
        if($value == "subadmin")
        {
            $heading = "SUBADMIN USER LIST";
            $jobInstance = User::where('type',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if($value == "admin")
        {
            $heading = "ADMIN USER LIST";
            $jobInstance = User::where('type',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if($value == "superadmin")
        {
            $heading = "SUPERADMIN USER LIST";
            $jobInstance = User::where('type',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }

    }


    public function adminlist($type,$value)
    {
        if(($type == "subadmin")&&($value == "active"))
        {
            $heading = "ACTIVE SUBADMIN LIST";
            $jobInstance = User::where('type',$type)->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if(($type == "subadmin")&&($value == "blacklist"))
        {
            $heading = "BLACKLIST SUBADMIN LIST";
            $jobInstance = User::where('type',$type)->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }
        if(($type == "admin")&&($value == "active"))
        {
            $heading = "ACTIVE ADMIN  LIST";
            $jobInstance = User::where('type',$type)->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }

        if(($type == "admin")&&($value == "blacklist"))
        {
            $heading = "BLACKLIST ADMIN  LIST";
            $jobInstance = User::where('type',$type)->where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.user.list', compact('jobInstance','heading'));

        }

    }

    public function adduser()

    {
        $country = Country::all();
        return view('layouts.admins.user.signup',compact('country'));
    }

    public function adduserconfirm(Request $request)

    {

        $name = $request->name;
        $contact = $request->mobile;
        $country = $request->country;
        $mobile = $country . $contact;
        $phone = User::where('mobile',$mobile)->get()->count();
        if($phone>0)
        {

            // return redirect()->route('admin.adduser')->with('fail', 'Mobile number already in use');
            return back()->with('fail', 'Mobile number already in use');
        }

        $callingCode = ltrim($country, '+');
        $countryName = Country::where('phonecode', $callingCode)->get()->first();

            $current = Carbon::now();
            $trialExpires = $current->addDays(30);
            $pass = $request->password;

            $data = $this->regValidate();

            $data['password'] = Hash::make($pass);
            $data['mobile'] =  $mobile;
            $data['country'] =  $countryName->name;
            // $data['status'] =  "active";

            $data['lastday'] = $trialExpires;

           $creteuser =  User::create($data);


            $notifyUser = User::where('type', 'admin')
                            ->orWhere('type', 'superadmin')
                            ->get();

            $message =Auth::user()->name. " created a new User in the system " ;

            Notification::send($notifyUser, new UserReview($creteuser, $message));



            return redirect()->route('admin.adduser')->with('success', 'registration successful');

    }


    public function regValidate()
    {

        $data = request()->validate([

            'name' => 'required',
            'type' => 'required',
            'lastday' => '',
            'mobile' => '',
            'password' => 'required|min:8|confirmed',
            'country' => '',

        ]);

        return $data;

    }

    public function showallproject()
    {
        $projectdetails = Project::orderBy('id', 'desc')
                                ->paginate(20);
        $heading = "PROJECT LIST";
        return view('layouts.admins.project.list', compact('projectdetails','heading'));
    }

    public function projectstatus($value)
    {

        if($value == "active")
        {

            $heading = "ACTIVE PROJECT LIST";
            $projectdetails  = Project::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.project.list', compact('projectdetails','heading'));

        }

        if($value == "inactive")
        {

            $heading = "INACTIVE PROJECT LIST";
            $projectdetails  = Project::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.project.list', compact('projectdetails','heading'));

        }
        if($value == "disable")
        {

            $heading = "DISABLE PROJECT LIST";
            $projectdetails  = Project::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.project.list', compact('projectdetails','heading'));

        }

        if($value == "blacklist")
        {

            $heading = "BLACKLIST PROJECT LIST";
            $projectdetails  = Project::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.project.list', compact('projectdetails','heading'));

        }



    }

    public function showallproposal($value)
    {

        if($value == "all")
        {

            $heading = " PROPOSAL LIST";
            $proposaldetails  = Proposal::orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.proposal.list', compact('proposaldetails','heading'));

        }
        if($value == "active")
        {

            $heading = "ACTIVE PROPOSAL LIST";
            $proposaldetails  = Proposal::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.proposal.list', compact('proposaldetails','heading'));

        }

        if($value == "inactive")
        {

            $heading = "INACTIVE PROPOSAL LIST";
            $proposaldetails  = Proposal::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.proposal.list', compact('proposaldetails','heading'));

        }
        if($value == "disable")
        {

            $heading = "DISABLE PROPOSAL LIST";
            $proposaldetails  = Proposal::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.proposal.list', compact('proposaldetails','heading'));

        }

        if($value == "blacklist")
        {

            $heading = "BLACKLIST PROPOSAL LIST";
            $proposaldetails  = Proposal::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.proposal.list', compact('proposaldetails','heading'));

        }


    }

    public function showallgig($value)
    {

        if($value == "all")
        {

            $heading = " GIG LIST";
            $data  = Gig::orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.gig.list', compact('data','heading'));

        }

        if($value == "active")
        {

            $heading = "ACTIVE GIG LIST";
            $data  = Gig::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.gig.list', compact('data','heading'));

        }

        if($value == "inactive")
        {

            $heading = "INACTIVE GIG LIST";
            $data  = Gig::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.gig.list', compact('data','heading'));

        }
        if($value == "disable")
        {

            $heading = "DISABLE GIG LIST";
            $data  = Gig::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.gig.list', compact('data','heading'));

        }
        if($value == "blacklist")
        {

            $heading = "BLACKLIST GIG LIST";
            $data  = Gig::where('status',$value)->orderBy('id', 'desc')->paginate(20);
            return view('layouts.admins.gig.list', compact('data','heading'));

        }

    }

}
