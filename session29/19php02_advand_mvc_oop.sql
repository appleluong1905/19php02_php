-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2019 at 04:38 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.2.20-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19php02_advand_mvc_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `created`, `status`) VALUES
(1, 14, 2, ' anh đã đủ 20-60 tuổi chưa và đang có những giấy tờ gì như CMND, Hộ khẩu, Bằng lái xe, Hóa đơn điện và số tiền muốn đưa trước, số tháng anh muốn góp để em tìm gói trả góp phù hợp cho anh nha. Mong nhận được p', '2019-08-11 04:31:53', 0),
(2, 14, 2, 'm tìm gói trả góp ', '2019-08-11 04:32:49', 0),
(3, 14, 2, 'Thử comment', '2019-08-11 04:38:39', 0),
(4, 14, 2, 'ooo', '2019-08-11 04:39:32', 1),
(5, 14, 1, 'demo', '2019-08-11 04:39:41', 1),
(6, 17, 2, '000789678', '2019-08-11 04:39:58', 1),
(7, 17, 2, 'comment thử cách khác', '2019-08-11 04:42:21', 0),
(8, 17, 3, 'ok', '2019-08-11 04:43:03', 1),
(9, 17, 2, 'Demo comment', '2019-08-11 04:46:25', 0),
(10, 17, 2, 'Comment mới nhất', '2019-08-11 05:14:07', 0),
(11, 17, 3, 'ok', '2019-08-16 06:53:13', 0),
(12, 17, 3, 'test', '2019-08-16 06:53:17', 0),
(13, 17, 1, 'comment thử', '2019-08-16 06:54:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chad', 'register_login_widget.jpg', 777),
(2, 'Manchester', '68836012_1284705881691218_6124324829509189632_n.jpg', 888),
(3, 'Chad', 'default.png', 777),
(4, 'Oman', '20170322152052-nng-sut-lua.jpg', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rate_value` int(10) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `product_id`, `user_id`, `rate_value`, `created`) VALUES
(1, 1, 17, 3, '2019-08-24 04:27:13'),
(2, 1, 14, 4, '2019-08-24 04:28:23'),
(3, 1, 16, 4, '2019-08-24 04:28:52'),
(4, 1, 18, 2, '2019-08-24 04:32:47'),
(5, 1, 19, 4, '2019-08-24 04:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`) VALUES
(12, 'admin', 'ttt', '123123123123'),
(13, 'customer', 'ttt444', '123123123123'),
(14, 'admin', '666', '123123123123'),
(15, 'admin', '888', '123123123123'),
(16, 'admin', '8888', '123123123123'),
(17, 'admin', '88882', '123123123123'),
(18, 'customer', '111', '123123123123'),
(19, 'customer', '222', '123123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
