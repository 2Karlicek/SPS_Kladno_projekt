-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 10:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `uzivatele`
--

CREATE TABLE `uzivatele` (
  `id` int(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `heslo` varchar(64) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `bydliste` varchar(32) NOT NULL,
  `isadmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzivatele`
--

INSERT INTO `uzivatele` (`id`, `username`, `email`, `heslo`, `gender`, `bydliste`, `isadmin`) VALUES
(1, 'tom', 'tom@sd', '123', 'muz', 'kladno', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
