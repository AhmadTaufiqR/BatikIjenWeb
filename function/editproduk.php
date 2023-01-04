<?php
include "../koneksi.php";

if (isset($_POST['bubahproduk'])) {
   
   $ubah= mysqli_query($koneksi,"UPDATE `tb_produk` SET `nama_produk` = '$_POST[nama_produk]', `harga_produk` = '$_POST[harga_produk]'
   , `jenis_produk` = '$_POST[jenis_produk]', `gambar_produk` = '$_POST[gambar_produk]', `ukuran_produk` = '$_POST[pilihukuran]' WHERE `tb_produk`.`id_produk` = $_POST[no_produk]; "); 
   
   if ($ubah) {
      echo "<script>
            alert('Ubah data Berhasil');
            document.location='../produkkami.php';
            </script>";
           
            
   }else{
      echo "<script>
            alert('Ubah data gagal');
            document.location='../produkkami.php';
            </script>";
          
   }
}


 ?>