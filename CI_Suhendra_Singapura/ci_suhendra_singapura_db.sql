-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 03:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `menang` int(11) NOT NULL,
  `kalah` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `kebobolan` int(11) NOT NULL,
  `goal` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `menang`, `kalah`, `draw`, `kebobolan`, `goal`, `logo`) VALUES
(1, 'DPMM', 15, 4, 5, 25, 51, 'dpmm.png'),
(2, 'Tampines Rovers', 12, 4, 8, 29, 52, 'tampines.png'),
(3, 'Hougang United', 13, 7, 4, 45, 58, 'hougang.png'),
(4, 'Albirex Niigata S', 12, 7, 5, 25, 36, 'albirex.png'),
(5, 'Geylang International', 10, 11, 3, 48, 41, 'geylang.png'),
(6, 'Home United', 9, 12, 3, 46, 34, 'home.png'),
(7, 'Warriors', 6, 13, 5, 56, 40, 'warriors.png'),
(8, 'Young Lions', 6, 14, 4, 38, 21, 'young.png'),
(9, 'Balestier Khalsa', 4, 15, 5, 58, 37, 'balestier.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
