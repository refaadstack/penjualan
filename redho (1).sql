-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 02:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redho`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `kategori`, `satuan`, `harga_jual`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'ntahlahyo', 'gas 3kg', 'Pcs', 90000, 800, 'public/gambar/99qELqC5t1V5Y93aJFZ2HJJx5MIL0bV2Alvz5iKL.jpeg', '2019-12-08 10:41:02', '2019-12-08 10:41:02'),
(2, 'gas bright', 'gas 5,5kg', 'Pcs', 56000, 80, 'public/gambar/eXrpoylGrXGJFBaiT0Lf5xr1kLhajuZaEF8B5anb.jpeg', '2019-12-09 05:42:28', '2019-12-09 05:42:28'),
(3, 'gas melon', 'gas 3kg', 'Pcs', 20000, 120, 'public/gambar/Ei8H317Ajjf3uoJMowVl0TKtfZSEManNsm8CBsGA.jpeg', '2019-12-09 05:46:53', '2019-12-09 05:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `tahun_terbit`, `pengarang`, `created_at`, `updated_at`) VALUES
(1, '7 cara terkenal lewat sosial media', '2018', 'anonymous', '2019-11-21 00:00:00', '2019-11-21 00:00:00'),
(2, 'LANGIT EROPA', '2017', 'GATOT', '2019-11-21 09:38:39', '2019-11-21 09:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(8, 'gas 3kg', '2019-11-21 11:48:42', '2019-11-21 11:48:42'),
(9, 'gas 12kg', '2019-11-21 11:49:02', '2019-11-21 11:49:02'),
(10, 'gas 5,5kg', '2019-12-02 06:58:48', '2019-12-02 06:59:00'),
(11, 'ATK', '2019-12-09 05:57:07', '2019-12-09 05:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_28_073848_create_kategoris_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pelangi Pelangi', '2019-10-15 00:00:00', '2019-10-15 00:00:00'),
(2, 'Alangkah', '2019-10-15 00:00:00', '2019-10-15 00:00:00'),
(3, 'Indahmu', '2019-10-21 00:00:00', '2019-10-21 00:00:00'),
(4, 'Merah', '2019-10-15 00:00:00', '2019-10-15 00:00:00'),
(5, 'Kuning', '2019-10-11 11:00:00', '2019-10-25 07:01:00'),
(6, 'Hijau', '2019-10-15 00:00:00', '2019-10-16 00:00:00'),
(7, 'ayub', '2019-11-21 11:41:00', '2019-11-21 11:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembelians`
--

CREATE TABLE `pembelians` (
  `id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `nama_pemasok` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`id`, `barang_id`, `nama_pemasok`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(6, 1, 'kael', 9800, 30000, '2019-12-09 07:06:56', '2019-12-09 07:06:56'),
(8, 3, 'ripqy', 100, 1000000, '2019-12-16 00:51:10', '2019-12-16 00:51:10'),
(9, 2, 'pertamina', 80, 900000, '2019-12-16 00:53:17', '2019-12-16 00:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@gmail.com', '$2y$10$bSSEsabcZ2TdUAGTxe3aCOiU0mzJOfSpThbgLCI6k8zPgNsDL1Bo.', NULL, '2019-10-13 23:24:31', '2019-10-13 23:24:31'),
(3, 'admin redho', 'redho@gmail.com', '$2y$10$9yKjp.YySWbesiWUvtAN/uhg7Kv68RoJAxOIqYtrJcjvO5Xe94rGq', 'AKrnwxHCmNOEVOgWSP64m19dLmB7auRs0VJTcIGMwpKLOSXpPnGAz32iRn3Y', '2019-11-21 02:32:13', '2019-11-21 02:32:13'),
(4, 'admin redho', 'adminredho@gmail.com', '$2y$10$reTlI9WFQGnOljCUBQ4REuhLJc9BwviTvo/BK3L8HrV7pu4qW652S', NULL, '2019-12-01 22:42:21', '2019-12-01 22:42:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
