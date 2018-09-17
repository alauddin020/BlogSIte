<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Closure;

class LockControl
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
        if ($request->session()->has('locked')===true) {
            return Redirect::to('/AwOHc9PSIsIm1hYyI6IjY0YWE4ZDNhNDI0NzFjZTEyZDQ3MWM3OeyJpdiI6Im40bm1qcXBVRXVtbjRNaTZLNmc5R0E9PSIsInZhbHVlIjoiUlZNUG1wTnlhN2hcLzFOUkFNaXAwOHc9PSIsIm1hYyI6IjY0YWE4ZDNhNDI0NzFjZTEyZDQ3MWM3OTBmZjI3ZWU5Y2IxNzI5OWMzMDJjZDA5ZmE0NmVlYmM4ZDE4NzlhNzUifQ==') ;
        }
        return $next($request);
    }
}
