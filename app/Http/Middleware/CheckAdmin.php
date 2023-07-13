<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //dd(request()->routeIs('admin.*'));

        $user = Auth::user();
        if ($user->user_type !== "admin" && $request->routeIs('admin.*') ) {
            return redirect()->route('customer.dashboard');
        }

        return $next($request);
    }
}
