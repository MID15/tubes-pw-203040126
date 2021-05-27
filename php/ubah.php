<?php
require 'functions.php';

$id = $_GET['id'];
$b = query("SELECT * FROM buku WHERE id = $id");

if (isset($_POST["ubah"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('data berhasil diubah');
      document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
      alert('error');
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
  <link rel="stylesheet" href="../assets/css/ubah.css">
  <title>Ubah Data</title>
</head>

<body>

</html>
<div class="tambah">
  <div class="container">
    <h3>Ubah Data Buku</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $b['id']; ?>">
      <div class="form-field">
        <label> Judul </label>
        <input type="text" name="judul" required autofocus value="<?= $b['judul']; ?>">
      </div>
      <div class="form-field">
        <label> Penulis </label>
        <input type="text" name="penulis" required value="<?= $b['penulis']; ?>">
      </div>
      <div class="form-field">
        <label> Penerbit </label>
        <input type="text" name="penerbit" required value="<?= $b['penerbit']; ?>">
      </div>
      <div class="form-field">
        <label> Tahun Terbit </label>
        <input type="text" name="tahun" required value="<?= $b['tahun']; ?>">
      </div>
      <div class="form-field">
        <label> Genre </label>
        <input type="text" name="genre" required value="<?= $b['genre']; ?>">
      </div>
      <div class="form-field">
        <label> Deskripsi </label>
        <textarea name="deskripsi" id="" cols="30" rows="10"><?= $b['deskripsi']; ?></textarea>
      </div>
      <div class="form-field">
        <label> Cover </label>
        <input type="file" name="gambar" onchange="previewImage()" class="gambar">
        <img src="../assets/img/cover/<?= $b['gambar']; ?>" width="120" style="display: block;" class="img-preview">
      </div>
      <div class="button form-field">
        <button type="submit" name="ubah" class="waves-effect waves-light blue darken-3 btn-small">Ubah Data!</button>
        <a href="admin.php" style="color: white; text-decoration: none;" class="waves-effect waves-light red darken-3 btn-small">Kembali</a>
      </div>
    </form>
  </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script src="../assets/js/script.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>