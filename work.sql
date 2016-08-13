-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2016 at 01:31 PM
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
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cat_id`, `price`, `new_price`, `offer`, `description`, `added_by`, `quantity`) VALUES
(4, 'Asus', 1, 20, 10, 1, '<p>Okey...Oley</p>', 'montaser', 1),
(5, 'Iphone', 2, 100, 0, 0, '<p>New shit</p>', 'montaser', 3),
(6, 'samsung', 2, 20, 10, 1, '<p><strong>Hello ,</strong></p><p><strong>this is just a test</strong></p>', 'montaser', 3);

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
(18, 4, 'items_photos/1.jpg', '1.jpg', 1),
(19, 5, 'items_photos/2.jpg', '2.jpg', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
