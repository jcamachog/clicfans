-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2020 at 05:49 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clicfans`
--
CREATE DATABASE IF NOT EXISTS `clicfans` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `clicfans`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `name`, `date`) VALUES
(1, 'comentario 1', 'test 1', '2020-06-02 17:27:56'),
(2, 'comentario 2', 'test 2', '2020-06-02 17:27:56'),
(3, 'comentario 3', 'test 3', '2020-06-02 17:27:56'),
(4, 'comentario 4', 'test 4', '2020-06-02 17:27:56'),
(5, 'comentario 5', 'test 5', '2020-06-02 17:27:56'),
(6, 'comentario 6', 'test test', '2020-06-03 17:20:57'),
(7, 'comentario 7', 'test test', '2020-06-03 17:21:34'),
(8, 'comentario 8', 'test test', '2020-06-03 17:21:34'),
(9, 'comentario 9', 'test test', '2020-06-03 17:21:34'),
(10, 'comentario 10', 'test test', '2020-06-03 17:21:34'),
(11, 'comentario 11', 'test test', '2020-06-03 17:22:53'),
(12, 'comentario 12', 'test test', '2020-06-03 17:22:53'),
(13, 'comentario 13', 'test test', '2020-06-03 17:22:53'),
(14, 'comentario 14', 'test test', '2020-06-03 17:22:53'),
(15, 'comentario 15', 'test test', '2020-06-03 17:22:53'),
(16, 'comentario 16', 'test test', '2020-06-03 17:22:53'),
(17, 'comentario 17', 'test test', '2020-06-03 17:22:53'),
(18, 'comentario 18', 'test test', '2020-06-03 17:22:53'),
(19, 'comentario 19', 'test test', '2020-06-03 17:22:53'),
(20, 'comentario 20', 'test test', '2020-06-03 17:22:53'),
(21, 'comentario 21', 'test test', '2020-06-03 17:24:06'),
(22, 'comentario 22', 'test test', '2020-06-03 17:24:06'),
(23, 'comentario 23', 'test test', '2020-06-03 17:24:06'),
(24, 'comentario 24', 'test test', '2020-06-03 17:24:06'),
(25, 'comentario 25', 'test test', '2020-06-03 17:24:06'),
(26, 'comentario 26', 'test test', '2020-06-03 17:24:06'),
(27, 'comentario 27', 'test test', '2020-06-03 17:24:06'),
(28, 'comentario 28', 'test test', '2020-06-03 17:24:06'),
(29, 'comentario 29', 'test test', '2020-06-03 17:24:06'),
(30, 'comentario 30', 'test test', '2020-06-03 17:24:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
