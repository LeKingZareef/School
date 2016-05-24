-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2016 at 03:41 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `logboek`
--

CREATE TABLE IF NOT EXISTS `logboek` (
  `logboek_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` varchar(255) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `invul_datum` date NOT NULL,
  `verrichtte_werkzaamheden` varchar(255) NOT NULL,
  `aantal_uren` int(2) NOT NULL,
  `opmerking` varchar(255) NOT NULL,
  `taken_naam` varchar(225) NOT NULL,
  PRIMARY KEY (`logboek_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `logboek`
--

INSERT INTO `logboek` (`logboek_id`, `users_id`, `users_name`, `invul_datum`, `verrichtte_werkzaamheden`, `aantal_uren`, `opmerking`, `taken_naam`) VALUES
(28, '5', 'Akash', '2016-03-23', 'fdsa', 1, 'dsf', 'Wakaman'),
(29, '5', 'Akash', '2016-03-24', 's', 1, 'd', 'Wakaman'),
(30, '5', 'Akash', '2016-03-31', 'd', 1, 'd', 'Test100'),
(31, '5', 'Akash', '2016-03-23', 'Afgerond', 2, 'Niks', 'Wakaman'),
(33, '6', 'Kalista', '2016-03-03', 'Gevonden link staat in de opmerking ', 1, 'link', 'Maakt PPT'),
(34, '5', 'Akash', '2016-03-03', '1 kip gekocht', 1, 'opzoek naar nog 1', 'Koop Kip'),
(35, '5', 'Akash', '2016-03-03', 'kip nog 2 gekocht', 1, 'afgerond', 'Kip');

-- --------------------------------------------------------

--
-- Table structure for table `projecten`
--

CREATE TABLE IF NOT EXISTS `projecten` (
  `projecten_id` int(11) NOT NULL AUTO_INCREMENT,
  `projecten_naam` varchar(25) NOT NULL,
  `projecten_owner` varchar(25) NOT NULL,
  `projecten_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `projecten_einde` date NOT NULL,
  `projecten_beschrijving` text NOT NULL,
  `projecten_status` varchar(25) NOT NULL,
  PRIMARY KEY (`projecten_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `projecten`
--

INSERT INTO `projecten` (`projecten_id`, `projecten_naam`, `projecten_owner`, `projecten_start`, `projecten_einde`, `projecten_beschrijving`, `projecten_status`) VALUES
(1, 'Klemmen', 'Anfer', '2016-02-04 01:11:34', '2016-03-10', '																		fdasfsafdasdf		\r\nfdasbmfbdgasmfhbask\r\ndfbvdasbgfjas																											', 'active'),
(2, 'dfas', 'fdasfas', '2016-02-04 01:13:49', '2016-03-31', '									fdsafasdffasfasfasdfdas								fdasfdsfasdf', 'active'),
(3, 'Bang', 'Anfer', '2016-02-25 17:21:53', '2016-02-17', 'Zareef', 'afgerond'),
(20, 'Project van Zareef', 'Zareef', '2016-03-01 03:22:18', '2016-03-01', '																		Oke now is this text that i just tested 																', 'afgerond'),
(21, 'DA', 'Zareef', '2016-03-04 00:52:32', '2016-03-04', 'We moeten presenteren die dag ', 'afgerond'),
(22, 'Hold', 'Anfer', '2016-03-04 01:19:44', '2016-03-25', 'test hold', 'hold');

-- --------------------------------------------------------

--
-- Table structure for table `projecten_taken_users`
--

CREATE TABLE IF NOT EXISTS `projecten_taken_users` (
  `taken_id` int(11) NOT NULL AUTO_INCREMENT,
  `taken_naam` varchar(25) NOT NULL,
  `users_name` varchar(25) NOT NULL,
  `projecten_naam` varchar(25) NOT NULL,
  `taken_status` varchar(225) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`taken_id`),
  UNIQUE KEY `taken_id` (`taken_id`),
  UNIQUE KEY `taken_id_2` (`taken_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `projecten_taken_users`
--

INSERT INTO `projecten_taken_users` (`taken_id`, `taken_naam`, `users_name`, `projecten_naam`, `taken_status`) VALUES
(3, 'Test2', 'Anfer', 'Klemmen', 'active'),
(4, 'Test4', 'Anfer', 'Klemmen', 'active'),
(5, 'Test5', 'Zareef', 'Klemmen', 'active'),
(6, 'Test6', 'Zareef', 'Klemmen', 'active'),
(7, 'Wakaman', 'Akash', 'Klemmen', 'afgerond'),
(9, 'Test100', 'Akash', 'Klemmen', 'active'),
(10, 'Koop Kip', 'Akash', 'Klemmen', 'active'),
(11, 'Kip', 'Akash', 'Klemmen', 'afgerond'),
(12, 'Maakt PPT', 'Kalista', 'DA', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `taken`
--

CREATE TABLE IF NOT EXISTS `taken` (
  `taken_id` int(11) NOT NULL AUTO_INCREMENT,
  `taken_naam` varchar(25) NOT NULL,
  `taken_beschrijving` text NOT NULL,
  PRIMARY KEY (`taken_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `taken`
--

INSERT INTO `taken` (`taken_id`, `taken_naam`, `taken_beschrijving`) VALUES
(16, 'rwqer', 'rewr'),
(17, 'fgdf', 'gdf'),
(18, 'dsfsd', 'fdsfa'),
(19, 'gdfg', 'fdsfas'),
(20, 'Test', 'Testing what it means to be'),
(21, 'Test2', 'Faya bondem .. bleg bleg '),
(22, 'Test4', 'Test444'),
(23, 'Test5', 'Tessteeetdkjgja'),
(24, 'Test6', 'Test6,.fdskjhfkas'),
(25, 'Wakaman', 'Bangbabg'),
(26, 'fds', 'fasd'),
(27, 'Test100', 'Idk'),
(28, 'Koop Kip', 'Bij Chinco Slagerij'),
(29, 'Kip', 'Nog 2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(25) NOT NULL,
  `users_password` varchar(25) NOT NULL,
  `users_type` varchar(11) NOT NULL,
  `users_achternaam` varchar(25) NOT NULL,
  `users_gebdatum` date NOT NULL,
  `users_email` varchar(25) NOT NULL,
  `users_telefoon` varchar(11) NOT NULL,
  `users_activeer` tinyint(1) NOT NULL DEFAULT '1',
  `users_about` text NOT NULL,
  `users_profile` varchar(32) NOT NULL,
  `users_timestmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_password`, `users_type`, `users_achternaam`, `users_gebdatum`, `users_email`, `users_telefoon`, `users_activeer`, `users_about`, `users_profile`, `users_timestmp`) VALUES
(1, 'Zareef', 'password', 'Manager', 'Soetodrono', '2016-02-17', 'zareefsoeto@gmail.com', '+5977243881', 1, 'Oke oke oke ', 'images/profile/d2a851f19a.jpg', '2016-03-04 02:18:31'),
(2, 'Anfer', 'password', 'Manager', 'Blijd', '1997-01-09', 'anfernee@gmail.com', '2244331', 1, 'Hes annoying af xD ', 'images/profile/66689abe83.jpg', '2016-03-04 01:19:14'),
(4, 'Moidin', 'password', 'Werknemer', 'Arsenio', '2016-02-05', 'arsineo@hotmail.com', '115', 1, 'Hes good .. very good', 'images/profile/cf4a8e1331.jpg', '2016-03-04 02:38:51'),
(5, 'Akash', 'password', 'Werknemer', 'Mathoera', '2016-03-14', 'dfas', '12', 1, 'fdfs', 'images/profile/7d0a400cad.jpg', '2016-03-04 02:19:35'),
(6, 'Kalista', 'password', 'Werknemer', 'Alistar', '2016-03-03', 'ali123@gmail.com', '112453', 0, 'Just ADC', '', '2016-03-04 01:21:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
