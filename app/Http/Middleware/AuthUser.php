<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthUser
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

        if(auth()->user()->roleID == 1)
        {
           return $next($request);
        }
        return redirect('admin/dashboard')->with('error', "you don't have users");
         
    }
}
