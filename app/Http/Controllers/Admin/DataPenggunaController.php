<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
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
    public function index(Request $request)
    {
        if (isset($request->cari)) {
            
            $cari = $request->cari;
            $user = User::where('nama','like',"%".$cari."%")->paginate();

            return view('admin.data-pengguna', compact('user'));
        }

        $user = User::whereIn('role', ['2','3','4','5'])->orderBy('role')->get();
        return view('admin.data-pengguna', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->except('1');
        return view('admin.tambah-data-pengguna',compact('roles'));
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

        User::create([
            'nama' => $request->namaPengguna,
            'username' => $request->username,
            'email' => $request->emailPengguna,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamatPengguna,
            'umur' => $request->umur,
            'role' => $request->jabatan,
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
    public function show($id)
    {
        $roles = Role::all()->except('1');
        $user = User::where('id',$id)->get();
        return view('admin.lihat-data-pengguna', compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all()->except('1');
        $user = User::where('id',$id)->get();
        return view('admin.edit-data-pengguna', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        User::find($id)->update([
            'nama' => $request->namaPengguna,
            'username' => $request->username,
            'email' => $request->emailPengguna,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamatPengguna,
            'umur' => $request->umur,
            'role' => $request->jabatan,
            'remember_token' => $request->_token,
        ]);

        return redirect(route('admin.data-pengguna.index'))->with([
            'success' => 'Data Berhasil Diubah !!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('admin.data-pengguna.index'))->with([
            'success' => 'Data Berhasil Dihapus !!'
        ]);
    }
}
