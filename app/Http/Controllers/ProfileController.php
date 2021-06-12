<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\User;
use App\Notifications\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('blacklist');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();

        if (($user->type == "subadmin") || ($user->type == "admin") || ($user->type == "superadmin")) {

            return view('layouts.admins.profile.create', compact('user'));
        }
        if ($user->type == "normal") {

            return view('layouts.regusers.profile.create', compact('user'));

        } else {
            return redirect()->route('logout');
        }

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
        $user = Auth::user();

        $profile = Profile::where('user_id',$user->id)->get();
        $data = $this->validatePersonalRequest();
        $data['user_id'] = $user->id;

        if (count($profile)>0) {

            $upprofile = Profile::where('user_id', $user->id)->first();
            $upprofile->update($data);

            return back()->with('personal', 'Data Update Successful');

        } else {

            Profile::firstOrCreate(
                [
                    'user_id' => $user->id,
                    'email' => $data['email'],
                    'gender' => $data['gender'],
                    'birthday' => $data['birthday'],
                    'address' => $data['address'],

                ]
            );

            return back()->with('personal', 'Data Store Successful');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //

    }

    public function profileshow(User $profile)
    {
        //
        $jobInstance = $profile;
        return view('layouts.regusers.profile.show', compact('jobInstance'));
    }

    public function profilepic(Request $request, User $pic)
    {
        //
        $data = $this->validateRequestPicture();

        if ($request->hasFile('piclocation')) {

            $baseurl = url('/');

            $images = $request->file('piclocation');

            $extension = $images->extension();
            $filename = time() . '.' . $extension;
            $path = $images->storeAs('profile', $filename, 'public');
            $fullpathurl = $baseurl . '/storage/' . $path;

            $data['piclocation'] = $fullpathurl;

            $UserInstance = $pic;
            $users = User::where('type', 'admin')
                ->orWhere('type', 'subadmin')
                ->orWhere('type', 'superadmin')
                ->get();

            $message = "A New Profile pic Updated for Review";

            $data['reviewby'] = null;
            $data['review_time'] = null;
            $data['actionby'] = null;
            $data['action_time'] = null;
            $data['status'] = "inactive";
            $pic->update($data);

            Notification::send($users, new UserReview($UserInstance, $message));


            return back()->with('picupdate', 'Profile picture  Updated');

        } else {
            return back()->with('picerror', 'Profile Picture Upload fail');
        }

    }

    public function validateRequestPicture()
    {
        if (request()->hasFile('piclocation')) {

            $data = request()->validate([

                'piclocation' => 'max:2048|dimensions:max_width=1920,max_height=1080',
            ]);
        }

        return $data;

    }

    public function password(Request $request, User $pass)
    {

        $user = Auth::user();
        $password = $request->oldpassword;
        if (Hash::check($password, $user->password)) {
            $data = $this->validatePassRequest();
            $newpass = $request->password;
            $data['password'] = Hash::make($newpass);
            $data['name'] = $request->name;
            $pass->update($data);

            return back()->with('passchange', 'Password change Successful');
        } else {
            return back()->with('fail', 'Old Password is not correct');
        }

    }

    public function skill(Request $request)
    {
        $user = Auth::user();


        $profile = Profile::where('user_id',$user->id)->get();


        $data = $this->validateSkillRequest();
        $data['user_id'] = $user->id;

        $skill = explode(',', $request->skill_name);

        foreach ($skill as $key => $value) {

            Skill::firstOrCreate(
                [
                    'skill_name' => $value,

                ]
            );

        }

        if (count($profile)>0) {

            $upprofile = Profile::where('user_id', $user->id)->first();

            $UserInstance = User::findOrFail($user->id);

            $users = User::where('type', 'admin')
                ->orWhere('type', 'subadmin')
                ->orWhere('type', 'superadmin')
                ->get();

            $message = "A New Profile skill Updated for Review";

            $userdata['reviewby'] = null;
            $userdata['review_time'] = null;
            $userdata['actionby'] = null;
            $userdata['action_time'] = null;
            $userdata['status'] = "inactive";

            Notification::send($users, new UserReview($UserInstance, $message));

            $UserInstance->update($userdata);

            $upprofile->update($data);

            return back()->with('skill', 'Data Update Successful');

        } else {

            Profile::firstOrCreate(
                [
                    'user_id' => $data['user_id'],
                    'title' => $data['title'],
                    'skill_name' => $data['skill_name'],
                    'description' => $data['description'],

                ]
            );

            $users = User::where('type', 'admin')
            ->orWhere('type', 'subadmin')
            ->orWhere('type', 'superadmin')
            ->get();
            $message = "A New Profile skill Updated for Review";


            $UserInstance = User::findOrFail($user->id);
            Notification::send($users, new UserReview($UserInstance, $message));


            return back()->with('skill', 'Data Store Successful');

        }

    }

    public function validatePassRequest()
    {

        $data = request()->validate([

            'password' => 'required|min:8|confirmed',
            'oldpassword' => 'required|min:8',

        ]);

        return $data;

    }

    public function validatePersonalRequest()
    {
        $user = Auth::user();
        $data = request()->validate([

            'email' => [

                Rule::unique('profiles')->ignore($user->id),
            ],
            'birthday' => 'required',
            'gender' => 'required',
            'address' => 'required|min:8',

        ]);

        return $data;

    }

    public function validateSkillRequest()
    {
        $user = Auth::user();
        $data = request()->validate([

            'title' => 'required',
            'skill_name' => 'required',
            'description' => 'required',

        ]);

        return $data;

    }

    public function usernotification()
    {
        $usefind = Auth::user();

        $UserInstance = User::find($usefind->id);

        $users = User::where('type', 'admin')
            ->orWhere('type', 'subadmin')
            ->orWhere('type', 'superadmin')
            ->get();

        $message = "A New Profile is Created for Review";

        $data['reviewby'] = null;
        $data['review_time'] = null;
        $data['actionby'] = null;
        $data['action_time'] = null;
        $data['status'] = "inactive";

        $UserInstance->update($data);

        Notification::send($users, new UserReview($UserInstance, $message));
        return back();
    }

}
