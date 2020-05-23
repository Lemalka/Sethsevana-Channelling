-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: May 23, 2020 at 06:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sethsevanachannelling`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` varchar(100) NOT NULL,
  `doc_name` varchar(128) NOT NULL,
  `date_created` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `room_id` varchar(100) NOT NULL,
  `patient_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `doc_name`, `date_created`, `time_from`, `time_to`, `room_id`, `patient_id`) VALUES
('', '', '0000-00-00', '00:00:00', '00:00:00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` varchar(100) NOT NULL,
  `doc_fame` varchar(128) DEFAULT NULL,
  `doc_lname` varchar(128) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `SLMC_no` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(100) NOT NULL,
  `emp_fname` varchar(128) NOT NULL,
  `emp_lname` varchar(128) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient-id` varchar(100) NOT NULL,
  `appointment_id` varchar(100) NOT NULL,
  `patient_fname` varchar(128) NOT NULL,
  `patient_lname` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `doc_id` varchar(100) NOT NULL,
  `diagnostic_status` varchar(200) NOT NULL,
  `medicine` varchar(200) NOT NULL,
  `prescription_image` blob NOT NULL,
  `symptoms` varchar(200) NOT NULL,
  `allergies` varchar(200) NOT NULL,
  `recommended_test` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_appointments`
--

CREATE TABLE `pending_appointments` (
  `patient_fname` varchar(128) DEFAULT NULL,
  `patient_lname` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `NIC` int(12) DEFAULT NULL,
  `contact_no` int(10) NOT NULL,
  `doc_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recommended_test`
--

CREATE TABLE `recommended_test` (
  `test_id` varchar(100) NOT NULL,
  `test_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_results`
--

CREATE TABLE `test_results` (
  `patient_id` varchar(100) NOT NULL,
  `test_id` varchar(100) NOT NULL,
  `result` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `username` varchar(128) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `role`, `password`) VALUES
(4, 'lemalkadesilva95@gmail.com', 'admin', 'lema123'),
(5, 'abc@gmail.com', 'doctor', 'abc123'),
(6, 'efg@gmail.com', 'receptionist', 'efg123'),
(7, 'ijk@gmail.com', 'patient', 'ijk123'),
(8, 'lmn@gmail.com', 'pharmacist', 'lmn123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient-id`);

--
-- Indexes for table `recommended_test`
--
ALTER TABLE `recommended_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `test_results`
--
ALTER TABLE `test_results`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
