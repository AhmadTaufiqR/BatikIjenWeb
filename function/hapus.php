<?php 
session_start();
// if(!empty($_SESSION['admin'])){
// 	require '../../confiq.php';
// 	if(!empty($_GET['plat'])){
// 		$plat= $_GET['plat'];
// 		$data[] = $id;
// 		$sql = 'DELETE FROM bus WHERE plat=?';
// 		$row = $config -> prepare($sql);
// 		$row -> execute($data);



// }

// }

// // include database connection file
// require_once("../confiq.php");
 
// // Get id from URL to delete that user
// $plat = $_GET['plat'];

// // Delete user row from table based on given id
// $result = mysqli_query($db, "DELETE FROM bus WHERE plat=$plat");
 
// // After delete redirect to Home, so that latest user list will be displayed.
// header("Location:../databus.php");



 require_once("../koneksi.php");
 $id_produk = $_GET['id_produk'];
 $sql = "DELETE FROM tb_produk WHERE id_produk='$id_produk'";
 if (mysqli_query($koneksi, $sql)) {
    header("Location: ../produkkami.php");

 } else {
 echo "<script type='text/javascript'>
 alert('Data Gagal Dihapus!');

 </script>";
 }
 mysqli_close($koneksi);
 
?>