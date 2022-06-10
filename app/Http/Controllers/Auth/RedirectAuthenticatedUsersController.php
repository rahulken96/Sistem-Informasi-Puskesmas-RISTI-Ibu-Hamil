<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->intended('admin/dashboard');
        }
        elseif(auth()->user()->role == 'bidan'){
            return redirect()->intended('bidan/dashboard');
        }
        elseif(auth()->user()->role == 'kepala'){
            return redirect()->intended('kepala/dashboard');
        }
        else{
            return auth()->logout();
        }
    }
}
