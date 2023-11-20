<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function verifikasi(){
        return view('dosen.verifikasi');
    }
}
