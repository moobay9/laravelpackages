<?php

namespace Funaffect\LaravelPackages\Http\Middleware;

use Closure;
use Illuminate\Validation\Concerns\ValidatesAttributes;

class IpAddressInAdminsFilter
{
    use ValidatesAttributes;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->validateIpv4('', $request->ip())) {
            return (collect(config('packages.allow_ips'))->contains($request->ip())) ? $next($request) : abort(404);
        } else if ($this->validateIpv6('', $request->ip())) {
            $ipv6s = config('packages.allow_ipv6s');
            $return = false;
            foreach ($ipv6s as $ipv6) {
                if (strpos($request->ip(), $ipv6) !== false) {
                    $return = true;
                }
            }

            return ($return) ? $next($request) : abort(404);
        } else {
            abort(404);
        }

    }
}
