<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsDoctor
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
        if(Auth::user()->permissions == 1 || Auth::user()->permissions ==4)
        {
          return $next($request);
        }
        return response()->json(["success"=>'false','message'=>'you have no permissions']);
        
    }
}
