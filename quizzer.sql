-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 01:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'Category 1'),
(2, 'Category 2'),
(3, 'Category 3');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'PHP: Hypertext Preprocessor'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 0, 'Personal Home Page'),
(4, 1, 0, 'Personal Hypertext Preprocessor'),
(5, 1, 0, 'PHP Paravarka'),
(6, 2, 1, 'echo \"hello world\";'),
(7, 2, 0, '\"hello world\";'),
(8, 2, 0, 'document.write(\"hello world\");'),
(9, 2, 0, 'cin>>Hi'),
(10, 2, 0, 'asdasdasd'),
(11, 3, 1, 'ASP'),
(12, 3, 1, 'RUBY'),
(13, 3, 1, 'PHP'),
(14, 5, 1, 'asdasd'),
(15, 5, 0, 'asdasd'),
(16, 6, 0, 'qwe'),
(17, 6, 1, 'qwe'),
(18, 7, 1, 'Choice NO 1'),
(19, 7, 0, 'Choice NO2'),
(20, 7, 0, 'Choice NO3'),
(21, 8, 1, 'Choice NO 1'),
(22, 8, 0, 'Choice NO2'),
(23, 8, 0, 'Choice NO3'),
(24, 9, 1, 'Choice NO 1'),
(25, 9, 0, 'Choice NO2'),
(26, 9, 0, 'Choice NO3'),
(27, 10, 1, 'ASP'),
(28, 10, 0, 'RUBY'),
(29, 10, 0, 'PHP'),
(30, 11, 1, 'ASP'),
(31, 11, 0, 'RUBY'),
(32, 11, 0, 'PHP'),
(33, 12, 1, 'asdasd'),
(34, 12, 0, 'asdasd'),
(35, 12, 0, 'asdasd'),
(36, 13, 1, 'asdasd'),
(37, 13, 0, 'asdasd'),
(38, 13, 0, 'asdasd'),
(39, 14, 1, 'qweqw'),
(40, 14, 0, 'qweqw'),
(41, 14, 0, 'qweqwe'),
(42, 15, 1, 'h'),
(43, 15, 0, 'e'),
(44, 15, 0, 'e'),
(45, 16, 0, 'b'),
(46, 16, 1, 'y'),
(47, 16, 0, 'y'),
(48, 17, 0, 'g'),
(49, 17, 0, 'o'),
(50, 17, 1, 'o'),
(51, 18, 1, 'ASP'),
(52, 18, 0, 'RUBY'),
(53, 18, 0, 'PHP'),
(54, 19, 1, '2'),
(55, 19, 0, '2'),
(56, 19, 0, '2'),
(57, 20, 0, 'asdasd'),
(58, 20, 1, 'sadasdas'),
(59, 21, 0, 'qweqwe'),
(60, 21, 1, '22'),
(61, 21, 0, '33'),
(62, 22, 1, 'qweqwe'),
(63, 22, 0, 'asdasd'),
(64, 23, 1, 'asdasd'),
(65, 23, 0, '232'),
(66, 23, 0, '3');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(0, ''),
(1, 'What does PHP stand for?'),
(2, 'How do you write \"Hello World\" in PHP'),
(3, 'What is the best server side language?'),
(5, 'asdas'),
(6, 'asdasd'),
(7, 'Question NO 1'),
(8, 'Question NO 1'),
(9, 'Question NO 1'),
(10, 'What is the best server side language?'),
(11, 'asdas'),
(12, ''),
(13, 'asdasd'),
(14, 'cms test 111'),
(15, 'Hello'),
(16, 'Bye'),
(17, 'Goodbye'),
(18, 'What is the best server side language?'),
(19, 'What is the best server side language?'),
(20, 'asdasdasdasd'),
(21, 'qweqweqwe'),
(22, 'asdasd'),
(23, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `quiz_image` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question_number`, `title`, `category`, `content`, `quiz_image`, `user_id`) VALUES
(1, 0, 'Title test', 'Category test', '', '', 1),
(2, 9, 'Title test', 'Category test', '', '', 1),
(3, 10, 'Test Title From Create', 'Category Test', '', '', 1),
(4, 11, 'Test Title From Create', 'Category Test1', '', '', 1),
(5, 12, 'asdasd', '', '', '', 1),
(6, 13, 'asdasd', '', '', '', 1),
(7, 14, 'Test Title From Create', '', 'Test Title From Create', '', 1),
(8, 15, 'Test by new id', '', 'Test by new id', '', 5),
(9, 16, 'Test by new id', '', 'Test by new id', '', 5),
(10, 17, 'Test by new id', '', 'Test by new id', '', 5),
(11, 18, 'new', 'Category 1', '', '', 0),
(12, 19, 'new', 'Category 1', '', '', 0),
(13, 20, 'new', 'Category 1', '', '', 0),
(14, 21, 'new', 'Category 1', '      asdasdasd                          ', '', 1),
(15, 22, 'Test Title From Create', 'Category 2', '', '             sadasdasd                    ', 5),
(16, 23, 'asdasda', 'Category 2', 'qweqweqwe', 'image_5.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `question_title` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `question_title`, `user_id`, `username`, `score`) VALUES
(1, 'Test by new id	', 0, 'Edwin Diaz', 4),
(2, 'Test by new id	', 0, 'Amanda Wadsen', 2),
(3, 'Title test', 0, 'Ewelina', 2),
(4, 'Title test', 1, 'Amanda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `privileges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `surname`, `email`, `privileges`) VALUES
(1, 'evaldas', 'evaldas', '', '', '0', 0),
(3, 'username1', 'p1', 'name1', 'surname1', 'email1', 0),
(5, 'evaldasdoda', 'ad5742ldad', 'Evaldas', 'Doda', 'evaldasdoda@hotmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
