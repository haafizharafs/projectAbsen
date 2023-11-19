<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listHari()
    {
        $hari = Hari::all();
        return view('admin.hari.listHari')->with('hari', $hari);
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
    public function saveHari(Request $request)
    {
        Hari::create([
            'nama' => $request->nama,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Hari $hari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editHari(Hari $hari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hari $hari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteHari($id)
    {
        Hari::find($id)->delete();
        return redirect()->back();
    }
}
