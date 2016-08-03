-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2016 at 12:13 AM
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
-- Table structure for table `auto_rep`
--

CREATE TABLE `auto_rep` (
  `factuur_id` int(11) NOT NULL,
  `klant_naam` text NOT NULL,
  `telefoon_nummer` int(11) NOT NULL,
  `werknemer` text NOT NULL,
  `datum` date NOT NULL,
  `gew_manuur` int(11) NOT NULL,
  `uitg_werkz` text NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto_rep`
--

INSERT INTO `auto_rep` (`factuur_id`, `klant_naam`, `telefoon_nummer`, `werknemer`, `datum`, `gew_manuur`, `uitg_werkz`, `prijs`) VALUES
(1, 'aka', 202, 'ksks', '2016-06-20', 2, 'vuvugvvuj', 22),
(2, 'akash', 388387, 'isbdiub', '2016-06-20', 3, 'disudbui ', 2),
(3, 'akash', 9290, 'Dh', '2016-06-20', 2, 'uhsdoushdiuh ', 22),
(4, 'shkhdk', 82090, 'sbsdb', '0000-00-00', 93, 'siudhuh ', 23),
(5, 'sjjskj', 82828, 'shbhb', '2016-06-20', 82828, 'jsbius ', 8282),
(6, 'sjjskj', 82828, 'shbhb', '2016-06-20', 82828, 'jsbius ', 8282),
(7, 'sandra', 2992, 'san', '2016-06-20', 9292, 'jbsdub ', 22),
(8, 'sur', 19290, 'jsdbjb', '2016-06-21', 23, 'UBDSB ', 2002),
(9, 'jan', 912, 'jantje', '2016-06-21', 9, 'jsibdi ', 92),
(10, 'Dhee', 8238, 'jndjbd', '2016-06-21', 9, 'jdbijbaiubibad ', 92),
(11, 'veshist', 8790324, 'Akash', '2016-06-21', 2, 'Auto over de kop ', 100),
(12, 'Randall', 823098, 'jdjkd', '2016-06-21', 82, 'jdbubfudbdfb ', 292),
(13, 'Kaas', 988292, 'Jantje', '2016-06-27', 2, ' IHdsihodshouhOUHDOHFohohou', 2334),
(14, 'Sven', 7373536, 'Randall', '2016-06-27', 28, 'sdlbdshu ', 83),
(15, 'jan', 82038, 'jantje', '2016-07-11', 9, 'jsdbubdiub ', 29),
(16, 'Zareef', 1233, 'Umar', '2016-07-21', 12, 'DFjakd ', 12),
(17, 'Akash', 1234, 'Zareef', '2016-07-21', 10, 'asdhfja ', 12),
(18, 'Akash', 1234, 'Zareef', '2016-07-21', 10, 'asdhfja ', 12),
(19, 'Akash', 1234, 'Zareef', '2016-07-21', 10, 'asdhfja ', 12),
(20, 'Akash', 1234, 'Zareef', '2016-07-21', 10, 'asdhfja ', 12),
(21, 'Zareef', 2341, 'edhfjashld', '2016-07-21', 12, 'dfgkadfkhg ', 12),
(22, 'Sven', 121, 'hsflah', '2016-07-21', 121, 'dhkfalhdfk ', 12),
(23, 'Sda', 121, 'fdasf', '2016-07-21', 121, ' sdfasdf', 1212),
(24, 'Sdasd', 12121, 'dfasf', '2016-07-21', 1212, ' dfad', 1121),
(25, 'sdfdas', 1321, 'djfka;', '2016-07-21', 12, 'dkjfhakl ', 123);

-- --------------------------------------------------------

--
-- Table structure for table `keuring`
--

CREATE TABLE `keuring` (
  `keuring_id` int(50) NOT NULL,
  `keuring_kenteken` varchar(50) NOT NULL,
  `keuring_chasisnummer` varchar(50) NOT NULL,
  `keuring_model` varchar(50) NOT NULL,
  `keuring_merk` varchar(50) NOT NULL,
  `keuring_datum` date NOT NULL,
  `keuring_vervaldatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuring`
--

INSERT INTO `keuring` (`keuring_id`, `keuring_kenteken`, `keuring_chasisnummer`, `keuring_model`, `keuring_merk`, `keuring_datum`, `keuring_vervaldatum`) VALUES
(1, 'PB 51-91', 'im345fjd942jf93', 'Toyota', 'Prado', '2016-06-01', '2017-06-01'),
(12, 'fdsfa', 'DFAS212111121', '121dsa', 'dfa', '2016-02-21', '2017-04-21'),
(13, '12-12 AP', 'chdjkahk1212341', 'Hilux', 'Toyota', '2016-07-21', '2017-07-21');

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
(2, 'Velgen', '2235', 'NOZZ', 23, 'Velgen voor sport auto''s  ', '1500'),
(3, 'Zeispiegel', '22311', 'Child', 23, 'Zeispeigel Vitz ', '320'),
(6, 'Michilin', '1', 'NIKE', 2, 'jdshflahs ', '12');

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
(17, '12312', 'fasdf', 'dfasdfdas', 'ewq', '121', 'fsafa', 'dfasd', 'betaald'),
(18, '12-12 AM', 'dfkja', '', 'dfkjdh;', '12', 'dhfla', 'kdhfka', 'open');

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
-- Indexes for table `auto_rep`
--
ALTER TABLE `auto_rep`
  ADD PRIMARY KEY (`factuur_id`);

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
-- AUTO_INCREMENT for table `auto_rep`
--
ALTER TABLE `auto_rep`
  MODIFY `factuur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `keuring`
--
ALTER TABLE `keuring`
  MODIFY `keuring_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sleepdienst`
--
ALTER TABLE `sleepdienst`
  MODIFY `sleep_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `voertuig`
--
ALTER TABLE `voertuig`
  MODIFY `voertuig_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
