-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 01:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `org`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(2, 'Human Resources'),
(3, 'IT'),
(4, 'Marketing'),
(5, 'Finance'),
(6, 'Operation Management');

-- --------------------------------------------------------

--
-- Table structure for table `dept_membership`
--

CREATE TABLE `dept_membership` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept_membership`
--

INSERT INTO `dept_membership` (`id`, `staff_id`, `staff_name`, `dept_id`, `dept_name`) VALUES
(2, 83, 'Owolabi', 2, 'IT'),
(5, 83, 'Owolabi', 3, 'IT'),
(6, 84, 'Olagunju', 2, 'Marketing'),
(7, 85, 'Kelvin', 6, 'Operation Management'),
(8, 86, 'Smart', 4, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `date_employed` date NOT NULL,
  `department` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `age`, `date_employed`, `department`) VALUES
(83, 'Owolabi', 'test@email.COM', 23, '2019-12-18', 'marketing'),
(84, 'Olagunju', 'test@email.com', 28, '2019-12-04', 'it'),
(85, 'Kelvin', 'kelvin@test.co', 34, '2019-12-19', 'operations management'),
(86, 'Smart', 'smart@test.co', 30, '2019-12-27', 'marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_membership`
--
ALTER TABLE `dept_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dept_membership`
--
ALTER TABLE `dept_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
