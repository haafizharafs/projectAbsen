@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT KELAS</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateKelas', $kelas->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="day" class="form-label">Kelas: </label>
                    <input type="text" class="form-control" id="day" name="nama" value="{{ $kelas->nama }}">
                </div>
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
