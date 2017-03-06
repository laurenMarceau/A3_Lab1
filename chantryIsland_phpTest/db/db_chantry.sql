-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 02:54 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` smallint(6) NOT NULL,
  `gallery_name` varchar(40) NOT NULL,
  `gallery_photo` varchar(300) NOT NULL DEFAULT 'default.jpg',
  `gallery_desc` varchar(250) NOT NULL,
  `gallery_credit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_name`, `gallery_photo`, `gallery_desc`, `gallery_credit`) VALUES
(1, 'photo1', 'Chantry-Island-1', 'Aerial view of the beautiful lighthouse and new dock.', 'Karen Smith'),
(2, 'photo2', 'Chantry-Island-2', 'Side aerial view of the lighthouse looking out onto the water.', 'Karen Smith'),
(3, 'photo3', 'Chantry-Island-3', 'Keepers cottage and lighthouse from the ground.', 'Vicki Tomori'),
(4, 'photo4', 'Chantry-Island-4', 'New peerless tour boat in front of the lighthouse and cottage.', 'George Plant'),
(5, 'photo5', 'Chantry-Island-5', 'Shot of inside the cottage, furnished just like the original cottage would have been.', 'James Swartz'),
(6, 'photo6', 'Chantry-Island-6', 'Ground shot of the shed, lighthouse and cottage.', 'Vicki Tomori'),
(7, 'photo7', 'Chantry-Island-7', 'Photo of the island and lighthouse at sunset.', 'Richard Main'),
(8, 'photo8', 'Chantry-Island-8', 'Shot of inside the cottage, main floor.', 'James Swartz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
