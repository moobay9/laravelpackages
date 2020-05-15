<?php

namespace Funaffect\LaravelPackages\Http\Middleware;

use Closure;

class AddResponseHeaders
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
        $response = $next($request);

        $response->header('Strict-Transport-Security', 'max-age=15768000; includeSubdomains');
        $response->header('X-Frame-Options', 'SAMEORIGIN');
        $response->header('X-XSS-Protection', '1; mode=block');
        $response->header('X-Content-Type-Options', 'nosniff');
        // $response->header('Content-Security-Policy', "default-src 'self'; script-src 'self' www.google-analytics.com ajax.googleapis.com");
        // $response->header('X-Content-Security-Policy', "default-src 'self'; script-src 'self' www.google-analytics.com ajax.googleapis.com");
        // $response->header('X-Webkit-CSP', "default-src 'self'; script-src 'self' www.google-analytics.com ajax.googleapis.com");

        return $response;
    }
}
