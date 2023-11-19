<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\JamController;
use App\Http\Controllers\Admin\MataKuliahController;
use App\Http\Controllers\Admin\HariController;

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
Route::get('/home', function () {
    if (Auth::user()->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::user()->hasRole('dosen')) {
        return redirect()->route('dosen.dashboard');
    } else {
        return redirect()->route('mahasiswa.dashboard');
    }
});

//middleware prefix admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    //enter dashboard
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin.dashboard');

    //DOSEN
    //enter list dosen
    Route::get('/pilih/dosen', [App\Http\Controllers\Admin\DosenController::class, 'listDosen'])->name('admin.listDosen');
    //enter create dosen
    Route::get('/pilih/dosen/buat', [App\Http\Controllers\Admin\DosenController::class, 'createDosen'])->name('admin.createDosen');
    //create dosen
    Route::post('/pilih/dosen/simpan', [App\Http\Controllers\Admin\DosenController::class, 'saveDosen'])->name('admin.saveDosen');
    //delete dosen
    Route::post('pilih/dosen/hapus/{id}', [App\Http\Controllers\Admin\DosenController::class, 'deleteDosen'])->name('admin.deleteDosen');
    //edit dosen
    Route::get('pilih/dosen/edit/{id}', [App\Http\Controllers\Admin\DosenController::class, 'editDosen'])->name('admin.editDosen');
    //update dosen
    Route::post('pilih/dosen/update/{id}', [App\Http\Controllers\Admin\DosenController::class, 'updateDosen'])->name('admin.updateDosen');

    //MAHASISWA
    //enter list mahasiswa
    Route::get('/pilih/mahasiswa', [App\Http\Controllers\Admin\MahasiswaController::class, 'listMahasiswa'])->name('admin.listMahasiswa');
    //enter create mahasiswa
    Route::get('/pilih/mahasiswa/buat', [App\Http\Controllers\Admin\MahasiswaController::class, 'createMahasiswa'])->name('admin.createMahasiswa');
    //create mahasiswa
    Route::post('/pilih/mahasiswa/simpan', [App\Http\Controllers\Admin\MahasiswaController::class, 'saveMahasiswa'])->name('admin.saveMahasiswa');
    //delete mahasiswa
    Route::post('pilih/mahasiswa/hapus/{id}', [App\Http\Controllers\Admin\MahasiswaController::class, 'deleteMahasiswa'])->name('admin.deleteMahasiswa');
    //edit mahasiswa
    Route::get('pilih/mahasiswa/edit/{id}', [App\Http\Controllers\Admin\MahasiswaController::class, 'editMahasiswa'])->name('admin.editMahasiswa');
    //update mahasiswa
    Route::post('pilih/mahasiswa/update/{id}', [App\Http\Controllers\Admin\MahasiswaController::class, 'updateMahasiswa'])->name('admin.updateMahasiswa');

    //KELAS
    Route::get('/kelas', [KelasController::class, 'listKelas'])->name('admin.listKelas');
    Route::post('/kelas/simpan', [KelasController::class, 'saveKelas'])->name('admin.saveKelas');
    Route::post('/kelas/hapus{id}', [KelasController::class, 'deleteKelas'])->name('admin.deleteKelas');

    //SEMESTER
    Route::get('/semester', [SemesterController::class, 'listSemester'])->name('admin.listSemester');
    Route::post('/semester/simpan', [SemesterController::class, 'saveSemester'])->name('admin.saveSemester');
    Route::post('/semester/hapus{id}', [SemesterController::class, 'deleteSemester'])->name('admin.deleteSemester');

    //JAM
    Route::get('/jam', [JamController::class, 'listJam'])->name('admin.listJam');
    Route::post('/jam/simpan', [JamController::class, 'saveJam'])->name('admin.saveJam');
    Route::post('/jam/hapus{id}', [JamController::class, 'deleteJam'])->name('admin.deleteJam');

    //MATA KULIAH
    Route::get('/mata-kuliah', [MataKuliahController::class, 'listMataKuliah'])->name('admin.listMataKuliah');
    Route::post('/mata-kuliah/simpan', [MataKuliahController::class, 'saveMataKuliah'])->name('admin.saveMataKuliah');
    Route::post('/mata-kuliah/hapus{id}', [MataKuliahController::class, 'deleteMataKuliah'])->name('admin.deleteMataKuliah');

    //HARI
    Route::get('/hari', [HariController::class, 'listHari'])->name('admin.listHari');
    Route::post('/hari/simpan', [HariController::class, 'saveHari'])->name('admin.saveHari');
    Route::post('/hari/hapus{id}', [HariController::class, 'deleteHari'])->name('admin.deleteHari');
});

//middleware prefix dosen
Route::middleware(['auth', 'role:dosen'])->prefix('dosen')->group(function () {
    //enter dashboard
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dosen'])->name('dosen.dashboard');
});

//middleware prefix mahasiswa
Route::middleware(['auth', 'role:mahasiswa'])->prefix('mahasiswa')->group(function () {
    //enter dashboard
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'mahasiswa'])->name('mahasiswa.dashboard');
});
