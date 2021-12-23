<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCode as Middleware;
use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Auth;

class VerifyCode
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard()->check()) {

            if(Auth::user()->email_verified_at == null)
                return redirect(RouteServiceProvider::VERIFIED);
            else
                return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
