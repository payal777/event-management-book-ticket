-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 06:15 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `no_of_tickets` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `member_id`, `event_id`, `no_of_tickets`, `total_price`) VALUES
(1, 5, 2, 13, 1300),
(2, 5, 2, 12, 1200),
(3, 14, 2, 13, 1300),
(4, 14, 2, 45, 4500),
(5, 14, 2, 45, 4500),
(6, 14, 2, 45, 4500),
(7, 14, 2, 13, 1300),
(8, 14, 2, 12, 1200),
(9, 14, 2, 13, 1300),
(10, 14, 2, 8, 800),
(37, 5, 1, 3, 300),
(38, 14, 1, 6, 600),
(39, 1, 1, 7, 700),
(40, 5, 1, 67, 6700),
(41, 14, 1, 4, 400),
(42, 1, 1, 5, 500),
(43, 1, 1, 6, 600),
(44, 1, 1, 5, 500),
(45, 5, 1, 1, 100),
(46, 5, 1, 3, 300),
(47, 5, 1, 5, 500),
(48, 5, 2, 5, 500),
(49, 5, 2, 5, 500),
(50, 5, 2, 5, 500),
(51, 5, 2, 56, 5600),
(52, 5, 2, 5, 500),
(53, 5, 2, 5, 500),
(54, 5, 2, 5, 500),
(55, 5, 1, 5, 500),
(56, 5, 1, 12, 1200),
(57, 5, 1, 4, 400),
(58, 5, 1, 2, 200),
(59, 10, 1, 3, 300),
(60, 10, 1, 3, 300),
(61, 10, 1, 4, 400),
(62, 10, 1, 4, 400),
(63, 10, 1, 4, 400),
(64, 10, 1, 1, 100),
(65, 10, 1, 1, 100),
(66, 10, 2, 4, 400),
(67, 10, 2, 4, 400),
(68, 5, 2, 5, 500),
(69, 5, 2, 5, 500),
(70, 5, 2, 2, 200),
(71, 5, 2, 2, 200),
(72, 5, 2, 4, 400),
(73, 5, 2, 3, 300),
(74, 5, 1, 5, 500),
(75, 5, 1, 2, 200),
(76, 1, 1, 4, 400),
(77, 1, 1, 4, 400),
(78, 1, 1, 4, 400),
(79, 1, 2, 4, 400),
(80, 1, 2, 4, 400),
(81, 1, 2, 4, 400),
(82, 1, 2, 4, 400),
(83, 5, 1, 3, 300),
(84, 5, 1, 4, 400),
(85, 5, 1, 3, 300),
(86, 5, 1, 5, 500),
(87, 5, 1, 5, 500),
(88, 5, 1, 4, 400),
(89, 5, 2, 2, 200),
(90, 14, 1, 4, 400),
(91, 5, 2, 3, 300),
(92, 5, 2, 4, 400),
(93, 5, 2, 3, 300),
(94, 5, 2, 2, 200),
(95, 5, 2, 4, 400),
(96, 5, 2, 5, 500),
(97, 5, 2, 4, 400),
(98, 5, 2, 4, 400),
(99, 5, 2, 4, 400),
(100, 5, 2, 4, 400),
(101, 5, 2, 3, 300),
(102, 5, 2, 3, 300),
(103, 5, 2, 2, 200),
(104, 5, 2, 2, 200),
(105, 5, 1, 4, 400),
(106, 5, 1, 4, 400),
(107, 5, 2, 2, 200),
(108, 5, 2, 4, 400),
(109, 5, 2, 4, 400),
(110, 5, 2, 2, 200),
(111, 5, 1, 5, 500),
(112, 5, 2, 4, 400),
(113, 5, 2, 3, 300),
(114, 5, 2, 2, 200),
(115, 5, 2, 4, 400),
(116, 5, 2, 3, 300),
(117, 5, 1, 5, 500),
(118, 5, 1, 4, 400),
(119, 5, 2, 4, 400),
(120, 5, 2, 2, 200),
(121, 5, 2, 2, 200),
(122, 5, 2, 4, 400),
(123, 5, 2, 5, 500),
(124, 5, 2, 5, 500),
(125, 5, 2, 3, 300),
(126, 5, 2, 5, 500),
(127, 5, 2, 2, 200),
(128, 5, 2, 2, 200),
(129, 5, 1, 2, 200),
(130, 5, 1, 5, 500),
(131, 5, 1, 2, 200),
(132, 5, 2, 4, 400),
(133, 5, 2, 4, 400),
(134, 5, 1, 3, 300),
(135, 1, 2, 4, 400),
(136, 5, 1, 1, 100),
(137, 5, 2, 4, 400),
(138, 5, 2, 2, 200),
(139, 1, 2, 3, 300);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(250) NOT NULL,
  `event_organizer` varchar(250) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `venue` varchar(200) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_website_url` varchar(100) DEFAULT NULL,
  `ticket_prize` double DEFAULT NULL,
  `contact_1` varchar(45) DEFAULT NULL,
  `contact_2` varchar(45) DEFAULT NULL,
  `contact_3` varchar(45) DEFAULT NULL,
  `no_of_seats` varchar(45) DEFAULT NULL,
  `terms_conditions` varchar(45) DEFAULT NULL,
  `book_url` varchar(45) DEFAULT NULL,
  `event_image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_organizer`, `description`, `venue`, `event_start_date`, `event_end_date`, `event_website_url`, `ticket_prize`, `contact_1`, `contact_2`, `contact_3`, `no_of_seats`, `terms_conditions`, `book_url`, `event_image`) VALUES
(1, 'music concert', 'dinesh', 'The Band’s music can be described as a soulful mix of progressive elements, ambient psychedelic soundscapes and the drive and energy of stadium rock. Hugely influenced by bands like pink Floyd, Porcupine Tree, U2, Opeth, Guns N Roses Radiohead, Led zeppelin to name a few, Darklight aspires to create powerful and soul-stirring music to leave you spellbound and wanting more.', 'hubli', '2016-06-17', '2016-06-24', 'hhhh', 100, '9876789876', '987898767', '987898767', '12', 'once ticket booked it can\'t cancel', 'gdh', '/sat_event/web/music.jpg'),
(2, 'drama', 'ritesh', 'Play is an effort to explore the capacity of human brain which brazens out the relentless caution of conscience despite being aware that, the basic purpose of life is just living and nothing beyond. It is conscience that should guide a civilized life and not the brain. This play performed at Rangashankara in Bengaluru is going to be a wonderful experience.', 'chandgad', '2017-05-25', '2017-05-30', 'dfghdh', 100, '98789876', '9876789876', '987898767', '12', 'once ticket booked it can\'t be cancel', 'dgh', '/sat_event/web/drama.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `mnumber` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `lname`, `address`, `username`, `mnumber`) VALUES
(1, 'dhgfdhg', 'payalmulik707@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, '', NULL),
(2, 'kiran', 'kiran@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, '', NULL),
(3, 'sahil', 'sahil@gmail.com', 'e35cf7b66449df565f93c607d5a81d09', '', NULL, '', NULL),
(4, 'sahil', 'sahilmulik707@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, '', NULL),
(5, 'payal', 'payal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'mulik', 'ghjnjdfhd', 'payal', '12345678'),
(6, 'xyz', 'xyz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sgf', 'hfjhgh', 'xas', '234567'),
(7, 'harsha', 'harsha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'desai', 'hubli', 'harsha', '123456'),
(8, 'pooja', 'pooja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dassdsd', 'dgh', 'pooja', '23543534'),
(9, 'harshad', 'harshad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'desai', 'hubli', 'harshad', '9878987656'),
(10, 'sara', 'sara@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'deol', 'hubli', 'sara', '9878987678'),
(11, 'a', 'a@b.com', 'e10adc3949ba59abbe56e057f20f883e', 'a', 'a', 'a', '1'),
(12, 'sun', 'sun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'star', 'hubli', 'sun', '123456'),
(13, 'd', 'd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'd', 'ghujk', 'd', '123456'),
(14, 's', 's@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 's', 'hubli', 's', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
