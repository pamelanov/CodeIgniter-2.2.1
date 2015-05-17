-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 06:01 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sicutruangguru`
--
CREATE DATABASE IF NOT EXISTS `sicutruangguru` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sicutruangguru`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_acc` varchar(4) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` char(12) DEFAULT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_acc` (`id_acc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
(7, 'YS', '12345', 'yodi@ui.ac.id', 'yodi', '081208120812', 3),
(8, 'OO', 'ops', 'ops@ops.com', 'Operational Sales hehe', '74902', 2);

-- --------------------------------------------------------

--
-- Table structure for table `beginning_numbers`
--

CREATE TABLE IF NOT EXISTS `beginning_numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `id_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_murid` (`id_murid`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `beginning_numbers`
--

INSERT INTO `beginning_numbers` (`id`, `status`, `id_murid`, `jam`, `tanggal`, `id_sales`) VALUES
(10, 1, 1, '02:58:00', '2015-04-30', 6);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_murid` (`id_murid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_kelas`, `id_guru`, `id_murid`, `status`) VALUES
(1, 777, 1, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `end_numbers`
--

CREATE TABLE IF NOT EXISTS `end_numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `id_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_invoice` (`id_invoice`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `end_numbers`
--

INSERT INTO `end_numbers` (`id`, `no`, `id_invoice`, `jam`, `tanggal`, `id_sales`) VALUES
(1, 0, 1, '00:00:00', '2015-05-02', 6),
(2, 7, 1, '00:07:00', '2015-05-02', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total_skor` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_murid` (`id_murid`),
  KEY `id_guru` (`id_guru`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `periode` date NOT NULL,
  `harga_per_jam` int(11) NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `jumlah_sesi` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `no_invoice`, `id_kelas`, `periode`, `harga_per_jam`, `jumlah_jam`, `jumlah_sesi`) VALUES
(1, 8888, 1, '2015-05-01', 50000, 16, 8);

-- --------------------------------------------------------

--
-- Table structure for table `not_recurrings`
--

CREATE TABLE IF NOT EXISTS `not_recurrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rec_status` int(11) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rec_status` (`id_rec_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recurrings`
--

CREATE TABLE IF NOT EXISTS `recurrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rec_status` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rec_status` (`id_rec_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recurring_statuses`
--

CREATE TABLE IF NOT EXISTS `recurring_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE IF NOT EXISTS `refunds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` int(11) NOT NULL,
  `jam_hilang` int(11) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `selisih` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `no_invoice` (`no_invoice`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `domisili` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_tgl_lahir` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `id_murid`, `nama`, `id_sales`, `gender`, `no_telepon`, `domisili`, `email`, `alamat`, `tempat_tgl_lahir`) VALUES
(1, 666666, 'Murid', 3, 'F', '9998877', 'Jakarta', 'murid@baik.com', 'Depok', 'Jakarta, 20-02-1994'),
(2, 777777, 'Murid 2', 4, 'M', '4567898', 'Depok', 'student@gmail.com', 'Sawangan', 'Beji, 12-09-1995');

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sales` int(11) NOT NULL,
  `periode` varchar(11) NOT NULL,
  `target` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `actual` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `id_sales`, `periode`, `target`, `id_supervisor`, `actual`) VALUES
(1, 3, '2015-05', 180, 5, 140),
(2, 4, '2015-04', 200, 6, 130),
(3, 0, '2015-05', 2345, 0, 0),
(4, 0, '2015-05', 234, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `kota` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `id_guru`, `nama`, `email`, `no_telp`, `kota`) VALUES
(1, 12345, 'Pamela', 'pam@mail.com', 0, 'jakarta'),
(2, 23456, 'Guru 1', 'guru@ku.com', 90384, 'Depok'),
(3, 34567, 'Guru 2', 'guru2@ku.com', 384050, 'Depok');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beginning_numbers`
--
ALTER TABLE `beginning_numbers`
  ADD CONSTRAINT `beginning_numbers_ibfk_1` FOREIGN KEY (`id_murid`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `beginning_numbers_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_murid`) REFERENCES `students` (`id`);

--
-- Constraints for table `end_numbers`
--
ALTER TABLE `end_numbers`
  ADD CONSTRAINT `end_numbers_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `end_numbers_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`id_murid`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `feedbacks_ibfk_3` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id`);

--
-- Constraints for table `not_recurrings`
--
ALTER TABLE `not_recurrings`
  ADD CONSTRAINT `not_recurrings_ibfk_1` FOREIGN KEY (`id_rec_status`) REFERENCES `recurring_statuses` (`id`);

--
-- Constraints for table `recurrings`
--
ALTER TABLE `recurrings`
  ADD CONSTRAINT `recurrings_ibfk_1` FOREIGN KEY (`id_rec_status`) REFERENCES `recurring_statuses` (`id`);

--
-- Constraints for table `recurring_statuses`
--
ALTER TABLE `recurring_statuses`
  ADD CONSTRAINT `recurring_statuses_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `recurring_statuses_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_ibfk_1` FOREIGN KEY (`no_invoice`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `refunds_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
