-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pro` (IN `room` INT)  NO SQL
select * from roomdb where rroomno=room$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE `challan` (
  `receipt` int(4) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `amount` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challan`
--

INSERT INTO `challan` (`receipt`, `USN`, `amount`) VALUES
(1000, '1001', 9000),
(1001, '1002', 9000),
(1002, '1003', 9000),
(1003, '1004', 9000),
(1004, '1005', 9000),
(1005, '1006', 9000),
(1006, '1007', 9000),
(1007, '1008', 9000),
(1008, '1009', 9000),
(1009, '1010', 9000),
(1010, '1011', 9000),
(1011, '1012', 9000),
(1012, '1013', 9000),
(1013, '1014', 9000),
(1014, '1015', 9000),
(1015, '1016', 9000),
(1016, '1017', 9000),
(1017, '1018', 9000),
(1018, '1019', 9000),
(1019, '1020', 9000),
(1020, '1021', 9000),
(1021, '1022', 9000),
(1022, '1023', 9000),
(1023, '1024', 9000),
(1024, '1025', 9000),
(1025, '1026', 9000),
(1026, '1027', 9000),
(1027, '1028', 9000),
(1028, '1029', 9000),
(1029, '1030', 9000),
(1030, '1031', 9000),
(1031, '1032', 9000),
(1032, '1033', 9000),
(1033, '1034', 9000),
(1034, '1035', 9000),
(1035, '1036', 9000),
(1036, '1037', 9000),
(1037, '1038', 9000),
(1038, '1039', 9000),
(1039, '1040', 9000),
(1040, '1041', 9000),
(1041, '1042', 9000),
(1042, '1043', 9000),
(1043, '1044', 9000),
(1044, '1045', 9000),
(1045, '1046', 9000),
(1046, '1047', 9000),
(1047, '1048', 9000),
(1048, '1049', 9000),
(1049, '1050', 9000),
(1050, '1051', 9000),
(1051, '1052', 9000),
(1052, '1053', 9000),
(1053, '1054', 9000),
(1054, '1055', 9000),
(1055, '1056', 9000),
(1056, '1057', 9000),
(1057, '1058', 9000),
(1058, '1059', 9000),
(1059, '1060', 9000),
(1060, '1061', 9000),
(1061, '1062', 9000),
(1062, '1063', 9000),
(1063, '1064', 9000),
(1064, '1065', 9000),
(1065, '1066', 9000),
(1066, '1067', 9000),
(1067, '1068', 9000),
(1068, '1069', 9000),
(1069, '1070', 9000),
(1070, '1071', 9000),
(1071, '1072', 9000),
(1072, '1073', 9000),
(1073, '1074', 9000),
(1074, '1075', 9000),
(1075, '1076', 9000),
(1076, '1077', 9000),
(1077, '1078', 9000),
(1078, '1079', 9000),
(1079, '1080', 9000),
(1080, '1081', 9000),
(1081, '1082', 9000),
(1082, '1083', 9000),
(1083, '1084', 9000),
(1084, '1085', 9000),
(1085, '1086', 9000),
(1086, '1087', 9000),
(1087, '1088', 9000),
(1088, '1089', 9000),
(1089, '1090', 9000),
(1090, '1091', 9000),
(1091, '1092', 9000),
(1092, '1093', 9000),
(1093, '1094', 9000),
(1094, '1095', 9000),
(1095, '1096', 9000),
(1096, '1097', 9000),
(1097, '1098', 9000),
(1098, '1099', 9000),
(1099, '1100', 9000),
(1100, '1101', 9000),
(1101, '1102', 9000),
(1102, '1103', 9000),
(1103, '1104', 9000),
(1104, '1105', 9000),
(1105, '1106', 9000),
(1106, '1107', 9000),
(1107, '1108', 9000),
(1108, '1109', 9000),
(1109, '1110', 9000),
(1110, '1111', 9000),
(1111, '1112', 9000),
(1112, '1113', 9000),
(1113, '1114', 9000),
(1114, '1115', 9000),
(1115, '1116', 9000),
(1116, '1117', 9000),
(1117, '1118', 9000),
(1118, '1119', 9000),
(1119, '1120', 9000),
(1120, '1121', 9000),
(1121, '1122', 9000),
(1122, '1123', 9000),
(1123, '1124', 9000),
(1124, '1125', 9000),
(1125, '1126', 9000),
(1126, '1127', 9000),
(1127, '1128', 9000),
(1128, '1129', 9000),
(1129, '1130', 9000),
(1130, '1131', 9000),
(1131, '1132', 9000),
(1132, '1133', 9000),
(1133, '1134', 9000),
(1134, '1135', 9000),
(1135, '1136', 9000),
(1136, '1137', 9000),
(1137, '1138', 9000),
(1138, '1139', 9000),
(1139, '1140', 9000),
(1140, '1141', 9000),
(1141, '1142', 9000),
(1142, '1143', 9000),
(1143, '1144', 9000),
(1144, '1145', 9000),
(1145, '1146', 9000),
(1146, '1147', 9000),
(1147, '1148', 9000),
(1148, '1149', 9000),
(1149, '1150', 9000),
(1150, '1151', 9000),
(1151, '1152', 9000),
(1152, '1153', 9000),
(1153, '1154', 9000),
(1154, '1155', 9000),
(1155, '1156', 9000),
(1156, '1157', 9000),
(1157, '1158', 9000),
(1158, '1159', 9000),
(1159, '1160', 9000),
(1160, '1161', 9000),
(1161, '1162', 9000),
(1162, '1163', 9000),
(1163, '1164', 9000),
(1164, '1165', 9000),
(1165, '1166', 9000),
(1166, '1167', 9000),
(1167, '1168', 9000),
(1168, '1169', 9000),
(1169, '1170', 9000),
(1170, '1171', 9000),
(1171, '1172', 9000),
(1172, '1173', 9000),
(1173, '1174', 9000),
(1174, '1175', 9000),
(1175, '1176', 9000),
(1176, '1177', 9000),
(1177, '1178', 9000),
(1178, '1179', 9000),
(1179, '1180', 9000),
(1180, '1181', 9000),
(1181, '1182', 9000),
(1182, '1183', 9000),
(1183, '1184', 9000),
(1184, '1185', 9000),
(1185, '1186', 9000),
(1186, '1187', 9000),
(1187, '1188', 9000),
(1188, '1189', 9000),
(1189, '1190', 9000),
(1190, '1191', 9000),
(1191, '1192', 9000),
(1192, '1193', 9000),
(1193, '1194', 9000),
(1194, '1195', 9000),
(1195, '1196', 9000),
(1196, '1197', 9000),
(1197, '1198', 9000),
(1198, '1199', 9000),
(1199, '1200', 9000),
(1200, '1201', 9000),
(1201, '1202', 9000),
(1202, '1203', 9000),
(1203, '1204', 9000),
(1204, '1205', 9000),
(1205, '1206', 9000),
(1314, '1315', 9000),
(1315, '1316', 9000),
(1316, '1317', 9000),
(1317, '1318', 9000),
(1318, '1319', 9000),
(1319, '1320', 9000),
(1320, '1321', 9000),
(1321, '1322', 9000),
(1322, '1323', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `complaintdb`
--

CREATE TABLE `complaintdb` (
  `cname` varchar(20) NOT NULL,
  `cusn` varchar(20) NOT NULL,
  `croomno` int(3) NOT NULL,
  `cdate` varchar(12) NOT NULL,
  `cmobile` int(10) NOT NULL,
  `csolved` varchar(3) NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `cobject` varchar(10) NOT NULL,
  `cdetails` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaintdb`
--

INSERT INTO `complaintdb` (`cname`, `cusn`, `croomno`, `cdate`, `cmobile`, `csolved`, `ctype`, `cobject`, `cdetails`) VALUES
('yyy', '1003', 23, '12OCT1938', 2147483647, 'no', 'electric', 'Light', 'jjkkhut'),
('aditya', '1003', 23, '12OCT1998', 2147483647, 'YES', 'food', 'DOSE', 'ROASTED FULLY NOT DOING PROPERLY');

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `fday` varchar(11) NOT NULL,
  `ftype` varchar(11) NOT NULL,
  `ffood1` varchar(10) DEFAULT NULL,
  `ffood2` varchar(10) DEFAULT NULL,
  `ffood3` varchar(10) DEFAULT NULL,
  `ffood4` varchar(10) DEFAULT NULL,
  `ffood5` varchar(10) DEFAULT NULL,
  `ffood6` varchar(10) DEFAULT NULL,
  `ffood7` varchar(10) DEFAULT NULL,
  `ffood8` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`fday`, `ftype`, `ffood1`, `ffood2`, `ffood3`, `ffood4`, `ffood5`, `ffood6`, `ffood7`, `ffood8`) VALUES
('friday', 'lunch', ' BIRYANI', 'PANNEER', 'ROTI', 'KAJU MASAL', 'GOBI', 'PAPAD MASA', 'PICKLE', 'CURD/BUTTE'),
('monday', 'BREAKFAST', '', '', '', '', '', '', '', ''),
('sunday', 'BREAKFAST', 'uppittu', '', '', '', '', '', '', ''),
('wednesdayda', 'lunch', 'uppittu', 'chatney', 'HGJG', 'FYTY', 'UR6R', 'HG', 'HF', 'HHNFHYF');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `rroomno` int(3) NOT NULL,
  `rbedno` int(1) NOT NULL,
  `action` varchar(20) NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`rroomno`, `rbedno`, `action`, `dates`) VALUES
(42, 2, 'deleted', '2019-11-27 17:35:52'),
(42, 2, 'inserted', '2019-11-27 17:29:35'),
(43, 3, 'inserted', '2019-11-27 21:20:55'),
(44, 2, 'inserted', '2019-11-27 21:25:46'),
(44, 3, 'inserted', '2019-11-27 21:24:32'),
(75, 1, 'deleted', '2019-11-28 00:54:45'),
(75, 1, 'inserted', '2019-11-28 00:53:45'),
(125, 1, 'inserted', '2019-12-04 22:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `usn` varchar(10) NOT NULL,
  `reviews` int(1) NOT NULL,
  `details` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`usn`, `reviews`, `details`) VALUES
('1001', 1, '72'),
('1003', 4, 'ji');

--
-- Triggers `review`
--
DELIMITER $$
CREATE TRIGGER `revie` AFTER INSERT ON `review` FOR EACH ROW INSERT into trig values(new.usn,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `roomdb`
--

CREATE TABLE `roomdb` (
  `rroomno` int(3) NOT NULL,
  `rbedno` int(1) NOT NULL,
  `ravailability` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomdb`
--

INSERT INTO `roomdb` (`rroomno`, `rbedno`, `ravailability`) VALUES
(1, 1, 'YES'),
(1, 2, 'YES'),
(1, 3, 'YES'),
(1, 4, 'YES'),
(2, 1, 'YES'),
(2, 2, 'YES'),
(2, 3, 'YES'),
(2, 4, 'YES'),
(3, 1, 'YES'),
(3, 2, 'YES'),
(3, 3, 'YES'),
(3, 4, 'YES'),
(4, 1, 'YES'),
(4, 2, 'YES'),
(4, 3, 'YES'),
(4, 4, 'YES'),
(5, 1, 'YES'),
(5, 2, 'YES'),
(5, 3, 'YES'),
(5, 4, 'YES'),
(6, 1, 'YES'),
(6, 2, 'YES'),
(6, 3, 'YES'),
(6, 4, 'YES'),
(7, 1, 'YES'),
(7, 2, 'YES'),
(7, 3, 'YES'),
(7, 4, 'YES'),
(8, 1, 'YES'),
(8, 2, 'YES'),
(8, 3, 'YES'),
(8, 4, 'YES'),
(9, 1, 'YES'),
(9, 2, 'YES'),
(9, 3, 'YES'),
(9, 4, 'YES'),
(10, 1, 'YES'),
(10, 2, 'YES'),
(10, 3, 'YES'),
(10, 4, 'YES'),
(11, 1, 'YES'),
(11, 2, 'NO'),
(11, 3, 'NO'),
(11, 4, 'YES'),
(12, 1, 'YES'),
(12, 2, 'YES'),
(12, 3, 'YES'),
(12, 4, 'YES'),
(13, 1, 'YES'),
(13, 2, 'YES'),
(13, 3, 'YES'),
(13, 4, 'YES'),
(14, 1, 'NO'),
(14, 2, 'YES'),
(14, 3, 'YES'),
(14, 4, 'YES'),
(15, 1, 'YES'),
(15, 2, 'YES'),
(15, 3, 'YES'),
(15, 4, 'YES'),
(16, 1, 'YES'),
(16, 2, 'YES'),
(16, 3, 'YES'),
(16, 4, 'YES'),
(17, 1, 'YES'),
(17, 2, 'YES'),
(17, 3, 'YES'),
(17, 4, 'YES'),
(18, 1, 'YES'),
(18, 2, 'YES'),
(18, 3, 'YES'),
(18, 4, 'YES'),
(19, 1, 'YES'),
(19, 2, 'YES'),
(19, 3, 'YES'),
(19, 4, 'YES'),
(20, 1, 'YES'),
(20, 2, 'YES'),
(20, 3, 'YES'),
(20, 4, 'YES'),
(21, 1, 'YES'),
(21, 2, 'YES'),
(21, 3, 'YES'),
(21, 4, 'YES'),
(22, 1, 'NO'),
(22, 2, 'YES'),
(22, 3, 'YES'),
(22, 4, 'YES'),
(23, 1, 'YES'),
(23, 2, 'YES'),
(23, 3, 'NO'),
(23, 4, 'NO'),
(24, 1, 'YES'),
(24, 2, 'YES'),
(24, 3, 'YES'),
(24, 4, 'YES'),
(25, 1, 'YES'),
(25, 2, 'YES'),
(25, 3, 'YES'),
(25, 4, 'YES'),
(26, 1, 'YES'),
(26, 2, 'YES'),
(26, 3, 'YES'),
(26, 4, 'YES'),
(27, 1, 'YES'),
(27, 2, 'YES'),
(27, 3, 'YES'),
(27, 4, 'YES'),
(28, 1, 'YES'),
(28, 2, 'YES'),
(28, 3, 'YES'),
(28, 4, 'YES'),
(29, 1, 'YES'),
(29, 2, 'YES'),
(29, 3, 'YES'),
(29, 4, 'YES'),
(30, 1, 'YES'),
(30, 2, 'YES'),
(30, 3, 'YES'),
(30, 4, 'YES'),
(31, 1, 'YES'),
(31, 2, 'YES'),
(31, 3, 'YES'),
(31, 4, 'YES'),
(32, 1, 'YES'),
(32, 2, 'YES'),
(32, 3, 'YES'),
(32, 4, 'YES'),
(33, 1, 'YES'),
(33, 2, 'YES'),
(33, 3, 'YES'),
(33, 4, 'YES'),
(34, 1, 'YES'),
(34, 2, 'YES'),
(34, 3, 'YES'),
(34, 4, 'YES'),
(35, 1, 'YES'),
(35, 2, 'YES'),
(35, 3, 'YES'),
(35, 4, 'YES'),
(36, 1, 'YES'),
(36, 2, 'YES'),
(36, 3, 'YES'),
(36, 4, 'YES'),
(37, 1, 'YES'),
(37, 2, 'YES'),
(37, 3, 'YES'),
(37, 4, 'YES'),
(38, 1, 'YES'),
(38, 2, 'YES'),
(38, 3, 'YES'),
(38, 4, 'YES'),
(39, 1, 'YES'),
(39, 2, 'YES'),
(39, 3, 'YES'),
(39, 4, 'YES'),
(40, 1, 'YES'),
(40, 2, 'YES'),
(40, 3, 'YES'),
(40, 4, 'YES'),
(43, 3, 'YES'),
(44, 2, 'YES'),
(44, 3, 'YES'),
(125, 1, 'YES');

--
-- Triggers `roomdb`
--
DELIMITER $$
CREATE TRIGGER `insertroom` AFTER INSERT ON `roomdb` FOR EACH ROW INSERT into log values(NEW.rroomno,NEW.rbedno,'inserted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `roomdeleted` AFTER DELETE ON `roomdb` FOR EACH ROW insert into log VALUES(OLD.rroomno,OLD.rbedno,'deleted',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE `studentdb` (
  `sname` varchar(20) NOT NULL,
  `susn` varchar(10) NOT NULL,
  `smobile` varchar(15) NOT NULL,
  `sbranch` varchar(25) NOT NULL,
  `ssem` int(1) NOT NULL,
  `saddress` varchar(20) NOT NULL,
  `spin` varchar(6) NOT NULL,
  `sgender` varchar(4) NOT NULL,
  `sroomno` int(3) NOT NULL,
  `sbed` int(1) NOT NULL,
  `schallan` int(4) NOT NULL,
  `spassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdb`
--

INSERT INTO `studentdb` (`sname`, `susn`, `smobile`, `sbranch`, `ssem`, `saddress`, `spin`, `sgender`, `sroomno`, `sbed`, `schallan`, `spassword`) VALUES
('sachin', '1001', '9482169412', 'computer application and ', 5, 'chikyanamane po bisg', '581359', 'male', 22, 1, 1000, 'sachin'),
('abhishek', '1002', '8777777778', 'computer application and ', 5, 'tata estate jharkand', '581359', 'male', 23, 4, 1001, 'abhishek'),
('aditya', '1003', '9449900132', 'mechanicalengineering', 5, 'yellapur', '581359', 'male', 23, 3, 1002, 'aditya'),
('MADHAV', '1024', '9480375160', 'computer application and ', 8, 'GOKUL', '581359', 'male', 14, 1, 1023, 'MURARI');

-- --------------------------------------------------------

--
-- Table structure for table `trig`
--

CREATE TABLE `trig` (
  `usn` varchar(10) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trig`
--

INSERT INTO `trig` (`usn`, `cdate`) VALUES
('1001', '2019-11-28 17:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challan`
--
ALTER TABLE `challan`
  ADD PRIMARY KEY (`receipt`);

--
-- Indexes for table `complaintdb`
--
ALTER TABLE `complaintdb`
  ADD PRIMARY KEY (`cusn`,`cdate`),
  ADD KEY `croomno` (`croomno`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`fday`,`ftype`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`rroomno`,`rbedno`,`action`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `roomdb`
--
ALTER TABLE `roomdb`
  ADD PRIMARY KEY (`rroomno`,`rbedno`);

--
-- Indexes for table `studentdb`
--
ALTER TABLE `studentdb`
  ADD PRIMARY KEY (`susn`,`ssem`),
  ADD KEY `sroomno` (`sroomno`,`sbed`),
  ADD KEY `schallan` (`schallan`);

--
-- Indexes for table `trig`
--
ALTER TABLE `trig`
  ADD PRIMARY KEY (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaintdb`
--
ALTER TABLE `complaintdb`
  ADD CONSTRAINT `complaintdb_ibfk_1` FOREIGN KEY (`cusn`) REFERENCES `studentdb` (`susn`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `complaintdb_ibfk_2` FOREIGN KEY (`croomno`) REFERENCES `roomdb` (`rroomno`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `studentdb` (`susn`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `studentdb`
--
ALTER TABLE `studentdb`
  ADD CONSTRAINT `studentdb_ibfk_1` FOREIGN KEY (`sroomno`,`sbed`) REFERENCES `roomdb` (`rroomno`, `rbedno`),
  ADD CONSTRAINT `studentdb_ibfk_2` FOREIGN KEY (`schallan`) REFERENCES `challan` (`receipt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
