-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2021 at 09:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `castmerclass`
--

CREATE TABLE `castmerclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `castmerclass`
--

INSERT INTO `castmerclass` (`cid`, `cname`) VALUES
(1, 'Hospital'),
(2, 'Clincs'),
(3, 'Coffee'),
(4, 'Resturant');

-- --------------------------------------------------------

--
-- Table structure for table `clincs`
--

CREATE TABLE `clincs` (
  `id` int(10) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `disc` varchar(550) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clincs`
--

INSERT INTO `clincs` (`id`, `name`, `address`, `disc`, `phone`) VALUES
(7, 'samir', 'alex', '0', 'fghytruj'),
(10, 'esraa ail', 'cairo', '0', ' h\r\n                      '),
(11, 'samirala alzer', 'cairo', '0', 'dfhdlskj'),
(12, 'Sangam A', 'BELIN', '0', 'wwwwww'),
(13, 'Anita Chettri  ', 'cairo', '0', ' \r\n                      h'),
(14, 'samir', 'alex', '0', ' feffgjlkfg\r\n                      '),
(19, 'esraa ail', 'alex', '2', 'i went         '),
(21, 'samir alaa', 'cairo', '2', 'welocme    '),
(22, 'samir', 'cairo', '2', 'yes i went\r\n                      '),
(23, 'esraa ail', 'BRLIN', '2', 'yes i see      '),
(24, 'samir', 'BELIN', '2', 'come to         '),
(25, 'Omar ZIdan', 'imbaba street', 'dentist clincs for example one of best', '0110033353226'),
(26, 'Omar ZIdan', 'imbaba street', 'dentist clincs for example one of best', '0110033353226'),
(27, 'Omar ZIdan', 'imbaba street', 'dentist clincs for example one of best', '0114654321'),
(28, 'Omar ZIdan', 'imbaba street', 'dentist clincs for example one of best', '0114654321');

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `disc` varchar(550) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `address`, `disc`, `phone`) VALUES
(1, 'zezo cafe', 'giza 54 street', '1', '321564'),
(2, 'ahmed', 'sohag', 'dentist clincs for example one of best', '01100333536'),
(3, 'ahmed', 'sohag', 'dentist clincs for example one of best', '01100333536');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `address`, `disc`, `phone`) VALUES
(1, 'Zidan Hospital', 'nacrcity, 32 famy street', 'this is hospial', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resturant`
--

CREATE TABLE `resturant` (
  `resturant_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resturant`
--

INSERT INTO `resturant` (`resturant_id`, `name`, `address`, `disc`) VALUES
(1, 'KFC', 'Mokattam, 9st', 'this is kFC Resturant '),
(2, 'McDonald\'s', '\r\nNYSE: MCD, DJIA component,', 'McDonald\'s Corporation is an American fast food company');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `group_id`, `date`, `avatar`) VALUES
(1, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'admin@admin.com', 'Admin Admin', 1, '2021-07-03', 'default');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clincs`
--
ALTER TABLE `clincs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturant`
--
ALTER TABLE `resturant`
  ADD PRIMARY KEY (`resturant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clincs`
--
ALTER TABLE `clincs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resturant`
--
ALTER TABLE `resturant`
  MODIFY `resturant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
