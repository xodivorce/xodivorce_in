-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2025 at 08:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xodivorce_maintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `is_active`, `updated_at`) VALUES
(1, 0, '2024-07-29 05:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_projects`
--

CREATE TABLE `portfolio_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_category` varchar(100) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio_projects`
--

INSERT INTO `portfolio_projects` (`id`, `project_name`, `project_category`, `project_image`, `project_link`) VALUES
(1, 'Xodivorce.Org', 'Web development', './assets/images/xodivorce_org.png', 'https://github.com/xodivorce/xodivorce_org'),
(4, 'Xodivorce.In', 'Web development', './assets/images/xodivorce_in.png', 'https://github.com/xodivorce/xodivorce_in'),
(5, 'Face Recognise', 'Applications', './assets/images/face_recognation.png', 'https://github.com/xodivorce/face_recognise_attend'),
(6, 'Encrypter', 'Applications', './assets/images/telegram.png', 'https://telegram.me/anyencrypter_bot'),
(7, 'Xeorl - link shortener', 'Web development', './assets/images/xeorl_buzz.png', 'https://xeorl.buzz'),
(8, 'Propoganda DDOS', 'Applications', './assets/images/ddos.jpg', 'https://telegram.me/ddos_xodivorcebot'),
(9, 'Breakout Ball Game', 'Applications', './assets/images/breakout_game.png', 'https://github.com/xodivorce/Breakout-Game'),
(10, 'STUDENT INFORMATION SYSTEM', 'Web development', './assets/images/kei_portfolio.png', 'https://github.com/xodivorce/kei_portfolio'),
(11, 'SOLAR SYSTEM DESIGN', 'Web design', './assets/images/solar_system_design.png', 'https://github.com/xodivorce/solar_syestem_design');

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

CREATE TABLE `resume_education` (
  `id` int(11) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `start_year` year(4) NOT NULL,
  `end_year` year(4) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_education`
--

INSERT INTO `resume_education` (`id`, `institution`, `degree`, `start_year`, `end_year`, `description`) VALUES
(1, 'Kingston Polytechnic College', 'Diploma in Computer Science and Technology (CST)', '2023', '2025', 'Kingston Polytechnic College, affiliated with Kingston Educational Institute (KEI); Barasat - Barrackpore Rd, Kajibari, Kolkata, West Bengal 700126.'),
(2, 'Basirhat High School (HS)', 'Higher Secondary Education (WBCHSE)', '2021', '2023', 'Completed 11th and 12th grade with Science (Physics, Chemistry, Biology) and Computer Applications under the WB Board at Basirhat High School (HS).'),
(3, 'Basirhat Town High School (HS)', 'Secondary Education (WBBSE)', '2015', '2021', 'Completed 5th to 10th grades under the WB Board at Basirhat Town High School (HS). Studied PT (Physical Training), Computer Studies, and Construction, gaining foundational knowledge and practical skills.'),
(4, 'Bhawanipur Harimohan Primary School', 'Primary Education (WBBPE)', '2011', '2015', 'Attended Bhawanipur Harimohan Primary School from class 1 to 4, starting with basic ABC and computer skills. Introduced to MS Paint, Word, and other applications from class 3 onwards.');

-- --------------------------------------------------------

--
-- Table structure for table `resume_experience`
--

CREATE TABLE `resume_experience` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `start_year` year(4) NOT NULL,
  `end_year` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_experience`
--

INSERT INTO `resume_experience` (`id`, `job_title`, `start_year`, `end_year`, `description`) VALUES
(1, 'Web Developer (MERN)', '2024', 'Present', 'Currently expanding my skills with the MERN stack (MongoDB, Express, React, Node.js). \r\nWorking on new and exciting projects using modern web technologies. \r\nMore MERN stack-based projects are coming soon!'),
(2, 'Web Developer (Laravel)', '2023', 'Present', 'Self-taught Full Stacked Web Developed and managed web projects, including xodivorce.in. Collaborated with clients to create and deploy customized web solutions using HTML5, CSS3, JavaScript, PHP, and MySQL. Ensured mobile-friendliness with responsive design principles.'),
(3, 'CITA - IT And ITAS', '2023', '2024', 'Completed Youth Computer Training at CITA in Basirhat, West Bengal. Acquired practical experience with a range of IT tools and technologies. Successfully finished the IT/ITAS training program, which lasted for 6 months.');

-- --------------------------------------------------------

--
-- Table structure for table `resume_skills`
--

CREATE TABLE `resume_skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `skill_level` int(11) NOT NULL CHECK (`skill_level` between 0 and 100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_skills`
--

INSERT INTO `resume_skills` (`id`, `skill_name`, `skill_level`) VALUES
(1, 'HTML', 95),
(2, 'CSS', 90),
(3, 'JavaScript', 65),
(4, 'PHP', 80),
(5, 'MySQL', 85),
(6, 'GIT', 85),
(7, 'Tailwindcss', 70),
(8, 'MongoDB', 75),
(9, 'Express.js', 50),
(10, 'React.js', 60),
(11, 'Node.js', 45),
(12, 'Python', 75),
(13, 'C', 35),
(14, 'Java', 45),
(15, 'Kotlin', 15);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `avatar`, `message`, `date_added`) VALUES
(1, 'AutoSquare Store', './assets/images/avatar-1.png', 'We recently came across your GitHub profile and were truly impressed by your skills and projects. We think you could be a fantastic addition to our team at AutoSquare as a Full Stack Software Engineer.', '2024-11-30'),
(3, 'IIT Guwahati', './assets/images/avatar-5.png', 'We are delighted to welcome you to the Credit-linked Program in Data Science, offered by Daksh Gurukul IIT Guwahati.\r\n\r\nYour journey toward academic excellence and personal growth begins now, and we are committed to supporting you every step of the way.', '2025-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_projects`
--
ALTER TABLE `portfolio_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_experience`
--
ALTER TABLE `resume_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_skills`
--
ALTER TABLE `resume_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio_projects`
--
ALTER TABLE `portfolio_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resume_education`
--
ALTER TABLE `resume_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume_experience`
--
ALTER TABLE `resume_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume_skills`
--
ALTER TABLE `resume_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
