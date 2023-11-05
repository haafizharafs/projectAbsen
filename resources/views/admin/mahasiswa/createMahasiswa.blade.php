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
                <label for="">Kelas: </label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="a" value="A" checked>
                            <label class="form-check-label" for="a">
                                A
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="b" value="B">
                            <label class="form-check-label" for="b">
                                B
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="c" value="C">
                            <label class="form-check-label" for="c">
                                C
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="d" value="D">
                            <label class="form-check-label" for="d">
                                D
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="ic" value="IC">
                            <label class="form-check-label" for="ic">
                                IC
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mb-3">
                <label for="">Semester: </label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="semester" id="smtSatu" value="1" checked>
                            <label class="form-check-label" for="smtSatu">
                                1
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="semester" id="smtDua" value="2">
                            <label class="form-check-label" for="smtDua">
                                2
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="semester" id="smtTiga" value="3">
                            <label class="form-check-label" for="smtTiga">
                                3
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="semester" id="smtEmpat" value="4">
                            <label class="form-check-label" for="smtEmpat">
                                4
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="semester" id="smtLima" value="5">
                            <label class="form-check-label" for="smtLima">
                                5
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="semester" id="smtEnam" value="6">
                            <label class="form-check-label" for="smtEnam">
                                6
                            </label>
                        </div>
                    </div>
                </div>
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