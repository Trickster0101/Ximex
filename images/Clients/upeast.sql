-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 11:07 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upeast`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_accounts`
--

CREATE TABLE IF NOT EXISTS `employee_accounts` (
  `user_no` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_admin` tinyint(1) NOT NULL,
  `user_post_editor` tinyint(1) NOT NULL,
  `user_web_editor` int(11) NOT NULL,
  `user_manager` tinyint(1) NOT NULL,
  `user_graphic_artist` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_accounts`
--

INSERT INTO `employee_accounts` (`user_no`, `first_name`, `last_name`, `user_name`, `user_password`, `user_email`, `user_admin`, `user_post_editor`, `user_web_editor`, `user_manager`, `user_graphic_artist`, `is_active`) VALUES
(1, 'Renz', 'Santos', 'chsantos', 'Password', 'chsantos@email.com', 1, 0, 0, 0, 0, 1),
(2, 'Angelo', 'Garcia', 'angelo', 'Password', 'angelo@emai.com', 1, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `header_id` int(11) NOT NULL AUTO_INCREMENT,
  `header_title` varchar(50) DEFAULT NULL,
  `header_sub_title` varchar(50) DEFAULT NULL,
  `header_title_font_size` int(11) DEFAULT NULL,
  `header_sub_title_font_size` int(11) DEFAULT NULL,
  `header_title_color` varchar(15) NOT NULL,
  `header_sub_title_color` varchar(15) NOT NULL,
  `is_active` int(11) NOT NULL,
  `default_header` tinyint(1) NOT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`header_id`, `header_title`, `header_sub_title`, `header_title_font_size`, `header_sub_title_font_size`, `header_title_color`, `header_sub_title_color`, `is_active`, `default_header`) VALUES
(1, 'UPEAST Security Agency', 'Where your security is our TOP priority', 50, 20, '#ffffff', '#ffffff', 0, 1),
(16, 'UPEAST Security Agency', 'Where your security is our TOP priority', 50, 20, '#80ff00', '#ffffff', 0, 0),
(17, 'UPEAST Security Agency', 'Where your security is our TOP priority', 50, 20, '#80ff00', '#ff0080', 0, 0),
(18, 'Come at me', 'Where your security is our TOP priority', 100, 20, '#80ff00', '#ff0080', 0, 0),
(19, 'UPEAST Security', 'Where your security is our TOP priority', 50, 20, '#ffffff', '#ffffff', 0, 0),
(20, 'XANTARA', 'Where your security is our TOP priority', 50, 20, '#008000', '#004080', 0, 0),
(21, 'UPEAST Security', 'Where your security is our TOP priority', 50, 20, '#ffffff', '#ffffff', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `header_background`
--

CREATE TABLE IF NOT EXISTS `header_background` (
  `header_background_id` int(11) NOT NULL,
  `header_background_path` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `header_header_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`header_background_id`,`header_header_id`),
  KEY `fk_header_background_header_idx` (`header_header_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header_background`
--

INSERT INTO `header_background` (`header_background_id`, `header_background_path`, `is_active`, `header_header_id`) VALUES
(0, 'Uploads/Header/Header Background/building_parallax6.jpg', 1, 1),
(2, 'Uploads/Header/Header Background/building_parallax3.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `header_logo`
--

CREATE TABLE IF NOT EXISTS `header_logo` (
  `header_logo_id` int(11) NOT NULL,
  `header_logo_path` varchar(100) DEFAULT NULL,
  `logo_size` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `header_header_id` int(11) NOT NULL,
  PRIMARY KEY (`header_logo_id`,`header_header_id`),
  KEY `fk_header_logo_header1_idx` (`header_header_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header_logo`
--

INSERT INTO `header_logo` (`header_logo_id`, `header_logo_path`, `logo_size`, `is_active`, `header_header_id`) VALUES
(1, 'Uploads/Header/Header Logo/UPEAST LOGO vertical copy2.png', 20, 1, 1),
(2, 'Uploads/Header/Header Logo/Chrysanthemum.jpg', 20, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logfiles`
--

CREATE TABLE IF NOT EXISTS `logfiles` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_datetime` datetime NOT NULL,
  `log_name` varchar(100) NOT NULL,
  `log_description` varchar(200) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `mission_id` int(11) NOT NULL AUTO_INCREMENT,
  `mission_path` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`mission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services_pictures`
--

CREATE TABLE IF NOT EXISTS `services_pictures` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `services_path` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE IF NOT EXISTS `vision` (
  `vision_id` int(11) NOT NULL AUTO_INCREMENT,
  `vision_path` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`vision_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `header_background`
--
ALTER TABLE `header_background`
  ADD CONSTRAINT `fk_header_background_header` FOREIGN KEY (`header_header_id`) REFERENCES `header` (`header_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `header_logo`
--
ALTER TABLE `header_logo`
  ADD CONSTRAINT `fk_header_logo_header1` FOREIGN KEY (`header_header_id`) REFERENCES `header` (`header_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
