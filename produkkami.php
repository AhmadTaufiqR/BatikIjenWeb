<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * from tb_produk ORDER BY tb_produk.id_produk ASC ")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SANGGAR BATIK -PRODUK KAMI</title>
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
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i></i>Sanggar Batik</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/fotoprofil.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Rizki Farhan</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                    <a href="pesanan.php" class="nav-item nav-link"><i class="fa fa-table shop me-2"></i>Pesanan</a>
                    <a href="tokosaya.php" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Toko Saya</a>
                    <a href="produkkami.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Produk Kami</a>
                    <a href="laporan.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Laporan</a>
                    </div>
                </div>
            </nav>
        </div>
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
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Cari">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Pesan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notifikasi</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/fotoprofil.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Rizki Farhan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Profil</a>
                            <a href="#" class="dropdown-item">Pengaturan</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
<button type="button" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i><a href ="tambah_produkkami.php" style="color: #fff">TAMBAH PRODUK</a></button>
                            <table class="table table">
                                                    <tbody>
                                                                    <form  class="table" method="post"  style="margin-left:50px; float:left; padding: 80px 150px; margin: bottom 0;" border="1" > 
                                                                    <table class="table table-striped" style="float:left; margin-left: 0px; margin: 0px;" border="1" align="left">
                                                                        <th class="text-center">No</th>
                                                                        <th class="text-center">Nama Produk</th>
                                                                        <th class="text-center">Stok</th>
                                                                        <th class="text-center">Harga Produk</th>
                                                                        <th class="text-center">Jenis Produk</th>
                                                                        <th class="text-center">Gambar Produk</th>
                                                                        <th class="text-center">Rincian Produk</th>
                                                                        <th class="text-center">Ukuran Produk</th>
                                                                        <th class="text-center">Aksi</th>
                                                                        
                                                                </tbody>
                                                                </thead>
                                                                <tbody>
                                                                    <?php if(mysqli_num_rows($query)) {?>
                                                                        <?php while($row = mysqli_fetch_array($query)) {?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $row['id_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['nama_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['stok'] ?></td>
                                                                        <td class=" text-center"><?php echo $row['harga_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['jenis_produk'] ?></td>
                                                                        <td><img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="100"/></td>
                                                                        <td class="text-center"><?php echo $row['rincian_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['ukuran_produk'] ?></td>
                                                                        <div class="d-grid gap-2">
                                                                        <td><a class="btn btn-danger" style="background-color:steelblue; border-color:steelblue;  color: #fff; " href="function/edit.php?plat=<?php echo $row['plat'];?>">Edit</a>
                                                                        <a class="btn btn-danger" style="background-color:red; border-color:red;  color: #fff; "href="function/hapus.php?plat=<?php echo $row['plat'];?>">Hapus</a></td>
                                                                     </tr>
                                                                     <?php } ?>
                                                                     <?php } ?>
                                                                        </form>
                          </tbody>
                        </table>
                            </div>
                        </div>       
                    </div>

                    </div>
                </div>
            </div>
                     
            <!-- Table End -->
            <!-- Footer Start -->
            
                        
            <!-- Footer End -->

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
</body>

</html>