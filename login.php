<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_pengguna where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah email dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.html");
	}else{
		// alihkan ke halaman login kembali
		header("location:LogAndReg.php?pesan=gagal");
	}	
}else{
	header("location:LogAndReg.php?pesan=gagal");
	}
?>