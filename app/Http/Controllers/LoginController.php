<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Helpers\UserSystemInfoHelper;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {

        $contact = $request->mobile;
        $country = $request->country;
        $mobile =  $country.$contact;

        $credentials = array("mobile"=>$mobile, "password"=> $request->password,);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            $getip = UserSystemInfoHelper::get_ip();
            $getbrowser = UserSystemInfoHelper::get_browsers();
            $getdevice = UserSystemInfoHelper::get_device();
            $getos = UserSystemInfoHelper::get_os();

            $data = [
                'user_id' => $user->id,
                'ipaddress' => $getip,
                'browser' => $getbrowser,
                'device' => $getdevice,
                'os' => $getos,
            ];


            if (($user->status == "blacklist")) {
                return back()->with('fail', 'This accout is black listed');;
            }


            if ($user->type == "normal") {

                $date1 = Carbon::create($user->lastday);
                $date2 = Carbon::now();

                $result = $date2->gt($date1);

                if($result)
                {
                    $data['status'] = "disable";
                    $newUser = User::find($user->id);
                    $newUser->update($data);
                }


                return redirect()->route('reguser.index');
            }
            if (($user->type == "superadmin") || ($user->type == "subadmin") || ($user->type == "admin")) {
                return redirect()->route('admin.index');
            }
            else
            {
                return redirect()->route('home.index');
            }
        }
        else{
            return back()->with('fail', 'Wrong credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home.index');
    }
}
