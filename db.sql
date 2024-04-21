-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 04:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgpv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `verified` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `unique_id`, `name`, `mobile`, `email`, `password`, `code`, `verified`, `status`, `img`) VALUES
(32, 364113845, 'shubham@admin', '1234567890', 'adminuser@gmail.com', '$2y$10$.gncxfkCcH0Ff5/tQY6Mm.83AW5mfgTuJPtBnrx1HEAou.2bIT2xu', 0, 'verified', 'online', '364113845shubham@admin364113845shubham@adminshubham photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user` longtext NOT NULL,
  `chatbot` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `unique_id`, `name`, `user`, `chatbot`, `date`) VALUES
(366, 1437320798, 'shubham', 'rwe', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 06:12:51'),
(364, 1437320798, 'shubham', 'yhteht', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:31:48'),
(363, 1437320798, 'shubham', 'rt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:31:47'),
(361, 364113845, 'shubham@admin', 'dfgdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:30:44'),
(362, 1437320798, 'shubham', 'httht', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:31:44'),
(360, 364113845, 'shubham@admin', 'gdfgdfgd', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:30:38'),
(359, 364113845, 'shubham@admin', 'fer', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:30:35'),
(358, 364113845, 'shubham@admin', 'ghjgh', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:28:42'),
(357, 364113845, 'shubham@admin', 'gj', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:28:40'),
(356, 364113845, 'shubham@admin', 'gjghj', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:28:38'),
(355, 364113845, 'shubham@admin', 'guj', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:28:37'),
(354, 364113845, 'shubham@admin', 'tyuyt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 05:28:32'),
(353, 364113845, 'shubham@admin', 'sdfsdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:52:41'),
(352, 364113845, 'shubham@admin', 'sdfsdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:50:49'),
(351, 364113845, 'shubham@admin', 'ffwdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:50:48'),
(350, 364113845, 'shubham@admin', 'sdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:50:46'),
(348, 364113845, 'shubham@admin', 'qtertert', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:47:58'),
(349, 364113845, 'shubham@admin', 'ertret', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:48:00'),
(346, 364113845, 'shubham@admin', 'retyry', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:44:49'),
(347, 364113845, 'shubham@admin', 'weferf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-20 04:47:55'),
(345, 364113845, 'shubham@admin', 'qaza', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:28:58'),
(343, 364113845, 'shubham@admin', 'rewr', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:56'),
(344, 364113845, 'shubham@admin', 'rwer', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:57'),
(341, 364113845, 'shubham@admin', 'erewr', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:54'),
(342, 364113845, 'shubham@admin', 'rwerwe', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:55'),
(340, 364113845, 'shubham@admin', 'rewrw', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:53'),
(338, 364113845, 'shubham@admin', 'rwerw', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:49'),
(339, 364113845, 'shubham@admin', 'werwerwrwer', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:51'),
(336, 364113845, 'shubham@admin', 'erge', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 18:03:46'),
(337, 364113845, 'shubham@admin', 'wdwed', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 19:02:47'),
(334, 364113845, 'shubham@admin', 'ewferferfer', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 18:03:41'),
(335, 364113845, 'shubham@admin', 'erfgerg', 'I am Sorry but I am not exactly clear how to help you', '2022-06-19 18:03:44'),
(303, 1437320798, 'shubham', 'jjkjk', 'I am Sorry but I am not exactly clear how to help you', '2022-06-18 14:16:32'),
(296, 1007610081, 'shubham', 'fdwe', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:05:40'),
(297, 1007610081, 'shubham', 'ert45t5t5t5ttet54e', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:06:16'),
(298, 1403320888, 'shubham', 'grrt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:29:43'),
(299, 1403320888, 'shubham', 'ytt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:29:46'),
(300, 1403320888, 'shubham', 'uyiyiu', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:29:49'),
(301, 312844325, 'shubham', 'fererfter', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 19:52:38'),
(302, 1437320798, 'shubham', 'rtygrt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-18 04:15:25'),
(290, 203393329, 'shubham1', 'dfgdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:00:07'),
(291, 1007610081, 'shubham', 'hellow', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:03:58'),
(292, 1007610081, 'shubham', 'fefer', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:04:20'),
(293, 1007610081, 'shubham', 't45tet', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:04:54'),
(294, 1007610081, 'shubham', 'sdsfdfdffgdf', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:04:58'),
(295, 1007610081, 'shubham', 'dgdfg', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 18:05:00'),
(288, 1506145863, 'testuser1', 'ytyt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 06:30:15'),
(281, 1506145863, 'testuser1', 'fghtfgh', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 06:29:25'),
(279, 859333508, 'testuser2', 'tyhtyh', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 04:56:15'),
(277, 859333508, 'testuser2', 'rtgrtghrth', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 04:56:11'),
(276, 859333508, 'testuser2', 'ferferfgerfg', 'I am Sorry but I am not exactly clear how to help you', '2022-06-17 04:56:09'),
(275, 1506145863, 'testuser1', '5th sem subject', '<style>\r\ntable, th, td {\r\n  border: 2px solid black;\r\n  border-collapse: collapse;\r\n}\r\nth, td {\r\n  padding: 5px;\r\n  text-align: left;    \r\n}\r\n</style>\r\n</head>\r\n<h1>5th sem subject</h1>\r\n<body>\r\n<table>\r\n<tr>\r\n<th>s.no</th><th>Subject name</th><th>Subject Code</th><th>paper Code</th></tr>\r\n<tr><td>1</td><td>Networking With TCP/IP<td>501</td><td>6434</td></td><tr></tr>\r\n<tr><td>2</td><td>Dot Net Technology</td><td>511</td><td>6381</td>\r\n<tr><td>(optional)</td><td>Advanced web Technology</td><td>512</td><td>6383</td></tr></tr>\r\n<tr><td>3</td><td>Wireless Communication and Mobile Computing</td><td>503</td><td>6378</td></tr>\r\n<tr><td>4</td><td>Software Engineering</td><td>504</td><td>6377</td></tr>\r\n<tr><td>5</td><td>Java programming</td><td>502</td><td>6375</td></tr>\r\n</Table>\r\n</body>', '2022-06-17 04:11:08'),
(274, 1506145863, 'testuser1', '5th sem subject', '<style>\r\ntable, th, td {\r\n  border: 2px solid black;\r\n  border-collapse: collapse;\r\n}\r\nth, td {\r\n  padding: 5px;\r\n  text-align: left;    \r\n}\r\n</style>\r\n</head>\r\n<h1>5th sem subject</h1>\r\n<body>\r\n<table>\r\n<tr>\r\n<th>s.no</th><th>Subject name</th><th>Subject Code</th><th>paper Code</th></tr>\r\n<tr><td>1</td><td>Networking With TCP/IP<td>501</td><td>6434</td></td><tr></tr>\r\n<tr><td>2</td><td>Dot Net Technology</td><td>511</td><td>6381</td>\r\n<tr><td>(optional)</td><td>Advanced web Technology</td><td>512</td><td>6383</td></tr></tr>\r\n<tr><td>3</td><td>Wireless Communication and Mobile Computing</td><td>503</td><td>6378</td></tr>\r\n<tr><td>4</td><td>Software Engineering</td><td>504</td><td>6377</td></tr>\r\n<tr><td>5</td><td>Java programming</td><td>502</td><td>6375</td></tr>\r\n</Table>\r\n</body>', '2022-06-17 04:11:08'),
(273, 1506145863, 'testuser1', 'shubham verma', '<img src=\"photo/shubham.jpeg\" width=\"500\" height=100\">\r\n<h3 Style=\"Color:orange\"><i><b>Shubham Verma</b></i></h3>', '2022-06-17 04:10:12'),
(272, 1506145863, 'testuser1', 'hello', 'Hello hii how are you, I am DOIT Enquiry Chatbot, I can help you', '2022-06-17 04:10:03'),
(271, 1506145863, 'testuser1', 'hello', 'hii hello \r\nhow are You .\r\n\r\nMy name is DOIT Enquiry System', '2022-06-17 04:10:03'),
(270, 203393329, 'shubham1', 'uiy', 'I am Sorry but I am not exactly clear how to help you', '2022-06-16 19:23:24'),
(268, 203393329, 'shubham1', 'yutyu', 'I am Sorry but I am not exactly clear how to help you', '2022-06-16 19:23:20'),
(269, 203393329, 'shubham1', 'y', 'I am Sorry but I am not exactly clear how to help you', '2022-06-16 19:23:22'),
(267, 203393329, 'shubham1', 'yt', 'I am Sorry but I am not exactly clear how to help you', '2022-06-16 19:23:18'),
(266, 203393329, 'shubham1', 'helloe', 'I am Sorry but I am not exactly clear how to help you', '2022-06-16 19:23:16'),
(264, 904326962, 'shubham', 'fgh', 'I am Sorry but I am not exactly clear how to help you', '2022-06-16 18:47:10'),
(265, 203393329, 'shubham1', 'shubham verma', '<img src=\"photo/shubham.jpeg\" width=\"500\" height=100\">\r\n<h3 Style=\"Color:orange\"><i><b>Shubham Verma</b></i></h3>', '2022-06-16 19:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1637760271, 681438710, 'hellow '),
(2, 1637760271, 681438710, 'jkjsdjsds'),
(3, 1637760271, 681438710, 'sd'),
(4, 1637760271, 681438710, 'sdfds'),
(5, 1637760271, 681438710, 'sd'),
(6, 1637760271, 681438710, 'sd'),
(7, 1637760271, 681438710, 'd'),
(8, 1637760271, 681438710, 'sd'),
(9, 1637760271, 681438710, 'sd'),
(10, 1637760271, 681438710, 'sd'),
(11, 1637760271, 681438710, 'sd'),
(12, 1637760271, 681438710, 'd'),
(13, 1637760271, 681438710, 'sd'),
(14, 1637760271, 681438710, 'sd'),
(15, 1637760271, 681438710, 'sd'),
(16, 1637760271, 681438710, 'sd'),
(17, 681438710, 1637760271, 'jhdjks'),
(18, 681438710, 1637760271, 'df'),
(19, 681438710, 1637760271, 'df'),
(20, 681438710, 1637760271, 'df'),
(21, 681438710, 1637760271, 'dff'),
(22, 681438710, 1637760271, 'df'),
(23, 681438710, 1637760271, 'df'),
(24, 681438710, 1637760271, 'fdf'),
(25, 681438710, 1637760271, 'df'),
(26, 681438710, 1637760271, 'g'),
(27, 681438710, 1637760271, 'dfg'),
(28, 681438710, 1637760271, 'df'),
(29, 681438710, 1637760271, 'zxczx'),
(30, 681438710, 1637760271, 'adadsd'),
(31, 681438710, 1637760271, 'fsdf'),
(32, 681438710, 1637760271, 'sdfsdf'),
(33, 681438710, 1637760271, 'fsaer'),
(34, 681438710, 1637760271, 'gfggf'),
(35, 681438710, 1637760271, 'ggfyh'),
(36, 681438710, 1637760271, 'h'),
(37, 681438710, 1637760271, 'dfvfd'),
(38, 681438710, 1637760271, 'dvv'),
(39, 681438710, 1637760271, 'fgnrfgh'),
(40, 681438710, 1637760271, 'fhfgh'),
(41, 681438710, 1637760271, 'ergre'),
(42, 681438710, 1637760271, 'grtg'),
(43, 681438710, 1637760271, 'ythyt'),
(44, 681438710, 1637760271, 'tyhyth'),
(45, 681438710, 1637760271, 'ytjh'),
(46, 681438710, 1637760271, 'jyuj'),
(47, 681438710, 1637760271, 'yujuyj'),
(48, 859333508, 1403320888, 'fdfd'),
(49, 859333508, 1403320888, 'dfgdrg'),
(50, 859333508, 1403320888, 'gdrgrg'),
(51, 1506145863, 1403320888, 'ghhghgjh'),
(52, 1506145863, 1403320888, 'htrghtr'),
(53, 1506145863, 1403320888, 'htyhtyhtyht'),
(54, 1506145863, 1403320888, 'htyhth'),
(55, 1506145863, 1403320888, 'tht'),
(56, 1403320888, 1506145863, 'fdeferf'),
(57, 1403320888, 1506145863, 'frefgre'),
(58, 1403320888, 1506145863, 'fdgfd'),
(59, 1403320888, 1506145863, 'g'),
(60, 1403320888, 1506145863, 'gdf'),
(61, 1403320888, 1506145863, 'fgf'),
(62, 1403320888, 1506145863, 'dfg'),
(63, 1403320888, 1506145863, 'dfg'),
(64, 1403320888, 1506145863, 'df'),
(65, 1403320888, 1506145863, 'df'),
(66, 1403320888, 1506145863, 'dfger'),
(67, 1403320888, 1506145863, 'erfg'),
(68, 1403320888, 1506145863, 'dfg'),
(69, 1403320888, 1506145863, 'dfgfd'),
(70, 1403320888, 1506145863, 'g'),
(71, 1403320888, 1506145863, 'dfgfd'),
(72, 1403320888, 1506145863, 'dfg'),
(73, 1403320888, 1506145863, 'fdgf'),
(74, 1403320888, 1506145863, 'gdfg'),
(75, 1403320888, 1506145863, 'dfg'),
(76, 1403320888, 1506145863, 'gfdg'),
(77, 1403320888, 1506145863, 'fdgfd'),
(78, 1403320888, 1506145863, 'gfd'),
(79, 1403320888, 1506145863, 'gfdg'),
(80, 1403320888, 1506145863, 'dgfdgfdgfdg'),
(81, 1403320888, 1506145863, 'dgfd'),
(82, 1403320888, 1506145863, 'gfdg'),
(83, 1403320888, 601795669, 'referf'),
(84, 601795669, 1403320888, 'dgdrg'),
(85, 601795669, 1403320888, 'gdfg'),
(86, 601795669, 1403320888, 'd'),
(87, 601795669, 1403320888, 'f'),
(88, 601795669, 312844325, 'dfdsfc'),
(89, 601795669, 312844325, 'dsfsd'),
(90, 859333508, 312844325, 'hello'),
(91, 601795669, 1437320798, 'ewfre'),
(92, 601795669, 1437320798, 'erter'),
(93, 601795669, 1437320798, 'erter'),
(94, 1506145863, 1437320798, 'fgdg'),
(95, 601795669, 1437320798, 'dadad'),
(96, 601795669, 1437320798, 'dada'),
(97, 601795669, 1437320798, 'ad'),
(98, 601795669, 1437320798, 'das'),
(99, 601795669, 1437320798, 'asdasdas'),
(100, 601795669, 1437320798, 'sad'),
(101, 601795669, 1437320798, 'ads'),
(102, 601795669, 1437320798, 'sadsa'),
(103, 601795669, 1437320798, 'dsad'),
(104, 601795669, 1437320798, 'asd'),
(105, 601795669, 1437320798, 'dsa'),
(106, 601795669, 1437320798, 'sad'),
(107, 601795669, 1437320798, 'dsa'),
(108, 601795669, 1437320798, 'sad'),
(109, 601795669, 1437320798, 'sadsa'),
(110, 601795669, 1437320798, 'dsa'),
(111, 601795669, 1437320798, 'sad'),
(112, 601795669, 1437320798, 'dsa'),
(113, 601795669, 1437320798, 'das'),
(114, 1437320798, 1506145863, 'ewdfwefewf'),
(115, 1437320798, 1506145863, 'erfrefe'),
(116, 1437320798, 1506145863, 'errfe'),
(117, 1437320798, 1506145863, 'erewr'),
(118, 859333508, 1437320798, 'fcsdfs'),
(119, 859333508, 1437320798, 'fsdfsdf'),
(120, 1506145863, 1437320798, 'adssadsada'),
(121, 1506145863, 1437320798, 'sadsadsa'),
(122, 1506145863, 1437320798, 'dsadsa'),
(123, 1506145863, 1437320798, 'dsadsad'),
(124, 1506145863, 1437320798, 'adad'),
(125, 1506145863, 1437320798, 'dsa'),
(126, 1506145863, 1437320798, 'dsadsasadsa'),
(127, 1506145863, 1437320798, 'sad'),
(128, 1506145863, 1437320798, 'sad'),
(129, 1506145863, 1437320798, 'sadsasad'),
(130, 1506145863, 1437320798, 'sad'),
(131, 1506145863, 1437320798, 'sadsa'),
(132, 1506145863, 1437320798, 'sad'),
(133, 1506145863, 1437320798, 'd'),
(134, 1506145863, 1437320798, 'sadsa'),
(135, 601795669, 1437320798, 'grtffd'),
(136, 601795669, 1437320798, 'fghffgh'),
(137, 601795669, 1437320798, 'fgh'),
(138, 601795669, 1437320798, 'fghgf'),
(139, 601795669, 1437320798, 'fghfg'),
(140, 601795669, 1437320798, 'hfgh'),
(141, 601795669, 1437320798, 'gfhgf'),
(142, 601795669, 1437320798, 'hgfh'),
(143, 601795669, 1437320798, 'fghgf'),
(144, 601795669, 1437320798, 'gfh'),
(145, 601795669, 1437320798, 'gfhgfhgf'),
(146, 601795669, 1437320798, 'fgh'),
(147, 601795669, 1506145863, 'yhty'),
(148, 601795669, 1506145863, 'tyutut'),
(149, 601795669, 1506145863, 'tyutyu'),
(150, 601795669, 1506145863, 'tutyut'),
(151, 601795669, 1437320798, 'ewfwef'),
(152, 601795669, 1437320798, 'wew'),
(153, 601795669, 1437320798, 'dfsgdf'),
(154, 601795669, 1437320798, 'fg'),
(155, 601795669, 1437320798, 'dfg'),
(156, 1437320798, 364113845, 'aaedwedrew'),
(157, 1437320798, 364113845, 'ewrewr'),
(158, 1437320798, 364113845, 'wrewer'),
(159, 1437320798, 364113845, 'werwe'),
(160, 1437320798, 364113845, 'werwerwe'),
(161, 364113845, 859333508, 'rtgbrtgf'),
(162, 364113845, 859333508, 'hfghf'),
(163, 364113845, 859333508, 'hfghfg'),
(164, 144262, 1437320798, 'fgergrd'),
(165, 144262, 1437320798, 'ghrftghf'),
(166, 144262, 1437320798, 'hfgh'),
(167, 144262, 1437320798, 'gfg'),
(168, 859333508, 1437320798, 'fewrfwe'),
(169, 859333508, 1437320798, 'ewrfew'),
(170, 859333508, 1437320798, 'rtfrerw'),
(171, 859333508, 1437320798, 'fdw'),
(172, 859333508, 1437320798, 'drf'),
(173, 859333508, 1437320798, 'sfdf'),
(174, 859333508, 1437320798, 'df'),
(175, 859333508, 1437320798, 'fd'),
(176, 859333508, 1437320798, 'fdf'),
(177, 859333508, 1437320798, 'dffg'),
(178, 859333508, 1437320798, 'fdgfd'),
(179, 859333508, 1437320798, 'gdf');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` longtext DEFAULT NULL,
  `answer` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`) VALUES
(5, 'ergregregreg', 'tgrgrt'),
(4, 'good evening', 'good evening'),
(6, 'hello', 'hellofjisdiufsdhjhsdfbhhsddfgsdghfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `verified` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `unique_id`, `name`, `mobile`, `email`, `password`, `code`, `verified`, `status`, `img`) VALUES
(30, 1506145863, 'testuser3', '1234567890', 'shubhamverma123465@gmail.com', '$2y$10$pTChUG/JH2IAksweM2yisuDmN2dPpocsC95kspQqfphH2ILQuFZlC', 0, 'verified', 'online', '859333508testuser21506145863testuser1user1.png'),
(31, 859333508, 'testuser2', '1234567890', 'pegac43254@exoacre.com', '$2y$10$tOjmsWqbVZmda5Rp26DS6eBRuANGAbnckV751tKh59g8PvQ5ARbQq', 0, 'verified', 'online', '364113845shubham@admin364113845shubham@adminshubham photo.jpg'),
(32, 364113845, 'shubham@admin', '1234567890', 'adminuser@gmail.com', '$2y$10$zIq.N9J2Uj.3jD1kb/J42eA4Zqex6I.e4DdpZOoFePHJ.4fEf5UUC', 0, 'verified', 'Offline now', '364113845shubham@admin364113845shubham@adminshubham photo.jpg'),
(37, 1437320798, 'shubham123', '9407278487', 'shubham123@gmail.com', '$2y$10$4FtQCMblWqCj4gqU1vWb3uyXoqDa/JLMuMPFCtxoMCQf6UtdwLLUm', 0, 'verified', 'online', '1437320798shubham123364113845shubham@adminshubham1 photo.jpg'),
(47, 144262, 'demo123', '12345678', 'abcd123@gmail.com', '$2y$10$lM6G9IlNJop2qLFsTt42kuECgsAC3A9/aNqPQk5ULkmmuHTufoL1u', 0, 'verified', 'Offline now', '859333508testuser21506145863testuser1user1.png'),
(61, 626050529, 'ghjgh', '9455225512', 'ghjgdhjdgjhgj@ddfdfgfd', '$2y$10$lhU7zLTUtpjuPBM4pVIrBe27507u7D/zNPsGRYmo0I0NaA2S2ytV6', 897628, 'notverified', 'Offline now', 'profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
