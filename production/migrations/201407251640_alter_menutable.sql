-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2014 at 10:46 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yummybites`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL,
  `cream` varchar(50) NOT NULL,
  `sugar` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `cocoapowder` varchar(30) NOT NULL,
  `bakingpowder` varchar(30) NOT NULL,
  `bicarbonate` varchar(30) NOT NULL,
  `eggs` varchar(20) NOT NULL,
  `milk` varchar(20) NOT NULL,
  `vegoil` varchar(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `width` bigint(111) NOT NULL,
  `height` bigint(111) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` bigint(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `title`, `file`, `cream`, `sugar`, `price`, `cocoapowder`, `bakingpowder`, `bicarbonate`, `eggs`, `milk`, `vegoil`, `description`, `name`, `width`, `height`, `type`, `size`, `date`) VALUES
(1, 'cartoon', '3.jpg', '6ab23d302c49018049b2359833cb8525.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 946, 544, 'jpeg', 174, '0000-00-00'),
(2, 'cartoon', '10.jpg', '115761f8d571eb7ea2bff4fc406c1430.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 512, 511, 'jpeg', 93, '0000-00-00');

INSERT INTO `dbversion` (`id`, `db_version`, `last_update_string`) VALUES (NULL, '1', '201407251640');
