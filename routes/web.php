<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });

Route::get('/masuk', [UserController::class, 'index'])->middleware('guest');
Route::post('/masuk', [UserController::class, 'masuk'])->middleware('guest')->name('masuk');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

/* Admin */
Route::get('/admin', function () { return view('admin.index'); });

/* Bidan */
Route::get('/bidan', function () { return view('bidan.index'); })->middleware('role:bidan');

/* Kepala */
// Route::get('/bidan', function () { return view('admin'); })->middleware('checkRole:admin');
