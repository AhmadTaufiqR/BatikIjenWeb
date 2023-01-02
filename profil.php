<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * from tb_pengguna ORDER BY tb_pengguna.id_pengguna ASC ")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil</title>
    
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- HEADER START -->
    <header class="bg-primary shadow sticky-top">
        
        <div class="container d-flex flex-wrap justify-content-between py-2 text-light">
            Selamat datang di halaman profil...

            <div>
                Hello <b>Rizki Farhan</b>
                <a href="dashboard.php" class="link-warning text-decoration-none fw-bold ms-2">
                    <i class="fa-solid fa-sign-out"></i>
                    Keluar Dashboard
                </a>
            </div>

        </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
        
        <!-- .container start -->
        <div class="container py-5">
            
            <!-- .row start -->
            <div class="row">

                <!-- .col start -->
                <div class="col-lg-4">

                    <div class="card text-center p-5">

                        <div class="card-body">

                            <img src="https://avatars.githubusercontent.com/u/45115034?v=4" alt="Profil Picture" class="img img-thumbnail rounded-circle w-50">

                            <h2>Rizki Farhan</h2>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profil </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- .col end -->

                <!-- .col start -->
                <div class="col-lg-8">

                    <div class="shadow border rounded p-5 mb-5">
                        <h2>Profil</h2>

                        <!-- .row start -->
                        <div class="row">

                            <!-- .col start -->
                            <div class="col-lg-6">

                                <p class="card-text">
                                    <span class="text-muted mb-1 d-block">Alamat :</span>
                                    
                                    <i class="fa-solid fa-map me-2 text-primary"></i>

                                    Jalan Raya Waena, Kelurahan Waena, Distrik Heram, Kota Jayapura, Papua.
                                </p> <!-- alamat end -->

                                <p class="card-text">
                                    <span class="text-muted mb-1 d-block">Alamat Email</span>

                                    <i class="fa-solid fa-envelope me-2 text-primary"></i> rizki.farhan@gmail.com

                                </p> <!-- alamat email end -->

                                <p class="card-text">
                                    <span class="text-muted mb-1 d-block">Nomor Telepon</span>
                                    <i class="fa-solid fa-phone me-2 text-primary"></i> +62 8210055-8191
                                </p> <!-- nomor telepon end -->

                                <p class="card-text">
                                    <span class="text-muted mb-1 d-block">Alamat Website</span>
                                    
                                    <a href="https://nokensoft.com" target="_blank" class="text-decoration-none link-success">
                                        <i class="fa-solid fa-globe me-2 text-primary"></i> www.nokensoft.com
                                    </a>
                                    
                                </p> <!-- alamat website end -->

                            </div>
                            <!-- .col end -->

                            <!-- .col start -->
                            <div class="col-lg-6">

                                <div>
                                    Ikuti saya di :
                                </div>

                                <a href="https://github.com/janzenfaidiban" target="_blank" class="text-decoration-none link-primary fs-2">
                                    <i class="fa-brands fa-github"></i>
                                </a>

                                <a href="https://instagram.com/janzen.faidiban" target="_blank" class="text-decoration-none link-primary fs-2">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>

                                <a href="https://facebook.com/" target="_blank" class="text-decoration-none link-primary fs-2">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>

                                <a href="https://youtube.com/" target="_blank" class="text-decoration-none link-primary fs-2">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>

                                <a href="https://linkedin.com/" target="_blank" class="text-decoration-none link-primary fs-2">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>

                            </div>
                            <!-- .col end -->

                        </div>
                        <!-- .row end -->

                    </div>
                    
                </div>
                <!-- .col end -->

            </div>
            <!-- .row end -->

        </div>
        <!-- .container end -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="text-center bg-dark text-primary py-5">
        <p>
        Politeknik Negeri Jember Designed by <b>TIF 21 Bondowoso Kelompok 3</b>
        </p>
    </footer>
    <!-- FOOTER END -->
    
</body>
</html>