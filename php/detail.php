<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak ada maka akan dikembalikan ke index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require "functions.php";

// Mengambil id dari url

$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id = $id");
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
  <link rel="stylesheet" href="../assets/css/detail.css">
  <title>Detail</title>
</head>

<body>
  <!-- Detail -->
  <section class="detail">
    <div class="container">
      <div class="col s12 m3">
        <div class="card horizontal">
          <div class="card-image">
            <img src="../assets/img/cover/<?= $buku["gambar"]; ?>">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5>Keterangan</h5>
              <table>
                <tr>
                  <th> Judul</th>
                  <td>:</td>
                  <td><?= $buku["judul"] ?></td>
                </tr>
                <tr>
                  <th>Penulis</th>
                  <td>:</td>
                  <td><?= $buku["penulis"] ?></td>
                </tr>
                <tr>
                  <th>Penerbit</th>
                  <td>:</td>
                  <td><?= $buku["penerbit"] ?></td>
                </tr>
                <tr>
                  <th>Tahun Terbit</th>
                  <td>:</td>
                  <td><?= $buku["tahun"] ?></td>
                </tr>
                <tr>
                  <th>Genre</th>
                  <td>:</td>
                  <td><?= $buku["genre"] ?></td>
                </tr>
              </table>
            </div>
            <div class="card-action">
              <div class="modals">
                <a class="waves-effect waves-light blue darken-3 btn-small modal-trigger" href="#modal1">Deskripsi</a>
                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <h4>Deskripsi</h4>
                    <p><?= $buku["deskripsi"] ?></p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Kembali</a>
                  </div>
                </div>
              </div>
              <a href="../index.php" class="waves-effect waves-light red darken-3 btn-small">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>