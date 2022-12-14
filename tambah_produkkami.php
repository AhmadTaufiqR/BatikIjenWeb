<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SANGGAR BATIK -TAMBAH PRODUK</title>
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
                    <h3 class="text-primary"></i>Sanggar Batik</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/fotoprofil.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Rizky Farhan z</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                    </div>
                    <a href="pesanan.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Pesanan</a>
                    <a href="tokosaya.php" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Toko Saya</a>
                    <a href="produkkami.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Produk Kami</a>
                    <a href="laporan.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Laporan</a>
                    <div class="nav-item dropdown">
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
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> -->
                            <!-- <i class="fa fa-envelope me-lg-2"></i> -->
                            <!-- <span class="d-none d-lg-inline-flex">Pesan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/testimonial-1.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/testimonial-1.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/testimonial-1.jpg" alt="" style="width: 40px; height: 40px;">
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
                    </div> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/fotoprofil.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Rizky Farhan z</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profil.php" class="dropdown-item">Profil</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <h3>Form Produk</h3>
                <div class="row g-4">
                    
                    
                            <form class="row g-3">
                               <div class="col-md-6">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                               <input type="nama_produk" class="form-control" id="nama_produk">
                                </div>
                                  <div class="col-md-6">
                                   <label for="stok" class="form-label">Stok</label>
                                      <input type="number" class="form-control" id="stok">
                                </div>
                                <!-- <div class="card-body">
                                    <label for="inputPassword">Harga Produk</label>
                                    <div class="col-sm-15">
                                        <input type="harga_produk" class="form-control" id="harga_produk">
                                    </div> -->
                                    <div class="col-md-6">
                                   <label for="harga_produk" class="form-label">Harga Produk</label>
                                      <input type="text" class="form-control" id="harga_produk">
                                </div>
                                <div class="col-md-6">
                                   <label for="kategori" class="form-label">Kategori</label>
                                      <input type="text" class="form-control" id="kategori">
                                </div>
                                <div class="col-md-12">
                                    <label for="nama_produk" class="form-label">Gambar produk</label>
                               <input type="file" class="form-control" id="gambar_produk">
                                </div>
                                  <div class="col-md-12">
                                  <label for="inputPassword">Rincian Produk</label>
                                    <div class="col-sm-15">
                                      <div class="form-floating">
                                    <textarea class="form-control" id="rincian_produk"></textarea>
                                 <label for="floatingTextarea">Rincian Produk</label>
                                </div>
                                </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Ukuran Produk</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Pilih</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                    </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Pekerjaan</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Pilih</option>
                                        <option>Polisi</option>
                                        <option>Tentara</option>
                                        <option>PNS</option>
                                        <option>Dokter</option>
                                        <option>Pramugari</option>
                                        <option>UMUM</option>
                                    </select>
                                    </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-denger">RESET</button>
                                    <input type="submit" class="btn btn-success" name="tambah" value="SIMPAN">
                                </div>
                                </form>
                                <?php
                                // require_once('koneksi.php');
                                // $image = $_FILES['path_gambar']['name'];
                                // $name = $_POST['id_toko'];
                                // $name = $_POST['nama_produk'];
                                // $name = $_POST['stok'];
                                // $name = $_POST['harga_produk'];
                                // $name = $_POST['jenis_produk'];
                                // $name = $_POST['rincian_produk'];
                                // $name = $_POST['ukuran_produk'];
                                // $name = $_POST['harga_produk'];
                                // $name = $_POST['id_kategori'];

                                // $imagePath = 'uploads/' . $image;
                                // $tmp_name = $_FILES['path_gambar']['tmp_name'];

                                // move_uploaded_file($tmp_name, $imagePath);

                                // $connection->query("insert into user(path_gambar, name) values('" . $image . "', '" . $name . "')");
                                // ?>
                                <?php
                                // if(@$_POST['tambah']) {
                                //     $nama_produk = $connection->conn->real_eacape_string($_POST['nama_produk']);
                                //     $stok = $connection->conn->real_eacape_string($_POST['stok']);
                                //     $harga_produk = $connection->conn->real_eacape_string($_POST['harga_produk']);
                                //     $jenis_produk = $connection->conn->real_eacape_string($_POST['jenis_produk']);

                                    // $extensi = explode(".". $_FILES['gambar_barang']['name']);
                                    // $gambar_produk = "gambar".round(microtime(true)).".".end($extensi);
                                    // $sumber = $_FILES['gambar_produk']['tmp_name'];
                                    // $upload = move_uploaded_file($sumber, "img/produk.".$gambar_produk)
                                    // if($upload){
                                    //     $gambar_produk->
                                    // } else{
                                    //     echo "<script>alert('upload gambar gagal')</script>";
                                    // }
                                    // $gambar_produk = $connection->conn->real_eacape_string($_POST['gambar_produk']);
                                    // $rincian_produk = $connection->conn->real_eacape_string($_POST['rincian_produk']);
                                    // $ukuran_produk = $connection->conn->real_eacape_string($_POST['ukuran_produk']);
                                // }
                                // ?>
                             </div>
                                 </div>
                    
            <!-- Form End -->


            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->

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