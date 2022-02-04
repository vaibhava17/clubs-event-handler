-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 01:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssvgi_ceh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `auth` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `post`, `name`, `image`, `auth`) VALUES
(1, 'admin', 'admin', 'admin', '', '', '', 'auth_a'),
(2, 'kalanjali', 'kalanjali', 'kalanjali', '', '', '', 'auth_a'),
(3, 'gladiators', 'gladiators', 'gladiators', '', '', '', 'auth_a'),
(4, 'gizmofreaks', 'gizmofreaks', 'gizmofreaks', '', '', '', 'auth_a'),
(5, 'oasis', 'oasis', 'oasis', '', '', '', 'auth_a'),
(6, 'rotaract', 'rotaract', 'rotaract', '', '', '', 'auth_a');

-- --------------------------------------------------------

--
-- Table structure for table `applygizmofreaks`
--

CREATE TABLE `applygizmofreaks` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `v_post` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applygladiators`
--

CREATE TABLE `applygladiators` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `v_post` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applykalanjali`
--

CREATE TABLE `applykalanjali` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `v_post` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applyoasis`
--

CREATE TABLE `applyoasis` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `v_post` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applyrotaract`
--

CREATE TABLE `applyrotaract` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `v_post` varchar(300) NOT NULL,
  `date` varchar(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `number` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gizmofreaks`
--

CREATE TABLE `gizmofreaks` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `context` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `filename` varchar(300) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gizmofreaksenroll`
--

CREATE TABLE `gizmofreaksenroll` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gladiators`
--

CREATE TABLE `gladiators` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `context` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gladiatorsenroll`
--

CREATE TABLE `gladiatorsenroll` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kalanjali`
--

CREATE TABLE `kalanjali` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `context` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `filename` varchar(300) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kalanjalienroll`
--

CREATE TABLE `kalanjalienroll` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oasis`
--

CREATE TABLE `oasis` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `context` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oasisenroll`
--

CREATE TABLE `oasisenroll` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rotaract`
--

CREATE TABLE `rotaract` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `context` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `filename` varchar(300) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rotaractenroll`
--

CREATE TABLE `rotaractenroll` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL,
  `auth` varchar(30) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated-dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`id`, `username`, `password`, `role`, `post`, `name`, `image`, `auth`, `created_dt`, `updated-dt`) VALUES
(1, 'kalanjali1', '1234', 'kalanjalitm', 'B. Tech.', 'Mr Pravej Ahmad', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-12-03 12:19:23'),
(2, 'kalanjalit2', '1234', 'kalanjalitm', 'B.Tech', 'Mr. Bharat Sharma', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:04:12'),
(3, 'kalanjali3', '1234', 'kalanjalitm', 'B.Tech', 'Mr.. Varun Gupta', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:04:48'),
(4, 'kalanjali4', '1234', 'kalanjalitm', 'M.B.A', 'Ms. Swati Agarwal', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:05:27'),
(5, 'kalanjali5', '1234', 'kalanjalitm', 'Poly', 'Mr. Om Singh', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:06:01'),
(6, 'kalanjali6', '1234', 'kalanjalitm', 'Nursing', 'Ms. Sara Edward', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:06:54'),
(7, 'kalanjali7', '1234', 'kalanjalitm', 'Nursing', 'Mrs. Chitra Saxena', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:07:32'),
(8, 'kalanjali8', '1234', 'kalanjalitm', 'Basic Science', 'Ms. Pooja Yadav', '../data/team/professors.jpeg', '', '2021-11-29 09:37:32', '2021-11-29 18:08:10'),
(9, 'gizmofreaks1', '1234', 'gizmofreakstm', 'B.Tech', 'Mr. Sudhanshu Ballabh', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:16:11'),
(10, 'gizmofreaks2', '1234', 'gizmofreakstm', 'B.Tech', 'Ms. Sakshi Tripathi', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:17:01'),
(11, 'gizmofreaks3', '1234', 'gizmofreakstm', 'Poly', 'Mr. Prateesh', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:17:54'),
(12, 'gizmofreaks4', '1234', 'gizmofreakstm', 'M.B.A', 'Mr. Ahmad Jamal', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:18:49'),
(13, 'gizmofreaks5', '1234', 'gizmofreakstm', 'Basic Science', 'Ms. Shashi', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:19:24'),
(14, 'oasis1', '1234', 'oasistm', 'B.Tech', 'Mr. Abhinav Saxena', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:11:30'),
(15, 'oasis2', '1234', 'oasistm', 'B.Tech', 'Ms. Smirti Bhandari', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:12:19'),
(16, 'oasis3', '1234', 'oasistm', 'Poly', 'Ms. Mahak', '../data/team/professors.jpeg', '', '2021-11-29 09:37:39', '2021-11-29 18:12:56'),
(17, 'oasis4', '1234', 'oasistm', 'M.B.A', 'Ms. Sakshi Anand', '../data/team/professors.jpeg', '', '2021-11-29 09:43:30', '2021-11-29 18:13:39'),
(18, 'oasis5', '1234', 'oasistm', 'Nursing', 'Ms. Aafreen', '../data/team/professors.jpeg', '', '2021-11-29 09:43:30', '2021-11-29 18:14:30'),
(19, 'oasis6', '1234', 'oasistm', 'Basic Science', 'Ms. Satjeet Kaur', '../data/team/professors.jpeg', '', '2021-11-29 09:43:30', '2021-11-29 18:15:18'),
(20, 'rotaract1', '1234', 'rotaracttm', 'B.Tech', 'Mr. Anand Bajpayee', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:20:10'),
(21, 'rotaract2', '1234', 'rotaracttm', 'B.Tech', 'Ms. Megha Mishra', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:20:51'),
(22, 'rotaract3', '1234', 'rotaracttm', 'Poly', 'Mr. Astbhuj', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:21:33'),
(23, 'rotaract4', '1234', 'rotaracttm', 'Poly', 'Mr. Aseem', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:22:07'),
(24, 'rotaract5', '1234', 'rotaracttm', 'Nursing', 'Mrs. Ruchi Yadav', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:22:46'),
(25, 'rotaract6', '1234', 'rotaracttm', 'M.B.A', 'Mr. Rahul Mehrotra', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:23:30'),
(26, 'rotaract7', '1234', 'rotaracttm', 'Basic Science', 'Ms. Pooja Mishra', '../data/team/professors.jpeg', '', '2021-11-29 09:45:32', '2021-11-29 18:24:12'),
(27, 'gladiators1', '1234', 'gladiatorstm', 'B.Tech', 'Dr.  Vidhan Banerjee', '../data/team/professors.jpeg', '', '2021-11-29 09:47:42', '2021-11-29 18:09:09'),
(28, 'gladiators2', '1234', 'gladiatorstm', 'M.B.A', 'Mr. Lalit', '../data/team/professors.jpeg', '', '2021-11-29 09:47:42', '2021-11-29 18:01:01'),
(29, 'gladiators3', '1234', 'gladiatorstm', 'Poly', 'Mr. Azeem', '../data/team/professors.jpeg', '', '2021-11-29 09:47:42', '2021-11-29 18:02:47'),
(30, 'gladiators4', '1234', 'gladiatorstm', 'Poly', 'Mr. Shivraj', '../data/team/professors.jpeg', '', '2021-11-29 09:47:42', '2021-11-29 18:03:33'),
(31, 'gladiators5', '1234', 'gladiatorstm', 'Nursing', 'Mr. Chahat', '../data/team/professors.jpeg', '', '2021-11-29 09:47:42', '2021-11-29 18:10:01'),
(32, 'gladiators6', '1234', 'gladiatorstm', 'Basic Science', 'Mr. Dharmendra Kumar', '../data/team/professors.jpeg', '', '2021-11-29 09:47:42', '2021-11-29 18:10:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applygizmofreaks`
--
ALTER TABLE `applygizmofreaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applygladiators`
--
ALTER TABLE `applygladiators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applykalanjali`
--
ALTER TABLE `applykalanjali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyoasis`
--
ALTER TABLE `applyoasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyrotaract`
--
ALTER TABLE `applyrotaract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gizmofreaks`
--
ALTER TABLE `gizmofreaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gizmofreaksenroll`
--
ALTER TABLE `gizmofreaksenroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gladiators`
--
ALTER TABLE `gladiators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gladiatorsenroll`
--
ALTER TABLE `gladiatorsenroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalanjali`
--
ALTER TABLE `kalanjali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalanjalienroll`
--
ALTER TABLE `kalanjalienroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oasis`
--
ALTER TABLE `oasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oasisenroll`
--
ALTER TABLE `oasisenroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rotaract`
--
ALTER TABLE `rotaract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rotaractenroll`
--
ALTER TABLE `rotaractenroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `applygizmofreaks`
--
ALTER TABLE `applygizmofreaks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applygladiators`
--
ALTER TABLE `applygladiators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applykalanjali`
--
ALTER TABLE `applykalanjali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applyoasis`
--
ALTER TABLE `applyoasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applyrotaract`
--
ALTER TABLE `applyrotaract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gizmofreaks`
--
ALTER TABLE `gizmofreaks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gizmofreaksenroll`
--
ALTER TABLE `gizmofreaksenroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gladiators`
--
ALTER TABLE `gladiators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gladiatorsenroll`
--
ALTER TABLE `gladiatorsenroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kalanjali`
--
ALTER TABLE `kalanjali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kalanjalienroll`
--
ALTER TABLE `kalanjalienroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oasis`
--
ALTER TABLE `oasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oasisenroll`
--
ALTER TABLE `oasisenroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rotaract`
--
ALTER TABLE `rotaract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rotaractenroll`
--
ALTER TABLE `rotaractenroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
