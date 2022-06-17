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
    public function handle(Request $request, Closure $next, string $role)
    {

        if ($role == 'admin' && auth()->user()->role != '1' ) {
            abort(403, 'Akses Ditolak !');
        }
        
        if ($role == 'bidan' && auth()->user()->role != '2' ) {
            abort(403, 'Akses Ditolak !');
        }

        if ($role == 'kepala puskesmas' && auth()->user()->role != '3') {
            abort(403, 'Akses Ditolak !');
        }

        if ($role == 'kepala desa' && auth()->user()->role != '4') {
            abort(403, 'Akses Ditolak !');
        }

        if ($role == 'kepala kecamatan' && auth()->user()->role != '5') {
            abort(403, 'Akses Ditolak !');
        }
        return $next($request);
    }
}
