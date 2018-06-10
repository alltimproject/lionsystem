-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2018 at 06:48 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lion_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator`
--

CREATE TABLE `tb_administrator` (
  `email` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_administrator`
--

INSERT INTO `tb_administrator` (`email`, `firstname`, `lastname`, `password`, `level`) VALUES
('acclion@liongroup.com', 'Isyana', 'Sarasvati', '1673448ee7064c989d02579c534f6b66', 'accounting'),
('admlion@liongroup.com', 'Wahyu', 'Alfarisi', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `kd_booking` varchar(20) NOT NULL,
  `tgl_booking` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adult` int(1) NOT NULL,
  `child` int(1) NOT NULL,
  `infant` int(1) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tipe_booking` varchar(20) NOT NULL,
  `gelar` varchar(6) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(80) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`kd_booking`, `tgl_booking`, `adult`, `child`, `infant`, `status`, `tipe_booking`, `gelar`, `nama_depan`, `nama_belakang`, `alamat`, `no_tlp`, `email`) VALUES
('DIANRS', '2018-06-05 17:00:00', 1, 0, 0, 'Confirmed', 'One Trip', 'Mrs . ', 'Dian', 'Ratna Sari', 'Jl. KH Moch Mansyur no 19f', '081355754092', 'ian.vizz@yahoo.com'),
('HAVIZIM', '2018-06-06 17:00:00', 1, 1, 0, 'Confirmed', 'Multi Trip', 'Mr . ', 'Haviz', 'Indra Maulana', 'Jl. KH Moch Mansyur no 19f', '085752291376', 'haviz_im@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `kd_booking` varchar(20) NOT NULL,
  `no_penerbangan` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail`
--

INSERT INTO `tb_detail` (`kd_booking`, `no_penerbangan`) VALUES
('HAVIZIM', 'JT001'),
('HAVIZIM', 'JT002'),
('DIANRS', 'JT003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbangan`
--

CREATE TABLE `tb_penerbangan` (
  `no_penerbangan` varchar(10) NOT NULL,
  `kota_asal` varchar(30) NOT NULL,
  `kota_tujuan` varchar(30) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `class` varchar(10) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `provider` varchar(20) NOT NULL,
  `status_penerbangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbangan`
--

INSERT INTO `tb_penerbangan` (`no_penerbangan`, `kota_asal`, `kota_tujuan`, `tgl_keberangkatan`, `jam_keberangkatan`, `jam_tiba`, `class`, `harga_tiket`, `provider`, `status_penerbangan`) VALUES
('JT001', 'Jakarta (CGK)', 'Padang (PDG)', '2018-06-23', '06:08:00', '07:14:00', 'Ekonomi', 600000, 'Lion Air', ''),
('JT002', 'Padang (PDG)', 'Jakarta (CGK)', '2018-06-26', '15:15:00', '17:11:00', 'Ekonomi', 600000, 'Lion Air', ''),
('JT003', 'Jakarta (CGK)', 'Denpasar (DPS)', '2018-06-27', '13:12:00', '15:00:00', 'Bussines', 800000, 'Batik Air', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pessenger`
--

CREATE TABLE `tb_pessenger` (
  `no_tiket` int(11) NOT NULL,
  `nama_pessenger` varchar(100) NOT NULL,
  `tipe_pessenger` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `lampiran_pessenger` text NOT NULL,
  `passenger_status` varchar(25) NOT NULL,
  `kd_booking` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pessenger`
--

INSERT INTO `tb_pessenger` (`no_tiket`, `nama_pessenger`, `tipe_pessenger`, `tgl_lahir`, `lampiran_pessenger`, `passenger_status`, `kd_booking`) VALUES
(1689513, 'Mrs. Dian Ratna Sari', 'Adult', '1995-11-27', '', '', 'DIANRS'),
(7368207, 'Mr. Devan Dirgantara Putra', 'Child', '2016-06-17', '', '', 'HAVIZIM'),
(12381124, 'Mr. Haviz Indra Maulana', 'Adult', '1992-10-10', '', '', 'HAVIZIM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_refund`
--

CREATE TABLE `tb_refund` (
  `no_refund` int(11) NOT NULL,
  `tgl_refund` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_refund` int(11) NOT NULL,
  `kd_booking` varchar(20) NOT NULL,
  `no_tiket` int(11) NOT NULL,
  `refund_name` int(100) NOT NULL,
  `refund_alamat` varchar(300) NOT NULL,
  `refund_telepon` varchar(15) NOT NULL,
  `refund_email` varchar(50) NOT NULL,
  `refund_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reschedul`
--

CREATE TABLE `tb_reschedul` (
  `no_reschedul` int(11) NOT NULL,
  `tgl_reschedul` datetime NOT NULL,
  `total_reschedul` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `kd_booking` varchar(20) NOT NULL,
  `no_tiket` int(11) NOT NULL,
  `no_penerbangan` varchar(6) NOT NULL,
  `reschedul_name` varchar(100) NOT NULL,
  `reschedul_alamat` varchar(300) NOT NULL,
  `reschedul_telepon` varchar(15) NOT NULL,
  `reschedul_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reschedul_payment`
--

CREATE TABLE `tb_reschedul_payment` (
  `no_reschedull` int(11) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `lampiran_pembayaran` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`kd_booking`);

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD KEY `kd_booking` (`kd_booking`),
  ADD KEY `no_penerbangan` (`no_penerbangan`);

--
-- Indexes for table `tb_penerbangan`
--
ALTER TABLE `tb_penerbangan`
  ADD PRIMARY KEY (`no_penerbangan`);

--
-- Indexes for table `tb_pessenger`
--
ALTER TABLE `tb_pessenger`
  ADD PRIMARY KEY (`no_tiket`),
  ADD KEY `kd_booking` (`kd_booking`);

--
-- Indexes for table `tb_refund`
--
ALTER TABLE `tb_refund`
  ADD PRIMARY KEY (`no_refund`),
  ADD KEY `kd_booking` (`kd_booking`),
  ADD KEY `no_tiket` (`no_tiket`);

--
-- Indexes for table `tb_reschedul`
--
ALTER TABLE `tb_reschedul`
  ADD PRIMARY KEY (`no_reschedul`),
  ADD KEY `kd_booking` (`kd_booking`),
  ADD KEY `no_penerbangan` (`no_penerbangan`),
  ADD KEY `no_tiket` (`no_tiket`);

--
-- Indexes for table `tb_reschedul_payment`
--
ALTER TABLE `tb_reschedul_payment`
  ADD KEY `no_reschedull` (`no_reschedull`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_refund`
--
ALTER TABLE `tb_refund`
  MODIFY `no_refund` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_reschedul`
--
ALTER TABLE `tb_reschedul`
  MODIFY `no_reschedul` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD CONSTRAINT `tb_detail_ibfk_1` FOREIGN KEY (`kd_booking`) REFERENCES `tb_booking` (`kd_booking`),
  ADD CONSTRAINT `tb_detail_ibfk_2` FOREIGN KEY (`no_penerbangan`) REFERENCES `tb_penerbangan` (`no_penerbangan`);

--
-- Constraints for table `tb_pessenger`
--
ALTER TABLE `tb_pessenger`
  ADD CONSTRAINT `tb_pessenger_ibfk_1` FOREIGN KEY (`kd_booking`) REFERENCES `tb_booking` (`kd_booking`);

--
-- Constraints for table `tb_refund`
--
ALTER TABLE `tb_refund`
  ADD CONSTRAINT `tb_refund_ibfk_1` FOREIGN KEY (`no_tiket`) REFERENCES `tb_pessenger` (`no_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_reschedul`
--
ALTER TABLE `tb_reschedul`
  ADD CONSTRAINT `tb_reschedul_ibfk_1` FOREIGN KEY (`no_tiket`) REFERENCES `tb_pessenger` (`no_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_reschedul_payment`
--
ALTER TABLE `tb_reschedul_payment`
  ADD CONSTRAINT `tb_reschedul_payment_ibfk_1` FOREIGN KEY (`no_reschedull`) REFERENCES `tb_reschedul` (`no_reschedul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
