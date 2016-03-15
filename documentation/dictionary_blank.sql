-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2016 at 11:48 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vannakpanha.mao_dictionary`
--
CREATE DATABASE IF NOT EXISTS `vannakpanha.mao_dictionary` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `vannakpanha.mao_dictionary`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keywords`
--

CREATE TABLE IF NOT EXISTS `tbl_keywords` (
  `keywords_id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `keyword_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_desc_en` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword_desc_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword_category` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) DEFAULT '0',
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`keywords_id`),
  KEY `fk_tbl_keywords_tbl_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_full_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `users_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `users_password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `users_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `users_full_name`, `gender`, `users_name`, `users_password`, `deleted`, `users_date`) VALUES
(1, 'Vannakpanha Mao', 1, 'vannakpanha.mao', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2016-02-11 17:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_keywords`
--
ALTER TABLE `tbl_keywords`
  ADD CONSTRAINT `fk_tbl_keywords_tbl_users1` FOREIGN KEY (`users_id`) REFERENCES `tbl_users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
