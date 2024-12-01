<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and if they are an admin
        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->isAdmin()) {
            return $next($request);
        }

        // If the user is not an admin, redirect them or abort with an error
        return redirect()->route('home')->with('error', 'Access denied.');
    }
}