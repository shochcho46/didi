<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class NotifyController extends Controller
{
    //
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('blacklist');

    }

    public function index(Request $request)
    {
        //
        $user = Auth::user();

        if (($user->type == "admin") || ($user->type == "subadmin") || ($user->type == "superadmin")) {

            $notifydata = $user->notifications()->paginate(20);

            if ($request->ajax()) {
                $view = view('layouts.common.notification.notification', compact('notifydata'))->render();
                return response()->json(['html' => $view]);
            }

            return view('layouts.admins.notification.allnotify', compact('notifydata'));
        }

        if ($user->type == "normal") {

            $notifydata = $user->notifications()->paginate(20);

            if ($request->ajax()) {
                $view = view('layouts.common.notification.notification', compact('notifydata'))->render();
                return response()->json(['html' => $view]);
            }

            return view('layouts.regusers.notification.allnotify', compact('notifydata'));
        }

    }

    public function destroy(DatabaseNotification $notification)
    {
        //dd($notification);

        $notification->delete();
        return back()->with('success', 'Data Deleted');
    }

}
