-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 02:14 PM
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
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwordd` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwordd`, `date`) VALUES
(1, 'admin', '12345', '2024-07-01 16:35:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `admin_page`
--

CREATE TABLE `admin_page` (
  `id` int(11) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_available` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `occupied` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_page`
--

INSERT INTO `admin_page` (`id`, `room_type`, `room_available`, `price`, `occupied`) VALUES
(1, '1 BHK', 6, 1000, 3),
(2, '2 BHK', 4, 1800, 2),
(3, '3 BHK', 8, 2500, 3);

-- --------------------------------------------------------

--
-- Table structure for table `room_book`
--

CREATE TABLE `room_book` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `ac` int(10) NOT NULL,
  `breakfast` int(10) NOT NULL,
  `lunch` int(10) NOT NULL,
  `dinner` int(10) NOT NULL,
  `pool` int(10) NOT NULL,
  `total_bill` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `action_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_book`
--

INSERT INTO `room_book` (`id`, `name`, `email`, `number`, `room_type`, `price`, `checkin`, `checkout`, `ac`, `breakfast`, `lunch`, `dinner`, `pool`, `total_bill`, `booking_id`, `status`, `action_by`) VALUES
(1, 'dumy', 'dum@', 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 1000, '', ''),
(2, 'karan', 'karank345@gmail.com', 7845371084, '2 BHK', 1800, '2024-07-15', '2024-07-18', 300, 150, 100, 200, 300, 2850, 1001, 'Canceled', 'Hotel managers'),
(3, 'Ashish', 'ashishk234@gmail.com', 9968247143, '2 BHK', 1800, '2024-07-16', '2024-07-25', 300, 150, 100, 200, 300, 2850, 1002, 'Confirmed', 'Hotel managers'),
(4, 'Ashish', 'ashishk234@gmail.com', 9968247143, '3 BHK', 2500, '2024-07-18', '2024-07-22', 300, 150, 100, 200, 0, 3250, 1003, 'waiting', ''),
(5, 'Ashish', 'ashishk234@gmail.com', 9968247143, '3 BHK', 2500, '2024-07-16', '2024-07-20', 300, 0, 0, 0, 300, 3100, 1004, 'waiting', '');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(51) NOT NULL,
  `lastname` varchar(51) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `password` varchar(51) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `firstname`, `lastname`, `email`, `contact`, `password`, `date`) VALUES
(1, 'Ashish', 'kumar', 'ashishk234@gmail.com', 9968247143, 'abc@123', '2024-07-02 05:53:35.742150'),
(2, 'karan', 'kumar', 'karank345@gmail.com', 7845371084, 'abc@123', '2024-07-13 16:50:23.634764');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_page`
--
ALTER TABLE `admin_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_book`
--
ALTER TABLE `room_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
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
-- AUTO_INCREMENT for table `admin_page`
--
ALTER TABLE `admin_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_book`
--
ALTER TABLE `room_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
