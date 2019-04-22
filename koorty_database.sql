-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 09:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koorty database`
--

-- --------------------------------------------------------

--
-- Table structure for table `la liga`
--

CREATE TABLE `la liga` (
  `club` text NOT NULL,
  `matchesplayed` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `ga` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `pts` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `la liga`
--

INSERT INTO `la liga` (`club`, `matchesplayed`, `win`, `draw`, `lose`, `gf`, `ga`, `gd`, `pts`, `username`) VALUES
('Bacalona', 20, 19, 1, 0, 28, 1, 27, 58, 'username');

-- --------------------------------------------------------

--
-- Table structure for table `matchestime`
--

CREATE TABLE `matchestime` (
  `team1_name` text NOT NULL,
  `team1_result` text NOT NULL,
  `team1_logo` text NOT NULL,
  `team2_name` text NOT NULL,
  `team2_result` text NOT NULL,
  `team2_logo` text NOT NULL,
  `tv_name` text NOT NULL,
  `date1` text NOT NULL,
  `time1` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matchestime`
--

INSERT INTO `matchestime` (`team1_name`, `team1_result`, `team1_logo`, `team2_name`, `team2_result`, `team2_logo`, `tv_name`, `date1`, `time1`, `username`) VALUES
('liverpool', '4', 'Liverpool.PNG', 'Chelsea', '0', 'Chelsea.PNG', 'Bein sport 3', '30/6/20/18', '17:00AM', 'el7alawani'),
('real madrid', '0', '', 'man city', '0', '', 'Bein sport', '12/3/2018', '17:55:pm', 'mero');

-- --------------------------------------------------------

--
-- Table structure for table `news1`
--

CREATE TABLE `news1` (
  `description` text NOT NULL,
  `image` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news1`
--

INSERT INTO `news1` (`description`, `image`, `username`) VALUES
('mmmmmmmmmmmmm', ' https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2018/12/28/e7631b99-a298-4376-a002-bdebc3e6256e/Fulham-v-Wolves.png', 'el7alawani'),
('bb', ' https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2018/12/28/e7631b99-a298-4376-a002-bdebc3e6256e/Fulham-v-Wolves.png', 'joo'),
('updated', ' https://e00-marca.uecdn.es/assets/multimedia/imagenes/2019/01/13/15474165100980.jpg', 'mero');

-- --------------------------------------------------------

--
-- Table structure for table `preimer league`
--

CREATE TABLE `preimer league` (
  `club` text NOT NULL,
  `matchesplayed` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `ga` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `pts` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preimer league`
--

INSERT INTO `preimer league` (`club`, `matchesplayed`, `win`, `draw`, `lose`, `gf`, `ga`, `gd`, `pts`, `username`) VALUES
('Aresnal', 20, 11, 5, 4, 42, 30, 12, 38, 'el7alawani'),
('Bournemouth', 18, 8, 2, 8, 27, 28, -1, 26, 'el7alawani'),
('Brighton', 20, 7, 4, 9, 22, 27, -5, 25, 'el7alawani'),
('Burnley FC', 18, 3, 3, 12, 16, 36, -20, 12, 'el7alawani'),
('Cardiff City', 18, 4, 2, 12, 18, 38, -20, 14, 'el7alawani'),
('Chelsea', 19, 12, 4, 3, 37, 16, 21, 40, 'el7alawani'),
('Crystal Palace', 18, 5, 3, 10, 17, 25, -8, 18, 'el7alawani'),
('Everton', 20, 7, 6, 7, 31, 30, 0, 27, 'el7alawani'),
('Fullham', 20, 3, 5, 12, 18, 43, -25, 14, 'el7alawani'),
('Hudderfield', 20, 2, 4, 14, 12, 35, -23, 10, 'el7alawani'),
('Leicester City', 20, 8, 4, 8, 24, 23, 1, 28, 'el7alawani'),
('liverpool', 20, 17, 0, 3, 48, 8, 40, 40, 'joo'),
('Manchester City', 19, 14, 2, 3, 51, 15, 35, 46, 'mero'),
('Manchester United', 19, 9, 5, 5, 37, 31, 6, 32, 'el7alawani'),
('Newcastle', 20, 4, 6, 10, 15, 27, -12, 18, 'el7alawani'),
('Southampton', 18, 3, 6, 9, 19, 33, -14, 15, 'el7alawani'),
('Tottenham', 20, 16, 0, 5, 43, 21, 22, 48, 'gemy27'),
('Watford', 20, 8, 4, 8, 27, 28, -1, 28, 'el7alawani'),
('wegan', 19, 3, 4, 12, 12, 35, 23, 13, 'el7alawani'),
('West Ham', 18, 7, 3, 8, 25, 27, -2, 24, 'el7alawani');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `existingallnews` int(11) NOT NULL,
  `easeofuse` int(11) NOT NULL,
  `easeofaccess` int(11) NOT NULL,
  `ratingaswhole` int(11) NOT NULL,
  `comment` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`existingallnews`, `easeofuse`, `easeofaccess`, `ratingaswhole`, `comment`, `username`) VALUES
(45, 45, 25, 96, 'I think this is good website\r\n ', 'el7alawani'),
(5, 35, 50, 50, 'jooo\r\n ', 'joo');

-- --------------------------------------------------------

--
-- Table structure for table `top goals_assists laliga`
--

CREATE TABLE `top goals_assists laliga` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `club` text NOT NULL,
  `goals` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top goals_assists laliga`
--

INSERT INTO `top goals_assists laliga` (`id`, `firstname`, `secondname`, `club`, `goals`, `assists`, `username`) VALUES
(0, 'Lionel', 'Messi', 'barcalona', 12, 9, 'el7alawanii'),
(2, 'Luis', 'Suariez', 'bacalona', 9, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `top goals_assists pl`
--

CREATE TABLE `top goals_assists pl` (
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `club` text NOT NULL,
  `goals` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top goals_assists pl`
--

INSERT INTO `top goals_assists pl` (`firstname`, `secondname`, `club`, `goals`, `assists`, `username`) VALUES
('Mohamed', 'Salah', 'Lverpool', 12, 7, 'el7alawani');

-- --------------------------------------------------------

--
-- Table structure for table `users_accounts`
--

CREATE TABLE `users_accounts` (
  `f_name` text NOT NULL,
  `s_name` text NOT NULL,
  `phone_number` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_accounts`
--

INSERT INTO `users_accounts` (`f_name`, `s_name`, `phone_number`, `username`, `password`, `gender`, `birthday`) VALUES
('mohamed', 'abdelbaset', 1140448964, 'el7alawani', '28111997', 'male', '1997-11-28'),
('youssef', 'mohamed', 1140448964, 'joo', '159159', 'male', '1997-09-25'),
('amira', 'abdelbaset', 1283949780, 'mero', 'mero123', 'female', '1989-03-22'),
('Mohamed', 'Gamal', 1156883581, 'gemy27', '123456', 'male', '1998-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `la liga`
--
ALTER TABLE `la liga`
  ADD PRIMARY KEY (`club`(100));

--
-- Indexes for table `preimer league`
--
ALTER TABLE `preimer league`
  ADD PRIMARY KEY (`club`(100));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
