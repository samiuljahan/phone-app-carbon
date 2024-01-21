-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 05:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_usage`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbon_footprint`
--

CREATE TABLE `carbon_footprint` (
  `id` int(11) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `cd_equivalent_tonn` decimal(12,4) DEFAULT NULL,
  `action_year` text DEFAULT NULL,
  `cd_equivalent_grams` decimal(12,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbon_footprint`
--

INSERT INTO `carbon_footprint` (`id`, `action`, `cd_equivalent_tonn`, `action_year`, `cd_equivalent_grams`) VALUES
(1, '2 minutes', 0.0470, NULL, NULL),
(2, '10 minutes', 0.2350, NULL, NULL),
(3, '15 minutes', 0.3525, NULL, NULL),
(4, '30 minutes', 0.7050, NULL, NULL),
(5, '1 hour', 1.2500, NULL, NULL),
(6, '2 hours', 2.5000, NULL, NULL),
(7, '3 hours', 3.7500, NULL, NULL),
(8, '4 hours', 5.0000, NULL, NULL),
(9, '5 hours', 6.2500, NULL, NULL),
(10, '6 hours', 7.5000, NULL, NULL),
(11, '7 hours', 8.7500, NULL, NULL),
(12, '8 hours', 11.0000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_comparison`
--

CREATE TABLE `car_comparison` (
  `id` int(11) NOT NULL,
  `co2_tonnes` double DEFAULT NULL,
  `car_comparison` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_comparison`
--

INSERT INTO `car_comparison` (`id`, `co2_tonnes`, `car_comparison`) VALUES
(1, 0.5, 'That\'s about the same as taking an average car off the road for 5 weeks'),
(2, 1, 'That\'s about the same as taking an average car off the road for two-and-a-half months'),
(3, 1.5, 'That\'s about the same as taking an average car off the road for about four months'),
(4, 2, 'That\'s about the same as taking an average car off the road for almost six months'),
(5, 2.5, 'That\'s about the same as taking an average car off the road for just over six months'),
(6, 3, 'That\'s about the same as taking an average car off the road for eight months'),
(7, 3.5, 'That\'s about the same as taking an average car off the road for nine months'),
(8, 4, 'That\'s about the same as taking an average car off the road for almost 11 months'),
(9, 4.5, 'That\'s about the same as taking an average car off the road for a whole year'),
(10, 5, 'That\'s about the same as taking an average car off the road for a year and one month'),
(11, 5.5, 'That\'s about the same as taking an average car off the road for almost a year and a quarter'),
(12, 6, 'That\'s about the same as taking an average car off the road for a year and four months'),
(13, 6.5, 'That\'s about the same as taking an average car off the road for a year and five months'),
(14, 7, 'That\'s about the same as taking an average car off the road for a year and a half'),
(15, 7.5, 'That\'s about the same as taking an average car off the road for a year and seven months'),
(16, 8, 'That\'s about the same as taking an average car off the road for almost 22 months'),
(17, 8.5, 'That\'s about the same as taking an average car off the road for about 23 months'),
(18, 9, 'That\'s about the same as taking two average cars off the road for a year'),
(19, 9.5, 'That\'s about the same as taking two average cars off the road for a year and one month'),
(20, 10, 'That\'s about the same as taking two average cars off the road for a year and a month'),
(21, 11, 'That\'s about the same as taking two average cars off the road for over 13 months'),
(22, 12, 'That\'s about the same as taking two average cars off the road for just over a year and four months'),
(23, 13, 'That\'s about the same as taking two average cars off the road for a year and five months'),
(24, 14, 'That\'s about the same as taking two average cars off the road for about 18 months'),
(25, 15, 'That\'s about the same as taking three average cars off the road for a year and a month'),
(26, 16, 'That\'s about the same as taking three average cars off the road for a year and two months'),
(27, 17, 'That\'s about the same as taking three average cars off the road for a year and a quarter'),
(28, 18, 'That\'s about the same as taking four average cars off the road for a year'),
(29, 19, 'That\'s about the same as taking four average cars off the road for just over a year'),
(30, 20, 'That\'s about the same as taking four average cars off the road for a year and six weeks'),
(31, 25, 'That\'s about the same as taking five average cars off the road for just over 13 months'),
(32, 30, 'That\'s about the same as taking six average cars off the road for 13 months'),
(33, 35, 'That\'s about the same as taking seven average cars off the road for almost a year'),
(34, 40, 'That\'s about the same as taking nine average cars off the road for a year'),
(35, 45, 'That\'s about the same as taking 10 average cars off the road for a year'),
(36, 50, 'That\'s about the same as taking 11 average cars off the road for a year'),
(37, 55, 'That\'s about the same as taking 12 average cars off the road for a year'),
(38, 60, 'That\'s about the same as taking 13 average cars off the road for a year'),
(39, 65, 'That\'s about the same as taking 14 average cars off the road for just over a year'),
(40, 70, 'That\'s about the same as taking 15 average cars off the road for just over a year'),
(41, 75, 'That\'s about the same as taking 17 average cars off the road for a year'),
(42, 80, 'That\'s about the same as taking 18 average cars off the road for a year'),
(43, 85, 'That\'s about the same as taking 19 average cars off the road for a year'),
(44, 90, 'That\'s about the same as taking 20 average cars off the road for a year'),
(45, 95, 'That\'s about the same as taking 21 average cars off the road for a year'),
(46, 100, 'That\'s about the same as taking 22 average cars off the road for a year'),
(47, 110, 'That\'s about the same as taking 24 average cars off the road for a year'),
(48, 120, 'That\'s about the same as taking 26 average cars off the road for a year'),
(49, 130, 'That\'s about the same as taking 29 average cars off the road for a year'),
(50, 140, 'That\'s about the same as taking 31 average cars off the road for a year'),
(51, 150, 'That\'s about the same as taking 33 average cars off the road for a year'),
(52, 160, 'That\'s about the same as taking 35 average cars off the road for just over a year'),
(53, 170, 'That\'s about the same as taking 38 average cars off the road for a year'),
(54, 180, 'That\'s about the same as taking 40 average cars off the road for a year'),
(55, 190, 'That\'s about the same as taking 42 average cars off the road for a year'),
(56, 200, 'That\'s about the same as taking 45 average cars off the road for a year'),
(57, 250, 'That\'s about the same as taking 55 average cars off the road for a year'),
(58, 300, 'That\'s about the same as taking 70 average cars off the road for a year'),
(59, 350, 'That\'s about the same as taking 80 average cars off the road for a year'),
(60, 400, 'That\'s about the same as taking 90 average cars off the road for a year'),
(61, 450, 'That\'s about the same as taking 100 average cars off the road for a year'),
(62, 500, 'That\'s about the same as taking 110 average cars off the road for a year'),
(63, 550, 'That\'s about the same as taking 120 average cars off the road for a year'),
(64, 600, 'That\'s about the same as taking 130 average cars off the road for a year'),
(65, 650, 'That\'s about the same as taking 150 average cars off the road for a year'),
(66, 700, 'That\'s about the same as taking 160 average cars off the road for a year'),
(67, 750, 'That\'s about the same as taking 170 average cars off the road for a year'),
(68, 800, 'That\'s about the same as taking 180 average cars off the road for a year'),
(69, 850, 'That\'s about the same as taking 190 average cars off the road for a year'),
(70, 900, 'That\'s about the same as taking 200 average cars off the road for a year'),
(71, 950, 'That\'s about the same as taking 210 average cars off the road for a year'),
(72, 1000, 'That\'s about the same as taking 220 average cars off the road for a year'),
(73, 2000, 'That\'s about the same as taking 450 average cars off the road for a year'),
(74, 3000, 'That\'s about the same as taking 670 average cars off the road for a year'),
(75, 4000, 'That\'s about the same as taking 890 average cars off the road for a year'),
(76, 5000, 'That\'s about the same as taking 1,100 average cars off the road for a year'),
(77, 6000, 'That\'s about the same as taking 1,300 average cars off the road for a year'),
(78, 7000, 'That\'s about the same as taking 1,600 average cars off the road for a year'),
(79, 8000, 'That\'s about the same as taking 1,800 average cars off the road for a year'),
(80, 9000, 'That\'s about the same as taking 2,000 average cars off the road for a year'),
(81, 10000, 'That\'s about the same as taking 2,200 average cars off the road for a year'),
(82, 15000, 'That\'s about the same as taking 3,300 average cars off the road for a year'),
(83, 20000, 'That\'s about the same as taking 4,500 average cars off the road for a year'),
(84, 25000, 'That\'s about the same as taking 5,500 average cars off the road for a year'),
(85, 30000, 'That\'s about the same as taking 6,700 average cars off the road for a year'),
(86, 35000, 'That\'s about the same as taking 7,800 average cars off the road for a year'),
(87, 40000, 'That\'s about the same as taking 8,900 average cars off the road for a year'),
(88, 45000, 'That\'s about the same as taking 10,000 average cars off the road for a year'),
(89, 50000, 'That\'s about the same as taking 11,000 average cars off the road for a year'),
(90, 55000, 'That\'s about the same as taking 12,000 average cars off the road for a year'),
(91, 60000, 'That\'s about the same as taking 13,300 average cars off the road for a year'),
(92, 65000, 'That\'s about the same as taking 14,500 average cars off the road for a year'),
(93, 70000, 'That\'s about the same as taking 15,600 average cars off the road for a year'),
(94, 75000, 'That\'s about the same as taking 16,700 average cars off the road for a year'),
(95, 80000, 'That\'s about the same as taking 17,800 average cars off the road for a year'),
(96, 85000, 'That\'s about the same as taking 18,900 average cars off the road for a year'),
(97, 90000, 'That\'s about the same as taking 20,000 average cars off the road for a year'),
(98, 95000, 'That\'s about the same as taking 21,000 average cars off the road for a year'),
(99, 100000, 'That\'s about the same as taking 22,000 average cars off the road for a year'),
(100, 150000, 'That\'s about the same as taking 33,000 average cars off the road for a year'),
(101, 200000, 'That\'s about the same as taking 44,000 average cars off the road for a year'),
(102, 250000, 'That\'s about the same as taking 55,000 average cars off the road for a year'),
(103, 300000, 'That\'s about the same as taking 66,000 average cars off the road for a year'),
(104, 350000, 'That\'s about the same as taking 78,000 average cars off the road for a year'),
(105, 400000, 'That\'s about the same as taking 89,000 average cars off the road for a year'),
(106, 450000, 'That\'s about the same as taking 100,000 average cars off the road for a year'),
(107, 500000, 'That\'s about the same as taking 111,000 average cars off the road for a year'),
(108, 550000, 'That\'s about the same as taking 122,000 average cars off the road for a year'),
(109, 600000, 'That\'s about the same as taking 133,000 average cars off the road for a year'),
(110, 650000, 'That\'s about the same as taking 145,000 average cars off the road for a year'),
(111, 700000, 'That\'s about the same as taking 155,000 average cars off the road for a year'),
(112, 750000, 'That\'s about the same as taking 167,000 average cars off the road for a year'),
(113, 800000, 'That\'s about the same as taking 178,000 average cars off the road for a year'),
(114, 850000, 'That\'s about the same as taking 189,000 average cars off the road for a year'),
(115, 900000, 'That\'s about the same as taking 200,000 average cars off the road for a year'),
(116, 950000, 'That\'s about the same as taking 211,000 average cars off the road for a year'),
(117, 1000000, 'That\'s about the same as taking 222,000 average cars off the road for a year');

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

CREATE TABLE `demographics` (
  `id` int(11) NOT NULL,
  `local_authority` varchar(255) DEFAULT NULL,
  `ward_name` varchar(255) DEFAULT NULL,
  `secondary_school_age_11_16yrs` int(11) DEFAULT NULL,
  `further_education_17_18yrs` int(11) DEFAULT NULL,
  `higher_education_19_22yrs` int(11) DEFAULT NULL,
  `postgraduate_30yrs` int(11) DEFAULT NULL,
  `age_31_40yrs` int(11) DEFAULT NULL,
  `age_41_50yrs` int(11) DEFAULT NULL,
  `age_51_60yrs` int(11) DEFAULT NULL,
  `age_61_70yrs` int(11) DEFAULT NULL,
  `age_71_80yrs` int(11) DEFAULT NULL,
  `age_81yrs_plus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`id`, `local_authority`, `ward_name`, `secondary_school_age_11_16yrs`, `further_education_17_18yrs`, `higher_education_19_22yrs`, `postgraduate_30yrs`, `age_31_40yrs`, `age_41_50yrs`, `age_51_60yrs`, `age_61_70yrs`, `age_71_80yrs`, `age_81yrs_plus`) VALUES
(1, 'Gateshead', 'Chopwell and Rowlands Gill', 622, 182, 339, 662, 1005, 1116, 1363, 1222, 978, 476),
(2, 'Gateshead', 'Birtley', 575, 187, 298, 615, 943, 1033, 1168, 958, 899, 524),
(3, 'Gateshead', 'Blaydon', 691, 215, 401, 1063, 1420, 1248, 1383, 1028, 797, 453),
(4, 'Gateshead', 'Bridges', 535, 401, 1290, 3124, 1960, 1023, 879, 655, 401, 200),
(5, 'Gateshead', 'Chowdene', 550, 155, 354, 747, 1059, 1068, 1423, 882, 951, 582),
(6, 'Gateshead', 'Crawcrook and Greenside', 554, 153, 289, 726, 1102, 1100, 1434, 1118, 887, 469),
(7, 'Gateshead', 'Deckham', 692, 232, 429, 1123, 1497, 1181, 1283, 956, 641, 428),
(8, 'Gateshead', 'Dunston and Teams', 535, 168, 382, 1234, 1752, 1296, 1128, 863, 577, 261),
(9, 'Gateshead', 'Dunston Hill and Whickham East', 593, 202, 327, 723, 1124, 1153, 1397, 1086, 847, 563),
(10, 'Gateshead', 'Felling', 603, 203, 350, 1049, 1405, 1062, 1160, 939, 643, 433),
(11, 'Gateshead', 'High Fell', 759, 233, 414, 962, 1239, 1108, 1430, 944, 649, 431),
(12, 'Gateshead', 'Lamesley', 667, 204, 325, 834, 1414, 1272, 1356, 1130, 900, 459),
(13, 'Gateshead', 'Lobley Hill and Bensham', 679, 178, 413, 1184, 1521, 1282, 1495, 1102, 765, 450),
(14, 'Gateshead', 'Low Fell', 531, 160, 224, 649, 1098, 1158, 1285, 1039, 855, 472),
(15, 'Gateshead', 'Pelaw and Heworth', 563, 181, 294, 808, 1208, 1073, 1239, 1037, 757, 397),
(16, 'Gateshead', 'Ryton, Crookhill and Stella', 536, 179, 307, 690, 1094, 1168, 1278, 1020, 862, 525),
(17, 'Gateshead', 'Saltwell', 751, 367, 1037, 2007, 1946, 1306, 1066, 714, 420, 292),
(18, 'Gateshead', 'Wardley and Leam Lane', 592, 190, 284, 679, 968, 1001, 1212, 1144, 710, 519),
(19, 'Gateshead', 'Whickham North', 477, 151, 286, 708, 938, 946, 1199, 971, 872, 548),
(20, 'Gateshead', 'Whickham South and Sunniside', 536, 154, 209, 487, 869, 995, 1063, 1165, 1149, 490),
(21, 'Gateshead', 'Windy Nook and Whitehills', 604, 206, 372, 897, 1237, 1086, 1344, 1264, 784, 481),
(22, 'Gateshead', 'Winlaton and High Spen', 484, 160, 264, 590, 900, 997, 1344, 1087, 1029, 586),
(23, 'Newcastle upon Tyne', 'Arthur\'s Hill', 740, 485, 4588, 3667, 2083, 1127, 655, 469, 204, 128),
(24, 'Newcastle upon Tyne', 'Benwell & Scotswood', 963, 268, 577, 1353, 1643, 1341, 1565, 1403, 899, 508),
(25, 'Newcastle upon Tyne', 'Blakelaw', 910, 277, 533, 1191, 1512, 1313, 1314, 981, 626, 352),
(26, 'Newcastle upon Tyne', 'Byker', 776, 256, 734, 1877, 1696, 1322, 1388, 1013, 669, 396),
(27, 'Newcastle upon Tyne', 'Callerton & Throckley', 702, 197, 406, 895, 1218, 1137, 1433, 1093, 972, 623),
(28, 'Newcastle upon Tyne', 'Castle', 851, 218, 434, 1256, 2021, 1643, 1383, 1209, 782, 387),
(29, 'Newcastle upon Tyne', 'Chapel', 440, 147, 325, 570, 799, 946, 1355, 1349, 1317, 752),
(30, 'Newcastle upon Tyne', 'Dene & South Gosforth', 620, 224, 610, 1258, 1400, 1169, 1180, 1103, 641, 441),
(31, 'Newcastle upon Tyne', 'Denton & Westerhope', 908, 283, 723, 1380, 1451, 1156, 1719, 1354, 1026, 777),
(32, 'Newcastle upon Tyne', 'Elswick', 1518, 455, 1053, 2026, 2718, 2084, 1362, 1033, 526, 312),
(33, 'Newcastle upon Tyne', 'Fawdon & West Gosforth', 619, 204, 459, 1053, 1338, 1193, 1399, 1205, 853, 611),
(34, 'Newcastle upon Tyne', 'Gosforth', 768, 261, 381, 919, 1135, 1355, 1551, 1269, 930, 704),
(35, 'Newcastle upon Tyne', 'Heaton', 421, 148, 1386, 3420, 1825, 1044, 914, 668, 469, 296),
(36, 'Newcastle upon Tyne', 'Kenton', 893, 262, 541, 1034, 1497, 1303, 1376, 1148, 642, 401),
(37, 'Newcastle upon Tyne', 'Kingston Park South & Newbiggin Hall', 797, 251, 499, 1125, 1321, 1060, 1405, 1165, 742, 470),
(38, 'Newcastle upon Tyne', 'Lemington', 681, 224, 514, 975, 1208, 1141, 1393, 1167, 904, 450),
(39, 'Newcastle upon Tyne', 'Manor Park', 637, 225, 384, 1058, 1375, 1161, 1293, 1102, 662, 393),
(40, 'Newcastle upon Tyne', 'Monument', 299, 430, 5454, 7204, 2092, 751, 679, 441, 237, 104),
(41, 'Newcastle upon Tyne', 'North Jesmond', 235, 118, 4569, 2311, 676, 429, 601, 510, 395, 200),
(42, 'Newcastle upon Tyne', 'Ouseburn', 289, 208, 4652, 4414, 1563, 764, 693, 494, 248, 119),
(43, 'Newcastle upon Tyne', 'Parklands', 864, 242, 357, 921, 1324, 1527, 1492, 1339, 1090, 663),
(44, 'Newcastle upon Tyne', 'South Jesmond', 203, 122, 4260, 2784, 974, 523, 585, 562, 454, 333),
(45, 'Newcastle upon Tyne', 'Walker', 956, 271, 618, 1275, 1499, 1295, 1505, 1127, 839, 507),
(46, 'Newcastle upon Tyne', 'Walkergate', 766, 271, 562, 1234, 1429, 1249, 1786, 1471, 1004, 487),
(47, 'Newcastle upon Tyne', 'West Fenham', 880, 295, 530, 1172, 1452, 1301, 1439, 1118, 703, 438),
(48, 'Newcastle upon Tyne', 'Wingrove', 1028, 405, 1816, 1996, 1970, 1365, 1195, 813, 489, 401),
(49, 'North Tyneside', 'Battle Hill', 656, 211, 375, 958, 1446, 1257, 1504, 1472, 1090, 457),
(50, 'North Tyneside', 'Benton', 584, 206, 341, 897, 1250, 1284, 1584, 1288, 1035, 627),
(51, 'North Tyneside', 'Camperdown', 751, 233, 373, 1040, 1357, 1375, 1546, 1236, 952, 442),
(52, 'North Tyneside', 'Chirton', 1069, 288, 483, 1283, 1733, 1492, 1646, 1111, 734, 345),
(53, 'North Tyneside', 'Collingwood', 833, 264, 460, 994, 1462, 1376, 1615, 1290, 1026, 601),
(54, 'North Tyneside', 'Cullercoats', 530, 157, 255, 558, 1065, 1276, 1299, 1315, 1127, 699),
(55, 'North Tyneside', 'Howdon', 846, 259, 493, 1168, 1552, 1454, 1508, 1324, 863, 407),
(56, 'North Tyneside', 'Killingworth', 789, 208, 403, 950, 1589, 1468, 1569, 1345, 969, 460),
(57, 'North Tyneside', 'Longbenton', 743, 193, 402, 1422, 1975, 1383, 1493, 1115, 762, 471),
(58, 'North Tyneside', 'Monkseaton North', 715, 232, 275, 470, 982, 1358, 1378, 1140, 977, 499),
(59, 'North Tyneside', 'Monkseaton South', 745, 240, 341, 631, 1149, 1384, 1468, 1090, 963, 612),
(60, 'North Tyneside', 'Northumberland', 528, 152, 298, 959, 1214, 998, 1318, 1227, 759, 366),
(61, 'North Tyneside', 'Preston', 432, 146, 211, 662, 1017, 1042, 1333, 1093, 899, 561),
(62, 'North Tyneside', 'Riverside', 802, 243, 488, 1335, 1899, 1603, 1754, 1388, 713, 420),
(63, 'North Tyneside', 'St Mary\'s', 671, 176, 220, 367, 737, 1231, 1254, 1228, 1182, 747),
(64, 'North Tyneside', 'Tynemouth', 570, 164, 288, 802, 1321, 1476, 1571, 1507, 1024, 593),
(65, 'North Tyneside', 'Valley', 1030, 283, 418, 1389, 2221, 1904, 1640, 1224, 750, 311),
(66, 'North Tyneside', 'Wallsend', 616, 168, 411, 1417, 1725, 1465, 1553, 1185, 673, 304),
(67, 'North Tyneside', 'Weetslade', 601, 194, 284, 850, 1199, 1152, 1398, 1337, 1170, 656),
(68, 'North Tyneside', 'Whitley Bay', 686, 218, 315, 661, 1348, 1441, 1405, 1090, 736, 348),
(69, 'South Tyneside', 'Beacon and Bents', 627, 204, 391, 1021, 1289, 1269, 1398, 1083, 707, 323),
(70, 'South Tyneside', 'Bede', 539, 157, 302, 820, 932, 822, 1093, 964, 567, 300),
(71, 'South Tyneside', 'Biddick and All Saints', 655, 200, 382, 1048, 1283, 1018, 1198, 902, 619, 295),
(72, 'South Tyneside', 'Boldon Colliery', 632, 182, 314, 927, 1268, 1119, 1455, 1189, 786, 392),
(73, 'South Tyneside', 'Cleadon and East Boldon', 551, 158, 274, 505, 762, 1032, 1322, 1196, 1042, 643),
(74, 'South Tyneside', 'Cleadon Park', 577, 156, 273, 690, 938, 761, 1138, 906, 776, 427),
(75, 'South Tyneside', 'Fellgate and Hedworth', 503, 181, 271, 594, 896, 845, 1120, 974, 816, 274),
(76, 'South Tyneside', 'Harton', 603, 181, 337, 666, 982, 881, 1217, 1081, 816, 522),
(77, 'South Tyneside', 'Hebburn North', 648, 190, 427, 1123, 1390, 1155, 1363, 967, 522, 253),
(78, 'South Tyneside', 'Hebburn South', 615, 165, 285, 773, 1263, 1039, 1226, 1085, 692, 450),
(79, 'South Tyneside', 'Horsley Hill', 585, 184, 308, 761, 1084, 980, 1393, 1224, 865, 623),
(80, 'South Tyneside', 'Monkton', 497, 180, 333, 814, 1056, 883, 1233, 1030, 722, 442),
(81, 'South Tyneside', 'Primrose', 577, 160, 325, 810, 1058, 953, 1189, 903, 688, 330),
(82, 'South Tyneside', 'Simonside and Rekendyke', 516, 181, 443, 1222, 1305, 1121, 1294, 1139, 652, 298),
(83, 'South Tyneside', 'Westoe', 486, 166, 302, 874, 972, 1107, 1302, 1119, 714, 387),
(84, 'South Tyneside', 'West Park', 387, 133, 278, 998, 1005, 969, 1160, 903, 643, 398),
(85, 'South Tyneside', 'Whitburn and Marsden', 531, 144, 253, 568, 742, 841, 1174, 1069, 822, 439),
(86, 'South Tyneside', 'Whiteleas', 562, 156, 321, 832, 1000, 856, 1287, 968, 642, 469),
(87, 'Sunderland', 'Barnes', 653, 216, 449, 1153, 1366, 1187, 1513, 1315, 914, 558),
(88, 'Sunderland', 'Castle', 783, 232, 431, 1195, 1325, 1257, 1555, 1358, 781, 454),
(89, 'Sunderland', 'Copt Hill', 719, 237, 474, 1271, 1433, 1371, 1843, 1376, 977, 612),
(90, 'Sunderland', 'Doxford', 611, 186, 323, 957, 1191, 1170, 1571, 1351, 964, 418),
(91, 'Sunderland', 'Fulwell', 612, 198, 378, 921, 1109, 1294, 1890, 1457, 1219, 740),
(92, 'Sunderland', 'Hendon', 746, 275, 1151, 2426, 1747, 1468, 1556, 1288, 708, 347),
(93, 'Sunderland', 'Hetton', 784, 233, 462, 1196, 1488, 1349, 1613, 1470, 1170, 483),
(94, 'Sunderland', 'Houghton', 816, 218, 454, 1207, 1471, 1399, 1711, 1342, 1064, 544),
(95, 'Sunderland', 'Millfield', 868, 341, 1021, 2343, 1813, 1457, 1507, 1185, 674, 414),
(96, 'Sunderland', 'Pallion', 779, 233, 458, 1366, 1380, 1154, 1439, 1168, 799, 443),
(97, 'Sunderland', 'Redhill', 781, 257, 489, 1217, 1480, 1293, 1570, 1097, 784, 533),
(98, 'Sunderland', 'Ryhope', 855, 230, 491, 1187, 1482, 1412, 1641, 1293, 777, 524),
(99, 'Sunderland', 'St Anne\'s', 829, 243, 427, 1178, 1505, 1309, 1582, 1128, 860, 451),
(100, 'Sunderland', 'St Chad\'s', 503, 159, 323, 888, 994, 1000, 1447, 1240, 1011, 637),
(101, 'Sunderland', 'St Michael\'s', 618, 228, 486, 1296, 1297, 1247, 1477, 1301, 1032, 680),
(102, 'Sunderland', 'St Peter\'s', 497, 147, 542, 1442, 1394, 1209, 1603, 1419, 1082, 614),
(103, 'Sunderland', 'Sandhill', 804, 227, 451, 1233, 1382, 1318, 1510, 1112, 941, 451),
(104, 'Sunderland', 'Shiney Row', 943, 281, 519, 1273, 1651, 1795, 1936, 1531, 1090, 447),
(105, 'Sunderland', 'Silksworth', 696, 207, 429, 1058, 1093, 1183, 1471, 1344, 995, 554),
(106, 'Sunderland', 'Southwick', 718, 211, 395, 1050, 1475, 1183, 1524, 1368, 867, 523),
(107, 'Sunderland', 'Washington Central', 736, 227, 355, 866, 1326, 1385, 1444, 1547, 1205, 436),
(108, 'Sunderland', 'Washington East', 824, 229, 418, 991, 1416, 1339, 1535, 1548, 1147, 357),
(109, 'Sunderland', 'Washington North', 796, 219, 455, 1236, 1413, 1315, 1448, 1233, 807, 413),
(110, 'Sunderland', 'Washington South', 666, 211, 346, 818, 1264, 1280, 1409, 1694, 994, 269),
(111, 'Sunderland', 'Washington West', 833, 260, 480, 1078, 1240, 1512, 1555, 1562, 1138, 418);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbon_footprint`
--
ALTER TABLE `carbon_footprint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_comparison`
--
ALTER TABLE `car_comparison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demographics`
--
ALTER TABLE `demographics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbon_footprint`
--
ALTER TABLE `carbon_footprint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `car_comparison`
--
ALTER TABLE `car_comparison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `demographics`
--
ALTER TABLE `demographics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
