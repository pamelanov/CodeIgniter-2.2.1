-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2015 at 05:01 PM
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
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` char(12) DEFAULT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_acc` (`id_acc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `id_acc`, `password`, `email`, `nama`, `no_telp`, `role`) VALUES
(3, 'OP', 'e847897826ceb8346eb5141f8c23436a', 'ops@ops.com', 'Operational Sales X', '4308403', 2),
(4, 'PA', '4e4d6c332b6fe62a63afe56171fd3725', 'haha@haha.com', 'haha', '567890', 2),
(5, 'PT', 'daea4d0b55ef6c16f04b8997a51e7e6a', 'pinky@tiffany.com', 'pinkyvi', '67890479739', 3),
(6, 'SV', 'ab28c58491f42aaebe28f6ecb1d29c54', 'supervisor@super.com', 'Supervisor Y', '8943849', 3),
(7, 'YS', '827ccb0eea8a706c4c34a16891f84e7b', 'yodi@ui.ac.id', 'yodi', '081208120812', 3),
(8, 'OO', 'e847897826ceb8346eb5141f8c23436a', 'ops@ops.com', 'Operational Sales hehe', '74902', 2),
(9, 'PN', 'e847897826ceb8346eb5141f8c23436a', 'novranska@gmail.com', 'Pamela Novranska', '47882525', 2),
(10, 'NP', 'e847897826ceb8346eb5141f8c23436a', 'aa@aa.com', 'Budi', '839384', 2),
(11, 'AD', '21232f297a57a5a743894a0e4a801fc3', 'ad@ad.com', 'Admin', '90909', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `beginning_numbers`
--

INSERT INTO `beginning_numbers` (`id`, `status`, `id_murid`, `jam`, `tanggal`, `id_sales`) VALUES
(10, 1, 1, '02:58:00', '2015-04-30', 6),
(14, 2, 1, '23:00:00', '2015-05-11', 3),
(16, 3, 1, '17:10:54', '2015-05-17', 3),
(17, 4, 1, '17:12:54', '2015-05-17', 3),
(21, 1, 2, '18:54:46', '2015-05-17', 8),
(22, 3, 2, '18:54:46', '2015-05-17', 8),
(23, 4, 2, '18:54:46', '2015-05-17', 8),
(24, 5, 2, '18:54:46', '2015-05-17', 8),
(25, 1, 3, '17:24:02', '2015-05-18', 3),
(35, 2, 3, '10:59:57', '2015-05-18', 3),
(36, 3, 3, '10:59:57', '2015-05-18', 3),
(37, 4, 3, '10:59:57', '2015-05-18', 3),
(42, 5, 3, '11:25:37', '2015-05-18', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_kelas`, `id_guru`, `id_murid`, `status`) VALUES
(1, 777, 1, 1, 'active'),
(2, 888, 3, 2, 'active'),
(3, 999, 3, 1, 'active'),
(4, 555, 3, 3, 'active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `end_numbers`
--

INSERT INTO `end_numbers` (`id`, `no`, `id_invoice`, `jam`, `tanggal`, `id_sales`) VALUES
(1, 6, 1, '00:00:00', '2015-05-02', 6),
(2, 7, 1, '00:07:00', '2015-05-02', 6),
(6, 8, 1, '12:08:00', '2015-05-15', 9),
(30, 8, 2, '01:03:00', '2015-05-15', 3),
(32, 8, 2, '00:02:00', '2015-05-15', 10),
(33, 8, 3, '16:59:35', '2015-05-17', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `id_murid`, `id_guru`, `tanggal`, `rating`, `isi`, `status`, `total_skor`, `id_sales`) VALUES
(1, 1, 2, '2015-05-11', 4, 'cukup baik mengajarnya, walaupun suka telat', 1, 75, 5);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `harga_per_jam` int(11) NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `jumlah_sesi` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `no_invoice`, `id_kelas`, `periode_awal`, `periode_akhir`, `harga_per_jam`, `jumlah_jam`, `jumlah_sesi`) VALUES
(1, 8888, 1, '2015-05-01', '2015-05-31', 50000, 16, 8),
(2, 9999, 3, '2015-05-01', '2015-06-30', 20000, 30, 10),
(3, 5555, 4, '2015-06-01', '2015-06-30', 100000, 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `not_recurrings`
--

CREATE TABLE IF NOT EXISTS `not_recurrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rec_status` int(11) NOT NULL,
  `alasan` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rec_status` (`id_rec_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `not_recurrings`
--

INSERT INTO `not_recurrings` (`id`, `id_rec_status`, `alasan`) VALUES
(1, 5, 'sudah bosen'),
(2, 6, 'harga dirasa terlalu mahal, jadwal murid juga cukup sibuk sehingga pembelajaran tidak berjalan denga'),
(3, 7, 'harga dirasa terlalu mahal, jadwal murid juga cukup sibuk sehingga pembelajaran tidak berjalan dengan efektif.'),
(5, 12, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `recurrings`
--

CREATE TABLE IF NOT EXISTS `recurrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rec_status` int(11) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rec_status` (`id_rec_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `recurrings`
--

INSERT INTO `recurrings` (`id`, `id_rec_status`, `periode_awal`, `periode_akhir`, `jumlah_jam`) VALUES
(1, 4, '2015-05-01', '2015-05-31', 10),
(2, 8, '2015-05-01', '2015-05-31', 50),
(4, 13, '2015-05-01', '2015-05-31', 20);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `recurring_statuses`
--

INSERT INTO `recurring_statuses` (`id`, `id_kelas`, `tanggal`, `id_sales`) VALUES
(2, 1, '2015-05-10', 5),
(3, 1, '2015-05-10', 4),
(4, 2, '2015-05-11', 6),
(5, 2, '2015-05-13', 5),
(6, 3, '2015-05-11', 3),
(7, 3, '2015-05-11', 4),
(8, 3, '2015-05-11', 4),
(12, 1, '2015-05-13', 3),
(13, 1, '2015-05-13', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`id`, `no_invoice`, `jam_hilang`, `alasan`, `action`, `selisih`, `id_sales`, `tanggal`) VALUES
(1, 1, 6, 'balbalbalbalba', 'adfasdfasd', 100, 3, '2015-05-15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `id_murid`, `nama`, `id_sales`, `gender`, `no_telepon`, `domisili`, `email`, `alamat`, `tempat_tgl_lahir`) VALUES
(1, 666666, 'Murid', 3, 'F', '9998877', 'Jakarta', 'murid@baik.com', 'Depok', 'Jakarta, 20-02-1994'),
(2, 777777, 'Murid 2', 4, 'M', '4567898', 'Depok', 'student@gmail.com', 'Sawangan', 'Beji, 12-09-1995'),
(3, 555555, 'Murid X', 3, 'F', '9977', 'Depok', 'x@gmail.com', 'Jalan Margonda', 'Depok, 1 Januari 1994');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `id_sales`, `periode`, `target`, `id_supervisor`, `actual`) VALUES
(1, 3, '2015-05', 200, 5, 66),
(2, 4, '2015-04', 300, 6, 130),
(3, 9, '2015-05', 200, 6, 70),
(5, 9, '2015-04', 270, 6, 90),
(7, 8, '2015-05', 400, 1, 70),
(10, 10, '2015-05', 300, 6, 120),
(12, 3, '2015-05', 300, 6, 0),
(13, 3, '2015-05', 200, 6, 0),
(14, 3, '2015-05', 200, 6, 0),
(15, 3, '2015-05', 200, 6, 0),
(16, 3, '2015-06', 300, 6, 0),
(17, 3, '2015-07', -200, 6, 0),
(18, 3, '0', 0, 3, 0),
(19, 3, '', 0, 6, 0);

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
  ADD CONSTRAINT `end_numbers_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `not_recurrings_ibfk_1` FOREIGN KEY (`id_rec_status`) REFERENCES `recurring_statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recurrings`
--
ALTER TABLE `recurrings`
  ADD CONSTRAINT `recurrings_ibfk_1` FOREIGN KEY (`id_rec_status`) REFERENCES `recurring_statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recurring_statuses`
--
ALTER TABLE `recurring_statuses`
  ADD CONSTRAINT `recurring_statuses_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `recurring_statuses_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
