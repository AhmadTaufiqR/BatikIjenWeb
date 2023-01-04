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

            <?php
            include 'koneksi.php';
            if (isset($_POST["btn_simpan_produk"])) {
                //ambil data 
                $nama_produk = $_POST["nama_produk"];
                $stok = $_POST["stok"];
                $harga_produk = $_POST["harga_produk"];
                $rincian_produk = $_POST["rincian_produk"];
                $ukuranProduk = $_POST["ukuran_produk"];
                

                $gambar = uploud();

                if (!$gambar) {
                    return false;
                }

                $query = "INSERT INTO `tb_produk` (`id_produk`, `id_toko`, `nama_produk`, `stok`, `harga_produk`, `jenis_produk`, `gambar_produk`, `rincian_produk`, `ukuran_produk`, `id_kategori`) 
                VALUES ('', '3', '$nama_produk', '$stok', '$harga_produk', 'Kain Batik', '$gambar', '$rincian_produk', '$ukuranProduk', '2');";

                if (mysqli_query($koneksi, $query) > 0) {
                ?><div class="popup popup--icon -success js_success-popup popup--visible">
                        <div class="popup__background"></div>
                        <div class="popup__content">
                            <h3 class="popup__content__title">
                                Success
                            </h3>
                            <p>Anda Berhasil Menambahkan Produk Baru</p>
                            <p>
                                <button class="button button--valid" data-for="js_error-popup"><a style="color:white;" href="produkkami.php">Ok </button></a>
                                <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                                <?php echo "<script>setTimeout(\"location.href = 'produkkami.php';\",2000);</script>"; ?>
                            </p>
                        </div>
                    </div>
                <?php } else {
                ?><div class="popup popup--icon -error js_error-popup popup--visible">
                        <div class="popup__background"></div>
                        <div class="popup__content">
                            <h3 class="popup__content__title">
                                Success
                            </h3>
                            <p>Anda Gagal Menambahkan Produk Baru</p>
                            <p>
                                <button class="button button--error" data-for="js_error-popup"><a style="color:white;" href="tambah_produkkami.php">Ok </button></a>
                                <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                                <?php echo "<script>setTimeout(\"location.href = 'tambah_produkkami.php';\",2000);</script>"; ?>
                            </p>
                        </div>
                    </div>
            <?php
                }
            }

            function uploud()
            {
                $namaFile = $_FILES['gambar_produk']['name'];
                $ukuranFile = $_FILES['gambar_produk']['size'];
                $error = $_FILES['gambar_produk']['error'];
                $tmpName = $_FILES['gambar_produk']['tmp_name'];
                //cek file gambar dimasukkan atau belum
                if ($error === 4) {
                    echo "<script>
                    alert('Pilih gambar terlebih dahhulu!');
                    </script>
                    <script>setTimeout(\"location.href = tambah_produkkami.php';\",2000);</script>";
                    # code...
                    return false;
                }
                //cek tipe file
                $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
                $ekstensiGambar = explode('.', $namaFile);
                $ekstensiGambar = strtolower(end($ekstensiGambar));
                if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
                    echo "<script>
                alert('File yang anda uploud bukan file gambar');
                </script>
                <script>setTimeout(\"location.href = 'tambah_produkkami.php';\",2000);</script>";
                    # code...
                    return false;
                }
                //cek ukuran
                if ($ukuranFile > 1000000) {
                    echo "<script>
                alert('Ukuran gambar terlalu besar');
                </script>
                <script>setTimeout(\"location.href = 'tambah_produkkami.php';\",2000);</script>";
                    # code...
                    return false;
                }
                $namaFileBaru = uniqid();
                $namaFileBaru .= '.';
                $namaFileBaru .= $ekstensiGambar;


                move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
                return $namaFileBaru;
            }

            ?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <h3>Form Produk</h3>
                <div class="row g-4">


                    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="nama_produk" class="form-control" id="nama_produk" name="nama_produk">
                        </div>
                        <div class="col-md-6">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok">
                        </div>
                        <div class="col-md-6">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="harga_produk" name="harga_produk" placeholder="Rp.">
                        </div>
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori">
                        </div>
                        <div class="col-md-12">
                            <label for="nama_produk" class="form-label">Gambar produk</label>
                            <input type="file" class="form-control" id="formFile" name="gambar_produk" placeholder="jpg,jpeg,png">
                        </div>
                        <div class="col-md-12">
                            <label>Rincian Produk</label>
                            <div class="col-sm-15">
                                <div class="form-floating">
                                    <textarea class="form-control" name="rincian_produk" id="rincian_produk"></textarea>
                                    <label for="floatingTextarea">Rincian Produk</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Ukuran Produk</label>
                            <select id="inputState" class="form-control" name="ukuran_produk">
                                <option selected>Pilih</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                                
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <select id="inputState" class="form-control" name="pekerjaan">
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
                            <a href="produkkami.php" button type="text" class="btn btn-danger"> Batal</a>
                            <a href="tambah_produkkami.php" button type="text" class="btn btn-secondary"> Reset</a>
                            <button type="simpan" class="btn btn-success " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .10rem; --bs-btn-font-size: .75rem;" name="btn_simpan_produk" id="btn_simpan">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
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
        <script src="app.js"></script>
        <script src="dist/jquery-3.6.1.min.js"></script>
        <script src="dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="dist/sweetalert2.min.css">
        <link rel="stylesheet" href="popup.css">
        <script>
            // document.querySelector(".alert"){
            //   Swal.fire("Our First Alert", "With some body text and success icon!", "success");
            // };
            $('#alert').on(
                function() {
                    Swal.fire({
                        type: 'success',
                        title: 'Login Berhasil',
                        text: 'anda berhasil login'
                    })
                }
            )
        </script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>