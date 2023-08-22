-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 09:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(10) UNSIGNED NOT NULL,
  `vaccine_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_name` varchar(250) NOT NULL,
  `pemail` varchar(250) NOT NULL,
  `p_address` varchar(250) NOT NULL,
  `p_phonenumber` varchar(250) NOT NULL,
  `p_pic` varchar(250) NOT NULL,
  `h_id` bigint(20) UNSIGNED NOT NULL,
  `diseas` varchar(250) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `vaccine_name`, `patient_name`, `pemail`, `p_address`, `p_phonenumber`, `p_pic`, `h_id`, `diseas`, `appointment_date`, `appointment_status`, `created_at`) VALUES
(6, '5', 'ibrahim', 'imh774077@gmail.com', 'korangi', '1234567876', 'patientimg/ae__correo gold.jpg', 4, 'khansi', '2023-09-09', 0, '2023-08-11 16:30:42'),
(9, '5', 'Mobile', 'misbah@gmail.com', 'karachi', '1234567899876', 'patientimg/tF__gold blue.jpg', 8, 'corona', '2023-09-08', 0, '2023-08-11 18:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `dname` varchar(250) NOT NULL,
  `d_Specialization` varchar(250) NOT NULL,
  `dgander` varchar(50) NOT NULL,
  `d_pic` varchar(250) NOT NULL,
  `dpnumber` varchar(15) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `hid` int(11) NOT NULL,
  `dstatus` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `d_Specialization`, `dgander`, `d_pic`, `dpnumber`, `demail`, `hid`, `dstatus`, `created_at`) VALUES
(9, 'ibrahim', 'General Surgeon', 'm', 'doctorimg/eV__Screenshot 2023-02-14 201716.png', '989097878', 'imh774077@gmail.com', 8, 1, '2023-08-02 00:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `haddress` varchar(500) NOT NULL,
  `hcity` varchar(50) NOT NULL,
  `hpnumber` varchar(25) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `h_pic` varchar(250) NOT NULL,
  `hwebsite` varchar(250) NOT NULL,
  `hstatus` tinyint(1) NOT NULL DEFAULT 1,
  `roll` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `haddress`, `hcity`, `hpnumber`, `hemail`, `h_pic`, `hwebsite`, `hstatus`, `roll`, `created_at`) VALUES
(4, 'Indus Hospital', 'Plot C-76, Sector 31/5, Opposite Darussalam Society Korangi Crossing, Karachi -75190, Pakistan', 'karachi', '92213511270917', 'crd@tih.org.pk', 'hospitalimg/fN__indus.jpg', 'https://indushospital.org.pk/', 1, 2, '2023-07-20 18:32:08'),
(8, 'Jinah Hospital', 'Rafiqui, Sarwar Shaheed Rd, Karachi Cantonment, Karachi, Karachi City, Sindh 75510', 'Karachi', '02199201300', 'ed@jpmc.edu.pk', 'hospitalimg/cE__jinah.jpg', 'https://www.jpmc.edu.pk/contact.php', 1, 0, '2023-07-29 12:29:48'),
(9, 'Aga Khan Hospital', 'Stadium Road, P.O. Box 3500\r\nKarac​​​hi 74800, Pakistan', 'Karachi', '92 21 111-911-911', 'aga@gmail.com', 'hospitalimg/fm__aga.jpg', 'https://hospitals.aku.edu', 0, 0, '2023-08-02 23:54:34'),
(10, 'Jinah Hospital', 'M A JINAAH ROAD KARACHI STREET 25 NER ALAALMGIR ROAD', 'islamabad', '8798756537668', 'imh774077@gmail.com', 'hospitalimg/51__jinah.jpg', 'https://www.jpmc.edu.pk/contact.php', 1, 0, '2023-08-03 17:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `patient_report`
--

CREATE TABLE `patient_report` (
  `report_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `diseases` varchar(250) NOT NULL,
  `Vaccination_Date` date NOT NULL,
  `Dose_Number` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_report`
--

INSERT INTO `patient_report` (`report_id`, `test_id`, `appointment_id`, `hid`, `vid`, `diseases`, `Vaccination_Date`, `Dose_Number`) VALUES
(1, 1, 1, 1, 3, 'corona', '2023-08-14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient_tests`
--

CREATE TABLE `patient_tests` (
  `test_id` int(10) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `test_date` date NOT NULL,
  `test_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_tests`
--

INSERT INTO `patient_tests` (`test_id`, `appointment_id`, `test_date`, `test_status`, `created_at`) VALUES
(1, 1, '2023-08-16', 1, '2023-08-08 20:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) UNSIGNED NOT NULL,
  `uname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uemail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `upassword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `roll` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `uemail`, `upassword`, `created_at`, `roll`) VALUES
(1, 'ibrahim', 'imh774077@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-23 11:33:46', 1),
(3, 'misbah', 'misbah@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-28 15:31:04', 0),
(4, 'ibrahim', 'imh774077@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-28 15:34:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_Manufacturer` varchar(50) NOT NULL,
  `v_Batch_Number` varchar(50) NOT NULL,
  `v_Expiration_Date` date NOT NULL,
  `v_Recommended_Age` varchar(20) NOT NULL,
  `v_Dose_Count` int(11) NOT NULL,
  `v_status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`v_id`, `v_name`, `v_Manufacturer`, `v_Batch_Number`, `v_Expiration_Date`, `v_Recommended_Age`, `v_Dose_Count`, `v_status`, `created_at`) VALUES
(2, 'jjjikmk', 'njnjm', '89887', '2023-07-12', '30', 1, 1, '2023-07-17 23:11:00'),
(5, 'sainovac', 'sainofarm', '878778', '2023-07-31', '20', 1, 1, '2023-08-04 23:28:52'),
(6, 'sainovac', 'sainofarm', '8988711', '2023-08-01', '18', 2, 0, '2023-08-04 23:29:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `patient_report`
--
ALTER TABLE `patient_report`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `patient_tests`
--
ALTER TABLE `patient_tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_tests`
--
ALTER TABLE `patient_tests`
  MODIFY `test_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
