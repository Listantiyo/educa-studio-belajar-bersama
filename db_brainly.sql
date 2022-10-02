-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2022 pada 12.33
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
(3, '2022_08_05_025420_user_details', 1),
(4, '2022_08_05_025509_tags', 1),
(5, '2022_08_05_025528_answer_comments', 1),
(6, '2022_08_05_025528_answers', 1),
(7, '2022_08_05_025540_questions', 1),
(8, '2022_08_05_025540_questions_comments', 1),
(9, '2022_08_05_025651_communities', 1),
(10, '2022_08_05_025737_types', 1),
(11, '2022_09_15_013209_create_question_tags_table', 1),
(12, '2022_09_18_134728_create_table_likes', 1),
(13, '2022_09_18_135131_create_table_dislikes', 1),
(14, '2022_09_19_044239_create_table_community_followers', 1),
(15, '2022_09_24_123707_groups', 1),
(16, '2022_09_24_124318_group_followers', 1),
(17, '2022_09_24_124521_group_questions', 1),
(18, '2022_09_26_020929_create_tbl_like_answer', 1),
(19, '2022_09_26_021007_create_tbl_dislike_answer', 1),
(20, '2022_09_26_070637_create_question__votes_table', 1),
(21, '2022_09_28_161106_create_table_group_tags', 1),
(22, '2022_09_28_222737_create_table_group_likes', 1),
(23, '2022_09_28_222757_create_table_group_dislikes', 1),
(24, '2022_09_28_222843_create_table_group_answer', 1),
(25, '2022_09_28_223309_create_table_group_answer_comments', 1),
(26, '2022_09_28_223455_create_table_group_likes_answer', 1),
(27, '2022_09_28_223511_create_table_group_dislikes_answer', 1),
(28, '2022_09_29_084825_create_table_contactus', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_answers`
--

CREATE TABLE `tbl_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_dil` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `id_question` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_answers`
--

INSERT INTO `tbl_answers` (`id`, `id_user_dil`, `id_status`, `id_question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 'Road', '2022-10-02 03:14:24', '2022-10-02 03:14:24'),
(4, 4, 1, 2, 'Javascript adalah bahasa pemrogramman tingkat tinggi', '2022-10-02 03:20:39', '2022-10-02 03:20:39'),
(5, 5, 1, 3, 'PHP biasa digunakan untuk bagian back end', '2022-10-02 03:24:11', '2022-10-02 03:24:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_answer_comments`
--

CREATE TABLE `tbl_answer_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_answer` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_answer_comments`
--

INSERT INTO `tbl_answer_comments` (`id`, `id_user`, `id_question`, `id_answer`, `comment`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 4, 'terima kasih', '2022-10-02 03:26:09', '2022-10-02 03:26:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_answer_dislikes`
--

CREATE TABLE `tbl_answer_dislikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_answer` int(11) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_answer_likes`
--

CREATE TABLE `tbl_answer_likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_answer` int(11) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_answer_likes`
--

INSERT INTO `tbl_answer_likes` (`id`, `id_answer`, `id_quest`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '2022-10-02 03:14:28', '2022-10-02 03:14:28'),
(2, 4, 2, 4, '2022-10-02 03:20:43', '2022-10-02 03:20:43'),
(3, 5, 3, 5, '2022-10-02 03:24:15', '2022-10-02 03:24:15'),
(4, 4, 2, 5, '2022-10-02 03:26:14', '2022-10-02 03:26:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_communities`
--

CREATE TABLE `tbl_communities` (
  `id` int(10) UNSIGNED NOT NULL,
  `community` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followers` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_communities`
--

INSERT INTO `tbl_communities` (`id`, `community`, `followers`, `image`, `path_img`, `created_at`, `updated_at`) VALUES
(1, 'Java', 0, 'java.png', 'photos/VCnAOuPF6Kl6MDdhMoZh5eH1HWJGapVYfKHgTQn9.png', '2022-10-02 02:49:21', '2022-10-02 02:49:21'),
(2, 'PHP', 0, 'php.png', 'photos/HkPBBsCnf8G6QWpUw1R5nROA5lyVCgeUa9OGOtwd.png', '2022-10-02 02:49:37', '2022-10-02 02:49:37'),
(3, 'Javascript', 0, 'js.png', 'photos/eRIhM2yyuXB1dIBMIKEt7uRGQhBv8wCjPVSaWsY4.png', '2022-10-02 02:49:54', '2022-10-02 02:49:54'),
(4, 'C++', 0, 'c++.png', 'photos/hNZtoL3wxhQF9gyhVr4U9VTDbElSv8mIDUwPu4tu.png', '2022-10-02 02:50:11', '2022-10-02 02:50:11'),
(5, 'C#', 0, 'C#.png', 'photos/hh911Kp3PD5pJdsMM1RgI3gsZohafsaWJs5wadHC.png', '2022-10-02 02:50:22', '2022-10-02 02:50:22'),
(6, 'Language', 0, 'english.jpg', 'photos/HJAeXLd2c4S2eZ5YgZFg2jeXN9GsVNtwMGJihSXf.jpeg', '2022-10-02 02:50:43', '2022-10-02 02:50:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_community_followers`
--

CREATE TABLE `tbl_community_followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_community` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_community_followers`
--

INSERT INTO `tbl_community_followers` (`id`, `id_user`, `id_community`, `created_at`, `updated_at`) VALUES
(1, 2, 6, '2022-10-02 03:09:31', '2022-10-02 03:09:31'),
(2, 3, 3, '2022-10-02 03:12:46', '2022-10-02 03:12:46'),
(3, 4, 2, '2022-10-02 03:21:08', '2022-10-02 03:21:08'),
(4, 5, 1, '2022-10-02 03:23:23', '2022-10-02 03:23:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `name_user`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jokp', 'joko@example.com', 'Untuk admin', 'Tolong tambahin grup C# dong', '2022-10-02 03:31:51', '2022-10-02 03:31:51'),
(2, 'Saputra', 'saputra@example.com', 'Untuk admin', 'tolong tambahin fitur blog min', '2022-10-02 03:33:24', '2022-10-02 03:33:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dislikes`
--

CREATE TABLE `tbl_dislikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_groups`
--

CREATE TABLE `tbl_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_img_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_groups`
--

INSERT INTO `tbl_groups` (`id`, `group`, `image`, `path_img`, `image_bg`, `path_img_bg`, `created_at`, `updated_at`) VALUES
(1, 'English group', 'english.jpg', 'photos/d1K2XMuhyChdEd9k78DZTP1Va0BnoGN1CCCIzKgb.jpeg', 'english bg.jpg', 'photos/4jq1cEcTXJJ2Xr4iMFg6KxHfWBFFqXWc8r8DhkKn.jpeg', '2022-10-02 02:51:18', '2022-10-02 02:51:18'),
(2, 'Java Indonesia', 'java.png', 'photos/0RkXFOIhS0SVCSZG8OIg7VVVenBLZREpuJR1XLFV.png', 'js bg.jpeg', 'photos/N2px9kKAkUQLE7ZMxmUZvUjozAA8QdrgCFG9tCKo.jpeg', '2022-10-02 02:51:36', '2022-10-02 02:51:36'),
(3, 'Javascript Developer', 'js.png', 'photos/4dLePstJtV7SompPupxrYQhna0WcMvoCkQuBs0TQ.png', 'js bg.jpeg', 'photos/cr8KfH5fpv8j28Ka1Ga4OorujCtMlqonqZCCe1tT.jpeg', '2022-10-02 02:52:13', '2022-10-02 02:52:13'),
(5, 'PHP.ID', 'php.png', 'photos/oyUjzFqhZOVLSV31t3dEWuaeKZbSQufPmjcuTSps.png', 'php bg.jpg', 'photos/ZG3a7C8fKTlKIptul3LSx1liyAZyuv7xSVjY8HaZ.jpeg', '2022-10-02 02:54:08', '2022-10-02 02:54:08'),
(6, 'C#', 'C#.png', 'photos/NwcGgTUlF4HBvx2LP5PRsikEt68IRibyrcU94JgC.png', 'js bg.jpeg', 'photos/HF2FjI7VTeU0CwFxsGm6qecttSrAHUXQ9pxOAuf2.jpeg', '2022-10-02 02:54:28', '2022-10-02 02:54:28'),
(8, 'C++', 'c++.png', 'photos/0lmYsxIG0Dcg9vHXqw9govXTqBzN8S5Lergw9pgG.png', 'js bg.jpeg', 'photos/x8msxoMB0I0DmRRvp07Hzqn6z7EQqQcAtw5LivWl.jpeg', '2022-10-02 03:04:34', '2022-10-02 03:04:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_answers`
--

CREATE TABLE `tbl_group_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_dil` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `id_question` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_answer_comments`
--

CREATE TABLE `tbl_group_answer_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_answer` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_answer_dislikes`
--

CREATE TABLE `tbl_group_answer_dislikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_answer` int(11) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_answer_likes`
--

CREATE TABLE `tbl_group_answer_likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_answer` int(11) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_dislikes`
--

CREATE TABLE `tbl_group_dislikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_followers`
--

CREATE TABLE `tbl_group_followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_group_followers`
--

INSERT INTO `tbl_group_followers` (`id`, `id_user`, `id_group`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-10-02 03:09:05', '2022-10-02 03:09:05'),
(2, 3, 3, '2022-10-02 03:13:00', '2022-10-02 03:13:00'),
(3, 4, 5, '2022-10-02 03:20:58', '2022-10-02 03:20:58'),
(4, 5, 2, '2022-10-02 03:23:15', '2022-10-02 03:23:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_likes`
--

CREATE TABLE `tbl_group_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_questions`
--

CREATE TABLE `tbl_group_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_dil` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_type` int(11) NOT NULL DEFAULT '1',
  `id_status` int(11) NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0',
  `dislike` int(11) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group_quest_tags`
--

CREATE TABLE `tbl_group_quest_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_likes`
--

CREATE TABLE `tbl_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_likes`
--

INSERT INTO `tbl_likes` (`id`, `id_quest`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2022-10-02 03:14:06', '2022-10-02 03:14:06'),
(2, 2, 4, '2022-10-02 03:17:01', '2022-10-02 03:17:01'),
(3, 3, 5, '2022-10-02 03:23:40', '2022-10-02 03:23:40'),
(4, 2, 5, '2022-10-02 03:26:17', '2022-10-02 03:26:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_dil` int(11) NOT NULL,
  `id_type` int(11) NOT NULL DEFAULT '1',
  `id_status` int(11) NOT NULL DEFAULT '1',
  `id_comunity` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0',
  `dislike` int(11) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_questions`
--

INSERT INTO `tbl_questions` (`id`, `id_user_dil`, `id_type`, `id_status`, `id_comunity`, `title`, `question`, `views`, `like`, `dislike`, `votes`, `image`, `path_img`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, 6, 'Apa bhs inggrisnya jalan?', 'tolong bantu kak', '1', 0, 0, 0, NULL, NULL, '2022-10-02 03:10:33', '2022-10-02 03:14:24'),
(2, 3, 2, 1, 3, 'Apa itu Javascript?', 'jelaskan apa itu javascript', '2', 0, 0, 0, NULL, NULL, '2022-10-02 03:13:51', '2022-10-02 03:17:08'),
(3, 4, 2, 1, 2, 'php bhs pemrogramman untuk apa?', 'bhs pemrogramman PHP digunakan untuk apa?', '2', 0, 0, 0, NULL, NULL, '2022-10-02 03:22:17', '2022-10-02 03:24:11'),
(4, 5, 1, 1, 1, 'Java biasanya untuk pemrogramman apa?', 'Java biasanya untuk pemrogramman apa?', '0', 0, 0, 0, NULL, NULL, '2022-10-02 03:25:09', '2022-10-02 03:25:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_question_comments`
--

CREATE TABLE `tbl_question_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_question_tags`
--

CREATE TABLE `tbl_question_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_question_tags`
--

INSERT INTO `tbl_question_tags` (`id`, `id_quest`, `id_tag`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2022-10-02 03:10:33', '2022-10-02 03:10:33'),
(2, 2, 1, '2022-10-02 03:13:51', '2022-10-02 03:13:51'),
(3, 2, 3, '2022-10-02 03:13:51', '2022-10-02 03:13:51'),
(4, 3, 1, '2022-10-02 03:22:17', '2022-10-02 03:22:17'),
(5, 4, 1, '2022-10-02 03:25:09', '2022-10-02 03:25:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_question_votes`
--

CREATE TABLE `tbl_question_votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_quest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_question_votes`
--

INSERT INTO `tbl_question_votes` (`id`, `id_quest`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2022-10-02 03:14:07', '2022-10-02 03:14:07'),
(2, 2, 5, '2022-10-02 03:26:21', '2022-10-02 03:26:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tags`
--

CREATE TABLE `tbl_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_tags`
--

INSERT INTO `tbl_tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Programming', '2022-10-02 02:48:10', '2022-10-02 02:48:10'),
(2, 'Sport', '2022-10-02 02:48:17', '2022-10-02 02:48:17'),
(3, 'Tech', '2022-10-02 02:48:27', '2022-10-02 02:48:27'),
(4, 'Language', '2022-10-02 02:48:36', '2022-10-02 02:48:36'),
(5, 'Life', '2022-10-02 02:48:47', '2022-10-02 02:48:47'),
(6, 'Healthy', '2022-10-02 02:48:58', '2022-10-02 02:48:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_types`
--

CREATE TABLE `tbl_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_showed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `password_showed`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '$2y$10$tOzJSQxEMisk3fq5sHm/DOHQRIEiAkTQ/tpViZvxUi6CNiW3vxBMS', 'admin123', '2', 'DT6PawpivOeN3qpqBD1IJOEeb9p30vprSWW5UEvGjfsnj3mYbNhMfkKFRQxu', '2022-10-02 02:47:41', '2022-10-02 02:47:41'),
(2, 'saputra', 'saputra@example.com', '$2y$10$vwdpEFmokvWJshqZxxskSO3g7VU36T5Qgb24hnjmNrK4fk9vkHQb.', 'saputra', '1', 'LHmONiLckAGhlvYpKp2sy418l8mGtBw2OqT8wvHbDcZGTGiGggIV8hiRMadg', '2022-10-02 03:01:48', '2022-10-02 03:01:48'),
(3, 'Arya', 'arya@example.com', '$2y$10$VRAK50VzyLOUAgrzmdn4CuHOcpMcqORJYzb4Ubt0YzOxqy2R5h2EC', 'arya123', '1', '5iZcW3mENVBNPsFG2PWmewEYOG90lXu0fx2aj8oSNXyrmsspfhZ6uKCpUwe7', '2022-10-02 03:11:51', '2022-10-02 03:11:51'),
(4, 'Budi', 'budi@example.com', '$2y$10$bybgQqB19Jx1/Usac/836unAWgdJFK31HbDFiR0RbRrOQIpUCav6K', 'budi123', '1', 'DKxbrLuVjpJ4JrEmYL4Gn1BLaSNZNSMOTaVdBtfEkd6Fb4yQDrqcCH22BDe7', '2022-10-02 03:14:59', '2022-10-02 03:14:59'),
(5, 'Joko', 'joko@example.com', '$2y$10$ualxE9jccKO4eD.O8RYL2.i30R4s.o.bQdLVYhSAhzAC8BDCNZuyO', 'joko123', '1', 'HOW6MnHWw19o3crBhiglB2vUfMZSTBioE2BSVq2YyIgyFrHmGOF3Hxn7OvAF', '2022-10-02 03:22:57', '2022-10-02 03:22:57');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `tbl_answers`
--
ALTER TABLE `tbl_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_answer_comments`
--
ALTER TABLE `tbl_answer_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_answer_dislikes`
--
ALTER TABLE `tbl_answer_dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_answer_likes`
--
ALTER TABLE `tbl_answer_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_communities`
--
ALTER TABLE `tbl_communities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_communities_community_unique` (`community`);

--
-- Indeks untuk tabel `tbl_community_followers`
--
ALTER TABLE `tbl_community_followers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dislikes`
--
ALTER TABLE `tbl_dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_answers`
--
ALTER TABLE `tbl_group_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_answer_comments`
--
ALTER TABLE `tbl_group_answer_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_answer_dislikes`
--
ALTER TABLE `tbl_group_answer_dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_answer_likes`
--
ALTER TABLE `tbl_group_answer_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_dislikes`
--
ALTER TABLE `tbl_group_dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_followers`
--
ALTER TABLE `tbl_group_followers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_likes`
--
ALTER TABLE `tbl_group_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_questions`
--
ALTER TABLE `tbl_group_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group_quest_tags`
--
ALTER TABLE `tbl_group_quest_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_likes`
--
ALTER TABLE `tbl_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_question_comments`
--
ALTER TABLE `tbl_question_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_question_tags`
--
ALTER TABLE `tbl_question_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_question_votes`
--
ALTER TABLE `tbl_question_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tags`
--
ALTER TABLE `tbl_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_tags_tag_unique` (`tag`);

--
-- Indeks untuk tabel `tbl_types`
--
ALTER TABLE `tbl_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_types_nama_type_unique` (`nama_type`);

--
-- Indeks untuk tabel `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_answers`
--
ALTER TABLE `tbl_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_answer_comments`
--
ALTER TABLE `tbl_answer_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_answer_dislikes`
--
ALTER TABLE `tbl_answer_dislikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_answer_likes`
--
ALTER TABLE `tbl_answer_likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_communities`
--
ALTER TABLE `tbl_communities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_community_followers`
--
ALTER TABLE `tbl_community_followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_dislikes`
--
ALTER TABLE `tbl_dislikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_groups`
--
ALTER TABLE `tbl_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_answers`
--
ALTER TABLE `tbl_group_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_answer_comments`
--
ALTER TABLE `tbl_group_answer_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_answer_dislikes`
--
ALTER TABLE `tbl_group_answer_dislikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_answer_likes`
--
ALTER TABLE `tbl_group_answer_likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_dislikes`
--
ALTER TABLE `tbl_group_dislikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_followers`
--
ALTER TABLE `tbl_group_followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_likes`
--
ALTER TABLE `tbl_group_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_questions`
--
ALTER TABLE `tbl_group_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_group_quest_tags`
--
ALTER TABLE `tbl_group_quest_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_likes`
--
ALTER TABLE `tbl_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_question_comments`
--
ALTER TABLE `tbl_question_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_question_tags`
--
ALTER TABLE `tbl_question_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_question_votes`
--
ALTER TABLE `tbl_question_votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_types`
--
ALTER TABLE `tbl_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
