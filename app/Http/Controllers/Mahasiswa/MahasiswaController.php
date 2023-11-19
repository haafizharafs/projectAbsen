<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function presensi(){
        return view('mahasiswa.presensi');
    }
    public function jadwal(){
        return view('mahasiswa.jadwal');
    }
    public function rekap(){
        return view('mahasiswa.rekap');
    }
}
