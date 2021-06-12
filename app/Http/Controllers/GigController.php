<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\User;
use App\Notifications\GigReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class GigController extends Controller
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
        $user = Auth::user();

        $data = Gig::where('user_id', $user->id)->get();

        return view('layouts.regusers.gig.list', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.regusers.gig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validateRequest();
        $baseurl = url('/');
        $images = $request->file('piclocation');

        $extension = $images->extension();
        $filename = time() . rand(10, 1000) . '.' . $extension;
        $path = $images->storeAs('gigs', $filename, 'public');
        $fullpathurl = $baseurl . '/storage/' . $path;

        $data['piclocation'] = $fullpathurl;
        $data['user_id'] = Auth::id();

        $GigInstance = Gig::create($data);

        $users = User::where('type', 'admin')
            ->orWhere('type', 'subadmin')
            ->orWhere('type', 'superadmin')
            ->get();

        $message = "A New Gig is Created";
        Notification::send($users, new GigReview($GigInstance, $message));

        return back()->with('success', 'GIG Saved & Send for Review');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function show(Gig $gig)
    {
        $jobInstance = $gig;
        return view('layouts.regusers.gig.show', compact('jobInstance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function edit(Gig $gig)
    {
        //
        $data = $gig;
        return view('layouts.regusers.gig.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gig $gig)
    {
        //

        $data = $this->validateRequest();

        if ($request->hasFile('piclocation')) {

            $baseurl = url('/');
            $images = $request->file('piclocation');

            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('gigs', $filename, 'public');
            $fullpathurl = $baseurl . '/storage/' . $path;
            $data['piclocation'] = $fullpathurl;

        } else {

        }
        $data['reviewby'] = null;
        $data['review_time'] = null;
        $data['actionby'] = null;
        $data['action_time'] = null;

        $gig->update($data);

        $GigInstance = Gig::find($gig->id);
        $users = User::where('type', 'admin')
            ->orWhere('type', 'subadmin')
            ->orWhere('type', 'superadmin')
            ->get();

        $message = "A old Gig is Updated";
        Notification::send($users, new GigReview($GigInstance, $message));
        return redirect()->route('gigs.index')->with('update', 'Data Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gig $gig)
    {
        //
    }

    private function validateRequest()
    {

        if (request()->hasFile('piclocation')) {

            $data = request()->validate([

                'user_id' => '',
                'heading' => 'required|min:5',
                'description' => 'required|min:10',
                'piclocation' => 'max:2048|dimensions:max_width=1920,max_height=1080',
                'amount' => 'required',
                'status' => 'required',
                'serial' => 'required',
            ]);
        } else {
            $data = request()->validate([
                'user_id' => '',
                'heading' => 'required|min:5',
                'description' => 'required|min:10',
                'piclocation' => '',
                'amount' => 'required',
                'status' => 'required',
                'serial' => 'required',
            ]);
        }

        return $data;
    }

    public function active(Request $request, Gig $gig)
    {

        $gig->status = "active";
        $gig->save();
        return back()->with('update', 'Data Updated');
    }

    public function disable(Request $request, Gig $gig)
    {

        $gig->status = "disable";
        $gig->save();
        return back()->with('update', 'Data Updated');
    }

    public function actionView()
    {
        //
        $user = Auth::user();

        $data = Gig::where('user_id', $user->id)->get();
        return view('layouts.regusers.gig.disablelist', compact('data'));

    }

}
