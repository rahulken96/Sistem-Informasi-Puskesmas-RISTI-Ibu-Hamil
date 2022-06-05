<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dataPengguna()
    {
        $user = DB::table('users')->whereIn('role', ['bidan','kepala'])->orderBy('nama')->get();
        return view('admin.data-pengguna', compact('user'));
    }
}
