-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 11:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `library_name` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `book_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`library_name`, `book_name`, `author`, `book_status`) VALUES
('UCMO WARRENSBURG', 'LMC/Articulated Legged Robot', 'Youngil Youm', 'Unavailable'),
('UCMO WARRENSBURG', 'Landing Motion Control', 'Sanghak Sung', 'Available'),
('UCMO WARRENSBURG', 'ELSA', 'Khalid', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_name` varchar(255) NOT NULL,
  `count` int(255) NOT NULL,
  `class_no` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `prerequisite` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `count`, `class_no`, `course_type`, `lecturer`, `prerequisite`, `semester`) VALUES
('Adv Web Apps', 28, 'CS5130', 'Hybrid', 'Sanghak Sung', 'NULL', 'Spring'),
('Cloud Computing', 30, 'CS5129', 'Online', 'Jun Wang', 'NULL', 'Spring'),
('Android Development', 24, 'CS5128', 'Hybrid', 'Sunae Shin', 'NULL', 'Spring'),
('Adv Algorithms', 25, 'CS5127', 'Hybrid', 'Yousef', 'NULL', 'Fall'),
('Database Theory', 28, 'CS5126', 'Hybrid', 'Komsun', 'NULL', 'Spring'),
('Java Programming', 30, 'CS5125', 'Hybrid', 'Belinda Copus', 'Cloud Computing', 'Fall'),
('Machine Learning', 20, 'CS5124', 'Online', 'Rawazdeh', 'NULL', 'Fall'),
('Adv Operating Systems', 30, 'CS5123', 'Online', 'He Suoju', 'NULL', 'Fall'),
('Object Oriented Programming', 25, 'CS5122', 'Hybrid', 'Yousef', 'Adv Algorithms', 'Spring'),
('Web Development', 30, 'CS5121', 'Online', 'Bhargavi', 'NULL', 'Spring'),
('Bootstrap', 25, 'CS5120', 'Online', 'Sanghak Sung', 'Adv Web Apps', 'Spring');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `course_name` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`course_name`, `exam_name`) VALUES
('Adv Algorithms', 'Algorithms Final'),
('Adv Algorithms', 'Algorithms Midterm'),
('Adv Web Apps', 'Web Apps Final'),
('Adv Web Apps', 'Web Apps Midterm');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `advised_st_id` int(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_name`, `website`, `birthdate`, `email`, `degree`, `role`, `course_name`, `advised_st_id`, `department`) VALUES
('Bhargavi', 'https://www.linkedin.com/in/bhargaviponnuru/', '1996-11-12', 'bhargavi@gmail.com', 'Prof.', 'Dean', 'Probability', 0, 'CIS'),
('Sanghak Sung', 'https://www.linkedin.com/in/sanghak-sung-98309b5b/', '1990-01-01', 'sung@ucmo.edu', 'Dr', 'Lecturer', 'Adv Web Apps', 0, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_name` varchar(255) NOT NULL,
  `est_semester_duration` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `other_uni_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_name`, `est_semester_duration`, `student_id`, `other_uni_name`) VALUES
('Masters Academic Program', 2, 64160002, 'UCM LEES SUMMIT'),
('Undergraduate Academic Program', 1, 64160001, 'UCM WARRENSBURG');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `advisor_name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `scholarship` varchar(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `emp_type` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `birthdate`, `course_code`, `advisor_name`, `degree`, `scholarship`, `grade`, `emp_type`, `department`, `email`) VALUES
(700742492, 'Srilekha kondaparthi', '1997-01-01', 'Adv Web Apps', 'Sanghak Sung', 'Grad', 'Full Scholarship', 4, 'Bootstrap TA', 'Computer Science', 'srilekhak@ucmo.edu'),
(700735350, 'Bhargavi Ponnuru', '1996-07-28', 'Adv Algorithms', 'Sanghak Sung', 'Grad', 'Full Scholarship', 4, 'Bootstrap GA', 'Computer Science', 'bhargavip@ucmo.edu'),
(700723856, 'Dheeraj Mikkili', '1997-06-09', 'Machine Learning', 'Sanghak Sung', 'Undergrad', 'Half Scholarship', 4, 'NULL', 'Computer Science', 'dheerajm@ucmo.edu'),
(700721001, 'Matt Thomas', '1998-06-16', 'Cloud Computing', 'Sanghak Sung', 'Ph.d', 'Full Scholarship', 4, 'NULL', 'Computer Science', 'thomas@ucmo.edu');

-- --------------------------------------------------------

--
-- Table structure for table `student_book`
--

CREATE TABLE `student_book` (
  `student_id` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_book`
--

INSERT INTO `student_book` (`student_id`, `book_name`) VALUES
(700735350, 'Landing Motion Control'),
(700735350, 'LMC/Articulated Legged Robot'),
(700742492, 'ELSA');

-- --------------------------------------------------------

--
-- Table structure for table `student_club`
--

CREATE TABLE `student_club` (
  `club_name` varchar(255) NOT NULL,
  `leader_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_club`
--

INSERT INTO `student_club` (`club_name`, `leader_id`) VALUES
('Trekking Club @UCM', 700723856),
('Intramurals Sports Club @UCM', 700742492),
('Student Recreational Club @UCM', 700723856),
('Student Volunteers Club @UCM', 700735350);

-- --------------------------------------------------------

--
-- Table structure for table `student_club_participants`
--

CREATE TABLE `student_club_participants` (
  `leader_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_club_participants`
--

INSERT INTO `student_club_participants` (`leader_id`, `participant_id`) VALUES
(700723856, 700735350),
(700742492, 700735350),
(700735350, 700723856);

-- --------------------------------------------------------

--
-- Table structure for table `student_current_course`
--

CREATE TABLE `student_current_course` (
  `course_name` varchar(255) NOT NULL,
  `student_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_current_course`
--

INSERT INTO `student_current_course` (`course_name`, `student_id`) VALUES
('Adv Web Apps', 700742492),
('Adv Algorithms', 700735350);

-- --------------------------------------------------------

--
-- Table structure for table `student_exam`
--

CREATE TABLE `student_exam` (
  `exam_name` varchar(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `grade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_exam`
--

INSERT INTO `student_exam` (`exam_name`, `student_id`, `grade`) VALUES
('Algorithms Final', 700742492, 95),
('Algorithms Midterm', 700742492, 91),
('Web Apps Final', 700735350, 98),
('Web Apps Midterm', 700735350, 85);

-- --------------------------------------------------------

--
-- Table structure for table `student_past_courses`
--

CREATE TABLE `student_past_courses` (
  `student_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `final_grade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_past_courses`
--

INSERT INTO `student_past_courses` (`student_id`, `course_name`, `final_grade`) VALUES
(700742492, 'Android Development', 87),
(700742492, 'Java Programming', 86),
(700742492, 'Database Theory', 70),
(700735350, 'Java Programming', 89),
(700735350, 'Android Development', 98);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`email`, `name`, `password`, `phone`, `type`) VALUES
('bhargavi@gmail.com', 'Bhargavi', 'test123', '12345', 'lecturer'),
('dhee@gmail.com', 'dheeraj', 'dhee123', '789101112', 'student');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`library_name`,`book_name`,`author`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_name`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`course_name`,`exam_name`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_book`
--
ALTER TABLE `student_book`
  ADD PRIMARY KEY (`student_id`,`book_name`);

--
-- Indexes for table `student_club`
--
ALTER TABLE `student_club`
  ADD PRIMARY KEY (`club_name`);

--
-- Indexes for table `student_club_participants`
--
ALTER TABLE `student_club_participants`
  ADD PRIMARY KEY (`leader_id`,`participant_id`);

--
-- Indexes for table `student_current_course`
--
ALTER TABLE `student_current_course`
  ADD PRIMARY KEY (`course_name`);

--
-- Indexes for table `student_exam`
--
ALTER TABLE `student_exam`
  ADD PRIMARY KEY (`exam_name`,`student_id`);

--
-- Indexes for table `student_past_courses`
--
ALTER TABLE `student_past_courses`
  ADD PRIMARY KEY (`student_id`,`course_name`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
