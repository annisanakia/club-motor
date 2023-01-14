-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2023 at 10:46 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club-motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `user_id`, `title`, `date`, `image`, `detail`) VALUES
(1, 1, 'Sunmori Komunitas Motor Setiakawan', '2023-01-10', 'assets/images/news.jpeg', 'Sunmori Artinya Sunday Morning Ride, Punya Manfaat Penting untuk Tingkatkan Konsentrasi.'),
(2, 1, 'PROMO Motor Setiakawan 2023', '2023-01-05', 'assets/images/news2.jpeg', 'Dapatkan promonya segera jangan sampai kamu kehabisan'),
(3, 1, 'MotoGP Terkini', '2023-01-03', 'assets/images/news3.jpeg', 'MotoGP 2023 akan dimulai tidak lama lagi. Yamaha dipastikan akan meluncurkan tim');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `code`, `name`) VALUES
(1, 'EVENT', 'Event'),
(2, 'ARTICLE', 'Article');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `logo`) VALUES
(1, 'Honda', 'assets/images/client.png'),
(2, 'Yamaha', 'assets/images/client2.jpeg'),
(3, 'Vespa', 'assets/images/client3.jpeg'),
(4, 'Suzuki', 'assets/images/client4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `subname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `fax_no` varchar(50) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `visi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `misi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `subname`, `email`, `phone_no`, `fax_no`, `country`, `about`, `visi`, `misi`, `logo`, `alamat`) VALUES
(1, 'Setiakawan', 'Club Motor', 'setiakawan-motor@gmail.com', '0818446577', '12367', 'Indonesia', 'Setiakawan motor club merupakan perusahaan yang bergerak di bidang distribusi sepeda motor. Selain sebagai dealer motor, setiakawan juga memiliki komunitas motor dari seluruh Indonesia yang terbentuk pada tahun 2018.', 'Berupaya untuk menyediakan solusi mobilitas terbaik yang mampu memenuhi kebutuhan konsumen. Menjadi Group Deale terkemuka dan terpercaya dengan mengutamakan prinsip kejujuran, keramahtamahan dan pelayanan.', 'Memberikan solusi kepada masyarakat dengan layanan prima, jujur, terpercaya dan sepenuh hati.', 'assets/images/logo.png', 'Bekasi Utara');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `detail`) VALUES
(1, 'Nakia', '082297318275', 'annisanakiashakila@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, 'assets/images/club-motor.jpeg'),
(2, 'assets/images/club-motor2.webp'),
(3, 'assets/images/club-motor3.jpeg'),
(4, 'assets/images/news.jpeg'),
(5, 'assets/images/news2.jpeg'),
(6, 'assets/images/news3.jpeg'),
(7, 'assets/images/motor1.jpeg'),
(8, 'assets/images/motor2.png'),
(9, 'assets/images/motor3.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `product_merk_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `top_seller` int NOT NULL DEFAULT '0' COMMENT 'jika 1 maka termasuk top seller',
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_merk_id`, `name`, `price`, `image`, `top_seller`, `detail`) VALUES
(1, 2, 'Yamaha R15', 45000000, 'assets/images/motor1.jpeg', 1, NULL),
(2, 1, 'Honda Beat', 17000000, 'assets/images/motor2.png', 1, NULL),
(3, 3, 'Vespa Matic', 35000000, 'assets/images/motor3.png', 1, NULL),
(4, 1, 'Honda Vario', 27800000, 'assets/images/motor4.webp', 1, NULL),
(5, 2, 'Yamaha Aerox', 33000000, 'assets/images/motor5.webp', 1, NULL),
(6, 2, 'Yamaha Vixion', 42500000, 'assets/images/motor6.png', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_merk`
--

CREATE TABLE `product_merk` (
  `id` int NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_merk`
--

INSERT INTO `product_merk` (`id`, `code`, `name`) VALUES
(1, 'HD', 'Honda'),
(2, 'YM', 'Yamaha'),
(3, 'VE', 'Vespa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_merk_id` (`product_merk_id`);

--
-- Indexes for table `product_merk`
--
ALTER TABLE `product_merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_merk`
--
ALTER TABLE `product_merk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
