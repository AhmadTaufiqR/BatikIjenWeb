<?php
include "koneksi.php";
error_reporting(0);
$aksi = "modul/pesanan/aksipesanan.php";
    switch($_GET['aksi']){
    default:
  


?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Pesanan Sanggar Batik</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php?modul=home">Dashboard</a></li>

    </ol>
    <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>5</h3>
						<p>Pesanan Berhasil</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">
						<h3>2</h3>
						<p>Pesanan Perjalanan</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-message-dots' ></i>
					<span class="text">
						<h3>2</h3>
						<p>Konfirmasi Pesanan</p>
					</span>
				</li>
			</ul>
    <div class="card mb-7">

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Riwayat Pesanan</h3>
                    <a class="btn btn-primary " href="dashboard.php?modul=pesanan&aksi=tambah">Tambah Pesanan</a>
                    <i href="#" class='bx bx-search'></i>
                    <i href="#" class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>NAMA PRODUK</th>
                            <th>TANGGAL PESANAN</th>
                            <th>ALAMAT</th>
                            <th>JUMLAH PESANAN</th>
                            <th>TOMBOL AKSI</th>
                         
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql= mysqli_query($koneksi, "Select * from toko ");
                    while($r= mysqli_fetch_array($sql)) {
                    echo"
                    <tr>
                        <td>$r[id]</td>
                        <td>$r[nama_toko]</td>
                        <td>$r[nama_produk]</td>
                        <td>$r[alamat]</td>
                        <td>$r[jumlah_pesanan]</td>
                        <td>
                        <a href=?modul=pesanan&aksi=edit&id=$r[id]<button type='button' class='btn
                        btn-light'>Edit</button></a>

                        <a href='$aksi?act=hapus&id=$r[id]'<button type='button' class='btn
                        btn-danger'>Delete</button></a>
                        </td>
                        
                    </tr>";
                    } 
                    ?>
                    </tbody>
                </table>
            </div>



            </tbody>
            </table>
        </div>
    </div>

<?php
    //FORM TAMBAH 
    break;  
    case 'tambah' :
    ?>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Form Tambah Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php?modul=pesanan">Kembali</a></li>
        </ol>
        <div class="card-body">
        <form method= "POST" action="<?php echo" $aksi?act=tambah";?>">
            <h2 class="title">Register</h2>

            <div class="form-group">
              <li class="fas fa-user">NAMA TOKO</li>
              <input type="text" placeholder="Masukkan Nama Toko"  name="nama_toko"/>
            </div>

            <div class="input-field">
              <li class="fas fa-user"> NAMA PRODUK</li>
              <input type="text"  placeholder="Masukkan Nama Produk" name="nama_produk"/>
            </div>

            <div class="input-field">
               <li class="fas fa-envelope"> ALAMAT </li>
              <input type="text" placeholder="Alamat" name="alamat" />
            </div>

            <div class="input-field">
              <li class="fas fa-phone">JUMLAH PESANAN</li>
              <input type="no_telepon" placeholder="Masukkan Jumlah Pesanan" name="jumlah_pesanan"/>
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Tambahkan" class="btn btn-primary btn-block">
            </div>
          </form>
        </div>
      </div>
    

    <?php
    //FORM EDIT 
    break;
    case 'edit' :
    ?>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Form Edit Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php?modul=pesanan">Kembali</a></li>
        </ol>
        
        <div class="card-body">
            
        <form method= "POST" action="<?php echo" $aksi?act=update" ;?>">
            <?php
            $sql =mysqli_query($koneksi,"SELECT * FROM toko WHERE id ='$_GET[id]'" );
            $r2 =mysqli_fetch_array($sql);
            ?>
            
            <div class="form-group">
              <li class="fas fa-user">NAMA TOKO</li>
              <input type="hidden" name="id" value="<?php echo $r2['id']?>" >
              <input type="text" placeholder="Masukkan Nama Toko"  name="nama_toko" value="<?php echo $r2['nama_toko'];?>"/>
            </div>

            <div class="input-field">
              <li class="fas fa-user"> NAMA PRODUK</li>
              <input type="text"  placeholder="Masukkan Nama Produk" name="nama_produk" value="<?php echo $r2['nama_produk'];?>"/>
            </div>

            <div class="input-field">
               <li class="fas fa-envelope"> ALAMAT </li>
              <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $r2['alamat'];?>" />
            </div>

            <div class="input-field">
              <li class="fas fa-phone">JUMLAH PESANAN</li>
              <input type="no_telepon" placeholder="Masukkan Jumlah Pesanan" name="jumlah_pesanan" value="<?php echo $r2['jumlah_pesanan'];?>"/>
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Edit Data" class="btn btn-primary btn-block">
            </div>
          </form>
        </div>
      </div>
     <?php
    //form edit
    break;
    
}



?>