<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    //
    public function listRuang(){
        $ruang = Ruang::all();
        return view('admin.ruang.listRuang')->with('ruang', $ruang);
    }
    public function saveRuang(Request $request){
        Ruang::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }
    public function deleteRuang($id){
        Ruang::find($id)->delete();
        return redirect()->back();
    }
}
