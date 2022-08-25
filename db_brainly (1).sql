-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 03.42
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_brainly`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_question` int(11) NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_answ_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`id`, `id_question`, `answer`, `path_answ_img`, `created_at`, `updated_at`) VALUES
(1, 1, 'A.Ind', '', '2022-08-08 03:50:00', '2022-08-08 03:50:01'),
(2, 2, 'A.mtk', '', '2022-08-08 03:50:03', '2022-08-08 03:50:03'),
(3, 3, 'A.bjw', '', '2022-08-08 03:50:18', '2022-08-08 03:50:19'),
(4, 4, 'A.ipa', '', '2022-08-08 03:50:22', '2022-08-08 03:50:22'),
(5, 1, 'A.ind2', '', '2022-08-08 03:59:15', '2022-08-08 03:59:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `classes`
--

INSERT INTO `classes` (`id`, `nama_class`, `created_at`, `updated_at`) VALUES
(1, 'Kelas 1', '2022-08-08 03:45:32', '2022-08-08 03:45:33'),
(2, 'Kelas 2', '2022-08-08 03:46:29', '2022-08-08 03:46:30'),
(3, 'Kelas 3', '2022-08-08 03:46:37', '2022-08-08 03:46:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'MTK', '2022-08-08 03:47:02', '2022-08-08 03:47:02'),
(2, 'IND', '2022-08-08 03:47:05', '2022-08-08 03:47:06'),
(3, 'BJW', '2022-08-08 03:47:22', '2022-08-08 03:47:22'),
(4, 'IPA', '2022-08-08 03:47:27', '2022-08-08 03:47:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2022_08_05_025420_user_details', 2),
(10, '2022_08_05_025509_mapels', 2),
(11, '2022_08_05_025528_answers', 2),
(12, '2022_08_05_025540_questions', 2),
(13, '2022_08_05_025651_classes', 2),
(14, '2022_08_05_025737_types', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@g.co', '$2y$10$Kmk3Yr8sLXWw4vto1Hyxo.1nYUUrWMTXtnOEYVJPDk56pQShbm4FG', '2022-08-22 21:09:25'),
('user@gm.c', '$2y$10$.7pvDgVt4CSiSnKN76cGjO/k.6lXO35lf5uL8HXPY7BdPw2fuQKeu', '2022-08-23 21:51:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_dil` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_qst_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `id_user_dil`, `id_type`, `id_kelas`, `id_mapel`, `mapel`, `question`, `path_qst_img`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 1, 2, NULL, 'Q.Ind', NULL, '2022-08-08 03:47:59', '2022-08-08 03:47:59'),
(2, 0, 2, 2, 1, NULL, 'Q.mtk', NULL, '2022-08-08 06:27:03', '2022-08-08 06:27:06'),
(3, 0, 2, 3, 3, NULL, 'Q.bjw', NULL, '2022-08-08 06:27:08', '2022-08-08 06:27:08'),
(4, 0, 1, 1, 4, NULL, 'Q.ipa', NULL, '2022-08-08 06:27:10', '2022-08-08 06:27:10'),
(5, 0, 2, 1, 2, NULL, 'Q.ind', NULL, '2022-08-08 07:07:17', '2022-08-08 07:07:18'),
(6, 1, 0, 2, 1, NULL, 'zxzXzxzX', NULL, '2022-08-22 19:33:43', '2022-08-22 19:33:43'),
(7, 1, 0, 2, 2, NULL, 'zxzzXZX', NULL, '2022-08-22 19:38:22', '2022-08-22 19:38:22'),
(8, 1, 0, 1, 1, NULL, 'push', NULL, '2022-08-22 19:38:48', '2022-08-22 19:38:48'),
(9, 1, 0, 3, 2, NULL, 'push1', NULL, '2022-08-22 19:39:50', '2022-08-22 19:39:50'),
(42, 1, 0, 1, 4, '[{\"nama_mapel\":\"IPA\"}]', 'Ipa', NULL, '2022-08-23 23:22:41', '2022-08-23 23:22:41'),
(43, 1, 0, 2, 1, 'MTK', 'sad', NULL, '2022-08-23 23:29:42', '2022-08-23 23:29:42'),
(44, 1, 0, 1, 2, 'IND', 'IND', NULL, '2022-08-23 23:36:05', '2022-08-23 23:36:05'),
(45, 1, 0, 3, 4, 'IPA', 'INd', NULL, '2022-08-23 23:36:58', '2022-08-23 23:36:58'),
(46, 1, 0, 1, 2, 'IND', 'dasd', NULL, '2022-08-23 23:38:09', '2022-08-23 23:38:09'),
(47, 1, 0, 2, 3, 'BJW', 'qweqw', NULL, '2022-08-23 23:39:37', '2022-08-23 23:39:37'),
(48, 1, 0, 2, 4, 'IPA', 'sdasd', NULL, '2022-08-23 23:40:02', '2022-08-23 23:40:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `nama_type`, `created_at`, `updated_at`) VALUES
(1, 'Belum', '2022-08-08 03:44:41', '2022-08-08 03:44:42'),
(2, 'Sudah', '2022-08-08 03:44:55', '2022-08-08 03:44:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@g.co', 1, '$2y$10$FmsP6F5pzF8oSyJWBwWjW.VcUrS3HrkUtZ/gTISgEdiPyfj3L3r1y', '7dkMkpNF8fHrg2uDQq0PTsBvD7aKwtGDVNZgAVMHCQnxOSUw7kPKZhzisljR', '2022-08-04 00:42:17', '2022-08-04 00:42:17'),
(2, 'User', 'user@gm.c', 0, '$2y$10$vfsvan2cy1y7fgM6o/vt7ujUmNKexX.7laR5tr6YZ7pcipfThvgBu', 'lxp1sCbgEADNBuwn7fWl0T9vnOFeGMen7W7cvuoOPVYKDe0aWtfAOLj9CBaR', '2022-08-22 21:10:13', '2022-08-22 21:10:13'),
(3, 'Kasir2', 'user1@gm.c', NULL, '$2y$10$2gYtjsxq.tRwIbj5eW7VMuiiSgmzdqVeC0yvYT1HP4Pg5YbCvryWO', 'x1G9i9wH5xfAf8O4nhsy39n3CMGGKrrMIbVyO0jebh9DNO3rX1Mw7M9y79kn', '2022-08-23 18:46:42', '2022-08-23 18:46:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classes_nama_class_unique` (`nama_class`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mapels_nama_mapel_unique` (`nama_mapel`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_nama_type_unique` (`nama_type`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
