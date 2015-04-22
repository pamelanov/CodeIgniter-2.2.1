-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2015 at 04:27 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orm`
--

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  `periode` varchar(11) NOT NULL,
  `target` int(11) NOT NULL,
  `id_supervisor` varchar(4) NOT NULL,
  `actual` int(11) NOT NULL,
  PRIMARY KEY (`id_sales`,`periode`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_supervisor` (`id_supervisor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `id_sales`, `periode`, `target`, `id_supervisor`, `actual`) VALUES
(1, 'OP', '2015-04', 180, 'YS', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `targets`
--
ALTER TABLE `targets`
  ADD CONSTRAINT `targets_ibfk_1` FOREIGN KEY (`id_supervisor`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `targets_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id_acc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
