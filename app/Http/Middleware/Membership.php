<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Membership
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
        // return response()->view('member');
        return $next($request);
    }
}
