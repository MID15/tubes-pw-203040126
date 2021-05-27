<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['login'])) {
  if ($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
  if (isset($_SESSION['login'])) {
    header("Location: admin.php");
    exit;
  }
}


// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Questrial&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- Css -->
  <link rel="stylesheet" href="../assets/css/login.css">
  <title>Admin</title>
</head>

<body>
  <?php if (isset($login['error'])) : ?>
    echo "<script>
      alert('Username / Password Salah');
      document.location.href = 'login.php';
    </script>";
  <?php endif; ?>

  <div class="container">
    <h1>Admin</h1>
    <form action="" method="POST">
      <div class="form-field">
        <label>Username</label>
        <input type="text" name="username" autofocus autocomplete="off" required>
      </div>
      <br>
      <div class="form-field">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>
      <br>
      <div class="form-field">
        <label for="remember">
          <input type="checkbox" name="remember" id="remember">
          <span>Remember Me</span>
        </label>
      </div>
      <br>
      <div class="button form-field">
        <a href="../index.php" class="waves-effect waves-light red darken-3 btn-small">Kembali</a>
        <button type="submit" name="login" class="waves-effect waves-light blue darken-3 btn-small">Login</button>
      </div>
      <br>
      <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">disini</a></p>
      </div>
    </form>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>