-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 02:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_tayang` date NOT NULL,
  `sampai_dengan` date NOT NULL,
  `produser` varchar(300) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `penulis` varchar(300) NOT NULL,
  `produksi` varchar(300) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `tgl_tayang`, `sampai_dengan`, `produser`, `sutradara`, `penulis`, `produksi`, `sinopsis`, `gambar`, `video`) VALUES
(1, 'The Meg', '2018-08-01', '2018-09-01', 'Colin Wilson, Lorenzo Di Bonaventura, Belle Avery', 'Jon Turteltaub', 'Dean Georgaris, Jon Hoeber, Erich Hoeber', 'Warner Bros. Pictures', 'Lima tahun lalu, seorang ahli penyelam laut dan juga mantan Kapten Angkatan Laut bernama Jonas Taylor (Jason Statham) menghadapi marabahaya yang tidak terduga di relung Palung Mariana yang memaksanya untuk membatalkan misinya dan juga meninggalkan crew nya.\r\n\r\nKejadian itu membuatnya mendapatkan penghinaan yang tidak terhormat. Kini ia kembali ke laut pada misi untuk menyelematkan para ilmuwan asal Cina di bawah serangan dari hiu putih sebesar 70 kaki yang bernama Carcharodon Megalodon. Jonas harus mampu menghadapi ketakutan dan resiko hidupnya sendiri, dan juga kehidupan setiap orang yang terperangkap di bawah laut, salah satunya adalah mantan istrinya.', 'meg.jpg', 'meg.mp4'),
(3, 'Mission: Impossible - Fall Out', '2018-08-01', '2018-09-01', 'Jake Myers, J.j. Abrams, Tom Cruise, Christopher Mcquarrie ', 'Christopher Mcquarrie ', 'Christopher Mcquarrie ', 'Universal Pictures', 'Ethan Hunt (Tom Cruise) dalam masa krisis kepercayaan setelah peristiwa di Rogue Nation. Karena itu bos-bosnya di tim IMF memberikan agen baru untuk bekerja dengannya, August Walker (Henry Cavill). Tugasnya adalah menghentikan Ethan jika ia memutuskan untuk kembali membangkang. Bahkan, August tak segan membunuhnya jika situasi memintanya melakukan itu.', 'mi.jpg', 'mi.mp4'),
(4, 'Serindipity', '2018-08-01', '2018-09-01', 'Ferry Angriawan', 'Indra Gunawan', 'Bagus Bramanty', 'Virgo Putra Film', 'Kisah tentang hidup Rani, yang berubah setelah ayahnya meninggal dunia. Namun almarhum masih menyisakan hutang. RANI membuat keputusan paling berat dalam hidupnya. Ia terpaksa menjadi lady escort. Arkan, sang kekasih memutuskan hubungan setelah tahu Rani bersama lelaki lain. \r\n\r\nHidup Rani makin hancur setelah Lola menyebarkan foto-foto Rani bersama om-om. Tak kecuali sahabatnya, Jean, juga menjauhinya. Gibran murid baru di kelas RANI, menjadi sahabat yang selalu membantu Rani. Rani tidak bisa menerima kehadiran Gibran karena hatinya masih untuk Arkan. \r\n\r\nARKAN sebenarnya juga bisa menerima cinta Rani. \r\n\r\nNamun ada satu masalah yang membuat cinta keduanya begitu rumit. Ketulusan menjadi nilai yang sangat berharga bagi hidup perjalanan hidup Rani. \r\n\r\nBegitu juga Arkan, memahami cinta tidaklah bisa hitam putih. Bahwa cinta menjadi rumit ketika sepasang anak muda hanya berbicara dari sisi egoisme. Cinta juga menjadi tiada arti tanpa pernah memahami isi hati.', 'serin.jpg', 'serindipity.mp4'),
(5, 'Ant Man edit', '2018-07-03', '2018-07-26', 'Kevin Feige edit', 'Peyton Reed edit', 'Chris Mckenna, Erik Sommers, Andrew Barrer, Gabriel Ferrari, Paul Rudd edit', 'Walt Disney Pictures edit', 'Pasca kejadian Civil War, Scott Lang (Paul Rudd) kembali bergulat dengan konsekuensi pilihannya sebagai superhero sekaligus sebagai seorang ayah. Saat dia berusaha berjuang untuk menyeimbangkan kembali kehidupannya dirumah dengan tanggungjawabnya sebagai Ant-Man, dia berhadapan dengan Hope van Dyne dan Dr.Hank Pym yang mendesaknya dengan misi baru.\r\n\r\nScott kemudian harus belajar bekerjasama dengan Hope dan bertarung bersama dengan Wasp untuk mengungkap sebuah rahasia besar dari masa lalu.', 'Jailangkung ( 2017 ).jpg', '[LELE21]-first-met-2018.mp4-360.mp4'),
(6, 'Rasuk', '2018-07-04', '2018-07-17', 'Dheeraj Kalwani', 'Ubay Fox', 'Alim Sudio', 'MD Pictures, Dee Company', 'Diangkat dari penulis bestseller DANUR karya Risa Saraswati.\r\n\r\nLANGGIR JANAKA (SHANDY AULIA) tidak pernah mengerti perselisihannya dengan sang ibu yang tidak pernah usai. Ibunya terus menyalahkan dirinya atas kecelakaan yang dialami ayahnya. Bahkan sekali pun ibunya sudah menikah lagi, dan hidup bahagia bersama suami barunya dan memiliki anak bayi, Bakula (1) tetap saja mereka bermusuhan. Ketidakbahagiaan ini membuat Langgir senantiasa merasa iri pada kehidupan tiga sahabatnya, SEKAR TANJUNG, FRANSISCA INGGRID, dan LINTANG KASIH, yang dia anggap jauh lebih sempurna. Semua ini menumpuk menjadi rasa benci dalam hati Langgir. Tempat Langgir curhat hanyalah ABIMANYU (MILLER KHAN) cowok tampan nan lusuh. Sudah sejak lama Langgir menyimpan hati pada Abimanyu, tapi sikap cuek Abimanyu membuat hati Langgir terlunta-lunta. \r\n\r\nSuatu ketika mereka merencanakan pergi untuk berlibur ke Villa di KARMA RINJANI. Tempat yang dianggap angker oleh semua orang. Perjalanan yang harusnya menyenangkan ini menjadi ujian bagi persahabatan mereka. Kemarahan dan kebencian Langgir marah ketika Abimanyu muncul tiba-tiba atas undangan Inggrid, yang sudah resmi jadi kekasihnya. Langgir pun memutuskan untuk pergi meninggalkan sahabat-sahabatnya. Keputusan yang nekad sebenarnya, karena rasa benci yang dibawa Langgir, membuatnya harus menghadapi hal yang paling mengerikan dalam hidupnya. Bukan saja nyawanya yang terancam, tapi juga nyawa seluruh sahabat-sahabat dan keluarganya.', 'rasukk.jpg', 'rasuk.mp4'),
(9, 'Jaran Goyang', '2018-07-01', '2018-07-18', 'Rajesh Punjabi', 'Findo Purwono Hw', 'Wahyu S. Nugroho', 'Intercept Filmcraft', 'Dirga hanyalah seorang tukang kebun yang jatuh cinta kepada Elena, seorang pedangdut populer. Namun cinta Dirga ditolak oleh Elena yang saat itu sudah memiliki pacar bernama Robert.\r\n\r\nKecewa dengan keputusan Elena, Dirga membunuh Robert dan meminta ilmu hitam Jaran Goyang kepada bibinya. Sukses dengan Elena, Dirga tidak berhenti sampai disitu, Ia terus memburu wanita muda demi kepuasaannya.\r\n\r\nSeperti apa kisah percintaan yang di dasari oleh sakit hati dan ilmu hitam ini? Apakah akan berakhir tragis atau bahkan hidup bahagia?', 'jaran.jpg', 'jaran goyang.mp4'),
(11, 'Kulari Ke Pantai', '2018-07-04', '2018-07-18', 'Mira Lesmana', 'Riri Riza', 'Gina S. Noer, Mira Lesmana, Riri Riza, Arie Kriting', 'Miles Films', 'Sam (10th), si anak pantai asal Rote-NTT, beserta Ibunya, Uci, akan melakukan perjalanan darat berdua saja. Rencana perjalanan adalah dari Jakarta dengan tujuan akhir Banyuwangi, untuk menemui surfer idola Sam di pantai G-Land. \r\n\r\nNamun, sehari sebelum keberangkatan, sepupu Sam, Happy (12th), yang sangat berbeda dengan Sam, berulah saat kumpul keluarga di Jakarta. \r\n\r\nDi hadapan banyak orang, Happy merendahkan Sam. Ibu Happy, Kirana, meminta Happy ikut dalam perjalanan Sam dan Uci dengan harapan ia bisa mengenal & menghargai sepupunya lebih baik. \r\n\r\nPerbedaan keduanya membuat perjalanan darat dengan mobil menjadi penuh tantangan dan tidak sesuai rencana. Berbagai situasi tak terduga muncul dan berbagai karakter unik dan lucu mereka temui dalam perjalanan.\r\n\r\nApakah Sam dan Happy akhirnya bisa saling menghargai satu sama lain?', 'lari.jpg', 'laripantai.mp4'),
(15, 'Skyscraper', '2018-08-01', '2018-09-01', '', 'Rawson Marshall Thurber', 'Beau Flynn, Rawson Marshall Thurber, Dwayne Johnso', '', 'Will Ford (Dwayne Johnson) seorang kepala keluarga yang bekerja dibidang analis keamanan untuk bangunan-bangunan pencakar langit diperintahkan untuk mempelajari risiko keamanan untuk bangunan tertinggi di dunia bernama The Pearl di China. \r\n\r\nNamun ternyata ia dijebak dan dijadikan kambing hitam atas kebakaran yang terjadi di gedung itu. Kini ia harus menyelamatkan diri dan keluarganya, membersihkan namanya dan menjaga agar gedung tersebut tidak runtuh.', 'skyscap.jpg', 'skycreper.mp4'),
(23, '13 The Haunted', '2018-07-25', '2018-07-31', 'Raffi Ahmad, Fransen Susanto', 'Rudy Soedjarwo', 'Demas Garin, Talitha Tan', 'RA Pictures', 'Rama, Celsi, Garin, Fira, Farel, Quincy dan Hana adalah sekumpulan anak jetset di ibu kota yang sedang bosan menghamburkan harta orangtua mereka. Ketujuh remaja ini butuh tantangan selain hanya liburan, pesta, atau petualangan khas anak muda sosialita. Mereka punya musuh yang sama yaitu Joy dan Klara yang lagi hits dengan vlog mereka yang dinamakan The Jackal. Yang mengesalkan mereka, The Jackal beken mengalahkan pamor mereka karena vlog mereka yang selalu menceritakan atau meliput keberadaan hantu, yang notabene sangat dicibir oleh ketujuh sahabat ini. \r\n\r\nTerobsesi mengalahkan vlog The Jackal mereka berencana membuat vlog di Pulau Ayunan, sebuah pulau kecil yang dulunya resort mewah namun sekarang terbengkalai karena pemiliknya tanpa sebab yang jelas membantai seluruh keluarganya di pulau tersebut.\r\n\r\nSesampainya di sana mereka terkejut karena resort AYUNAN nggak seperti yang mereka bayangkan. Resort ini ternyata indah, mewah dan nyaman meski nggak besar. Namun dibalik semua keindahan itu ada sebuah misteri yang tersembunyi.\r\n\r\n', '13.jpg', '13.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `no_hp`) VALUES
(4, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1212221');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
