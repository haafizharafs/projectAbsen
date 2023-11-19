<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Semester;

class SemesterController extends Controller
{
    //
    public function listSemester()
    {
        $semester = Semester::all();
        return view('admin.semester.listSemester')->with('semester', $semester);
    }
    public function saveSemester(Request $request)
    {
        Semester::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }

    public function editSemester($id)
    {
        $semester = Semester::where('id', $id)->first();
        return view('admin.semester.editSemester', compact('semester'));
    }

    public function updateSemester(Request $request, $id)
    {
        $semester = Semester::where('id', $id)->first();
        $semester->nama = $request->nama;
        $semester->save();
        return redirect()->route('admin.listSemester');
    }

    public function deleteSemester($id)
    {
        Semester::find($id)->delete();
        return redirect()->back();
    }
}
