<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Kelas;

class KelasController extends Controller
{
    //
    public function listKelas(){
        $kelas = Kelas::all();
        return view('admin.kelas.listKelas')->with('kelas', $kelas);
    }
    public function saveKelas(Request $request){
        Kelas::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }
    public function deleteKelas($id){
        Kelas::find($id)->delete();
        return redirect()->back();
    }
}
