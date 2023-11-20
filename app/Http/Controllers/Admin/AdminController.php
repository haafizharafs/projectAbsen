<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function listPilih(){
        return view('admin.listPilih');
    }
    public function rekap(){
        return view('admin.rekap');
    }
    public function rekapHari(){
        return view('admin.rekapHari');
    }
    public function rekapMinggu(){
        return view('admin.rekapMinggu');
    }
    public function rekapSemester(){
        return view('admin.rekapSemester');
    }
}
