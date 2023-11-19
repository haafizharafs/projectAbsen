@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT JAM</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateJam', $user->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="namaDosen" class="form-label">Mulai: </label>
                    <input type="text" class="form-control" id="namaDosen" name="nama" value="{{ $user->jam->nama }}">
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Selesai: </label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $user->name }}">
                </div>
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
