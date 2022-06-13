<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataPasienController as AdminPasien;
use App\Http\Controllers\Admin\DataPenggunaController;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\Bidan\BidanController;
use App\Http\Controllers\Bidan\DataPasienController as BidanPasien;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    $user = User::where('umur', '24')->get();
    foreach ($user as $key => $value) {
        $value[$value->id];
    }
    // getRoles($user);
    return getRoles($value->role);
});
Route::get('/test2', function () {
    return view('admin.tambah-data-pengguna');
});

Route::middleware(['auth'])->group(function () {

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, 'home']);

    /* Bidan Dashboard Routes */
    Route::prefix('bidan/dashboard')->name('bidan.')->middleware('role:bidan')->group(function(){
        Route::get('/', [BidanController::class, 'index'])->name('dashboard');
        Route::get('/data-pasien', [BidanPasien::class, 'index'])->name('pasien');

    });

    /* Admin Dashboard Routes */
    Route::prefix('admin/dashboard')->name('admin.')->middleware('role:admin')->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        /* Data Pengguna */
        Route::resource('data-pengguna', DataPenggunaController::class);

        Route::get('/data-pasien', [AdminPasien::class, 'index'])->name('pasien');

    });

});


require __DIR__.'/auth.php';
