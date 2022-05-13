<?php

namespace App\Http\Controllers;

use App\Models\PerawatanPasien;
use App\Http\Requests\StorePerawatanPasienRequest;
use App\Http\Requests\UpdatePerawatanPasienRequest;

class PerawatanPasienController extends Controller
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
     * @param  \App\Http\Requests\StorePerawatanPasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerawatanPasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerawatanPasien  $perawatanPasien
     * @return \Illuminate\Http\Response
     */
    public function show(PerawatanPasien $perawatanPasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerawatanPasien  $perawatanPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(PerawatanPasien $perawatanPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerawatanPasienRequest  $request
     * @param  \App\Models\PerawatanPasien  $perawatanPasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerawatanPasienRequest $request, PerawatanPasien $perawatanPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerawatanPasien  $perawatanPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerawatanPasien $perawatanPasien)
    {
        //
    }
}
