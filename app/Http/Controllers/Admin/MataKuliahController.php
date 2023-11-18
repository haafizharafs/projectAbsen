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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveMataKuliah(Request $request)
    {
        //
        $mataKuliah = MataKuliah::create([
            'nama' => $request->nama,
            'semester_id' => $request->semester,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteMataKuliah($id)
    {
        MataKuliah::find($id)->delete();
        return redirect()->back();
    }
}
