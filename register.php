<?php
include 'koneksi.php';
// $username = htmlspecialchars($_POST["username"]);
$username = htmlspecialchars($_POST["username"]);
$nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
$email = htmlspecialchars($_POST["email"]);
$password = md5($_POST["password"]);
// $password = $_POST["password"];
$no_telephone = htmlspecialchars($_POST["telepon"]);

$query_sql = "INSERT INTO tb_pengguna (username, nama_lengkap, email, password, no_telephone, level )
VALUES ('$username', '$nama_lengkap', '$email', '$password', '$no_telephone', 'admin')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: LogAndReg.php");
}else {
    echo "Pendaftaran Gagal : " .mysqli_error($koneksi);
}