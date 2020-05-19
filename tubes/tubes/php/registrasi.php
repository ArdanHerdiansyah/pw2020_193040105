<?php 

    require 'function.php';

    if (isset($_POST['register'])) {
      if (registrasi($_POST) >0) {
        echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
          </script>";
      } else {
        echo "<script>
            alert('Registrasi Gagal!');
            document.location.href = 'login.php';
          </script>";
      }
    }

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
 <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic; text-align: center; font-size: 30px; margin: auto;">Username atau Password Anda Salah</p>
      <?php endif; ?>
  <div class="kotak_login" style="border-radius: 50px;">
    <p class="a">Silahkan Registrasi</p>
 
    <form action="" method="post">

      <label for="username">Username</label>
      <input type="text" name="username" class="b" placeholder="Username">
 
      <label for="password">Password</label>
      <input type="password" name="password" class="b" placeholder="Password">
 
      
      <input type="submit" name="register" class="c" value="REGISTER">
      <center>
        <a class="link" href="../index.php">kembali</a>
      </center>
    </form>
    
  </div>
 
 
</body>
</html>