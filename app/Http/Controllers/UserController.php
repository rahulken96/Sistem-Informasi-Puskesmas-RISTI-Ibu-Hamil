<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }

    public function masuk(Request $request)
    {
        return $request->all();

        $credentials = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors('Login Gagal !!');
        // if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
        //     if (auth()->user()->is_admin == 1) {
        //         return redirect()->route('admin.home');
        //     }else{
        //         return redirect()->route('home');
        //     }
        // }else{
        //     return redirect()->route('login')
        //         ->with('error','Email-Address And Password Are Wrong.');
        // }
    }
}
