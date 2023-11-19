@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT JAM</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateJam', $jam->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="jamMulai" class="form-label">Mulai: </label>
                    <input type="text" class="form-control" id="jamMulai" name="mulai" value="{{ $jam->mulai }}">
                </div>
                <div class="mb-3">
                    <label for="jamSelesai" class="form-label">Selesai: </label>
                    <input type="text" class="form-control" id="jamSelesai" name="selesai" value="{{ $jam->selesai }}">
                </div>
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
