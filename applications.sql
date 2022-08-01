-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2022 at 03:07 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applications`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_name` varchar(255) NOT NULL,
  `class_requested` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `state` varchar(30) NOT NULL,
  `stud_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_name`, `class_requested`, `address_1`, `address_2`, `city`, `contact_person`, `state`, `stud_id`) VALUES
('Redempta Uwayezu', '1', '123', 'studio', 'Kimihurura', 'Gerald', 'kigali', 10),
('Iradukunda Denyse', '2', '123', 'studio', 'Kicukiro', 'Gakwaya Moses', 'kigali', 11),
('Batamuriza fiona', '1', '1234', '234', 'kanombe', 'emmanueli', 'kigali', 12),
('Emmaccule Nizeyimana', '1', '123', 'studio', 'tumba', 'Damascent', 'huye', 13),
(' Ishimwe kelia', '3', '456', 'apartment', 'tumba', 'Migabo', 'huye', 14),
('Mugisha Destiny', '1', '1234', 'apartment', 'Gasoro', 'Samson', 'nyanza', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
