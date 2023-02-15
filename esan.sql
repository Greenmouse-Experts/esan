-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 08:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'esanadmin', '$2y$10$AjPPQbBZsqqG9q.YOgWJyeCV4v/r2D/PYbMwgJz3AZmbDJl3OOoQy');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `donation_ref` varchar(100) DEFAULT NULL,
  `donation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `name`, `email`, `amount`, `donation_ref`, `donation_date`) VALUES
(1, 'Nwanozie Promise', 'nwanoziep@gmail.com', '50000', '650943207', '2020-11-10'),
(2, 'John snow', 'jones@john.com', '56000', '30037100', '2020-11-10'),
(3, 'Obehi Okosun', 'obehiokosun@yahoo.com', '500', '211268735', '2020-11-27'),
(4, 'Victor Nwadinobi', 'info@greenmousetech.com', '2500.00', '866887067', '2020-11-27'),
(5, 'EFEKELU AKHIGBE', 'akhigbefe@yahoo.co.uk', '2000', '44353417', '2021-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `due`
--

CREATE TABLE `due` (
  `due_id` int(11) NOT NULL,
  `due_amount` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `due`
--

INSERT INTO `due` (`due_id`, `due_amount`) VALUES
(1, 98000);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `job_dsc` mediumtext DEFAULT NULL,
  `deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership_renewal`
--

CREATE TABLE `membership_renewal` (
  `renewal_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `renewal_date` date DEFAULT NULL,
  `renewal_end` date DEFAULT NULL,
  `renewal_ref` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_renewal`
--

INSERT INTO `membership_renewal` (`renewal_id`, `user_id`, `renewal_date`, `renewal_end`, `renewal_ref`) VALUES
(1, 6, '2020-10-12', NULL, '180215149'),
(3, 6, '2020-10-12', NULL, '833791614'),
(4, 7, '2020-10-13', NULL, '46394352'),
(6, 6, '2020-10-18', NULL, '72736570');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_date` date DEFAULT NULL,
  `message_body` longtext NOT NULL,
  `message_title` varchar(200) NOT NULL,
  `message_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_date`, `message_body`, `message_title`, `message_status`) VALUES
(70, '2020-10-23', 'war', 'love', 'published'),
(72, '2021-03-01', 'ok ok ok', 'retest', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `regfee`
--

CREATE TABLE `regfee` (
  `regfee_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reg_ref` varchar(100) NOT NULL,
  `reg_fee` varchar(100) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_phone` varchar(12) DEFAULT NULL,
  `user_gender` varchar(10) DEFAULT NULL,
  `user_state` varchar(20) DEFAULT NULL,
  `user_lga` varchar(50) DEFAULT NULL,
  `user_streetaddress` varchar(100) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT 'inactive',
  `user_birthday` date DEFAULT NULL,
  `reg_fee` varchar(100) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `user_pic` varchar(200) DEFAULT NULL,
  `user_approval` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `username`, `user_email`, `user_password`, `user_phone`, `user_gender`, `user_state`, `user_lga`, `user_streetaddress`, `user_status`, `user_birthday`, `reg_fee`, `reg_date`, `user_pic`, `user_approval`) VALUES
(1, 'baba', '', 'baba@mama.com', NULL, '08085712095', 'male', 'lagos', 'oshodi', '16 ishola imam', 'active', '1997-09-10', '', '0000-00-00', NULL, NULL),
(3, 'paul paul', '', 'saul@paul.com', '$2y$10$6HcsFHvhi8Qdz8QbDz9ntekQNIbFRSJV57mFiAPgH08nXJ8JnryQu', '345', '', 'lagos', '', '', 'inactive', '0000-00-00', '', '0000-00-00', NULL, NULL),
(4, 'josh', 'josh2f', 'ret@we.com', '$2y$10$w85Qs6lx0YmOgh06y/4SQe6MP8wcTX4vvlOfCKH1ssuf.na.8apFO', '456', 'female', 'abia', NULL, NULL, 'inactive', NULL, NULL, NULL, NULL, NULL),
(5, 'lawal musa', 'lawmu', 'nwanoziep@gmail.com', '$2y$10$mYxWMZ5gsOMr.UgUfKilWebduDP3MExI2gMIUaW9X2wqxrU0KHOEW', '777', 'male', 'edo', 'esan', '5 genroad', 'inactive', NULL, NULL, '2020-10-11', NULL, NULL),
(6, 'promise', 'propro', 'promisebeeceo@gmail.com', '$2y$10$.rQGRFPRnFkN2.zw3ktxLu9zJhFENM5EqTk7Iwqza4RT3kGbmzXtC', '08085712095', 'male', 'i', 'oshodi-mafoluku', '16 ishola imam', 'active', '1997-09-10', NULL, '2020-11-10', '../profile/promise.jpg', NULL),
(7, 'enger ken', 'kendaddy', 'promisenwanozie@gmail.com', '$2y$10$anxUHv9KYl3s02UCUIv82OZ3BvEY.ohyzi6eNRwC1IzePufmErOvW', '99', 'male', 'bauchi', '', '', 'active', '2020-10-21', NULL, '2020-10-11', NULL, NULL),
(9, 'law', '', 'ker@law.com', '$2y$10$fjCqGJXwHRM6w75MBiKEI.pOE/1um6n0VQIOSZ6Ulti01BcfgsZrq', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, NULL, NULL, NULL),
(10, 'love', '', 'loveth@love.com', '$2y$10$lXkTGCB0C2cn6iD863aOJuu5dPKy0B33CAIJtMUtEkuwkUsChixlS', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, NULL, NULL, NULL),
(11, '', '', 'john@utaka.com', '$2y$10$voh63xuAv.IMJGKOhdOfvOAK6K.jRV9X6ZDG4kVjXYJg.CTzpPznW', '', '', '', '', '', 'inactive', '0000-00-00', '', '2020-11-27', NULL, 'yes'),
(12, 'corn milk', NULL, 'corn@milk.com', '$2y$10$yqXMI/Y4rFi7Ww.bugrrUuil5ykImaRaRL/lnVc.5QjzljGk8Gd4W', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, '2020-11-27', NULL, NULL),
(13, 'Obehi Okosun', NULL, 'obehiokosun@yahoo.com', '$2y$10$hqKU2OsL0dnUl43cq3wjUuv/t.IKLpZLkV8GcFx8fzlIH9w940XJm', '08091991622', 'male', 'edo', 'Esan North East', '21B Olori Muyibat Oyefusi Street off ladipo omotosho cole street lekki phase 1', 'inactive', '1973-10-11', NULL, '2020-11-27', NULL, NULL),
(15, '', '', 'imoisilifestus@yahoo.com', '$2y$10$jFQdGxuIJvbXVu0kn/s2L.EPt3tJKyuecwNJ1Xvlg/wsoOvGVLZuy', '234809138821', 'female', 'Bauchi', 'Esan Central', 'Eguare Irrua', 'active', '0000-00-00', '', '2020-12-14', '../profile/IMOISILI IGHEDOISE FESTUS.jpg', 'yes'),
(16, 'Jesseunjum', NULL, 'ioox.v.e.r.t.ri.s@gmail.com', '$2y$10$vEcVJuWJTA4/DUtP9by.neCuZrHg3SdLkoAwfzJG4nk1MvKxmZMUa', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, '2021-02-01', NULL, NULL),
(17, 'Victor Nwadinobi', NULL, 'info@greenmousetech.com', '$2y$10$Tq.JaA1j9L8n322hi9hKd.YEr0Hd1XFis3yU8qmyr3TiB3nuvKFZG', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, '2021-02-26', NULL, NULL),
(18, 'john paul', NULL, 'john@gmail.com', '$2y$10$Ccd/XixpqlsZgIazkXYjUeffGf33ycPmedETrKB96yxqLaT7.hBhq', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, '2021-02-26', NULL, NULL),
(19, 'john paul', NULL, 'jp@gmail.com', '$2y$10$q7RbpoOtwU8Lso.yt8ixJuUDATM2uNk3.OghkLKbayXloCp2Ieg6G', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, '2021-02-26', NULL, NULL),
(20, '', '', 'gregugbeni@gmail.com', '$2y$10$C5AFNFm3mSIgMhJeapUblOkfCm1jcIIHL4wCaLMaJ6ifl7KXv5jh.', '', '', '', '', '', 'inactive', '0000-00-00', '', '2021-02-28', NULL, 'yes'),
(26, 'Promise Ezema', 'Kings', 'promiseezema11@gmail.com', '$2y$10$4JRtHJsuAKNfVUdWgXI9He1aMaBlmrrmJ.tCDagE6TPysT4QkaSr2', NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `due`
--
ALTER TABLE `due`
  ADD PRIMARY KEY (`due_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `membership_renewal`
--
ALTER TABLE `membership_renewal`
  ADD PRIMARY KEY (`renewal_id`),
  ADD UNIQUE KEY `renewal_ref` (`renewal_ref`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `regfee`
--
ALTER TABLE `regfee`
  ADD PRIMARY KEY (`regfee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_renewal`
--
ALTER TABLE `membership_renewal`
  MODIFY `renewal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `regfee`
--
ALTER TABLE `regfee`
  MODIFY `regfee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membership_renewal`
--
ALTER TABLE `membership_renewal`
  ADD CONSTRAINT `membership_renewal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
