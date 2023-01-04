<?php
include "../koneksi.php";

if (isset($_POST['bubahpesanan'])) {
   
   $ubah= mysqli_query($koneksi,"UPDATE pesanan  SET status_pesanan= '$_POST[pilihstatus]' 
   WHERE pesanan.id_pesanan= '$_POST[no_pesanan]' "); 
   
   if ($ubah) {
      echo "<script>
            alert('Edit data Berhasil');
            document.location='../pesanan.php';
            </script>";
            
   }else{
      echo "<script>
            alert('Simpan data gagal');
            document.location='pesanan.php';
            </script>";
            header("Location: ../pesanan.php");
   }
}


 ?>