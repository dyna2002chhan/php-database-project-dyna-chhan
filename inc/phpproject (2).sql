-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 05:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `firstname`, `lastname`, `profile_pic`) VALUES
(1, 'ឌីណា', 'ឆន', ''),
(2, 'កុសល', 'ជុំ', ''),
(3, 'ណារិន', 'ជា', ''),
(4, 'តុលា', 'ឈួយ', ''),
(5, 'ដាវីដ', 'ឆន', ''),
(6, 'ទេវី', 'បុប្ផា', ''),
(7, 'កញ្ញា', 'សុគុណ', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `doctor_picture` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `date`, `doctor_picture`, `description`, `doctor_id`) VALUES
(72, 'ពេទ្យធ្មេញ', '2021-08-21 10:46:30', 'post-61207716dba9e1.49905441.jpg', 'មានជំនាញច្បាស់លាស់ជាមួយបទពិសោធន៍បញ្ចប់ការសិក្សាពីបរទេស', 1),
(73, 'វះកាត់បេះដូង', '2021-08-21 11:14:50', 'post-61207dbaec1006.18005858.jpg', 'មានជំនាញច្បាស់លាស់ និងបានបញ្ចប់ការសិក្សាពីសហរដ្ឋអាមេរិកk', 2),
(74, 'ផ្នែកចិត្តសាស្ត្រ', '2021-08-21 11:16:05', 'post-61207e0566cfd3.87920397.jpg', 'មានជំនាញច្បាស់ក្នុងការពិភាក្សារោគសញ្ញាផ្នែក ចិត្តសាស្ត្រ', 3),
(75, 'សុខភាពផ្លូវភេទ', '2021-08-21 21:49:37', 'post-612112813e6f66.81382039.jpg', 'ពិភាក្សាររកហេតុផលបានច្បាស់លាស់', 4),
(76, 'ផ្នែកវះកាត់ច្រមុះ', '2021-08-21 21:51:06', 'post-612112daedd669.12585971.png', 'ប្រកបដោយទំនុកចិត្តរាល់ការដំណើរការ', 5),
(77, 'ជំងឺរោគចិត្ត', '2021-08-21 21:53:24', 'post-612113646c37f7.62357228.jpg', 'គ្រូពេទ្យនឹងធ្វើអោយមនុស្សរោគចិត្តទាំងអស់ក្លាយជាមនុស្សអស្ចារ្យធម្មតានឹងគេ', 6),
(78, 'ផ្នែកជំងឺស្នេហា', '2021-08-21 22:17:55', 'post-61211923309808.75710121.jpg', 'ទទួលព្យាបាលគ្រប់វ័យ', 7),
(80, 'Harry Potter', '2021-08-22 19:24:23', 'post-612241f7f02961.36816492.jpg', 'មានជំនាញច្បាស់លាស់ជាមួយបទពិសោធន៍បញ្ចប់ការសិក្សាពីបរទេស', 3),
(81, 'ពេទ្យស្អាត', '2021-08-22 20:24:19', 'post-612250030ea7a6.42329230.jpg', 'មានចំណេះដឹងល្អ', 3),
(82, 'ពេទ្យស្អាត', '2021-08-22 20:30:04', 'post-6122515cc51e28.87529657.jpg', 'មានជំនាញច្បាស់លាស់ជាមួយបទពិសោធន៍បញ្ចប់ការសិក្សាពីបរទេស', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `role`, `password`) VALUES
(1, 'dyna', 'normal', 0),
(2, 'dyna', 'normal', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_ibfk_2` (`doctor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`doctor_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
