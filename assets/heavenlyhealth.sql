-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 03:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heavenlyhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Tigra Gaizka', 'tigragaizka', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(1, 'Varona', 'Zoe', 'varona@gmail.com', 'HELP', 'blablablablabl'),
(2, 'Priscilla', 'Claire', 'pristine@gmail.com', 'Cristalize Tears', 'blblblblb'),
(6, 'Francesco', 'Bernoulli', 'race@gmail.com', 'Need Tires', 'slaklj nkfjnvfn kndfndk');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `expertise` varchar(20) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `expertise`, `profile`, `photo`) VALUES
(1, 'Felix Kjellberg', 'Cardiologists', 'I am an eccentric doctor, that will clap your heart out of existence', 'dr.felix.jpg'),
(2, 'Marzia Kjellberg', 'Dermatologists', 'I am an artistic doctor, that will paint your skin bright red', 'dr.marzia.jpg'),
(3, 'Sean William', 'Medical Geneticists', 'I am an existential crisis doctor, that will make your life more depressing', 'dr.sean.jpg'),
(4, 'Mark Zuckerberg', 'Neurologists', 'I am an android doctor, that will scan your body very thoroughly', 'dr.zuckerberg.jpg'),
(5, 'Adolf Hitler', 'Physiatrists', 'I am a legendary doctor, that will massacre any living beings', 'dr.adolf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `views`, `picture`, `description`) VALUES
(1, 'COVID-19 Outbreak', '2019-12-28', 9735, 'corona.jpg', 'Newfound virus has been discovered in the late 2019, China. Coronavirus is what it was called, or COVID-19 for short.'),
(2, 'Pandemic Growth', '2020-01-24', 11369, 'growth.jpg', 'COVID-19 has a terrifying growth rate, victim and casualties have been massively increased from just a few months.'),
(3, 'Medical Shortage', '2020-02-19', 7742, 'shortage.jpg', 'Many people around the world are in need of medical treatment, more so that most of the hospitals can not take any more patients.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
