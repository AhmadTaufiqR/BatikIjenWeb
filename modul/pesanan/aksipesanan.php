<?php 
include "../../koneksi.php";

$modul =$_GET['modul'];
$act = $_GET['act'];

if ($act=='tambah') {
    $namatoko=$_POST['nama_toko'];
    $namaproduk=$_POST['nama_produk'];
    $alamat=$_POST['alamat'];
    $jumlahpesanan=$_POST['jumlah_pesanan'];

    $sql=mysqli_query($koneksi,"INSERT INTO toko (id ,nama_toko,nama_produk,alamat,jumlah_pesanan)
    VALUES (' ','$namatoko','$namaproduk','$alamat','$jumlahpesanan')");
    header('location:../../dashboard.php?modul=pesanan');

} else if($act=='update'){
    $namatoko=$_POST['nama_toko'];
    $namaproduk=$_POST['nama_produk'];
    $alamat=$_POST['alamat'];
    $jumlahpesanan=$_POST['jumlah_pesanan'];
    $id=$_POST['id'];

    $sql=mysqli_query($koneksi,"UPDATE toko SET nama_toko='$namatoko',nama_produk ='$namaproduk',alamat='$alamat',jumlah_pesanan='$jumlahpesanan' 
    WHERE id='$id'");
    
    header('location:../../dashboard.php?modul=pesanan');

}  else if($act =='hapus'){
   
    $sql=mysqli_query($koneksi,"DELETE FROM toko WHERE id ='$_GET[id]'");
    header('location:../../dashboard.php?modul=pesanan');



}
?>