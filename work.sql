-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2016 at 07:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Name`) VALUES
(1, 'labtops'),
(2, 'mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `new_price` double NOT NULL,
  `offer` tinyint(1) NOT NULL,
  `description` varchar(500) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `productCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cat_id`, `price`, `new_price`, `offer`, `description`, `added_by`, `quantity`, `brand`, `productCode`) VALUES
(11, 'MSI GT70 DOMINATOR-893 (Aluminum Black)', 1, 10000, 0, 0, '<ul><li><strong>Mfr Part Number:</strong> GT70 DOMINATOR-893;9S7-1763A2-893</li><li><strong>Processor:</strong> Intel Core i7-4800MQ Processor (2.7GHz Clock Speed, 3.7GHz Max Turbo, 6MB Intel Smart Cache, Quad-Core)</li><li><strong>Chipset:</strong> Intel HM87</li><li><strong>Memory:</strong> 16GB (8Gx2) DDR3L-1600 Memory</li><li><strong>Display:</strong> 17.3', 'Montaser', 2, 'MSI', 'GT70 DOMINATOR-893'),
(12, 'Asus ROG G750JZ Gaming Laptop 4Gen I7 Haswell', 1, 1000, 0, 0, '<ul><li><strong>Mfr Part Number:', 'Montaser', 2, 'Asus', ' G750JZ-T4004H'),
(13, 'Lenovo ThinkPad X1 Carbon Core i7 Touch 2K Display', 1, 400, 0, 0, '<ul><li><strong>Processor:</strong> I<span>ntel', 'Montaser', 2, 'Lenovo', ' 20BS0080AD'),
(14, 'HP ProLiant DL160 Gen9 E5-2609v3 Rack Server', 1, 222, 0, 0, '<p><strong>Model', 'Montaser', 1, 'HP', ' 783364-425'),
(15, 'ASUS ROG STRIX Radeon RX 480 8GB OC Edition', 1, 111, 0, 0, '<ul><li><strong>Mfr Part Number:</strong> STRIX-RX480-O8G-GAMING</li><li><strong>Chipset:', 'Montaser', 2, 'Asus', ' STRIX-RX480-O8G-GAMING'),
(16, 'Acer Aspire Switch 10 E 10.1" Touchscreen Windows 8.1', 1, 300, 0, 0, '<ul><li><strong>Chipset:</strong> N/A</li><li><strong>Memory:</strong> 2GB DDR3L SDRAM Memory</li><li><strong>Display:', 'Montaser', 1, 'Acer', ' NT.MX3AA.001'),
(17, 'Acer Iconia Tab 7 Quad Core 1.3Ghz 16GB Android 3G SIM', 1, 123, 0, 0, '<ul><li>MediaTek MT8382 Processor (1.3GHz, Quad-Core)</li><li><strong>Memory:</strong> 1GB DDR3 SDRAM Memory</li><li><strong>Display:', 'Montaser', 1, 'Acer', ' NT.L49EA.001'),
(18, 'Ionik I725 Android 4.4 Tablet WiFi   3G SIM Card Tablet ', 1, 123, 0, 0, '<table><tbody><tr><td>FM Radio</td><td>Yes</td></tr><tr><td>3D support</td><td>Yes</td></tr><tr><td>I/O Ports</td><td>MiniMicro USB, ', 'Montaser', 2, 'Acer', 'IO.725DC.453 '),
(19, 'Shuttle DS61 V1.1 LGA1155 Slim PC Barebone System', 1, 90, 0, 0, '<ul><li><br><ul><li>orts up to 65W TDP</li></ul></li><li><strong>Chipset:</strong> Intel H61 Express</li><li><strong>Memory:</strong> 2x 204pin DDR3-1066/1333/1600 SODIMM Slots, Dual Channel, Unbuffered, Max Capacity of 16GB</li><li><strong>Slots:</strong> 1x Mini PCI-Express Slot (Full Size)</li><li><strong>SATA:</strong> 2x SATA2 Ports', 'Montaser', 3, 'something', 'S61 V1'),
(20, 'ASUS 24" VZ249H Ultra-low Blue Light Monitor FHD ', 1, 900, 0, 0, '<p><strong>SPLENDID Video Preset Modes :', 'Montaser', 1, 'Asus', ' VZ249H'),
(21, 'MacBook pro', 1, 555, 0, 0, '<p>Mac</p>', 'Montaser', 1, 'Apple', '1234'),
(22, 'MacBook Air', 1, 111, 0, 0, '<p>Air</p>', 'Montaser', 2, 'Apple', '1233');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_mobile` int(11) NOT NULL,
  `customer_location` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer_ip_address` varchar(200) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_topics`
--

CREATE TABLE `main_topics` (
  `id` int(11) NOT NULL,
  `Subject` varchar(150) NOT NULL,
  `Body` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  `added_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_topics`
--

INSERT INTO `main_topics` (`id`, `Subject`, `Body`, `Date`, `added_by`) VALUES
(8, 'The First topic ever', '<p>Hello,</p><p><br></p><p><br></p><p><br></p><p><br></p><p>This is Montaser Qasem and this is the first topic ever.</p><p><br></p><p>asdasdasdasdas</p><p>dasdasdasd</p><p><br></p><p>asdsdasdasd</p><p>blalblalbllalalala</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>regards.</p>', '2016-07-16', 'test'),
(9, 'The second topic', '<p>Hello,</p><p><br></p><p><br></p><p><br></p><p>This is <strong>Montaser.R.Qasem</strong> writing this letter to check if the website is working perfectly.</p><p><strong>Note</strong><u><em>:blablablablablablabla.</em></u></p><p><br></p><p><sub>sadasdasd</sub></p><p><br></p><p><span class="fr-emoticon fr-deletable fr-emoticon-img" style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f600.svg);">', '2016-07-16', 'test'),
(13, 'a topic to fuck with', '<p>This is just a topic to fuck with</p>', '2016-07-16', 'test'),
(16, 'ØªØ¬Ø±Ø¨Ø© Ø§Ù„Ù„ØºØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠ', '<p>Ù‡Ø°Ø§ Ø§Ù„Ø¨ÙˆØ³Øª Ù„ØªØ¬Ø±Ø¨Ø© Ø§Ù„Ù„ØºØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©', '2016-07-16', 'test'),
(23, 'testing some shit', '<p>this is some shit being tested by the <strong>admin</strong></p>', '2016-08-12', 'Montaser');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `photo_path` varchar(200) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `primary_photo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `item_id`, `photo_path`, `photo_name`, `primary_photo`) VALUES
(48, 11, 'items_photos/1.jpg', '1.jpg', 1),
(49, 12, 'items_photos/2.jpg', '2.jpg', 1),
(50, 13, 'items_photos/3.jpg', '3.jpg', 1),
(51, 14, 'items_photos/4.jpg', '4.jpg', 1),
(52, 15, 'items_photos/5.png', '5.png', 1),
(53, 16, 'items_photos/6.png', '6.png', 1),
(54, 17, 'items_photos/7.jpg', '7.jpg', 1),
(55, 18, 'items_photos/8.jpg', '8.jpg', 1),
(56, 19, 'items_photos/9.jpg', '9.jpg', 1),
(57, 20, 'items_photos/10.png', '10.png', 1),
(58, 21, 'items_photos/11.jpg', '11.jpg', 1),
(59, 22, 'items_photos/12.jpg', '12.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_mobile` int(11) NOT NULL,
  `sender_location` varchar(100) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity_order` int(11) NOT NULL,
  `date` date NOT NULL,
  `sender_ip_address` varchar(300) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `seen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `First_name`, `Last_name`) VALUES
(1, 'Montaser', 'd16520a7e5b52acfb8f07e91b13c5ca249bafba5f82f46ea6913dd1335411eebc2551f9efbe8ffe509e361ff893ae192a09499d1e3b15898a6f38ca7ae46e65e', 'Montaser', 'Qasem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_topics`
--
ALTER TABLE `main_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_topics`
--
ALTER TABLE `main_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
