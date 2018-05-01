-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 12:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jannesinredningab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(34, '1.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(35, '2.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(36, '3.jpeg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(37, '4.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(38, '5.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(40, '7.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(41, '8.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(42, '9.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(48, 'house8.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(49, 'house7.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.'),
(50, 'house7.jpg', 'HÃ¤r beskrivs uppdraget som visas pÃ¥ bilden.');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`) VALUES
(10, 'NyhetsinlÃ¤gg 1', 'Detta Ã¤r ett nyhetsinlÃ¤gg som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en nyhet pÃ¥ startsidan.'),
(11, 'NyhetsinlÃ¤gg 2', 'Detta Ã¤r ett nyhetsinlÃ¤gg som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en nyhet pÃ¥ startsidan.\r\n'),
(12, 'NyhetsinlÃ¤gg 3', 'Detta Ã¤r ett nyhetsinlÃ¤gg som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en nyhet pÃ¥ startsidan.'),
(13, 'NyhetsinlÃ¤gg 4', 'Detta Ã¤r ett nyhetsinlÃ¤gg som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en nyhet pÃ¥ startsidan.\r\n'),
(14, 'NyhetsinlÃ¤gg 5', 'Detta Ã¤r ett nyhetsinlÃ¤gg som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en nyhet pÃ¥ startsidan.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `content`) VALUES
(5, 'TjÃ¤nst 1', 'Detta Ã¤r ett inlÃ¤gg om en tjÃ¤nst som fÃ¶retaget erbjuder och som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en tjÃ¤nst pÃ¥ sidan \"tjÃ¤nster\".'),
(6, 'TjÃ¤nst 2', 'Detta Ã¤r ett inlÃ¤gg om en tjÃ¤nst som fÃ¶retaget erbjuder och som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en tjÃ¤nst pÃ¥ sidan \"tjÃ¤nster\".\r\n'),
(7, 'TjÃ¤nst 3', 'Detta Ã¤r ett inlÃ¤gg om en tjÃ¤nst som fÃ¶retaget erbjuder och som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en tjÃ¤nst pÃ¥ sidan \"tjÃ¤nster\".'),
(8, 'TjÃ¤nst 4', 'Detta Ã¤r ett inlÃ¤gg om en tjÃ¤nst som fÃ¶retaget erbjuder och som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en tjÃ¤nst pÃ¥ sidan \"tjÃ¤nster\".'),
(9, 'TjÃ¤nst 5', 'Detta Ã¤r ett inlÃ¤gg om en tjÃ¤nst som fÃ¶retaget erbjuder och som ska demonstrera hur det ser ut nÃ¤r administratÃ¶ren lÃ¤gger till en tjÃ¤nst pÃ¥ sidan \"tjÃ¤nster\".');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
