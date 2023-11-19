<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Jam;

class JamController extends Controller
{
    //
    public function listJam()
    {
        $jam = Jam::all();
        return view('admin.jam.listJam')->with('jam', $jam);
    }
    public function saveJam(Request $request)
    {
        Jam::create([
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);
        return redirect()->back();
    }

    public function editJam($id)
    {
        $jam = Jam::where('id', $id)->first();
        return view('admin.jam.editJam', compact('jam'));
    }

    public function updateJam(Request $request, $id)
    {
        $jam = Jam::where('id', $id)->first();
        $jam->mulai = $request->mulai;
        $jam->selesai = $request->selesai;
        $jam->save();
        return redirect()->route('admin.listJam');
    }
    public function deleteJam($id)
    {
        Jam::find($id)->delete();
        return redirect()->back();
    }
}
