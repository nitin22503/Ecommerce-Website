-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2020 at 12:25 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `item_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`item_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item_id`, `user_id`, `status`) VALUES
(1, 21, 'Added to cart'),
(2, 21, 'Added to cart'),
(3, 21, 'Added to cart');

-- --------------------------------------------------------

--
-- Table structure for table `mobileshopitems`
--

DROP TABLE IF EXISTS `mobileshopitems`;
CREATE TABLE IF NOT EXISTS `mobileshopitems` (
  `item_number` int(255) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`item_number`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobileshopitems`
--

INSERT INTO `mobileshopitems` (`item_number`, `item_name`, `price`) VALUES
(1, 'LavaZ62', '5549'),
(2, 'Realme 5', '9999'),
(3, 'Redmi Note 8 pro', '14999'),
(4, 'Vivo Z1 pro', '13990'),
(5, 'Samaung galaxy S9', '24999'),
(6, 'Samsung Galaxy j5', '5199');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact_Number` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `Name`, `Email`, `Password`, `Contact_Number`, `City`, `Address`, `message`) VALUES
(1, 'Nitin Verma', 'nitinvnverma@gmail.com', '$2y$10$B4H0bpDYFxeASRWB7rLCKusJ8iOFGrh0zThp5tk2rIeytwMHtbsrG', '9100000000', 'sitapur', 'bahrauli', ''),
(2, 'mark', 'dk1104010@gmail.com', '$2y$10$hgNV5Pu4y/GS5Q9E6veN3OeqHV5liXMLnvIITuOUl/JArhKSf1N.S', '9100000000', 'sitapur', 'bahrauli', ''),
(3, 'nik verma', 'nvnikverma@gmail.com', '$2y$10$eCMwsh7sKefbZ4T2g7LKee7usyavont33YBoIet7x9.ar5s3nF4IC', '9119949369', 'sitapur', 'bahrauli', ''),
(4, 'montu', 'abaudemy@gmail.com', '$2y$10$lVDWfC44djFwStgPYfdtWOguMTaAmlcqVkW6LZVNfxhxnXyMHjjaS', '9100000000', 'sitapur', 'bahrauli', ''),
(5, 'Sanaya', 'sanaya@gmail.com', '$2y$10$heUbdMsJ0hknHcj4QX6Xg.6eiJxKU3aXhwuXkKEFI1X/yfs1YkAE2', '9100000000', 'sitapur', 'bahrauli', ''),
(6, 'tiyasha', 'tiyasha@gmail.com', '$2y$10$GRG5x7exWfcyKNmZIczmWO8CMPRTVlJiL/9NZcr4P7oF3cdFiMicC', '9100000000', 'sitapur', 'bahrauli', ''),
(7, 'iti1234', 'iti@gmail.com', '$2y$10$YnLWpVQF1Tul1gogUknSVOQVJeXXyOG6cucCcxNWAEsxLBHcCRq76', '9100000000', 'sitapur', 'bahrauli', ''),
(8, 'dheeraj', 'dheeraj@gmail.com', '$2y$10$lKwWG/dyUeJ1d/XE1J.47eUvXGYg57iF02vMg5PtP9pYEaLUbhVi2', '9100000000', 'sitapur', 'bahrauli', ''),
(9, 'ria1234', 'ria@gmail.com', '$2y$10$S9g5CRpc1uTjrKKiBscslO3DX/sLsEeD93UuPMHc9uH84O3k5X5f2', '9632587410', 'sitapur', 'bahrauli', ''),
(10, 'sumit kumar maurya', 'sumitKumar@gmail.com', '$2y$10$v4Nzzr0h5yX63lx.1/tX5.84.aRc7fLnEcNMWOilGKky61dWoAdxe', '9632587410', 'sitapur', 'bahrauli', ''),
(11, 'vishal kumar singh', 'visals123456@gmail.com', '$2y$10$6DgdHFoIbaWQ.tE18yLqtOKcMiEV5Xyh8pWYhwW46rEUUqdGIDMHe', '9632587410', 'sitapur', 'bahrauli', ''),
(12, 'sandeep', 'sandeep@gmail.com', '$2y$10$MbuGrot7RCedLGFpLGvJbOHboHSZ3k2GPrjykenStgzSx5cqbGIWK', '9632587410', 'sitapur', 'bahrauli', ''),
(13, 'utpal Singh', 'utpalSingh@gmail.com', '$2y$10$8kx1GE7XMPuhs8SoVejnnemY70.LLG5wUhULovU2n0XAt3rn/IrvO', '9632587410', 'sitapur', 'bahrauli', ''),
(14, 'ashish verma', 'ashish@gmail.com', '$2y$10$vTQPA5m5AxeoQ4N7vfBXuO1vFLflMqTj4WQhi3YZ3CnpbVsYaSKRO', '9632587410', 'sitapur', 'bahrauli', ''),
(15, 'anand verma', 'anand@gmail.com', '$2y$10$qtlbSJEiTDO2Sk6UDkTKgevXt8LEtQFY9JtvmybiA5dZVRV07Lnhe', '9632587410', 'sitapur', 'bahrauli', ''),
(16, 'sahil1234', 'sahil@gmail.com', '$2y$10$sssW8shixAWiABwKLS5r0eTulN2PPzuDGU5Icoe3ktIyy2pt2C2um', '9632587410', 'sitapur', 'bahrauli', ''),
(17, 'somnath', 'somnath@gmail.com', '$2y$10$VFLc88v/gE8pJkZf6XyqMOM90KcMQg1rqJ8i5n0U50UarHf50/pK2', '9632587410', 'sitapur', 'bahrauli', ''),
(18, 'subham', 'subham@gmail.com', '$2y$10$oxEhCaenDSY.6nppQqw99.EfjR7gg0uxs38ozrxMgSWLZy8oIPypq', '9632587410', 'sitapur', 'bahrauli', ''),
(19, 'jackson', 'jackson@gmail.com', '$2y$10$dvDIsRUFgt.jpBlkjiMEMeZ6pVi0P/soxWyLxs6gwzdt4I7RYJUqm', '9632587410', 'sitapur', 'bahrauli', ''),
(20, 'watson', 'watson@gmail.com', '$2y$10$RaqaZ32wVenJ5rpCawCm8ODhQJpYMr26AaufqmnN6/I0SfM9gTbP.', '9632587410', 'sitapur', 'bahrauli', ''),
(21, 'warner', 'warner@gmail.com', '$2y$10$qkFKhYw4KvO/IABbk2I7RO3GDUTjoi3jSt22vm18a8QaTEv4DxSFW', '9632587410', 'sitapur', 'bahrauli', ''),
(22, 'virat kohli', 'virat@gmail.com', '$2y$10$m1uruYxyXsKD9/VRcUMgFuMBuuLeE34GR7bj4JxRM7jZeVyxcnALe', '9632587410', 'sitapur', 'bahrauli', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
