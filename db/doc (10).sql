-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 05:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` text NOT NULL,
  `a_email` text NOT NULL,
  `a_password` text NOT NULL,
  `a_ip` text NOT NULL,
  `a_data` text NOT NULL,
  `a_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_uid` int(11) NOT NULL,
  `b_did` int(11) NOT NULL,
  `b_date` text NOT NULL,
  `b_day` text NOT NULL,
  `b_time` text NOT NULL,
  `b_bookingtime` text NOT NULL,
  `b_bookingip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` text NOT NULL,
  `c_issue` text NOT NULL,
  `c_phno` text NOT NULL,
  `c_date` text NOT NULL,
  `c_time` text NOT NULL,
  `c_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `d_type` text NOT NULL,
  `d_name` text NOT NULL,
  `d_email` text NOT NULL,
  `d_password` text NOT NULL,
  `d_specialization` text NOT NULL,
  `d_address` text NOT NULL,
  `d_blood` text NOT NULL,
  `d_date` text NOT NULL,
  `d_time` text NOT NULL,
  `d_ip` text NOT NULL,
  `d_file1` text NOT NULL,
  `d_file2` text NOT NULL,
  `d_file3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `droutine`
--

CREATE TABLE `droutine` (
  `dr_id` int(11) NOT NULL,
  `dr_date` text NOT NULL,
  `dr_day` text NOT NULL,
  `dr_0608` text NOT NULL,
  `dr_0810` text NOT NULL,
  `dr_1012` text NOT NULL,
  `dr_1214` text NOT NULL,
  `dr_1416` text NOT NULL,
  `dr_1618` text NOT NULL,
  `dr_1820` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `droutine`
--

INSERT INTO `droutine` (`dr_id`, `dr_date`, `dr_day`, `dr_0608`, `dr_0810`, `dr_1012`, `dr_1214`, `dr_1416`, `dr_1618`, `dr_1820`) VALUES
(1, '1', 'monday\r\n', '', '', '', '', '', '', ''),
(2, '2', 'tuesday', '', '', '', '', '', '', ''),
(3, '3', 'wednesday', '', '', '', '', '', '', ''),
(4, '4', 'thursday', '', '', '', '', '', '', ''),
(5, '5', 'thursday', '', '', '', '', '', '', ''),
(6, '6', 'saturday', '', '', '', '', '', '', ''),
(7, '7', 'sunday', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_uid` int(11) NOT NULL,
  `f_did` int(11) NOT NULL,
  `f_msg` text NOT NULL,
  `f_date` text NOT NULL,
  `f_time` text NOT NULL,
  `f_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `s_id` int(11) NOT NULL,
  `s_specialization` text NOT NULL,
  `s_symptoms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`s_id`, `s_specialization`, `s_symptoms`) VALUES
(1, 'general physician', 'headache'),
(2, 'general physician', 'fever'),
(3, 'general physician', 'blood pressure'),
(4, 'dermatologist', 'acne'),
(5, 'dermatologist', 'face tan'),
(6, 'dermatologist', 'itching rashes'),
(7, 'dermatologist', 'hair fall'),
(8, 'dermatologist', 'pimple'),
(9, 'dermatologist', 'anti aging'),
(10, 'dermatologist', 'scar'),
(11, 'physiotherapist', 'shoulder pain'),
(12, 'physiotherapist', 'back pain'),
(13, 'physiotherapist', 'arm pain'),
(14, 'physiotherapist', 'hand injuries'),
(15, 'physiotherapist', 'wrist injuries'),
(16, 'gynecologist', 'maternal care'),
(17, 'gynecologist', 'infertility'),
(18, 'gynecologist', 'laparoscopic surgeon '),
(19, 'gastroenterologist', 'diarrhea'),
(20, 'gastroenterologist', 'jaundice'),
(21, 'gastroenterologist', 'stomach upset'),
(22, 'gastroenterologist', 'nausea'),
(23, 'gastroenterologist', 'vomiting'),
(24, 'gastroenterologist', 'ulcer'),
(25, 'pediatric', 'newborn jaundice'),
(26, 'pediatric', 'infertility'),
(27, 'pediatric', 'maternal care,infertility, laparoscopic surgeon,'),
(28, 'pediatric', 'childhood infection'),
(29, 'pediatric', 'attention deficit'),
(30, 'pediatric', 'vaccination'),
(31, 'pediatric', 'child fever'),
(32, 'dentist', 'toothache'),
(33, 'dentist', 'sensitive teeth'),
(34, 'dentist', 'jaw pain'),
(35, 'dentist', 'tooth cavity'),
(36, 'cardiologist', 'heart failure'),
(37, 'cardiologist', 'high blood pressure'),
(38, 'cardiologist', 'heart attack'),
(39, 'nephrologist', 'spinal tumor'),
(40, 'nephrologist', 'strokes'),
(41, 'nephrologist', 'epilepsy'),
(42, 'nephrologist', 'alzheimer '),
(43, 'oncologist', 'cancer'),
(44, 'immunologist', 'asthma'),
(45, 'immunologist', 'eczema'),
(46, 'immunologist', 'food alergy'),
(47, 'immunologist', 'insect sting allergy'),
(48, 'ENT', 'hearing disorder'),
(49, 'ENT', 'ear infection'),
(50, 'ENT', 'balance disorder'),
(51, 'ENT', 'nasal cavity'),
(52, 'ENT', 'para nasal sinus'),
(53, 'ENT', 'disease  of larynx'),
(54, 'ENT', 'disease of upper aero digestive'),
(55, 'ENT', 'disorder of voice respiration'),
(56, 'ENT', 'disorder of swallowing'),
(57, 'hematology', 'anemia'),
(58, 'hematology', 'weakness'),
(59, 'hematology', 'shortness of breath'),
(60, 'hematology', 'decrease of blood cell'),
(61, 'hematology', 'decrease of white blood cell');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uhistory`
--

CREATE TABLE `uhistory` (
  `uh_id` int(11) NOT NULL,
  `uh_uid` int(11) NOT NULL,
  `uh_did` int(11) NOT NULL,
  `uh_issue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `u_password` text NOT NULL,
  `u_dob` text NOT NULL,
  `u_address` text NOT NULL,
  `u_state` text NOT NULL,
  `u_dist` text NOT NULL,
  `u_city` text NOT NULL,
  `u_pin` text NOT NULL,
  `u_blood` text NOT NULL,
  `u_pic` text NOT NULL,
  `u_location` text NOT NULL,
  `u_time` text NOT NULL,
  `u_date` text NOT NULL,
  `u_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `droutine`
--
ALTER TABLE `droutine`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uhistory`
--
ALTER TABLE `uhistory`
  ADD PRIMARY KEY (`uh_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `droutine`
--
ALTER TABLE `droutine`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uhistory`
--
ALTER TABLE `uhistory`
  MODIFY `uh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
