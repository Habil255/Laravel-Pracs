<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
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
        // return $next($request);

        if(auth()->user()->role=='Admin'){
            return $next($request);
        }
        return redirect('home')->with('error', "You're not an Admin");
        // if(!Auth::check()){
        //     return redirect()->route('login');
        // }
        // if(!Auth::user()->role == 'student'){
        //     return redirect()->route('student');
        // }
        // if(!Auth::user()->role == 'staff'){
        //     return redirect()->route('staff');
        // }
       

    }
}
