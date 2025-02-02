-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2024 at 10:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `year_of_passing` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `address_line1` varchar(100) DEFAULT NULL,
  `address_line2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `graduation_details` text DEFAULT NULL,
  `personal_message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `email`, `phone`, `username`, `password`, `year_of_passing`, `dob`, `marital_status`, `profession`, `address_line1`, `address_line2`, `city`, `state`, `zip`, `graduation_details`, `personal_message`) VALUES
(2, 'Susil Kumara', 'kumarasusil80@gmail.coma', '0754815634', 'kumara1', '1234', '2024', '2024-12-12', 'single', 'sww', '3/204,Mahakandiya, Uhana', 'Uhana', 'Ampara', '', '32000', 'ss', 'sxxx\'\' 0-\'0-\''),
(3, 'buddhi rangana', 'buddhirangana@gmail.com', '07863425267', 'Buddhi', 'Buddhi1', '2024', '2024-12-26', 'married', 'devoloper', '3/204,Mahakandiya, Uhana', 'Uhana', 'Ampara', '', '32000', 'asdffgggh', 'awsedfr'),
(7, 'Nadun Hirudika Bandara', 'nadunhirudika46@gmail.com', '0764620687', 'nadun', '123456', '2025', '2000-11-21', 'single', 'devoloper', '100/c ', 'Amboruwa', 'Aludeniya', 'kandy', '10200', '', ''),
(9, 'kasun', 'dfdhth@mail.com', '758886565545', 'rfgrgrg', '', 'ggareg5r', '2024-12-01', 'married', 'hxfjhr', 'hrthrtht', 'tdghtgh', 'dthrth', 'dffbhs', 'dfhgtht', '', ''),
(10, 'Kaveesha Madushani', 'kaveeshamadushani@gmail.com', '0127456265', 'kaveesha', '1234', '2024', '2024-12-18', 'married', 'devoloper', 'ewtyh5', 'erhey', 'ergrh5', 'trh6uj65', 'u6i7i', '', ''),
(11, 'kasun kovida', 'kasunkovida@gmail.com', '0764620687', 'kovida', '12345', '2025', '2024-12-03', 'married', 'devoloper', 'rgryh5', 'erty43y53y', 'rthtyh54', 'yht5yh', '5tu6u', 'rt6uj6u65uinu7uniylp0;rb6 in68o8', 'rtbyykiu;-p] ynktp0[v7i9po0n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
