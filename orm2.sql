-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2015 at 08:04 PM
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
CREATE DATABASE IF NOT EXISTS `orm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `orm`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `Id` varchar(4) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `No_telp` char(12) NOT NULL,
  `Role` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Id`, `Password`, `Email`, `Nama`, `No_telp`, `Role`) VALUES
('DY', 'derien', 'derien@yauma.com', 'derien', '56789087', 1),
('PA', 'haha', 'haha@haha.com', 'haha', '567890', 2),
('PT', 'pinky', 'pinky@tiffany.com', 'pinkyvi', '67890479739', 3),
('YS', '12345', 'yodi@ui.ac.id', 'yodi', '081208120812', 3);

-- --------------------------------------------------------

--
-- Table structure for table `beginning_statuses`
--

CREATE TABLE IF NOT EXISTS `beginning_statuses` (
  `No` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Jam` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`No`,`Id_murid`),
  KEY `Id_sales` (`Id_sales`),
  KEY `Id_murid` (`Id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `end_statuses`
--

CREATE TABLE IF NOT EXISTS `end_statuses` (
  `No` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Id_guru` int(11) NOT NULL,
  `Id_kelas` int(11) NOT NULL,
  `Id_invoice` int(11) NOT NULL,
  `Jam` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`No`,`Id_murid`,`Id_guru`,`Id_kelas`,`Id_invoice`),
  KEY `Id_sales` (`Id_sales`),
  KEY `Id_murid` (`Id_murid`),
  KEY `Id_guru` (`Id_guru`),
  KEY `Id_kelas` (`Id_kelas`),
  KEY `Id_invoice` (`Id_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engagements`
--

CREATE TABLE IF NOT EXISTS `engagements` (
  `Id_kelas` int(11) NOT NULL,
  `Id_guru` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_kelas`),
  KEY `Id_guru` (`Id_guru`,`Id_murid`),
  KEY `Id_guru_2` (`Id_guru`),
  KEY `Id_guru_3` (`Id_guru`),
  KEY `Id_murid` (`Id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `Id_murid` int(11) NOT NULL,
  `Id_guru` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Rating` int(11) NOT NULL,
  `Isi` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Total_skor` int(11) NOT NULL,
  `Id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`Id_murid`,`Id_guru`),
  KEY `Id_sales` (`Id_sales`),
  KEY `Id_guru` (`Id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `No_invoice` int(11) NOT NULL,
  `Id_kelas` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Id_guru` int(11) NOT NULL,
  `Periode` date NOT NULL,
  `Harga_per_jam` int(11) NOT NULL,
  `Jumlah_jam` int(11) NOT NULL,
  `Jumlah_sesi` int(11) NOT NULL,
  PRIMARY KEY (`No_invoice`,`Id_kelas`,`Id_murid`,`Id_guru`),
  KEY `Id_kelas` (`Id_kelas`),
  KEY `Id_murid` (`Id_murid`),
  KEY `Id_guru` (`Id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_recurrings`
--

CREATE TABLE IF NOT EXISTS `not_recurrings` (
  `Id_guru` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Alasan` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_guru`,`Id_murid`),
  KEY `Id_murid` (`Id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recurrings`
--

CREATE TABLE IF NOT EXISTS `recurrings` (
  `Id_guru` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Jadwal` date NOT NULL,
  `Jumlah_jam` int(11) NOT NULL,
  PRIMARY KEY (`Id_guru`,`Id_murid`),
  KEY `Id_murid` (`Id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recurring_statuses`
--

CREATE TABLE IF NOT EXISTS `recurring_statuses` (
  `Id_guru` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `Id_kelas` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`Id_guru`,`Id_murid`,`Id_kelas`),
  KEY `Id_sales` (`Id_sales`),
  KEY `Id_murid` (`Id_murid`),
  KEY `Id_kelas` (`Id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE IF NOT EXISTS `refunds` (
  `Id_guru` int(11) NOT NULL,
  `Id_murid` int(11) NOT NULL,
  `No_invoice` int(11) NOT NULL,
  `Id_kelas` int(11) NOT NULL,
  `Jam_hilang` int(11) NOT NULL,
  `Alasan` varchar(100) NOT NULL,
  `Action` varchar(20) NOT NULL,
  `Selisih` int(11) NOT NULL,
  `Id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`Id_guru`,`Id_murid`,`No_invoice`,`Id_kelas`),
  KEY `Id_sales` (`Id_sales`),
  KEY `Id_murid` (`Id_murid`),
  KEY `No_invoice` (`No_invoice`),
  KEY `Id_kelas` (`Id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `Id_murid` int(11) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Id_sales` varchar(4) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `No_telepon` char(12) NOT NULL,
  `Domisil` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tempat_tgl_lahir` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_murid`),
  KEY `Id_sales` (`Id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id_murid`, `Nama`, `Id_sales`, `Gender`, `No_telepon`, `Domisil`, `Email`, `Alamat`, `Tempat_tgl_lahir`) VALUES
(13579, 'Derien', 'YS', 'L', '77777777', 'Depok', 'xyz@xyz.com', 'tapos', 'Jakarta, 9 Februari 1994');

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `Id_sales` int(11) NOT NULL,
  `Periode_awal` date NOT NULL,
  `Periode_akhir` date NOT NULL,
  `Target` int(11) NOT NULL,
  `Id_supervisor` varchar(4) NOT NULL,
  PRIMARY KEY (`Id_sales`),
  KEY `Id_supervisor` (`Id_supervisor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `Id_guru` int(11) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `No_telp` int(12) NOT NULL,
  `Kota` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Id_guru`, `Nama`, `Email`, `No_telp`, `Kota`) VALUES
(12345, 'Pamela', 'pam@mail.com', 0, 'jakarta');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `end_statuses`
--
ALTER TABLE `end_statuses`
  ADD CONSTRAINT `end_statuses_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`Id`),
  ADD CONSTRAINT `end_statuses_ibfk_4` FOREIGN KEY (`Id_murid`) REFERENCES `invoices` (`Id_murid`),
  ADD CONSTRAINT `end_statuses_ibfk_5` FOREIGN KEY (`Id_guru`) REFERENCES `invoices` (`Id_guru`),
  ADD CONSTRAINT `end_statuses_ibfk_6` FOREIGN KEY (`Id_kelas`) REFERENCES `invoices` (`Id_kelas`),
  ADD CONSTRAINT `end_statuses_ibfk_7` FOREIGN KEY (`Id_invoice`) REFERENCES `invoices` (`No_invoice`);

--
-- Constraints for table `engagements`
--
ALTER TABLE `engagements`
  ADD CONSTRAINT `engagements_ibfk_1` FOREIGN KEY (`Id_guru`) REFERENCES `teachers` (`Id_guru`),
  ADD CONSTRAINT `engagements_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`),
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`Id_guru`) REFERENCES `teachers` (`Id_guru`),
  ADD CONSTRAINT `feedbacks_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`Id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`Id_kelas`) REFERENCES `engagements` (`Id_kelas`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`),
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`Id_guru`) REFERENCES `teachers` (`Id_guru`);

--
-- Constraints for table `not_recurrings`
--
ALTER TABLE `not_recurrings`
  ADD CONSTRAINT `not_recurrings_ibfk_1` FOREIGN KEY (`Id_guru`) REFERENCES `recurring_statuses` (`Id_guru`),
  ADD CONSTRAINT `not_recurrings_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `recurring_statuses` (`Id_murid`);

--
-- Constraints for table `recurrings`
--
ALTER TABLE `recurrings`
  ADD CONSTRAINT `recurrings_ibfk_1` FOREIGN KEY (`Id_guru`) REFERENCES `recurring_statuses` (`Id_guru`),
  ADD CONSTRAINT `recurrings_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `recurring_statuses` (`Id_murid`);

--
-- Constraints for table `recurring_statuses`
--
ALTER TABLE `recurring_statuses`
  ADD CONSTRAINT `recurring_statuses_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`Id`),
  ADD CONSTRAINT `recurring_statuses_ibfk_4` FOREIGN KEY (`Id_guru`) REFERENCES `engagements` (`Id_guru`),
  ADD CONSTRAINT `recurring_statuses_ibfk_5` FOREIGN KEY (`Id_murid`) REFERENCES `engagements` (`Id_murid`),
  ADD CONSTRAINT `recurring_statuses_ibfk_6` FOREIGN KEY (`Id_kelas`) REFERENCES `engagements` (`Id_kelas`);

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`Id`),
  ADD CONSTRAINT `refunds_ibfk_4` FOREIGN KEY (`Id_guru`) REFERENCES `invoices` (`Id_guru`),
  ADD CONSTRAINT `refunds_ibfk_5` FOREIGN KEY (`Id_murid`) REFERENCES `invoices` (`Id_murid`),
  ADD CONSTRAINT `refunds_ibfk_6` FOREIGN KEY (`No_invoice`) REFERENCES `invoices` (`No_invoice`),
  ADD CONSTRAINT `refunds_ibfk_7` FOREIGN KEY (`Id_kelas`) REFERENCES `invoices` (`Id_kelas`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
