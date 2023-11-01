<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;
use App\Models\Dosen;

class DosenController extends Controller
{
    //return tampilan list dosen
    public function listDosen(){
        $data = User::with('dosen')->whereHas('dosen')->get();
        return view('admin.dosen.listDosen', compact('data'));
    }
    //return tampilan pembuatan akun dosen
    public function createDosen(){
        return view('admin.dosen.createDosen');
    }
    public function saveDosen(Request $request){
        //mengisi tabel user berdasarkan inputan form
        $user = new User;
        $user->name = $request->nip;
        $user->password = bcrypt($request->password);
        $user->save();

        //mengisi tabel dosen berdasarkan inputen form
        $dosen = new Dosen;
        $dosen->user_id = $user->id;
        $dosen->nama = $request->nama;
        $dosen->jenis_kelamin = $request->jenisKelamin;
        $dosen->save();

        //mencari tabel user mengambil kolom name yang berisi dosen
        $role = Role::where('name', 'dosen')->first();
        //jadikan user yang sudah dibuat sebagai dosen yang sebelumnya dicari
        $user->addRole($role);
        return redirect()->route('admin.listDosen');
    }
    //menghapus dosen dengan melewatkan id
    public function deleteDosen($id){
        //mencari id dosen yang ingin di delete dan men-deletnya
        User::find($id)->delete();
        //mengembalikan ke halaman yang sama
        return redirect()->back();
    }

    public function editDosen($id){
        $user = User::where('id', $id)->with('dosen')->first();
        return view('admin.dosen.editDosen', compact('user'));
    }
    public function updateDosen(Request $request, $id){
        //mengisi tabel user berdasarkan inputan form
        $user = User::where('id', $id)->first();
        $user->name = $request->nip;
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        } else {
            unset($user->password);
        }
        $user->save();

        //mengisi tabel dosen berdasarkan inputen form
        $dosen = Dosen::where('user_id', $id)->first();
        $dosen->user_id = $user->id;
        $dosen->nama = $request->nama;
        $dosen->jenis_kelamin = $request->jenisKelamin;
        $dosen->save();

        return redirect()->route('admin.listDosen');
    }
}