-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 06, 2022 at 05:28 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(225) NOT NULL AUTO_INCREMENT,
  `a_fname` varchar(225) DEFAULT NULL,
  `a_lname` varchar(225) DEFAULT NULL,
  `a_username` varchar(225) DEFAULT NULL,
  `a_address` varchar(225) DEFAULT NULL,
  `a_state` varchar(225) DEFAULT NULL,
  `a_city` varchar(225) DEFAULT NULL,
  `a_zip` varchar(225) DEFAULT NULL,
  `a_email` varchar(225) DEFAULT NULL,
  `a_mobile` varchar(225) DEFAULT NULL,
  `a_aadhar` varchar(225) DEFAULT NULL,
  `a_password` varchar(225) DEFAULT NULL,
  `a_bgroup` varchar(225) DEFAULT NULL,
  `a_cpassword` varchar(225) DEFAULT NULL,
  `a_gender` varchar(225) DEFAULT NULL,
  `a_photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_fname`, `a_lname`, `a_username`, `a_address`, `a_state`, `a_city`, `a_zip`, `a_email`, `a_mobile`, `a_aadhar`, `a_password`, `a_bgroup`, `a_cpassword`, `a_gender`, `a_photo`) VALUES
(1, 'Rajat', 'Jain', 'Rajat Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '458001', 'jainr6000@gmail.com', '6265176404', '397005652204', 'Rajat@123', 'B +ve', 'Rajat@123', 'Male', '../DB/admin/IMG_20220105_103338.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `d_id` int(225) NOT NULL AUTO_INCREMENT,
  `d_fname` varchar(225) DEFAULT NULL,
  `d_lname` varchar(225) DEFAULT NULL,
  `d_dob` date NOT NULL,
  `d_address` varchar(225) DEFAULT NULL,
  `d_state` varchar(225) DEFAULT NULL,
  `d_city` varchar(225) DEFAULT NULL,
  `d_zip` varchar(225) DEFAULT NULL,
  `d_email` varchar(225) DEFAULT NULL,
  `d_mobile` varchar(225) DEFAULT NULL,
  `d_aadhar` varchar(225) DEFAULT NULL,
  `d_ltd` date NOT NULL,
  `d_bgroup` varchar(225) DEFAULT NULL,
  `d_dcount` varchar(255) DEFAULT NULL,
  `d_gender` varchar(255) DEFAULT NULL,
  `d_photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `d_fname`, `d_lname`, `d_dob`, `d_address`, `d_state`, `d_city`, `d_zip`, `d_email`, `d_mobile`, `d_aadhar`, `d_ltd`, `d_bgroup`, `d_dcount`, `d_gender`, `d_photo`) VALUES
(1, 'Rajat', 'Jain', '2000-02-22', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '458001', 'jainr6000@gmail.com', '6265176404', '397005652204', '2022-05-05', 'B +ve', '1', 'Male', '../DB/Donor/IMG_20220105_103338.jpg'),
(2, 'Chirag', 'Purohit', '2000-07-12', 'Vijay Nagar', 'madhya pradesh', 'indore', '458000', 'purohitchirag109@gmail.com', '7223830797', '784578457842', '2021-11-11', 'A -ve', '2', 'Male', '../DB/Donor/user.png'),
(3, 'vansh', 'sharma', '1998-06-20', 'PIPLIA mandi', 'MP', 'Mandsaur', '458001', 'vanshsharma11@gmail.com', '5645654456', '111122223333', '2022-04-13', 'A -ve', '1', 'Male', '../DB/Donor/young-man.png'),
(4, 'Nilesh', 'prajapat', '1999-06-05', 'mandsaur', 'madhya pradesh', 'mandsaur', '458001', 'Nileshprajapat003@gmail.com', '9039125862', '555888666444', '2022-03-31', 'AB +ve', '2', 'Male', '../DB/Donor/demo1.jpg'),
(5, 'Ayush', 'sethiya', '1998-05-04', 'Mnasa', 'MP', 'Mandsaur', '458001', 'ayushsethiya04@gmail.com', '9009362392', '555666888222', '2019-06-02', 'AB -ve', '1', 'Male', '../DB/Donor/demo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(225) NOT NULL AUTO_INCREMENT,
  `p_fname` varchar(225) DEFAULT NULL,
  `p_lname` varchar(225) DEFAULT NULL,
  `p_dob` date NOT NULL,
  `p_address` varchar(225) DEFAULT NULL,
  `p_state` varchar(225) DEFAULT NULL,
  `p_city` varchar(225) DEFAULT NULL,
  `p_zip` varchar(225) DEFAULT NULL,
  `p_email` varchar(225) DEFAULT NULL,
  `p_mobile` varchar(225) DEFAULT NULL,
  `p_aadhar` varchar(225) DEFAULT NULL,
  `p_attname` varchar(225) DEFAULT NULL,
  `p_bgroup` varchar(225) DEFAULT NULL,
  `p_attbgroup` varchar(225) DEFAULT NULL,
  `p_ddate` date NOT NULL,
  `p_dname` varchar(225) NOT NULL,
  `p_gender` varchar(225) DEFAULT NULL,
  `p_photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_fname`, `p_lname`, `p_dob`, `p_address`, `p_state`, `p_city`, `p_zip`, `p_email`, `p_mobile`, `p_aadhar`, `p_attname`, `p_bgroup`, `p_attbgroup`, `p_ddate`, `p_dname`, `p_gender`, `p_photo`) VALUES
(1, 'Vijay', 'Rathor', '2000-09-30', 'mandsaur', 'madhya pradesh', 'mandsaur', '458001', 'vijayrathor403@gmail.com', '9039127501', '888555666222', 'Suraj Rathor', 'O +ve', 'A -ve', '2022-05-19', 'Rajat Jain', 'Male', '../DB/Patient/vijay sign.png'),
(2, 'Mohit', 'jain', '1997-09-03', 'Nimbod', 'MP', 'Mandsaur', '458669', 'mohitjain00@gmail.com', '8989693616', '776633112255', 'Rahul', 'B +ve', 'B -ve', '2022-04-30', 'Rajat Jain', 'Male', '../DB/Patient/download.jfif'),
(3, 'Saurabh', 'Jain', '1996-05-30', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '458669', 'saurabh001@gmail.com', '8269093027', '555566663333', 'Anil', 'AB +ve', 'AB -ve', '2022-05-06', 'from Bank', 'Male', '../DB/Patient/OIP (3).jfif'),
(4, 'Anil', 'Jain', '1969-09-06', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '458001', 'aniljain69@gmail.com', '6265176404', '5555666633332222', 'Rajat', 'B +ve', 'B +ve', '2022-02-12', 'Rajat Jain', 'Male', '../DB/Patient/OIP (2).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

DROP TABLE IF EXISTS `request_blood`;
CREATE TABLE IF NOT EXISTS `request_blood` (
  `r_id` int(225) NOT NULL AUTO_INCREMENT,
  `r_fname` varchar(225) DEFAULT NULL,
  `r_lname` varchar(225) DEFAULT NULL,
  `r_address` varchar(225) DEFAULT NULL,
  `r_state` varchar(225) DEFAULT NULL,
  `r_city` varchar(225) DEFAULT NULL,
  `r_mobile` varchar(225) DEFAULT NULL,
  `r_aadhar` varchar(225) DEFAULT NULL,
  `r_bgroup` varchar(225) DEFAULT NULL,
  `r_rdate` date NOT NULL,
  `r_gender` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `r_photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`r_id`, `r_fname`, `r_lname`, `r_address`, `r_state`, `r_city`, `r_mobile`, `r_aadhar`, `r_bgroup`, `r_rdate`, `r_gender`, `r_photo`) VALUES
(1, 'Rajat', 'Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '6265176404', '397005652204', 'B +ve', '0000-00-00', '', 'request_blood/'),
(2, 'Vijay', 'Rathor', 'mandsaur', 'madhya pradesh', 'mandsaur', '9039127501', '111122223333', 'O +ve', '2022-05-11', '', 'request_blood/'),
(3, 'Mohit', 'jain', 'Nimbod', 'MP', 'Mandsaur', '8989693616', '888666555444', 'B -ve', '0000-00-00', '', 'request_blood/'),
(4, 'Saurabh', 'Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '8269093027', '889966554477', 'A +ve', '2022-05-28', 'Male', 'request_blood/'),
(5, 'Anil', 'Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '6265176404', '223355114455', 'O +ve', '2022-05-21', 'Male', 'request_blood/'),
(6, 'Chirag', 'Purohit', 'Vijay Nagar', 'madhya pradesh', 'indore', '7223830797', '885544669922', 'A +ve', '2022-05-28', '', 'request_blood/'),
(7, 'Ronak', 'Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '8864595215', '555566662222', 'O -ve', '2022-06-05', 'Male', 'request_blood/'),
(8, 'vansh', 'sharma', 'nimach', 'MP', 'Nimach', '9996665558', '532656325236', 'A +ve', '2022-05-20', 'Male', 'request_blood/'),
(9, 'Chirag', 'Purohit', 'Vijay Nagar', 'madhya pradesh', 'indore', '7223830797', '787878787878', 'AB +ve', '2022-05-26', 'Male', '../DB/request_blood/profile.png'),
(10, 'Rajat', 'Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '6265176404', '3970056522041', 'A -ve', '2022-05-19', 'Male', 'DB/request_blood/IMG_20220105_103338.jpg'),
(11, 'Purnima', 'sharma', 'PIPLIA mandi', 'MP', 'Mandsaur', '5645654456', '888999666555', 'A +ve', '2022-05-21', 'Female', '../DB/request_blood/user.png'),
(12, 'Rajat', 'Jain', 'Village - Nimbod, Teh.- Dalauda, Dist. - Mandsaur', 'MP', 'Mandsaur', '6265176404', '397005652204', 'B +ve', '2022-06-04', 'Male', '../DB/request_blood/IMG_20220105_103338.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
