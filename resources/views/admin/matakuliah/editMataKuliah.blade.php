@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT MATA KULIAH</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateMataKuliah', $data['mataKuliah']->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="matkul" class="form-label">Nama Mata Kuliah: </label>
                    <input type="text" class="form-control" id="matkul" name="nama" value="{{ $data['mataKuliah']->nama }}">
                </div>
                {{-- <div class="mb-3">
                    <label for="semester" class="form-label">Semester: </label>
                    <input type="text" class="form-control" id="semester" name="semester"
                        value="{{ $data['mataKuliah']->semester->nama }}">
                </div> --}}
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
