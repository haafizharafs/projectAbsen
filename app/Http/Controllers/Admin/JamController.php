<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Jam;

class JamController extends Controller
{
    //
    public function listJam(){
        $jam = Jam::all();
        return view('admin.jam.listJam')->with('jam', $jam);
    }
    public function saveJam(Request $request){
        Jam::create([
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);
        return redirect()->back();
    }
    public function deleteJam($id){
        Jam::find($id)->delete();
        return redirect()->back();
    }
}
