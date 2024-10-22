-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 08:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravi_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `description`) VALUES
(1, 'priya', 'eFWGVAERHJ'),
(3, 'priya', 'eFWGVAERHJ'),
(4, 'motive', 'new idea');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `price`, `quantity`, `author_id`) VALUES
(1, 'tiger for dinner', 'eFWGVAERHJ', 22, 0, 1),
(2, 'advantures', 'this is misterious novel', 100, 15, 4),
(3, 'the hound of the baskervi', 'this is misterious novel', 100, 0, 1),
(4, 'cinderalla', 'eFWGVAERHJ', 546, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mem_date` date NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `phone`, `mem_date`, `address`) VALUES
(1, 'delhi', 'raviba98@gmail.com', '123344', 'arehrtzsju', '0000-00-00', '634756857'),
(2, 'ravi', 'raviba98@gmail.com', '', 'okhla 1', '0000-00-00', '9911648276'),
(3, 'rani', 'raviba98@gmail.com', '1234', 'delhi', '0000-00-00', '9911648276'),
(4, 'rahul', 'motivecom.141@gmail.com', '12345', 'noida', '0000-00-00', '9911648276'),
(5, 'rani', 'raviba98@gmail.com', '', '9911648276', '0000-00-00', 'delhi'),
(6, 'dvgf', 'raviba98@gmail.com', '34566', '5634gdbv', '0000-00-00', '3536444'),
(7, 'rani', 'raviba98@gmail.com', '', '9911648276', '2019-03-15', 'delhi'),
(8, 'sachi', 'raviba98@gmail.com', '123', '9911648276', '2019-03-11', 'badarpur'),
(9, 'riya', 'raviba98@gmail.com', '1234', '3536444', '2019-03-18', 'badarpur');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `address`, `email`) VALUES
(1, 'ravi', 'CDzesdgh', 'raviba98@gmail.com'),
(2, 'raj', '123 okhla', 'raviba98@gmail.com'),
(3, 'sweta', '123 saket ', 'raviba98@gmail.com'),
(4, 'rani', 'delhi', 'raviba98@gmail.com'),
(5, '', 'suh6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
