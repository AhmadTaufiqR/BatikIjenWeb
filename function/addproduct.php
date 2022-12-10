<?php
require_once('koneksi.php');
$image = $_FILES['path_gambar']['name'];

$imagePath = '../uploads/' . $image;
$tmp_name = $_FILES['path_gambar']['tmp_name'];

move_uploaded_file($tmp_name, $imagePath);
?>