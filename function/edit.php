<?php 
 
include ("../koneksi.php");
if (!empty($_POST['tb_produk'])) {

    $plat = $_POST['tb_produk'];
		// $gambar_bus = $_POST['gambar'];
		$id_produk = $_POST['id_produk'];
		$nama_produk = $_POST['nama_produk'];
		$stok = $_POST['stok'];
		$harga_produk = $_POST['harga_produk'];
        $jenis_produk = $_POST['jenis_produk'];
        $rincian_produk = $_POST['rincian_produk'];
        $ukuran_produk = $_POST['ukuran_produk'];

// $sql("UPDATE bus SET  gambar='$gambar_produk', kursi='$jumlah_kursi', nama='$nama_produk', kelas='$kelas', harga='$harga_tiket', fasilitas='$fasilitas' WHERE plat='$plat'");
// header("location:index.php?pesan=update");

 $sql = "UPDATE tb_produk SET nama = '$nama_bus', plat= '$plat', kursi = '$jumlah_kursi', fasilitas = '$fasilitas', kelas = '$kelas', harga = '$harga_tiket' where plat = '$plat'";
 if (mysqli_query($db, $sql)) {
        echo "<script type='text/javascript'>
        alert('Data Berhasil Diedit!');
        location.replace('../produkkami.php');
          </script>";
        } else {
        echo "<script type='text/javascript'>
        alert('Data Gagal Dimasukan!');
        location.replace('../databusedit.php');
        </script>";
        
        }
        mysqli_close($conn);
       // header("Location:input.php");
      }

      if (!empty($_POST['email'])) {

        $email = $_POST['email'];
        // $gambar_bus = $_POST['gambar'];
        $nama = $_POST['nama'];
        // $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
       
    
    // $sql("UPDATE bus SET  gambar='$gambar_bus', kursi='$jumlah_kursi', nama='$nama_bus', kelas='$kelas', harga='$harga_tiket', fasilitas='$fasilitas' WHERE plat='$plat'");
    // header("location:index.php?pesan=update");
    
     $sql = "UPDATE user SET nama = '$nama', $email='email', $no_hp ='no_hp',";
     if (mysqli_query($db, $sql)) {
            echo "<script type='text/javascript'>
            alert('Data Berhasil Diedit!');
            location.replace('../databus.php');
              </script>";
            } else {
            echo "<script type='text/javascript'>
            alert('Data Gagal Dimasukan!');
            location.replace('../databusedit.php');
            </script>";
            
            }
            mysqli_close($conn);
           // header("Location:input.php");
          }




?>