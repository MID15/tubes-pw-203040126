<?php

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw_tubes_203040126", "3307");
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //       alert('gambar wajib dipilih');
        //       </script>";
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
          alert('yang anda pilih bukan gambar');
          </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
          alert('yang anda pilih bukan gambar');
          </script>";
        return false;
    }

    // cek ukuran file
    // maks 5mb = 5000000 byte
    if ($ukuran_file > 5000000) {
        echo "<script>
        alert('ukuran file terlalu besar');
        </script>";
        return false;
    }

    // lolos pengecekan
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/cover/' . $nama_file_baru);

    return $nama_file_baru;
}
function tambah($data)
{
    $conn = koneksi();

    $gambar = upload();
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun = htmlspecialchars($data['tahun']);
    $genre = htmlspecialchars($data['genre']);
    $deskripsi = htmlspecialchars($data['deskripsi']);


    $query = "INSERT INTO
                buku
            VALUES
            (null, '$gambar','$judul', '$penulis', '$penerbit', '$tahun', '$genre', '$deskripsi')
          ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = ($data['id']);
    $gambar = upload();
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun = htmlspecialchars($data['tahun']);
    $genre = htmlspecialchars($data['genre']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "UPDATE buku SET
            gambar = '$gambar',
            judul = '$judul',
            penulis = '$penulis',
            penerbit = '$penerbit',
            tahun = '$tahun',
            genre = '$genre',
            deskripsi = '$deskripsi'
            WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku
            WHERE 
            judul LIKE '%$keyword%' OR 
            penulis LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek username
    if ($user = query("SELECT * from user WHERE username ='$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('login', 'true');
            }

            header("Location: admin.php");
            exit;
        }
    }
    return [
        'error' => true,
        'pesan' => 'Username / password salah'
    ];
}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
          alert('username / password kosong');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
          alert('username sudah terdaftar');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
          alert('password tidak sesuai');
          document.location.href = 'registrasi.php';
           </script>";
        return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
          alert('password minimal 5 karakter');
          document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    // insert ke table user
    $query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
