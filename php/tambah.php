<?php
require 'functions.php';

if (isset($_POST["tambah"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'admin.php';
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

  <!--Let bbukuser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- css -->
  <link rel="stylesheet" href="../assets/css/tambah.css">
  <title>Tambah Data</title>
</head>

<body>

</html>
<div class="tambah">
  <div class="container">
    <h3>Tambah Data Buku</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-field">
        <label> Judul </label>
        <input type="text" name="judul" required autofocus>
      </div>
      <div class="form-field">
        <label> Penulis </label>
        <input type="text" name="penulis" required>
      </div>
      <div class="form-field">
        <label> Penerbit </label>
        <input type="text" name="penerbit" required>
      </div>
      <div class="form-field">
        <label> Tahun Terbit </label>
        <input type="text" name="tahun" required>
      </div>
      <div class="form-field">
        <label> Genre </label>
        <input type="text" name="genre" required>
      </div>
      <div class="form-field">
        <label> Deskripsi </label>
        <textarea name="deskripsi" cols="30" rows="10" required></textarea>
      </div>
      <div class="form-field">
        <label> Cover </label>
        <input type="file" name="gambar" onchange="previewImage()" class="gambar">
        <img src="../assets/img/cover/nophoto.jpg" width="120" style="display: block;" class="img-preview">
      </div>
      <div class="button form-field">
        <button type="submit" name="tambah" class="waves-effect waves-light blue darken-3 btn-small">Tambah Data!</button>
        <a href="admin.php" style="color: white; text-decoration: none;" class="waves-effect waves-light red darken-3 btn-small">Kembali</a>
      </div>
    </form>
  </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script src="../assets/js/script.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>