<?php
/*
    Nama    : Mochamad Indra Wahyudi
    NRP     : 203040126
    Shift   : Jum'at 13
    */
?>
<?php
// Melakukan koneksi ke database
require 'php/functions.php';

// Melakukan Query dari database
$buku = query("SELECT * FROM buku");

// cari
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Questrial&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/index.css">
  <title>Index</title>
</head>

<body>
  <!-- NavBar -->
  <div class="navbar-fixed">
    <nav class="indigo darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><span class="material-icons">
              auto_stories
            </span>
            iBooks</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#slider">Home</a></li>
            <li><a href="#buku">Daftar Buku</a></li>
            <li><a href="php/login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- SideNav -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="#slider">Home</a></li>
    <li><a href="#buku">Daftar Buku</a></li>
    <li><a href="php/login.php">Admin</a>
    </li>
  </ul>

  <!-- Slider -->
  <div class="slider scrollspy" id="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/bg/slider1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>iBooks</h3>
          <h5 class="light grey-text text-lighten-3">Menyediakan Infromasi Berbagai Macam Buku</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/bg/slider2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>iBooks</h3>
          <h5 class="light grey-text text-lighten-3">Menyediakan Infromasi Berbagai Macam Buku</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/bg/slider3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>iBooks</h3>
          <h5 class="light grey-text text-lighten-3">Menyediakan Infromasi Berbagai Macam Buku</h5>
        </div>
      </li>
    </ul>
  </div>

  <!-- Daftar Buku -->
  <section class="buku scrollspy" id="buku">
    <h2>Daftar Buku</h2>
    <form action="" method="POST" class="cari">
      <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian" autocomplete="off" class="keyword">
      <button type="submit" name="cari" class="tombol-cari waves-effect waves-light blue darken-3 btn-small">
        <span class="material-icons">
          search
        </span></button>
    </form>
    <div class="cards">
      <?php foreach ($buku as $row) : ?>
        <div class="col s12 m3">
          <div class="card horizontal">
            <div class="card-image">
              <img src="assets/img/cover/<?= $row["gambar"]; ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p class="judul"><?= $row["judul"]; ?></p>
                <br>
                <p class="penulis"><?= $row["penulis"]; ?></p>
              </div>
              <div class="card-action">
                <a href="php/detail.php?id=<?= $row['id']; ?>" class="waves-effect waves-light blue darken-3 btn-small">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Footer -->
  <footer class="white-text center blue-grey darken-2">
    <p>Mochamad Indra Wahyudi. &copy;2020</p>
  </footer>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>