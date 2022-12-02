<?php
include 'koneksi.php';
$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$email = $_POST["email"];
$password = $_POST["password"];
$no_telephone = $_POST["no_telephone"];
$level = $_POST["admin"];


$query_sql = "INSERT INTO tb_pengguna (username, nama_lengkap, email, password, no_telephone, level )
VALUES ('$username', '$nama_lengkap', '$email', '$password', '$no_telephone', 'admin')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: LogAndReg.php");
}else {
    echo "Pendaftaran Gagal : " .mysqli_error($koneksi);
}