@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT RUANG</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateRuang', $ruang->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="ruangan" class="form-label">Ruangan: </label>
                    <input type="text" class="form-control" id="ruangan" name="nama" value="{{ $ruang->nama }}">
                </div>
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
