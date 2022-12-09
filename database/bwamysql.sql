-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 07:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bwamysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `created_at`) VALUES
(1, 'Laila', 'Jalan Mawar No. 15 Kota Surabaya', '2022-12-06 06:30:11'),
(2, 'Olla', 'Jalan Semeru II No. 110 Kota Malang', '2022-12-06 06:35:10'),
(3, 'Lauren', 'Jl. Semanggi Utara 12 Kota Semarang', '2022-12-06 06:35:10'),
(4, 'Tania', 'Jl. Maju III No. 45, Kota Surabaya', '2022-12-06 06:43:12'),
(5, 'Roberta', 'Jalan Danau Bratan Raya No. 29 Kota Malang', '2022-12-06 06:43:12'),
(6, 'Geonina', 'Jalan Violet Gang 3, No. 9 Kota Semarang', '2022-12-06 06:43:12'),
(7, 'Stefanie', 'Jl. Anggrek Bulan I/IV 65, Kota Surabaya', '2022-12-06 06:43:12'),
(8, 'Queenza', 'Jalan Bulan Purnama No 77, Kota Samarinda', '2022-12-06 06:43:12'),
(9, 'Clara', 'Jl. Simpang Layur 23, Kota Balikpapan', '2022-12-06 06:43:12'),
(10, 'Michael', 'Jalan Puspa Indah II/II 60 Kota Samarinda', '2022-12-06 06:43:12'),
(11, 'Joana', 'Jalan Kertajaya Gang 1/20 Kota Surabaya', '2022-12-06 06:43:12'),
(12, 'Andrew', 'Jalan Raya Bandung No. 12, Kota Bandung', '2022-12-06 06:47:59'),
(13, 'Katrina', 'Jl. Indragiri 12, Kota Surabaya', '2022-12-06 06:47:59'),
(14, 'Alexandra', 'Jalan Salak Pondoh III/42 Kota Bandung', '2022-12-06 06:53:06'),
(15, 'Briana', 'Jalan Simpang Balap, No. 26 Kota Semarang', '2022-12-06 06:53:06'),
(16, 'Hillary', 'Jl. Sisinga Mangaraja 12, Kota Denpasar', '2022-12-06 06:53:06'),
(17, 'Ma\'mur', 'Jalan Raya Semarang No 12', '2022-12-06 06:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(15) NOT NULL,
  `name` varchar(70) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `created_at`) VALUES
(1, 'VIVO Y33T SERIES', '3399000', NULL, 'SMARTPHONE', '2022-12-07 06:28:29'),
(2, 'MSI NOTEBOOK MODERN 14 C12M INTEL CORE I5-1235U', '10499000', 'Lorem ipsum dolor sit amet', 'LAPTOP', '2022-12-07 08:09:20'),
(3, 'LOGITECH - COMBO WIRELESS KEYBOARD MK220', '269000', 'Lorem', 'OTHER', '2022-12-07 11:22:24'),
(4, 'INFINIX SMARTPHONE ZERO X PRO SILVER', '5089000', 'A cras semper auctor neque vitae tempus. Et leo duis ut diam. Tortor condimentum lacinia quis vel eros donec ac. Vel pharetra vel turpis nunc eget lorem. Nec ullamcorper sit amet risus nullam. Volutpat commodo sed egestas egestas fringilla phasellus. Pretium fusce id velit ut tortor pretium viverra. Pretium vulputate sapien nec sagittis aliquam malesuada. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Eros donec ac odio tempor orci dapibus ultrices in. Turpis egestas sed tempus urna et pharetra pharetra massa massa. Feugiat in ante metus dictum at tempor. Sed arcu non odio euismod. Sed tempus urna et pharetra pharetra massa massa ultricies. Vitae nunc sed velit dignissim. Sagittis nisl rhoncus mattis rhoncus urna neque viverra.', 'SMARTPHONE', '2022-12-07 11:43:40'),
(5, 'LENOVO CONVERTIBLE NOTEBOOK FLEX5-14ITL05 INTEL CORE I7', '15099000', 'Egestas congue quisque egestas diam in arcu cursus. Viverra aliquet eget sit amet tellus cras adipiscing. Nisi scelerisque eu ultrices vitae auctor eu. Vitae justo eget magna fermentum iaculis eu non diam. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Maecenas pharetra convallis posuere morbi leo.', 'COMPUTER', '2022-12-07 11:47:13'),
(6, 'ACER DESKTOP AL IN ONE AC22-1650 AIO INTEL CORE I3', '7779000', 'Arcu dictum varius duis at consectetur lorem donec. Tortor at risus viverra adipiscing at in tellus integer feugiat. Dapibus ultrices in iaculis nunc sed. Dui sapien eget mi proin. Arcu felis bibendum ut tristique. ', 'OTHER', '2022-12-07 11:48:05'),
(7, 'APPLE IPHONE 14 PLUS SERIES', '21599000', 'Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Diam maecenas sed enim ut sem viverra aliquet eget sit. Ultrices tincidunt arcu non sodales neque sodales ut.', 'SMARTPHONE', '2022-12-07 12:41:53'),
(9, 'Product Terbaru', '899000', 'Lorem', 'PRINTER', '2022-12-08 03:33:18'),
(11, 'Product Terbaru 101', '3799000', '', 'COMPUTER', '2022-12-09 05:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'admin@email.com', 'administrator', 'Pa$$w0rd', '2022-12-09 05:24:15'),
(2, 'rizal@email.com', 'yusufrizalh', 'Pa$$w0rd', '2022-12-09 05:24:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
