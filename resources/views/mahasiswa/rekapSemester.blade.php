<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="{{ asset('/') }}/css/styleMhs.css" />
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
                <a href="{{ url('/mahasiswa/dashboard') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-home me-3"></i>Dashboard</a>
                <a href="{{ url('/mahasiswa/presensi') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-list-alt me-3"></i>Presensi</a>
                <a href="{{ url('/mahasiswa/jadwal') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-file-alt me-3"></i> Jadwal</a>
                <a href="{{ url('/mahasiswa/rekap') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-calendar-alt me-3"></i> Data Rekap</a>

                <!--form untuk logout-->
                <form id="logout-form" action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
                <!--tombol logout yang mengakses form logout-->
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

         <div id="page-content-wrapper">

            <div class="container-fluid px-4">

                <!--Data Rekap-->
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                            <h2 class="fs-2 m-0">Data Rekap</h2>
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
                                        <i class="fas fa-user me-2"></i>Mahasiswa
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-2">
                        <div class="button-container-2">
                            <a href="{{ url('/mahasiswa/rekap-hari') }}">
                                <button class="icon-button1" id="myButton">
                                <img class="icon" src="{{ asset('/') }}/images/perhari.png" alt="Button 1" width="50" height="50">
                                <span class="button-text">Perhari</span>
                                </button>
                            </a>
                            <a href="{{ url('/mahasiswa/rekap-minggu') }}">
                                <button class="icon-button1" id="myButton">
                                <img class="icon" src="{{ asset('/') }}/images/perminggu.png" alt="Button 1" width="50" height="50">
                                <span class="button-text">Perminggu</span>
                                </button>
                            </a>
                            <a href="{{ url('/mahasiswa/rekap-semester') }}">
                                <button class="icon-button1" id="myButton">
                                <img class="icon" src="{{ asset('/') }}/images/persemester.png" alt="Button 1" width="50" height="50">
                                <span class="button-text">Persemester</span>
                                </button>
                            </a>
                        </div>

                        <h3>REKAP PRESENSI PERKULIAHAN PERSEMESTER</h3>
                        <p>Semester 5</p>

                        <!-- Search -->
                        <div class="search-container">
                            <input type="text" id="search" placeholder="Cari nama...">
                            <button id="search-button"><i class="fas fa-search"></i></button>
                        </div>
                        <!-- End Search -->

                        <!-- Table -->
                        <table border="1">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Alpa</th>
                                <th>Izin</th>
                                <th>Sakit</th>
                                <th>Jumlah</th>
                                <th>Kompensasi</th>
                                <th>SP</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>John</td>
                                <td>32021170</td>
                                <td>-</td>
                                <td>1</td>
                                <td>2</td>
                                <td>24</td>
                                <td>0</td>
                                <td>
                                    <div class="lihat-button">
                                        <a href=""><input type="button" value="Lihat SP"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Sesil</td>
                                <td>32021111</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                                <td>32</td>
                                <td>8</td>
                                <td>
                                    <div class="lihat-button">
                                        <a href=""><input type="button" value="Lihat SP"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
            </div>

    <!-- /#page-content-wrapper -->


    <script src="{{ asset('/') }}/js/mainMhs.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle1");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        // script button
        var myButton = document.getElementById("myButton");
        myButton.addEventListener("mousedown", function() {
            yButton.style.border = "2px solid #0056b3";
        });

        myButton.addEventListener("mouseup", function() {
            myButton.style.border = "2px solid #0056b3";
        });
    </script>
</body>

</html>
