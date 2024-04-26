<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Middleware1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->input('token');
        if ($token === '12345') {
            return $next($request);
        } else {
            return response()->json(['message' => 'Token salah maseh'], 403);
        }
    }
}
