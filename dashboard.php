<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>SANGGAR BATIK -DASHBOARD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- SweetAlert -->


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
        $page = "dashboard";
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
                <form class="d-none d-md-flex ms-4" method="GET" action="dashboard.php">
                    <input class="form-control border-0" type="text" value="<?php if (isset($_GET['cariDashboard'])) {
                                                                                echo $_GET['cariDashboard'];
                                                                            } ?>" name="cariDashboard" autocomplete="off" placeholder="Cari...">
                    <button class="btn btn-light " type="submit" id="tombol-cari">Search</button>
                </form>
                <?php
                include 'koneksi.php';
                if (isset($_GET['cariDashboard'])) {

                    $pencarianDashboard = $_GET['cariDashboard'];

                    $query =  mysqli_query($koneksi, "SELECT pesanan.id_pesanan, tb_pengguna.nama_lengkap, pesanan.tanggal_pesanan, pesanan.status_pesanan, 
                    pesanan.total ,detail_pesanan.sub_total,detail_pesanan.id_pesanan,tb_produk.nama_produk,detail_pesanan.jumlah_pesanan FROM pesanan 
                    JOIN tb_pengguna 
                    ON pesanan.id_pengguna = tb_pengguna.id_pengguna  
                    JOIN detail_pesanan 
                    ON pesanan.id_pesanan=detail_pesanan.id_pesanan 
                    JOIN tb_produk ON tb_produk.id_produk = detail_pesanan.id_produk WHERE pesanan.status_pesanan= 'Konfirmasi' AND tb_pengguna.nama_lengkap LIKE '%$pencarianDashboard%'");
                    # code...
                } else {
                    $query = mysqli_query($koneksi, "SELECT pesanan.id_pesanan, tb_pengguna.nama_lengkap, pesanan.tanggal_pesanan, pesanan.status_pesanan, 
                    pesanan.total ,detail_pesanan.sub_total,detail_pesanan.id_pesanan,tb_produk.nama_produk,detail_pesanan.jumlah_pesanan FROM pesanan 
                    JOIN tb_pengguna 
                    ON pesanan.id_pengguna = tb_pengguna.id_pengguna  
                    JOIN detail_pesanan 
                    ON pesanan.id_pesanan=detail_pesanan.id_pesanan 
                    JOIN tb_produk ON tb_produk.id_produk = detail_pesanan.id_produk WHERE pesanan.status_pesanan= 'Konfirmasi'");
                }

                ?>
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
                </div>
            </nav>
            <?php
            include "koneksi.php";
            $query1 = mysqli_query($koneksi, "SELECT detail_pesanan.sub_total as sub_total, detail_pesanan.id_pesanan, pesanan.id_pengguna
          FROM detail_pesanan
          INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE pesanan.status_pesanan='Selesai'; ");
            $totalsaldo = 0;
            if (mysqli_num_rows($query1)) {
                while ($row1 = mysqli_fetch_array($query1)) {
                    $totalsaldo += $row1["sub_total"];
                }
            }


            $get2 = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE  status_pesanan='Konfirmasi'");
            $countproses = mysqli_num_rows($get2);

            $get3 = mysqli_query($koneksi, "SELECT * FROM category ");
            $kategori = mysqli_num_rows($get3);

            ?>

            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pesanan Masuk</p>
                                <h6 class="mb-0"><?= $countproses; ?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Saldo</p>
                                <h6 class="mb-0"><?= $totalsaldo; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Kategori Produk</p>
                                <h6 class="mb-0"><?= $kategori; ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Sale & Revenue End -->

                    <!-- Recent Sales Start -->
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Pesanan Terbaru</h6>

                            </div>
                            <div class="table-responsive" id="container">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Pembeli</th>
                                            <th class="text-center">Tanggal Pesanan</th>
                                            <th class="text-center">Status Pesanan</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $row['id_pesanan'] ?></td>
                                                <td class="text-center"><?php echo $row['nama_lengkap'] ?></td>
                                                <td class="text-center"><?php echo $row['tanggal_pesanan'] ?></td>
                                                <td class="text-center"><?php echo $row['status_pesanan'] ?></td>
                                                <td class="text-center"><?php echo $row['total'] ?></td>
                                                <div class="d-grid gap-2">
                                                    <!-- Button trigger modal -->
                                                    <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalEditPesanan<?php echo $row['id_pesanan']; ?>" name="btn_edit" href="editpesanan.php?id_pesanan=?">Detail Produk</button>
                                                        <div class="modal fade" id="modalEditPesanan<?php echo $row['id_pesanan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>

                                                                    <form action="function/editpesanan.php" method="POST">
                                                                        <input type="hidden" name="no_pesanan" id="no_pesanan" value="<?php echo $row['id_pesanan'] ?>">

                                                                        <div class="modal-body">
                                                                            <div class="form-group col-md-25">
                                                                                <div class="modal-body">
                                                                                    <div class="col-md-12">
                                                                                        <label for="nama_produk" class="form-label">Id Produk</label>
                                                                                        <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['id_pesanan'] ?>" name="nama_produk" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-md-12">
                                                                                        <label for="nama_produk" class="form-label">Nama Produk</label>
                                                                                        <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['nama_produk'] ?>" name="nama_produk" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-md-12">
                                                                                        <label for="nama_produk" class="form-label">Jumlah Pesanan</label>
                                                                                        <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['jumlah_pesanan'] ?>" name="nama_produk" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-md-12">
                                                                                        <label for="nama_produk" class="form-label">Sub Total Harga</label>
                                                                                        <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['sub_total'] ?>" name="nama_produk" disabled>
                                                                                    </div>
                                                                                </div>

                                                                                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-Secondary" data-bs-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </form>

                                            </tr>
                                        <?php } ?>
                                        <?php  ?>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Sales End -->

                    <!-- Footer Start -->

                </div>
                <!-- Footer End -->
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
            <script src="js/scriptcari.js"></script>

</body>

</html>