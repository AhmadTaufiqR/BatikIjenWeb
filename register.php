<?php
include 'koneksi.php';
$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$email = $_POST["email"];
$password = $_POST["password"];
$no_telepon = $_POST["no_telepon"];


$query_sql = "INSERT INTO tb_pengguna (username, nama_lengkap, email, password, no_telepon, level )
VALUES ('$username', '$nama_lengkap', '$email', '$password', '$no_telepon', 'Admin')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: index.php");
}else {
    echo "Pendaftaran Gagal : " .mysqli_error($conn);
}