<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Semester;

class MahasiswaController extends Controller
{
    //return tampilan list mahasiswa
    public function listMahasiswa(){
        $data = User::with('mahasiswa')->whereHas('mahasiswa')->get();
        return view('admin.mahasiswa.listMahasiswa', compact('data'));
    }
    //return tampilan pembuatan akun mahasiswa
    public function createMahasiswa(){
        $data['kelas'] = Kelas::all();
        $data['semester'] = Semester::all();
        return view('admin.mahasiswa.createMahasiswa',compact('data'));
    }
    public function saveMahasiswa(Request $request){
        //mengisi tabel user berdasarkan inputan form
        $user = new User;
        $user->name = $request->nim;
        $user->password = bcrypt($request->password);
        $user->save();

        //mengisi tabel mahasiswa berdasarkan inputen form
        $mahasiswa = new Mahasiswa;
        $mahasiswa->user_id = $user->id;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenisKelamin;
        $mahasiswa->kelas_id = $request->kelas;
        $mahasiswa->semester_id = $request->semester;
        $mahasiswa->save();

        //mencari tabel user mengambil kolom name yang berisi mahasiswa
        $role = Role::where('name', 'mahasiswa')->first();
        //jadikan user yang sudah dibuat sebagai mahasiswa yang sebelumnya dicari
        $user->addRole($role);
        return redirect()->route('admin.listMahasiswa');
    }
    //menghapus mahasiswa dengan melewatkan id
    public function deleteMahasiswa($id){
        //mencari id mahasiswa yang ingin di delete dan men-deletnya
        User::find($id)->delete();
        //mengembalikan ke halaman yang sama
        return redirect()->back();
    }

    public function editMahasiswa($id){
        $user['user'] = User::where('id', $id)->with('mahasiswa')->first();
        $user['kelas'] = Kelas::all();
        $user['semester'] = Semester::all();
        return view('admin.mahasiswa.editMahasiswa', compact('user'));
    }
    public function updateMahasiswa(Request $request, $id){
        //mengisi tabel user berdasarkan inputan form
        $user = User::where('id', $id)->first();
        $user->name = $request->nim;
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        } else {
            unset($user->password);
        }
        $user->save();

        //mengisi tabel mahasiswa berdasarkan inputan form
        $mahasiswa = Mahasiswa::where('user_id', $id)->first();
        $mahasiswa->user_id = $user->id;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->kelas_id = $request->kelas;
        $mahasiswa->jenis_kelamin = $request->jenisKelamin;
        $mahasiswa->semester_id = $request->semester;
        $mahasiswa->save();

        return redirect()->route('admin.listMahasiswa');
    }
}
