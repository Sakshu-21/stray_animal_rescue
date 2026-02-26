-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2026 at 06:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stray_animal_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `Adoption_id` int(11) NOT NULL,
  `Animal_id` int(11) DEFAULT NULL,
  `Adopter_name` varchar(100) DEFAULT NULL,
  `Contact_no` varchar(20) DEFAULT NULL,
  `Adoption_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`Adoption_id`, `Animal_id`, `Adopter_name`, `Contact_no`, `Adoption_date`) VALUES
(1, 1, 'Reshma Rane', '8766058243', '2005-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `Animal_id` int(11) NOT NULL,
  `Name_animal` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Breed` varchar(100) DEFAULT NULL,
  `Health_status` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`Animal_id`, `Name_animal`, `image`, `Gender`, `Breed`, `Health_status`, `Age`, `type`) VALUES
(1, 'Buddy', 'dog1.jpg', 'Male', 'Labrador', 'Healthy', 3, 'Dog'),
(2, 'Milo', 'cat1.jpg', 'Male', 'Persian', 'Vaccinated', 2, 'Cat'),
(3, 'Bella', 'dog2.jpg', 'Female', 'Beagle', 'Injured - Recovering', 4, 'Dog'),
(4, 'Luna', 'cat2.jpg', 'Female', 'Siamese', 'Healthy', 1, 'Cat'),
(5, 'Rocky', 'dog3.jpg', 'Male', 'German Shepherd', 'Vaccinated', 5, 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `Record_id` int(11) NOT NULL,
  `Animal_id` int(11) DEFAULT NULL,
  `Diagnosis` varchar(255) DEFAULT NULL,
  `Treatment` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Vet_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`Record_id`, `Animal_id`, `Diagnosis`, `Treatment`, `Date`, `Vet_name`) VALUES
(1, 1, 'Fever and cough', 'Antibiotics for 5 days', '2026-02-20', 'Dr. Smith'),
(2, 2, 'Broken leg', 'Cast and painkillers', '2026-02-21', 'Dr. John'),
(3, 3, 'Skin infection', 'Topical ointment for 7 days', '2026-02-22', 'Dr. Clara'),
(4, 4, 'Digestive issues', 'Special diet and probiotics', '2026-02-23', 'Dr. Alice'),
(5, 5, 'Eye infection', 'Eye drops for 10 days', '2026-02-24', 'Dr. Mark');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_center`
--

CREATE TABLE `rescue_center` (
  `Center_id` int(11) NOT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  `animal_type` varchar(50) DEFAULT NULL,
  `condition_info` varchar(255) DEFAULT NULL,
  `animal_id` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rescue_center`
--

INSERT INTO `rescue_center` (`Center_id`, `Location`, `Capacity`, `animal_type`, `condition_info`, `animal_id`, `Date`) VALUES
(1, 'panjim', 23, 'Cat', 'sick', NULL, '2026-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Sakshi Rane', 'sakshu789@gmail.com', '8766058243', NULL),
(2, '', '', '', NULL),
(3, 'Sakshi Rane', 'sakshu789@gmail.com', '8766058243', NULL),
(4, '', '', '', NULL),
(5, 'Sakshi Rane', 'sakshu789@gmail.com', '8766058243', NULL),
(6, '', '', '', NULL),
(7, 'Sakshi', 'sakshu789@gmail.com', '9028568021', NULL),
(8, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `Volunteer_id` int(11) NOT NULL,
  `Volunteer_name` varchar(100) DEFAULT NULL,
  `Contact_info` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Join_date` date DEFAULT NULL,
  `Assigned_center` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`Volunteer_id`, `Volunteer_name`, `Contact_info`, `email`, `Join_date`, `Assigned_center`) VALUES
(1, 'Aarav Sharma', 'aarav@gmail.com', NULL, '2024-01-15', 'North Goa Rescue'),
(2, 'Priya Nair', '9876543210', NULL, '2024-03-22', 'Panaji Shelter'),
(3, 'Rohan Desai', 'rohan@gmail.com', NULL, '2024-06-10', 'Mapusa Care Center'),
(4, 'Sneha Patil', '9123456780', NULL, '2025-01-05', 'Margao Animal Rescue'),
(5, 'Kunal Verma', 'kunal@gmail.com', NULL, '2025-02-18', 'Vasco Welfare Unit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`Adoption_id`),
  ADD KEY `animal_id` (`Animal_id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Animal_id`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`Record_id`),
  ADD KEY `animal_id` (`Animal_id`);

--
-- Indexes for table `rescue_center`
--
ALTER TABLE `rescue_center`
  ADD PRIMARY KEY (`Center_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`Volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `Adoption_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `Animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `Record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rescue_center`
--
ALTER TABLE `rescue_center`
  MODIFY `Center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `Volunteer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`Animal_id`) ON DELETE CASCADE;

--
-- Constraints for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD CONSTRAINT `medical_records_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`);

--
-- Constraints for table `rescue_center`
--
ALTER TABLE `rescue_center`
  ADD CONSTRAINT `rescue_center_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
