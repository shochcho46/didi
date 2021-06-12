<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    //
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');

    }

    public function regUser(Request $request)
    {
        $sendcode = $request->session()->get('code');
        $getcode = $request->code_confirmation;

        $newmobile = $request->mobile;
        if ($sendcode == $getcode) {

            $current = Carbon::now();
            $trialExpires = $current->addDays(30);
            $pass = $request->password;

            $data = $this->regValidate();

            $data['password'] = Hash::make($pass);
            $data['type'] = "normal";
            $data['lastday'] = $trialExpires;

            $userid = User::create($data)->id;
            // $createUser = User::findOrFail($userid);
            $request->session()->flush();
            // $createUser->notify(new UserReview());
            return redirect()->route('home.login')->with('success', 'registration successful');
        } else {
            $request->session()->flush();
            return redirect()->route('home.signup')->with('fail', 'varification code is wrong.Try again');

        }

    }

    public function regValidate()
    {

        $data = request()->validate([

            'name' => 'required',
            'type' => '',
            'lastday' => '',
            'mobile' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'country' => 'required',

        ]);

        return $data;

    }

}
