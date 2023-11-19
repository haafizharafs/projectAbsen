@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM CREATE MAHASISWA</h1>
        </div>

        <div class="card-body">
        <form action="{{route('admin.saveMahasiswa')}}" method="post">
        @csrf

            <div class="mb-3">
                <label for="namaMahasiswa" class="form-label">Nama: </label>
                <input type="text" class="form-control" id="namaMahasiswa" name="nama">
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM: </label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select name="semester" id="semester" class="custom-select">
                        <option value="">Pilih</option>
                        @foreach ($data['semester'] as $semester)
                            <option value="{{ $semester->id }}" class="form-control">{{ $semester->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="kelas" class="custom-select">
                        <option value="">Pilih</option>
                        @foreach ($data['kelas'] as $kelas)
                            <option value="{{ $kelas->id }}" class="form-control">{{ $kelas->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="">Jenis Kelamin</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="L" checked>
                            <label class="form-check-label" for="laki">
                                Pria
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P">
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
