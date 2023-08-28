-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.epizy.com
-- Generation Time: Aug 28, 2023 at 08:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33413122_softown`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_balance`
--

CREATE TABLE `add_balance` (
  `id` int(10) NOT NULL,
  `order_id` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `promocode` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'pending',
  `order_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_balance`
--

INSERT INTO `add_balance` (`id`, `order_id`, `username`, `promocode`, `amount`, `method`, `status`, `order_created`) VALUES
(1, '0', 'root', '', 10, '', 'pending', '2023-04-09 23:37:24'),
(2, 'add67194283', 'root', '', 100, '', 'pending', '2023-04-09 23:37:24'),
(3, 'add93784625', 'root', '', 100, '', 'pending', '2023-04-09 23:37:24'),
(7, 'add03629817', '', 'Not Applic', 10, '', 'pending', '2023-04-09 23:37:24'),
(8, 'add04529638', '', 'Not Applic', 10, '', 'pending', '2023-04-09 23:37:24'),
(9, 'add95876143', '', 'Not Applic', 10, '', 'pending', '2023-04-09 23:37:24'),
(10, 'add98427056', '', 'Not Applic', 10, '', 'pending', '2023-04-09 23:37:24'),
(11, 'add02576419', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(12, 'add38549620', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(13, 'add13480952', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(14, 'add37456092', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(15, 'add13250876', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(16, 'add74153286', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(17, 'add25146078', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(18, 'add12837650', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(19, 'add28563107', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(20, 'add76430518', '', 'Not Applic', 1233, '', 'pending', '2023-04-09 23:37:24'),
(21, 'add52381960', '', 'Not Applic', 12, '', 'pending', '2023-04-09 23:37:24'),
(22, 'add52387069', '', 'Not Applic', 12, '', 'pending', '2023-04-09 23:37:24'),
(23, 'add49012587', '', 'Not Applic', 12, '', 'pending', '2023-04-09 23:37:24'),
(24, 'add13427590', '', 'Not Applic', 12, '', 'pending', '2023-04-09 23:37:24'),
(25, 'add96402783', '', 'Not Applic', 12, '', 'pending', '2023-04-09 23:37:24'),
(26, 'add85796301', '', 'Not Applic', 10, '', 'failed', '2023-04-09 23:37:24'),
(28, 'add49812750', 'admin', 'Not Applic', 10, '', 'failed', '2023-04-09 23:37:24'),
(30, 'add24809736', 'admin', 'Not Applic', 10, '', 'success', '2023-04-09 23:37:24'),
(33, 'add47652390', 'admin', 'Not Applic', 3123, '', 'failed', '2023-04-10 00:30:00'),
(34, 'add34682017', 'admin', 'Not Applic', 3123, '', 'failed', '2023-04-10 00:30:02'),
(35, 'add59408327', 'admin', 'Not Applic', 3123, '', 'failed', '2023-04-10 00:30:04'),
(36, 'add49523706', 'admin', 'Not Applic', 0, '', 'failed', '2023-04-10 19:28:35'),
(37, 'add63279408', 'admin', 'Not Applic', 1, '', 'failed', '2023-04-10 19:28:44'),
(38, 'add96481207', 'admin', 'Not Applic', 1, '', 'failed', '2023-04-10 19:42:04'),
(39, 'add93584162', 'admin', 'Not Applic', 1, '', 'pending', '2023-04-10 19:45:07'),
(40, 'add26780591', 'admin', 'Not Applic', 35, '', 'pending', '2023-04-18 20:38:32'),
(41, 'add37412695', 'user', 'Not Applic', 10, '', 'failed', '2023-04-28 23:37:42'),
(42, 'add42075893', 'admin', 'Not Applic', 500, '', 'failed', '2023-04-29 11:19:44'),
(43, 'add73428561', 'Amit ', 'Not Applic', 100, '', 'pending', '2023-04-30 15:01:17'),
(44, 'add27651490', 'user', 'Not Applic', 21, '', 'pending', '2023-05-01 01:30:30'),
(45, 'add32041596', 'user', 'Not Applic', 21, '', 'pending', '2023-05-01 01:30:30'),
(46, 'add63187209', 'navy', 'Not Applic', 324, '', 'pending', '2023-08-27 05:51:30'),
(47, 'add51802347', 'navy', 'Not Applic', 324, '', 'pending', '2023-08-27 05:51:33'),
(48, 'add84251769', 'admin', 'Not Applic', 10, '', 'pending', '2023-08-27 08:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `asdasd`
--

CREATE TABLE `asdasd` (
  `id` int(11) NOT NULL,
  `keyss` text NOT NULL,
  `status` text NOT NULL DEFAULT 'active',
  `purchased_by` text NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asdasd`
--

INSERT INTO `asdasd` (`id`, `keyss`, `status`, `purchased_by`, `rating`) VALUES
(1, '', 'sold', 'Abhimanyu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `description`) VALUES
(1, 'test #1', 'this a testing notification #1'),
(2, 'test #2', 'this a testing notification #2'),
(4, 'Promotional credits', 'an update will be rolled out soon');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Developer` varchar(50) NOT NULL,
  `soft_name` varchar(100) NOT NULL,
  `soft_type` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `soft_image` varchar(200) NOT NULL DEFAULT 'key.png',
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `os` text NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'active',
  `liscense` int(1) NOT NULL DEFAULT 0,
  `linkk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Developer`, `soft_name`, `soft_type`, `price`, `soft_image`, `short_desc`, `long_desc`, `os`, `status`, `liscense`, `linkk`) VALUES
(58, 'admin', 'asdasd', 'platinum', 10, 'IMG-64eaf96e9fa02.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis ab beatae, omnis eos sapiente eum eaque architecto saepe placeat, magni similique adipisci. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloremque obcaecati enim minima, saepe voluptatum consequuntur alias sunt suscipit ea fugit odio harum! Sed nemo reiciendis cumque quisquam cum sit tenetur error ipsam laborum maiores, numquam quae nisi vero nihil temporibus placeat eveniet assumenda quibusdam eum? Hic eveniet harum saepe quae laboriosam doloribus in voluptatibus magni, veniam reiciendis illum veritatis ea voluptatum totam cumque accusamus error deserunt ipsa obcaecati nihil libero ab? Pariatur vel nulla voluptatum sequi vero sit est voluptates dignissimos consectetur dolorem esse consequuntur doloremque consequatur eligendi at aliquam quas, cupiditate corrupti quibusdam? Sunt nemo eaque ipsam voluptas.', 'windows', 'active', 1, 'https://www.youtube.com/shorts/nyRxfbrCu3E');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_products`
--

CREATE TABLE `purchased_products` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `developer_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `product_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchased_products`
--

INSERT INTO `purchased_products` (`id`, `product_id`, `product_name`, `buyer_name`, `developer_name`, `price`, `product_group`) VALUES
(45, 41, 'test Soft 1', 'aditya', 'admin', 20, 'free'),
(52, 41, 'test Soft 1', 'adityaa', 'admin', 20, 'free'),
(53, 43, 'asdasd', 'adityaa', 'admin', 65, 'free'),
(54, 44, 'ramlal', 'user', 'admin', 100, 'free'),
(55, 50, 'dasdw', 'user', 'admin', 23, 'platinum'),
(56, 45, 'asdasd', 'user', 'admin', 23, 'free'),
(57, 55, 'soft1', 'user', 'admin', 10, 'platinum'),
(58, 52, 'ninja1221', 'user', 'admin', 2, 'platinum'),
(59, 54, 'asdasdwer', 'user', 'admin', 22, 'platinum'),
(60, 53, 't1t', 'user', 'admin', 33, 'platinum'),
(61, 51, 'game', 'user', 'admin', 324, 'platinum'),
(63, 47, 'eqew', 'Abhimanyu', 'admin', 213, 'platinum'),
(65, 58, 'asdasd', 'Abhimanyu', 'admin', 10, 'platinum');

-- --------------------------------------------------------

--
-- Table structure for table `rahul1`
--

CREATE TABLE `rahul1` (
  `id` int(11) NOT NULL,
  `keyss` text NOT NULL,
  `status` text NOT NULL DEFAULT 'active',
  `purchased_by` text NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test soft 1`
--

CREATE TABLE `test soft 1` (
  `id` int(11) NOT NULL,
  `keyss` text NOT NULL,
  `status` text NOT NULL DEFAULT 'active',
  `purchased_by` text NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test soft 1`
--

INSERT INTO `test soft 1` (`id`, `keyss`, `status`, `purchased_by`, `rating`) VALUES
(1, '1', 'sold', '', 0),
(2, '2', 'sold', 'aditya', 0),
(3, '3', 'sold', 'aditya', 0),
(4, '4', 'sold', 'aditya', 0),
(5, '5', 'sold', 'aditya', 0),
(6, '6', 'sold', 'aditya', 0),
(7, '7', 'sold', 'aditya', 0),
(8, '8', 'active', '', 0),
(9, '9', 'active', '', 0),
(10, '10', 'active', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `acc_type` varchar(10) NOT NULL,
  `acc_status` varchar(20) NOT NULL DEFAULT 'free',
  `create_datetime` datetime NOT NULL,
  `wallet_balance` int(4) NOT NULL DEFAULT 10,
  `old_ip` varchar(16) NOT NULL,
  `new_ip` varchar(16) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT 'NOT UPDATED',
  `mobile` varchar(15) NOT NULL DEFAULT 'NOT UPDATED',
  `address` varchar(80) NOT NULL DEFAULT 'NOT UPDATED',
  `social` varchar(80) NOT NULL DEFAULT 'NOT UPDATED',
  `public` text NOT NULL DEFAULT 'TRUE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `acc_type`, `acc_status`, `create_datetime`, `wallet_balance`, `old_ip`, `new_ip`, `name`, `mobile`, `address`, `social`, `public`) VALUES
(1, 'admin', 'adityama840@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Developer', 'platinum', '2023-01-19 15:13:29', 1059, '::1', '::1', 'Aditya Mathur', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(2, 'aditya', 'adityama840@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Buyer', 'free', '2023-01-19 16:05:48', 800, '::1', '::1', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(10, 'adityaa', 'adityama840@gmail.com', '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 795, '::1', '::1', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(11, 'adityaaa', 'NOT UPDATED', '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(12, 'adityaaaa', NULL, '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '::1', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(13, 'maniop', NULL, '3897173104011eb480b4092685ab3bda', 'Developer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(14, 'lodulalit', NULL, '3897173104011eb480b4092685ab3bda', 'Developer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(15, 'approved', NULL, '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '::1', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(16, 'user', 'adityama840@gmail.com', '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 4676, '111.223.26.221', '152.58.73.1', 'aditya mathur', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(17, 'rahul', NULL, '0c8abdb962f042d1857c66dd26b0c87b', 'Developer', 'free', '0000-00-00 00:00:00', 20, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(18, '', NULL, '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(19, 'ramesh', NULL, '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 0, '49.36.239.188', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(20, 'ajay', NULL, '25d55ad283aa400af464c76d713c07ad', 'Developer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(21, 'rahul2', NULL, '3897173104011eb480b4092685ab3bda', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(22, 'Amit', NULL, '25d55ad283aa400af464c76d713c07ad', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '106.207.187.90', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(23, 'Saksham', NULL, '19eb5f7b0a0aabbede6c5b88bc627722', 'Developer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(24, 'Aastha', NULL, '687dc37171ea06cea452324f25f5ab4d', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '43.224.1.247', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(25, 'Abhimanyu', '697jpr@gmail.com', 'f599b7dc062bd62fa6a786ec5be98fd0', 'Buyer', 'free', '0000-00-00 00:00:00', 767, '111.223.27.126', '', 'Abhimanyu', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(26, 'navy', NULL, 'e8e832972398405470455eaab53ece9c', 'Developer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(27, 'navy20', NULL, 'e8e832972398405470455eaab53ece9c', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '103.94.67.26', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE'),
(28, 'adibuy3', NULL, 'f599b7dc062bd62fa6a786ec5be98fd0', 'Buyer', 'free', '0000-00-00 00:00:00', 10, '', '', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'NOT UPDATED', 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_balance`
--

CREATE TABLE `withdraw_balance` (
  `id` int(10) NOT NULL,
  `withdraw_id` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'pending',
  `withdraw_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw_balance`
--

INSERT INTO `withdraw_balance` (`id`, `withdraw_id`, `username`, `amount`, `method`, `status`, `withdraw_created`) VALUES
(1, 'Wid74851390', 'admin', 23, '', 'pending', '2023-04-11 14:09:57'),
(2, 'Wid32597180', 'admin', 23, '', 'pending', '2023-04-11 14:11:00'),
(3, 'Wid74089165', 'admin', 435, '', 'pending', '2023-04-29 11:20:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_balance`
--
ALTER TABLE `add_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asdasd`
--
ALTER TABLE `asdasd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased_products`
--
ALTER TABLE `purchased_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahul1`
--
ALTER TABLE `rahul1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test soft 1`
--
ALTER TABLE `test soft 1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_balance`
--
ALTER TABLE `withdraw_balance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_balance`
--
ALTER TABLE `add_balance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `asdasd`
--
ALTER TABLE `asdasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `purchased_products`
--
ALTER TABLE `purchased_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `rahul1`
--
ALTER TABLE `rahul1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test soft 1`
--
ALTER TABLE `test soft 1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `withdraw_balance`
--
ALTER TABLE `withdraw_balance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
