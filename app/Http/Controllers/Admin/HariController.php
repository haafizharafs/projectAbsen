<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{

    public function listHari()
    {
        $hari = Hari::all();
        return view('admin.hari.listHari')->with('hari', $hari);
    }

    public function saveHari(Request $request)
    {
        Hari::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }

    public function editHari($id)
    {
        $hari = Hari::where('id', $id)->first();
        return view('admin.hari.editHari', compact('hari'));
    }

    public function updateHari(Request $request, $id)
    {
        $hari = Hari::where('id', $id)->first();
        $hari->nama = $request->nama;
        $hari->save();
        return redirect()->route('admin.listHari');
    }

    public function deleteHari($id)
    {
        Hari::find($id)->delete();
        return redirect()->back();
    }
}
