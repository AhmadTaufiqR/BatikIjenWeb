<?php 



// $connection->query("insert into user(path_gambar, name) values('" . $image . "', '" . $name . "')");

// $connection->query("Update user SET gambar_produk='".$image."' where id = 2");


	
 include '../koneksi.php';

//  $gambar = $_FILES['gambar']['name'];

//  $imagePath = 'gambar_produk/' . $gambar;
//  $tmp_name = $_FILES['gambar']['tmp_name'];
 
//  move_uploaded_file($tmp_name, $imagePath);

//  var_dump($_FILES);

 $id_produk = $_POST['id_produk'];
 $nama_produk = $_POST['nama_produk'];
 $stok = $_POST['stok'];
 $harga_produk = $_POST['harga_produk'];
 $jenis_produk = $_POST['jenis_produk'];
 //  $gambar = $_POST['gambar'];
 $rincian_produk = $_POST['rincian_produk'];
 $ukuran_produk = $_POST['ukuran_produk'];
 $sql = "INSERT INTO tb_produk ( id_produk, nama_produk, stok, harga_produk, jenis_produk, gambar_produk, rincian_produk, ukuran_produk)
 VALUES ('$id_produk','$nama_produk','$stok','$harga_produk','$jenis_produk','$gambar_produk','$rincian_produk', '$ukuran_produk')";
 if (mysqli_query($db, $sql)) {
 echo "<script type='text/javascript'>
 alert('Data Berhasil Dimasukan!');
 location.replace('../produkkami.php');
   </script>";
 } else {
 echo "<script type='text/javascript'>
 alert('Data Gagal Dimasukan!');
 location.replace('../tambah_produk.php');
 </script>";
 
 }
 mysqli_close($db);
// header("Location:input.php");




 

	?>