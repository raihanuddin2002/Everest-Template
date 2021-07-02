-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.ezyro.com
-- Generation Time: Jul 02, 2021 at 02:28 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezyro_28923250_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(33, 'Sports', 0),
(35, 'Entertainment', 2),
(34, 'Politics', 0),
(36, 'Religion', 0),
(38, 'Education', 1),
(40, 'Health', 0),
(42, 'Programming', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `massage` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `subject`, `massage`, `time`) VALUES
(9, 'Raihan Uddin', 'raihanuddin2002@gmail.com', 'Build a website for me ', 'vv', '2021-06-05 23:10:57'),
(11, 'Shahrier Aziz Himel', 'sh002@gmail.com', 'ere', 'Vidit nulla errem ea mea. Dolore apeirian insolens mea ut, indoctum consequuntur hasi. No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.', '2021-06-05 23:10:57'),
(13, 'Raihan ', 'raihanuddin20@gmail.com', '44', 'No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.\n\n', '2021-06-05 23:10:57'),
(14, 'Rifat', 'r556@gmail.com', 'rrty', 'vvv', '2021-06-05 23:10:57'),
(15, 'Sleep', '01903397422', '44', 'hjk', '2021-06-05 23:10:57'),
(16, 'Rima', 'Rima22@gmail.om', 'Jas', 'xcvbnm,;lytr', '2021-06-05 23:10:57'),
(17, 'Shahrier Aziz Himel', 'hgyftdrs02@gmail.com', 'ere', 'Asskin', '2021-06-05 23:10:57'),
(18, 'Sohan', 'raihanuddin2002@gmail.com', 'Build a website for me ', 'i fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.', '2021-06-05 23:10:57'),
(19, 'Raihan U', 'raihanuddin22@gmail.com', 'ere', '</br>', '2021-06-05 23:10:57'),
(20, 'Sagacity', 'raihanuddin20@gmail.com', 'ere', 'em ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ', '2021-06-05 23:12:21'),
(21, 'Meherima', 'uut32322@gmail.com', 'Build a website for me with ajax', 'Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2021-06-06 04:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(37, 'Song', '                                                My favourite                                                ', '35', '10 Apr,2021', 25, 'download (1).jpg'),
(39, 'JS', '                                                                                                                My favourite    language                                                                                                                                                            ', '42', '10 Apr,2021', 25, '04.03.2021_01.07.52_REC.png'),
(38, 'Fun', '  My favourite                                                                                                                ', '35', '10 Apr,2021', 29, '01.06.2021_19.36.57_REC.png'),
(46, 'Complete Guidline', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown ...', '38', '06 Jun,2021', 25, 'download.png'),
(52, 'React Js', '                                Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                ', '42', '09 Jun,2021', 25, 'images (5).jpg'),
(53, 'Avada', '                                                Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                ', '42', '09 Jun,2021', 25, 'download.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(24, 'Esrat Jahan', 'Rima', 'rima', '514f1b439f404f86f77090fa9edc96ce', 0),
(25, 'Raihan', 'Uddin', 'raihanuddin2002', 'b43129aa90d3ec15bed4225e2102e7b7', 1),
(26, 'Rifat', 'uddin', 'rifatuddin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(29, 'dd', 'dd', 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', 0),
(30, 'sohan', 'N', 'sohan', 'b59c67bf196a4758191e42f76670ceba', 0),
(31, 'Prottoy', 'F', 'prottoy', 'b59c67bf196a4758191e42f76670ceba', 0),
(32, 'Rabbi', 'R', 'rabbi', 'b59c67bf196a4758191e42f76670ceba', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
