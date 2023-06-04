<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$Role): Response
    {
        if(in_array($request->user()?->guard('cekrol')?->aksesrol, $Role)){
            return $next($request);
        }
        return back()->with('errors','please login first');
    }
}
