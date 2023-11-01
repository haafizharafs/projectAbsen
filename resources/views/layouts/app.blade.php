<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{asset('/')}}/css/style.css" />
    <title>SiHadir</title>
    <link rel="shortcut icon" href="{{asset('/')}}/images/sihadir.png">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-side" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="{{asset('/')}}/images/sihadir2.png" alt="" width="45" height="50"> SiHadir

            </div>
            <div class="list-group list-group-flush my-3">

                @guest
                    <h1>Silahkan Login Terlebih Dahulu!</h1>
                @endguest

                @auth
                    @role('admin')
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                            class="fas fa-home me-3"></i>Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-user-plus me-3"></i>Buat Akun</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-file-alt me-3"></i> Jadwal</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                    @endrole

                    @role('dosen')
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                            class="fas fa-home me-3"></i>Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-check-circle me-3"></i>Verifikasi</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-file-alt me-3"></i> Jadwal</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                    @endrole

                    @role('mahasiswa')
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                            class="fas fa-home me-3"></i>Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-list-alt me-3"></i>Presensi</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-file-alt me-3"></i> Jadwal</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                    @endrole

                    <!--form untuk logout-->        
                    <form id="logout-form" action="{{route('logout')}}" method="post">
                        @csrf
                    </form>
                    <!--tombol logout yang mengakses form logout-->
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
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
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @guest
                                    <i class="fas fa-user me-2"></i>Belum Login
                                @endguest

                                @auth
                                    @role('admin')
                                        <i class="fas fa-user me-2"></i>{{Auth::user()->name}}
                                    @endrole

                                    @role('dosen')
                                        <i class="fas fa-user me-2"></i>{{Auth::user()->dosen->nama}}
                                    @endrole

                                    @role('mahasiswa')
                                        <i class="fas fa-user me-2"></i>{{Auth::user()->name}}
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



    <script src="{{asset('/')}}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>