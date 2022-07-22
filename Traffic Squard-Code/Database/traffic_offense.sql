-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 05:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic offense`
--

-- --------------------------------------------------------

--
-- Table structure for table `offense committed`
--

CREATE TABLE `offense committed` (
  `O_R_id` int(50) NOT NULL,
  `user_id` int(30) NOT NULL,
  `Vehicle_Number` varchar(100) NOT NULL,
  `reported_date` date NOT NULL,
  `reporting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `district` varchar(300) NOT NULL,
  `Place` varchar(300) NOT NULL,
  `Offense` varchar(300) NOT NULL,
  `image` varchar(500) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offense committed`
--

INSERT INTO `offense committed` (`O_R_id`, `user_id`, `Vehicle_Number`, `reported_date`, `reporting_date`, `district`, `Place`, `Offense`, `image`, `Status`, `payment`) VALUES
(1, 2, 'KL01A0001', '2022-07-06', '2022-07-07 02:15:54', 'Idukki', 'KATTAPPANA', 'DANGEROUS DRIVING', 's7.jpg', 'Approved', 'Paid'),
(2, 5, 'KL01A0001', '2022-07-07', '2022-07-07 02:21:43', 'Idukki', 'AMAYAR', 'DRIVING WITHOUT LICENCE', 's5.jpg', 'Approved', 'unpaid'),
(3, 2, 'KL01A0002', '2022-07-01', '2022-07-11 06:38:10', 'Kottayam', 'PALA', 'DANGEROUS DRIVING', 'IMG_20190822_162843_926.jpg', 'Approved', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `c_date` date NOT NULL,
  `c_msg` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `c_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `r_id`, `c_date`, `c_msg`, `district`, `place`, `c_status`) VALUES
(1, 2, '2022-07-07', 'The Traffic Lights are not working', 'Idukki', 'KATTAPPANA', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `d_id` int(2) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`d_id`, `d_name`, `d_status`) VALUES
(1, 'Kasarkode', 1),
(2, 'Kannur', 1),
(3, 'Wayanad', 1),
(4, 'Kozhikode', 1),
(5, 'Malappuram', 1),
(6, 'Palakkad', 1),
(7, 'Thrissur', 1),
(8, 'Eranakulam', 1),
(9, 'Idukki', 1),
(10, 'Kottayam', 1),
(11, 'Alappuzha', 1),
(12, 'Pathanamthitta', 1),
(13, 'Kollam', 1),
(14, 'Thiruvanathapuram', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drivers`
--

CREATE TABLE `tbl_drivers` (
  `Driver_id` int(11) NOT NULL,
  `Drivername` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Vehicle_number` varchar(50) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `Gmail` varchar(30) NOT NULL,
  `Vehicle_Type` varchar(20) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_drivers`
--

INSERT INTO `tbl_drivers` (`Driver_id`, `Drivername`, `Gender`, `Vehicle_number`, `Phone_Number`, `Gmail`, `Vehicle_Type`, `district`) VALUES
(1, 'Arya Sasi', 'Female', 'KL01A0001', '9562540965', 'aryasasi1605@gmail.com', '2-Wheeler', 'Idukki'),
(2, 'Denno Sebastian', 'Male', 'KL01B0001', '9074490427', 'dennosebatian@gmail.com', '2-Wheeler', 'Kottayam'),
(3, 'Anilect Jose', 'Male', 'KL01C0001', '9074900427', 'anilectjose@gmail.com', '2-Wheeler', 'Wayanad'),
(4, 'Jisha Chacko', 'Female', 'KL01A0002', '9847131219', 'jisha@gmail.com', '4-Wheeler', 'Idukki'),
(5, 'Avani P A', 'Female', 'KL01A0003', '9495604737', 'avanipa@gmail.com', '2-Wheeler', 'Idukki'),
(6, 'Amal Vijayan', 'Male', 'KL01A0004', '9847131210', 'amal@gmail.com', '4-Wheeler', 'Idukki'),
(7, 'Aswin Raj', 'Male', 'KL01A0005', '9495894737', 'aswin99@gmail.com', '2-Wheeler', 'Idukki'),
(8, 'Ancy Alexander', 'Female', 'KL01A0006', '9074490427', 'ancy@gmail.com', '4-Wheeler', 'Idukki'),
(9, 'Arathy Anil', 'Female', 'KL01A0007', '9074400427', 'arathyanil@gmail.com', '2-Wheeler', 'Idukki'),
(10, 'Antony Mathew', 'Male', 'KL01A0008', '9074492327', 'antonymathew@gmail.com', '2-Wheeler', 'Idukki'),
(11, 'Akhila Antony', 'Female', 'KL01A0009', '9074030427', 'akhileant@gmail.com', '4-Wheeler', 'Idukki'),
(12, 'Arjun Ashokan', 'Male', 'KL01A0010', '9074230427', 'arjunashok@gmail.com', '2-Wheeler', 'Idukki'),
(13, 'Cheriyan Philip', 'Male', 'KL01A0011', '9074412327', 'cherianphilip@gmail.com', '2-Wheeler', 'Idukki'),
(14, 'John Alex', 'Male', 'KL01A0012', '8074490404', 'alexjohn@gmail.com', '4-Wheeler', 'Idukki'),
(15, 'Anto Anton', 'Male', 'KL01B0002', '9028490217', 'antoanton@gmail.com', '2-Wheeler', 'Kottayam'),
(16, 'Amalu Antony', 'Female', 'KL01B0003', '9028120217', 'amaluantony@gmail.com', '4-Wheeler', 'Kottayam'),
(17, 'Arjun Varghese', 'Male', 'KL01B0004', '9028490017', 'arjunvarshese@gmail.com', '3-Wheeler', 'Kottayam'),
(18, 'Anu Antony', 'Female', 'KL01B0005', '9028290217', 'anuantony1999@gmail.com', '2-Wheeler', 'Kottayam'),
(19, 'Ammu Sudarsan', 'Female', 'KL01B0006', '7028400217', 'ammusudarsan19@gmail.com', '2-Wheeler', 'Kottayam'),
(20, 'Amalu Monicahan', 'Female', 'KL01B0007', '7028120217', 'amalumonichan@gmail.com', '4-Wheeler', 'Kottayam'),
(21, 'varshan Varghese', 'Male', 'KL01B0008', '8928490017', 'varshanvarshese@gmail.com', '2-Wheeler', 'Kottayam'),
(22, 'Aron Antony', 'Male', 'KL01B0009', '9028091217', 'aronantony1999@gmail.com', '2-Wheeler', 'Kottayam'),
(23, 'Aromal Sajeev', 'Male', 'KL01C0002', '9562540921', 'aromalsje98@gmail.com', '2-Wheeler', 'Wayanad'),
(24, 'Akshay Saji', 'Male', 'KL01C0003', '9562542121', 'akshaysaji@gmail.com', '4-Wheeler', 'Wayanad'),
(25, 'Parvathy Manoj', 'Female', 'KL01C0004', '9538540921', 'parvathymanoj@gmail.com', '2-Wheeler', 'Wayanad'),
(26, 'Amal Vijayan', 'Male', 'KL01C0005', '7562540921', 'amalvijayan@gmail.com', '2-Wheeler', 'Wayanad'),
(27, 'Aparna Biju', 'Female', 'KL01C0006', '9562190921', 'aparnabiju@gmail.com', '2-Wheeler', 'Wayanad'),
(29, 'Arom Prekash', 'Male', 'KL01C0007', '9563240921', 'aromprekash@gmail.com', '2-Wheeler', 'Wayanad'),
(30, 'Akshay Presannan', 'Male', 'KL01C0008', '9560942121', 'akshay87@gmail.com', '4-Wheeler', 'Wayanad'),
(31, 'Parvathy Manoj', 'Female', 'KL01C0009', '9531140921', 'parvathymanoj@gmail.com', '2-Wheeler', 'Wayanad'),
(32, 'Manoj C K', 'Male', 'KL01C0010', '7562510921', 'manojck@gmail.com', '3-Wheeler', 'Wayanad'),
(33, 'Maneesha Manual', 'Female', 'KL01C0011', '9586190921', 'maneeshamanual@gmail.com', '2-Wheeler', 'Wayanad'),
(39, 'Abin Antony', 'Male', 'KL01C0012', '9763240921', 'abinantony@gmail.com', '2-Wheeler', 'Wayanad'),
(40, 'Aravind Presannan', 'Male', 'KL01C0013', '9260942121', 'aravindp@gmail.com', '4-Wheeler', 'Wayanad'),
(41, 'Parvathy Subash', 'Female', 'KL01C0014', '9031140921', 'parvathy99@gmail.com', '2-Wheeler', 'Wayanad'),
(42, 'Vasavan A K', 'Male', 'KL01C0015', '8562510921', 'vasavan@gmail.com', '3-Wheeler', 'Wayanad'),
(43, 'Maneesh Shaji', 'Female', 'KL01C0016', '9096190921', 'maneesha@gmail.com', '2-Wheeler', 'Wayanad'),
(49, 'Amal Prekash', 'Male', 'KL01A0013', '9563240921', 'amalprekash@gmail.com', '2-Wheeler', 'Idukki'),
(50, 'Akshay saji', 'Male', 'KL01A0014', '9560902121', 'akshaysaji7@gmail.com', '2-Wheeler', 'Idukki'),
(51, 'Parvathy Nair', 'Female', 'KL01A0015', '9531140921', 'parvathy828@gmail.com', '2-Wheeler', 'Idukki'),
(52, 'Manoj A K', 'Male', 'KL01A0016', '7562500921', 'manojak@gmail.com', '3-Wheeler', 'Idukki'),
(53, 'Maneesha V R', 'Female', 'KL01A0017', '9586100921', 'maneesha2@gmail.com', '2-Wheeler', 'Idukki'),
(54, 'Noel Ipe Johnson', 'Male', 'KL01A1995', '8075779600', 'noeljohnson934@gmail.com', '2-Wheeler', 'Idukki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `f_date` date NOT NULL,
  `f_msg` varchar(200) NOT NULL,
  `f_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `r_id`, `f_date`, `f_msg`, `f_status`) VALUES
(1, 1, '2022-07-06', 'Helpful', 1),
(2, 2, '2022-07-11', 'Good', 1),
(3, 6, '2022-07-07', 'GOOD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `role_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `l_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `uname`, `pwd`, `role_id`, `r_id`, `l_status`) VALUES
(1, 'Admin', 'Admin@123', 0, 0, '0'),
(2, 'ancyalexander2022a@mca.ajce.in', 'f0b1c27e5f1a2d6382ef509616445e7e', 1, 1, 'Active'),
(3, 'aryasasi1605@gmail.com', '639330ee89fba79868f056baa5d2731c', 1, 2, 'Active'),
(4, 'midhunmnair@gmail.com', 'd17cba567811e0ea7a2fd8acf19b94fb', 1, 3, 'Active'),
(5, 'gopumanoj@gmail.com', 'fb118f5526164ac69d4410dce94a7c17', 1, 4, 'Active'),
(6, 'aryasasi2022a@mca.ajce.in', '9562540965', 2, 5, 'Active'),
(7, '1@gmail.com', '2bd85a595c07e349b1258ac2bc2cc72f', 1, 6, 'Active'),
(8, 'anilectjse98@gmail.com', '9d0dfa11b6a04bdef5ad89311f25a356', 1, 7, 'Active'),
(9, 'abisha224199@gmail.com', '1910983e2f44fb835266e129cfc17505', 1, 8, 'Active'),
(10, 'ancyalexandera149@gmail.com', '9562540965', 2, 9, 'Active'),
(11, 'noeljohnson934@gmail.com', '632ac7cdde62922042a82c52b73e3bfe', 1, 10, 'Active'),
(12, 'dennaoseban@gmail.com', 'fb188379fbb71baf7b15969e9d04821b', 1, 11, 'Active'),
(13, 'ponnumathew@gmail.com', 'f111b4a769e56ec3c54853efa4f94f5a', 1, 12, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `Notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`Notification_id`, `user_id`, `notification`) VALUES
(1, 2, 'You reported a fake offence..n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offense`
--

CREATE TABLE `tbl_offense` (
  `o_id` int(50) NOT NULL,
  `offense` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_offense`
--

INSERT INTO `tbl_offense` (`o_id`, `offense`, `description`, `amount`) VALUES
(2, 'DANGEROUS DRIVING', 'LICENCE SEIZURE, AND/OR 6 MONTHS TO 1 YEAR IN PRISON', 2000),
(3, 'DRIVING WITHOUT LICENCE', 'COMMUNITY SERVICE', 2000),
(4, 'DRIVING WITHOUT HELMET ', 'ALL SHOULD WEAR HELMETS WHILE DRIVNG 2 WHEELERS', 500),
(11, 'OVERLOADING 2-WHEELERS', 'MORE THAN 2 PERSONS ARE ONLY ALLOWED', 500),
(12, 'NO PARKING 4-WHEELERS IN ROAD SIDE  ', 'NOT ALLOWED TO PARK 4-WHEELER ON PUBLIC ROAD SIDES', 500),
(16, 'NO PARKING 2-WHEELERS IN ROAD SIDE  ', 'NO PARKING 2-WHEELERS IN ROAD SIDE IS STRICTLY PROHIBITED  ', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_officer`
--

CREATE TABLE `tbl_officer` (
  `o_id` int(30) NOT NULL,
  `r_id` int(30) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_lname` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_dob` date NOT NULL,
  `r_gender` varchar(200) NOT NULL,
  `r_phone` varchar(200) NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `district` varchar(30) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_officer`
--

INSERT INTO `tbl_officer` (`o_id`, `r_id`, `r_name`, `r_lname`, `r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `district`, `r_image`, `r_status`) VALUES
(1, 5, 'Arya', 'Sasi', 'Aryabhavan', '1999-05-16', 'female', '9562540965', 'aryasasi2022a@mca.ajce.in', 'Idukki', 'download.jpg', 2),
(2, 9, 'Ancy', 'Alexander', 'Ancybhavan', '1999-09-14', 'female', '9562540965', 'ancyalexandera149@gmail.com', 'Kollam', 'IMG_20190821_071036_640.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `r_id` int(100) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_lname` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_dob` date NOT NULL,
  `r_gender` varchar(200) NOT NULL,
  `r_phone` varchar(200) NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`r_id`, `r_name`, `r_lname`, `r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `r_image`, `r_status`) VALUES
(1, 'Ancy', 'Alexander', 'Ancybhavan', '1998-09-14', 'female', '9562540965', 'ancyalexander2022a@mca.ajce.in', 'ANCY.png', 1),
(2, 'Arya', 'Sasi', 'Mettinpurathu', '1999-05-16', 'female', '9562540965', 'aryasasi1605@gmail.com', 'IMG_20190529_003236.jpg', 1),
(3, 'Midhun', 'Nair', 'Midhulam', '1999-08-13', 'male', '7510449317', 'midhunmnair@gmail.com', 'IMG-20191001-WA0006.jpg', 1),
(4, 'Gopu', 'Manoj', 'Gokulam', '1999-11-07', 'male', '7025838711', 'gopumanoj@gmail.com', 'FB_IMG_15709305107798520.jpg', 1),
(5, 'Arya', 'Sasi', 'Aryabhavan', '1999-05-16', 'female', '9562540965', 'aryasasi2022a@mca.ajce.in', 'download.jpg', 2),
(6, 'Amal', 'Jose', 'Abc house', '2004-02-29', 'male', '9847131219', '1@gmail.com', 'athu.JPG', 1),
(7, 'Anilect', 'Jose', 'Anibhavan', '1998-09-16', 'male', '9562540965', 'anilectjse98@gmail.com', 'IMG_20200222_142911.jpg', 1),
(8, 'Abisha', 'Accamma', 'Abishabhavan', '1999-03-26', 'female', '9074409027', 'abisha224199@gmail.com', 'Anuzz 20200313_143617.jpg', 1),
(9, 'Ancy', 'Alexander', 'Ancybhavan', '1999-09-14', 'female', '9562540965', 'ancyalexandera149@gmail.com', 'IMG_20190821_071036_640.jpg', 2),
(10, 'Noel', 'Ipe johnson', 'Panamthanam', '1999-10-27', 'male', '8075779600', 'noeljohnson934@gmail.com', 'IMG-20190805-WA0014.jpg', 1),
(11, 'Denno', 'Sebastian ', 'Chettumadayil House', '1999-06-17', 'male', '9074490427', 'dennaoseban@gmail.com', 'FB_IMG_15777806907821570.jpg', 1),
(12, 'Ponnu', 'Mathew ', 'Ponnubhavan', '1999-12-18', 'female', '9562540945', 'ponnumathew@gmail.com', 'ponnu.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role`) VALUES
(0, 'Admin'),
(1, 'User'),
(2, 'Officer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule`
--

CREATE TABLE `tbl_rule` (
  `rule_id` int(11) NOT NULL,
  `rule` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rule`
--

INSERT INTO `tbl_rule` (`rule_id`, `rule`) VALUES
(2, 'AVOID OVERTAKING 4-WHEELERS AS IT MAY RESULT IN SERIOUS INJURIES'),
(3, 'WEAR YOUR SEATBELT WHILE DRIVING  4-WHEELERS.'),
(10, 'DO NOT OVERLOAD OUR VEHICLE.'),
(11, 'TRAIN YOURSELF TO EXPECT THE UNEXPECTED BY THINKING AHEAD AND ANTICIPATING FUTURE COURSE OF EVENTS.'),
(17, 'WHILE RIDING 2-WHEELER WEAR HELMETS'),
(18, 'DO NOT DRINK AND DRIVE  VEHICLES ESPECIALLY 2-WHEELERS'),
(19, 'USING A MOBILE PHONE WHILE RIDING 2-WHEELERS AND 4-WHEELER ARE STRICTLY PROHIBITED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(30) NOT NULL,
  `r_id` int(100) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_lname` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_dob` date NOT NULL,
  `r_gender` varchar(200) NOT NULL,
  `r_phone` varchar(200) NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `district` varchar(30) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `r_id`, `r_name`, `r_lname`, `r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `district`, `r_image`, `r_status`) VALUES
(1, 1, 'Ancy', 'Alexander', 'Ancybhavan', '1998-09-14', 'female', '9562540965', 'ancyalexander2022a@mca.ajce.in', 'Kollam', 'ANCY.png', 1),
(2, 2, 'Arya', 'Sasi', 'Mettinpurathu', '1999-05-16', 'female', '9562540965', 'aryasasi1605@gmail.com', 'Idukki', 'IMG_20190529_003236.jpg', 1),
(3, 3, 'Midhun', 'Nair', 'Midhulam', '1999-08-13', 'male', '7510449317', 'midhunmnair@gmail.com', 'Idukki', 'IMG-20191001-WA0006.jpg', 1),
(4, 4, 'Gopu', 'Manoj', 'Gokulam', '1999-11-07', 'male', '7025838711', 'gopumanoj@gmail.com', 'Idukki', 'FB_IMG_15709305107798520.jpg', 1),
(5, 6, 'Amal', 'Jose', 'Abc house', '2004-02-29', 'male', '9847131219', '1@gmail.com', 'Wayanad', 'athu.JPG', 1),
(6, 7, 'Anilect', 'Jose', 'Anibhavan', '1998-09-16', 'male', '9562540965', 'anilectjse98@gmail.com', 'Wayanad', 'IMG_20200222_142911.jpg', 1),
(7, 8, 'Abisha', 'Accamma', 'Abishabhavan', '1999-03-26', 'female', '9074409027', 'abisha224199@gmail.com', 'Kottayam', 'Anuzz 20200313_143617.jpg', 1),
(8, 10, 'Noel', 'Ipe johnson', 'Panamthanam', '1999-10-27', 'male', '8075779600', 'noeljohnson934@gmail.com', 'Idukki', 'IMG-20190805-WA0014.jpg', 1),
(9, 11, 'Denno', 'Sebastian ', 'Chettumadayil House', '1999-06-17', 'male', '9074490427', 'dennaoseban@gmail.com', 'Idukki', 'FB_IMG_15777806907821570.jpg', 1),
(10, 12, 'Ponnu', 'Mathew ', 'Ponnubhavan', '1999-12-18', 'female', '9562540945', 'ponnumathew@gmail.com', 'Idukki', 'ponnu.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offense committed`
--
ALTER TABLE `offense committed`
  ADD PRIMARY KEY (`O_R_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_drivers`
--
ALTER TABLE `tbl_drivers`
  ADD PRIMARY KEY (`Driver_id`),
  ADD UNIQUE KEY `Vehicle_number` (`Vehicle_number`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`Notification_id`);

--
-- Indexes for table `tbl_offense`
--
ALTER TABLE `tbl_offense`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_officer`
--
ALTER TABLE `tbl_officer`
  ADD PRIMARY KEY (`o_id`),
  ADD UNIQUE KEY `r_id` (`r_id`) USING BTREE;

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `r_id` (`r_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offense committed`
--
ALTER TABLE `offense committed`
  MODIFY `O_R_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `d_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_drivers`
--
ALTER TABLE `tbl_drivers`
  MODIFY `Driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `Notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_offense`
--
ALTER TABLE `tbl_offense`
  MODIFY `o_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_officer`
--
ALTER TABLE `tbl_officer`
  MODIFY `o_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
