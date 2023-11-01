<!DOCTYPE html>
<html lang="en">

<head>
    <title>SiHadir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}/css/style.css">
    <link rel="shortcut icon" href="{{asset('/')}}/images/sihadir.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row custom-bg">
            <div class="col-md-6 d-flex align-items-baseline justify-content-end container">
                <img src="images/polnep.jpg" alt="" width="750" class="min-vh-100 polnep">
            </div>
            <div class="col-md-6 tulisan">
                <nav class="navbar">
                    <div class="container-fluid">
                        <img src="{{asset('/')}}/images/sihadir.png" alt="" width="50" height="50">
                        <a href="{{route('login')}}" class="text-decoration-none">
                            <button type="button" class="btn btn-warning text-white"><strong>Log in</strong></button>
                        </a>
                    </div>
                </nav>
                <h1 class="pt-5 mt-5 ps-5 text-warning">Selamat Datang</h1>
                <h4 class="ps-5 text-white">Di Presensi Prodi Teknik <br> Informatika</h4>
                <p class="pb-5 mb-5 ps-5 text-white">Presensi Dosen dan Mahasiswa</p>
                <div class="teknik">
                    <h6 class="pt-5 mt-5 ps-5 text-white position-absolute bottom-0 start-50">TEKNIK INFORMATIKA
                        <br>
                        POLITEKNIK
                        NEGERI PONTIANAK
                    </h6>
                </div>
            </div>
        </div>
    </div>

</body>

</html>