<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
          return $request->expectsJson() ? null :  route('get.admin.login');
        //   $Request = Request::all()->get();
     if ($request->expectsJson()) {
        if(Request::is('admin/* ')){
         //if he do not have a seesion return him to login route
         return route('admin.login');

        }else{
            return route('login');
        }


    //     return response()->json(['error' => 'Unauthenticated.'], 401);
     }

    // return redirect()->guest(route('admin.login'));

    }
}
