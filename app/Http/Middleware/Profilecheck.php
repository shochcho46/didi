<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class Profilecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user = Auth::user();
        $checkuser = User::find($user->id)->profile;

        if (($user->type == "admin")||($user->type == "superadmin")||($user->type == "subadmin")) {
            return $next($request);
        }
        elseif($user->type == "normal")
        {

            if (empty($checkuser)) {

                return redirect()->route('profiles.create');

            }
            else
            {
                return $next($request);
            }
        }

        else
        {
            return redirect()->route('logout');
        }

    }
}
