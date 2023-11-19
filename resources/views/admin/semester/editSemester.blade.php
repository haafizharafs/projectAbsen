@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>FORM EDIT SEMESTER</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.updateSemester', $semester->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="semesteran" class="form-label">Semester: </label>
                    <input type="text" class="form-control" id="semesteran" name="nama" value="{{ $semester->nama }}">
                </div>
                <button type="submit" class="btn2">Submit</button>
            </form>
        </div>
    </div>
@endsection
