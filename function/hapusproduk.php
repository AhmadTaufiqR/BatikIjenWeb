<?php 
session_start();
 require_once("../koneksi.php");
 $id_produk = $_GET['id_produk'];

 $sql = "DELETE FROM tb_produk WHERE id_produk='$id_produk'";

 var_dump(mysqli_query($koneksi,$sql));

 if (mysqli_query($koneksi, $sql)) {
    
   echo "<script type='text/javascript'>
    alert('Data Berhasil Dihapus!');
    </script>";
   header("Location: ../produkkami.php");
    

   
 } else {
 echo "<script type='text/javascript'>
 alert('Data Gagal Dihapus!');

 </script>";
 }
 mysqli_close($koneksi);
 
?>