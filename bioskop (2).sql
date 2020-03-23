-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Februari 2016 jam 05:19
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `no_kwitansi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `harga_bayar` int(11) NOT NULL,
  `dibayar` int(11) NOT NULL,
  `bukti` varchar(1500) NOT NULL,
  `acc` int(11) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(100) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `tgl_tayang` date NOT NULL,
  `sampai_dengan` date NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `jenis_film` varchar(50) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `judul`, `tgl_tayang`, `sampai_dengan`, `sutradara`, `jenis_film`, `durasi`, `sinopsis`, `gambar`) VALUES
(1, 'London Love Story', '2016-02-23', '2016-02-25', 'blabla', 'drama', '2 jam', 'Cinta bukanlah cinta, jika menyerah..\r\n			Adalah Dave (Dimas anggara), kepopulerannya di kalangan para mahasiswa ternyata tidak dapat menutupi kekosongan hatinya, \r\n			sejak ditinggalkan oleh satu satunya cewek yang dicintainya. Cewek yang lenyap dari hidupnya justru di saat Dave ingin \r\n			menjadikannya cinta terakhir. Suatu malam ketika baru pulang ...', '3.jpg'),
(2, 'Surat Dari Praha', '2016-02-15', '2016-02-17', 'blank', 'drama', '1,5 jam', '			Larasati (Julie Estelle) atas desakan keadaan terpaksa memenuhi wasiat ibunya, Sulastri (Widyawati Sofyan) untuk menhantarkan \r\n		sebuah kotak dan sepucuk surat untuk Jaya (Tio Pakusadewo) di Praha. Dibesarkan di tengah kehidupan keluarga yang tidak harmonis \r\n		membuat hubungan Larasati dan ibunya tidak pernah benar-benar baik. Pertemuan dengan ...', '11.jpg'),
(3, 'Jingga', '2016-02-19', '2016-02-22', 'afeh', 'drama', '2 jam', 'Bukan hanya kisah 4 remaja tunanetra luar biasa yang bertemu dalam dunia tanpa cahaya, tapi juga kisah seorang ibu yang berjuang keras mebantu anaknya menemukan kembali kegembiraan dan dunia nya setelah di vonis buta.\r\n\r\nDi SLB, Jingga mengenal Marun, Nila, dan Magenta. Tiga sahabat baru ini juga menunjukkan pada Jingga bahwa mereka bisa mandiri sekalipun memiliki kekurangan dalam penglihatan. Mereka membentuk group musik dan menyiapkan rekaman untuk sebuah kompetisi musik.\r\n\r\nBisakah Jingga melalui semua ini dan kembali menemukan semangat hidupnya?\r\n\r\nKembalikah cahaya hidup Jingga yang sudah bertahun-tahun hilang? ', '15.jpg'),
(4, 'Facebook', '2016-02-04', '2016-02-03', 'ee', 'drama', '23', 'ddf', '4219522-enjoying-party-vector.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `hari`, `harga`) VALUES
(1, 'senin', '20000'),
(2, 'selasa', '20000'),
(3, 'rabu', '20000'),
(4, 'kamis', '20000'),
(5, 'jumat', '20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(100) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(100) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `telpon` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status_order` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Baru',
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  PRIMARY KEY (`id_orders`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=70 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_detail`
--

CREATE TABLE IF NOT EXISTS `orders_detail` (
  `id_orders` int(5) NOT NULL,
  `id_film` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `id_film`) VALUES
(31, 1),
(35, 1),
(38, 1),
(40, 1),
(54, 1),
(56, 1),
(57, 1),
(57, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(100) NOT NULL AUTO_INCREMENT,
  `kode_pesan` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_film` int(100) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `kategori_kursi` varchar(12) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jml_tiket` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tgl_tayang` date NOT NULL,
  `jam_tayang` time NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `kode_pesan`, `id_user`, `id_film`, `no_kursi`, `kategori_kursi`, `tgl_pesan`, `jml_tiket`, `harga`, `tgl_tayang`, `jam_tayang`) VALUES
(1, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(2, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(3, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(4, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(5, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(6, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(7, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(8, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(9, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(10, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(11, '', 6, 3, '1', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(12, '', 6, 3, '2', '', '0000-00-00', '', 0, '0000-00-00', '00:00:00'),
(15, '2', 0, 0, '$tgl_tayang', 'VIP', '2016-02-21', '', 40000, '0000-00-00', '00:00:00'),
(16, '2', 0, 2, '$tgl_tayang', 'VIP', '2016-02-21', '', 40000, '0000-00-00', '00:00:00'),
(17, '2', 0, 2, '$tgl_tayang', 'VIP', '2016-02-21', '', 40000, '0000-00-00', '00:00:00'),
(18, '2', 0, 2, '$tgl_tayang', 'VIP', '2016-02-21', '', 40000, '0000-00-00', '00:00:00'),
(19, '2', 0, 0, '$tgl_tayang', 'VIP', '2016-02-21', '', 40000, '0000-00-00', '00:00:00'),
(20, '2', 0, 0, '$tgl_tayang', 'VIP', '2016-02-21', '', 40000, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
  `id_tiket` int(100) NOT NULL AUTO_INCREMENT,
  `id_film` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah_tiket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tiket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `jenis_kelamin`, `usia`, `no_hp`) VALUES
(1, 'defi', 'defi', '111213', 'deff.dwiwuu@gmail.com', 'p', '12', '087756653564'),
(2, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'deff_dwie@yahoo.com', 'L', '1', '1'),
(3, '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', 'd@yahoo.com', 'L', '2', '2'),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(5, '456', '4', 'a87ff679a2f3e71d9181a67b7542122c', 'a@g.com', 'L', '2', '3'),
(6, '5', '5', 'e4da3b7fbbce2345d7772b0674a318d5', 'f@f.com', 'L', '12', '111'),
(7, '5', 'aku', 'c20ad4d76fe97759aa27a0c99bff6710', 'f@f.com', 'L', '12', '111'),
(8, 'wulandari', 'wulan', 'e3cdf70a99c1d6890c54ad56bd4a5de1', 'deff.dwiwuu@gmail.co.id', 'P', '12', '087755174798');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
