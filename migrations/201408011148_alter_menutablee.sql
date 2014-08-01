-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2014 at 06:17 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `title`, `file`, `cream`, `sugar`, `price`, `cocoapowder`, `bakingpowder`, `bicarbonate`, `eggs`, `milk`, `vegoil`, `description`, `name`, `width`, `height`, `type`, `size`, `date`) VALUES
(1, 'cartoon', '3.jpg', '6ab23d302c49018049b2359833cb8525.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 946, 544, 'jpeg', 174, '0000-00-00'),
(2, 'cartoon', '10.jpg', '115761f8d571eb7ea2bff4fc406c1430.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 512, 511, 'jpeg', 93, '0000-00-00'),
(4, 'cartoon', '6.jpg', '630bb82138816135c8f451b59982e5d7.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 610, 585, 'jpeg', 113, '0000-00-00'),
(5, 'cartoon', '12.jpg', '7fa92e199b6cb4ff11b67a2259406d0d.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 762, 571, 'jpeg', 138, '0000-00-00'),
(6, 'cartoon', '14.jpg', '341267e2d26f30fc900d4217cb7c449e.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 631, 533, 'jpeg', 99, '0000-00-00'),
(7, 'cartoon', '16.jpg', '188ea4c69353fd0f237f68ea13576ad8.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 663, 499, 'jpeg', 94, '0000-00-00'),
(8, 'cartoon', '18.jpg', '430294355ad86e4418dbf4f2f214fce8.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 508, 499, 'jpeg', 72, '0000-00-00'),
(12, 'cartoon', '29.jpg', 'cdf66629c88202dbf5e730ced4a8e663.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 401, 496, 'jpeg', 79, '0000-00-00'),
(10, 'cartoon', '21.jpg', 'e2d0289b9a73146801ec6da69a4964af.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 653, 579, 'jpeg', 125, '0000-00-00'),
(11, 'cartoon', '25.jpg', '1e9895ecc9cdc184ce7a675f1c89c826.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 399, 573, 'jpeg', 69, '0000-00-00'),
(13, 'cartoon', '31.jpg', 'bad8081b94c483cef11f61cf3c9cbf76.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 416, 492, 'jpeg', 74, '0000-00-00'),
(15, 'cartoon', '32.jpg', 'c43e5ad27b97a5af1ce5fbab23f8173a.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 302, '0000-00-00'),
(16, 'cartoon', '33.jpg', 'ee222a591f80d547993b65c32aab986e.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 316, '0000-00-00'),
(17, 'cartoon', '34.jpg', '9f32a9c0a46b2ea10ad1923f9a84fda5.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 300, 300, 'jpeg', 23, '0000-00-00'),
(18, 'cartoon', '35.jpg', '58b163d36cdaaad6ab990688cb17eae8.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 480, 385, 'jpeg', 37, '0000-00-00'),
(19, 'cartoon', '36.jpg', 'c892830477a7a3dbae0b8b13afc509b5.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 600, 800, 'jpeg', 52, '0000-00-00'),
(20, 'cartoon', '37.jpg', 'd5f11f85bc377e8ac457b7eed177cb66.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 146, '0000-00-00'),
(59, 'flower', '30.jpg', '014d924bdb7b0941430d6db612dfbcb2.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1600, 1200, 'jpeg', 148, '0000-00-00'),
(24, 'cartoon', '40.jpg', '1224f31baf993e707ab4a956e6b63a58.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 124, '0000-00-00'),
(25, 'cartoon', '41.jpg', 'b151d56814c01152c6f30d2896da42f0.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 802, 1024, 'jpeg', 74, '0000-00-00'),
(26, 'cartoon', '42.jpg', 'e10952cf2900647b36f17c81ac4c0ba2.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 224, '0000-00-00'),
(27, 'cartoon', '43.jpg', '6a313dbf662f7859f078cd265af618f2.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 163, '0000-00-00'),
(28, 'cartoon', '44.jpg', '356f1015b06969ba74947209aff13552.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 960, 1280, 'jpeg', 106, '0000-00-00'),
(29, 'cartoon', '45.jpg', 'bb02db0cbfd43894c9aabaf9bc697697.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 231, '0000-00-00'),
(30, 'cartoon', '38.jpg', 'bb4f9269be9a5b62b1564f3b84676fdd.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 135, '0000-00-00'),
(31, 'cartoon', '39.jpg', 'cb932f54c23ed5aec455674f1b527975.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 238, '0000-00-00'),
(55, 'flower', '31.jpg', '1d456ca0d6c58d6394da90b5a310813d.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1200, 1600, 'jpeg', 231, '0000-00-00'),
(53, 'flower', '33.jpg', '5779a59d0532a17a1c4b12a8575e4210.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1280, 960, 'jpeg', 92, '0000-00-00'),
(63, 'edible', '2.jpg', 'ebaf5612eefd0e893487203e0590c880.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Edible', 960, 1280, 'jpeg', 85, '0000-00-00'),
(51, 'flower', '34.jpg', '1d8df883523052da7cb62d7ca029ba6a.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1600, 1200, 'jpeg', 143, '0000-00-00'),
(52, 'flower', '33.jpg', '5779a59d0532a17a1c4b12a8575e4210.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1280, 960, 'jpeg', 92, '0000-00-00'),
(56, 'flower', '32.jpg', '78261e175e746fa6445105e6cefc1414.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1600, 1200, 'jpeg', 191, '0000-00-00'),
(49, 'flower', '35.jpg', 'a1e54d2601881a371a41f38180a7e235.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1600, 1200, 'jpeg', 101, '0000-00-00'),
(47, 'flower', '1149780_374631825992700_1939530930_o.jpg', '10598c9e5b1cb84be6eaf8381614dbdd.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1600, 1200, 'jpeg', 143, '0000-00-00'),
(46, 'flower', '1172350_379139945541888_683986754_o.jpg', '5de624a0331ac861a50f65af95c1503f.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1600, 1200, 'jpeg', 101, '0000-00-00'),
(60, 'flower', '29.jpg', '05ed525c3a808cd9cd0cff16b7f961e1.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1200, 1600, 'jpeg', 226, '0000-00-00'),
(62, 'edible', '2.jpg', 'db7f7011b5f62321abd42264da146fcc.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Edible', 960, 1280, 'jpeg', 85, '0000-00-00'),
(64, 'edible', '1.jpg', '91f7ef10800ddf5540c5087b6a122511.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Edible', 1600, 1200, 'jpeg', 151, '0000-00-00'),
(65, 'engagement', '6.jpg', '2abfc7a0e7135f9d08a60021fc6a1f9b.jpg', '350gm', '350gm', '400', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Engagement', 1600, 1200, 'jpeg', 141, '0000-00-00'),
(66, 'engagement', '5.jpg', '54ba1962ce70c99546dd7abc53dbf4c4.jpg', '350gm', '350gm', '400', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Engagement', 1600, 1200, 'jpeg', 116, '0000-00-00'),
(67, 'engagement', '4.jpg', '3cc243716ae370c3b5a888eaade0203d.jpg', '350gm', '350gm', '400', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Engagement', 350, 350, 'jpeg', 21, '0000-00-00'),
(68, 'engagement', '3.jpg', 'e580169aafb2e4d02d1bc57913cfbd58.jpg', '350gm', '350gm', '400', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Engagement', 350, 350, 'jpeg', 33, '0000-00-00'),
(69, 'engagement', '2.jpg', '16b39bb4cb111cd90292b72a4f981360.jpg', '350gm', '350gm', '400', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Engagement', 350, 350, 'jpeg', 17, '0000-00-00'),
(70, 'engagement', '1.jpg', 'ea28b38f20ec30f685c7c7aeb34382f5.jpg', '350gm', '350gm', '400', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Engagement', 600, 413, 'jpeg', 20, '0000-00-00'),
(71, 'fruit', '34.jpg', 'cd828e5eeff3c5537ccd77b95427d9ec.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 614, 461, 'jpeg', 96, '0000-00-00'),
(73, 'fruit', '33.jpg', '442ff937ed0ac7239edb56f3f5752c29.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 763, 553, 'jpeg', 155, '0000-00-00'),
(74, 'fruit', '27.jpg', 'f4e1a60ef1c58aa66f1ed4c91ebda34b.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 473, 518, 'jpeg', 89, '0000-00-00'),
(75, 'fruit', '19.jpg', 'e646c25d6f9917e3de82becb52b75380.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 715, 563, 'jpeg', 99, '0000-00-00'),
(76, 'fruit', '17.jpg', '7ebbd34ef3073b9d61b2bce705777ba1.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 564, 536, 'jpeg', 111, '0000-00-00'),
(77, 'fruit', '1.jpg', '26524e979cc2c06170eecb9068555281.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 593, 504, 'jpeg', 93, '0000-00-00'),
(78, 'fruit', '2.jpg', '0a84cc675eed742823ef98bd9be71b33.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 86, 78, 'jpeg', 3, '0000-00-00'),
(79, 'fruit', '3.jpg', 'bbb3e709f01ae824d7446e0a2b22891a.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 1024, 768, 'jpeg', 72, '0000-00-00'),
(80, 'fruit', '7.jpg', '941c5ba4d01a75925e2d7d0524371889.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 595, 608, 'jpeg', 103, '0000-00-00'),
(81, 'fruit', '8.jpg', '876751933088d1cb5f801d90ec94d8db.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 581, 555, 'jpeg', 97, '0000-00-00'),
(82, 'fruit', '11.jpg', '9661bc3fd2cbf1e535718388ed3bb5ad.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 676, 536, 'jpeg', 105, '0000-00-00'),
(83, 'fruit', '13.jpg', '1992bd27a25987b1141c1dd4ffcf5497.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 660, 547, 'jpeg', 96, '0000-00-00'),
(84, 'fruit', '15.jpg', 'b9fb19115cd811058243b150c8a0f262.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 635, 593, 'jpeg', 144, '0000-00-00'),
(85, 'fruit', '9.jpg', '09a5061e0de3d8a39890de042ddc39f9.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 692, 564, 'jpeg', 107, '0000-00-00'),
(86, 'fruit', '8.jpg', 'c2da3a7e0d2d83ed01583808e50512bc.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 727, 726, 'jpeg', 59, '0000-00-00'),
(87, 'fruit', '7.jpg', '9e378e4c07be64f5d6bc4078c85c645b.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 350, 350, 'jpeg', 35, '0000-00-00'),
(88, 'fruit', '7.jpg', '1fbc74a9775437fe64ca7180b092b68c.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 350, 350, 'jpeg', 35, '0000-00-00'),
(89, 'fruit', '6.jpg', '576516d57f940617a24cb8118ac7a1e4.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 350, 350, 'jpeg', 27, '0000-00-00'),
(90, 'fruit', '5.jpg', '502164ff9d7a3484198a9c96e882f5b3.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 300, 300, 'jpeg', 17, '0000-00-00'),
(91, 'fruit', '4.jpg', '5f2683ca5f2bea84432276d19168c96a.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 544, 513, 'jpeg', 115, '0000-00-00'),
(92, 'fruit', '3.jpg', '6e6b42dde84f69901f54f228796ab15b.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 350, 350, 'jpeg', 21, '0000-00-00'),
(93, 'fruit', '2.jpg', 'b5d46ecd0d32972cd91d2e592d4d72c5.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 98, 75, 'jpeg', 3, '0000-00-00'),
(94, 'fruit', '1.jpg', '04c86ae1aa066a53a538daa5e4dff94b.jpg', '350gm', '350gm', '350', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Valentine', 960, 720, 'jpeg', 87, '0000-00-00');
