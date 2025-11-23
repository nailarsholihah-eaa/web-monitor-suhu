-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2025 pada 14.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_data`
--

CREATE TABLE `sensor_data` (
  `id` int(11) NOT NULL,
  `suhu` float NOT NULL,
  `kelembaban` float NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sensor_data`
--

INSERT INTO `sensor_data` (`id`, `suhu`, `kelembaban`, `waktu`) VALUES
(1, 27.3, 94.9, '2025-11-02 19:34:15'),
(2, 27.3, 94.8, '2025-11-02 19:34:20'),
(3, 27.4, 94.9, '2025-11-02 19:34:25'),
(4, 27.4, 95.1, '2025-11-02 19:34:31'),
(5, 27.4, 95.3, '2025-11-02 19:34:36'),
(6, 27.4, 95.2, '2025-11-02 19:34:41'),
(7, 27.5, 94.9, '2025-11-02 19:34:46'),
(8, 27.5, 94.7, '2025-11-02 19:34:51'),
(9, 27.5, 94.6, '2025-11-02 19:34:56'),
(10, 27.5, 94.2, '2025-11-02 19:35:01'),
(11, 27.5, 93.8, '2025-11-02 19:35:06'),
(12, 27.5, 94, '2025-11-02 19:35:11'),
(13, 27.5, 93.8, '2025-11-02 19:35:17'),
(14, 27.5, 94, '2025-11-02 19:35:22'),
(15, 27.6, 93.7, '2025-11-02 19:35:27'),
(16, 27.5, 93.6, '2025-11-02 19:35:32'),
(17, 27.6, 93.4, '2025-11-02 19:35:37'),
(18, 27.6, 93.1, '2025-11-02 19:35:42'),
(19, 27.6, 92.9, '2025-11-02 19:35:47'),
(20, 27.6, 93, '2025-11-02 19:35:52'),
(21, 27.6, 92.2, '2025-11-02 19:36:19'),
(22, 27.6, 91.3, '2025-11-02 19:37:24'),
(23, 27.4, 89.7, '2025-11-02 19:45:24'),
(24, 27.6, 92.5, '2025-11-02 19:47:24'),
(25, 23.3, 77.5, '2025-11-04 10:55:10'),
(26, 23.2, 77.5, '2025-11-04 10:57:11'),
(27, 23.1, 77, '2025-11-04 10:59:11'),
(28, 22.9, 76.2, '2025-11-04 11:01:14'),
(29, 19.7, 80.2, '2025-11-04 12:04:42'),
(30, 19.3, 79.9, '2025-11-04 12:06:44'),
(31, 30, 70, '2025-11-10 08:12:37'),
(32, 27.1, 95, '2025-11-10 10:20:47'),
(33, 27.1, 94.2, '2025-11-10 10:21:01'),
(34, 22.4, 63.8, '2025-11-10 11:40:18'),
(35, 22.3, 63.8, '2025-11-10 11:42:19'),
(36, 22.4, 64.7, '2025-11-10 11:44:19'),
(37, 22.4, 64.7, '2025-11-10 11:46:19'),
(38, 22.5, 65.2, '2025-11-10 11:48:19'),
(39, 22.6, 65.1, '2025-11-10 11:50:20'),
(40, 22.6, 65.7, '2025-11-10 11:52:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sensor_data`
--
ALTER TABLE `sensor_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sensor_data`
--
ALTER TABLE `sensor_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
