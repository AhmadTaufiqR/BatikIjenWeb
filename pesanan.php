<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SANGGAR BATIK -PESANAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/sweetalert2.min.css">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        $page = "pesanan";
        include 'include/sidebar.php'
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" method="GET" action="pesanan.php">
                    <input class="form-control border-0" type="text" value="<?php if (isset($_GET['cariPesanan'])) {
                                                                                echo $_GET['cariPesanan'];
                                                                            } ?>" name="cariPesanan" autocomplete="off" placeholder="Cari...">
                    <button class="btn btn-light " type="submit" id="tombol-cari">Search</button>
                </form>
                <?php
                include 'koneksi.php';
                if (isset($_GET['cariPesanan'])) {

                    $pencarianPesanan = $_GET['cariPesanan'];

                    $query =  mysqli_query($koneksi, "SELECT pesanan.id_pesanan, tb_pengguna.nama_lengkap, pesanan.tanggal_pesanan, pesanan.status_pesanan, pesanan.total FROM pesanan JOIN tb_pengguna ON pesanan.id_pengguna = tb_pengguna.id_pengguna AND tb_pengguna.nama_lengkap LIKE '%$pencarianPesanan%'");
                    # code...
                } else {
                    $query = mysqli_query($koneksi, "SELECT pesanan.id_pesanan, tb_pengguna.nama_lengkap, pesanan.tanggal_pesanan, pesanan.status_pesanan, pesanan.total FROM pesanan JOIN tb_pengguna ON pesanan.id_pengguna = tb_pengguna.id_pengguna");
                } ?>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="img/fotoprofil.jpg" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">Rizki Farhan</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a href="profil.php" class="dropdown-item">Profil</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    </div>
            </nav>
            <!-- Navbar End -->


             <!-- Chart Start -->
          <?php 
          include "koneksi.php";
          $get1= mysqli_query($koneksi,"SELECT * FROM pesanan" );
          $countseluruh= mysqli_num_rows($get1);

          $get2= mysqli_query($koneksi,"SELECT * FROM pesanan WHERE  status_pesanan='Pesanan dalam proses'" );
          $countproses= mysqli_num_rows($get2);

          $get3= mysqli_query($koneksi,"SELECT * FROM pesanan WHERE  status_pesanan='Pesanan dalam pengiriman'" );
          $countkirim= mysqli_num_rows($get3);
          
          ?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Semua Pesanan</p>
                                <h6 class="mb-0"><?= $countseluruh; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pesanan diproses</p>
                                <h6 class="mb-0"><?= $countproses; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pesanan dikirim</p>
                                <h6 class="mb-0" ><?= $countkirim; ?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Data Pesanan</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Pembeli</th>
                                            <th class="text-center">Tanggal Pesanan</th>
                                            <th class="text-center">Status Pesanan</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                             while ($row = mysqli_fetch_array($query)) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $row['id_pesanan'] ?></td>
                                                    <td class="text-center"><?php echo $row['nama_lengkap'] ?></td>
                                                    <td class="text-center"><?php echo $row['tanggal_pesanan'] ?></td>
                                                    <td class="text-center"><?php echo $row['status_pesanan'] ?></td>
                                                    <td class="text-center"><?php echo $row['total'] ?></td>
                                                    <div class="d-grid gap-2">
                                                        <!-- Button trigger modal -->
                                                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditPesanan<?php echo $row['id_pesanan']; ?>" name="btn_edit" href="editpesanan.php?id_pesanan=?">Edit</button>
                                                            <!-- Modal -->

                                                            <div class="modal fade" id="modalEditPesanan<?php echo $row['id_pesanan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Status Pesanan</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>

                                                                        <form action="function/editpesanan.php" method="POST">
                                                                        <input type="hidden" name="no_pesanan" id="no_pesanan"value="<?php echo $row['id_pesanan'] ?>">
                                                                        <input type="hidden" name="nama_lengkap" id="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>">
                                                                        <div class="modal-body">                                                
                                                                            <div class="form-group col-md-25">
                                                                                <div class="mb-3">
                                                                                    <label for="inputState">Status Pesanan</label>
                                                                                </div>
                                                                                <select  class="form-select" name="pilihstatus" id="pilihstatus">
                                                                                    <option value="<?php echo $row['status_pesanan']; ?>"><?php echo $row['status_pesanan']; ?></option>
                                                                                    <option value="Konfirmasi">Konfirmasi</option>
                                                                                    <option value="Pesanan dalam proses">Pesanan dalam proses</option>
                                                                                    <option value="Pesanan dalam pengiriman">Pesanan dalam pengiriman</option>
                                                                                    <option value="Selesai">Selesai</option>
                                                                                </select>
                                                                                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                            <button type="submit" class="btn btn-primary" name="bubahpesanan">Simpan</button>
                                                                        </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal edit end -->
                                                            <a class="btn btn-danger hapus" style="background-color:red; border-color:red;  color: #fff; " name=" btn_hapus" href="function/hapuspesanan.php?id_pesanan=<?php echo $row['id_pesanan']; ?>">Hapus</a>
                                                            <!-- <button class="hapus">Third Alert</button> -->
                                                        </td>
                                                </tr>
                                            <?php } ?>
                                        <?php  ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        
            <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Chart End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="dist/jquery-3.6.1.min.js"></script>
        <script src="dist/sweetalert2.min.js"></script>
        <script>
            //swett alert pop up hapus
            $('.hapus').on('click', function(e) {
                e.preventDefault();
                const href = $(this).attr('href')

                Swal.fire({
                    title: "Apakah anda yakin ingin menghapus data ini?",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonText: "Hapus",
                    confirmButtonColor: "#ff0055",
                    cancelButtonColor: "#999999",

                    reverseButtons: true,
                    focusConfirm: false,
                    focusCancel: true
                }).then((result) => {
                    if (result.value) {
                        document.location.href = href;
                    }
                })
            })
        </script>
</body>

</html>