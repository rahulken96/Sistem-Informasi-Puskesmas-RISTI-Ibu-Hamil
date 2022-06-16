<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == '1') {
            return redirect()->intended('admin/dashboard');
        }
        elseif(auth()->user()->role == '2'){
            return redirect()->intended('bidan/dashboard');
        }
        elseif(auth()->user()->role == '3' || auth()->user()->role == '4' || auth()->user()->role == '5'){
            return redirect()->intended('kepala/dashboard');
        }
        else{
            return auth()->logout();
        }
    }
}
