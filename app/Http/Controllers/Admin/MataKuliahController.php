<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\Semester;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listMataKuliah()
    {
        //
        $data['mataKuliah'] = MataKuliah::all();
        $data['semester'] = Semester::all();
        return view('admin.matakuliah.listMataKuliah', compact('data'));
    }


    public function saveMataKuliah(Request $request)
    {
        //
        $mataKuliah = MataKuliah::create([
            'nama' => $request->nama,
            'semester_id' => $request->semester,
        ]);
        return redirect()->back();
    }


    public function editMataKuliah($id)
    {
        $mataKuliah = MataKuliah::where('id', $id)->first();
        return view('admin.matakuliah.editMataKuliah', compact('mataKuliah'));
    }

    public function updateMataKuliah(Request $request, $id)
    {
        $data['mataKuliah'] = MataKuliah::where('id', $id)->first();
        $data['mataKuliah']->nama = $request->nama;
        $data['mataKuliah']->semester_id = $request->semester;
        $data['mataKuliah']->save();
        return redirect()->route('admin.listMataKuliah');
    }

    public function deleteMataKuliah($id)
    {
        MataKuliah::find($id)->delete();
        return redirect()->back();
    }
}
