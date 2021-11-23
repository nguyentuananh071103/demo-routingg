<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        if ($request->age < 18){
           return redirect()->back()->flash("error", "Age must be larger then 18");
           Session::flash("error", "Age must be larger then 18");
        }
        return $next($request);
    }
}
