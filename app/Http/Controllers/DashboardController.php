<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function admin(){
        return view('admin.dashboard');
    }
    public function dosen(){
        return view('dosen.dashboard');
    }
    public function mahasiswa(){
        // return Auth::user()->id;
        return view('mahasiswa.dashboard');
    }
}
