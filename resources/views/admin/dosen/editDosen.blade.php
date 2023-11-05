@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT DOSEN</h1>
        </div>

        <div class="card-body">
        <form action="{{route('admin.updateDosen', $user->id)}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="namaDosen" class="form-label">Nama: </label>
                <input type="text" class="form-control" id="namaDosen" name="nama" value="{{$user->dosen->nama}}">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP: </label>
                <input type="text" class="form-control" id="nip" name="nip" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" class="form-control" id="password" name="password">
                <small>*kosongkan jika tidak ingin mengubah password</small>
            </div>
            <div class="mb-3">
                <label for="">Jenis Kelamin</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="L" @if($user->dosen->jenis_kelamin == 'L') checked @endif>
                            <label class="form-check-label" for="laki">
                                Pria
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P" @if($user->dosen->jenis_kelamin == 'P') checked @endif>
                            <label class="form-check-label" for="perempuan">
                                Wanita
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn2">Submit</button>
        </form>
        </div>
    </div>
@endsection