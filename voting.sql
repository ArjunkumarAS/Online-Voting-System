-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 10:10 AM
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
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `role`, `status`, `votes`) VALUES
(2, 'Arjun Kumar A S', 9629947148, 'aW1iYWNr', '5,Pillaiyar Kovil Street,MMW Colony,Thirunagr,Madurai-6.', 'valimai1472021tm1.jpg', 1, 1, 0),
(7, 'Tharun', 8903476543, 'dGhhcg==', 'Annanagar,Madurai-9.', 'valimai1472021tm1.jpg', 2, 1, 2),
(9, 'Siva E', 6345976543, 'c2l2YQ==', 'Thirunagar,Madurai-6.', 'ASCII-values-of-each-printable-characters.png', 1, 1, 0),
(10, 'Karthick R R', 96267, 'aW10aGVyZQ', 'Thirunagar,Madurai-6.', 'Screenshot (99).png', 2, 0, 1),
(11, 'Santhosh J', 76890, 'c2FudGg=', 'Thirunagar,Madurai-6.', 'Screenshot (107).png', 1, 1, 0),
(12, 'Sarvesh Y', 67890, 'c2FydmVzaA', 'Avaniyapuram,Madurai.', 'Screenshot (106).png', 2, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
