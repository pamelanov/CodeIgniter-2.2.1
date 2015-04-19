-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2015 at 04:41 PM
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
  `id` int(11) NOT NULL,
  `id_acc` varchar(4) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` char(12) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id_acc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `id_acc`, `password`, `email`, `nama`, `no_telp`, `role`) VALUES
(1, 'AD', 'admin', 'admin@admin.com', 'Administrator', '90900909', 1),
(2, 'DY', 'derien', 'derien@yauma.com', 'derien', '56789087', 1),
(3, 'OP', 'ops', 'ops@ops.com', 'Operational Sales X', '4308403', 2),
(4, 'PA', 'haha', 'haha@haha.com', 'haha', '567890', 2),
(5, 'PT', 'pinky', 'pinky@tiffany.com', 'pinkyvi', '67890479739', 3),
(6, 'SV', 'supervis', 'supervisor@super.com', 'Supervisor Y', '8943849', 3),
(7, 'YS', '12345', 'yodi@ui.ac.id', 'yodi', '081208120812', 3);

-- --------------------------------------------------------

--
-- Table structure for table `beginning_numbers`
--

CREATE TABLE IF NOT EXISTS `beginning_numbers` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `jam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`status`,`id_murid`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_sales` (`id_sales`),
  KEY `Id_murid` (`id_murid`),
  KEY `id_2` (`id`,`status`,`id_murid`,`jam`,`tanggal`,`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beginning_numbers`
--

INSERT INTO `beginning_numbers` (`id`, `status`, `id_murid`, `jam`, `tanggal`, `id_sales`) VALUES
(1, 4, 33333, 2330, '2015-04-08', 'DY'),
(2, 5, 33333, 945, '2015-04-17', 'DY'),
(3, 7, 33333, 1550, '2015-04-29', 'DY'),
(4, 2, 55555, 2330, '2015-04-01', 'AD'),
(5, 3, 55555, 1650, '2015-04-03', 'AD'),
(6, 0, 33333, 2330, '2009-09-08', 'DY'),
(7, 8, 33333, 2330, '2020-08-07', 'DY'),
(8, 8, 13579, 2330, '2090-09-08', 'DY'),
(9, 3, 13579, 2330, '2015-04-19', 'DY');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_guru` (`id_guru`,`id_murid`),
  KEY `Id_guru_2` (`id_guru`),
  KEY `Id_guru_3` (`id_guru`),
  KEY `Id_murid` (`id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_kelas`, `id_guru`, `id_murid`, `status`) VALUES
(1, 234, 12345, 55555, 'active'),
(2, 345, 12345, 13579, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `end_numbers`
--

CREATE TABLE IF NOT EXISTS `end_numbers` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `jam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`no`,`id_murid`,`id_guru`,`id_kelas`,`id_invoice`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_sales` (`id_sales`),
  KEY `Id_murid` (`id_murid`),
  KEY `Id_guru` (`id_guru`),
  KEY `Id_kelas` (`id_kelas`),
  KEY `Id_invoice` (`id_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `end_numbers`
--

INSERT INTO `end_numbers` (`id`, `no`, `id_murid`, `id_guru`, `id_kelas`, `id_invoice`, `jam`, `tanggal`, `id_sales`) VALUES
(1, 6, 13579, 12345, 345, 98, 1440, '2015-04-19', 'YS'),
(2, 7, 13579, 12345, 345, 98, 1450, '2015-04-22', 'YS');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total_skor` int(11) NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`id_murid`,`id_guru`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_sales` (`id_sales`),
  KEY `Id_guru` (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `id_murid`, `id_guru`, `tanggal`, `rating`, `isi`, `status`, `total_skor`, `id_sales`) VALUES
(1, 99999, 12345, '2015-04-20', 4, 'cukup baik namun pendiam wkwk', 0, 78, 'PT');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL,
  `no_invoice` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `periode` date NOT NULL,
  `harga_per_jam` int(11) NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `jumlah_sesi` int(11) NOT NULL,
  PRIMARY KEY (`no_invoice`,`id_kelas`,`id_murid`,`id_guru`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_kelas` (`id_kelas`),
  KEY `Id_murid` (`id_murid`),
  KEY `Id_guru` (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `no_invoice`, `id_kelas`, `id_murid`, `id_guru`, `periode`, `harga_per_jam`, `jumlah_jam`, `jumlah_sesi`) VALUES
(1, 98, 345, 13579, 12345, '2015-04-20', 5000, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `not_recurrings`
--

CREATE TABLE IF NOT EXISTS `not_recurrings` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`,`id_murid`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_murid` (`id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recurrings`
--

CREATE TABLE IF NOT EXISTS `recurrings` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  PRIMARY KEY (`id_guru`,`id_murid`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_murid` (`id_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recurring_statuses`
--

CREATE TABLE IF NOT EXISTS `recurring_statuses` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  PRIMARY KEY (`id_guru`,`id_murid`,`id_kelas`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_sales` (`id_sales`),
  KEY `Id_murid` (`id_murid`),
  KEY `Id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE IF NOT EXISTS `refunds` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `no_invoice` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `jam_hilang` int(11) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `selisih` int(11) NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_guru`,`id_murid`,`no_invoice`,`id_kelas`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_sales` (`id_sales`),
  KEY `Id_murid` (`id_murid`),
  KEY `No_invoice` (`no_invoice`),
  KEY `Id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`id`, `id_guru`, `id_murid`, `no_invoice`, `id_kelas`, `jam_hilang`, `alasan`, `action`, `selisih`, `id_sales`, `tanggal`) VALUES
(1, 12345, 13579, 98, 345, 5, 'hijm', 'ghj', 70000, 'YS', '2015-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `domisili` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_tgl_lahir` varchar(30) NOT NULL,
  PRIMARY KEY (`id_murid`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_sales` (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `id_murid`, `nama`, `id_sales`, `gender`, `no_telepon`, `domisili`, `email`, `alamat`, `tempat_tgl_lahir`) VALUES
(1, 13579, 'Derien', 'YS', 'L', '77777777', 'Depok', 'xyz@xyz.com', 'tapos', 'Jakarta, 9 Februari 1994'),
(2, 33333, 'Pamela Novranska', 'PT', 'F', '596796797', 'Jakarta', 'novranska@gmail.com', 'depok city', 'Sukabumi, satu november 93'),
(3, 55555, 'Toto', 'DY', 'M', '3456765', 'Bogor', 'd@d.com', 'jafaksdjkasj', 'sjsjs,fajf'),
(4, 99999, 'Lulu', 'PA', 'F', '345676', 'Jkt', 'djdj@sjsj.com', 'Bogor', 'dhdhd,s dd');

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL,
  `id_sales` varchar(4) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `target` int(11) NOT NULL,
  `id_supervisor` varchar(4) NOT NULL,
  `actual` int(11) NOT NULL,
  PRIMARY KEY (`id_sales`),
  UNIQUE KEY `id` (`id`),
  KEY `Id_supervisor` (`id_supervisor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `id_sales`, `periode_awal`, `periode_akhir`, `target`, `id_supervisor`, `actual`) VALUES
(1, 'OP', '2015-04-01', '2015-04-30', 200, 'SV', 100),
(2, 'PA', '2015-04-01', '2015-04-30', 220, 'YS', 80);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL,
  `Id_guru` int(11) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `No_telp` int(12) NOT NULL,
  `Kota` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_guru`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `Id_guru`, `Nama`, `Email`, `No_telp`, `Kota`) VALUES
(1, 12345, 'Pamela', 'pam@mail.com', 0, 'jakarta');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beginning_numbers`
--
ALTER TABLE `beginning_numbers`
  ADD CONSTRAINT `beginning_numbers_ibfk_4` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beginning_numbers_ibfk_1` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beginning_numbers_ibfk_2` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beginning_numbers_ibfk_3` FOREIGN KEY (`id_murid`) REFERENCES `students` (`Id_murid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_4` FOREIGN KEY (`id_murid`) REFERENCES `students` (`Id_murid`),
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Id_guru`) REFERENCES `teachers` (`Id_guru`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`),
  ADD CONSTRAINT `courses_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`Id_guru`);

--
-- Constraints for table `end_numbers`
--
ALTER TABLE `end_numbers`
  ADD CONSTRAINT `end_numbers_ibfk_12` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `end_numbers_ibfk_10` FOREIGN KEY (`id_kelas`) REFERENCES `invoices` (`id_kelas`),
  ADD CONSTRAINT `end_numbers_ibfk_11` FOREIGN KEY (`id_invoice`) REFERENCES `invoices` (`no_invoice`),
  ADD CONSTRAINT `end_numbers_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `end_numbers_ibfk_4` FOREIGN KEY (`Id_murid`) REFERENCES `invoices` (`Id_murid`),
  ADD CONSTRAINT `end_numbers_ibfk_5` FOREIGN KEY (`Id_guru`) REFERENCES `invoices` (`Id_guru`),
  ADD CONSTRAINT `end_numbers_ibfk_6` FOREIGN KEY (`Id_kelas`) REFERENCES `invoices` (`Id_kelas`),
  ADD CONSTRAINT `end_numbers_ibfk_7` FOREIGN KEY (`Id_invoice`) REFERENCES `invoices` (`No_invoice`),
  ADD CONSTRAINT `end_numbers_ibfk_8` FOREIGN KEY (`id_murid`) REFERENCES `invoices` (`id_murid`),
  ADD CONSTRAINT `end_numbers_ibfk_9` FOREIGN KEY (`id_guru`) REFERENCES `invoices` (`id_guru`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`),
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`Id_guru`) REFERENCES `teachers` (`Id_guru`),
  ADD CONSTRAINT `feedbacks_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `feedbacks_ibfk_4` FOREIGN KEY (`id_murid`) REFERENCES `students` (`Id_murid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_5` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`Id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_6` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_6` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id_kelas`),
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`Id_kelas`) REFERENCES `courses` (`Id_kelas`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `students` (`Id_murid`),
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`Id_guru`) REFERENCES `teachers` (`Id_guru`),
  ADD CONSTRAINT `invoices_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`Id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_ibfk_5` FOREIGN KEY (`id_murid`) REFERENCES `students` (`Id_murid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `not_recurrings`
--
ALTER TABLE `not_recurrings`
  ADD CONSTRAINT `not_recurrings_ibfk_4` FOREIGN KEY (`id_murid`) REFERENCES `courses` (`id_murid`),
  ADD CONSTRAINT `not_recurrings_ibfk_1` FOREIGN KEY (`Id_guru`) REFERENCES `recurring_statuses` (`Id_guru`),
  ADD CONSTRAINT `not_recurrings_ibfk_2` FOREIGN KEY (`Id_murid`) REFERENCES `recurring_statuses` (`Id_murid`),
  ADD CONSTRAINT `not_recurrings_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `courses` (`id_guru`);

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
  ADD CONSTRAINT `recurring_statuses_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `recurring_statuses_ibfk_4` FOREIGN KEY (`Id_guru`) REFERENCES `courses` (`Id_guru`),
  ADD CONSTRAINT `recurring_statuses_ibfk_5` FOREIGN KEY (`Id_murid`) REFERENCES `courses` (`Id_murid`),
  ADD CONSTRAINT `recurring_statuses_ibfk_6` FOREIGN KEY (`Id_kelas`) REFERENCES `courses` (`Id_kelas`);

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_ibfk_12` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `refunds_ibfk_10` FOREIGN KEY (`no_invoice`) REFERENCES `invoices` (`no_invoice`),
  ADD CONSTRAINT `refunds_ibfk_11` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id_kelas`),
  ADD CONSTRAINT `refunds_ibfk_3` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `refunds_ibfk_4` FOREIGN KEY (`Id_guru`) REFERENCES `invoices` (`Id_guru`),
  ADD CONSTRAINT `refunds_ibfk_5` FOREIGN KEY (`Id_murid`) REFERENCES `invoices` (`Id_murid`),
  ADD CONSTRAINT `refunds_ibfk_6` FOREIGN KEY (`No_invoice`) REFERENCES `invoices` (`No_invoice`),
  ADD CONSTRAINT `refunds_ibfk_7` FOREIGN KEY (`Id_kelas`) REFERENCES `invoices` (`Id_kelas`),
  ADD CONSTRAINT `refunds_ibfk_8` FOREIGN KEY (`id_guru`) REFERENCES `courses` (`id_guru`),
  ADD CONSTRAINT `refunds_ibfk_9` FOREIGN KEY (`id_murid`) REFERENCES `courses` (`id_murid`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Id_sales`) REFERENCES `accounts` (`id_acc`);

--
-- Constraints for table `targets`
--
ALTER TABLE `targets`
  ADD CONSTRAINT `targets_ibfk_1` FOREIGN KEY (`id_supervisor`) REFERENCES `accounts` (`id_acc`),
  ADD CONSTRAINT `targets_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id_acc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
