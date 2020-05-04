<?php 

    session_start();
    require 'function.php';
    //melakukan pengecekan apakah sudah melakukan login jika sudah redirect ke halaman admin
    if (isset($_SESSION['username'])) {
      header("Location: admin.php");
      exit();
    }
    //login
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
      //mencocokan USERNAME dan PASSWORD
      if (mysqli_num_rows($cek_user) > 0) {
        $rows = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
          header("Location: admin.php");
          die;
        }
        header("Location: ../admin.php");
        die;
      }
      $error = true;
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
  <div class="kotak_login">
    <p class="a">Silahkan login</p>
 
    <form action="" method="post">

      <label for="username">Username</label>
      <input type="text" name="username" class="b" placeholder="Username">
 
      <label for="password">Password</label>
      <input type="password" name="password" class="b" placeholder="Password">
 
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember Me</label>
      </div>
      <input type="submit" name="submit" class="c" value="LOGIN">
      <center>
        <a class="link" href="../index.php">kembali</a>
      </center>
    </form>
    
  </div>
 
 
</body>
</html>