<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        return $next($request);
        /*
        if ( Auth::check() && Auth::user()->isAdmin()==true )
        {
            return $next($request);
        }
        return redirect('/');*/
        //return redirect('home')->with('error','You have not admin access');
    }
}
