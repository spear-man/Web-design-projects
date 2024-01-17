-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 07:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `njoroelectronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(1) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(1, 'Television sets'),
(2, 'Computers'),
(3, 'Radios'),
(4, 'Mobilephones'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockID` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `categoryID` int(2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `bigphoto` varchar(100) NOT NULL,
  `topline` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockID`, `name`, `categoryID`, `price`, `thumbnail`, `bigphoto`, `topline`, `description`) VALUES
(1, 'LG 15 inch television', 1, '30000.00', 'lgx-tb.jpg', 'lgx.jpg', 'Add a little swing to your house.', 'has a very beautiful display with very small bezzle design making it one of the most bought TV sets'),
(11, 'Realtech x45j radio ', 3, '4000.99', 'realtech-tb.jpg', 'realtech.jpg', 'for music addicts', 'comes with 2 1000 watt speakers plus a sub woofer'),
(2, 'Sony 25 inch television', 1, '50000.00', 'sony-tb.jpg', 'sony.jpg', 'pro entertainment.', 'this TV is like no other.It contains full hd display with multiple ports allowing you to connect play stations and computers'),
(3, 'Siemens xl2 16 inch television', 1, '51000.99', 'siemens-tb.jpg', 'siemens.jpg', 'comfort for your eyes', 'equipped with  4k resolution screen allowing you to view images and videos with the best quality available in the market'),
(4, 'Lg 20 inch television', 1, '54000.99', 'lg2-tb.jpg', 'lg2.jpg', 'Bring you entertainment on a whole new leval', 'this is the slimiest television set available specially made for those who want to bring elegance into their houses'),
(5, 'HP a6120n desktop computer', 2, '14000.00', 'pavilion-tb.jpg', 'pavilion.jpg', 'specially made for office work.', 'this computer has 2GB ram and a powerful processor ; Intel core 2 duo 3.1GHz allowing you to perform you office work efficiently without computer problems like hanging etc'),
(6, 'Dell inspiron 1500 laptop', 2, '42000.00', 'inspiron-tb.jpg', 'inspiron.jpg', 'for die hard gamers ', 'equipped with a core i7 quad core processor @ 3.0GHz and 16gh ram makes it one of the best laptops for playing major titles like GTA 5 etc. it can also be used for heavy work like architectural designs etc '),
(7, 'Alienware 15 laptop', 2, '120000.99', 'alienware-tb.jpg', 'alienware.jpg', 'All rounded laptop ', 'this has been rated one of the most dependable laptop for those who want an all rounded laptop\r\n.It comes with an 8 core Intel core i7 processor and 32gb ram making it one of the most rated laptops 2019.'),
(9, 'Starsounds radio', 3, '800.00', 'starsounds-tb.jpg', 'starsounds.jpg', 'listen to cool and come music with this rig!', 'smaller than most but equipped with standard 800 watt speaker and it is very portable making it usable even in offices '),
(10, 'max739 radio', 3, '20100.00', 'max-tb.jpg', 'max.jpg', 'You\'ll want to listen to the heavy bass in these.', 'this radio comes with  incredible 2000 watt speakers  making it very popular among college students.'),
(12, 'sumsung galaxy s3', 4, '20000.00', 's3-tb.jpg', 's3.jpg', 'high quality fast phone.', 'comes with a slim design and 2 gb ram + 32 GB SD card support '),
(14, 'sumsung galaxy s4', 4, '30000.00', 's4-tb.jpg', 's4.jpg', 'hiqh quality device', 'comes with a slim metallic design and 2 GB ram + 32 GB SD card support and has 16 GB internal storage'),
(15, 'Beats by dre headsets', 5, '4999.99', 'bbd-tb.jpg', 'bbd.jpg', 'Sturdy. Stylish.sounds just right.', 'tested and approved by the best musicians worldwide; they produce hiqh quality sound and can be used for many purposed like music production etc'),
(16, 'Audio technica A700x', 5, '2400.00', 'at-tb.jpg', 'at.jpg', 'Simple yet stunning.', 'compete favorably with beats by dre. Some are even saying they might be better.perfect for your friend and family and come with Bluetooth support removing any need for cable connection to your devices '),
(17, 'western digital 1tb harddisk', 5, '6000.00', 'wd-tb.jpg', 'wd.jpg', 'lightening fast storage device', '1 terabit storage space is enough to backup your files securely preventing any data loss that might occur and cause huge losses to your business'),
(20, 'dingding', 1, '44.00', 'fridge-tb.jpg', '', 'fine product', 'tis is the finest product on the market');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, 'spear', 'dd2b06414219349a518cc0721bea5183e55305e1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
