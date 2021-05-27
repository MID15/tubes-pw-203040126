<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user berhasil ditambahkan');
          document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
          alert('user gagal ditambahkan');
          document.location.href = 'login.php';
          </script>";
  }
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
  <title>Registrasi</title>
</head>

<body>
  <div class="container">
    <h1>Registrasi</h1>
    <form action="" method="POST">
      <div class="form-field">
        <label>Username</label>
        <input type="text" name="username" autofocus autocomplete="off" required>
      </div>
      <br>
      <div class="form-field">
        <label>Password</label>
        <input type="password" name="password1" required>
      </div>
      <br>
      <div class="form-field">
        <label>Konfirmasi Password</label>
        <input type="password" name="password2" required>
      </div>
      <br>
      <div class="button form-field">
        <a href="login.php" class="waves-effect waves-light red darken-3 btn-small">Kembali</a>
        <button type="submit" name="registrasi" class="waves-effect waves-light blue darken-3 btn-small">Register</button>
      </div>
      <br>
    </form>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>