<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="style.css" />
    
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
                <a href="dosen.html" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-home me-3"></i>Dashboard</a>
                <a href="verifikasi.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-check-circle me-3"></i>Verifikasi</a>
                <a href="jadwal.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-file-alt me-3"></i> Jadwal</a>
                <a href="datarekap.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-calendar-alt me-3"></i> Data Rekap</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->

                    <!--edit profil-->
     <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Edit Profile</h2>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Dosen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </nav>
            <div class="container-fluid px-4">
                    <div class="edit-profile" id="editProfileForm">
                        <h2>Edit Profil</h2>
                        <form action="editprofil.html">
                            <label for="name">Nama:</label>
                            <input type="text" id="name" value="John Doe">
                            <label for="email">Email:</label>
                            <input type="email" id="email" value="johndoe@example.com">
                            <button type="submit">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
                <div class="container-fluid ">
                    <div class="profile-container1 custom-profile-container">
                      <h2>Edit Profile</h2>
                      <img src="images/foto profile.png" alt="Foto Profil">
                      <h3>Nama Pengguna</h3>  
                      <form action="/proses-upload" method="post" enctype="multipart/form-data">
                        <label for="fileFoto">Pilih Foto</label>
                        <input type="file" id="fileFoto" name="fileFoto" accept="image/*" capture="camera">
                        
                    </form>
                      <!-- <a href="editprofil.html"><button id="editButton">Take A Foto</button></a>
                      
                      <a href="browse.html"><button id="editButton">Browse</button></a> -->
                    </div>               
                  </div>
            </div>
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

        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle1");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        var el = document.getElementById("edit-profile-button").addEventListener("click", function() {
            // Redirect to the edit profile page (edit-profile.html)
            window.location.href = "editprofil.html"
        });

        // edit profile//
        const editButton = document.getElementById("editButton");
const editProfileForm = document.getElementById("editProfileForm");

editButton.addEventListener("click", function() {
    editProfileForm.style.display = "block";
    editButton.style.display = "none";
});

const form = editProfileForm.querySelector("form");
form.addEventListener("submit", function(event) {
    event.preventDefault();

    const namaInput = form.querySelector("#nama");
    const emailInput = form.querySelector("#email");

    const updatedNama = namaInput.value;
    const updatedEmail = emailInput.value;

    // Lakukan apa yang diperlukan untuk menyimpan perubahan (misalnya, kirim data ke server)

    // Setelah penyimpanan sukses, tampilkan kembali profil dan sembunyikan formulir
    editButton.style.display = "block";
    editProfileForm.style.display = "none";

    // Update profil dengan data baru
    document.querySelector(".profile p:nth-child(2)").textContent = `Nama: ${updatedNama}`;
    document.querySelector(".profile p:nth-child(3)").textContent = `Email: ${updatedEmail}`;
});

    </script>
</body>

</html>