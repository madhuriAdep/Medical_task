-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 03:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_task`
--

-- --------------------------------------------------------

-- Table structure for table `details`
--

CREATE TABLE `details` (
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `maritalstatus` varchar(200) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `noname` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `peraddress` varchar(200) NOT NULL,
  `curaddress` varchar(200) NOT NULL,
  `monumber` int(10) NOT NULL,
  `othernumber` int(10) NOT NULL,
  `idnumber` varchar(10) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `licnumber` varchar(10) NOT NULL,
  `email` varchar(220) NOT NULL,
  `emerlastname` varchar(200) NOT NULL,
  `emerfirstname` varchar(200) NOT NULL,
  `emeraddress` varchar(200) NOT NULL,
  `emerphnumber` int(10) NOT NULL,
  `emermonumber` int(10) NOT NULL,
  `nomname` varchar(100) NOT NULL,
  `scname` varchar(200) NOT NULL,
  `yeara` varchar(20) NOT NULL,
  `instiname` varchar(500) NOT NULL,
  `yearat` varchar(20) NOT NULL,
  `instituname` varchar(500) NOT NULL,
  `subname` varchar(200) NOT NULL,
  `yearatt` varchar(20) NOT NULL,
  `institutename` varchar(500) NOT NULL,
  `subdname` varchar(200) NOT NULL,
  `yearatten` varchar(20) NOT NULL,
  `school` varchar(200) NOT NULL,
  `ug` varchar(200) NOT NULL,
  `pg` varchar(100) NOT NULL,
  `certi` varchar(500) NOT NULL,
  `diploma` varchar(200) NOT NULL,
  `others` varchar(100) NOT NULL,
  `empname` varchar(200) NOT NULL,
  `datebirth` date NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `famback` varchar(500) NOT NULL,
  `perinterest` varchar(500) NOT NULL,
  `goals` varchar(500) NOT NULL,
  `intro` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`lastname`, `middlename`, `firstname`, `gender`, `birthdate`, `maritalstatus`, `nationality`, `bloodgroup`, `noname`, `relation`, `peraddress`, `curaddress`, `monumber`, `othernumber`, `idnumber`, `pan`, `licnumber`, `email`, `emerlastname`, `emerfirstname`, `emeraddress`, `emerphnumber`, `emermonumber`, `nomname`, `scname`, `yeara`, `instiname`, `yearat`, `instituname`, `subname`, `yearatt`, `institutename`, `subdname`, `yearatten`, `school`, `ug`, `pg`, `certi`, `diploma`, `others`, `empname`, `datebirth`, `nickname`, `famback`, `perinterest`, `goals`, `intro`) VALUES
('rao', 'raj', 'ravi', 'Male', '0000-00-00', 'nmaride', 'indian', '0+', 'raj', 'father', 'pune', 'pune', 2147483647, 2147483647, '354645546', '54fg447', 'gf454548', 'ravi@gmail.com', 'rao', 'raj', 'pune', 2147483647, 2147483647, 'raj', 'bajjnjn pune', '2013', 'sdnjn sdjnk pune', '2015', 'sb jhjdkdlk pune', 'graduation', '2018', 'bdjhbn jkbk pune', 'post graduation', '2021', 'high school', 'bba', 'mba', 'java python php AI', 'civil', 'no', 'ravi', '0000-00-00', 'ravi', 'born in pune.\r\n4 siblings.\r\nin childhood its very healthy environment. ', 'watching movies, tv.\r\nsincerity.', 'reach at high position', 'born in pune.\r\n4 siblings.\r\nin childhood its very healthy environment. watching movies, tv.reach at high position\r\nsincerity.'),
('rao', 'raj', 'ravi', 'Male', '0000-00-00', 'nmaride', 'indian', '0+', 'raj', 'father', 'pune', 'pune', 2147483647, 2147483647, '354645546', '54fg447', 'gf454548', 'ravi@gmail.com', 'rao', 'raj', 'pune', 2147483647, 2147483647, 'raj', 'bajjnjn pune', '2013', 'sdnjn sdjnk pune', '2015', 'sb jhjdkdlk pune', 'graduation', '2018', 'bdjhbn jkbk pune', 'post graduation', '2021', 'high school', 'bba', 'mba', 'java python php AI', 'civil', 'no', 'ravi', '0000-00-00', 'ravi', 'born in pune.\r\n4 siblings.\r\nin childhood its very healthy environment. ', 'watching movies, tv.\r\nsincerity.', 'reach at high position', 'born in pune.\r\n4 siblings.\r\nin childhood its very healthy environment. watching movies, tv.reach at high position\r\nsincerity.'),
('Joshi', 'Jay', 'Ram', 'Male', '0000-00-00', 'unmaride', 'indian', 'A+', 'Jay', 'father', 'Mumbai', 'pune', 2147483647, 2147483647, '6352356', 'dd44fd54', '46546fd', 'ram@gmail.com', 'joshi', 'jay', 'mumbai', 2147483647, 2147483647, 'jay', 'bosco high school pune ', '2013', 'hhcp junior high school pune', '2015', 'hmvm college pune', 'bba', '2018', 'imcc college pune', 'mba', '2021', '60', '60', '60', 'java php pyhton AI ', '61', 'non', 'Ram', '0000-00-00', 'Ram', 'born in Pune. live with family. we have 4 siblings. a healthy childhood environment.', 'watching movies, tv, and traveling. I am proud of my sincerity.', 'To reach at high position.', 'born in Pune. live with family. we have 4 siblings. a healthy childhood environment. To reach at a high position.'),
('Joshi', 'Jay', 'Ram', 'Male', '0000-00-00', 'unmaride', 'indian', 'A+', 'Jay', 'father', 'Mumbai', 'pune', 2147483647, 2147483647, '6352356', 'dd44fd54', '46546fd', 'ram@gmail.com', 'joshi', 'jay', 'mumbai', 2147483647, 2147483647, 'jay', 'bosco high school pune ', '2013', 'hhcp junior high school pune', '2015', 'hmvm college pune', 'bba', '2018', 'imcc college pune', 'mba', '2021', '60', '60', '60', 'java php pyhton AI ', '61', 'non', 'Ram', '0000-00-00', 'Ram', 'born in Pune. live with family. we have 4 siblings. a healthy childhood environment.', 'watching movies, tv, and traveling. I am proud of my sincerity.', 'To reach at high position.', 'born in Pune. live with family. we have 4 siblings. a healthy childhood environment. To reach at a high position.'),
('Joshi', 'Jay', 'Ram', 'Male', '0000-00-00', 'unmaride', 'indian', 'A+', 'Jay', 'father', 'Mumbai', 'pune', 2147483647, 2147483647, '6352356', 'dd44fd54', '46546fd', 'ram@gmail.com', 'joshi', 'jay', 'mumbai', 2147483647, 2147483647, 'jay', 'bosco high school pune ', '2013', 'hhcp junior high school pune', '2015', 'hmvm college pune', 'bba', '2018', 'imcc college pune', 'mba', '2021', '60', '60', '60', 'java php pyhton AI ', '61', 'non', 'Ram', '0000-00-00', 'Ram', 'born in Pune. live with family. we have 4 siblings. a healthy childhood environment.', 'watching movies, tv, and traveling. I am proud of my sincerity.', 'To reach at high position.', 'born in Pune. live with family. we have 4 siblings. a healthy childhood environment. To reach at a high position.'),
('vardhan', 'jay', 'sai', 'Male', '0000-00-00', 'unmarried', 'indian', 'o+', 'jay', 'father', 'pune', 'pune', 2147483647, 2147483647, '256265', 'vdc5654dff', '451fvdv', 'sai@gmail.com', 'vardhan', 'jay', 'pune', 2147483647, 2147483647, 'jay', 'bosco high school pune', '2013', 'hhcp high school pune', '2015', 'hmvm college pune', 'bba', '2015', 'imcc college', 'mba', '2021', '60', '60', '60', 'java', '60', '0', 'sai', '0000-00-00', 'sai', 'i born in pune', 'watching tv, movies', 'reach at good position', 'experence person'),
('sai', 'jay', 'ram', 'Male', '0000-00-00', 'unamarried', 'indian', 'o+', 'jay', 'father', 'pune', 'pune', 566541646, 2147483647, '5656', '454df5646', '5666 fd', 'ram@gmail.com', 'sai', 'jay', 'pune', 2147483647, 589564545, 'jay', 'bosco high school pune', '2013', 'hhcp sec high school pune', '2015', 'hmvm college pune', 'bba', '2018', 'imcc college', 'mba', '2021', '60', '60', '60', 'phh', '60', '0', 'ram', '0000-00-00', 'ram', 'born in pune', 'watch movies', 'reach at high position', 'reach at high position');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

