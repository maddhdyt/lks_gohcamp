-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 02:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gohcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `img_src` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `writer_name` text NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `title`, `description`, `image`, `img_src`, `date`, `writer_name`, `slug`) VALUES
(16, 'WOW! Harga tiket kemping di samalengoh cuman 15 Ribu', 'eryery leqwirfwioeghvweighv qwoifhu qwefrhjd qwo qwekr hjqw qwrj wqworfj wq wriqwoejf qpwo riowqr fqwopr ', '1376496847_12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg', 'https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2020/08/111108081414/12-1-Agrowisata-Kampung-N', '2023-04-13', 'Ahmad Hidayat', 'Apa Itu Berita'),
(17, 'Keindahan Sunset di Samalengoh ', 'eryery leqwirfwioeghvweighv qwoifhu qwefrhjd qwo qwekr hjqw qwrj wqworfj wq wriqwoejf qpwo riowqr fqwopr ', '535985545_599016194_gambar1.jpeg', 'https://sumedang.jabarekspres.com/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-15-at-12.35.16.jpeg', '2023-04-13', 'Ahmad Hidayat', 'Apa Itu Berita'),
(18, 'Berita 1', 'lorem ipsum', '1384841670_IMG_0431.JPG', 'gatau', '2023-04-13', 'Ahid', '-'),
(19, 'Berita 2', 'lorem ipsium', '161875727_IMG_0426.JPG', 'ifsu', '2023-04-13', 'Ahmad Hidayat', 'Apa Itu Berita'),
(20, 'Berita 3', 'lorem ipsium', '984332272_kevin-laminto-hSeh-3ID830-unsplash.jpg', '-', '2023-04-13', 'Ahmad Hidayat', 'Apa Itu Berita'),
(21, 'Berita 4', 'lorem ipsium', '765685576_michael-dziedzic-gEN5Btvf2Eg-unsplash.jpg', 'unsplash', '2023-04-13', 'Ahmad Hidayat', 'Apa Itu Berita'),
(22, 'Berita 5', 'lorem ipsium', '283651706_clay-banks-hwLAI5lRhdM-unsplash (1) (1).jpg', '-', '2023-04-13', 'Ahmad Hidayat', '-'),
(23, 'Berita baru', 'lorem ipsium', '1947293980_161875727_IMG_0426.JPG', '-', '2023-04-13', 'Ahmad Hidayat', '-');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `source` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `title`, `image`, `source`) VALUES
(3, 'sunset di samalengoh', '599016194_gambar1.jpeg', 'https://sumedang.jabarekspres.com/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-15-at-12.35.16.jpeg'),
(5, 'gambar 2', '1553040383_12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg', 'https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2020/08/111108081414/12-1-Agrowisata-Kampung-N'),
(6, 'adadad', '383113577_12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg', 'https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2020/08/111108081414/12-1-Agrowisata-Kampung-N'),
(7, 'adad', '1972001419_12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg', 'adad'),
(8, 'adad', '1114338850_599016194_gambar1.jpeg', 'https://sumedang.jabarekspres.com/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-15-at-12.35.16.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `icon_name` text NOT NULL,
  `bg_banner` text NOT NULL,
  `source_banner` varchar(111) NOT NULL,
  `head_desc` text NOT NULL,
  `profil_desc` varchar(1111) NOT NULL,
  `profil_video` text NOT NULL,
  `gmaps` text NOT NULL,
  `address` text NOT NULL,
  `contact` int(20) NOT NULL,
  `email` text NOT NULL,
  `med_facebook` text NOT NULL,
  `med_instagram` text NOT NULL,
  `med_tiktok` text NOT NULL,
  `med_youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `icon_name`, `bg_banner`, `source_banner`, `head_desc`, `profil_desc`, `profil_video`, `gmaps`, `address`, `contact`, `email`, `med_facebook`, `med_instagram`, `med_tiktok`, `med_youtube`) VALUES
(1, '', '992635292_12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg', 'https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2020/08/111108081414/12-1-Agrowisata-Kampung-N', 'Wisata alam sumedang yang cocok untuk kemah dan menikmati pemandangan', 'Samalengoh tempat dengan keaestetikan alam, tempat  dengan keindahan cantik dan sejuk. Untuk kamu yang mau pergi berlibur atau liburan bareng teman-teman, Samalengoh camping ground sangat cocok kamu kunjungi dan rasakan keindahan alamnya. Tempatnya di Sumedang lokasinya berada di Bumi Perkemahan Blok Gunung Gajah atau biasa disebut Samalengoh Camping Ground.\r\nSamalengoh tempat dengan keaestetikan alam, wisata menarik yang harus kalian kunjungi\r\nWisata alam karena keindahan yang dimilikinya, tempat wisata di Sumedang yang satu ini kini menjadi percakapan yang hangat di tempat sosial karena pemandangannya. Tak jarang pengunjung yang mampir kebanyakan dari daerah lain, seperti Purwakarta dan Bandung.  Mereka datang untuk nikmati malam di ketinggian bersama dengan cara camping.', 'https://www.youtube.com/embed/Ab2kNKiabrY', 'https://goo.gl/maps/ohBxbDRa5ifVvWJX9', 'Gunturmekar, Kec. Tanjungkerta, Kabupaten Sumedang, Jawa Barat 45354', 2147483647, 'gohcamp.smd@gmail.com', 'https://facebook.com/samalengoh.camp', 'https://instagram.com/samalengoh.camp', 'https://tiktok.com/samalengoh.camp', 'https://youtube.com/samalengoh.camp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
