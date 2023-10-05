-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 09:04 PM
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
-- Database: `velocity_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `level`, `create_at`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2023-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_body` text NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_body`, `blog_title`, `blog_img`, `blog_post`) VALUES
(1, '\r\nClub Motor Velocity memiliki komitmen yang kuat dalam melakukan kegiatan amal dan berbagai bentuk dukungan terhadap pantiasuhan lokal serta komunitas yang memerlukan bantuan. Setiap bulan, anggota klub ini secara rutin mengatur kunjungan ke berbagai pantiasuhan di sekitar daerah mereka. Selama kunjungan ini, mereka tidak hanya memberikan sumbangan seperti makanan, pakaian, dan barang-barang sehari-hari, tetapi juga berinteraksi dengan anak-anak dan orang dewasa yang tinggal di sana. Mereka mengadakan berbagai kegiatan seperti bermain bersama, mengadakan ceramah motivasi, serta memberikan pendampingan yang hangat dan positif.\r\n\r\nSelain kunjungan rutin, Club Motor Velocity juga mengorganisir acara amal yang lebih besar seperti bazar amal, konvoi motor amal, dan gala amal. Acara-acara ini bertujuan untuk mengumpulkan dana yang dapat digunakan untuk meningkatkan fasilitas dan kualitas hidup anak-anak di pantiasuhan, seperti pembangunan kelas baru, pembenahan lingkungan, serta penyediaan akses pendidikan yang lebih baik.\r\n\r\nSelain itu, klub ini juga berpartisipasi dalam kampanye sosial dan penggalangan dana untuk mendukung penyediaan layanan medis dan perawatan kesehatan bagi mereka yang kurang beruntung. Mereka berusaha untuk memanfaatkan kekuatan dan solidaritas klub motor mereka untuk menciptakan perubahan positif dalam masyarakat, terutama di kalangan anak-anak yang berada dalam situasi sulit.\r\n\r\nDengan semangat sukarela dan dedikasi tinggi, Club Motor Velocity terus menjalankan misi sosial mereka, menginspirasi dan memberikan harapan bagi banyak orang dalam komunitas mereka. Upaya mereka dalam melakukan kegiatan amal ke pantiasuhan dan berbagai kegiatan sosial lainnya telah membawa banyak kebaikan dan kebahagiaan kepada mereka yang membutuhkan.', 'Kegiatan Aman ke Panti Asuhan', 'Image-651f07c5e597d.jpg', '2023-10-05'),
(2, '\r\nClub Motor Velocity juga aktif dalam kegiatan bagi-bagi makanan sebagai bagian dari upaya mereka dalam memberikan dukungan kepada komunitas yang membutuhkan. Setiap bulan, klub ini mengadakan acara bagi-bagi makanan di berbagai lokasi strategis di sekitar daerah mereka. Dalam acara ini, anggota klub bersama-sama menyiapkan makanan, seperti nasi kotak atau makanan bergizi lainnya, dan kemudian mendistribusikannya kepada orang-orang yang membutuhkan, seperti tunawisma, keluarga kurang mampu, dan orang-orang yang terdampak oleh bencana alam.\r\n\r\nKegiatan bagi-bagi makanan ini bukan hanya tentang memberikan makanan fisik, tetapi juga memberikan kehangatan dan dukungan moral kepada mereka yang kurang beruntung. Anggota klub sering kali berinteraksi dengan penerima makanan, mendengarkan cerita mereka, dan memberikan dukungan emosional yang sangat dibutuhkan.\r\n\r\nSelain acara rutin bulanan, Club Motor Velocity juga terlibat dalam aksi kemanusiaan darurat, seperti memberikan bantuan makanan kepada korban bencana alam atau mereka yang sedang menghadapi situasi krisis. Mereka percaya bahwa makanan adalah hak dasar setiap individu, dan mereka berusaha untuk memastikan bahwa tidak ada orang yang perlu kelaparan atau merasa terlupakan.\r\n\r\nDengan kegiatan bagi-bagi makanan ini, Club Motor Velocity tidak hanya memberikan bantuan praktis kepada komunitas yang membutuhkan, tetapi juga menjadi teladan solidaritas sosial dan semangat sukarela. Melalui tindakan ini, klub ini berkomitmen untuk membuat dunia di sekitar mereka menjadi tempat yang lebih baik bagi semua orang.', 'Kegiatan Membagi Makanan Gratis', 'Image-651f08743a4a5.jpg', '2023-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `gallery_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_img`) VALUES
(1, 'Sunmory To Medan', 'Image-651f06dcb5204.jpg'),
(2, 'Sunmory To Jakarta', 'Image-651f070786214.jpeg'),
(3, 'Touring To Berastagi', 'Image-651f0725207e9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'Budi Sahputra', 'budpoetra@gmail.com', 'PENTING !!!', 'Ikut Jalan-Jalan Dong Bang :)', '2023-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_quantity`, `product_price`, `product_type`, `product_img`) VALUES
(1, 'Jaket Motor', 15, '100000', 'filter-app', 'Image-651f0621a4f2e.jpeg'),
(2, 'Helm Motor', 12, '78000', 'filter-card', 'Image-651f066f83bef.jpg'),
(3, 'Sepatu Motor', 32, '150000', 'filter-web', 'Image-651f06a28a5ef.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
