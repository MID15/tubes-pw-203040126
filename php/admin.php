<?php
// Melakukan koneksi ke database
require 'functions.php';


// Melakukan Query dari database
$buku = query("SELECT * FROM buku");

// ketika tombol cari diklik
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
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!--Let bbukuser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Questrial&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="../assets/css/admin.css">
  <title>Admin</title>
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
          <ul class="left hide-on-med-and-down">
            <li><a href="../index.php">Home</a></li>
          </ul>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="tambah.php" class="add"><button class="waves-effect waves-light blue darken-3 btn-small">Tambah Data</button></a>
            </li>
            <li>
              <a href="logout.php"><button class="waves-effect waves-light red darken-3 btn-small">Logout</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- SideNav -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="../index.php">Home</a></li>
    <li>
      <a href="tambah.php" class="add"><button class="waves-effect waves-light blue darken-3 btn-small">Tambah Data</button></a>
    </li>
    <li>
      <a href="logout.php"><button class="waves-effect waves-light red darken-3 btn-small">Logout</button></a>
    </li>
  </ul>

  <!-- Daftar Buku -->
  <div class="daftarBuku">
    <h2>Daftar Buku</h2>
    <form action="" method="POST" class="cari">
      <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian" autocomplete="off" class="keyword">
      <button type="submit" name="cari" class="tombol-cari waves-effect waves-light blue darken-3 btn-small">
        <span class="material-icons">
          search
        </span></button>
    </form>
    <div class="cards">
      <?php foreach ($buku as $b) : ?>
        <div class="col s12 m3">
          <div class="card horizontal">
            <div class="card-image">
              <img src="../assets/img/cover/<?= $b["gambar"]; ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <table>
                  <tr>
                    <h4><?= $b["judul"] ?></h4>
                  </tr>
                  <tr>
                    <th>Penulis</th>
                    <td>:</td>
                    <td><?= $b["penulis"] ?></td>
                  </tr>
                  <tr>
                    <th>Penerbit</th>
                    <td>:</td>
                    <td><?= $b["penerbit"] ?></td>
                  </tr>
                  <tr>
                    <th>Tahun Terbit</th>
                    <td>:</td>
                    <td><?= $b["tahun"] ?></td>
                  </tr>
                  <tr>
                    <th>Genre</th>
                    <td>:</td>
                    <td><?= $b["genre"] ?></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="modals">
                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light blue darken-3 btn-small modal-trigger" href="#modal1">Deskripsi</a>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                          <div class="modal-content">
                            <h4>Deskripsi</h4>
                            <p><?= $b["deskripsi"] ?></p>
                          </div>
                          <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Kembali</a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="card-action">
                <a href="ubah.php?id=<?= $b['id']; ?>" class="waves-effect waves-light blue darken-3 btn-small"><span class="material-icons">edit</span></a>
                <a href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm ('apakah anda yakin?')" class="waves-effect waves-light red darken-3 btn-small"><span class="material-icons">delete</span></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/script2.js"></script>

</body>

</html>