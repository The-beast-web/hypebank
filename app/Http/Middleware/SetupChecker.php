<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SetupChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user->user_type !== "admin" && $user->setup == "false") {
            return redirect()->route('customer.kyc.setup');
        } elseif ($user->user_type !== "admin" && $user->setup == "pending"){
            return redirect()->route('customer.kyc.pending');
        }
        return $next($request);
    }
}
