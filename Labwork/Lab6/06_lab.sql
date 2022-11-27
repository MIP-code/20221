-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:48 AM
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
-- Database: `lab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `06_lab`
--

CREATE TABLE `06_lab` (
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `S_id` int(9) NOT NULL,
  `Major` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `06_lab`
--

INSERT INTO `06_lab` (`F_name`, `L_name`, `S_id`, `Major`) VALUES
('Mojab', 'Jamal', 202011015, 'SWE'),
('Alaa', 'ez', 202011068, 'SWE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `06_lab`
--
ALTER TABLE `06_lab`
  ADD PRIMARY KEY (`S_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
