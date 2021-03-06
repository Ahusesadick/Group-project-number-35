<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            if($request->routeIs('coordinator.*')){
                return route('coordinator.login');
            }

            if($request->routeIs('supervisor.*')){
                return route('supervisor.login');
            }

            if($request->routeIs('orgsupervisor.*')){
                return route('orgsupervisor.login');
            }
            return route('user.login');
        }
    }
}
