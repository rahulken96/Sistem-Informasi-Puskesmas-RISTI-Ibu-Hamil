<?php

namespace App\Http\Controllers\Kepala;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepalaController extends Controller
{
    public function index()
    {
        return view('kepala.index')->with('success','Anda Berhasil Masuk !');
    }
}
