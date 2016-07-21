-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 06:14 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autowerkplaats_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `autoreparatie`
--

CREATE TABLE `autoreparatie` (
  `autoreparatie_id` int(50) NOT NULL,
  `werknemer` varchar(50) NOT NULL,
  `afdeling` varchar(50) NOT NULL,
  `werkzaamheden` varchar(50) NOT NULL,
  `datum` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `autoreparatie`
--

INSERT INTO `autoreparatie` (`autoreparatie_id`, `werknemer`, `afdeling`, `werkzaamheden`, `datum`, `starttijd`, `eindtijd`) VALUES
(1, 'Akash Prahladsingh', 'Reparatie', 'Reschijf verwisseld', '2016-06-10 12:57:28.000000', '2016-06-10 06:08:03.000000', '2016-06-17 05:10:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `keuring`
--

CREATE TABLE `keuring` (
  `keuring_id` int(50) NOT NULL,
  `kentekennummer` varchar(50) NOT NULL,
  `chasisnummer` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `keuring_datum` date NOT NULL,
  `keuring_vervaldaum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuring`
--

INSERT INTO `keuring` (`keuring_id`, `kentekennummer`, `chasisnummer`, `model`, `merk`, `keuring_datum`, `keuring_vervaldaum`) VALUES
(1, 'PB 51-91', 'im345fjd942jf93', 'Toyota', 'Prado', '2016-06-01', '2017-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `klant_id` int(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `telefoon` mediumint(50) NOT NULL,
  `mobiel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klant_id`, `achternaam`, `voornaam`, `adress`, `telefoon`, `mobiel`) VALUES
(1, 'Hardwarsing', 'Dheeradj', 'Agamemnonweg 14', 328664, 8855009);

-- --------------------------------------------------------

--
-- Table structure for table `magazijn`
--

CREATE TABLE `magazijn` (
  `product_id` int(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `prijs` varchar(50) NOT NULL,
  `aantal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazijn`
--

INSERT INTO `magazijn` (`product_id`, `naam`, `prijs`, `aantal`) VALUES
(1, 'remschijf', '50', '250');

-- --------------------------------------------------------

--
-- Table structure for table `sleepdienst`
--

CREATE TABLE `sleepdienst` (
  `sleep_id` int(50) NOT NULL,
  `kenteken_nr` varchar(50) NOT NULL,
  `auto` varchar(50) NOT NULL,
  `klant` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `kosten` varchar(50) NOT NULL,
  `sleepplaats` varchar(50) NOT NULL,
  `opslagplaats` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleepdienst`
--

INSERT INTO `sleepdienst` (`sleep_id`, `kenteken_nr`, `auto`, `klant`, `category`, `kosten`, `sleepplaats`, `opslagplaats`, `Status`) VALUES
(12, '45-45 PP', 'Nissan GT-R', 'Mr Hardwarsing', 'Sedan', '$450', 'Natin complex', 'Haven-zuid 36', 'open'),
(13, '34-91 zp', 'Toyota Belta', 'Mr y', 'Sedan', '$250', 'Rudisa N.V.', 'Paramaribo', 'open'),
(14, '34-91 zp', 'Toyota Belta', 'Mr y', 'Sedan', '$250', 'Rudisa N.V.', 'Paramaribo', 'betaald'),
(15, '90-70 TP', 'Mercedes Benz S550', 'Mr Hardwarsing', 'Sedan S-classe', '$1000', 'Rudisa N.V.', 'Paramaribo', 'betaald'),
(16, '35-90 GV', 'Toyota Haice', '', 'Busje', '$1250', 'Fernandes N.V.', 'Haven-zuid 36', 'open'),
(17, '12312', 'fasdf', 'dfasdfdas', 'ewq', '121', 'fsafa', 'dfasd', 'betaald');

-- --------------------------------------------------------

--
-- Table structure for table `voertuig`
--

CREATE TABLE `voertuig` (
  `voertuig_id` int(15) NOT NULL,
  `kentekennummer` varchar(50) NOT NULL,
  `chassisnummer` varchar(60) NOT NULL,
  `model` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `bouwjaar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voertuig`
--

INSERT INTO `voertuig` (`voertuig_id`, `kentekennummer`, `chassisnummer`, `model`, `merk`, `bouwjaar`) VALUES
(1, 'PB 51-91 ', 'im56h58fhs46', 'Toyota', 'Prado', '2010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keuring`
--
ALTER TABLE `keuring`
  ADD PRIMARY KEY (`keuring_id`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klant_id`);

--
-- Indexes for table `magazijn`
--
ALTER TABLE `magazijn`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sleepdienst`
--
ALTER TABLE `sleepdienst`
  ADD PRIMARY KEY (`sleep_id`);

--
-- Indexes for table `voertuig`
--
ALTER TABLE `voertuig`
  ADD PRIMARY KEY (`voertuig_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autoreparatie`
--
ALTER TABLE `autoreparatie`
  MODIFY `autoreparatie_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keuring`
--
ALTER TABLE `keuring`
  MODIFY `keuring_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `klant_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `magazijn`
--
ALTER TABLE `magazijn`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sleepdienst`
--
ALTER TABLE `sleepdienst`
  MODIFY `sleep_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `voertuig`
--
ALTER TABLE `voertuig`
  MODIFY `voertuig_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
