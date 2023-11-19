@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT Hari</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateHari', $hari->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="day" class="form-label">Hari: </label>
                    <input type="text" class="form-control" id="day" name="nama" value="{{ $hari->nama }}">
                </div>
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
