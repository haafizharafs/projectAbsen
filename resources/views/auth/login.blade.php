<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
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
            <div class="col-sm-6 text-center">

                <!-- Nav pills -->

                <div class="px-5 ms-xl-4 pt-5">
                    <img src="{{asset('/')}}/images/sihadir.png" alt="" width="100" height="100">

                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="Mahasiswa" class="container tab-pane active"><br>
                        <div
                            class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 justify-content-center">

                            <form action="{{route('login')}}" method="post" style="width: 23rem;">
                            @csrf

                                <h3 class=" mb-3 pb-3 text-warning" style="letter-spacing: 1px;">Log in</h3>

                                <div class="form-outline mb-4 text text-white">
                                    <input type="text" name="name" id="form2Example18" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example18">NIM / NIP</label>
                                </div>

                                <div class="form-outline mb-4 text-white">
                                    <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example28">Password</label>
                                </div>

                                <div class="pt-1 mb-4 font-weight-bold">
                                    <button class="btn btn-warning btn-lg btn-block text-white"
                                        type="submit"><b>Login</b></button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

</body>

</html>