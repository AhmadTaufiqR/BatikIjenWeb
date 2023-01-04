<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
include 'register.php';
?>
<?php
$msg = "";
include 'koneksi.php';
// $username = htmlspecialchars($_POST["username"]);
if (isset($_POST['register'])) {

  $username = htmlspecialchars($_POST["username"]);
  $nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = md5($_POST["password"]);
  $no_telephone = htmlspecialchars($_POST["telepon"]);

  if (mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE email='{$email}'")) > 0) {
    $msg = "<div class='alert alert-danger'>{$email} - Email Ini sudah terdaftar.</div>";
  } else {
    $query_sql = "INSERT INTO tb_pengguna (username, nama_lengkap, email, password, no_telephone, level )
            VALUES ('$username', '$nama_lengkap', '$email', '$password', '$no_telephone', 'admin')";

    if (mysqli_query($koneksi, $query_sql)) {
      header("Location: LogAndReg.php");
    } else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="dist/sweetalert2.min.css">
  <link rel="stylesheet" href="popup.css">
  <title>Login</title>
</head>

<body>
  <?php
  if (isset($_GET['pesan'])) {

    if ($_GET['pesan'] == "berhasil") {
  ?>
      <div class="popup popup--icon -success js_success-popup popup--visible">
        <div class="popup__background"></div>
        <div class="popup__content">
          <h3 class="popup__content__title">
            Success
          </h3>
          <p>Login Berhasil</p>
          <p>
            <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
            <?php echo "<script>setTimeout(\"location.href = 'dashboard.php';\",1500);</script>"; ?>
          </p>
        </div>
      </div>
      <!--   <script>
			window.location="index.php";
			</script> -->
  <?php

    }
  }
  ?>
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      // echo "<div class='alert'>email dan Password tidak sesuai !</div>";
      // $alert ="<script>
      // 	Swal({
      // 		title: 'Error!',
      // 		text: 'Username dan password anda tidak sesuai',
      // 		type: 'warning'
      // 	  })
      //  </script>";
      // $alert ="<script>alert('email dan Password tidak sesuai') </script>";
      // echo $alert;
  ?>
      <div class="popup popup--icon -error js_error-popup popup--visible">
        <div class="popup__background"></div>
        <div class="popup__content">
          <h3 class="popup__content__title">
            Error
          </h3>
          <p>Email atau password anda salah, Silahkan isi kembali</p>
          <p>

            <button class="button button--error" data-for="js_error-popup"><a style="color:white;" href="LogAndReg.php">Close</button></a>

          </p>
        </div>
      </div>
      <!--  <script> 
       // alert("Invalid email or Password!");
        window.location="login.php";
        </script> -->
    <?php

    } else if ($_GET['pesan'] == "verified") {
    ?>
      <div class="popup popup--icon -validation js_error-popup popup--visible">
        <div class="popup__background"></div>
        <div class="popup__content">
          <h3 class="popup__content__title">
            Verified
          </h3>
          <p> Akun anda masih belum diverifikasi </p>
          <p> Verifikasi Sekarang? </p>
          <button class="button button--error" data-for="js_error-popup"><a style="color:white;" href="LogAndReg.php"> Batal</button></a>
          <button class="button button--valid" data-for="js_error-popup"><a style="color:white;" href="LogAndReg.php?pesan=formverifikasi">Iya </button></a>

          </p>
        </div>
      </div>
      <!--  <script> 
     // alert("Invalid email or Password!");
      window.location="login.php";
      </script> -->
    <?php

    } else if ($_GET['pesan'] == "formverifikasi") {
    ?>
      <div class="popup popup--icon -validation js_error-popup popup--visible">
        <div class="popup__background"></div>
        <div class="popup__content">
          <h3 class="popup__content__title">
            Verified
          </h3>
          <p>Masukkan Kode Verifikasi </p>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="hidden" name="email" value="<?php echo $_GET['email'] ?>" />
            <input type="text" placeholder="Kode Verifikasi" name="nama_lengkap" />
          </div>
          <button class="button button--error" data-for="js_error-popup"><a style="color:white;" href="LogAndReg.php"> Batal</button></a>
          <button class="button button--valid" data-for="js_error-popup"><a style="color:white;" href="LogAndReg.php">Iya </button></a>

          </p>
        </div>
      </div>
      <!--  <script> 
       // alert("Invalid email or Password!");
        window.location="login.php";
        </script> -->
  <?php

    }
  }

  ?>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form class="sign-in-form" action="login.php" method="POST">

          <img class="logo" src="img/logo1.png" alt="Logo" />

          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="email" name="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <button type="submit" value="Login" class="btn solid">Login</button>
        </form>

        <!-- FORM REGISTER -->

        <form action="" class="sign-up-form" method="POST">
          <h2 class="title">Register</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="no_telepon" placeholder="No.Telepon" name="telepon" />
          </div>
          <?php echo $msg; ?>
          <input type="submit" class="btn" value="register" name="register" />

        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Belum punya akun?</h3>
          <p>
            Silahkan Register terlebih dahulu
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Register
          </button>
        </div>
        <img src="img/Batik_animasi.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Sudah punya akun ?</h3>
          <p>
            Anda bisa Login
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Login
          </button>
        </div>
        <img src="img/Batik_animasi.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
  <script src="dist/jquery-3.6.1.min.js"></script>
  <script src="dist/sweetalert2.min.js"></script>

  <script>
    // document.querySelector(".alert"){
    //   Swal.fire("Our First Alert", "With some body text and success icon!", "success");
    // };
    $('#alert').on(
      function() {
        Swal.fire({
          type: 'success',
          title: 'Login Berhasil',
          text: 'anda berhasil login'
        })
      }
    )
  </script>
</body>

</html>