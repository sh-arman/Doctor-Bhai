<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Patient
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
         if(!Auth::user()->isPatient)
         {
           return redirect()->back();
         }
         return $next($request);
     }
}
