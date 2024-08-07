<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Illuminate\Contracts\Container\BindingResolutionException
//throw/Illuminate\Contracts\Container\CircularDependencyException
use Symfony\Component\HttpFoundation\Response;

class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_status = ['admin','writer'];
        if(!in_array(auth()->user()->status , $user_status)){
           auth()->logout();
           // Auth::logout();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
