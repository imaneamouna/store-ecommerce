<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // if i am  in login route he can not redirect me to url login route
                // i mean if i am in session do not resirect me to login route
                if($guard == 'admin')
                return redirect(RouteServiceProvider::ADMIN);
                else
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
