-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 08:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_fuzzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_analisis`
--

CREATE TABLE `hasil_analisis` (
  `id_lap` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tgl_analisis` int(11) NOT NULL,
  `absensi` varchar(20) NOT NULL,
  `pengetahuan` varchar(20) NOT NULL,
  `kedisiplinan` varchar(20) NOT NULL,
  `keahlian` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_analisis`
--

INSERT INTO `hasil_analisis` (`id_lap`, `id_karyawan`, `tgl_analisis`, `absensi`, `pengetahuan`, `kedisiplinan`, `keahlian`, `hasil`) VALUES
(1, 1, 2023, '69', '78', '66', '75', '4.4'),
(2, 2, 2023, '78', '68', '79', '80', '3.83');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `divisi` varchar(125) NOT NULL,
  `jk` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `no_hp`, `divisi`, `jk`) VALUES
(1, 'A Prambudi', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(2, 'A. Budi Pranoto', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(3, 'Aam Dewi Hamidah', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(4, 'Aarti Lodia', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(5, 'Abdul Hadi Ismail', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(6, 'Abdul Rachman', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(7, 'Abdul Rahman', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(8, 'Abdul Rifai Natanegara', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(9, 'Abdul Slam Tahir', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(10, 'Abdullah Alatas', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(11, 'Abu Djaja Bunjamin', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(12, 'Abu Hermanto Budiono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(13, 'Achirsyah Moeis', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(14, 'Achmad Fadjar', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(15, 'Achmad Fauzi ', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(16, 'Achmad Kalla', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(17, 'Achmad Latief ', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(18, 'Achmad Nugraha Djuanda', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(19, 'Achmad Sandi', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(20, 'Adam Sautin', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(21, 'Ade Syarief', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(22, 'Ade chakralaksana', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(23, 'Adelina Prasetio', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(24, 'Adhi Utomo', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(25, 'Adhi Utomo Jusman', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(26, 'Adi Bisono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(27, 'Adi Sasono', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(28, 'Adi Sumito', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(29, 'Adimitra Baratama', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(30, 'Aditya Kurniawan ', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(31, 'Adji Muljo Teguh', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(32, 'Adnan', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(33, 'Adri Achmad Drajat', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(34, 'Adriana Maya Politon', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(35, 'Adryansyah', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(36, 'Afandi Hermawan Oey', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(37, 'Afandi Hermawan ', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(38, 'Agam Nugraha Subagdja', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(39, 'Ago Harlim', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(40, 'Agoeng Nugroho ', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(41, 'Agung nugraha', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(42, 'Agung Salim', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(43, 'Agung Tobing', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(44, 'Agus Djohari', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(45, 'AGUS HARTONO ', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(46, 'Agus Lasmono Sudwikatmono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(47, 'Agus Leman Gunawan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(48, 'Agus Makmur', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(49, 'Agus Nursalim', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(50, 'Agus Pranoto Setiadi', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(51, 'Agus Purnomo Edhi', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(52, 'Agus Soenoto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(53, 'Agus Suherman Wirjan', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(54, 'Agus Susanto', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(55, 'Agus chandra', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(56, 'Agus Widagdo', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(57, 'Agustinus Prasetio', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(58, 'Agustinus Wishnu Handoyono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(59, 'Aguston Makmur', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(60, 'Ahadiat Wargana', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(61, 'Ahmad Dipoditiro', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(62, 'Ahmad Marda', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(63, 'Ahmad Rahman Pasaman', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(64, 'Ahmaddin Ahmad', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(65, 'Ahmades Miqailla', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(66, 'Ahsanil Gusnawati', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(67, 'Aida Ishak', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(68, 'AIRIN OKTAVIANY GUNAWAN', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(69, 'Aiwy', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(70, 'Aizid Syafriel Adjam', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(71, 'Aji Bayu Wirrotama', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(72, 'AJI WIJAYA', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(73, 'Akbar Yoso Trisedia', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(74, 'Alan kusuma', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(75, 'Alan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(76, 'Andi wijaya', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(77, 'Albert Kongoasa', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(78, 'Albert Sugianto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(79, 'Albert Suherman', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(80, 'Aldo Putra Brasali', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(81, 'Alfari Narindra', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(82, 'Ali Chendra', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(83, 'Alice Haryono', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(84, 'Alien Wibowo', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(85, 'Aling Hermawan ', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(86, 'Alisyahrazad Hanafiah', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(87, 'Allan Dijaya K', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(88, 'Allan ', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(89, 'Aluinanto Sandjojo', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(90, 'Alvin Gozali', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(91, 'Alwi Alatas', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(92, 'Alwijaya', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(93, 'Amalia', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(94, 'Amalia Aristiningsih', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(95, 'Amaluddin Djambak', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(96, 'Aman', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(97, 'Ameesh Anand', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(98, 'Amelia Kurniawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(99, 'Amelia Mulyono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(100, 'Amin Halim', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(101, 'Amin Supriyadi Liu', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(102, 'Aminoto Sutandi', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(103, 'Aminoto Sutandy', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(104, 'Amrullah Hasyim', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(105, 'Amy Delia', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(106, 'Anak Agung Alit Wiradarma', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(107, 'Anak Agung Gde Agung', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(108, 'Ananda Soewono', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(109, 'Ance Anggraeny', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(110, 'Andang Bachtiar', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(111, 'Andhika Anindyaguna Hermanto', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(112, 'Andi Achmad Dara', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(113, 'Andi Ahmad Dara and Evi Yulism', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(114, 'Andi Gunawan Wibowo', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(115, 'Andi Wijaya Kusuma ', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(116, 'Andiko Ardi Purnomo', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(117, 'Andre Abdi', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(118, 'Andre Johannes Mamuaya', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(119, 'Andre S Prijono', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(120, 'Andre Sukendra Atmadja', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(121, 'Andreas Andikha Bunanta', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(122, 'Andreas Kastono', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(123, 'Andreas Kongoasa', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(124, 'Andreas Tjahjadi', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(125, 'Andrew I Sriro', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(126, 'Andrew K. Labbiaka', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(127, 'Andrew McKay', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(128, 'Andrew Mellon Priasmoro', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(129, 'Andrew Tanoto', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(130, 'Andre', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(131, 'Andrie Setiawan Yapsir', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(132, 'Andry Irwan Djugo', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(133, 'Andry Pribady', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(134, 'Andry Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(135, 'Andy Nugroho Purwohardono', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(136, 'Andy makbul ', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(137, 'Andy Wiryanto O', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(138, 'Ang Rianti', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(139, 'Anindya ', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(140, 'Anita Kalim', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(141, 'Anita Ratnasari', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(142, 'Anna Solana Hamami Kadarachman', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(143, 'Anna Sri Dewi Sianto', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(144, 'Annie Halim', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(145, 'Anthony Brent Elam', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(146, 'Anthony Dominic Byron', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(147, 'Anthony Kurniadi', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(148, 'Anthony Salim', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(149, 'Anthony Siswanto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(150, 'Anthony Wijaya', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(151, 'Anton Henning Linderum', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(152, 'Anton Kusuma', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(153, 'Anton Santoso', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(154, 'Anton Santoso and Anita Marta', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(155, 'Anton Sugiono', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(156, 'Anton Tjahjono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(157, 'Anton Wiratama', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(158, 'Antonius Mulya Saputri', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(159, 'Antony Gunawan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(160, 'Anuj Ralhan', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(161, 'Anwar Lim', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(162, 'Anwar Saebe', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(163, 'Apex Oil & Gas Ltd.', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(164, 'Appointcorp Limited', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(165, 'Ardas Dipa', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(166, 'Ardas Dipa', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(167, 'Ardy Wiria', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(168, 'Ari Hardono Suroso', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(169, 'Ari Indra Gautama', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(170, 'Ari Rophian Perdana Ariwibowo', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(171, 'Ari Sulistio', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(172, 'Arianto Prasetio', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(173, 'Arianto Wisnu Triyatno', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(174, 'Arie Kondang Kresnadi', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(175, 'Arief Prijatna', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(176, 'Arief Santoso', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(177, 'Arief Wiyoso Aswismarmo', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(178, 'Arif and Yvette Suryatenggara', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(179, 'Arif Rachmat', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(180, 'Arifin Yohan', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(181, 'ARINI SARASWATY SUBIANTO', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(182, 'Aris Agung Budiman', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(183, 'Aris Yuwono Ang', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(184, 'Aristotle', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(185, 'Arjen Tridarma Darmawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(186, 'Arlena', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(187, 'Arman Sutedja', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(188, 'Armedta Budi Asmara', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(189, 'Armeilia Widayanti Subianto', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(190, 'Arniaty Achmad', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(191, 'Arniaty Achmad', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(192, 'Arta Satria Soebandi', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(193, 'Arwan Ahimsa', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(194, 'Ary Surya', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(195, 'Arya Widjaya', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(196, 'Aryo Bimo ', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(197, 'Ashwani', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(198, 'ASWADI', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(199, 'Ateng Suhendra', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(200, 'Ateng Sulestio', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(201, 'Atira Aksa', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(202, 'Aurel', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(203, 'Aurelia Supardi', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(204, 'Aviariananto Sukotjo', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(205, 'Awiek Lestari Rahayu', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(206, 'Aziar Zain', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(207, 'Azir Azwien Jenie', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(208, 'B. Dorpi Parlindungan', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(209, 'Bachrumsyah Hamzah', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(210, 'Baduraman Dorpi Parlindungan', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(211, 'Bagus Panuntun', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(212, 'Baldeo Singh', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(213, 'Bambang Hartono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(214, 'Bambang Irawan Massie', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(215, 'Bambang Niaga Tjiputra', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(216, 'Bambang Rahardja Burhan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(217, 'Bambang Subianto', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(218, 'Bambang Sugianto', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(219, 'Bambang Suhandi. T, SE', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(220, 'Bambang Sujagad Susanto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(221, 'BamBang Sumantri', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(222, 'Bambang Tijoso Tedjokusumo', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(223, 'Banbang Panutomo', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(224, 'Bayu Irianto', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(225, 'Bayu Prawitasari', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(226, 'Bayu Virgan Triyatno', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(227, 'Belinda Natalia Tanoko', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(228, 'BELLYANAWATY BUDIMAN', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(229, 'Ben Morice', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(230, 'Beng Phiau', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(231, 'Benjamin Subrata', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(232, 'BENNY IRSJAD', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(233, 'Benny Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(234, 'Benny Tenges', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(235, 'Benny Tjokrosapoetro', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(236, 'Beny Haryanto', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(237, 'Bernadette Ruth Irawati', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(238, 'Bernie Prajoga', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(239, 'Bimo Pramudyo', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(240, 'Bimo Surono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(241, 'Bing Gondosubroto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(242, 'Bintoro Wong', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(243, 'Bismarka Kurniawan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(244, 'Bobby Iman Satrio', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(245, 'Budi Santoso ', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(246, 'Bonny Budi Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(247, 'Boy Gemino ', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(248, 'BRIAN KENNETH JOHN DALLAMORE', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(249, 'Bright City Group Corporation', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(250, 'Bruce William Carpenter', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(251, 'Bruce Williams Carpenter', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(252, 'BUDHI SOEJONO', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(253, 'Budi Arsil', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(254, 'Budi Basuki', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(255, 'Budi Christranto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(256, 'Budi Enijati Maria Soedjana', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(257, 'Budi Ferdinandus', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(258, 'Budi Mulio Utomo', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(259, 'Budi Santoso Taruno Sembodo', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(260, 'Budi Setiadharma SH', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(261, 'Budi Sintoro Then', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(262, 'Budi Surjana', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(263, 'Budi Widyadi', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(264, 'Budi Yanto Lusli', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(265, 'Budiarto Karim', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(266, 'Budiawan Jusmin', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(267, 'BUDIJUWONO HANDJAJA', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(268, 'Budiman Effendi', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(269, 'Budiono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(270, 'Budiono Darsono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(271, 'Budiono Tanbun Boen', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(272, 'Budy Hartono Santosa', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(273, 'Budyanto Totong', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(274, 'Burhansjah', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(275, 'Bustami', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(276, 'CAKRA CIPUTRA', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(277, 'Calvin Lukmantara', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(278, 'Candra Winoto Salim', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(279, 'CANDRA WINOTO', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(280, 'Dadi Sukarso Yuwono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(281, 'Damsiruddin Siregar', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(282, 'Dan Brown', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(283, 'Danamon Group Legal', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(284, 'Danan Kadarachman', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(285, 'Dani Ismulyatie', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(286, 'Daniel', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(287, 'Daniel Indra Djajadi', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(288, 'Daniel Kurniawan Lukman', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(289, 'Danny Juwono', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(290, 'Danny Nugroho', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(291, 'Danny Tjiu', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(292, 'Dany Subrata', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(293, 'Darjoto Setyawan', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(294, 'Darmadi Karjanto ', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(295, 'Darmansah Darsono', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(296, 'Darmawansah Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(297, 'Darminto', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(298, 'Darminto Hartono', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(299, 'Darmo Suwito Barwin', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(300, 'Darmoseputro', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(301, 'Darwin Leo', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(302, 'Darwin Silalahi', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(303, 'Darwin Soegiatto', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(304, 'Darwin Sutanto', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(305, 'Daswi Rayawang', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(306, 'David Kristian', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(307, 'David Sutanto', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(308, 'David kristianto', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(309, 'David Salim', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(310, 'David Widjaya', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(311, 'Debby Febriany Gunawan', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(312, 'Deborah Kent Janawati', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(313, 'Dedie Suherlan', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(314, 'Dedy Rochimat', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(315, 'Dendy Kurniawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(316, 'Denise Tjokrosaputro', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(317, 'Denny Lim', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(318, 'Denny Rahardja', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(319, 'Denny Suryadinata', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(320, 'Denny Wijaya', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(321, 'Deny Juliarto', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(322, 'Dermawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(323, 'Devi Tri Asmarasari', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(324, 'Devie Hendrastiti Darmawan', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(325, 'Devin Wirawan', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(326, 'Devy Prasetyo ', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(327, 'Dewi Garlina Sari', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(328, 'Dewi Indrajani Alimwidjaja', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(329, 'Dewi Kencanawati Natawidjaja', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(330, 'Dewi Livia Sari ', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(331, 'Dewi Natalia Lim', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(332, 'Dewi Nilka Sari', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(333, 'Dewi Novianawati', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(334, 'Dewi Suryati ', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(335, 'Dharma citra', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(336, 'Dharmadi Budiman', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(337, 'Dharmawandi Sutanto', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(338, 'Dharsono Hartono', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(339, 'Diah Soemedi', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(340, 'Dian Muljani Soedarjo', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(341, 'Dian', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(342, 'Diana Husein', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(343, 'Diana Sastrajaya', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(344, 'DIANA Setiawati ', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(345, 'Dicky Herman', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(346, 'Dicky Kurniawan', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(347, 'Dicky kusuma', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(348, 'Didi Ferdinand Korompis', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(349, 'Didit Abdurachman Rustandi', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(350, 'Didit Budijarto', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(351, 'Dina Eldelina Pow', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(352, 'Diniwati', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(353, 'Dino Koeshandery', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(354, 'Diono Nurjadin', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(355, 'Dixon Koesdjojo', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(356, 'Djajadi Djaja', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(357, 'Djajadinata Hardjono', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(358, 'Djamaluddin Tanoto', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(359, 'Djamaluddin Tanoto', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(360, 'Djoko Soegiarto Tjandra', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(361, 'Djoko Kartono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(362, 'Djoko N. Labbaika', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(363, 'Djoko Nirmala Labbaika', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(364, 'Djoko Soesanto Gusti', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(365, 'Djoni Muchsin', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(366, 'Djoni ', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(367, 'Doddy Agustiawan Tjahjadi', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(368, 'Dodi Suhartono Abdul Kadir', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(369, 'Dody Hendrokusumo', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(370, 'Doni Irawan', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(371, 'Donny Imam Priambodo', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(372, 'Donny Yoesgiantoro', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(373, 'Eddi Sugiardi', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(374, 'Eddie Sudijono', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(375, 'Eddy Daud', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(376, 'Eddy Halim', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(377, 'Eddy Handoko', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(378, 'Eddy Herman', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(379, 'Eddy Hussy', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(380, 'Eddy Iskandar', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(381, 'Eddy Pramono', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(382, 'Eddy Purwanto ', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(383, 'Eddy Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(384, 'Eddy Susanto', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(385, 'Eddy Sutandinata', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(386, 'Eddy Saputra manik', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(387, 'Eddy Winata', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(388, 'Eddyanto Hadisurjo', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(389, 'Edgardo Abelarde Tinsay', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(390, 'Edgardo Eloy Diaz Falconet', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(391, 'Edhie Hardjanto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(392, 'Edi Firmansyah', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(393, 'Edianto Prasetyo', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(394, 'Edo Djunaydi', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(395, 'Edwin Soeryadjaya', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(396, 'Edwin Sugiarto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(397, 'Edy', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(398, 'Edy Kosasih', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(399, 'Edy Kusnadi', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(400, 'Edy Susanto', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(401, 'Edy Suwarno', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(402, 'Efendi Budiman', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(403, 'Effendy Husin', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(404, 'Eka Sinto Kasih Tjia', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(405, 'Eko Budianto', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(406, 'Eko Prasetyo Ang', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(407, 'Eko Purnomo', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(408, 'Eko Suharto', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(409, 'Eko Sukamto', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(410, 'El Beatrice', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(411, 'Eliani Johan', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(412, 'Eliezer Nugroho Tjandrakusuma', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(413, 'Elisabet Lay', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(414, 'Elly Lestari Adiutama', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(415, 'Elly Nurlaila Hutabarat', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(416, 'Elly Soepono', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(417, 'Elmursil Moenzir', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(418, 'Elsa Djauhari', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(419, 'ELVIN TJANDRA', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Perempuan'),
(420, 'Elvina Jonas Jahja', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(421, 'Elvira Pudjiwati', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(422, 'Emi Sukiati Lasimon', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(423, 'Emil Abeng', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(424, 'Emily Stephana Djauhari', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(425, 'Emily Waty Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(426, 'Emmy Damayanti', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(427, 'Emy Harjono', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(428, 'Emy Harjono/Andres S, Magbitang jr', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(429, 'Endah Sulistyorini Himawan', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(430, 'Endang Soertikanty', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(431, 'Endang Sugiarti', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(432, 'Endang Susila Budi', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(433, 'Endang Triningsih', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(434, 'Endro S. Wahono', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(435, 'Endy Suryokusumo', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(436, 'Enny Lukitaning Diah', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(437, 'Enny Soegiarto', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(438, 'Entario Widjaja Susanto', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(439, 'Era Helvani', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(440, 'Eric Hardono Tirtajasa', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(441, 'Erick Djuwadi', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(442, 'Erics Yoshawirja', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(443, 'Erik Setiawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(444, 'Erika Debora Djauhari', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Perempuan'),
(445, 'Erlina Ongoredjo', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki'),
(446, 'Erlina Ongsoredjo', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(447, 'Erly Tandjung', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(448, 'Erna Widyastuti', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(449, 'Ernawati', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(450, 'Erni Gunawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(451, 'Ernitha Halim', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(452, 'Erric B. Wibowo', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(453, 'Ervin Wijaya', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(454, 'Erwin Aksa', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Perempuan'),
(455, 'Erwin Aksa', 'Kuningan, Jawa Barat', '0899875647638', 'Quality Control', 'Laki - Laki'),
(456, 'Erwin Budisantosa', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(457, 'ERWIN CIPUTRA', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(458, 'Erwin Gunawan', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(459, 'Erwin Indra Hamid', 'Kuningan, Jawa Barat', '0899875647638', 'Molding', 'Laki - Laki'),
(460, 'Erwin Sasunto', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(461, 'EVAN SAMUEL DJAUHARI', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(462, 'EVELYN DJAUHARI', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Perempuan'),
(463, 'Evelyn Luciana Soeyapto', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Laki - Laki'),
(464, 'Evert Jimmy Lengkong', 'Kuningan, Jawa Barat', '0899875647638', 'Ekspor', 'Laki - Laki'),
(465, 'Evi Hamdani', 'Kuningan, Jawa Barat', '0899875647638', 'Outsol', 'Perempuan'),
(466, 'Evi Wikarsa', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Perempuan'),
(467, 'Evi Yulisma Harahap', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(468, 'Evie Raviana', 'Kuningan, Jawa Barat', '0899875647638', 'Sewing', 'Laki - Laki'),
(469, 'Ewik Hendri', 'Kuningan, Jawa Barat', '0899875647638', 'Packing', 'Laki - Laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', 'Brebes', '089987676512', 'admin', 'admin', 1),
(3, 'Pemilik', 'Kuningan, Jawa Barat', '089987654543', 'pemilik', 'pemilik', 2);

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE `variabel` (
  `id_variabel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_variabel` varchar(20) NOT NULL,
  `sub_kriteria` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`id_variabel`, `id_user`, `nama_variabel`, `sub_kriteria`, `bobot`) VALUES
(2, 1, 'Absensi', 'Kurang', 1),
(3, 1, 'Absensi', 'Cukup', 2),
(4, 1, 'Absensi', 'Baik', 3),
(5, 1, 'Pengetahuan', 'Kurang', 1),
(6, 1, 'Pengetahuan', 'Cukup', 2),
(7, 1, 'Pengetahuan', 'Baik', 3),
(8, 1, 'Kedisiplinan', 'Kurang', 1),
(9, 1, 'Kedisiplinan', 'Cukup', 2),
(10, 1, 'Kedisiplinan', 'Baik', 3),
(11, 1, 'Keahlian', 'Kurang', 1),
(12, 1, 'Keahlian', 'Cukup', 2),
(13, 1, 'Keahlian', 'Baik', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `variabel`
--
ALTER TABLE `variabel`
  ADD PRIMARY KEY (`id_variabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  MODIFY `id_lap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=470;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `id_variabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
