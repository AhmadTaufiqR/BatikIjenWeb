<?php 
session_start();

 require_once("../koneksi.php");
 $id_produk = $_GET['id_pesanan'];
 $sql = "DELETE FROM pesanan WHERE id_pesanan='$id_produk'";
 if (mysqli_query($koneksi, $sql)) {
    header("Location: ../pesanan.php");

 } else {
 echo "<script type='text/javascript'>
 alert('Data Gagal Dihapus!');

 </script>";
 }
 mysqli_close($koneksi);
 
?>