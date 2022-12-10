<?php
include 'koneksi.php';
$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$email = $_POST["email"];
$password = md5($_POST['password']);
$no_telephone = $_POST["telepon"];


$query_sql = "INSERT INTO tb_pengguna (username, nama_lengkap, email, password, no_telephone, level )
VALUES ('$username', '$nama_lengkap', '$email', '$password', '$no_telephone', 'admin')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: LogAndReg.php");
}else {
    echo "Pendaftaran Gagal : " .mysqli_error($koneksi);
}