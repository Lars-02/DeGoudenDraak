<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsCaschier
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->abilities()->contains('*.*') || $request->user()->abilities()->contains('cashier.*'))
            return $next($request);
        return redirect(route('home'));
    }
}
