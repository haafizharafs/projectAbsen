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
    public function jadwalSemesterSatu(){
        return view('mahasiswa.jadwalSemesterSatu');
    }
    public function jadwalSemesterTiga(){
        return view('mahasiswa.jadwalSemesterTiga');
    }
    public function jadwalSemesterLima(){
        return view('mahasiswa.jadwalSemesterLima');
    }
    public function rekap(){
        return view('mahasiswa.rekap');
    }
    public function rekapHari(){
        return view('mahasiswa.rekapHari');
    }
    public function rekapMinggu(){
        return view('mahasiswa.rekapMinggu');
    }
    public function rekapSemester(){
        return view('mahasiswa.rekapSemester');
    }
}
