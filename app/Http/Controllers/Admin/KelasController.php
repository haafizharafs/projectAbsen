<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Kelas;

class KelasController extends Controller
{
    //
    public function listKelas()
    {
        $kelas = Kelas::all();
        return view('admin.kelas.listKelas')->with('kelas', $kelas);
    }
    public function saveKelas(Request $request)
    {
        Kelas::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }

    public function editKelas($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        return view('admin.kelas.editKelas', compact('kelas'));
    }

    public function updateKelas(Request $request, $id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $kelas->nama = $request->nama;
        $kelas->save();
        return redirect()->route('admin.listKelas');
    }

    public function deleteKelas($id)
    {
        Kelas::find($id)->delete();
        return redirect()->back();
    }
}
