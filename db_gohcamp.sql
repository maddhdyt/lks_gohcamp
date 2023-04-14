-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 11:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `keyword` text NOT NULL,
  `slug` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `title`, `description`, `image`, `img_src`, `date`, `writer_name`, `keyword`, `slug`) VALUES
(16, 'WOW Harga tiket kemping di samalengoh cuman 15 Ribu', '&lt;p&gt;eryery leqwirfwioeghvweighv qwoifhu qwefrhjd qwo qwekr hjqw qwrj wqworfj wq wriqwoejf qpwo riowqr fqwopr&lt;/p&gt;', '861493574_310997582_1286671558789540_1869401465051778944_n.jpg', 'https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2020/08/111108081414/12-1-Agrowisata-Kampung-N', '2023-04-14', 'Ahmad Hidayat', 'Apa Itu Berita', 'WOW-Harga-tiket-kemping-di-samalengoh-cuman-15-Ribu'),
(17, 'Keindahan Sunset di Samalengoh ', '&lt;p&gt;eryery leqwirfwioeghvweighv qwoifhu qwefrhjd qwo qwekr hjqw qwrj wqworfj wq wriqwoejf qpwo riowqr fqwopr&lt;/p&gt;', '535985545_599016194_gambar1.jpeg', 'https://sumedang.jabarekspres.com/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-15-at-12.35.16.jpeg', '2023-04-14', 'Ahmad Hidayat', 'Apa Itu Berita', 'Keindahan-Sunset-di-Samalengoh'),
(32, 'Samalengoh Berketinggian 804 MDPL', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '1068650863_berita_20210516085138.jpg', 'https://sumedangkab.go.id/data/images/featured_image/uploads/berita_20210516085138.jpg', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Samalengoh-Berketinggian-804-MDPL'),
(33, 'Negeri Diatas Awan Samalengoh Sumedang', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '601659780_Negeri-di-Atas-Awan-Sumalengoh-Sumedang.jpg', 'https://kataomed.com/wp-content/uploads/2021/03/Negeri-di-Atas-Awan-Sumalengoh-Sumedang.jpg', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Negeri-Diatas-Awan-Samalengoh-Sumedang'),
(34, 'Gunung Tampomas Dapat Terlihat dari Samalengoh Camp', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '461968147_Samalengoh-Camp-Tanjungkerta-Sumedang-1-e1616924881312.jpg', 'https://kataomed.com/wp-content/uploads/2021/03/Samalengoh-Camp-Tanjungkerta-Sumedang-1-e1616924881312.jpg', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Gunung-Tampomas-Dapat-Terlihat-dari-Samalengoh-Camp'),
(35, 'Suasana Malam Samalengoh', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '1223937460_destinasi-wisata-di-sumedang-3_169.jpeg', 'https://awsimages.detik.net.id/community/media/visual/2020/10/23/destinasi-wisata-di-sumedang-3_169.jpeg?w=780&', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Suasana-Malam-Samalengoh'),
(36, 'Kondisi Jalan Menuju Samalengoh Camp', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '230792338_Sumedang1598510810.jpg', 'https://sumedangkab.go.id/data/images/featured_image/uploads/Sumedang1598510810.JPG', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Kondisi-Jalan-Menuju-Samalengoh-Camp'),
(37, 'Masjid Agung Sumedang', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '162937566_masjid-agung-sumedang..png', 'https://www.kontraktorkubahmasjid.com/wp-content/uploads/2017/12/masjid-agung-sumedang..png', '2023-04-14', 'Dadan Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Masjid-Agung-Sumedang'),
(38, 'Samalengoh Camp Tak Pernah Sepi Pengunjung', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '2050412191_Sumedang1606041614.jpg', 'https://sumedangkab.go.id/data/images/featured_image/uploads/Sumedang1606041614.jpg', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Samalengoh-Camp-Tak-Pernah-Sepi-Pengunjung'),
(39, 'Jalan ke Samalengoh Camp Sudah Mulus', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '1554963482_Sumedang1606121015.jpg', 'vhttps://sumedangkab.go.id/data/images/featured_image/uploads/Sumedang1606121015.jpg', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'Jalan-ke-Samalengoh-Camp-Sudah-Mulus'),
(40, 'View Drone Samalengoh', '&lt;p&gt;As an &lt;a href=&quot;https://www.deepadvantage.com/blog/lorem-ipsum/&quot;&gt;alternative theory&lt;/a&gt;, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of &lt;i&gt;De Finibus&lt;/i&gt; which challenges McClintock&#039;s 15th century claims and suggests that the dawn of &lt;i&gt;lorem ipsum&lt;/i&gt; was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”&lt;/p&gt;', '1452306118_lokasi-Tanjungkerta-Sumedang-e1616924752871.jpg', 'https://kataomed.com/wp-content/uploads/2021/03/lokasi-Tanjungkerta-Sumedang-e1616924752871.jpg', '2023-04-14', 'Ahmad Hidayat', 'artikel baru, artikel terbaru, artikel samalengoh', 'View-Drone-Samalengoh');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `source` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `image`, `source`) VALUES
(9, '137868830_Samalengoh-Camp-Tanjungkerta-Sumedang-1-e1616924881312.jpg', 'https://kataomed.com/wp-content/uploads/2021/03/Samalengoh-Camp-Tanjungkerta-Sumedang-1-e1616924881312.jpg'),
(10, '1569744462_destinasi-wisata-di-sumedang-3_169.jpeg', 'https://awsimages.detik.net.id/community/media/visual/2020/10/23/destinasi-wisata-di-sumedang-3_169.jpeg?w=780&'),
(11, '531467574_Sumedang1598510810.jpg', 'https://sumedangkab.go.id/data/images/featured_image/uploads/Sumedang1598510810.JPG'),
(12, '89387803_Sumedang1606041614.jpg', 'https://sumedangkab.go.id/data/images/featured_image/uploads/Sumedang1606041614.jpg'),
(13, '1877377678_Sumedang1606121015.jpg', 'https://sumedangkab.go.id/data/images/featured_image/uploads/Sumedang1606121015.jpg'),
(14, '725613388_@gilangpramaaa.webp', 'https://i0.wp.com/liburanyuk.co.id/wp-content/uploads/2021/03/@gilangpramaaa.jpg?w=799&ssl=1'),
(15, '410712436_@gun_rinjani-1024x570.jpg', 'https://liburanyuk.co.id/wp-content/uploads/2021/03/@gun_rinjani-1024x570.jpg'),
(16, '613162973_@hedy_aditia.jpg', 'https://liburanyuk.co.id/wp-content/uploads/2021/03/@hedy_aditia.jpg'),
(17, '986247115_samalengoh_camp_2.jpeg', 'https://i1.wp.com/kemana-lagi.com/wp-content/uploads/2020/10/samalengoh_camp_2.jpg?w=600&ssl=1'),
(18, '1642095447_lokasi-Tanjungkerta-Sumedang-e1616924752871.jpg', 'https://kataomed.com/wp-content/uploads/2021/03/lokasi-Tanjungkerta-Sumedang-e1616924752871.jpg');

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
(1, '', '992635292_12-1-Agrowisata-Kampung-Nangorak-By-www.nangorakcamp.com_.jpg', 'https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2020/08/111108081414/12-1-Agrowisata-Kampung-N', 'Wisata alam andalan Sumedang, nikmati alam dengan berkemah bersama teman dan keluarga!', 'Samalengoh tempat dengan keaestetikan alam, tempat  dengan keindahan cantik dan sejuk. Untuk kamu yang mau pergi berlibur atau liburan bareng teman-teman, Samalengoh camping ground sangat cocok kamu kunjungi dan rasakan keindahan alamnya. Tempatnya di Sumedang lokasinya berada di Bumi Perkemahan Blok Gunung Gajah atau biasa disebut Samalengoh Camping Ground.\r\nSamalengoh tempat dengan keaestetikan alam, wisata menarik yang harus kalian kunjungi\r\nWisata alam karena keindahan yang dimilikinya, tempat wisata di Sumedang yang satu ini kini menjadi percakapan yang hangat di tempat sosial karena pemandangannya. Tak jarang pengunjung yang mampir kebanyakan dari daerah lain, seperti Purwakarta dan Bandung.  Mereka datang untuk nikmati malam di ketinggian bersama dengan cara camping.', 'https://www.youtube.com/embed/Ab2kNKiabrY', 'https://goo.gl/maps/ohBxbDRa5ifVvWJX9', 'Gunturmekar, Kec. Tanjungkerta, Kabupaten Sumedang, Jawa Barat 45354', 2147483647, 'gohcamp.smd@gmail.com', 'https://facebook.com/samalengoh.camp', 'https://instagram.com/samalengoh.camp', 'https://tiktok.com/samalengoh.camp', 'https://youtube.com/samalengoh.camp');

-- --------------------------------------------------------

--
-- Table structure for table `statistic`
--

CREATE TABLE `statistic` (
  `id` int(11) NOT NULL,
  `visitors` int(11) NOT NULL,
  `tent` int(11) NOT NULL,
  `status` enum('tersedia','penuh','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistic`
--

INSERT INTO `statistic` (`id`, `visitors`, `tent`, `status`) VALUES
(1, 2, 24, 'penuh');

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
-- Indexes for table `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
