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
        // $roles = array_slice(func_get_args(),2);
        // $user = Auth::user();

        // foreach ($roles as $jabatan) {
        //     $user = Auth::user()->jabatan;
        //     if( $user == $jabatan){
        //         return $next($request);
        //     }
        // }

        if (auth()->user()->jabatan == 'admin') {
            return $next($request);
        }
        if (auth()->user()->jabatan == 'bidan') {
            return $next($request);
        }
        // else if (auth()->user()->jabatan == 'kepala') {
        //     return $next($request);
        // }

        // return redirect('/masuk')->with('error','Kamu tidak mempunyai akses masuk !');
        abort(403);
    }
}
