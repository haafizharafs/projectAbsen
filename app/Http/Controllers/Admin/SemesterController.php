<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Semester;

class SemesterController extends Controller
{
    //
    public function listSemester(){
        $semester = Semester::all();
        return view('admin.semester.listSemester')->with('semester', $semester);
    }
    public function saveSemester(Request $request){
        Semester::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }
    public function deleteSemester($id){
        Semester::find($id)->delete();
        return redirect()->back();
    }
}
