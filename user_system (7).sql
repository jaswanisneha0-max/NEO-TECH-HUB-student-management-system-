-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2025 at 10:58 AM
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
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `signature` int(255) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `exam_mode` varchar(50) DEFAULT NULL,
  `exam_code` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `id_type` varchar(50) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `course_fee` varchar(50) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `admission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `photo`, `signature`, `student_name`, `father_name`, `gender`, `dob`, `mobile`, `email`, `course`, `batch`, `exam_mode`, `exam_code`, `username`, `password`, `address`, `id_type`, `id_number`, `course_fee`, `remarks`, `admission_date`) VALUES
(3, 'WhatsApp Image 2025-09-14 at 4.14.02 PM.jpeg', 0, 'Faiz Ali', 'Maheshbhai', 'Male', '2007-06-26', '7896534560', 'faiz23@gmail.com', 'CCC', 'Morning', 'ONLINE', '2606', 'faiz26', '26062007', 'Gondal', 'Adharcard', '789634562345', '4500', 'good', '2025-07-16'),
(4, 'IMG-20230706-WA0027.jpg', 0, 'Sneha Jaswani', 'Sureshbhai', 'Female', '2005-06-26', '6354636133', 'jaswanisneha0@gmail.com', 'Web Development', 'Morning', 'ONLINE', '2606', 'sneha26', '26062005', 'Gondal', 'Adharcard', '789634562348', '5400', 'Good', '2025-07-16'),
(5, 'WhatsApp Image 2025-09-14 at 4.14.01 PM.jpeg', 0, 'Viraj Bhosle', 'Mannanbhai', 'Male', '2004-09-08', '9876543456', 'viraj34@gmail.com', 'DTP', 'Morning', 'ONLINE', '0809', 'viraj34', '08092004', 'Gondal', 'Adharcard', '789634562342', '4500', 'good', '2025-07-18'),
(8, 'WhatsApp Image 2025-09-12 at 7.31.42 PM (1).jpeg', 0, 'Riya', 'Kritbhai', 'Female', '2025-09-04', '8976548904', 'zyz@gmail.com', 'Web designing', 'Morning', 'ONLINE', '9090', 'riya07', '04092025', 'rajkot', 'Adharcard', '789045631234', '4500', 'good', '2025-09-02'),
(9, 'WhatsApp Image 2025-09-13 at 6.50.22 PM.jpeg', 0, 'Dhruvi Parmar', 'Hirabhai', 'Female', '2009-09-09', '9876756789', 'nirali78@gmail.com', 'Tally', 'Morining', 'ONLINE', '8909', 'dhruvi09', '09092009', 'gondal', 'Adharcard', '789098765434', '4500', 'goood', '2025-09-14'),
(10, 'user_system_admission_001', 0, 'Kiran', 'Jayeshbhai', 'Female', '2004-08-09', '9807654535', 'kiran23@gmail.com', 'CCC', 'morning', 'ONLINE', '0908', 'kiran09', '09082004', 'Rajkot', 'A', '', '', '', '2025-09-18'),
(12, 'user_system_admission_9', 0, 'Dev Satodiya', 'Rameshbhai', 'Male', '2007-06-26', '9807656456', 'dev45@gmail.com', 'Miracle', 'Morning', 'ONLINE', '2006', 'Dev26', '26062007', 'Gondal', 'Adharcard', '789067895674', '3500', 'ok', '2025-09-23'),
(15, 'IMG-20230706-WA0055.jpg', 0, 'Kirtan Vaghela', 'Kiritbhai', 'Female', '2010-06-05', '9089089078', 'kirti56@gmail.com', 'DTP', 'Morning', 'ONLINE', '0506', 'kirtan05', '05062010', 'Gondal', 'Adharcard', '789098765434', '3500', 'Done', '2025-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('Present','Absent') DEFAULT 'Absent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `date`, `status`) VALUES
(2, 5, '2025-08-24', 'Present'),
(4, 3, '2025-08-25', 'Absent'),
(5, 4, '2025-08-25', 'Present'),
(6, 5, '2025-08-25', 'Present'),
(9, 3, '2025-08-28', 'Present'),
(10, 4, '2025-08-28', 'Present'),
(11, 5, '2025-08-28', 'Present'),
(13, 3, '2025-09-02', 'Absent'),
(14, 4, '2025-09-02', 'Present'),
(15, 5, '2025-09-02', 'Present'),
(16, 8, '2025-09-02', 'Present'),
(17, 3, '2025-09-25', 'Absent'),
(18, 4, '2025-09-25', 'Absent'),
(19, 5, '2025-09-25', 'Present'),
(20, 8, '2025-09-25', 'Present'),
(21, 9, '2025-09-25', 'Present'),
(22, 10, '2025-09-25', 'Present'),
(23, 12, '2025-09-25', 'Present'),
(25, 3, '2025-10-03', 'Present'),
(26, 4, '2025-10-03', 'Absent'),
(27, 5, '2025-10-03', 'Present'),
(28, 8, '2025-10-03', 'Present'),
(29, 9, '2025-10-03', 'Present'),
(30, 10, '2025-10-03', 'Present'),
(31, 12, '2025-10-03', 'Present'),
(32, 15, '2025-10-03', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `username`, `password`) VALUES
(1, 'NEO TECH HUB', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiries`
--

CREATE TABLE `contact_inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `preferred_course` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_inquiries`
--

INSERT INTO `contact_inquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `preferred_course`, `submitted_at`) VALUES
(1, 'Dhruvi', 'EVA12@GMAIL.COM', '7890456235', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-07-11 18:06:25'),
(2, 'vansh', 'jaswanisneha0@gmail.com', '9876567893', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-07-12 07:45:44'),
(3, 'vansh', 'priya12@gmail.com', '7890456235', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-07-12 07:51:00'),
(4, 'vansh', 'priya12@gmail.com', '7890456235', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-07-12 07:51:18'),
(5, 'jil', 'jil89@gmail.com', '90876543456', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-07-12 08:13:25'),
(6, 'Dhruvi', 'EVA12@GMAIL.COM', '90876543456', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-07-12 08:13:54'),
(7, 'vanshi', 'vanshi89@gmail.com', '987675436', 'miracle', NULL, 'Course on Computer Concepts (CCC)', '2025-07-12 17:54:25'),
(8, 'Leva', 'leva23@gmail.com', '7896543256', 'Tally', NULL, 'Course on Computer Concepts (CCC)', '2025-07-15 16:00:34'),
(9, 'Hena', 'hena56@gmail.com', '9876567845', 'Tally', NULL, 'Tally COurse', '2025-07-17 07:50:54'),
(10, 'vansh', 'priya12@gmail.com', '90876543456', 'ccc', NULL, 'Course on Computer Concepts (CCC)', '2025-08-18 03:07:38'),
(11, 'vansh', 'zyz@gmail.com', '7890456235', 'Miracle', NULL, 'Miracle', '2025-08-28 05:31:17'),
(12, 'Prap', 'prap@gmail.com', '9087656789', 'ccc', NULL, 'Ms-Office', '2025-08-28 06:01:30'),
(13, 'Riva', 'riva@gmail.com', '6789054324', 'DTP', NULL, 'Tally Course', '2025-09-02 06:50:24'),
(14, 'hiral', 'Hir34@gmail.com', '8907654634', 'xxx', NULL, 'Ms-Office', '2025-09-02 06:53:10'),
(15, 'Janvi Thakkar', 'janvi45@gmail.com', '90876543456', '', NULL, 'Web Designing', '2025-09-17 12:48:15'),
(16, 'Kirti Thakkar', 'kirti56@gmail.com', '7890654345', '', NULL, 'CCC', '2025-09-17 12:52:56'),
(17, 'Riyaz Ali', 'riyaz34@gmail.com', '9807656789', '', NULL, 'DTP', '2025-09-22 02:59:35'),
(18, 'Kirtan Vaghela', 'kirti56@gmail.com', '9090897867', '', NULL, 'DTP', '2025-10-03 09:57:47'),
(19, 'Hasan Nimbark', 'hasan34@gmail.com', '9089786756', '', NULL, 'Ms-Office', '2025-11-06 09:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'JENIL', 'jenil23@gmail.com', '9876789543', 'Miracle', 'take add', '2025-07-12 08:22:11'),
(2, 'gani', 'gani45@gmail.com', '7654389023', 'ccc', 'take add', '2025-07-12 17:55:06'),
(3, 'Daksh', 'daksh23@gmail.com', '9876789432', 'Tally', 'take addmission', '2025-07-16 06:23:57'),
(4, 'Heina', 'hina45@gimal.com', '76890654312', 'Tally', 'Hello', '2025-07-17 08:00:40'),
(5, 'Yug', 'yug34@gmail.com', '9876564534', 'Tally', 'Hello', '2025-07-18 05:49:48'),
(6, 'priya', 'zyz@gmail.com', '1234567898', 'ccc', 'add admission', '2025-08-18 03:06:02'),
(7, 'Neha', 'nehu34@gmail.com', '8976543456', 'Miracle', 'want to take admission', '2025-08-27 09:29:15'),
(8, 'priya', 'priya12@gmail.com', '9876567894', 'Tally', 'hii', '2025-08-28 05:30:10'),
(9, 'Prapti', 'prapti80@gmail.com', '90876545678', 'Dtp', 'want admission', '2025-08-28 05:40:21'),
(10, 'Griva', 'girva23@gmail.com', '678905422', 'dtp', 'Hello', '2025-09-02 06:45:07'),
(11, 'Mahesh', 'mah34@gmail.com', '7890654324', 'DTP', 'Hello', '2025-09-02 06:52:07'),
(12, 'Asyush', 'ayush23@gmail.com', '9087657434', 'ccc', 'take Admission', '2025-09-12 07:06:31'),
(13, 'Janvi Thakkar', 'janvi45@gmail.com', '9876543456', 'CCC', 'Want admission', '2025-09-17 12:43:06'),
(14, 'Divya Gohel', 'divya34@gmail.com', '9807654534', 'Miracle', 'admission', '2025-09-17 12:52:16'),
(15, 'Kirtan Thakkar', 'kirtan28@gmail.com', '7890987890', 'Miracle', 'HEllo', '2025-09-25 09:01:02'),
(16, 'Kirtan Vaghela', 'kirtan56@gmail.com', '9090897867', 'Miracle', 'Want Admission', '2025-10-03 09:57:09'),
(17, 'Hasan Nimbark', 'hasan34@gmail.com', '90876543456', 'Ms office', 'Hello', '2025-11-06 09:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_inquiry`
--

CREATE TABLE `course_inquiry` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `fees` decimal(10,2) NOT NULL,
  `joining_date` date NOT NULL,
  `center_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_inquiry`
--

INSERT INTO `course_inquiry` (`id`, `student_name`, `reg_no`, `course`, `fees`, `joining_date`, `center_name`) VALUES
(1, 'Sneha JAswani', '2244', 'CCC', 4500.00, '0000-00-00', 'Jolly');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_pdfs`
--

CREATE TABLE `exam_pdfs` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_pdfs`
--

INSERT INTO `exam_pdfs` (`id`, `file_name`, `uploaded_on`) VALUES
(1, 'cccquestions.xlsx', '2025-08-24 12:25:54'),
(2, 'J2EE Programs 41 to 54.pdf', '2025-08-24 12:26:09'),
(3, 'J2EE Programs 41 to 54.pdf', '2025-08-24 12:32:17'),
(4, 'Test 1 &2.pdf', '2025-09-02 07:47:01'),
(5, 'J2EE Programs 41 to 54 (1).pdf', '2025-09-11 03:22:54'),
(6, 'Journal Program List.pdf', '2025-10-03 10:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `franchises`
--

CREATE TABLE `franchises` (
  `id` int(11) NOT NULL,
  `franchise_name` varchar(150) NOT NULL,
  `franchise_address` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `director_name` varchar(150) NOT NULL,
  `director_email` varchar(150) NOT NULL,
  `director_mobile` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `franchises`
--

INSERT INTO `franchises` (`id`, `franchise_name`, `franchise_address`, `state`, `district`, `director_name`, `director_email`, `director_mobile`, `created_at`) VALUES
(1, 'Jone Doe', 'GOndal', 'Gujarat', 'Rajkot', 'Leva Kakar', 'leva34@gmail.com', '9876785432', '2025-08-24 11:23:24'),
(2, 'Maheswari industry', 'Rajkot', 'Gujarat', 'Rajkot', 'kirti Maheswari', 'kirti56@gmail.com', '7890897865', '2025-09-17 12:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` int(11) NOT NULL,
  `admission_id` int(11) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`id`, `admission_id`, `amount_paid`, `payment_date`, `payment_mode`, `transaction_id`, `remarks`) VALUES
(1, 5, 4500.00, '2025-07-28', 'Cash', '5678', 'Done'),
(4, 4, 4500.00, '2025-08-10', 'Cash', '12345', 'done'),
(7, 3, 3400.00, '2025-09-02', 'Cash', '12345', 'done'),
(8, 3, 3500.00, '2025-09-02', 'Cash', '7878', 'done'),
(9, 9, 35000506.00, '2025-10-03', 'Cash', '12345', 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `course_inquiry`
--
ALTER TABLE `course_inquiry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_pdfs`
--
ALTER TABLE `exam_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchises`
--
ALTER TABLE `franchises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `director_email` (`director_email`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_id` (`admission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_inquiry`
--
ALTER TABLE `course_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_pdfs`
--
ALTER TABLE `exam_pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `franchises`
--
ALTER TABLE `franchises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `admission` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD CONSTRAINT `student_fees_ibfk_1` FOREIGN KEY (`admission_id`) REFERENCES `admission` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
