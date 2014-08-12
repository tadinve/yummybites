-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2014 at 10:47 AM
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
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `title`, `file`, `width`, `height`, `type`, `size`, `date`, `description`, `price`) VALUES
(30, 'cf.jpg', '1f763307140ab5ded94e22d193dd04b8.jpg', 473, 518, 'jpeg', 89, 1404985670, 'Cartoon', '350'),
(31, 'ch.jpg', '131662e73adf75e8227787bdc5c0f22e.jpg', 698, 542, 'jpeg', 130, 1404985704, 'chocolate', '350'),
(33, 'ch.jpg', 'b5a3789c3fa04ff8bf0c310c05006d80.jpg', 698, 542, 'jpeg', 130, 1404986500, 'chocolate', '350'),
(34, 'chcccc.jpg', '9239eb319470b83dbbd59d654d87ed99.jpg', 660, 510, 'jpeg', 104, 1404986518, 'chocolate', '350'),
(35, 'cho.jpg', '145dc2a076e7ef268adfae8bc9aff33a.jpg', 660, 552, 'jpeg', 121, 1404986532, 'chocolate', '350'),
(29, 'ccd.jpg', '6be2dea8d26d42b2ca8b26d9ddb2ecae.jpg', 631, 533, 'jpeg', 99, 1404985638, 'Cartoon', '350'),
(28, 'ccc.jpg', 'f5a2dc90d4b271791f8edfb79ea2d734.jpg', 401, 496, 'jpeg', 79, 1404985618, 'Cartoon', '350'),
(27, 'ft.jpg', '7472119dc603d1a690dccf414d2761f5.jpg', 715, 563, 'jpeg', 99, 1404985418, 'Fruit', '350'),
(32, 'chcccc.jpg', '06e73a02b960b42d03a8341514ac2538.jpg', 660, 510, 'jpeg', 104, 1404985775, 'chocolate', '350'),
(26, 'cartoon2.jpg', 'b0b2060cd251a43207fb3d2baaaaddb8.jpg', 663, 499, 'jpeg', 94, 1404985323, 'Cartoon', '350'),
(24, 'car.jpg', 'e3210b214fcfa60131a8ac41c16f749b.jpg', 512, 511, 'jpeg', 93, 1404985262, 'Cartoon', '350'),
(25, 'cartoon.jpg', '163644283925f71d7cead69ee081b766.jpg', 610, 585, 'jpeg', 113, 1404985306, 'Cartoon', '350'),
(36, 'choc.jpg', '14f824039b6e4ce3236c539dd2450b67.jpg', 678, 553, 'jpeg', 117, 1404986549, 'chocolate', '350'),
(37, 'chocc.jpg', '48cea892eb3c4eb06286ea8e0740440c.jpg', 558, 576, 'jpeg', 110, 1404986564, 'chocolate', '350'),
(38, 'chocc.jpg', 'bbec808925234127eaa03af12fa2ae47.jpg', 558, 576, 'jpeg', 110, 1404986579, 'chocolate', '350'),
(39, 'chocolate.jpg', 'd4c2babcd0ef2df617f7eed9811954d0.jpg', 523, 485, 'jpeg', 88, 1404986595, 'chocolate', '350'),
(40, 'css.jpg', '468a6b4ccb832d0ced79d34b6dbf977d.jpg', 666, 591, 'jpeg', 98, 1404986619, 'Cartoon', '350'),
(41, 'cv.jpg', '6182910fd3505eb0fe0e10f83e527269.jpg', 660, 552, 'jpeg', 121, 1404986638, 'chocolate', '350'),
(42, 'edi.jpg', '229eae18993987896d859182e1afa687.jpg', 653, 579, 'jpeg', 125, 1404986688, 'Edible Cake', '350'),
(43, 'edible.jpg', 'b5e2edf01af1b2b62f8fcd5f4b6a750e.jpg', 762, 571, 'jpeg', 138, 1404986705, 'Edible Cake', '350'),
(44, 'engagement.jpg', 'bbcf5f39dddb4a529353898348843ade.jpg', 544, 513, 'jpeg', 115, 1404986728, 'Engagement Cake', '350'),
(45, 'fd.jpg', 'bde2fa6022bb429887f94d4df148ae6a.jpg', 581, 555, 'jpeg', 97, 1404986745, 'Fruit', '350'),
(46, 'ff.jpg', 'abdf4070e88505dbce04ce882b812f02.jpg', 614, 461, 'jpeg', 96, 1404986791, 'Fruit', '350'),
(47, 'fff.jpg', '97280bfb02f7115390b8551171b7164f.jpg', 564, 536, 'jpeg', 111, 1404986809, 'Fruit', '350'),
(48, 'fff.jpg', '4026e5e9d1f49efc767134c862522d15.jpg', 564, 536, 'jpeg', 111, 1404986825, 'Fruit', '350'),
(49, 'fg.jpg', '4e2bf9e97442b3e1a8a72009adebc13e.jpg', 660, 547, 'jpeg', 96, 1404986845, 'Fruit', '350'),
(50, 'fruit6.jpg', '00a75e2f7ce51a97d4cce58e1b940c34.jpg', 595, 608, 'jpeg', 103, 1404986867, 'Fruit', '350'),
(51, 'fruit1.jpg', '7326a1022afc4190bfdcd80c362517ee.jpg', 473, 518, 'jpeg', 89, 1404986888, 'Fruit', '350'),
(52, 'fruit2.jpg', 'e4fd51362d1c10c3b8b3ce9e883592cf.jpg', 946, 544, 'jpeg', 174, 1404986908, 'Fruit', '350'),
(53, 'fruit6.jpg', '4a36f9c944401c079078934b28bd9aef.jpg', 595, 608, 'jpeg', 103, 1404986931, 'Fruit', '350'),
(54, 'cv.jpg', '24547155e891c079eab7043e96ec7f55.jpg', 660, 552, 'jpeg', 121, 1405573583, 'chocolate', '350'),
(55, 'choc.jpg', '53195cafe1aa385acd45f27601d2fe56.jpg', 678, 553, 'jpeg', 117, 1405662077, 'chocolate', '350'),
(56, 'choc.jpg', '1b4dd512b5488a0d2b43dbab0bc39b85.jpg', 678, 553, 'jpeg', 117, 1405662758, 'chocolate', '350'),
(57, 'ff.jpg', '55283c47fa72f566ade371a5048b9b77.jpg', 614, 461, 'jpeg', 96, 1405663781, 'Fruit', '350'),
(58, 'ff.jpg', '9cfa3a19d6b0325bae4581dace41c2cc.jpg', 614, 461, 'jpeg', 96, 1405663809, 'Fruit', '350'),
(59, 'ff.jpg', '495be28912815bf39f045ec94eb6eefd.jpg', 614, 461, 'jpeg', 96, 1405664689, 'Fruit', '350'),
(60, 'ff.jpg', '87e6c56eef346634b68e34acc25ba7d5.jpg', 614, 461, 'jpeg', 96, 1405664776, 'Fruit', '350'),
(61, 'cartoon2.jpg', '2a7a804af41df66146275618baec53b9.jpg', 663, 499, 'jpeg', 94, 1405664887, 'Cartoon', '350'),
(62, 'cf.jpg', '21fccc93260fc1157cf5d643274383e7.jpg', 473, 518, 'jpeg', 89, 1405676089, '', ''),
(63, 'chcccc.jpg', '6cdd9900616ec32ef6225485131d549d.jpg', 660, 510, 'jpeg', 104, 1405676222, '', ''),
(64, 'cho.jpg', '26d8897ead48a37aa19cefe8954807e5.jpg', 660, 552, 'jpeg', 121, 1405676410, 'chocolate', '350'),
(65, 'ccc.jpg', '6097d5b1fd3e43a7685c40ecc5bef8f4.jpg', 401, 496, 'jpeg', 79, 1405676753, '', ''),
(66, 'ch.jpg', 'f0a97d8177c3618b9eb2de6417b84f9f.jpg', 698, 542, 'jpeg', 130, 1405677025, '', ''),
(67, 'ch.jpg', 'ce415c72ca34317f8f4fe7e43725780c.jpg', 698, 542, 'jpeg', 130, 1405677195, 'chocolate', '350'),
(68, 'fd.jpg', '2c9e7e15c5a4f3ed3d4f2499b5277237.jpg', 581, 555, 'jpeg', 97, 1405677289, 'Fruit', '350'),
(69, 'fd.jpg', '885b59d8b38d3edfa9f8eca81dca2378.jpg', 581, 555, 'jpeg', 97, 1405677703, 'Fruit', '350'),
(70, 'ccd.jpg', 'd4d784840aa08a5c5a09e2bb4a719c90.jpg', 631, 533, 'jpeg', 99, 1405682321, 'Fruit', '350'),
(71, 'chocc.jpg', '2d2fa06c65855ec99e47d6f2a6222059.jpg', 558, 576, 'jpeg', 110, 1405682527, '', '');

INSERT INTO `dbversion` (`id`, `db_version`, `last_update_string`) VALUES (NULL, '1', '201407251720');

