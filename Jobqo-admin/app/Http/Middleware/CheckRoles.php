<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoles
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
        $roles = array_slice(func_get_args(),2);

        // dd($roles);
        foreach ($roles as $role) {
            // dd($role);
            // ini cuman ngececk apakah roles yang di bawa user sesuai dengan yang ada di database
            $user = Auth::user()->roles;
            if($user == $role) {
                return $next($request);
            }
        }
        return redirect('/login');
    }
}
