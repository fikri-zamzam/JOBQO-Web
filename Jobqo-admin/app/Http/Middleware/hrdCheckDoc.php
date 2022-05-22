<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class hrdCheckDoc
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
        if (auth()->user()->username == NULL && auth()->user()->companies_id == NULL ) {
            return redirect('hrd/check-step-one');
        } else if(auth()->user()->username != NULL && auth()->user()->companies_id == NULL) {
            return redirect('hrd/waiting-room');
        } else if(auth()->user()->username != NULL && auth()->user()->companies_id != NULL) {
            return $next($request);
        }
            
    }
}
