-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 04:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('3174050406540002', 'Kartiman', 'kartiman', 'kartiman', '089653434071'),
('3174054811011003', 'Sekar Puspita Arum', 'sekarpuspitaarum', 'sekarpuspitaarum', '089521671716'),
('3174055207570004', 'Murtinah', 'murtinah', 'murtinah', '085813903243'),
('3306070803940002', 'Saiful Fadilah', 'saifulfadilah', 'saifulfadilah', '085728659168');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(15, '2023-06-09', '3174055207570004', 'Jalan rusak di blok B.25', 'download.jpeg', 'selesai'),
(16, '2023-06-09', '3174055207570004', 'Lampu mati di dekat warung sabana', 'ilustrasi-lampu-jalan-mati-penerangan-pju-jalan-gelap_20170802_152935.jpg', 'proses'),
(17, '2023-06-09', '3174055207570004', 'Jalan ditutup buat hajatan selama 3 hari, padahal hajatannya sudah selesai', 'penutupan_jalan_di_makassar.jpeg', '0'),
(18, '2023-06-09', '3174055207570004', 'Ada orang yang buang sampah di depan rumah saya, sudah sering saya tegur tapi tidak ada respon.', 'download (1).jpeg', '0'),
(19, '2023-06-09', '3174050406540002', 'Tetangga saya parkir sembarangan, menghalangi jalan untuk keluar.', 'terganggu-dengan-mobil-tetangga-20211024010718.jpg', '0'),
(20, '2023-06-09', '3174050406540002', 'Mari Pak, kita adalah gotong royong. Di blok B sampah sudah banyak dan mengganggu', 'download (2).jpeg', '0'),
(22, '2023-06-09', '3174050406540002', 'Lapangan di blok B sudah rusak dari 3 bulan yang lalu Pak, penerangan minim serta becek. Semoga bisa lekas dicor.', 'download (3).jpeg', '0'),
(23, '2023-06-09', '3174050406540002', 'Lampu jalan di blok B sudah pecah Pak, takut kalau hujan jadi konslet dan terjadi kebakaran. Semoga lekas diperbaiki.', '548726_08240726012018_1516929660124.jpg', 'proses'),
(24, '2023-06-09', '3174055207570004', 'Tetangga saya kalau malam suka karaokean itu menyebabkan cucu saya susah tidur. Saya sudah tegur berulang kali, namun tidak digubris.', 'ilustrasi-karaoke.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Sekar Puspita Arum', 'admin', 'admin', '087878802352', 'admin'),
(2, 'Nurul Adila Aziza', 'petugas', 'petugas', '089563602490', 'petugas'),
(5, 'David Pakpahan', 'davidpak', 'davidpak', '08978989009', 'admin'),
(6, 'Muhamad Bayu Nugroho', 'bayunug', 'bayunug', '087878890090', 'admin'),
(7, 'Bayu Sakti Surya Putra', 'bayusakti', 'bayusakti', '08789089878', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(7, 15, '2023-06-09', '                \r\n\r\n                    Baik, Minggu besok akan segera saya survei dan perbaiki. Terimakasih', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
