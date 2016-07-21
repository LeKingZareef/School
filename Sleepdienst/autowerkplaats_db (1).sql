-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 02:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autowerkplaats_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `autoreparatie`
--

CREATE TABLE IF NOT EXISTS `autoreparatie` (
  `autoreparatie_id` int(50) NOT NULL AUTO_INCREMENT,
  `werknemer` varchar(50) NOT NULL,
  `afdeling` varchar(50) NOT NULL,
  `werkzaamheden` varchar(50) NOT NULL,
  `datum` timestamp(6) NOT NULL,
  `starttijd` datetime(6) NOT NULL,
  `eindtijd` datetime(6) NOT NULL,
  PRIMARY KEY (`autoreparatie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `autoreparatie`
--

INSERT INTO `autoreparatie` (`autoreparatie_id`, `werknemer`, `afdeling`, `werkzaamheden`, `datum`, `starttijd`, `eindtijd`) VALUES
(1, 'Akash Prahladsingh', 'Reparatie', 'Reschijf verwisseld', '2016-06-10 12:57:28.000000', '2016-06-10 06:08:03.000000', '2016-06-17 05:10:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `keuring`
--

CREATE TABLE IF NOT EXISTS `keuring` (
  `keuring_id` int(50) NOT NULL AUTO_INCREMENT,
  `kentekennummer` varchar(50) NOT NULL,
  `chasisnummer` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `keuring_datum` date NOT NULL,
  `keuring_vervaldaum` date NOT NULL,
  PRIMARY KEY (`keuring_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `keuring`
--

INSERT INTO `keuring` (`keuring_id`, `kentekennummer`, `chasisnummer`, `model`, `merk`, `keuring_datum`, `keuring_vervaldaum`) VALUES
(1, 'PB 51-91', 'im345fjd942jf93', 'Toyota', 'Prado', '2016-06-01', '2017-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE IF NOT EXISTS `klant` (
  `klant_id` int(50) NOT NULL AUTO_INCREMENT,
  `achternaam` varchar(50) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `telefoon` mediumint(50) NOT NULL,
  `mobiel` int(50) NOT NULL,
  PRIMARY KEY (`klant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klant_id`, `achternaam`, `voornaam`, `adress`, `telefoon`, `mobiel`) VALUES
(1, 'Hardwarsing', 'Dheeradj', 'Agamemnonweg 14', 328664, 8855009);

-- --------------------------------------------------------

--
-- Table structure for table `magazijn`
--

CREATE TABLE IF NOT EXISTS `magazijn` (
  `product_id` int(50) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `prijs` varchar(50) NOT NULL,
  `aantal` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `magazijn`
--

INSERT INTO `magazijn` (`product_id`, `naam`, `prijs`, `aantal`) VALUES
(1, 'remschijf', '50', '250');

-- --------------------------------------------------------

--
-- Table structure for table `sleepdienst`
--

CREATE TABLE IF NOT EXISTS `sleepdienst` (
  `sleep_id` int(50) NOT NULL AUTO_INCREMENT,
  `kenteken_nr` varchar(50) NOT NULL,
  `auto` varchar(50) NOT NULL,
  `klant` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `kosten` varchar(50) NOT NULL,
  `sleepplaats` varchar(50) NOT NULL,
  `opslagplaats` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`sleep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sleepdienst`
--

INSERT INTO `sleepdienst` (`sleep_id`, `kenteken_nr`, `auto`, `klant`, `category`, `kosten`, `sleepplaats`, `opslagplaats`, `Status`) VALUES
(12, '45-45 PP', 'Nissan GT-R', 'Mr Hardwarsing', 'Sedan', '$450', 'Natin complex', 'Haven-zuid 36', 'open'),
(13, '34-91 zp', 'Toyota Belta', 'Mr y', 'Sedan', '$250', 'Rudisa N.V.', 'Paramaribo', 'open'),
(14, '34-91 zp', 'Toyota Belta', 'Mr y', 'Sedan', '$250', 'Rudisa N.V.', 'Paramaribo', 'betaald'),
(15, '90-70 TP', 'Mercedes Benz S550', 'Mr Hardwarsing', 'Sedan S-classe', '$1000', 'Rudisa N.V.', 'Paramaribo', 'betaald'),
(16, '35-90 GV', 'Toyota Haice', '', 'Busje', '$1250', 'Fernandes N.V.', 'Haven-zuid 36', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `voertuig`
--

CREATE TABLE IF NOT EXISTS `voertuig` (
  `voertuig_id` int(15) NOT NULL AUTO_INCREMENT,
  `kentekennummer` varchar(50) NOT NULL,
  `chassisnummer` varchar(60) NOT NULL,
  `model` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `bouwjaar` varchar(5) NOT NULL,
  PRIMARY KEY (`voertuig_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voertuig`
--

INSERT INTO `voertuig` (`voertuig_id`, `kentekennummer`, `chassisnummer`, `model`, `merk`, `bouwjaar`) VALUES
(1, 'PB 51-91 ', 'im56h58fhs46', 'Toyota', 'Prado', '2010');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
