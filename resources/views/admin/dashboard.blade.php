@extends('layouts.app')

@section('content')
@php
    $hitungMahasiswa = count($data['mahasiswa']);
    $hitungDosen = count($data['dosen']);
@endphp
    <div class="container-fluid px-4">
            <!--COUNTER-->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $hitungMahasiswa }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mahasiswa</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $hitungDosen }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dosen</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Kelas</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="4385"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Alumni</p>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <div class="logo">
        <br>
        <img src="{{asset('/')}}/images/LOGO POLNEP (PNG).png" class="mx-auto d-block logo" width="400" height="400">
    </div>

    <div class="container p-5 my-5 bg-white">
        <p>Program Studi D3 Teknik Informatika berada di bawah Jurusan Teknik
            Elektro yang merupakan salah satu unit pelaksana kegiatan pendidikan dan
            pembelajaran vokasional di Politeknik Negeri Pontianak. Adapun sistem
            pendidikan yang digunakan adalah sistem pendidikan tinggi jalur profesional
            yang menekankan pada penguasaan dan pengembangan ilmu pengetahuan dan teknologi
            untuk mendukung era industrialisasi..</p>
    </div>

    <div class="container p-5 my-5 bg-white">
        <p>Website absensi bernama SIHADIR yang digunakan untuk mencatat dan mengolah data kehadiran atau
            presensi mahasiswa dan dosen dalam kegiatan perkuliahan di kelas. <br>
            Aplikasi ini nantinya akan diterapkan untuk menunjang layanan akademik khususnya pemantauan
            kehadiran dalam proses pembelajaran atau perkuliahan di program studi Teknik Informatika
            Politeknik
            Negeri Pontianak.</p>
    </div>
@endsection
