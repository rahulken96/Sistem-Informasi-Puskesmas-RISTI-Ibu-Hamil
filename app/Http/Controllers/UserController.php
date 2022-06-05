<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        // $this->validate([
        //     'username' => 'required|string|max:255',
        //     'password' => 'required|string|min:8',
        // ]);

        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|alpha_num|min:8',
        ]);

        $credentials = array(
            'username'  => $request->get('username'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($credentials)) {
            $request->authenticate();

            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->with('fail', 'Login Gagal !!');
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
