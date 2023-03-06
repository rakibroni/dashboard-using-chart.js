-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance_grade`
--

CREATE TABLE `student_attendance_grade` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `attendance` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_attendance_grade`
--

INSERT INTO `student_attendance_grade` (`id`, `student_name`, `attendance`, `grade`) VALUES
(1, 'A', 5, 80),
(2, 'B', 45, 40),
(3, 'C', 20, 50),
(4, 'D', 30, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_attendance_grade`
--
ALTER TABLE `student_attendance_grade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_attendance_grade`
--
ALTER TABLE `student_attendance_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
