<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class DashboardController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function admin(){
        $data['mahasiswa'] = Mahasiswa::all();
        $data['dosen'] = Dosen::all();
        return view('admin.dashboard',compact('data'));
    }
    public function dosen(){
        $data['mahasiswa'] = Mahasiswa::all();
        $data['dosen'] = Dosen::all();
        return view('dosen.dashboard',compact('data'));
    }
    public function mahasiswa(){
        $data['mahasiswa'] = Mahasiswa::all();
        $data['dosen'] = Dosen::all();
        // return Auth::user()->id;
        return view('mahasiswa.dashboard',compact('data'));
    }
}
