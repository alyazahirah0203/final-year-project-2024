-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 04:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `CampaignName` varchar(255) NOT NULL,
  `CampaignStartDate` date NOT NULL,
  `CampaignStartTime` time NOT NULL,
  `CampaignEndDate` date NOT NULL,
  `CampaignEndTime` time NOT NULL,
  `CampaignLocation` varchar(255) NOT NULL,
  `CampaignDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `CampaignName`, `CampaignStartDate`, `CampaignStartTime`, `CampaignEndDate`, `CampaignEndTime`, `CampaignLocation`, `CampaignDescription`) VALUES
(7, 'BLOOD DONATION CAMPAIGN', '2024-06-12', '10:00:00', '2024-06-13', '15:00:00', 'MASJID SULTAN AHMAD SHAH, IIUM KUANTAN', 'Give the gift of Live.');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `donation_centre` varchar(255) NOT NULL,
  `donation_date` date NOT NULL,
  `hemoglobin_level` float NOT NULL,
  `blood_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `id_card`, `donation_centre`, `donation_date`, `hemoglobin_level`, `blood_number`) VALUES
(3, 'alya zahirah', '040302130246', 'Tengku Ampuan Afzan Hospital, Kuantan', '2024-06-07', 13, '987654321'),
(4, 'Muhammad Zafir', '040302130909', 'Pusat Derma Darah Hospital Tuanku Jaafar', '2024-05-30', 14, '123456789'),
(5, 'alya zahirah', '040302130246', 'Pusat Derma Darah Hospital Tuanku Jaafar', '2024-06-06', 14, '019283746'),
(6, 'sarah', '010203040506', 'National Blood Centre', '2024-05-08', 13.5, '543216789'),
(7, 'Siti Ali', '010203040000', 'Tengku Ampuan Afzan Hospital, Kuantan', '2024-06-01', 14.5, '99999999');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555558, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2024-01-01 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

CREATE TABLE `tblblooddonars` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `id_card` varchar(20) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `FullName`, `MobileNumber`, `EmailId`, `id_card`, `Gender`, `Age`, `BloodGroup`, `Address`, `Message`, `PostingDate`, `status`, `Password`) VALUES
(19, 'Muhammad Zafir', '0123456789', 'zafir@gmail.com', '040302130909', 'Male', 20, 'B+', 'jerantut,pahang', ' ', '2024-06-09 17:39:48', 1, '2651d635be6d413f640bf2661bdaf345'),
(20, 'Alya Zahirah', '0129873645', 'alya@gmail.com', '040302130246', 'Female', 20, 'A+', 'kuantan,pahang', ' ', '2024-06-09 18:48:48', 1, '6d2f2d182c03040daeddbd634291813b'),
(21, 'Sarah', '0199088765', 'sarah@gmail.com', '010203040506', 'Female', 38, 'B+', 'bentong', ' ', '2024-06-09 19:16:37', 1, '7e083cc89d3da1161c61a7ae81928d50'),
(22, 'Siti Ali', '0123456789', 'siti@gmail.com', '010203040000', 'Female', 47, 'AB+', 'pekan', ' ', '2024-06-10 14:04:36', 1, '8f42089843b4d14463aa88cd59ad917a');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(8, 'A+', '2024-06-01 17:05:06'),
(9, 'A-', '2024-06-01 17:05:20'),
(10, 'B+', '2024-06-01 17:05:23'),
(11, 'B-', '2024-06-01 17:05:26'),
(12, 'AB+', '2024-06-01 17:05:34'),
(13, 'AB-', '2024-06-01 17:05:39'),
(14, 'O+', '2024-06-01 17:05:45'),
(15, 'O-', '2024-06-01 17:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Blood Bank Centre																			', 'bbdms@gmail.com', '09-5133333');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(2, 'Why Become Donor', 'donor', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '																														<div style=\"text-align: justify;\"><p>Welcome to Blood Donation Management System Centre!</p><p>At Blood Donation Management System Centre, we are committed to revolutionizing the way blood donation processes are managed and ensuring a seamless, efficient, and safe experience for both donors and recipients. Our mission is to facilitate life-saving blood donations by leveraging cutting-edge technology to streamline operations, enhance donor experience, and ensure the highest standards of safety and compliance.</p><p><strong>Who We Are</strong></p><p>We are a dedicated team of healthcare professionals, technologists, and innovators passionate about making a difference in the world of blood donation. Our goal is to bridge the gap between donors and those in need by providing a robust, user-friendly platform that optimizes every step of the donation process.<br><br></p><div class=\"flex flex-grow flex-col max-w-full\"><div data-message-author-role=\"assistant\" data-message-id=\"abc1591b-bc26-42e3-b719-18adae8fb976\" dir=\"auto\" class=\"min-h-[20px] text-message flex flex-col items-start whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 juice:w-full juice:items-end overflow-x-auto gap-2\"><div class=\"flex w-full flex-col gap-1 juice:empty:hidden juice:first:pt-[3px]\"><div class=\"markdown prose w-full break-words dark:prose-invert light\"><p><strong>Our Vision</strong></p><p>We envision a world where every blood donation is efficiently managed, ensuring a steady and safe supply of blood to meet medical needs everywhere. By harnessing the power of technology, we aim to create a community of donors and healthcare providers working together to save lives.</p><p><strong>Join Us</strong></p><p>Join us in our mission to make a difference. Whether you are a donor, a healthcare provider, or an organization, together we can ensure that every drop counts. Visit Blood Donation Management System &nbsp;to learn more and be a part of our life-saving journey.</p><p>Thank you for choosing Blood Donation Management System Centre. Together, we save lives.</p></div></div></div></div><p><br></p></div>\r\n										\r\n										\r\n										');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bgroup` (`BloodGroup`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BloodGroup` (`BloodGroup`),
  ADD KEY `BloodGroup_2` (`BloodGroup`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
