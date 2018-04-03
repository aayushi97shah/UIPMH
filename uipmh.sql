-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 06:47 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uipmh`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `aid_txt` int(2) NOT NULL,
  `uid_txt` varchar(30) NOT NULL,
  `pass_txt` varchar(20) NOT NULL,
  `IsActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`aid_txt`, `uid_txt`, `pass_txt`, `IsActive`) VALUES
(1, 'aayushi97shah@gmail.com', 'aayushi', 1),
(2, 'sonishilpi97@gmail.com', 'shilpi123', 1),
(3, 'shaikhrumeena97@gmail.com', 'sry1997', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE `allergy` (
  `allergy_id` int(3) NOT NULL,
  `aname_txt` varchar(20) NOT NULL,
  `status` varchar(7) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`allergy_id`, `aname_txt`, `status`, `doi`, `isactive`) VALUES
(1, 'abilify oral', 'active', '2017-03-29 17:33:13', 1),
(2, 'actos oral', 'active', '2017-03-29 17:33:37', 1),
(3, 'acyclovir oral', 'active', '2017-03-29 17:34:37', 1),
(4, 'adderall oral', 'active', '2017-03-29 17:34:59', 1),
(5, 'advair diskus inhala', 'active', '2017-03-29 17:36:02', 1),
(6, 'allopurinol oral', 'active', '2017-03-29 17:36:42', 1),
(7, 'alprazolam oral', 'active', '2017-03-29 17:37:05', 1),
(8, 'ambien oral', 'active', '2017-03-29 17:37:54', 1),
(9, 'amitriptyline oral', 'active', '2017-03-29 17:38:45', 1),
(10, 'amlodipine oral', 'active', '2017-03-29 17:39:29', 1),
(11, 'aricept oral', 'active', '2017-03-29 17:39:58', 1),
(12, 'ativan oral', 'active', '2017-03-29 17:40:30', 1),
(13, 'baclofen oral', 'active', '2017-03-29 17:40:51', 1),
(14, 'bactrim ds oral', 'active', '2017-03-29 17:41:09', 1),
(15, 'benicar oral', 'active', '2017-03-29 17:49:47', 1),
(16, 'carisoprdol oral', 'active', '2017-03-29 17:51:33', 1),
(17, 'celexa oral', 'active', '2017-03-29 17:51:54', 1),
(18, 'cipro oral', 'active', '2017-03-29 17:52:09', 1),
(19, 'clonidine hcl oral', 'active', '2017-03-29 17:52:34', 1),
(20, 'depakote oral', 'active', '2017-03-29 17:53:15', 1),
(21, 'dicyclomine oral', 'active', '2017-03-29 17:53:44', 1),
(22, 'effexor xr oral', 'active', '2017-03-29 17:54:04', 1),
(23, 'fenofibrate oral', 'active', '2017-03-29 17:54:45', 1),
(24, 'furosemide oral', 'active', '2017-03-29 17:55:46', 1),
(25, 'hydroxyzine hcl oral', 'active', '2017-03-29 17:56:56', 1),
(26, 'lamictal oral', 'active', '2017-03-29 17:57:13', 1),
(27, 'lasix oral', 'active', '2017-03-29 17:57:33', 1),
(28, 'lipitor oral', 'active', '2017-03-29 17:58:12', 1),
(29, 'lyrica oral', 'active', '2017-03-29 17:59:15', 1),
(30, 'macrobid oral', 'active', '2017-03-29 17:59:32', 1),
(31, 'methadone oral', 'active', '2017-03-29 18:00:05', 1),
(32, 'naproxen oral', 'active', '2017-03-29 18:01:43', 1),
(33, 'norvasc oral', 'active', '2017-03-29 18:02:05', 1),
(34, 'opana oral', 'active', '2017-03-29 18:02:29', 1),
(35, 'paxil oral', 'active', '2017-03-29 18:02:44', 1),
(36, 'percocet oral', 'active', '2017-03-29 18:03:03', 1),
(37, 'prozac oral', 'active', '2017-03-29 18:03:32', 1),
(38, 'reglan oral', 'active', '2017-03-29 18:03:56', 1),
(40, 'roxicodone oral', 'active', '2017-03-30 09:43:30', 1),
(41, 'skelaxin oral', 'active', '2017-03-30 09:44:40', 1),
(42, 'sulpha', 'active', '2017-03-30 09:45:59', 1),
(43, 'singulair oral', 'active', '2017-03-30 09:46:23', 1),
(44, 'soma oral', 'active', '2017-03-30 09:46:35', 1),
(45, 'tramadol oral', 'active', '2017-03-30 09:47:47', 1),
(46, 'tamoxifen oral', 'active', '2017-03-30 09:48:13', 1),
(47, 'ultram oral', 'active', '2017-03-30 09:48:27', 1),
(48, 'valium oral', 'active', '2017-03-30 09:48:43', 1),
(49, 'valtrex oral', 'active', '2017-03-30 09:49:02', 1),
(50, 'vistaril oral', 'active', '2017-03-30 09:49:25', 1),
(51, 'vyvanse oral', 'active', '2017-03-30 09:50:01', 1),
(52, 'warfarin oral', 'active', '2017-03-30 09:50:20', 1),
(53, 'wellbutrin xl oral', 'active', '2017-03-30 09:50:51', 1),
(54, 'xanax oral', 'active', '2017-03-30 09:51:11', 1),
(55, 'zolpidem oral', 'active', '2017-03-30 09:51:38', 1),
(56, 'zofran oral', 'active', '2017-03-30 09:51:59', 1),
(57, 'zocor oral', 'active', '2017-03-30 09:52:13', 1),
(58, 'robaxin oral', 'active', '2017-03-30 09:53:28', 1),
(59, 'savella oral', 'active', '2017-03-30 09:53:46', 1),
(60, 'nucynta oral', 'blocked', '2017-03-30 09:54:34', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `b_id` int(1) NOT NULL,
  `bname_txt` varchar(3) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`b_id`, `bname_txt`, `doi`) VALUES
(1, 'A+', '2017-02-28 18:56:12'),
(2, 'A-', '2017-02-28 18:57:07'),
(3, 'B+', '2017-02-28 18:57:28'),
(4, 'B-', '2017-02-28 18:57:40'),
(5, 'O+', '2017-02-28 18:57:54'),
(6, 'O-', '2017-02-28 18:58:08'),
(7, 'AB+', '2017-02-28 18:58:23'),
(8, 'AB-', '2017-02-28 18:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(3) NOT NULL,
  `cname_txt` varchar(20) NOT NULL,
  `status` varchar(7) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `cname_txt`, `status`, `doi`, `isactive`) VALUES
(1, 'ahmedabad', 'active', '2017-03-30 10:15:10', 1),
(2, 'surat', 'active', '2017-03-30 10:15:23', 1),
(3, 'vadodara', 'active', '2017-03-30 10:15:36', 1),
(4, 'rajkot', 'active', '2017-03-30 10:15:54', 1),
(5, 'bhavnagar', 'active', '2017-03-30 10:16:16', 1),
(6, 'jamnagar', 'active', '2017-03-30 10:16:28', 1),
(7, 'junagadh', 'active', '2017-03-30 10:18:09', 1),
(8, 'kutch', 'active', '2017-03-30 10:18:24', 1),
(9, 'kheda', 'active', '2017-03-30 10:18:33', 1),
(10, 'gandhinagar', 'active', '2017-03-30 10:18:48', 1),
(11, 'anand', 'active', '2017-03-30 10:18:58', 1),
(12, 'morbi', 'active', '2017-03-30 10:19:08', 1),
(13, 'surendranagar', 'active', '2017-03-30 10:19:23', 1),
(14, 'bharuch', 'active', '2017-03-30 10:19:36', 1),
(15, 'valsad', 'active', '2017-03-30 10:19:44', 1),
(16, 'navsari', 'active', '2017-03-30 10:19:55', 1),
(17, 'porbandar', 'active', '2017-03-30 10:20:10', 1),
(18, 'godhra', 'active', '2017-03-30 10:20:24', 1),
(19, 'veraval', 'active', '2017-03-30 10:21:03', 1),
(20, 'bhuj', 'active', '2017-03-30 10:21:49', 1),
(21, 'ankleshwar', 'active', '2017-03-30 10:22:03', 1),
(22, 'botad', 'active', '2017-03-30 10:22:12', 1),
(23, 'palanpur', 'active', '2017-03-30 10:22:24', 1),
(24, 'patan', 'active', '2017-03-30 10:22:35', 1),
(25, 'dahod', 'active', '2017-03-30 10:22:52', 1),
(26, 'jetpur', 'active', '2017-03-30 10:23:03', 1),
(27, 'kalol', 'active', '2017-03-30 10:23:16', 1),
(28, 'gondal', 'active', '2017-03-30 10:23:27', 1),
(29, 'amreli', 'active', '2017-03-30 10:23:39', 1),
(30, 'mehsana', 'active', '2017-03-30 10:23:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(3) NOT NULL,
  `dname_txt` varchar(20) NOT NULL,
  `status` varchar(7) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(3) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `dtype_id` int(3) NOT NULL,
  `dname_txt` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city_id` int(3) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `gender` int(1) NOT NULL,
  `age` int(3) NOT NULL,
  `b_id` int(1) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `sq_id` int(2) NOT NULL,
  `sq_ans` varchar(20) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `verification_code` int(6) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `profile_pic`, `dtype_id`, `dname_txt`, `address`, `city_id`, `contact_no`, `gender`, `age`, `b_id`, `user_id`, `password`, `c_password`, `sq_id`, `sq_ans`, `certificate`, `status`, `verification_code`, `isactive`, `doi`, `dou`) VALUES
(1, 'B612_20170104_141640_1483528578375.jpg', 4, 'Dr Shilpi Soni ', 'cgcvyhy', 1, '1234567809', 1, 26, 1, 'sonishilpi97@gmail.com', 'ss', 'ss', 2, 'yeh jawani hai deewa', 'B612_20170104_141517_1483528581359.jpg', 'active', 964152, 1, '2017-03-31 12:27:58', '2017-04-22 12:15:50'),
(2, 'gallery_02.png', 8, 'Dr dharmesh r shah', 'doctor house', 2, '9173679093', 1, 36, 6, 'aeroties786@gmail.com', 'dharmesh', 'dharmesh', 2, 'don', 'DCN ASSIGNMENT 1.pdf', 'active', 964152, 1, '2017-04-19 00:35:11', '2017-04-19 12:53:19'),
(3, 'gallery_02.png', 10, 'zsxdcf', 'cgchvh', 3, '9632145701', 1, 32, 5, 'ff@ff.com', 'ff', 'ff', 2, 'don', 'DCN Assignment - 2.pdf', 'block', 0, 2, '2017-04-21 18:07:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_type`
--

CREATE TABLE `doctor_type` (
  `dtype_id` int(3) NOT NULL,
  `dtname_txt` varchar(30) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_type`
--

INSERT INTO `doctor_type` (`dtype_id`, `dtname_txt`, `doi`, `isactive`) VALUES
(1, 'physician', '2017-03-02 11:42:58', 1),
(2, 'gynecologist', '2017-03-02 11:44:47', 1),
(4, 'pediatrician', '2017-03-02 11:45:41', 1),
(5, 'cardiologist', '2017-03-30 10:34:36', 1),
(6, 'dermatologist', '2017-03-30 10:35:36', 1),
(8, 'endocrinologist', '2017-03-30 10:37:22', 1),
(9, 'gastroenterologist', '2017-03-30 10:38:26', 1),
(10, 'neurologist', '2017-03-30 10:39:33', 1),
(11, 'neurological surgeon', '2017-03-30 10:42:04', 1),
(12, 'obstetrician', '2017-03-30 10:42:48', 1),
(13, 'oncologist', '2017-03-30 10:43:04', 1),
(15, 'orthopedic surgeon', '2017-03-30 10:43:48', 1),
(16, 'otolaryngologist', '2017-03-30 10:44:59', 1),
(17, 'plastic surgeon', '2017-03-30 10:45:30', 1),
(18, 'psychiatrist', '2017-03-30 10:46:13', 1),
(19, 'radiologist', '2017-03-30 10:46:40', 1),
(20, 'urologist', '2017-03-30 10:47:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(3) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `uname_txt` varchar(30) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `post_txt` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` varchar(8) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_id`, `uname_txt`, `usertype`, `post_txt`, `profile_pic`, `status`, `isactive`, `doi`, `dou`) VALUES
(1, 'aayushi97shah@gmail.com', 'aayushi', 'Patient', 'nice', 'c2.jpg', 'active', 1, '2017-03-31 10:33:43', '0000-00-00 00:00:00'),
(2, 'aayushi97shah@gmail.com', 'ayushi', 'Patient', 'bau srs 6', 'c1.jpg', 'active', 1, '2017-03-31 10:53:25', '0000-00-00 00:00:00'),
(4, 'aayushi97shah@gmail.com', 'karan shah', 'Patient', 'very good system', 'c3.jpg', 'active', 1, '2017-03-31 11:10:14', '0000-00-00 00:00:00'),
(5, 'aayushi97shah@gmail.com', 'ayushi', 'Patient', 'very nice', 'client_01.jpg', 'active', 1, '2017-04-19 09:12:05', '0000-00-00 00:00:00'),
(6, 'aeroties786@gmail.com', 'dr dharmesh', 'docotor', 'awesome', '', 'active', 1, '2017-04-19 11:29:12', '0000-00-00 00:00:00'),
(7, 'rumeenababi1997@gmail.com', 'roma', 'Laboratory', 'this site very much helpful for all users', 'client_01.jpg', 'blocked', 2, '2017-04-21 14:35:19', '0000-00-00 00:00:00'),
(8, 'rumeenababi1997@gmail.com', 'roma', 'Laboratory', 'this site very much helpful for all patients', 'client_01.jpg', 'blocked', 2, '2017-04-21 14:37:33', '0000-00-00 00:00:00'),
(9, 'aayushi97shah@gmail.com', 'aayushi', 'Patient', 'fiopadads', 'c11.jpg', 'blocked', 2, '2017-04-21 14:39:12', '0000-00-00 00:00:00'),
(10, 'aayush97soni@gmail.com', 'aayush', 'Patient', 'nice one. helpful to all', '20170102_122950.jpg', 'blocked', 2, '2017-04-21 14:53:28', '0000-00-00 00:00:00'),
(11, 'aayush97soni@gmail.com', 'dfgh', 'Patient', 'dfgh', '', 'blocked', 2, '2017-04-21 14:56:17', '0000-00-00 00:00:00'),
(12, 'aa@gmail.com', 'aayush', 'MedicalStore', 'helpful in imergency', '', 'blocked', 2, '2017-04-21 15:04:46', '0000-00-00 00:00:00'),
(13, 'aayushi97shah@gmail.com', 'Aayushi', 'Doctor', 'dgjjghfgd', 'IMG_20171029_163817.jpg', 'blocked', 2, '2017-12-28 00:37:07', '0000-00-00 00:00:00'),
(14, 'aayushi97shah@gmail.com', 'Aayushi', 'Doctor', 'ygjuho', 'IMG-20170426-WA0003.jpg', 'blocked', 2, '2017-12-28 00:40:07', '0000-00-00 00:00:00'),
(15, 'aayushi97shah@gmail.com', 'Aayushi', 'Doctor', 'ygjuhoknk', 'IMG-20170226-WA0026.jpg', 'blocked', 2, '2017-12-28 00:41:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `lab_id` int(3) NOT NULL,
  `lname_txt` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city_id` int(3) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `sq_id` int(2) NOT NULL,
  `sq_ans` varchar(20) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `verification_code` int(6) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`lab_id`, `lname_txt`, `address`, `city_id`, `contact_no`, `user_id`, `password`, `c_password`, `sq_id`, `sq_ans`, `certificate`, `status`, `verification_code`, `isactive`, `doi`, `dou`) VALUES
(1, 'unipath pathology', 'doctor house', 2, '9632108720', 'rumeenababi1997@gmail.com', 'rumeena', 'rumeena', 6, 'much', 'rum.jpg', 'active', 321456, 1, '2017-03-31 16:50:36', '0000-00-00 00:00:00'),
(2, 'dss', 'sdf', 2, '1234567890', 'saasd@gmail.com', '123', '123', 1, 'ds', '20170102_122950.jpg', 'blocked', 321456, 2, '2017-04-21 14:58:27', '2017-04-21 02:59:30'),
(3, 'matropolic phathology', 'nehrunagar', 2, '9173679093', 'sonishilpi97@gmail.com', 'shilpi', 'shilpi', 2, 'don', 'DCN Assignment - 2.pdf', 'active', 321456, 1, '2017-04-22 11:06:09', '2017-04-22 11:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `medical_store`
--

CREATE TABLE `medical_store` (
  `medi_id` int(3) NOT NULL,
  `mname_txt` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city_id` int(3) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `home_delivery` varchar(3) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `sq_id` int(2) NOT NULL,
  `sq_ans` varchar(20) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `verification_code` int(6) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_store`
--

INSERT INTO `medical_store` (`medi_id`, `mname_txt`, `address`, `city_id`, `contact_no`, `home_delivery`, `user_id`, `password`, `c_password`, `sq_id`, `sq_ans`, `certificate`, `status`, `verification_code`, `isactive`, `doi`, `dou`) VALUES
(1, 'hello', 'abhilasha complex', 2, '32941104', '2', 'poojan03@yahoo.com', 'poojan', 'poojan', 3, 'panipuri', 's.jpg', 'active', 321456, 1, '2017-03-31 17:37:50', '2017-04-04 11:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `my_case`
--

CREATE TABLE `my_case` (
  `Case_id` int(5) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `doctor_id` varchar(30) NOT NULL,
  `date_disease` date NOT NULL,
  `disname_txt` varchar(20) NOT NULL,
  `medname_txt` varchar(20) NOT NULL,
  `prescription` varchar(255) NOT NULL,
  `rname_txt` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_case`
--

INSERT INTO `my_case` (`Case_id`, `user_id`, `doctor_id`, `date_disease`, `disname_txt`, `medname_txt`, `prescription`, `rname_txt`, `description`, `isactive`, `doi`, `dou`) VALUES
(1, 'aayushi97shah@gmail.com', '', '2017-03-18', 'fever', 'metacine', 'IMG-20160624-WA0000.jpg', 'blood', 'hello', 1, '2017-03-31 15:30:43', '0000-00-00 00:00:00'),
(2, 'aayushi97shah@gmail.com', '', '2017-03-18', 'maleria', 'metacine', '', 'blood test', 'take medicines regularly', 1, '2017-03-31 15:59:53', '0000-00-00 00:00:00'),
(3, 'aayushi97shah@gmail.com', '', '2017-03-30', 'piliya', 'a\r\nb\r\nc\r\nd\r\n', '', 'a1\r\na2\r\na3\r\na4', '', 1, '2017-03-31 16:04:07', '0000-00-00 00:00:00'),
(4, 'rumeenababi1997@gmail.com', '', '2017-03-15', 'fever', 'metacine', '', 'blood', 'take rest', 1, '2017-03-31 16:12:07', '0000-00-00 00:00:00'),
(5, 'aayushi97shah@gmail.com', 'sonishilpi97@gmail.com', '2017-03-26', 'typhoid', 'dava', '', 'a\r\nb\r\nc\r\nd\r\n', 'report kadhavo', 1, '2017-03-31 16:27:41', '0000-00-00 00:00:00'),
(6, 'rumeenababi1997@gmail.com', '', '0000-00-00', '', '', '', '', '', 1, '2017-03-31 17:26:43', '0000-00-00 00:00:00'),
(7, 'sonishilpi97@gmail.com', '', '2017-04-03', 'fever', 'asd', '', 'asd\r\nrt\r\ner', 'asd', 1, '2017-04-04 11:03:45', '0000-00-00 00:00:00'),
(8, 'sonishilpi97@gmail.com', 'sonishilpi97@gmail.com', '2017-04-04', 'dialisis', 'asf', '', 'k\r\nsdf\r\nasd', 'adsg', 1, '2017-04-04 11:11:23', '0000-00-00 00:00:00'),
(9, 'aayushi97shah@gmail.com', '', '2017-04-01', 'fever', 'asdg', '', 'ddsf\r\nyds\r\ndyy', 'wfgg', 1, '2017-04-04 11:43:13', '0000-00-00 00:00:00'),
(10, 'aayushi97shah@gmail.com', '', '2012-07-22', 'malaria', 'mefloquine\r\nchloroqu', '', 'malaria\r\nurine\r\nblood\r\n', 'avoid cold drinks,ice-cream\r\ntaking nash', 1, '2017-04-19 08:37:36', '0000-00-00 00:00:00'),
(11, 'aayushi97shah@gmail.com', 'aeroties786@gmail.com', '2012-04-16', 'fever', 'chrosin\r\nvicsaction', '', '', 'avoid cold drink', 1, '2017-04-19 10:03:12', '0000-00-00 00:00:00'),
(12, 'poojan30@gmail.com', 'aeroties786@gmail.com', '2017-04-10', 'fever', 'crocin', '', 'urine test', '', 1, '2017-04-19 10:29:59', '0000-00-00 00:00:00'),
(20, 'aayushi97shah@gmail.com', 'sonishilpi97@gmail.com', '0000-00-00', 'viral', 'capsul', '', '', '', 1, '2017-04-21 13:28:02', '0000-00-00 00:00:00'),
(21, 'tejendra@tejendra.in', '', '2017-04-01', 'cancer', 'capsul', 'B612_20170104_141446_1483528588262.jpg', 'cancer', 'plz take medicine regularly', 1, '2017-04-22 12:07:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(4) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_id`, `user_type`, `isactive`) VALUES
(1, 'aayushi97shah@gmail.com', 'patient', 0),
(2, 'rumeenababi1997@gmail.com', 'patient', 0),
(3, 'aayushi97shah@gmail.com', 'feedback', 0),
(4, 'sonishilpi97@gmail.com', 'doctor', 0),
(5, 'rumeenababi1997@gmail.com', 'feedback', 0),
(6, 'aayushi97shah@gmail.com', 'feedback', 0),
(7, 'sonishilpi97@gmail.com', 'feedback', 0),
(8, 'sonishilpi97@gmail.com', 'feedback', 0),
(9, 'rumeenababi97@gmail.com', 'laboratory', 0),
(10, 'rumeenababi97@gmail.com', 'laboratory', 0),
(11, 'rumeenababi97@gmail.com', 'laboratory', 0),
(12, 'rumeenababi97@gmail.com', 'laboratory', 0),
(13, 'rumeenababi1997@gmail.com', 'laboratory', 0),
(14, 'rumeenababi1997@gmail.com', 'laboratory', 0),
(15, 'aayushi97shah@gmail.com', 'medical store', 0),
(16, 'sonishilpi97@gmail.com', 'feedback', 0),
(17, 'sonishilpi97@gmail.com', 'patient', 0),
(18, 'sonishilpi97@gmail.com', 'feedback', 0),
(19, 'pcparikh2000@hotmail.com', 'patient', 0),
(20, 'aeroties786@gmail.com', 'doctor', 0),
(21, 'aeroties786@gmail.com', 'doctor', 0),
(22, 'aayush97soni@gmail.com', 'patient', 0),
(23, 'aayush97soni@gmail.com', 'feedback', 0),
(24, 'saasd@gmail.com', 'laboratory', 0),
(25, 'aa@gmail.com', 'medical store', 0),
(26, 'aa@gmail.com', 'feedback', 0),
(27, 'bb@gmail.com', 'medical store', 0),
(28, 'cc@cc.com', 'medical store', 1),
(29, 'dd@dd.com', 'patient', 0),
(30, 'ee@ee.com', 'doctor', 1),
(31, 'ff@ff.com', 'medical store', 1),
(32, 'sonishilpi97@gmail.com', 'laboratory', 0),
(33, 'tejendra@tejendra.in', 'patient', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(3) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `pname_txt` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city_id` int(3) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `gender` int(1) NOT NULL,
  `age` int(3) NOT NULL,
  `b_id` int(3) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `sq_id` int(2) NOT NULL,
  `sq_ans` varchar(20) NOT NULL,
  `verification_code` int(6) NOT NULL,
  `status` varchar(10) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `profile_pic`, `pname_txt`, `address`, `city_id`, `contact_no`, `gender`, `age`, `b_id`, `user_id`, `password`, `c_password`, `sq_id`, `sq_ans`, `verification_code`, `status`, `isactive`, `doi`, `dou`) VALUES
(1, 'IMG_20170104_130802.jpg', 'aayushi shah', '97,shanti tower near manekbaghall', 1, '9173679093', 2, 21, 3, 'aayushi97shah@gmail.com', 'ayushi', 'ayushi', 5, 'jigna', 964152, 'active', 1, '2017-03-30 10:56:56', '2017-04-19 09:55:33'),
(2, 'c3.jpg', 'rumeena', 'shahpur', 1, '9723858081', 2, 21, 3, 'rumeenababi1997@gmail.com', 'rumeena', 'rumeena', 1, 'roma', 901023, 'active', 1, '2017-03-30 11:06:54', '0000-00-00 00:00:00'),
(4, 'logo.png', 'ruma', 'nehrunagar', 1, '2345678910', 1, 12, 3, 'poojan30@gmail.com', '123', '123', 4, 'football', 0, 'blocked', 2, '2017-04-04 11:28:01', '0000-00-00 00:00:00'),
(5, 'arrow.jpg', 'rumana', 'nehrunagar', 1, '2345678910', 1, 12, 3, 'pcparikh2000@hotmail.com', '123', '123', 4, 'football', 636987, 'blocked', 2, '2017-04-04 11:38:22', '2017-04-04 11:42:04'),
(7, 'IMG_2017-01-04_14-16-53_1483522593990.png', 'maulik', 'vadaj', 1, '8733907022', 1, 21, 1, 'maulikkhatri1996@gmail.com', 'maulik', 'maulik', 4, 'cricket', 321456, 'active', 1, '2017-04-19 10:27:16', '0000-00-00 00:00:00'),
(8, 'IMG_20170103_123040.jpg', 'priti', 'kalol', 6, '9909960201', 2, 52, 2, 'pritiprajapati44@gmail.com', 'priti', 'priti', 2, 'bahubali', 321456, 'active', 1, '2017-04-20 10:53:52', '0000-00-00 00:00:00'),
(9, 'IMG_20170104_122859.jpg', 'shlok shah', 'maninagar', 1, '9173679093', 1, 54, 2, 'sahilsurani84@yahoo.in', 'shlok', 'shlok', 1, 'bhailu', 321456, 'active', 1, '2017-04-20 11:02:26', '0000-00-00 00:00:00'),
(10, 'IMG_2017-01-03_09-39-58_1483416853404.png', 'jainam shah', 'krishnanagar', 2, '8460927750', 1, 65, 3, 'jainamshah942@gmail.com', 'jainam', 'jainam', 3, 'wafer', 321456, 'active', 1, '2017-04-20 11:07:07', '0000-00-00 00:00:00'),
(11, 'IMG_9517_1483412689740.jpg', 'rushabh shah', 'khadiya', 1, '8733097180', 1, 80, 4, 'princyshah94@gmail.com', 'rushabh', 'rushabh', 4, 'cricket', 321456, 'active', 1, '2017-04-20 11:13:55', '0000-00-00 00:00:00'),
(12, '20170102_122420.jpg', 'khushali', 'naroda', 1, '9723858081', 2, 19, 5, 'rumeenababi1997@gmail.com', 'khushali', 'khusali', 3, 'dabeli', 321456, 'active', 1, '2017-04-20 11:20:14', '0000-00-00 00:00:00'),
(13, '20170102_122950.jpg', 'sana', 'shahpur', 5, '9429304484', 2, 18, 1, 'sanachhipa10@gmail.com', 'sana', 'sana', 2, 'don', 321456, 'active', 1, '2017-04-20 11:25:49', '0000-00-00 00:00:00'),
(14, '20170102_122950.jpg', 'jfggfggfggigd', 'gbjbgju', 18, '9173679093', 1, 28, 5, 'aayush97soni@gmail.com', 'rumeena', 'rumeena', 5, 'nasrin', 321456, 'active', 1, '2017-04-21 14:49:52', '2017-04-21 02:50:23'),
(15, 'B612_20170104_141446_1483528588262.jpg', 'feik', 'cghvhy', 16, '9898744343', 2, 14, 6, 'dd@dd.com', 'dd', 'dd', 5, 'aa', 321456, 'active', 1, '2017-04-21 17:57:36', '2017-04-21 05:57:56'),
(16, 'B612_20170104_141446_1483528588262.jpg', 'sdfgh', 'hjgj', 3, '9842032145', 1, 88, 5, 'ee@ee.com', 'ee', 'ee', 4, 'hoki', 0, 'blocked', 2, '2017-04-21 18:01:00', '0000-00-00 00:00:00'),
(17, '1483418825149_tmp.jpg', 'pooja', 'nehrunagar', 1, '9879290570', 2, 20, 2, 'tejendra@tejendra.in', '123', '123', 1, 'tejendra', 987412, 'active', 1, '2017-04-22 11:59:07', '2017-04-22 12:02:47'),
(18, 'pic6.PNG', 'shilpi soni', '87,styakam society', 1, '9909960201', 2, 18, 3, 'soishilpi97@gmail.com', 'shilpi', 'shilpi', 1, 'filpi', 0, 'blocked', 2, '2018-02-22 15:00:23', '0000-00-00 00:00:00'),
(19, 'pic16.PNG', 'karan shah', '97 shanti', 2, '9157133600', 1, 12, 6, 'ks4582200@gmail.com', 'karan', 'karan', 4, 'cricket', 0, 'blocked', 2, '2018-02-22 22:13:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(5) NOT NULL,
  `case_id` int(5) NOT NULL,
  `rname_txt` varchar(30) NOT NULL,
  `report_result` varchar(255) NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `case_id`, `rname_txt`, `report_result`, `isactive`) VALUES
(1, 2, 'blood test', 'B612_20170104_141459_1483528586202.jpg', 1),
(2, 3, 'aa', 'B612_20170104_141507_1483528584898.jpg', 1),
(3, 3, 'a1', 'B612_20170104_141542_1483528580438.jpg', 1),
(4, 3, 'a2', 'B612_20170104_141556_1483528577171.jpg', 1),
(5, 4, 'blood', 'B612_20170104_141703_1483528579509.jpg', 1),
(6, 5, 'a', 'way.png', 1),
(7, 5, 'b', 'ul1.png', 1),
(8, 7, 'asd', 'fb1.png', 1),
(9, 7, 'asd', 'fb11.png', 1),
(10, 9, 'ddsf', 'or1.jpg', 1),
(11, 10, 'malaria', 'about_img_01.png', 1),
(12, 10, 'urine', 'DCN Assignment - 2.pdf', 1),
(13, 10, 'malaria', 'DCN ASSIGNMENT 1.pdf', 1),
(14, 21, 'cancer', 'DCN Assignment - 2.pdf', 1),
(15, 10, 'malaria', 'DCN Assignment - 2.pdf', 1),
(16, 1, 'asdfgh', 'Asdfghjdfghjm.doc', 1),
(17, 9, 'ddsf', 'Doc1.rar', 1),
(18, 9, 'sdfghjk', 'aayushi.zip', 1),
(19, 9, 'sdfghjkjkll', 'ELECTRIC CLOTHES.zip', 1),
(20, 9, 'sdfghjkjkllkll', 'models.zip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sequrity_question`
--

CREATE TABLE `sequrity_question` (
  `sq_id` int(2) NOT NULL,
  `question` varchar(50) NOT NULL,
  `status` varchar(7) NOT NULL,
  `doi` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `sequrity_question`
--

INSERT INTO `sequrity_question` (`sq_id`, `question`, `status`, `doi`, `dou`, `isactive`) VALUES
(1, 'what was your childhood nickname?', 'active', '2017-03-30 10:27:23.594100', '0000-00-00 00:00:00.000000', 1),
(2, 'what is your favorite movie?', 'active', '2017-03-30 10:28:05.495264', '0000-00-00 00:00:00.000000', 1),
(3, 'what is your favorite food?', 'active', '2017-03-30 10:28:17.838019', '0000-00-00 00:00:00.000000', 1),
(4, 'what is your favorite sports?', 'active', '2017-03-30 10:28:47.110437', '0000-00-00 00:00:00.000000', 1),
(5, 'what is your mother name?', 'active', '2017-03-30 10:30:11.817440', '0000-00-00 00:00:00.000000', 1),
(6, 'name of your favorite chocolate?', 'active', '2017-03-30 10:30:49.564905', '0000-00-00 00:00:00.000000', 1),
(7, 'which is your favorite car?', 'active', '2017-03-30 10:31:37.134616', '0000-00-00 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_allergy`
--

CREATE TABLE `user_allergy` (
  `uallergy_id` int(4) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `aname_txt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_allergy`
--

INSERT INTO `user_allergy` (`uallergy_id`, `user_id`, `aname_txt`) VALUES
(1, 'aayushi97shah@gmail.com', 'abilify oral'),
(2, 'aayushi97shah@gmail.com', 'clonidine hcl oral'),
(3, 'rumeenababi1997@gmail.com', 'baclofen oral'),
(4, 'rumeenababi1997@gmail.com', 'abilify oral'),
(5, 'sonishilpi97@gmail.com', 'amitriptyline oral'),
(6, 'aayushi97shah@gmail.com', 'carisoprdol oral');

-- --------------------------------------------------------

--
-- Table structure for table `user_vaccination`
--

CREATE TABLE `user_vaccination` (
  `uvacci_id` int(4) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `dateofvacci` date NOT NULL,
  `vname_txt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_vaccination`
--

INSERT INTO `user_vaccination` (`uvacci_id`, `user_id`, `dateofvacci`, `vname_txt`) VALUES
(1, 'aayushi97shah@gmail.com', '2000-07-22', 'polio'),
(2, 'aayushi97shah@gmail.com', '2003-07-22', 'polio'),
(3, 'rumeenababi1997@gmail.com', '2017-03-09', 'typhoid fever'),
(4, 'rumeenababi1997@gmail.com', '2017-03-09', 'typhoid fever'),
(5, 'sonishilpi97@gmail.com', '2017-04-01', 'tuberculosis'),
(6, 'aayushi97shah@gmail.com', '2017-04-06', 'chicken pox');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `vacci_id` int(3) NOT NULL,
  `vname_txt` varchar(20) NOT NULL,
  `status` varchar(7) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`vacci_id`, `vname_txt`, `status`, `doi`, `dou`, `isactive`) VALUES
(1, 'hepatitis B', 'active', '2017-03-30 09:58:05', '0000-00-00 00:00:00', 1),
(2, 'polio', 'active', '2017-03-30 09:58:20', '0000-00-00 00:00:00', 1),
(3, 'diptheria', 'active', '2017-03-30 09:59:20', '0000-00-00 00:00:00', 1),
(4, 'tetanus', 'active', '2017-03-30 09:59:34', '0000-00-00 00:00:00', 1),
(5, 'pertussis', 'active', '2017-03-30 10:00:09', '0000-00-00 00:00:00', 1),
(6, 'pneumonia', 'active', '2017-03-30 10:00:23', '0000-00-00 00:00:00', 1),
(7, 'tuberculosis', 'active', '2017-03-30 10:00:46', '0000-00-00 00:00:00', 1),
(8, 'haemophilus influenz', 'active', '2017-03-30 10:01:05', '0000-00-00 00:00:00', 1),
(9, 'measles', 'active', '2017-03-30 10:05:16', '0000-00-00 00:00:00', 1),
(10, 'mumps', 'active', '2017-03-30 10:05:30', '0000-00-00 00:00:00', 1),
(11, 'rubella', 'active', '2017-03-30 10:05:42', '0000-00-00 00:00:00', 1),
(12, 'typhoid fever', 'active', '2017-03-30 10:06:48', '0000-00-00 00:00:00', 1),
(13, 'hepatitis A', 'active', '2017-03-30 10:07:04', '0000-00-00 00:00:00', 1),
(14, 'chicken pox', 'active', '2017-03-30 10:07:18', '0000-00-00 00:00:00', 1),
(15, 'hpv infection and ce', 'active', '2017-03-30 10:09:23', '0000-00-00 00:00:00', 1),
(16, 'haemophilus influenz', 'active', '2017-03-30 10:11:06', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `id` int(2) NOT NULL,
  `code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`id`, `code`) VALUES
(0, 253148),
(1, 789654),
(2, 321456),
(3, 987412),
(4, 657214),
(5, 796513),
(6, 259874),
(7, 854623),
(8, 125479),
(9, 369742),
(10, 456128),
(11, 587431),
(12, 636987),
(13, 778822),
(14, 226611),
(15, 363537),
(16, 324789),
(17, 901023),
(18, 964152),
(19, 848682),
(20, 786512),
(21, 321485);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`aid_txt`);

--
-- Indexes for table `allergy`
--
ALTER TABLE `allergy`
  ADD PRIMARY KEY (`allergy_id`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doctor_type`
--
ALTER TABLE `doctor_type`
  ADD PRIMARY KEY (`dtype_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `medical_store`
--
ALTER TABLE `medical_store`
  ADD PRIMARY KEY (`medi_id`);

--
-- Indexes for table `my_case`
--
ALTER TABLE `my_case`
  ADD PRIMARY KEY (`Case_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `user_allergy`
--
ALTER TABLE `user_allergy`
  ADD PRIMARY KEY (`uallergy_id`);

--
-- Indexes for table `user_vaccination`
--
ALTER TABLE `user_vaccination`
  ADD PRIMARY KEY (`uvacci_id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`vacci_id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `aid_txt` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `allergy`
--
ALTER TABLE `allergy`
  MODIFY `allergy_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `b_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctor_type`
--
ALTER TABLE `doctor_type`
  MODIFY `dtype_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `lab_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medical_store`
--
ALTER TABLE `medical_store`
  MODIFY `medi_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `my_case`
--
ALTER TABLE `my_case`
  MODIFY `Case_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sequrity_question`
--
ALTER TABLE `sequrity_question`
  MODIFY `sq_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_allergy`
--
ALTER TABLE `user_allergy`
  MODIFY `uallergy_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_vaccination`
--
ALTER TABLE `user_vaccination`
  MODIFY `uvacci_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `vacci_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
