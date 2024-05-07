-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 08:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights_keahlian`
--

CREATE TABLE `flights_keahlian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentase_keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights_keahlian`
--

INSERT INTO `flights_keahlian` (`id`, `keahlian`, `presentase_keahlian`, `created_at`, `updated_at`) VALUES
(1, 'C++', '70', '2024-03-18 22:53:32', '2024-03-18 22:53:32'),
(2, 'HTML', '90', '2024-03-18 23:06:57', '2024-03-18 23:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `flights_kontak`
--

CREATE TABLE `flights_kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights_kontak`
--

INSERT INTO `flights_kontak` (`id`, `nomor_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '08122345678', 'Kota Padang', '2024-03-18 22:38:09', '2024-03-18 22:38:09'),
(2, '0812876543', 'KOTA PARIAMAN', '2024-03-18 23:06:14', '2024-03-18 23:06:14'),
(3, '08123456789', 'Kota Padang', '2024-03-19 00:10:10', '2024-03-19 00:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `flights_pendidikan`
--

CREATE TABLE `flights_pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights_pendidikan`
--

INSERT INTO `flights_pendidikan` (`id`, `tahun_masuk`, `tahun_selesai`, `instusi`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, '2021', '2025', 'UNP', 'PTI', '2024-03-18 22:37:57', '2024-03-18 22:37:57'),
(2, '2021', '2030', 'UNAND', 'TKJ', '2024-03-18 23:05:29', '2024-03-18 23:05:29'),
(3, '2015', '2024', 'UPI', 'MTK', '2024-03-18 23:05:57', '2024-03-18 23:05:57'),
(4, '2018', '2023', 'UIN', 'Bimbingan Keluarga', '2024-03-19 00:09:55', '2024-03-19 00:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `flights_pengalaman`
--

CREATE TABLE `flights_pengalaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights_pengalaman`
--

INSERT INTO `flights_pengalaman` (`id`, `tahun_masuk`, `tahun_selesai`, `pekerjaan`, `perusahan`, `kota`, `created_at`, `updated_at`) VALUES
(1, '2018', '2021', 'DATA ANALISY', 'SEMEN PADANG', 'PADANG', '2024-03-18 22:38:47', '2024-03-18 22:38:47'),
(2, '2021', '2024', 'PEGAWAI', 'SEMEN PADANG', 'PADANG', '2024-03-18 23:06:39', '2024-03-18 23:06:39'),
(3, '2018', '2023', 'STAF AHLI', 'ARGENESIA', 'PADANG', '2024-03-19 00:11:34', '2024-03-19 00:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `flights_profil`
--

CREATE TABLE `flights_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights_profil`
--

INSERT INTO `flights_profil` (`id`, `nama`, `email`, `jenis_kelamin`, `alamat`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Yori saputra', 'yorisaputra422@gmail.com', 'Pilih Jenis Kelamin', 'Kota Padang', 'PTI', 'rOsX733PFdWUsbz5ZtuvZAMUXPj4Uz9FFxgHZi8g.jpg', '2024-03-18 22:37:22', '2024-03-19 00:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_04_164720_create_flights_profil', 1),
(7, '2024_03_04_165041_create_flights_pendidikan', 1),
(8, '2024_03_04_165058_create_flights_kontak', 1),
(9, '2024_03_04_165118_create_flights_pengalaman', 1),
(10, '2024_03_04_165134_create_flights_keahlian', 1),
(11, '2024_03_19_050402_fotofolio', 1),
(12, '2024_03_19_050905_keahlian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yori', 'yorisaputra422@gmail.com', NULL, '$2y$12$0DLdwG.taFmUtjThH/8zN.JAaZl7twryPfsGWnc3qnMLbX/YzFUCu', NULL, '2024-03-18 22:36:37', '2024-03-18 22:36:37'),
(2, 'yori', 'yorisaputra423@gmail.com', NULL, '$2y$12$nuh4nOehH3R.KD92GMxmhOZBO2nRwTxhH7ZW8hNPB.cVfKZJkDiy.', NULL, '2024-03-18 22:44:51', '2024-03-18 22:44:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights_keahlian`
--
ALTER TABLE `flights_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights_kontak`
--
ALTER TABLE `flights_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights_pendidikan`
--
ALTER TABLE `flights_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights_pengalaman`
--
ALTER TABLE `flights_pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights_profil`
--
ALTER TABLE `flights_profil`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights_keahlian`
--
ALTER TABLE `flights_keahlian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flights_kontak`
--
ALTER TABLE `flights_kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flights_pendidikan`
--
ALTER TABLE `flights_pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flights_pengalaman`
--
ALTER TABLE `flights_pengalaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flights_profil`
--
ALTER TABLE `flights_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
