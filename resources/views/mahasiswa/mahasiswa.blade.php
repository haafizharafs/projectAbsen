<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="styleMhs.css" />
    <title>SiHadir</title>
    <link rel="shortcut icon" href="images/sihadir.png">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->

        <div class="bg-side" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="images/sihadir2.png" alt="" width="45" height="50"> SiHadir

            </div>
            <div class="list-group list-group-flush my-3">
                <a href="mahasiswa.html" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-home me-3"></i>Dashboard</a>
                <a href="presensi.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-list-alt me-3"></i>Presensi</a>
                <a href="jadwalMhs2.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-file-alt me-3"></i> Jadwal</a>
                <a href="rekap.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                <a href="login.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>



        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
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
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <section id="counts" class="counts">
                    <div class="container">

                        <div class="row counters">

                            <div class="col-lg-3 col-6 text-center">
                                <span data-purecounter-start="0" data-purecounter-end="532"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Mahasiswa</p>
                            </div>

                            <div class="col-lg-3 col-6 text-center">
                                <span data-purecounter-start="0" data-purecounter-end="87" data-purecounter-duration="1"
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
                <img src="images/LOGO POLNEP (PNG).png" class="mx-auto d-block logo" width="400" height="400">
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


        </div>

    </div>

    <!-- /#page-content-wrapper -->



    <script src="main.js"></script>
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