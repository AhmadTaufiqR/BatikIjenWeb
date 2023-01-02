
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
        $page = "produk";
        include 'include/sidebar.php';
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
                <form class="d-none d-md-flex ms-4" method="GET" action="produkkami.php">
                    <input class="form-control border-0" type="text" value="<?php if (isset($_GET['cariProduk'])) {
                                                                                echo $_GET['cariProduk'];
                                                                            } ?>" name="cariProduk" autocomplete="off" placeholder="Cari...">
                    <button class="btn btn-light " type="submit" id="tombol-cari">Search</button>
                </form>
                <?php
                include 'koneksi.php';
                if (isset($_GET['cariProduk'])) {

                    $pencarianProduk = $_GET['cariProduk'];

                    $query =  mysqli_query($koneksi, "SELECT * from tb_produk  WHERE nama_produk LIKE '%$pencarianProduk%' ORDER BY id_produk ASC");
                    # code...
                } else {
                    $query = mysqli_query($koneksi, "SELECT * from tb_produk ORDER BY id_produk ASC");
                }

                ?>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div>
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
            
                        <div class="container-fluid pt-4 px-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Data Produk</h6>
                                <button type="button" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i><a href ="tambah_produkkami.php" style="color: #fff">TAMBAH PRODUK</a></button>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Produk</th>
                                            <th class="text-center">Stok</th>
                                            <th class="text-center">Harga Produk</th>
                                            <th class="text-center">Jenis Produk</th>
                                            <th class="text-center">Gambar Produk</th>
                                            <th class="text-center">Size</th>
                                            <th class="text-center" >Aksi</th>
                                                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php while($row = mysqli_fetch_array($query)) {?>
                                        <tr>
                                            <td class="text-center"><?php echo $row['id_produk'] ?></td>
                                            <td class="text-center"><?php echo $row['nama_produk'] ?></td>
                                            <td class="text-center"><?php echo $row['stok'] ?></td>
                                            <td class="text-center"><?php echo $row['harga_produk'] ?></td>
                                            <td class="text-center"><?php echo $row['jenis_produk'] ?></td>
                                            <td class="text-center"><?php echo $row['gambar_produk'] ?></td>
                                            <td class="text-center"><?php echo $row['ukuran_produk'] ?></td>
                                            <div class="d-grid gap-2">
                                                        
                                        <!-- Button trigger modal -->
                                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>

                                            <!-- Modal -->
                                       
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <form action="function/editproduk.php" method="POST">
                                            <input type="hidden" name="no_produk" value="<?php echo $row['id_produk'] ?>">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="col-md-12">
                                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                                <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['nama_produk'] ?>" name="nama_produk">
                                            </div>
                                                </div>
                                                <div class="modal-body">
                                                <div class="col-md-12">
                                                <label for="nama_produk" class="form-label">Harga Produk</label>
                                                <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['harga_produk'] ?>" name="harga_produk">
                                            </div>
                                                </div>
                                                <div class="modal-body">
                                                <div class="col-md-12">
                                                <label for="nama_produk" class="form-label">Jenis Produk</label>
                                                <input type="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['jenis_produk'] ?>" name="jenis_produk">
                                            </div>
                                                </div>
                                                <div class="modal-body">
                                                <div class="col-md-12">
                                                <label for="nama_produk" class="form-label">Gambar Produk</label>
                                                <input type="file" class="form-control" id="nama_produk" name="uploudgambarproduk" value="<?php echo $row['gambar_produk'] ?>">
                                            </div>
                                                </div>
                                                <div class="form-group col-md-6" style = "margin-left:20px">
                                                <label for="inputState">Ukuran Produk</label>
                                                <select id="inputState" class="form-control" name="pilihukuran">
                                                <option  selected value="<?php echo $row['ukuran_produk'] ?>">Pilih</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                 <option value="XXL">XXL</option>
                                            </select>
                                            </div>
                                                <div class="modal-footer">
                                                
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary" name="bubahproduk">Simpan</button>
                                                </div>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        
                                            <!-- modal edit end -->
                                            <a class="btn btn-danger hapus" style="background-color:red; border-color:red;  color: #fff; " name=" btn_hapus" href="function/hapusproduk.php?id_produk=<?php echo $row['id_produk']; ?>">Hapus</a>
                                            </tr>
                                        </tr>
                                        <?php } ?>
                                    
                                        </tr>
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
    <!-- swett alert pop up hapus -->
    <script src="js/main.js"></script>
    <script src="dist/jquery-3.6.1.min.js"></script>
    <script src="dist/sweetalert2.min.js"></script>
    <script>
    $('.hapus').on('click', function(e){
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
        if(result.value) {
            document.location.href = href;
        }
    })
    })
    </script>
</body>

</html>