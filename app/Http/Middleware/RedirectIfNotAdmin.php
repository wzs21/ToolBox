<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;


class RedirectIfNotAdmin
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
        $current_user = $request->user();
        if($current_user == null)
        {
            return view('errors.restricted',compact('current_user'));
            //return "hye";
        }
        else
        {
            if(!$current_user->is_admin)
            {
                return view('errors.restricted',compact('current_user'));
            }
        }
        return $next($request);
    }
}
