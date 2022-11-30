<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * from tb_produk ORDER BY tb_produk.nama_produk DESC  ")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
	<!-- My CSS -->
	<link rel="stylesheet" href="styleprodukkami.css">
	<title>SanggarBatik</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="img/logo1.png" alt="Image" height="42" width="42">
		
			<i class="text">SanggarBatik</i>
	
		</a>
		<ul class="side-menu top">
			<li class="">
				<a href="dashboard.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="toko.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Toko Saya</span>
				</a>
			</li>
				<li class="active">
				<a href="produkkami.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Produk</span>
				</a>
			</li>
			<li>
				<a href="pesanan.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Pesanan</span>
				</a>
			</li>
			<li>
				<a href="laporan.php">
					<i class='bx bxs-book' ></i>
					<span class="text">Laporan</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
					
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

   <!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->
		
		<tr>
            <h6 class="mb-0" style="margin-top: 20px ">PRODUK KAMI</h6>
</tr>
			<!-- /.card-header -->            
            <div class="card-body">
            <button type="button" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i><a href ="tambah_produkkami.php">TAMBAH PRODUK</a></button>
			
             
            </div>
            <!-- /.card-body -->
<div class="content table-responsive table-full-width">
<table class="table table">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    </div>
                                                    <tbody>
                                                                    <form  class="table" method="post"  style="margin-left:50px; float:left; padding: 80px 150px;" border="1" > </form>
                                                                    <table class="table table-striped" style="float:left; margin-left: 0px; margin: 0px;" border="1" align="left">
                                                                        <th class="text-center">Id Produk</th>
																		<th class="text-center">Id Toko</th>
                                                                        <th class="text-center">Nama Produk</th>
                                                                        <th class="text-center">Stok</th>
                                                                        <th class="text-center">Harga Produk</th>
                                                                        <th class="text-center">Jenis Produk</th>
                                                                        <th class="text-center">Gambar Produk</th>
                                                                        <th class="text-center">Rincian Produk</th>
                                                                        <th class="text-center">Ukuran Produk</th>
																		<th class="text-center">Edit</th>
																		<th class="text-center">Hapus</th>
                                                                    </thead>
                                                                </thead>
                                                                <tbody>
                                                                    <?php if(mysqli_num_rows($query)) {?>
                                                                        <?php while($row = mysqli_fetch_array($query)) {?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $row['id_produk'] ?></td>
																		<td class="text-center"><?php echo $row['id_toko'] ?></td>
                                                                        <td class="text-center"><?php echo $row['nama_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['stok'] ?></td>
                                                                        <td class=" text-center"><?php echo $row['harga_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['jenis_produk'] ?></td>
                                                                        <td><img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="100"/></td>
                                                                        <td class="text-center"><?php echo $row['rincian_produk'] ?></td>
                                                                        <td class="text-center"><?php echo $row['ukuran_produk'] ?></td>
                                                                     </tr>
                                                                     <?php } ?>
                                                                     <?php } ?>
                          </tbody>
                        </table>
						</tr>
						</tbody>
					</table>
				</div>
				
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="script.js"></script>
</body>
</html>