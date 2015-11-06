<?php

namespace App\Http\Middleware;

use Closure;

class Demo
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
        //check Request class for more detail

        //example jah ni
        if($request->has('foo'))
        {
            return redirect('home');
        }
        

        return $next($request);
    }
}
