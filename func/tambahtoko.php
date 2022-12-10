<?php
    require_once('../koneksi.php');

    if (issets($_POST('tambah'))) {
        $nama_toko = $_POST('namatoko');
    $pemilik = $_POST('pemiliktoko');
    $alamattoko = $_POST('alamattoko');
    $deskripsitoko = $_POST('deskripsi');
    $notelpon = $_POST('notelepon');

    $sql = "INSERT INTO toko (`nama_toko`, `pemilik_toko`, `alamat_toko`, `deskripsi_toko`, `no_telephone`) VALUES ('$nama_toko','$pemilik','$alamattoko','$deskripsitoko','$notelpon')";

    if (mysqli_query($koneksi, $sql)) {
        header('location: tokosaya.php');
    } else {
        print('Errorr');
    }
    }
    
?>