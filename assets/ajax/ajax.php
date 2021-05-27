<?php
require '../../php/functions.php';

$buku = cari($_GET['keyword']);
?>
<?php if (empty($buku)) : ?>
  <p style="color: red; font-style: italic;">Data buku tidak ditemukan</p>
<?php endif; ?>
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