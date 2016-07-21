-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 06:13 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autowerkplaats_db`
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(225) NOT NULL,
  `login_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`) VALUES
(1, 'Zareef', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_number` varchar(225) NOT NULL,
  `product_merk` varchar(225) NOT NULL,
  `product_aantal` int(11) NOT NULL,
  `product_omschrijving` text NOT NULL,
  `product_price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_number`, `product_merk`, `product_aantal`, `product_omschrijving`, `product_price`) VALUES
(2, 'Velgen', '2235', 'NOZZ', 11020, 'Velgen voor sport auto''s  ', '1500'),
(3, 'Zeispiegel', '22311', 'Child', 123, 'Zeispeigel Vitz ', '320');

-- --------------------------------------------------------

--
-- Table structure for table `sleepdienst`
--

CREATE TABLE `sleepdienst` (
  `sleep_id` int(50) NOT NULL,
  `auto` varchar(50) NOT NULL,
  `klant` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `kosten` varchar(50) NOT NULL,
  `sleepplaats` varchar(50) NOT NULL,
  `opslagplaats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleepdienst`
--

INSERT INTO `sleepdienst` (`sleep_id`, `auto`, `klant`, `category`, `kosten`, `sleepplaats`, `opslagplaats`) VALUES
(1, 'Toyota Noah', 'Praladsingh A', 'Sedan', '500', 'Plein', 'Haven');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sleepdienst`
--
ALTER TABLE `sleepdienst`
  MODIFY `sleep_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `voertuig`
--
ALTER TABLE `voertuig`
  MODIFY `voertuig_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
