-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2015 at 12:03 PM
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
(3, 'OP', 'e847897826ceb8346eb5141f8c23436a', 'op@op.com', 'Operational Sales X', '273748', 2),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `beginning_numbers`
--

INSERT INTO `beginning_numbers` (`id`, `status`, `id_murid`, `jam`, `tanggal`, `id_sales`) VALUES
(1, 1, 6, '17:03:37', '2015-05-19', 3),
(3, 2, 6, '17:13:20', '2015-05-19', 3),
(4, 3, 6, '17:14:14', '2015-05-19', 3),
(5, 4, 6, '17:14:34', '2015-05-19', 3),
(6, 5, 6, '17:14:44', '2015-05-19', 3),
(8, 1, 4, '21:56:44', '2015-05-19', 9),
(9, 2, 4, '21:56:50', '2015-05-20', 9),
(10, 3, 4, '21:57:01', '2015-05-21', 9),
(11, 4, 4, '21:57:12', '2015-05-22', 9),
(12, 5, 4, '21:57:23', '2015-05-24', 9),
(15, 1, 5, '22:16:37', '2015-05-19', 8),
(16, 2, 5, '22:16:49', '2015-05-19', 8),
(17, 3, 5, '22:16:56', '2015-05-19', 8),
(18, 4, 5, '22:17:03', '2015-05-19', 8),
(19, 5, 5, '22:17:14', '2015-05-19', 8),
(20, 1, 9, '07:34:07', '2015-05-20', 8),
(21, 2, 9, '07:35:46', '2015-05-20', 8),
(22, 1, 7, '09:01:48', '2015-05-20', 6),
(23, 2, 7, '09:02:14', '2015-05-20', 6),
(24, 3, 7, '09:02:21', '2015-05-20', 6),
(25, 4, 7, '09:02:30', '2015-05-20', 6),
(26, 5, 7, '09:02:39', '2015-05-20', 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_kelas`, `id_guru`, `id_murid`, `status`) VALUES
(7, 1111, 1, 4, 'active'),
(8, 2222, 2, 8, 'active'),
(9, 3333, 3, 9, 'active'),
(10, 4444, 1, 5, 'active'),
(11, 8888, 2, 7, 'active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `end_numbers`
--

INSERT INTO `end_numbers` (`id`, `no`, `id_invoice`, `jam`, `tanggal`, `id_sales`) VALUES
(1, 6, 4, '21:57:38', '2015-05-19', 9),
(2, 7, 4, '21:58:48', '2015-05-19', 9),
(3, 8, 4, '21:59:08', '2015-05-19', 9),
(4, 6, 7, '22:18:31', '2015-05-19', 8),
(5, 7, 7, '22:18:51', '2015-05-19', 8),
(6, 8, 7, '22:19:04', '2015-05-19', 8),
(7, 6, 8, '09:28:33', '2015-05-20', 6),
(8, 7, 8, '09:28:46', '2015-05-20', 6),
(9, 8, 8, '09:28:59', '2015-05-20', 6);

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
  `isi` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total_skor` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_murid` (`id_murid`),
  KEY `id_guru` (`id_guru`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `id_murid`, `id_guru`, `tanggal`, `rating`, `isi`, `status`, `total_skor`, `id_sales`) VALUES
(1, 4, 1, '2015-05-19', 4, 'sudah cukup baik', 1, 80, 3),
(3, 9, 3, '2015-05-20', 9, 'sangat jelas mengajarnya, sabar dan mengerti kemauan murid.', 1, 9, 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `no_invoice`, `id_kelas`, `periode_awal`, `periode_akhir`, `harga_per_jam`, `jumlah_jam`, `jumlah_sesi`) VALUES
(4, 1234, 7, '2015-05-01', '2015-05-31', 100000, 20, 10),
(5, 2345, 8, '2015-05-01', '2015-05-31', 85000, 20, 20),
(6, 3456, 9, '2015-06-01', '2015-06-30', 90000, 16, 8),
(7, 4567, 10, '2015-04-01', '2015-05-31', 125000, 20, 10),
(8, 6789, 11, '2015-05-14', '2015-06-18', 50000, 20, 10);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`id`, `no_invoice`, `jam_hilang`, `alasan`, `action`, `selisih`, `id_sales`, `tanggal`) VALUES
(2, 4, 4, 'harus pergi ke luar negeri', 'ditagih', 400000, 3, '2015-05-18');

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
  `email` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_tgl_lahir` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `id_murid`, `nama`, `id_sales`, `gender`, `no_telepon`, `domisili`, `email`, `alamat`, `tempat_tgl_lahir`) VALUES
(4, 666666, 'Murid A', 7, 'F', '567903', 'Jakarta', 'a@gmail.com', 'Rawamangun', 'Jakarta, 1 Januari 1994'),
(5, 777777, 'Murid B', 7, 'M', '58490', 'Depok', 'b@b.com', 'Margonda Residence', 'Bogor, 2 Februari 1995'),
(6, 111111, 'Pamela Novranska', 8, 'F', '085717773811', 'Jakarta', 'novranska111@gmail.com', 'Margonda Residence', 'Sukabumi, 1 November 1993'),
(7, 222222, 'Derien Yauma', 9, 'M', '5093049', 'Depok', 'derien@gmail.com', 'Depok lah pokoknya', 'Jakarta, 1 Desember 1994'),
(8, 333333, 'Pinkyvi Tiffany', 10, 'F', '4885069', 'Jakarta', 'pinky@gmail.com', 'Bintaro', 'Jakarta, 1 Oktober 1993'),
(9, 444444, 'Yodi Syaeful Anwar', 10, 'M', '8039403', 'Depok', 'yodi@gmail.com', 'Bekasi', 'Bekasi, 1 Juni 1993');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `id_sales`, `periode`, `target`, `id_supervisor`, `actual`) VALUES
(5, 9, '2015-04', 350, 6, 140),
(12, 3, '2015-05', 200, 6, 120),
(13, 8, '2015-05', 300, 6, 150),
(14, 10, '2015-05', 350, 6, 100),
(15, 9, '2015-05', 330, 6, 90);

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
  ADD CONSTRAINT `beginning_numbers_ibfk_1` FOREIGN KEY (`id_murid`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beginning_numbers_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_murid`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `end_numbers`
--
ALTER TABLE `end_numbers`
  ADD CONSTRAINT `end_numbers_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `end_numbers_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`id_murid`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_3` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `recurring_statuses_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recurring_statuses_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_ibfk_1` FOREIGN KEY (`no_invoice`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refunds_ibfk_2` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `targets`
--
ALTER TABLE `targets`
  ADD CONSTRAINT `fk_targets_accounts` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
