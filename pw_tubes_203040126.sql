-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 27, 2021 at 02:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040126`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `judul`, `penulis`, `penerbit`, `tahun`, `genre`, `deskripsi`) VALUES
(1, 'hujan.png', 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', 'Januari 2016', 'Science-Fiction', 'LAIL. Menjadi yatim-piatu sejak bencana melanda bumi. Sebuah bencana yang memusnahkan banyak umat manusia. Kota indah mereka telah hancur oleh gempa bumi berkekuatan 10 skala Richter. Sedikit sekali dalam catatan sejarah, ada gempa sekuat itu, yang tenaganya mampu menghancurkan benua. Gedung-gedung bertumbangan, jalan layang rebah, penduduk kota berteriak-teriak, berlarian menyelamatkan diri. Suara sirene terdengar memekakkan telinga. Belum lagi ditambah tsunami yang menerjang.'),
(2, 'marmut.png', 'Marmut Merah Jambu', 'Raditya Dika', 'Bukune', 'Juni 2010', 'Comedy', ' Marmut Merah Jambu ini berkisah tentang Dika yang menceritakan kisah cinta pertamanya ketika masa SMA, dengan perempuan bernama Ina Mangunkusumo. Selain itu dikisahkan pula saat Dika dan temannya Bertus yang membentuk grup detektif untuk memecahkan masalah teman-temannya, juga persahabatannya dengan Cindy.'),
(3, 'omen.png', 'Omen', 'Lexie Xu', 'Gramedia Pustaka utama', 'September 2012', 'Thriller, Romance', 'Bagaimana rasanya punya saudara kembar? Menyenangkan? Aku rasa tidak semua orang berpendapat seperti itu. Setidaknya bagi si Kembar Eliza dan Erika Guruh. Keduanya kembar identik secara fisik, namun sangat berbeda dalam penampilan dan sikap.  Eliza Guruh lebih memilih berpenampilan anggun, feminin, cantik, lembut, menyenangkan, populer, dan disenangi semua orang. Berkebalikan dengan Erika Guruh, sang kakak yang lebih memilih jadi anak bandel dan merupakan preman sekolah dengan penampilan gotikny'),
(4, 'bumi.png', 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', 'Januari 2014', 'Bildungsroman, Fiksi petualangan, Fantasi', 'Namaku Raib, usiaku 15 tahun, kelas sepuluh. Aku anak perempuan seperti kalian, adik-adik kalian, tetangga kalian. Aku punya dua kucing, namanya si Putih dan si Hitam. Mama dan papaku menyenangkan. Guru-guru di sekolahku seru. Teman-temanku baik dan kompak. Aku sama seperti remaja kebanyakan, kecuali satu hal. Sesuatu yang kusimpan sendiri sejak kecil. Sesuatu yang menakjubkan. Namaku Raib. Dan aku bisa menghilang. Buku pertama dari serial \"BUMI\"'),
(5, 'buma.png', 'Bumi Manusia', 'Pramoedya Ananta Toer\"', 'Hasta Mitra', '1980', 'Drama Histori', 'Bumi Manusia adalah salah satu novel yang ceritanya mengalir dan di dalamnya mengandung konflik-konflik monumental. Kisah di dalamnya adalah tentang kondisi sosial dengan latar waktu di akhir abad 19 hingga abad 20.  Kisah yang diangkat adalah percintaaan warga pribumi dengan seorang gadis Indo yang merupakan keturunan Belanda.'),
(6, 'maut.png', 'Permainan Maut', 'Lexie Xu', 'Gramedia Pustaka Utama', 'November 2011', 'Thriller, Romance, Teenlit', 'Novel berjudul “Permainan Maut” merupakan salah satu novel yang diciptakan oleh novelis terkenal kebanggaan Indonesia yang bernama Lexie Xu. Lexie Xu sendiri adalah seorang penulis kisah-kisah bergenre misteri dan thriller. Novel ini merupakan novel ke-3 edisi Johan Series dari total 4 novel. Cerita dalam novel ini bermula dari sebuah email yang berasal dari teman lama Tony.'),
(7, 'salmon.png', 'Manusia Setengah Salmon', 'Raditya Dika', 'GagasMedia', 'Desember 2011', 'Comedy', 'Novel ini menceritakan tentang karakter dika yang harus beranjak dewasa, dimana dia harus melewati fase the grow up yang dimana sakit karena patah hati dan diibaratkan dengan pindah rumah, pindah rumah dan merapihkan kekacauan adalah hal yang dapat membuat orang menjadi lebih dewasa.'),
(8, 'negeri.png', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 'Juli 2009', 'Edukasi, Religi, Roman', 'Negeri 5 Menara adalah roman karya Ahmad Fuadi yang diterbitkan oleh Gramedia pada tahun 2009. Novel ini bercerita tentang kehidupan 6 santri dari 6 daerah yang berbeda menuntut ilmu di Pondok Madani (PM) Ponorogo Jawa Timur yang jauh dari rumah dan berhasil mewujudkan mimpi menggapai jendela dunia.'),
(9, 'ranah.png', 'Ranah 3 Warna', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 'Januari 2011', 'Edukasi, Religi, Roman\r\n', 'Novel ini merupakan kedua dari trilogi Negeri 5 Menara bercerita tentang Alif yang baru selesai menamatkan sekolah di Pondok Madani (PM) Ponorogo Jawa Timur dan perjalanannya mewujudkan mimpi menjadi Habibie di Teknologi Tinggi Bandung, lalu merantau untuk menggapai jendela dunia sampai ke Amerika.'),
(10, 'kopi.png', 'Filosofi Kopi', 'Dewi Lestari', 'Jakarta: Trude Books &amp; GagasMedia', '2006', 'Roman', 'Filosofi Kopi merupakan sebuah buku kumpulan prosa dan cerpen. Melalui buku ini Dewi atau yang biasa dikenal Dee menceritakan tentang dua orang lelaki yaitu Ben dan Jody  yang membangun sebuah usaha kedai kopi mulai dari nol. Ben merupakan barista yang sangat antusias dengan kopi juga handal dalam meramu sebuah kopi. Dengan kegigihannya dalam membangun kedai kopi itu, Ben pergi berkeliling dunia mencari koresponden  di mana-mana demi mendapatkan kopi-kopi terbaik dari seluruh negeri. Dia berkonsultasi dengan dengan pakar-pakar peramu kopi dari Roma, Paris, Amsterdam, London, New York, dan Moskow. Ben, dengan kemampuan berbahasa pas-pasan, mengemis-ngemis agar bisa menyelusup masuk dapur, menyelinap ke bar saji, mengorek-ngorek rahasia ramuan kopi dari barista-barista demi mengetahui takaran paling pas untuk membuat cafe latte, cappucino, espresso, russian coffe, irish coffe, macchiato, dan lain – lain.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
