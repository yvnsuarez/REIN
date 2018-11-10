<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        switch ($request) 
        {
            case 'admin':
            if (Auth::guard($guard)->check()) {
                return route('admin.login');
            } break;

            case 'partner':
            if (Auth::guard($guard)->check()) {
                return route('partner.login');
            } break;

        }
       // return route('/');
    }
}
