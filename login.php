<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
//auto md5 from register / post form db
// $password = md5($_POST["password"]);
$password = md5($_POST['password']);
// $password = $_POST["password"];
// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE email = '$email' AND password = '$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

var_dump($cek);
// cek apakah email dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['level']=="admin" && $data['email_verified_at'] !="null"){
		// buat session login dan email 
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		
		// alihkan ke halaman dashboard admin
		header("location:LogAndReg.php?pesan=berhasil");
	}elseif($data['level']=="admin" && $data['email_verified_at'] =="null"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";

		header("location:LogAndReg.php?pesan=verified");
	}
	else{
		// alihkan ke halaman login kembali
		header("location:LogAndReg.php?pesan=gagal");
		
	}	
}else{
	header("location:LogAndReg.php?pesan=gagal");
	
	}
?>