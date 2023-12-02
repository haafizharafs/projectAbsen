<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function verifikasi()
    {
        return view('dosen.verifikasi');
    }
    public function jadwal()
    {
        return view('dosen.jadwal');
    }
    public function jadwalSemesterSatu()
    {
        return view('dosen.jadwalSemesterSatu');
    }
    public function jadwalSemesterTiga()
    {
        return view('dosen.jadwalSemesterTiga');
    }
    public function jadwalSemesterLima()
    {
        return view('dosen.jadwalSemesterLima');
    }
    public function rekap()
    {
        return view('dosen.rekap');
    }
    public function rekapHari()
    {
        return view('dosen.rekapHari');
    }
    public function rekapMinggu()
    {
        return view('dosen.rekapMinggu');
    }
    public function rekapSemester()
    {
        return view('dosen.rekapSemester');
    }
}
