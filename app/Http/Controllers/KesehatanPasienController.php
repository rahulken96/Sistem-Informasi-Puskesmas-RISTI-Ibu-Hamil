<?php

namespace App\Http\Controllers;

use App\Models\KesehatanPasien;
use App\Http\Requests\StoreKesehatanPasienRequest;
use App\Http\Requests\UpdateKesehatanPasienRequest;

class KesehatanPasienController extends Controller
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
     * @param  \App\Http\Requests\StoreKesehatanPasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKesehatanPasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KesehatanPasien  $kesehatanPasien
     * @return \Illuminate\Http\Response
     */
    public function show(KesehatanPasien $kesehatanPasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KesehatanPasien  $kesehatanPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(KesehatanPasien $kesehatanPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKesehatanPasienRequest  $request
     * @param  \App\Models\KesehatanPasien  $kesehatanPasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKesehatanPasienRequest $request, KesehatanPasien $kesehatanPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KesehatanPasien  $kesehatanPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(KesehatanPasien $kesehatanPasien)
    {
        //
    }
}
