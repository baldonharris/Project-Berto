-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 05:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `name`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(7, 'baldonharris', '83dbcd3f44181d57b2f69f24e115ea79', 'Harris Baldon'),
(8, 'HCB', '46f94c8de14fb36680850768ff1b7f2a', 'HCB'),
(11, 'Try', '080f651e3fcca17df3a47c2cecfcb880', 'try');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spots`
--

CREATE TABLE `tourist_spots` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `fee` double NOT NULL,
  `service` varchar(250) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `picture` varchar(250) NOT NULL,
  `spot_type` enum('adventure','artscrafts','heritage','nature','wildlife') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_spots`
--

INSERT INTO `tourist_spots` (`id`, `name`, `type`, `address`, `description`, `fee`, `service`, `latitude`, `longitude`, `picture`, `spot_type`) VALUES
(18, 'Harris', 'Secrets', 'asdasdasd', 'asdasd', 10, 'asdasdasdas', 1, 1, 'b7427088759698a4af0c6594f7eed9d4.jpg', 'adventure'),
(22, 'asdasd', 'asdasda', 'asdasdasd', 'asdasd', 10, 'asdasdasdas', 1, 1, '511da1ca2f82b84071ca3454ec50a2bc.jpg', 'nature'),
(26, 'Harris', 'asdasda', 'asdasd', 'asdasd', 999, 'asda', 1, 1, '94d5e7ae19b6496e0d21e34421ba4bf1.jpg', 'adventure'),
(29, 'Harris', 'Secret', 'Secret', 'Secret', 1111, 'Secret', 11, 11, '9e79b7ea525c84e2c9006e96b7717a15.jpg', 'adventure'),
(30, 'Harris Baldon', 'asdasda', 'asdasdasd', 'asdasd', 1, 'd', 1, 1, '91feb425aa9fbb3e7e74474ab730a8b5.jpg', 'adventure'),
(31, 'Harris Baldon', 'asdasdasd', 'asdasdasd', 'd', 1, 'd', 1, 1, 'cd6da117c731d2a49b87b2436b01c2e4.png', 'nature');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
