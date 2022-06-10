<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataPasienController as AdminPasien;
use App\Http\Controllers\Bidan\BidanController;
use App\Http\Controllers\Bidan\DataPasienController as BidanPasien;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('admin.tambah-data-pasien');
});
Route::get('/test2', function () {
    return view('admin.tambah-data-pengguna');
});

Route::middleware(['auth'])->group(function () {

    /* Bidan Dashboard Routes */
    Route::prefix('bidan/dashboard')->namespace('Bidan')->name('bidan.')->middleware('role:bidan')->group(function(){
        Route::get('/', [BidanController::class, 'index'])->name('dashboard');
        Route::get('/data-pasien', [BidanPasien::class, 'index'])->name('pasien');

    });

    /* Admin Dashboard Routes */
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('role:admin')->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/data-pengguna', [AdminController::class, 'dataPengguna'])->name('pengguna');
        Route::get('/data-pasien', [AdminPasien::class, 'index'])->name('pasien');

    });

});


require __DIR__.'/auth.php';
