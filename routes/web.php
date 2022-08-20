<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses')->name('proses');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('admin', AdminController::class);
        Route::get('/listmahasiswa', [AdminController::class, 'listmahasiswa'])->name('listmahasiswa');
        Route::get('/mahasiswa/tambah', [AdminController::class, 'createmahasiswa'])->name('mahasiswa.tambah');
        Route::post('/mahasiswa/store', [AdminController::class, 'storemahasiswa'])->name('mahasiswa.store');
        Route::get('/edit/mahasiswa/{id}', [AdminController::class, 'editmahasiswa'])->name('edit.mahasiswa');
        Route::post('/update/mahasiswa/{id}', [AdminController::class, 'updatemahasiswa'])->name('update.mahasiswa');
        Route::resource('jurusan', JurusanController::class);
        Route::resource('angkatan', AngkatanController::class);
        // Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
        // Route::get('/angkatan', [AngkatanController::class, 'index'])->name('angkatan');
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('mahasiswa', MahasiswaController::class);
        Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile/{nim}', [MahasiswaController::class, 'profile'])->name('profile');
    });
} );