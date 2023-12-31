<!doctype html>
<html lang="en">

<head>
    <title>Mata Kuliah</title>
    <link rel="shortcut icon" href="{{ asset('/') }}/images/sihadir.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="card">
            <div class="card-header">
                <h1>Mata Kuliah</h1>
            </div>

            <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambah">
                    Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Mata Kuliah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.saveMataKuliah') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="namaMataKuliah" class="form-label">Nama Mata Kuliah: </label>
                                        <input type="text" class="form-control" id="namaMataKuliah" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="semester">Semester</label>
                                        <select name="semester" id="semester" class="custom-select">
                                            <option value="">Pilih</option>
                                            @foreach ($data['semester'] as $semester)
                                                <option value="{{ $semester->id }}" class="form-control">
                                                    {{ $semester->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <h1>List Mata Kuliah: </h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['mataKuliah'] as $mataKuliah)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mataKuliah->nama }}</td>
                                <td>{{ $mataKuliah->semester->nama }}</td>

                                <td>
                                    <a href="{{ route('admin.editMataKuliah', $mataKuliah->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete-{{ $mataKuliah->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalDelete-{{ $mataKuliah->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan!!!</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin Ingin Menghapus Mata Kuliah {{ $mataKuliah->nama }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <form action="{{ route('admin.deleteMataKuliah', $mataKuliah->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
