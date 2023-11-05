<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route enter dashboard based on role
Route::get('/home',function(){
    if (Auth::user()->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::user()->hasRole('dosen')) {
        return redirect()->route('dosen.dashboard');
    } else {
        return redirect()->route('mahasiswa.dashboard');
    } 
});

//middleware prefix admin
Route::middleware(['auth','role:admin'])->prefix('admin')->group(function(){
    //enter dashboard
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'admin'])->name('admin.dashboard');

    //DOSEN
    //enter list dosen
    Route::get('/pilih/dosen',[App\Http\Controllers\Admin\DosenController::class, 'listDosen'])->name('admin.listDosen');
    //enter create dosen
    Route::get('/pilih/dosen/buat',[App\Http\Controllers\Admin\DosenController::class, 'createDosen'])->name('admin.createDosen');
    //create dosen
    Route::post('/pilih/dosen/simpan',[App\Http\Controllers\Admin\DosenController::class, 'saveDosen'])->name('admin.saveDosen');
    //delete dosen
    Route::post('pilih/dosen/hapus/{id}',[App\Http\Controllers\Admin\DosenController::class, 'deleteDosen'])->name('admin.deleteDosen');
    //edit dosen
    Route::get('pilih/dosen/edit/{id}',[App\Http\Controllers\Admin\DosenController::class, 'editDosen'])->name('admin.editDosen');
    //update dosen
    Route::post('pilih/dosen/update/{id}',[App\Http\Controllers\Admin\DosenController::class, 'updateDosen'])->name('admin.updateDosen');

    //MAHASISWA
    //enter list mahasiswa
    Route::get('/pilih/mahasiswa',[App\Http\Controllers\Admin\MahasiswaController::class, 'listMahasiswa'])->name('admin.listMahasiswa');
    //enter create mahasiswa
    Route::get('/pilih/mahasiswa/buat',[App\Http\Controllers\Admin\MahasiswaController::class, 'createMahasiswa'])->name('admin.createMahasiswa');
    //create mahasiswa
    Route::post('/pilih/mahasiswa/simpan',[App\Http\Controllers\Admin\MahasiswaController::class, 'saveMahasiswa'])->name('admin.saveMahasiswa');
    //delete mahasiswa
    Route::post('pilih/mahasiswa/hapus/{id}',[App\Http\Controllers\Admin\MahasiswaController::class, 'deleteMahasiswa'])->name('admin.deleteMahasiswa');
    //edit mahasiswa
    Route::get('pilih/mahasiswa/edit/{id}',[App\Http\Controllers\Admin\MahasiswaController::class, 'editMahasiswa'])->name('admin.editMahasiswa');
    //update mahasiswa
    Route::post('pilih/mahasiswa/update/{id}',[App\Http\Controllers\Admin\MahasiswaController::class, 'updateMahasiswa'])->name('admin.updateMahasiswa');
});

//middleware prefix dosen
Route::middleware(['auth','role:dosen'])->prefix('dosen')->group(function(){
    //enter dashboard
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dosen'])->name('dosen.dashboard');
});

//middleware prefix mahasiswa
Route::middleware(['auth','role:mahasiswa'])->prefix('mahasiswa')->group(function(){
    //enter dashboard
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'mahasiswa'])->name('mahasiswa.dashboard');
});