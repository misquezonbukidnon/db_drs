<?php

namespace App\Http\Middleware;
use auth;
use Closure;

class CheckRole
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
       if (auth()->check() && auth()->user()->role == 1) {
           return $next($request);
       }
       flash('Oops! Something went wrong. Please Contact Administrator.')->error();
       return back()->withInput();
   }
}
