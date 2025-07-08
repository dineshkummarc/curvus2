-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 11:05 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `curvus`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `orderid` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(11,2) NOT NULL,
  `productID` int(11) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderid`, `memberID`, `qty`, `price`, `productID`, `total`, `status`) VALUES
(16, 4, 1, 0.00, 12, 0.00, 'Pending'),
(17, 4, 1, 120.00, 14, 120.00, 'Pending'),
(20, 4, 2, 279.00, 27, 558.00, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `memberID` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact_Number` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`memberID`, `username`, `Firstname`, `Lastname`, `Email`, `Password`, `Contact_Number`, `address`) VALUES
(4, 'mugi', 'luffy', 'monkey', 'luffy@gmail.com', 'mugiwara', '0978346712', 'north blue'),
(5, 'Cherry', 'Cherry Mae', 'Abellar', 'kixxme_01@yahoo.com', '1234', '09104848880', 'Paloc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE IF NOT EXISTS `tb_products` (
  `productID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `originated` varchar(255) NOT NULL,
  `price` double(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`productID`, `name`, `description`, `category`, `originated`, `price`, `quantity`, `location`) VALUES
(11, 'family', 'bla bla ', 'Seats Area', '', 0.00, 2, 'upload/IMG_20170922_135226.jpg'),
(12, 'couple', 'sweet sweet', 'Seats Area', '', 0.00, 5, 'upload/IMG_20170922_13560.jpg'),
(13, 'single', 'wawaw ka', 'Seats Area', '', 0.00, 8, 'upload/IMG_20170922_135616.jpg'),
(14, 'adobo', 'chicken', 'Main Dish', '', 120.00, 10, 'upload/adobo.Jpeg'),
(15, 'Fries', 'fried', 'Desert', '', 120.00, 50, 'upload/fries.jpg'),
(16, 'Coke', 'malamig', 'Beverages', '', 1550.00, 50, 'upload/coke-1.5-ltr-600x600.jpg'),
(18, 'Curvus Grille', 'Family ', 'Seats Area', '', 0.00, 4, 'upload/IMG_20170922_135402.jpg'),
(19, 'Buttered Corn', 'Buttered', 'Snacks in Cafe', '', 49.00, 100, 'upload/orca_share_media1506576401049.jpg'),
(21, 'Cheesy Fries', 'Cheesy', 'Snacks in Cafe', '', 99.00, 100, 'upload/orca_share_media1506562454255.jpg'),
(22, 'Curvus Burger', 'Cheesy Burger', 'Snacks in Cafe', '', 99.00, 100, 'upload/burger.jpg'),
(23, 'Curvus Pansit', 'Pansit', 'Snacks in Cafe', '', 219.00, 50, 'upload/orca_share_media1506562140321.jpg'),
(25, 'Hot Coffee', 'Instant Original', 'Beverages', '', 39.00, 150, 'upload/received_565215900536773.jpeg'),
(26, 'Hotdog', 'Served with rice, egg, and choice of coffee or iced tea', 'Breakfast', '', 99.00, 200, 'upload/images (51).jpg'),
(27, 'SHRIMP', 'Steamed shrimp', 'Dining in Grille', '', 279.00, 100, 'upload/received_921495124668260.jpeg'),
(28, 'TALABA', 'Steamed Talaba', 'Dining in Grille', '', 99.00, 150, 'upload/received_921497718001334.jpeg'),
(29, 'PIZZA', '4-Cheese Pizza', 'Snack in Grille', '', 299.00, 100, 'upload/received_1874978845849034.jpeg'),
(30, 'PIZZA', 'Grilled Chicken Pizza', 'Snack in Grille', '', 249.00, 100, 'upload/received_565618723829824.jpeg'),
(31, 'PIZZA', '4-Cheese Pizza', 'Snack in Grille', '', 299.00, 100, 'upload/received_1874978845849034.jpeg'),
(32, 'CHICKEN', 'Grilled Chicken-Half', 'Dining in Cafe', '', 169.00, 100, 'upload/chiken bbq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'francis', 'benihagan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `memberID` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
