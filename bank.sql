-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 01:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `SNO` int(3) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `CURRENT_BALANCE` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`SNO`, `NAME`, `EMAIL`, `CURRENT_BALANCE`) VALUES
(1, 'MUSKAN', 'muski@gmail.com', 1995000),
(2, 'ALPHA', 'ttiwari@gmail.com', 979000),
(3, 'SHRUTI', 'shrutisinha@yahoo.com', 23450),
(4, 'ROHIT', 'rohitsingh@yahoo.com', 52250),
(5, 'SEEMA', 'seemagupta@gmail.com', 73800),
(6, 'RISHAB', 'rishabaggarwal@gmail.com', 38700),
(7, 'ZIA', 'zia24@yahoo.com', 125400),
(8, 'AMIT', 'amitsingh@gmail.com', 64100),
(9, 'RIYA', 'riyapandey@yahoo.com', 90000),
(10, 'SAMEER', 'sameer_02@gmail.com', 16000),
(11, 'PREETI', 'preetimishra@yahoo.com', 45750),
(12, 'DHRUV', 'dhruv21@gmail.com', 97250);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Sender` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Amount` float NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Sender`, `Receiver`, `Amount`, `Time`) VALUES
('ALPHA', 'MUSKAN', 1000, '2021-04-17 09:53:58'),
('ZIA', 'ROHIT', 500, '2021-04-17 09:54:21'),
('SEEMA', 'RISHAB', 1200, '2021-04-17 10:14:46'),
('RIYA', 'SHRUTI', 200, '2021-04-17 10:16:36'),
('MUSKAN', 'SAMEER', 1000, '2021-04-17 10:38:09'),
('ALPHA', 'RIYA', 5000, '2021-04-17 10:40:29'),
('DHRUV', 'PREETI', 750, '2021-04-17 10:42:44'),
('SHRUTI', 'ROHIT', 1750, '2021-04-17 10:43:43'),
('AMIT', 'ZIA', 900, '2021-04-17 10:44:52'),
('MUSKAN', 'ALPHA', 5000, '2021-04-17 10:48:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
