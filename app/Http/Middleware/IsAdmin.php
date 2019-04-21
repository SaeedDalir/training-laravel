<?php

namespace App\Http\Middleware;

use App\Role;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user = Auth::user();
            foreach ($user->roles as $role) {
                if ($role->name == "مدیر") {
                    return $next($request);
                }
            }
            return redirect('/home');
        }
        return redirect('/login');

//        Agar column is_admin dar table Users dashtim in monaseb bud
//        if (Auth::check()){
//            $user = Auth::user();
//            if ($user->user_id == 1){
//                return $next($request);
//            }else{return redirect('/home');}
//        }
//        return redirect('/login');

    }
}
