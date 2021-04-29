<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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

        if(auth()->user()->roleID == 2){
        //if(session('utype') === 'ADM'){
           return $next($request);
        //}
        }

        return redirect('user/search')->with('error', "you don't have admin");
         //else{
           //  session()->flush();
             //return redirect()->route('login');
         //}
       // return $next($request);
    }
}
