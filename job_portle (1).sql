-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 07:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portle`
--

-- --------------------------------------------------------

--
-- Table structure for table `con_deatail`
--

CREATE TABLE `con_deatail` (
  `con_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_deatail`
--

INSERT INTO `con_deatail` (`con_id`, `f_name`, `e_mail`, `Subject`, `message`) VALUES
(1, 'rasika', 'oudvcl@gmail.com', '', 'hellowwww'),
(5, 'sas', 'n.n@b.co', 'o', 'sads'),
(6, 'pathumika hirushani', 'pathu@gmail.com', 'job', 'hello'),
(7, 'pathumika hirushani', 'pathu@gmail.com', 'job', 'aasfsssxfg'),
(8, 'pathumika hirushani', 'pathu@gmail.com', 'job', 'aasfsssxfg');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `user_id` int(50) NOT NULL,
  `ee_id` int(200) NOT NULL,
  `ee_fnm` varchar(30) NOT NULL,
  `ee_gender` varchar(1) NOT NULL,
  `ee_email` varchar(30) NOT NULL,
  `ee_nic` varchar(50) NOT NULL,
  `ee_add` varchar(300) NOT NULL,
  `ee_mobileno` varchar(10) NOT NULL,
  `ee_current_location` varchar(20) NOT NULL,
  `ee_annualsalary` int(10) NOT NULL,
  `ee_current_industry` varchar(20) NOT NULL,
  `ee_qualification` varchar(100) NOT NULL,
  `ee_jfeild` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `jfeild_1` varchar(50) NOT NULL,
  `jfeild_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`user_id`, `ee_id`, `ee_fnm`, `ee_gender`, `ee_email`, `ee_nic`, `ee_add`, `ee_mobileno`, `ee_current_location`, `ee_annualsalary`, `ee_current_industry`, `ee_qualification`, `ee_jfeild`, `dob`, `jfeild_1`, `jfeild_2`) VALUES
(15, 1, 'rumeshika vidushani', 'F', 'roo@gmail.com', '9870910710', 'hingurakgoda', '0708967456', 'kandy', 10000, 'abc company', 'degree', 'accounting ', '2020-06-04', ' management ', ' HR management '),
(16, 2, 'heshani hirunika', 'F', 'heshani1234@gmail.com', '1234567891', 'kandy', '0708967456', 'kurunegala', 50000, 'itfinder', 'degree', ' it feild   ', '2020-06-25', ' web developer ', ' demostrator '),
(6, 3, 'pathumika hirushani', 'F', 'hirupathu98@gmail.com', '9870910724', 'hingurakgoda', '1234567890', 'kandy', 10000, 'abc company', 'degree', ' graphic        ', '1998-07-27', ' web   ', ' it '),
(20, 4, 'Anushanga heshan', 'M', 'anu@gmail.com', '9870910724', 'colombo', '0123456789', 'kurunegala', 10000, 'teaching', 'degree', 'it manager', '1996-07-27', ' web developer', 'graphic');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `er_id` int(4) NOT NULL,
  `er_fnm` varchar(30) NOT NULL,
  `er_pwd` varchar(10) NOT NULL,
  `er_company` varchar(30) NOT NULL,
  `er_add` varchar(100) NOT NULL,
  `er_ph` varchar(10) NOT NULL,
  `er_email` varchar(30) NOT NULL,
  `er_company_profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`er_id`, `er_fnm`, `er_pwd`, `er_company`, `er_add`, `er_ph`, `er_email`, `er_company_profile`) VALUES
(17, 'abekoon', 'rasika', 'c$c', 'no 52 bbfe', '0710358956', 'rasikamadusanka@gmail.com', 'profile'),
(18, 'abekoon', 'rasika', 'c$c', 'no 52 bbfe', '0710358956', 'rasikamadusanka@gmail.com', 'profile'),
(19, 'ygewfe', '123456', 'fehrigi3', 'fhr9uf', '0265659563', 'Rasikaiewf@gmail.com', 'vicw h3hv3y'),
(20, 'madumal', 'rasika', 'nbvirejv', 'foewuhv', '0260505236', 'Rasika@gmail.com', 'fyuwic');

-- --------------------------------------------------------

--
-- Table structure for table `new_postjob`
--

CREATE TABLE `new_postjob` (
  `j_id` int(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_postjob`
--

INSERT INTO `new_postjob` (`j_id`, `job_title`, `company`, `job_type`, `location`, `discription`, `userId`) VALUES
(19, 'accountant', ' ABC company', 'full-time', 'kandy', 'aaaaaaa', NULL),
(37, 'it manager', ' ABC company', 'intern', 'colombo', 'salary200000', NULL),
(36, 'accountant', ' xyz', 'part-time', 'colombo', 'aaaaaaaaaaa', NULL),
(178, 'accountant', ' it finder', 'intern', 'colombo', 'aaaaaaaaaaaa', NULL),
(248, 'it manager', ' xyz', 'intern', 'kurunagala', 'salary10000', NULL),
(251, 'abc', ' ABC company', 'full-time', 'trinko', 'nee 2 years experience', 15),
(252, 'graphic designer', ' ABC company', 'part-time', 'kurunagala', 'need 2 year experrince', 16),
(253, 'it manager,accountant', ' ABC company', 'part-time', 'kurunagala', 'aaaaa', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'rasika', '$2y$10$hvVkleRhmYSvtW0TzuWEUuInXgGDB4LDGnksOlFxNpYzdAmfGH65e', '2020-05-23 13:42:06'),
(2, 'madusanka', '$2y$10$WlUG8tlIEkPyE1wYjSRZVefqnAcsfcVPifggfU3QEaRv2OqdBZKiW', '2020-05-25 06:48:30'),
(3, 'rasikam', '$2y$10$LyJJKXZIMrXbWefyxoF0l.o8PcdjkpehEtWf1t5MJBoa2AmWpDyKK', '2020-05-25 06:52:13'),
(4, 'patumika', '$2y$10$lGkRW1an7nJynmx07CkP7OaBN.KXVOfKbCh.abIgDrld/BQGOF/QG', '2020-05-25 06:59:28'),
(5, 'nuwan', '$2y$10$6JsmMUbczXPPxwLUid1XwuTTCjWQ8GIgl9ppDLac7qosAXXnffzVS', '2020-06-08 23:38:12'),
(6, 'pathumika', '$2y$10$MH20XArEDZZwZZH2QQxf2.8OMARAqK4xNRXhjzRY/ITQqeLmVTX56', '2020-06-10 08:21:20'),
(7, 'hiru', '$2y$10$NKu/XLA.AQtEufMiBBTgLOQOkZr2BPvC.HegMJHqyWK9uw3Hx08x2', '2020-06-14 13:03:33'),
(8, 'abcd', '$2y$10$O6hxRGRNDPaCJz8TgLV3V.2SJpVf5VJt63Tq/iwiaxVbIV4LcgG8C', '2020-06-15 21:43:12'),
(9, 'chethiya', '$2y$10$Xjfzvtat3gfSsGE.nrjieOsmhGVNlhBh3QxKzDrfy6w56II0J6Csa', '2020-06-15 22:08:09'),
(10, 'pissek', '$2y$10$UnVZfIZ/rZevw/YEfqRlJ.jfrPPTOq64o0QEVb4.hnmTYf/bzjKnO', '2020-06-15 22:36:53'),
(11, 'heshan', '$2y$10$utCgSpmWEXhmhEBZ460bkOw/5Bg1i.V6ir9cpRvmOhrlLMdvqqKKu', '2020-06-16 17:50:35'),
(12, 'test12', '$2y$10$o7hue0fol893JzVUlAM4XOXEFatyEN./XDI.17rLOKnTHU63iq3NG', '2020-06-16 19:00:58'),
(13, 'abs', '$2y$10$FLFpBHiSxMvN4xzd.V6DpumwxGQ5mYj/Ou/j0KekkXneL3UhIuEnW', '2020-06-21 21:50:45'),
(14, 'saman', '$2y$10$DbJvUSrQyGvAxPYRp5X.J.aWhG0P9k/.MPwgpxTggxzqwv8RU4yn.', '2020-06-21 21:51:59'),
(15, 'rumeshika', '$2y$10$fRQUWviCVyF.Do.aXDzRV.wiegRu3hKt5smXkJGvwGs3CBpjNNf4.', '2020-06-22 00:43:10'),
(16, 'heshani', '$2y$10$WhEKMrAgzxIVQhLE5G/dwuizP/CyiX/j8DF08w9E63Yqmeikzdeda', '2020-06-22 11:29:26'),
(17, 'heeshani', '$2y$10$2PprMdWn4BER1DTtZhXKjeo.QRpXp/p/oo0GcSYL2C9ZmWdxAmELa', '2020-06-24 12:21:56'),
(18, 'sunethra', '$2y$10$8iE3qL57R5/MW75AVlWfvem0UyLzabWCk5NMUoc6AuP5SXTGM7VPS', '2020-06-24 12:23:06'),
(19, 'dulmika', '$2y$10$MacNvGty.dju30ZFkzaPJe8x4ERcIOl74gFULyBvKB2XQ5yPGsFnK', '2020-06-26 22:42:20'),
(20, 'anushanga', '$2y$10$7Qylfq0aNjN3/ZypgnnpruA.DvfHirBT..J8L./tGtnow/ErFKfni', '2020-06-28 12:42:13'),
(21, 'menuli', '$2y$10$Ci3E26HiqnYOEM/LduVHa.J9Hls2Ur.bHZ3bSwEu1D.jBXuUM5npW', '2021-08-08 19:18:21'),
(22, 'kamal', '$2y$10$xmxrxZuoaAtsf51xkOnIt.b2tBu1O.KEexdhUfjTBEOmN1IwBrZu6', '2021-08-08 19:29:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `con_deatail`
--
ALTER TABLE `con_deatail`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`er_id`);

--
-- Indexes for table `new_postjob`
--
ALTER TABLE `new_postjob`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `con_deatail`
--
ALTER TABLE `con_deatail`
  MODIFY `con_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ee_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `er_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `new_postjob`
--
ALTER TABLE `new_postjob`
  MODIFY `j_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
