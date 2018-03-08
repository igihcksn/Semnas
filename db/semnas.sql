-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mar 2018 pada 14.54
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semnas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Online','Offline') NOT NULL DEFAULT 'Offline'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`, `nim`, `create_at`, `status`) VALUES
(1, 'devry kawiryan', 'devrykawiryan@gmail.com', '$2y$10$sUr35wCBczFkX70DpYkY2enL2Lz6rw9ZLEozsH5/rX9rgNie9.OHC', '16.62.0090', '2018-02-19 06:59:30', 'Online'),
(2, 'yogi yulianto', 'Yogi.yulianto@students.amikom.ac.id', '$2y$10$GxlMVzgNlzglfL7atzOTauBF8e1GRpcIla69mOHMT/AR0i7Ks5dJ2', '16.62.0091', '2018-02-20 01:56:13', 'Offline'),
(3, 'lalalal', 'devry.k@students.amikom.ac.id', '$2y$10$IA9yAqMhRBqRUEgO99Ozk.cj7hleTeVHkC1bC97KQf9xgbQlyDvpi', '16.62.0092', '2018-02-20 03:02:16', 'Online');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomer`
--

CREATE TABLE `nomer` (
  `id_nomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nomer`
--

INSERT INTO `nomer` (`id_nomer`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` varchar(10) NOT NULL DEFAULT '0',
  `nama_peserta` varchar(50) DEFAULT NULL,
  `email_peserta` varchar(30) DEFAULT NULL,
  `telepon_peserta` varchar(20) DEFAULT NULL,
  `nim_peserta` varchar(10) NOT NULL,
  `instansi_peserta` varchar(100) NOT NULL,
  `alamat_peserta` varchar(225) NOT NULL,
  `pos_peserta` int(6) NOT NULL,
  `status` enum('bayar','belum bayar') NOT NULL DEFAULT 'belum bayar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_peserta`, `email_peserta`, `telepon_peserta`, `nim_peserta`, `instansi_peserta`, `alamat_peserta`, `pos_peserta`, `status`) VALUES
('SMNS0001', 'inggih', 'igihcksn@gmail.com', '081270768151', '15.11.9288', 'Amikom', 'maguwo', 55282, '');

--
-- Trigger `peserta`
--
DELIMITER $$
CREATE TRIGGER `tg_uniq_no` BEFORE INSERT ON `peserta` FOR EACH ROW BEGIN
  INSERT INTO nomer VALUES (NULL);
  SET NEW.id_peserta = CONCAT('SMNS', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `nomer`
--
ALTER TABLE `nomer`
  ADD PRIMARY KEY (`id_nomer`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nomer`
--
ALTER TABLE `nomer`
  MODIFY `id_nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
