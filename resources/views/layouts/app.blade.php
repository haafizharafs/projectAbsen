<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{ asset('/') }}/css/style.css" />
    <title>SiHadir</title>
    <link rel="shortcut icon" href="{{ asset('/') }}/images/sihadir.png">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-side" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="{{ asset('/') }}/images/sihadir2.png" alt="" width="45" height="50"> SiHadir

            </div>
            <div class="list-group list-group-flush my-3">

                @guest
                    <h1>Silahkan Login Terlebih Dahulu!</h1>
                @endguest

                @auth
                    @role('admin')
                        <a href="{{ url('/admin/dashboard') }}"
                            class="list-group-item list-group-item-action bg-transparent second-text active"><i
                                class="fas fa-home me-3"></i>Dashboard</a>
                        <a href="{{ url('/admin/pilih') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-user-plus me-3"></i>Buat Akun</a>
                        <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-block"
                            onclick="myAccFunc()"><i class="fas fa-file-alt me-3"></i>
                            Jadwal <i class=" fa fa-caret-down"></i>
                        </button>
                        <div id="demoAcc" class=" d-none   ">
                            <a href="#" class=" d-flex flex-column w3-bar-item w3-button text-white">Jadwal</a>
                            <a href="{{ url('/admin/mata-kuliah') }}"
                                class=" d-flex flex-column w3-bar-item w3-button text-white">Mata Kuliah</a>
                            <a href="{{ url('/admin/kelas') }}"
                                class="d-flex flex-column w3-bar-item w3-button text-white">Kelas</a>
                            <a href="{{ url('/admin/semester') }}"
                                class="d-flex flex-column w3-bar-item w3-button text-white">Semester</a>
                            <a href="{{ url('/admin/hari') }}"
                                class="d-flex flex-column w3-bar-item w3-button text-white">Hari</a>
                            <a href="{{ url('/admin/jam') }}"
                                class="d-flex flex-column w3-bar-item w3-button text-white">Jam</a>
                            <a href="{{ url('/admin/ruang') }}"
                                class="d-flex flex-column w3-bar-item w3-button text-white">Ruang</a>
                        </div>
                        <a href="{{ url('/admin/rekap') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                    @endrole

                    @role('dosen')
                        <a href="{{ url('/dosen/dashboard') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                                class="fas fa-home me-3"></i>Dashboard</a>
                        <a href="{{ url('/dosen/verifikasi') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-check-circle me-3"></i>Verifikasi</a>
                        <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-block"
                            onclick="myAccFunc()"><i class="fas fa-file-alt me-3"></i>
                            Jadwal <i class=" fa fa-caret-down"></i>
                        </button>
                        <div id="demoAcc" class=" d-none   ">
                            <a href="#" class=" d-flex flex-column w3-bar-item w3-button">Jadwal</a>
                            <a href="#" class="d-flex flex-column w3-bar-item w3-button">Kelas</a>
                            <a href="#" class="d-flex flex-column w3-bar-item w3-button">Semester</a>
                            <a href="#" class="d-flex flex-column w3-bar-item w3-button">Hari</a>
                            <a href="#" class="d-flex flex-column w3-bar-item w3-button">Jam</a>

                        </div>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                    @endrole

                    @role('mahasiswa')
                        <a href="{{ url('/mahasiswa/dashboard') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                                class="fas fa-home me-3"></i>Dashboard</a>
                        <a href="{{ url('/mahasiswa/presensi') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-list-alt me-3"></i>Presensi</a>
                        <a href="{{ url('/mahasiswa/jadwal') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-file-alt me-3"></i> Jadwal</a>
                        <a href="{{ url('/mahasiswa/rekap') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                    @endrole

                    <!--form untuk logout-->
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                    </form>
                    <!--tombol logout yang mengakses form logout-->
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>Logout</a>
                @endauth

            </div>
        </div>



        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    @role('admin')
                        <h2 class="fs-2 m-0">Dashboard Admin</h2>
                    @endrole

                    @role('dosen')
                        <h2 class="fs-2 m-0">Dashboard Dosen</h2>
                    @endrole

                    @role('mahasiswa')
                        <h2 class="fs-2 m-0">Dashboard Mahasiswa</h2>
                    @endrole

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @guest
                                    <i class="fas fa-user me-2"></i>Belum Login
                                @endguest

                                @auth
                                    @role('admin')
                                        <i class="fas fa-user me-2"></i>&nbsp &nbsp &nbsp &nbsp &nbsp{{ Auth::user()->name }}
                                    @endrole

                                    @role('dosen')
                                        <i class="fas fa-user me-2"></i>&nbsp &nbsp &nbsp &nbsp
                                        &nbsp{{ Auth::user()->dosen->nama }}
                                    @endrole

                                    @role('mahasiswa')
                                        <i class="fas fa-user me-2"></i>&nbsp{{ Auth::user()->mahasiswa->nama }}
                                    @endrole
                                @endauth
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <section>
                @yield('content')

            </section>



        </div>

    </div>

    <!-- /#page-content-wrapper -->



    <script src="{{ asset('/') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>

    {{-- toogle --}}
    <script>
        function myAccFunc() {
            var x = document.getElementById("demoAcc");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-green", "");
            }
        }

        function myDropFunc() {
            var x = document.getElementById("demoDrop");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-green", "");
            }
        }
    </script>

</body>

</html>
