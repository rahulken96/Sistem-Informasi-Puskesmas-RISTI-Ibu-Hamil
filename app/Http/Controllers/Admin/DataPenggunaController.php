<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class DataPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->whereIn('role', ['bidan','kepala'])->orderBy('role')->get();
        return view('admin.data-pengguna', compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-data-pengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaPengguna' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'alamatPengguna' => 'required|string|max:255',
            'umur' => 'required|numeric|min:18|max:100',
            'emailPengguna' => 'required|string|email|max:255|email:rfc,dns',
            'password' => ['required', 'confirmed', 'string' , Rules\Password::defaults(), 'max:20'],
            'jabatan' => 'required',
        ]);

        $role = explode('_', $request->jabatan )[0];

        User::create([
            'nama' => $request->namaPengguna,
            'username' => $request->username,
            'email' => $request->emailPengguna,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamatPengguna,
            'umur' => $request->umur,
            'role' => $role,
        ]);

        return redirect(route('admin.data-pengguna.index'))->with([
            'success' => 'Data Berhasil Ditambah !!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
