<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        // $jabatan = array_slice(func_get_args(),2);
        // // $user = Auth::user();

        // foreach ($jabatan as $role) {
        //     $user = Auth::user()->role;
        //     if( $user == $role){
        // return $next($request);
        //     }
        // }

        return redirect(RouteServiceProvider::HOME);
    }
}
