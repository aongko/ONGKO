-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2013 at 12:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `documenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `lt_city`
--

CREATE TABLE IF NOT EXISTS `lt_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lt_contact`
--

CREATE TABLE IF NOT EXISTS `lt_contact` (
  `contact_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_type` varchar(50) NOT NULL,
  PRIMARY KEY (`contact_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lt_contact`
--

INSERT INTO `lt_contact` (`contact_type_id`, `contact_type`) VALUES
(1, 'Phone'),
(2, 'Mobile'),
(3, 'Email'),
(4, 'Fax'),
(5, 'Pager'),
(6, 'Chat'),
(7, 'Address');

-- --------------------------------------------------------

--
-- Table structure for table `lt_contact_place`
--

CREATE TABLE IF NOT EXISTS `lt_contact_place` (
  `contact_place_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_place` varchar(50) NOT NULL,
  PRIMARY KEY (`contact_place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lt_contact_place`
--

INSERT INTO `lt_contact_place` (`contact_place_id`, `contact_place`) VALUES
(1, 'HOME'),
(2, 'WORK');

-- --------------------------------------------------------

--
-- Table structure for table `lt_country`
--

CREATE TABLE IF NOT EXISTS `lt_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lt_country`
--

INSERT INTO `lt_country` (`country_id`, `country_name`) VALUES
(1, 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `lt_gender`
--

CREATE TABLE IF NOT EXISTS `lt_gender` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(50) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lt_gender`
--

INSERT INTO `lt_gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `lt_importance`
--

CREATE TABLE IF NOT EXISTS `lt_importance` (
  `importance_level_id` int(11) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  PRIMARY KEY (`importance_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lt_privilege`
--

CREATE TABLE IF NOT EXISTS `lt_privilege` (
  `privilege_id` int(11) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  PRIMARY KEY (`privilege_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lt_religion`
--

CREATE TABLE IF NOT EXISTS `lt_religion` (
  `religion_id` int(11) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(50) NOT NULL,
  PRIMARY KEY (`religion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lt_role`
--

CREATE TABLE IF NOT EXISTS `lt_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`),
  KEY `privilege_id` (`privilege_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lt_stuff_category`
--

CREATE TABLE IF NOT EXISTS `lt_stuff_category` (
  `stuff_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `stuff_category_name` varchar(50) NOT NULL,
  `importance_level_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`stuff_category_id`),
  KEY `importance_level_id` (`importance_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lt_stuff_status`
--

CREATE TABLE IF NOT EXISTS `lt_stuff_status` (
  `stuff_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_status_name` varchar(50) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  PRIMARY KEY (`stuff_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ms_location`
--

CREATE TABLE IF NOT EXISTS `ms_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(50) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ms_profile`
--

CREATE TABLE IF NOT EXISTS `ms_profile` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `date_of_birth` datetime NOT NULL,
  `city_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `religion_id` int(11) NOT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`),
  KEY `city_id` (`city_id`),
  KEY `gender_id` (`gender_id`),
  KEY `religion_id` (`religion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE IF NOT EXISTS `ms_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `profile_id` (`profile_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tr_mapping_contact`
--

CREATE TABLE IF NOT EXISTS `tr_mapping_contact` (
  `profile_id` int(11) NOT NULL,
  `contact_type_id` int(11) NOT NULL,
  `contact_place_id` int(11) NOT NULL,
  `value` varchar(250) NOT NULL,
  PRIMARY KEY (`profile_id`,`contact_type_id`,`contact_place_id`,`value`),
  KEY `contact_type_id` (`contact_type_id`),
  KEY `contact_place_id` (`contact_place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tr_stuff`
--

CREATE TABLE IF NOT EXISTS `tr_stuff` (
  `stuff_id` int(11) NOT NULL AUTO_INCREMENT,
  `stuff_name` varchar(50) NOT NULL,
  `stuff_category_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `stuff_status_id` int(11) NOT NULL,
  PRIMARY KEY (`stuff_id`),
  KEY `stuff_category_id` (`stuff_category_id`),
  KEY `owner_id` (`owner_id`),
  KEY `location_id` (`location_id`),
  KEY `stuff_status_id` (`stuff_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lt_city`
--
ALTER TABLE `lt_city`
  ADD CONSTRAINT `lt_city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `lt_country` (`country_id`) ON UPDATE CASCADE;

--
-- Constraints for table `lt_role`
--
ALTER TABLE `lt_role`
  ADD CONSTRAINT `lt_role_ibfk_1` FOREIGN KEY (`privilege_id`) REFERENCES `lt_privilege` (`privilege_id`) ON UPDATE CASCADE;

--
-- Constraints for table `lt_stuff_category`
--
ALTER TABLE `lt_stuff_category`
  ADD CONSTRAINT `lt_stuff_category_ibfk_1` FOREIGN KEY (`importance_level_id`) REFERENCES `lt_importance` (`importance_level_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ms_location`
--
ALTER TABLE `ms_location`
  ADD CONSTRAINT `ms_location_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `lt_city` (`city_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ms_profile`
--
ALTER TABLE `ms_profile`
  ADD CONSTRAINT `ms_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ms_user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_profile_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `lt_city` (`city_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_profile_ibfk_3` FOREIGN KEY (`gender_id`) REFERENCES `lt_gender` (`gender_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_profile_ibfk_4` FOREIGN KEY (`religion_id`) REFERENCES `lt_religion` (`religion_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD CONSTRAINT `ms_user_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `ms_profile` (`profile_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `lt_role` (`role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tr_mapping_contact`
--
ALTER TABLE `tr_mapping_contact`
  ADD CONSTRAINT `tr_mapping_contact_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `ms_profile` (`profile_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_mapping_contact_ibfk_2` FOREIGN KEY (`contact_type_id`) REFERENCES `lt_contact` (`contact_type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_mapping_contact_ibfk_3` FOREIGN KEY (`contact_place_id`) REFERENCES `lt_contact_place` (`contact_place_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tr_stuff`
--
ALTER TABLE `tr_stuff`
  ADD CONSTRAINT `tr_stuff_ibfk_1` FOREIGN KEY (`stuff_category_id`) REFERENCES `lt_stuff_category` (`stuff_category_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_stuff_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `ms_user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_stuff_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `ms_location` (`location_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_stuff_ibfk_4` FOREIGN KEY (`stuff_status_id`) REFERENCES `lt_stuff_status` (`stuff_status_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
