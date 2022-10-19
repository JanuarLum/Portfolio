-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 05:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(4) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `foto`, `nama`, `tgl_lahir`, `umur`, `kota`, `email`, `phone`) VALUES
(1, '', 'Januar Putra Hidayat', '2002-01-19', 21, 'Tangerang Selatan, Indonesia', 'januar19sid@gmail.com', '088224193603');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `nama`, `keterangan`, `foto`) VALUES
(1, 'Januar', 'Mahasiswa Informatika yang berfokus di bahasa pemrograman python, UI/UX design, web development. Memiliki kelebihan dalam logika', 'bg-masthead.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` tinyint(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subjek` varchar(40) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'januar', 'ff@gmail.ocm', 'test', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(4) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `project` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `gambar`, `judul`, `project`) VALUES
(1, 'figma.png', 'Figma', 'Skill UI/UX menggunakan perangkat figma. '),
(2, 'python.png', 'Python', 'Memiliki skills back end terkhususnya bahasa pemrograman Python. Dimana pernah membuat project machine learning, cyber security, dan visualisasi data ke dalam grafik.'),
(3, 'java.png', 'Java', 'Memiliki keahlian dalam bahasa pemrograman java. Pernah membuat project aplikasi perpustakaan menggunakan bahasa pemrograman java.'),
(4, 'c.png', 'C programming Language', 'Memiliki keahlian dalam menggunakan bahasa pemrograman C. Project yang pernah dibuat ialah penghitungan rumus fisika, kalkulator sederhana, mesin kasir.'),
(5, 'front.png', 'HTML, CSS, Javascript', 'Dalam front end menguasai HTML, CSS, dan javascript. Project yang pernah dibuat : Info mobil, website pendaftaran kampus, website kampus.'),
(6, 'php.png', 'PHP', 'Salah satu bahasa pemrograman untuk front end yang dikuasai adalah PHP. Project yang tealh dibuat Portofolio'),
(7, 'db.png', 'Database', 'Menguasai penggunaan database berupa mySQL. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
