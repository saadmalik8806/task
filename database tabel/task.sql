-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 05:20 PM
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
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_profile`
--

CREATE TABLE `employee_profile` (
  `id` int(255) NOT NULL,
  `EP_name` varchar(255) NOT NULL,
  `EP_D_O_B` varchar(255) NOT NULL,
  `EP_family_background` varchar(255) NOT NULL,
  `PI_1` varchar(255) NOT NULL,
  `PI_2` varchar(255) NOT NULL,
  `PI_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_info_sheet`
--

CREATE TABLE `emp_info_sheet` (
  `id` int(255) NOT NULL,
  `p_last_name` varchar(255) NOT NULL,
  `p_middle_name` varchar(255) NOT NULL,
  `p_first_name` varchar(255) NOT NULL,
  `P_Gender` varchar(255) NOT NULL,
  `P_D_O_B` varchar(255) NOT NULL,
  `P_Marital_status` varchar(255) NOT NULL,
  `P_Nationality` varchar(255) NOT NULL,
  `P_BG` varchar(255) NOT NULL,
  `N_name` varchar(255) NOT NULL,
  `N_Relationship` varchar(255) NOT NULL,
  `N_Preferred` varchar(255) NOT NULL,
  `N_Permanent_address` varchar(255) NOT NULL,
  `N_Current_address` varchar(255) NOT NULL,
  `N_Mobile_number` varchar(255) NOT NULL,
  `N_other_contact_number` int(255) NOT NULL,
  `N_ID_No` int(255) NOT NULL,
  `N_PAN` varchar(255) NOT NULL,
  `N_Driver_License_no` varchar(255) NOT NULL,
  `N_email` varchar(255) NOT NULL,
  `E_Last_Name` varchar(255) NOT NULL,
  `E_First_name` varchar(255) NOT NULL,
  `E_Relationship_to_you` varchar(500) NOT NULL,
  `E_Address` varchar(500) NOT NULL,
  `E_Phone` int(255) NOT NULL,
  `E_mobile_number` int(255) NOT NULL,
  `E_nominee_name` varchar(255) NOT NULL,
  `E_N_last_name` varchar(255) NOT NULL,
  `E_N_first_name` varchar(255) NOT NULL,
  `S_edu_schoolname` varchar(255) NOT NULL,
  `S_edu_Years_attended` int(255) NOT NULL,
  `P_S_edu_Institution_name` varchar(500) NOT NULL,
  `P_S_edu_years_attended` varchar(255) NOT NULL,
  `EP_name` varchar(255) NOT NULL,
  `EP_D_O_B` varchar(255) NOT NULL,
  `EP_Nickname` varchar(255) NOT NULL,
  `EP_family_background` varchar(500) NOT NULL,
  `PI_1` varchar(500) NOT NULL,
  `PI_2` varchar(255) NOT NULL,
  `PI_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_info_sheet`
--

INSERT INTO `emp_info_sheet` (`id`, `p_last_name`, `p_middle_name`, `p_first_name`, `P_Gender`, `P_D_O_B`, `P_Marital_status`, `P_Nationality`, `P_BG`, `N_name`, `N_Relationship`, `N_Preferred`, `N_Permanent_address`, `N_Current_address`, `N_Mobile_number`, `N_other_contact_number`, `N_ID_No`, `N_PAN`, `N_Driver_License_no`, `N_email`, `E_Last_Name`, `E_First_name`, `E_Relationship_to_you`, `E_Address`, `E_Phone`, `E_mobile_number`, `E_nominee_name`, `E_N_last_name`, `E_N_first_name`, `S_edu_schoolname`, `S_edu_Years_attended`, `P_S_edu_Institution_name`, `P_S_edu_years_attended`, `EP_name`, `EP_D_O_B`, `EP_Nickname`, `EP_family_background`, `PI_1`, `PI_2`, `PI_3`) VALUES
(2, 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 0, 0, 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 'saad', 0, 0, 'saad', 'saad', 'saad', 'Saad', 0, 'saad', 'saad', 'saad', 'saad', 'test', 'test', 'sdvsd', 'dfd', 'sada'),
(4, 'Malik', 'saad', 'Saad', 'male', '15-05-2001', 'single', 'indian', 'B+', 'saad', 'dost', 'parent', 'S.N 108 P.N 109 Golden Nagar Malegoan (MH) 423203', '', '08806938127', 2147483647, 12, 'KKBK6890', 'KKBK6890', 'saadmalik8806@gmail.com', 'Malik', 'Saad', 'dost', 'S.N 108 P.N 109 Golden Nagar Malegoan (MH) 423203', 2147483647, 2147483647, 'saad', 'Malik', 'Saad', 'att', 2001, 'att', '2001', 'Saad Malik', '15-05-2001', 'saad', 'dasdasdsa', 'dasdasdsa', 'dasdasdsa', 'dasdasdsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_profile`
--
ALTER TABLE `employee_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_info_sheet`
--
ALTER TABLE `emp_info_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_profile`
--
ALTER TABLE `employee_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_info_sheet`
--
ALTER TABLE `emp_info_sheet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
