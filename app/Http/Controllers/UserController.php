<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function masuk()
    {
        return view('login');
    }

    public function handle()
    {
        return 'ss';
    }
}
