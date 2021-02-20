-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 08:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `first_name`, `last_name`, `role_id`, `address`) VALUES
('1000', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin', 1, 'UMN, Serpong'),
('1001', '8b32306411d18e50589aaca4f86d5725', 'Abdad', 'Aruna', 2, 'Tokyo, Japan'),
('1002', 'ef17ff1c0b92ea741704fc498165b19b', 'Farhan', 'Hara', 3, 'Tangerang, Indonesia'),
('1003', 'e5fa17319f7d53b7d176abb8db660fe8', 'Hamdi', 'Conary', 3, 'Jakarta Selatan, Indonesia'),
('1004', '59858e24bb79937c4f891e95119a9200', 'Darrell', 'Dakari', 3, 'Jakarta barat'),
('1005', '0b728c8cf4290bc5e5b1c376bc67789b', 'Galen', 'Charemon', 3, 'Semarang'),
('1006', 'df228fc57298315c5c561d8ec5991922', 'Balakosa', 'Akemi', 3, 'Surabaya'),
('1007', '74edd1903be7e2be70fb2fc78cb15406', 'Ozora', 'Pastika', 2, 'Netherlands'),
('1008', 'a22587224f51b91299552aa25c3abf22', 'Osric', 'Osborn', 3, 'Purwokerto'),
('1009', 'f536b2882d085bad0b446a6da5cbd588', 'Shunnar', 'Vania', 3, 'Rest Area'),
('1010', '50fbe78b2f5ee9b3f072120106fe0563', 'Mustajab', 'Nararya', 3, 'Bekasi'),
('1011', '63c5b76784924aa2c6a602639b57307f', 'Liangyi', 'Luthfi', 3, 'Depok'),
('1012', '43e85aeaea1af21acc7cbc91bd70d536', 'Jorell', 'Juvenal', 3, 'Serpong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
