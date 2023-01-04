<?php 
session_start();

 require_once("../koneksi.php");
 
 $id_pesanan = $_GET['id_pesanan'];

 $sql = "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'";
 if (mysqli_query($koneksi, $sql)) {
    
   echo "<script type='text/javascript'>
    alert('Data Berhasil Dihapus!');
    </script>";
   header("Location: ../pesanan.php");
    
 } else {
 echo "<script type='text/javascript'>
 alert('Data Gagal Dihapus!');

 </script>";
 }
 mysqli_close($koneksi);
 
?>