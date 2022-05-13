<?php

namespace App\Http\Controllers;

use App\Models\LaporanPasien;
use App\Http\Requests\StoreLaporanPasienRequest;
use App\Http\Requests\UpdateLaporanPasienRequest;

class LaporanPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaporanPasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanPasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanPasien  $laporanPasien
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanPasien $laporanPasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanPasien  $laporanPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanPasien $laporanPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanPasienRequest  $request
     * @param  \App\Models\LaporanPasien  $laporanPasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanPasienRequest $request, LaporanPasien $laporanPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanPasien  $laporanPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanPasien $laporanPasien)
    {
        //
    }
}
