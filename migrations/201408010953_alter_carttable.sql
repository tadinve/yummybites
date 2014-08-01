-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2014 at 04:21 AM
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
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `categoryid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `category`, `file`, `price`, `categoryid`) VALUES
(1, 'fruit', 'cd828e5eeff3c5537ccd77b95427d9ec.jpg', 1200, 71),
(2, 'fruit', 'cd828e5eeff3c5537ccd77b95427d9ec.jpg', 1200, 71),
(3, 'fruit', '442ff937ed0ac7239edb56f3f5752c29.jpg', 1200, 73);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'reethu', 'reethima@hotmail.com', 'dgfhjgjhlkjl');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `width` int(50) NOT NULL,
  `height` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `file`, `width`, `height`, `type`, `size`, `date`) VALUES
(2, '9.jpg', 'e51e26b57d931afc759a9d49362fa9f6.jpg', 692, 564, 'jpeg', 107, '0000-00-00'),
(3, '1.jpg', 'fd1d873c5ddf68c3badcdce4b60a26e9.jpg', 593, 504, 'jpeg', 93, '0000-00-00'),
(4, '2.jpg', '68b2c93f2e2ac8ce39e230c18dd1bc00.jpg', 523, 485, 'jpeg', 88, '0000-00-00'),
(5, '4.jpg', '5855cacd948364c256e74625d23cb604.jpg', 544, 513, 'jpeg', 115, '0000-00-00'),
(6, '5.jpg', '7a11720ed8ff0d793e2cf4ba6c544548.jpg', 674, 518, 'jpeg', 121, '0000-00-00'),
(7, '6.jpg', 'b471cc7e476afa42c058ab78656f0f43.jpg', 610, 585, 'jpeg', 113, '0000-00-00'),
(8, '7.jpg', '031da8533fd88642ba6b331f1abddc17.jpg', 595, 608, 'jpeg', 103, '0000-00-00'),
(9, '8.jpg', '7698611ef807f5768f54f8afae37a0d1.jpg', 581, 555, 'jpeg', 97, '0000-00-00'),
(10, '10.jpg', 'de41d2035bbad994ff5f70aae4493b8e.jpg', 512, 511, 'jpeg', 93, '0000-00-00'),
(11, '11.jpg', 'ec42402ad1393ed59bcad75b7a6bb927.jpg', 676, 536, 'jpeg', 105, '0000-00-00'),
(12, '12.jpg', '0487b41e889fa90b05fb74a1b5cca90d.jpg', 762, 571, 'jpeg', 138, '0000-00-00'),
(13, '13.jpg', '587ee5d39310ee2d0ff4b562956792b4.jpg', 660, 547, 'jpeg', 96, '0000-00-00'),
(14, '14.jpg', 'f9f2a0ebf99f5158a2577f188a8b0ae4.jpg', 631, 533, 'jpeg', 99, '0000-00-00'),
(15, '15.jpg', 'ba9ffd697b8f93edb34077bcba68cc49.jpg', 635, 593, 'jpeg', 144, '0000-00-00'),
(16, '16.jpg', '1560dcfb2c278ea645bfbe588583f9c6.jpg', 663, 499, 'jpeg', 94, '0000-00-00'),
(17, '17.jpg', 'c6d13d9fa3ed7d2461922111d02ab90f.jpg', 564, 536, 'jpeg', 111, '0000-00-00'),
(18, '18.jpg', 'ab0f74a5abe23e83711064659064f334.jpg', 508, 499, 'jpeg', 72, '0000-00-00'),
(19, '19.jpg', '6d7b1db3d9d632b4fa3afea24488b0ef.jpg', 715, 563, 'jpeg', 99, '0000-00-00'),
(20, '21.jpg', 'c043b105e7e4f63bd267a2a6b6f88d16.jpg', 653, 579, 'jpeg', 125, '0000-00-00'),
(21, '22.jpg', 'b839f9b6ef9af67bff5990c9a7aeb828.jpg', 698, 542, 'jpeg', 130, '0000-00-00'),
(22, '24.jpg', 'c3a513999fe9eb55cbb99772b0578c8b.jpg', 558, 576, 'jpeg', 110, '0000-00-00'),
(23, '25.jpg', '8934fc2c8d947934c2d852fea94be3a5.jpg', 399, 573, 'jpeg', 69, '0000-00-00'),
(24, '26.jpg', 'e25cfae106cc341188d4bc4e46976fbf.jpg', 660, 552, 'jpeg', 121, '0000-00-00'),
(25, '27.jpg', '67f3e708a80b4f14bd138f1e937142ef.jpg', 473, 518, 'jpeg', 89, '0000-00-00'),
(26, '28.jpg', 'f6be5f84a99191b9df0ca8c670ff401f.jpg', 678, 553, 'jpeg', 117, '0000-00-00'),
(27, '29.jpg', 'a1025cc8c3461b5f9554a15ecf633801.jpg', 401, 496, 'jpeg', 79, '0000-00-00'),
(28, '30.jpg', 'ac0453ba02feabba30f95c2ec9bbc186.jpg', 660, 510, 'jpeg', 104, '0000-00-00'),
(29, '31.jpg', 'e019bcca9153a5a2eba345c35621f30c.jpg', 416, 492, 'jpeg', 74, '0000-00-00'),
(30, '33.jpg', '6137e3319e54020592b6fca4c835e1d0.jpg', 763, 553, 'jpeg', 155, '0000-00-00'),
(31, '34.jpg', 'ad79b81bc8736d088b0e3fd3f0857128.jpg', 614, 461, 'jpeg', 96, '0000-00-00'),
(32, '21505_253192804803270_431107055_n.jpg', 'aebbcd8d0502d7dcff5339b5b298f72f.jpg', 504, 360, 'jpeg', 23, '0000-00-00'),
(33, '53977_250922851696932_333423833_o.jpg', 'd8451c811e0a86a3aa8ff1daabedd0dd.jpg', 1200, 1600, 'jpeg', 135, '0000-00-00'),
(34, '56640_250922921696925_1999969063_o.jpg', '3099ae4544763b6ba6ca3a65d133c347.jpg', 1600, 1200, 'jpeg', 302, '0000-00-00'),
(35, '56718_250922778363606_25284151_o.jpg', 'c78f2244b9131d0da4cbaceb12f0d466.jpg', 1200, 1600, 'jpeg', 243, '0000-00-00'),
(36, '175900_250401158415768_729377782_o.jpg', '77282af556d94568fe7721d6ab9aa7b0.jpg', 1200, 1600, 'jpeg', 146, '0000-00-00'),
(37, '34.jpg', 'c9590ae8973124656f6c070f4f855bb2.jpg', 300, 300, 'jpeg', 23, '0000-00-00'),
(38, '35.jpg', 'f99bdd3c797f1c36bf37ed2b9671dde2.jpg', 480, 385, 'jpeg', 37, '0000-00-00'),
(39, '36.jpg', '95b013c8023986902fe8c320f7e18d2f.jpg', 600, 800, 'jpeg', 52, '0000-00-00'),
(40, '37.jpg', '0496ecf12945679a503b0eac1bd74161.jpg', 1200, 1600, 'jpeg', 146, '0000-00-00'),
(41, '38.jpg', 'd0542ef69a508716620694e4894927f6.jpg', 1200, 1600, 'jpeg', 135, '0000-00-00'),
(42, '39.jpg', '34248b4b9afd24a91a6570732ee2a62f.jpg', 1200, 1600, 'jpeg', 238, '0000-00-00'),
(43, '40.jpg', '87de9a4e283243f4470d1dbda1d09b93.jpg', 1600, 1200, 'jpeg', 124, '0000-00-00'),
(44, '41.jpg', '680fa23cfdd59dc829e4b4f949e7741b.jpg', 802, 1024, 'jpeg', 74, '0000-00-00'),
(45, '42.jpg', 'ed165f282e9e64385dad1e5f30257b86.jpg', 1600, 1200, 'jpeg', 224, '0000-00-00'),
(46, '43.jpg', '3b5241c8544784b73df2ffe896821969.jpg', 1600, 1200, 'jpeg', 163, '0000-00-00'),
(47, '44.jpg', 'c09bdb6efed7c956d044af10f6dc0040.jpg', 960, 1280, 'jpeg', 106, '0000-00-00'),
(48, '45.jpg', '7878183826ea3c18167752ef4ca40f15.jpg', 1200, 1600, 'jpeg', 231, '0000-00-00'),
(49, '47.jpg', 'a3e6711b6ce4aa1e54eba8b2b1e088ee.jpg', 1600, 1200, 'jpeg', 237, '0000-00-00'),
(50, '48.jpg', '77164195682416016d28241439fa9b16.jpg', 723, 928, 'jpeg', 75, '0000-00-00'),
(51, '49.jpg', '972354ee1d63cc7880a8db06216ce219.jpg', 1200, 1600, 'jpeg', 260, '0000-00-00'),
(52, '50.jpg', 'a5991d7f31b910cd47bc291a56fe81fb.jpg', 1200, 1600, 'jpeg', 127, '0000-00-00'),
(53, '51.jpg', '83c8d8638df75e0793e50c920e42a915.jpg', 1200, 1600, 'jpeg', 163, '0000-00-00'),
(54, '52.jpg', '7291b7750467edb8fd2f1e442e7bf310.jpg', 300, 300, 'jpeg', 18, '0000-00-00'),
(55, '53.jpg', 'ea007ea709b9b921f9b3564a3972e508.jpg', 800, 600, 'jpeg', 91, '0000-00-00'),
(56, '54.jpg', 'fa703de4ffd2fce522a77caf94a368bf.jpg', 400, 300, 'jpeg', 29, '0000-00-00'),
(57, '55.jpg', 'c21686b4222c2f1101cedd5f3518b769.jpg', 776, 750, 'jpeg', 66, '0000-00-00'),
(58, '56.jpg', 'c411e4e56d13713b9507aab9c5da088b.jpg', 721, 480, 'jpeg', 57, '0000-00-00'),
(59, '57.jpg', '64a9ea8ee4d19c255a6fc3b788d3734d.jpg', 351, 287, 'jpeg', 21, '0000-00-00'),
(60, '58.jpg', '6ecac11dea65e7c74bddf267ce76e87d.jpg', 400, 320, 'jpeg', 36, '0000-00-00'),
(61, '59.jpg', '948e625dc3a4afb3e4a2a27bbc2c809e.jpg', 1280, 1024, 'jpeg', 126, '0000-00-00'),
(62, '60.jpg', 'dd88cf80188ad72cc108a096969c5ea2.jpg', 266, 189, 'jpeg', 13, '0000-00-00'),
(63, '61.jpg', '64de1347cf11b0e7074d37f1b9ebbd41.jpg', 225, 224, 'jpeg', 11, '0000-00-00'),
(64, '62.jpg', 'c406de9c0be025f00a80bb5536560e41.jpg', 100, 98, 'jpeg', 5, '0000-00-00'),
(65, '63.jpg', '63057c5fa2f79f291f672ac57a47ba73.jpg', 259, 194, 'jpeg', 10, '0000-00-00'),
(66, '64.jpg', 'e452912d5f4877809940e90549c116e6.jpg', 300, 300, 'jpeg', 16, '0000-00-00'),
(67, '65.jpg', 'dba3384eb8de7a49bb0ef905125f8fd9.jpg', 221, 168, 'jpeg', 9, '0000-00-00'),
(68, '66.jpg', 'c93a294098f069703a43ca1ba258f16e.jpg', 300, 300, 'jpeg', 17, '0000-00-00'),
(69, '67.jpg', 'aa5462fa8a23736d5a9d2ee27f27213f.jpg', 300, 300, 'jpeg', 22, '0000-00-00'),
(70, '68.jpg', '2f11c8756f2dae9fb22d44c1b34825f9.jpg', 300, 300, 'jpeg', 20, '0000-00-00'),
(71, '69.jpg', 'fd20b944e08e0c246a69aa297b44d957.jpg', 300, 300, 'jpeg', 20, '0000-00-00'),
(72, '70.jpg', 'cb523383495bf546cf3cb3028d8b2c2e.jpg', 300, 300, 'jpeg', 18, '0000-00-00'),
(73, '71.jpg', 'a4a0bb4a8a1661c583f40567989a92a3.jpg', 300, 300, 'jpeg', 10, '0000-00-00'),
(74, '72.jpg', '21f898c7ab1a1664e468e745e0c0b96c.jpg', 300, 300, 'jpeg', 19, '0000-00-00'),
(75, '73.jpg', 'ccaf155289e5e21a429afb37f7793112.jpg', 288, 300, 'jpeg', 28, '0000-00-00'),
(76, '74.jpg', '9e0eba99f084a2dd3e4b4980e3a368ba.jpg', 300, 300, 'jpeg', 23, '0000-00-00'),
(77, '75.jpg', 'cf520ef3152b2bc368333b746e869fc3.jpg', 300, 300, 'jpeg', 23, '0000-00-00'),
(78, '76.jpg', 'e6ed39899eca1e461db888e3f3003033.jpg', 300, 300, 'jpeg', 28, '0000-00-00'),
(79, '77.jpg', 'f3b3dc8068284ec4bee60013094ae481.jpg', 225, 225, 'jpeg', 7, '0000-00-00'),
(80, '78.jpg', 'c8b2253c65565a2b74fbc5412aeecc9e.jpg', 300, 300, 'jpeg', 23, '0000-00-00'),
(81, '79.jpg', '988dce8b5c7bd90d431bbf6066fcea16.jpg', 300, 300, 'jpeg', 21, '0000-00-00'),
(82, '80.jpg', 'aeffe0f5f9c94cd42a8cffdb2e1add2c.jpg', 300, 300, 'jpeg', 19, '0000-00-00'),
(83, '81.jpg', 'eb5f6f8d8c6196d5889d5a189a8e9182.jpg', 100, 100, 'jpeg', 4, '0000-00-00'),
(84, '82.jpg', 'f2d15ae71f07793816608488862aa3a9.jpg', 259, 194, 'jpeg', 11, '0000-00-00'),
(85, '83.jpg', 'f67502bc406cf535ffcbb4f45a0a7c9e.jpg', 300, 300, 'jpeg', 19, '0000-00-00'),
(86, '84.jpg', 'f15a2745b73e1f4185aeb7c6b5e6d3ba.jpg', 960, 720, 'jpeg', 152, '0000-00-00'),
(87, '85.jpg', 'af7421dfcbf6d386f721efaed861c289.jpg', 259, 194, 'jpeg', 7, '0000-00-00'),
(88, '86.jpg', '84f645d25a9d9925d00e28fb9b317786.jpg', 300, 300, 'jpeg', 25, '0000-00-00'),
(89, '87.jpg', 'c6fe68e2e5cd5651b8e1e268c2f29e33.jpg', 300, 300, 'jpeg', 26, '0000-00-00'),
(90, '88.jpg', '43a87f24431102e8e52f1e534476cafa.jpg', 300, 300, 'jpeg', 26, '0000-00-00'),
(91, '89.jpg', '95b493a5ba19c1db096f82ae62e3574e.jpg', 231, 218, 'jpeg', 12, '0000-00-00'),
(92, '90.jpg', 'f0f34db2dcc333890e87b06a9645b400.jpg', 960, 720, 'jpeg', 45, '0000-00-00'),
(93, '91.jpg', '15c5f5930268053950af87029959046a.jpg', 216, 234, 'jpeg', 13, '0000-00-00'),
(94, '92.jpg', '6077d1be6d28d414f2b534c1b9154fd4.jpg', 275, 183, 'jpeg', 18, '0000-00-00'),
(95, '93.jpg', '81335a25bd1b7c54e3c9f4578e16d7eb.jpg', 204, 247, 'jpeg', 9, '0000-00-00'),
(96, '94.jpg', 'dd8c9d1b3f27d3cf7a645cee2664b8fc.jpg', 100, 100, 'jpeg', 4, '0000-00-00'),
(97, '95.jpg', 'ffa59c9729e8cf45b0a3405886b8e549.jpg', 300, 300, 'jpeg', 25, '0000-00-00'),
(98, '96.jpg', 'e37f64be894aac92cd951a965f2125b6.jpg', 480, 640, 'jpeg', 43, '0000-00-00'),
(99, '97.jpg', '72ceafa1fc89d90d66a3cec233bdb247.jpg', 100, 100, 'jpeg', 5, '0000-00-00'),
(100, '98.jpg', '08ef551c1e9858b78cabf15fe7414517.jpg', 300, 300, 'jpeg', 30, '0000-00-00'),
(101, '99.jpg', '601d669f8deb782d84b31bd92d626c0b.jpg', 246, 205, 'jpeg', 14, '0000-00-00'),
(102, '100.jpg', '6c2b5b59353c7be629766c92d462ca8c.jpg', 800, 532, 'jpeg', 63, '0000-00-00'),
(103, '101.jpg', '6b836731ac4010e07ea29f61d6c1151b.jpg', 1600, 1064, 'jpeg', 174, '0000-00-00'),
(104, '102.jpg', 'def6adab7ec43ae59ca306d7a739386f.jpg', 412, 491, 'jpeg', 60, '0000-00-00'),
(105, '103.jpg', '905118cc0a324422b8d61f51a8e47d69.jpg', 600, 413, 'jpeg', 30, '0000-00-00'),
(106, '104.jpg', 'baf20ad2844876816611485d4fda4790.jpg', 480, 640, 'jpeg', 71, '0000-00-00'),
(107, '105.jpg', '753ead2c10c0efd6332e2b4a35cc44ba.jpg', 1600, 1200, 'jpeg', 254, '0000-00-00'),
(108, '106.jpg', '75eb489b5e3c74328c12a9c25263876d.jpg', 1200, 1600, 'jpeg', 243, '0000-00-00'),
(109, '107.jpg', 'e4539d1dce3d440a6f255cf8a38e4df0.jpg', 504, 360, 'jpeg', 23, '0000-00-00');

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
(57, 'flower', '32.jpg', '78261e175e746fa6445105e6cefc1414.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1600, 1200, 'jpeg', 191, '0000-00-00'),
(58, 'flower', '30.jpg', '014d924bdb7b0941430d6db612dfbcb2.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1600, 1200, 'jpeg', 148, '0000-00-00'),
(24, 'cartoon', '40.jpg', '1224f31baf993e707ab4a956e6b63a58.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 124, '0000-00-00'),
(25, 'cartoon', '41.jpg', 'b151d56814c01152c6f30d2896da42f0.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 802, 1024, 'jpeg', 74, '0000-00-00'),
(26, 'cartoon', '42.jpg', 'e10952cf2900647b36f17c81ac4c0ba2.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 224, '0000-00-00'),
(27, 'cartoon', '43.jpg', '6a313dbf662f7859f078cd265af618f2.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1600, 1200, 'jpeg', 163, '0000-00-00'),
(28, 'cartoon', '44.jpg', '356f1015b06969ba74947209aff13552.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 960, 1280, 'jpeg', 106, '0000-00-00'),
(29, 'cartoon', '45.jpg', 'bb02db0cbfd43894c9aabaf9bc697697.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 231, '0000-00-00'),
(30, 'cartoon', '38.jpg', 'bb4f9269be9a5b62b1564f3b84676fdd.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 135, '0000-00-00'),
(31, 'cartoon', '39.jpg', 'cb932f54c23ed5aec455674f1b527975.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Cartoon', 1200, 1600, 'jpeg', 238, '0000-00-00'),
(55, 'flower', '31.jpg', '1d456ca0d6c58d6394da90b5a310813d.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'flower', 1200, 1600, 'jpeg', 231, '0000-00-00'),
(54, 'flower', '31.jpg', '1d456ca0d6c58d6394da90b5a310813d.jpg', '350gm', '350gm', '750', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Flower', 1200, 1600, 'jpeg', 231, '0000-00-00'),
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
(72, 'fruit', '33.jpg', '53fe5bdce8e79603471c3b98c37ea549.jpg', '350gm', '350gm', '1200', '350gm', '1/2tsp', '1/2tsp', '1', '350ml', '350ml', 'Available in all Flavors', 'Fruit', 763, 553, 'jpeg', 155, '0000-00-00'),
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

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `userid`, `password`, `image`) VALUES
(12, 'reethimaveni', 'reethu', 'reethi123', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `fullname`, `email`) VALUES
(1, 'reethi', 'reethima@hotmail.com'),
(2, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `test`
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



INSERT INTO `dbversion` (`id`, `db_version`, `last_update_string`) VALUES (NULL, '1', '201408010953');

