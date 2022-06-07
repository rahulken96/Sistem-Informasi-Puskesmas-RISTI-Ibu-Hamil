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
        if ($role == 'admin' && auth()->user()->role != 'admin' ) {
            abort(403, 'Akses ditolak !');
        }
        if ($role == 'bidan' && auth()->user()->role != 'bidan' ) {
            abort(403, 'Akses ditolak !');
        }
        if ($role == 'kepala' && auth()->user()->role != 'kepala' ) {
            abort(403, 'Akses ditolak !');
        }
        return $next($request);
    }
}
