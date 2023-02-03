-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2023 pada 03.25
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `main`
--

CREATE TABLE `main` (
  `device_code` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `lokasi` varchar(120) NOT NULL,
  `maintenance_description` varchar(100) NOT NULL,
  `time_maintenance` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `main`
--

INSERT INTO `main` (`device_code`, `date`, `lokasi`, `maintenance_description`, `time_maintenance`, `status`) VALUES
(1, '2023-02-01', 'a', 'a', '2023-02-01', 'a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`device_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
