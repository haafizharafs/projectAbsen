@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Mahasiswa</h1>
        </div>

        <div class="card-body">
            <a class="btn btn-primary" href="{{route('admin.createMahasiswa')}}">
                Tambah
            </a>

            <h1>List Mahasiswa: </h1>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->mahasiswa->nama}}</td>
                            <td>{{$d->mahasiswa->kelas->nama}}</td>
                            <td>{{$d->mahasiswa->semester->nama}}</td>
                            <td>
                                @if($d->mahasiswa->jenis_kelamin == 'L')
                                    Laki - Laki
                                @else
                                    Perempuan
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.editMahasiswa', $d->id)}}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete-{{$d->id}}">
                                    <i class="fas fa-trash"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalDelete-{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan!!!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin Ingin Menghapus {{$d->mahasiswa->nama}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{route('admin.deleteMahasiswa', $d->id)}}" method="post">
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
