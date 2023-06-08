-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 08.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `administrator_id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwrod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `nama`, `username`, `passwrod`) VALUES
(1, 'jakiro', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aqidah`
--

CREATE TABLE `aqidah` (
  `aqidah_id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiqih`
--

CREATE TABLE `fiqih` (
  `fiqih_id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fiqih`
--

INSERT INTO `fiqih` (`fiqih_id`, `judul`, `url`, `tanggal`, `nama`) VALUES
(1, 'Fiqih Wudhu', 'fiqih - fiqih wudu.php', '2023-06-06', 'jaki'),
(2, 'Sambahyang Jum\'at', 'fiqih - Sholat Jum\'at.php', '2023-06-06', 'yuliana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manhaj`
--

CREATE TABLE `manhaj` (
  `manhaj_id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `sejarah_id` int(10) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Indeks untuk tabel `aqidah`
--
ALTER TABLE `aqidah`
  ADD PRIMARY KEY (`aqidah_id`);

--
-- Indeks untuk tabel `fiqih`
--
ALTER TABLE `fiqih`
  ADD PRIMARY KEY (`fiqih_id`);

--
-- Indeks untuk tabel `manhaj`
--
ALTER TABLE `manhaj`
  ADD PRIMARY KEY (`manhaj_id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`sejarah_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
