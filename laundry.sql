-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2023 pada 01.07
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
-- Database: `uas_pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE `laundry` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomerhp` bigint(20) NOT NULL,
  `berat` int(11) NOT NULL,
  `jenis_paket` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laundry`
--

INSERT INTO `laundry` (`id`, `nama`, `alamat`, `nomerhp`, `berat`, `jenis_paket`, `total_harga`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DAMARA', 'jingglong', 86865678123, 15, 15000, 225000, 0, '2023-02-10 00:03:47', '2023-02-10 00:03:47'),
(2, 'nanda', 'blitar', 89556331767, 10, 10000, 100000, 0, '2023-02-10 00:04:32', '2023-02-10 00:04:32'),
(3, 'bimo', 'blitar', 89664312556, 20, 15000, 300000, 0, '2023-02-10 00:05:08', '2023-02-10 00:05:08'),
(4, 'ani', 'kanigoro', 85331431556, 5, 5000, 25000, 0, '2023-02-10 00:05:42', '2023-02-10 00:05:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
