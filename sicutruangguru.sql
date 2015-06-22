-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2015 at 01:04 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `id_acc`, `password`, `email`, `nama`, `no_telp`, `role`) VALUES
(7, 'YS', 'ab28c58491f42aaebe28f6ecb1d29c54', 'yodi@ui.ac.id', 'yodi', '081208120812', 3),
(8, 'OO', 'e847897826ceb8346eb5141f8c23436a', 'ops@ops.com', 'Operational Sales hehe', '74902', 2),
(9, 'PN', 'e847897826ceb8346eb5141f8c23436a', 'novranska@gmail.com', 'Pamela Novranska', '47882525', 2),
(10, 'NP', 'e847897826ceb8346eb5141f8c23436a', 'aa@aa.com', 'Budi', '839384', 2),
(11, 'AD', '21232f297a57a5a743894a0e4a801fc3', 'admin@ruangguru.com', 'Administrator MNO', '90909', 1),
(13, 'YK', 'ab28c58491f42aaebe28f6ecb1d29c54', 'kK@kak.com', 'asdfs', '2345', 3),
(16, 'OP', 'e847897826ceb8346eb5141f8c23436a', 'operational@sales.com', 'Rembulan Senja', '1203923', 2),
(19, 'SV', 'ab28c58491f42aaebe28f6ecb1d29c54', 'supervisor@ruangguru.com', 'Supervisor XYZ', '085717773811', 3),
(21, 'PP', '3f0d3f326acd352c1227d3f7eda1f6a0', 'pp@pp.com', 'Pamela', '776944', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `beginning_numbers`
--

INSERT INTO `beginning_numbers` (`id`, `status`, `id_murid`, `jam`, `tanggal`, `id_sales`) VALUES
(45, 1, 4, '17:18:59', '2015-06-17', 10),
(46, 2, 4, '17:19:34', '2015-06-17', 10),
(47, 3, 4, '17:19:44', '2015-06-17', 10),
(48, 4, 4, '17:19:53', '2015-06-17', 10),
(49, 5, 4, '17:20:02', '2015-06-17', 10),
(50, 6, 5, '20:36:57', '2015-06-17', 19),
(51, 1, 8, '10:00:07', '2015-06-17', 19),
(52, 1, 4, '11:02:03', '2015-06-18', 19),
(53, 1, 4, '17:15:45', '2015-06-22', 10),
(54, 2, 4, '17:20:40', '2015-06-22', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_kelas`, `id_guru`, `id_murid`, `status`) VALUES
(7, 1111, 1, 4, 'inactive'),
(8, 2222, 2, 8, 'active'),
(9, 3333, 3, 9, 'active'),
(10, 4444, 1, 5, 'inactive'),
(11, 8888, 2, 7, 'inactive'),
(12, 5555, 2, 6, 'active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `end_numbers`
--

INSERT INTO `end_numbers` (`id`, `no`, `id_invoice`, `jam`, `tanggal`, `id_sales`) VALUES
(15, 7, 4, '17:20:23', '2015-06-17', 10),
(16, 8, 4, '17:20:35', '2015-06-17', 10),
(18, 7, 7, '20:40:26', '2015-06-17', 19),
(20, 7, 5, '14:38:19', '2015-06-17', 19),
(21, 7, 6, '11:02:27', '2015-06-18', 19),
(22, 8, 5, '15:10:40', '2015-06-22', 10),
(23, 9, 5, '17:07:03', '2015-06-22', 16),
(24, 7, 9, '17:21:56', '2015-06-22', 10);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` int(11) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total_skor` float NOT NULL,
  `id_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sales` (`id_sales`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `id_kelas`, `tanggal`, `rating`, `isi`, `status`, `total_skor`, `id_sales`) VALUES
(5, 8, '2015-05-20', 4, 'membosankan, tidak tepat waktu, kurang memahami materi', 1, 7.33333, 10),
(6, 9, '2015-05-21', 9, 'sangat bagus mengajarnya, mengerti apa yang diinginkan oleh muridnya', 1, 8.2, 8),
(9, 7, '2015-05-23', 7, 'cukup baik walaupun terkadang suka gugup', 1, 8.6, 9),
(10, 7, '2015-05-23', 8, 'dapat menjelaskan dengan baik', 1, 8.6, 9),
(12, 11, '2015-05-27', 9, 'sudah sangat baik mengajarnya', 1, 8.8, 16),
(13, 11, '2015-06-18', 7, 'Meet Teresa, a Featured Author, New Article Booster, and Admin who has been active on wikiHow for over 7 years. ', 1, 8.8, 19),
(14, 7, '2015-06-21', 10, 'Teresa is a lifetime learner and believes that we can never learn enough. ', 1, 8.6, 19),
(15, 11, '2015-06-22', 10, 'asdfsad', 1, 8.8, 19),
(16, 9, '2015-06-22', 8, 'sdfasv', 1, 8.2, 19),
(24, 7, '2015-06-22', 9, 'sudah lumayan bagus kok', 1, 8.6, 19),
(25, 8, '2015-06-22', 10, 'hmm yayayaya', 1, 7.33333, 19),
(26, 9, '2015-06-22', 9, 'asdgasdhb asdgadg', 1, 8.2, 19),
(27, 11, '2015-06-22', 9, 'wtwt agasdg', 1, 8.8, 19),
(28, 12, '2015-06-22', 8, ' agasg asg a', 1, 7.66667, 19),
(29, 12, '2015-06-22', 9, 'dagas', 1, 7.66667, 19),
(30, 9, '2015-06-22', 7, 'adfasdg', 1, 8.2, 19),
(31, 11, '2015-06-22', 9, 'asdf asdkjfkas', 1, 8.8, 19),
(32, 7, '2015-06-22', 9, 'asldfkads', 1, 8.6, 19),
(33, 9, '2015-06-22', 8, 'amflas aldsflasd', 1, 8.2, 19),
(34, 8, '2015-06-22', 8, 'afbass', 1, 7.33333, 19),
(35, 12, '2015-06-22', 6, 'sadgas', 1, 7.66667, 19);

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
  `refund` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `no_invoice`, `id_kelas`, `periode_awal`, `periode_akhir`, `harga_per_jam`, `jumlah_jam`, `jumlah_sesi`, `refund`) VALUES
(4, 1234, 7, '2015-05-01', '2015-05-31', 100000, 20, 10, 1),
(5, 2345, 8, '2015-05-01', '2015-05-31', 85000, 20, 20, 1),
(6, 3456, 9, '2015-06-01', '2015-06-30', 90000, 16, 8, 1),
(7, 4567, 10, '2015-04-01', '2015-05-31', 125000, 20, 10, 0),
(8, 6789, 11, '2015-05-14', '2015-06-18', 50000, 20, 10, 0),
(9, 7899, 12, '2015-06-01', '2015-06-30', 50000, 20, 10, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `not_recurrings`
--

INSERT INTO `not_recurrings` (`id`, `id_rec_status`, `alasan`) VALUES
(1, 1, 'malas dan mau main saja\n'),
(3, 4, 'mau mencoba kelas lain'),
(4, 7, 'tidak saja');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `recurrings`
--

INSERT INTO `recurrings` (`id`, `id_rec_status`, `periode_awal`, `periode_akhir`, `jumlah_jam`) VALUES
(1, 2, '2015-07-01', '2015-07-31', 20),
(2, 5, '2015-06-01', '2015-05-31', 20),
(3, 6, '2015-06-01', '2015-06-19', 14),
(4, 8, '2015-06-02', '2015-06-30', 50),
(5, 9, '2015-06-06', '2015-06-19', 55),
(6, 11, '2015-06-11', '2015-06-17', 40),
(7, 12, '2015-06-05', '2015-06-28', 60),
(8, 13, '2015-06-05', '2015-06-28', 60),
(9, 14, '2015-06-01', '2015-06-27', 58),
(10, 15, '2015-06-01', '2015-06-27', 58),
(11, 16, '2015-06-03', '2015-06-27', 20),
(12, 17, '2015-06-05', '2015-06-15', 15),
(13, 18, '2015-07-01', '2015-07-31', 32);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `recurring_statuses`
--

INSERT INTO `recurring_statuses` (`id`, `id_kelas`, `tanggal`, `id_sales`) VALUES
(1, 10, '2015-05-23', 10),
(2, 7, '2015-05-23', 10),
(4, 7, '2015-05-27', 16),
(5, 8, '2015-05-27', 16),
(6, 9, '2015-06-21', 16),
(7, 12, '2015-06-21', 16),
(8, 12, '2015-06-21', 10),
(9, 12, '2015-06-21', 10),
(10, 12, '2015-06-21', 10),
(11, 12, '2015-06-21', 10),
(12, 12, '2015-06-21', 10),
(13, 12, '2015-06-21', 10),
(14, 12, '2015-06-21', 10),
(15, 12, '2015-06-21', 10),
(16, 9, '2015-06-21', 10),
(17, 12, '2015-06-21', 19),
(18, 8, '2015-06-22', 19);

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE IF NOT EXISTS `refunds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` int(11) NOT NULL,
  `jam_hilang` int(11) NOT NULL,
  `alasan` varchar(300) NOT NULL,
  `action` varchar(300) NOT NULL,
  `selisih` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `no_invoice` (`no_invoice`),
  KEY `id_sales` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`id`, `no_invoice`, `jam_hilang`, `alasan`, `action`, `selisih`, `id_sales`, `tanggal`) VALUES
(6, 5, 15, 'mau pindah ke luar negeri', 'hehehe', 100000, 9, '2015-05-23'),
(8, 4, 25, 'nbnb,b', 'hghghgh', 30000, 19, '2015-06-17'),
(9, 6, 10, 'tidak cocok dengan kelasnya', 'digantikan ke kelas lain', 200000, 19, '2015-06-17'),
(10, 9, 20, 'pengen duit lagi dianya..', 'ya gapapa sih terserah dia lah', 150000, 19, '2015-06-22');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `id_sales`, `periode`, `target`, `id_supervisor`, `actual`) VALUES
(5, 9, '2015-04', 350, 6, 340),
(14, 10, '2015-05', 350, 6, 20),
(16, 10, '2015-06', 300, 6, 98),
(18, 9, '2015-05', 400, 1, 250),
(19, 8, '2015-05', 400, 1, 0),
(20, 8, '2015-04', 350, 1, 370),
(21, 8, '2015-03', 270, 1, 260),
(22, 8, '2015-02', 250, 1, 250),
(23, 16, '2015-04', 450, 19, 200),
(24, 16, '2015-06', 400, 19, 220);

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
(1, 12345, 'Pamela', 'pam@mail.com', 85728882, 'jakarta'),
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
  ADD CONSTRAINT `feedbacks_ibfk_3` FOREIGN KEY (`id_sales`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
