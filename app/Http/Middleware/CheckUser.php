<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
        if ($request->user() == null) {
            return redirect()->route('login');
        }elseif ($request->user()->hasrole('user') || $request->user()->hasrole('admin')){
            return $next($request);
        }
        return redirect()->route('login');
    }
}
