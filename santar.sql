-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santar`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_16_140730_create_rts_table', 1),
(6, '2023_09_16_140817_create_surats_table', 1),
(7, '2023_09_16_140847_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `judul`, `slug`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 2, 'judul pertama', 'judul-pertama', NULL, 'aasijdasoijdaosjdqojwdwqjqwejqadsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssacasascascassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssswpejqwjeqwpeqwjeqwpe', '2023-09-30 08:45:46', '2023-09-30 08:45:46'),
(2, 2, 'judul kedua', 'judul-kedua', NULL, 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe', '2023-09-30 08:45:46', '2023-09-30 08:45:46'),
(3, 2, 'judul ketiga', 'judul-ketiga', NULL, 'aasijdasoijdaosjdqojwdwqjqwejqwpejqwjeqwpeqwjeqwpe', '2023-09-30 08:45:46', '2023-09-30 08:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `rts`
--

CREATE TABLE `rts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rt` varchar(255) NOT NULL,
  `nama_ketua` varchar(255) DEFAULT NULL,
  `ttd` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rts`
--

INSERT INTO `rts` (`id`, `nama_rt`, `nama_ketua`, `ttd`, `created_at`, `updated_at`) VALUES
(1, 'RT 01', 'Muhammad Iqbal Firdaus', NULL, '2023-09-30 08:45:45', '2023-10-02 13:34:14'),
(2, 'RT 02', 'Sabrian', NULL, '2023-09-30 08:45:45', '2023-09-30 08:45:45'),
(3, 'RT 03', 'Reysha', NULL, '2023-09-30 08:45:45', '2023-09-30 08:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rt_id` bigint(20) UNSIGNED NOT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `jenis_surat` varchar(255) DEFAULT NULL,
  `tinggal` varchar(255) DEFAULT NULL,
  `bidang_usaha` varchar(255) DEFAULT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `tanggal_kematian` date DEFAULT NULL,
  `jam_kematian` time DEFAULT NULL,
  `tempat_kematian` varchar(255) DEFAULT NULL,
  `penyebab_kematian` varchar(255) DEFAULT NULL,
  `tempat_dimakamkan` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `jenis_cerai` varchar(255) DEFAULT NULL,
  `nama_pasangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Diproses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `user_id`, `rt_id`, `keperluan`, `nik`, `jenis_surat`, `tinggal`, `bidang_usaha`, `nama_usaha`, `tanggal_kematian`, `jam_kematian`, `tempat_kematian`, `penyebab_kematian`, `tempat_dimakamkan`, `lokasi`, `jenis_cerai`, `nama_pasangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Terserah', NULL, 'Surat Keterangan Usaha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Disetujui', '2023-09-30 08:45:46', '2023-09-30 08:47:59'),
(2, 1, 1, 'Entah', NULL, 'Surat Keterangan Duda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ditolak', '2023-09-30 08:45:46', '2023-09-30 08:45:46'),
(3, 5, 2, 'Terakhir', NULL, 'Surat Keterangan Domisili', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Diproses', '2023-09-30 08:45:46', '2023-09-30 08:45:46'),
(4, 1, 1, 'cjj', '1234567890', 'Surat Keterangan Tidak Mampu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Diproses', '2023-10-03 01:29:21', '2023-10-03 01:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rt_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `status_perkawinan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rt_id`, `nik`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `agama`, `status_perkawinan`, `pekerjaan`, `no_hp`, `image`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '1234567890', '$2y$10$J5MNhdZZqK9FXQpu8HmQGuxekEN4UOgItFJY4V7fdu4dhIDCoYU3a', 'Akhdan Al Wafi', 'Jambi', '2003-11-07', 'Jambi', 'Laki-laki', 'Islam', 'Belum Kawin', 'Mahasiswa', NULL, NULL, NULL, 'Warga', NULL, '2023-09-30 08:45:45', '2023-09-30 08:45:45'),
(2, 2, '1234567892', '$2y$10$XC2x88TnM9ca7ru480oxI.6qgav88s2jRGCvP2xJUtkXPlZWX9n/e', 'Sabrian', 'Jambi', '2003-11-07', 'Jambi', 'Laki-laki', 'Islam', 'Belum Kawin', 'Pengurus RT', NULL, NULL, NULL, 'Ketua', NULL, '2023-09-30 08:45:45', '2023-09-30 08:45:45'),
(3, 1, '1234567891', '$2y$10$rmJtfCkq.OtiITeQqldjIuHBTfJ1Xw.JAqwpxeE.pSYRccwnsS8SW', 'Muhammad Iqbal Firdaus', 'Padang', '2003-02-24', 'Muara Bulian', 'Laki-laki', 'Islam', 'Belum Kawin', 'Pejabat RT', NULL, NULL, NULL, 'Ketua', NULL, '2023-09-30 08:45:45', '2023-10-02 13:34:14'),
(4, 3, '1234567894', '$2y$10$dhm8o0p6WsutuinTn1IQFOdKwg9wUjMmYgqEU6lBUtuLycIja1NGm', 'Reysha', 'Jambi', '2003-02-24', 'Muara Bulian', 'Perempuan', 'Islam', 'Belum Kawin', 'Pejabat RT', NULL, NULL, NULL, 'Ketua', NULL, '2023-09-30 08:45:46', '2023-09-30 08:45:46'),
(5, 2, '1234567893', '$2y$10$jtT.ACLTOfMb7D0q4XwIK.GvkTFrCbyiT6sFl2hLibwt1yc5w5QZO', 'Ilham', 'Padang', '2003-02-24', 'Muara Bulian', 'Laki-laki', 'Islam', 'Belum Kawin', 'Mahasiswa', NULL, NULL, NULL, 'Warga', NULL, '2023-09-30 08:45:46', '2023-09-30 08:45:46'),
(6, NULL, 'admin', '$2y$10$tB47AeAM1OQQeaZI683ZEOqlgPrgmVTYt9b630.WjVOxFhZltIpo2', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, '2023-09-30 08:45:46', '2023-09-30 08:45:46');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `rts`
--
ALTER TABLE `rts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rts`
--
ALTER TABLE `rts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
