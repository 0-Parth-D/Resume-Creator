-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 07:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumedetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department_name`) VALUES
(1, 'Computer Science'),
(2, 'Mathematics'),
(3, 'Physics'),
(4, 'Biology'),
(5, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `graduationYear` int(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `student_id`, `degree`, `school`, `graduationYear`) VALUES
(8, 8, 'Undergraduate', 'Vishwakarma Institute of Information Technology', 2018),
(10, 9, 'High School', 'T.C.H', 2018),
(11, 10, 'Post Graduate', 'Vishwakarma Institute of Information Technology', 2024),
(12, 11, 'Undergraduate', 'VIIT', 2018),
(13, 12, 'Undergraduate', 'T.C.H', 2018),
(14, 13, 'Undergraduate', 'T.C.H', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `extra_curricular`
--

CREATE TABLE `extra_curricular` (
  `extracurricular_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `activity_name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra_curricular`
--

INSERT INTO `extra_curricular` (`extracurricular_id`, `student_id`, `activity_name`, `description`) VALUES
(8, 8, 'Co-curriculars', 'Summer School: Summer School at Tokushima University, Japan\r\nOrganizations: UI/UX designer (OIR, VIIT) '),
(9, 9, 'QWERTY', 'uygjhgk\r\n233456'),
(10, 10, 'Co-curriculars', 'Sports'),
(11, 11, 'QWERTY', 'QWERTY - 1'),
(12, 12, 'QWERTY', 'ABCDR'),
(13, 13, 'QWERTY', 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`) VALUES
(1, 'Undergraduate (UG)'),
(2, 'Postgraduate (PG)'),
(3, 'Ph.D.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `skill_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `student_id`, `skill_name`) VALUES
(8, 8, 'Python\r\nTensorFlow\r\nNumPy\r\nPandas\r\nSciKit-Learn\r\nMySQL\r\nC++\r\nReact'),
(9, 9, 'qasertyjdh'),
(10, 10, 'Python\r\nTensorFlow\r\nNumPy\r\nPandas\r\nSciKit-Learn\r\nM.'),
(11, 11, 'ABC'),
(12, 12, 'QWERTY'),
(13, 13, 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(16) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cell_number` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `cell_number`, `email`, `dept_id`, `program_id`) VALUES
(8, 'John Doe', '9834102107', 'john.doe4132@gmail.com', 5, 2),
(9, 'Parth Deshmukh', '9834102107', 'p@gmail.com', 2, 3),
(10, 'John Doe', '9834102107', 'john.doe4132@gmail.com', 5, 2),
(11, 'Parth Deshmukh', '9834102107', 'parth@gmail.com', 5, 3),
(12, 'Parth Deshmukh', '9834102107', 'john.doe4132@gmail.com', 4, 3),
(13, 'Parth Deshmukh', '9834102107', 'p@gmail.com', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `experience_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`experience_id`, `student_id`, `title`, `company`, `start_date`, `end_date`, `description`) VALUES
(8, 8, 'UI/UX Designer', 'HTS Tech Solutions', '2023-09-01', '2022-12-10', 'Contributed to the creation of user-friendly interfaces for various websites and applications. Enhanced the overall \r\nusability and aesthetics of digital products, positively impacting user engagement and satisfaction. \r\n\r\nImplemented key design principles, including color theory, typography, and hierarchy, in developing website and app \r\nlayouts. Improved the accessibility and navigation of digital platforms, contributing to a more seamless user journey.'),
(9, 9, 'ABCD', 'X.Y.Z', '2023-09-01', '2023-11-01', 'QWETYRHRf'),
(10, 10, 'ML engineer', 'X.Y.Z', '2023-11-01', '2023-12-14', 'Contributed to the creation of user-friendly inter.'),
(11, 11, 'UI/UX Designer', 'X.Y.Z', '2024-01-15', '2024-01-29', 'Lorem Ipsum'),
(12, 12, 'ABCD', 'HTS Tech Solutions', '2024-01-14', '2024-01-21', 'ABC'),
(13, 13, 'ABCD', 'X.Y.Z', '2023-09-01', '2022-12-10', 'cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `extra_curricular`
--
ALTER TABLE `extra_curricular`
  ADD PRIMARY KEY (`extracurricular_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_department` (`dept_id`),
  ADD KEY `fk_student_program` (`program_id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `extra_curricular`
--
ALTER TABLE `extra_curricular`
  MODIFY `extracurricular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`id`);

--
-- Constraints for table `extra_curricular`
--
ALTER TABLE `extra_curricular`
  ADD CONSTRAINT `extra_curricular_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`id`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `fk_student_department` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `fk_student_program` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
