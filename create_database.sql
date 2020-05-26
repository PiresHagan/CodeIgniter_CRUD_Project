-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 03:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `ID_POST` int(11) NOT NULL,
  `JUDUL_POST` varchar(255) NOT NULL,
  `ISI_POST` varchar(10000) NOT NULL,
  `TANGGAL_POST` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TANGGAL_EDIT` datetime NOT NULL,
  `NAMA_PEMBUAT` varchar(20) NOT NULL,
  `NAMA_PENGEDIT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`ID_POST`, `JUDUL_POST`, `ISI_POST`, `TANGGAL_POST`, `TANGGAL_EDIT`, `NAMA_PEMBUAT`, `NAMA_PENGEDIT`) VALUES
(4, 'Percobaan Buat Posting', '[EDITED AGAIN]Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)Belajar CRUD dengan menggunakan CodeIgniter (Active Record)                  ', '2019-05-19 08:03:04', '2019-05-19 08:06:38', 'yusielanidytmka', 'asvinidytmka'),
(5, 'Postingan tentang Facebook', 'Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.', '2019-05-19 08:05:32', '2019-05-19 08:05:32', 'asvinidytmka', 'asvinidytmka');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `NIM` varchar(20) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `FOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NIM`, `NAMA`, `USERNAME`, `ALAMAT`, `PASSWORD`, `FOTO`) VALUES
('175150701111015', 'Ni Putu Sri Yusielani Dyatmika', 'yusielanidytmka', 'Jalan Soekarno Hatta', '12345', 'fotoSatu.jpg'),
('175150707111056', 'Asvini Dyatmika', 'asvinidytmka', 'Jalan Bendungan', '789', 'fotoTiga.jpg'),
('1751507071111011', 'Radharani ', 'Radha', 'Jalan Sigura gura', 'abc', 'fotoDua.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`ID_POST`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `ID_POST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
