-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 04:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_17_082500_create_students_table', 1),
(6, '2022_03_09_102240_create_produks_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `kategori`, `harga`, `stok`, `image`, `created_at`, `updated_at`) VALUES
(4, 'tas wanita', 'tas', 1000000, 10, '20220317131916.png', '2022-03-17 05:43:19', '2022-03-17 06:19:16'),
(8, 'tas 4', 'tas', 10, 10, 'tas4.png', '2022-03-17 06:01:30', '2022-03-17 06:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `kelas`, `created_at`, `updated_at`) VALUES
(2, 'Dito', '1', '2022-03-10 06:23:11', '2022-03-10 06:23:11'),
(3, 'Hanya', '2', '2022-03-10 06:23:25', '2022-03-10 06:23:25'),
(5, 'Tino', '3', '2022-03-10 06:32:45', '2022-03-10 06:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shawn Ratke', 'vohara@example.org', '2022-03-10 05:31:03', '$2y$10$I2/P80hvRa/u.D3pLBqPv.wYeWHYFWsBRI7LEcPkEEc3768NH7myC', 'X74HU0HSJgdVdG8VQwAaig5DIeyJLbsO90XknzEKB1w2wzcsTYpDgQ62m3BY', '2022-03-10 05:31:04', '2022-03-10 05:31:04'),
(2, 'Jett Hirthe', 'kacey47@example.com', '2022-03-10 05:31:03', '$2y$10$Z4y.DRn1v7erBl0x7790Xe48RGl4L6tFtucgGwnQ1odlJr/2SEWuC', 'anOISgknlk', '2022-03-10 05:31:05', '2022-03-10 05:31:05'),
(3, 'Alexandria Barton', 'rgraham@example.org', '2022-03-10 05:31:03', '$2y$10$8tzwZPXnm51qG.WFjtThX.X8t56VY/FGQ/TuiR7uvdME/YiVaU6Ae', 'QHU36ugfJJ', '2022-03-10 05:31:05', '2022-03-10 05:31:05'),
(4, 'Lexie Nolan', 'pouros.hildegard@example.com', '2022-03-10 05:31:03', '$2y$10$R1Ak8INeyv7acldELrToWOCr8Z3nSDgBJvVy9NMN4A1jbgBLNMhWi', 'P6V5GokS1T', '2022-03-10 05:31:05', '2022-03-10 05:31:05'),
(5, 'Marcella Schulist PhD', 'barrows.freida@example.net', '2022-03-10 05:31:04', '$2y$10$TQzQs4ok4iTkxHaQOeWRmeHRQAiA47ktFv3R0gc5VHkMcek/ufNbO', 'FvVLS5Qx5L', '2022-03-10 05:31:05', '2022-03-10 05:31:05'),
(6, 'Trudie Jacobs', 'hyatt.brice@example.org', '2022-03-10 05:31:04', '$2y$10$EsNfMHrr44o9/YL/Qd5scuwtsXHSd5qaVRKf/MgV5okOX97TqLQ9K', 'b6HMuwFWW4', '2022-03-10 05:31:05', '2022-03-10 05:31:05'),
(7, 'Ron Watsica', 'fschaefer@example.com', '2022-03-10 05:31:04', '$2y$10$r7wb3O5bY6682f.tX4Cdk.6Repm3c2ZrBrYXjGXtHUXdXBxhytLzK', 'YIJQy0iEtl', '2022-03-10 05:31:05', '2022-03-10 05:31:05'),
(8, 'Alvena Waelchi', 'dejon33@example.com', '2022-03-10 05:31:04', '$2y$10$1K0LiO2ttoUoD7ARphV76et87ABh8odTf9X.sV3Q/0EOiwPfpPn1i', 'QIiLXdVrEC', '2022-03-10 05:31:06', '2022-03-10 05:31:06'),
(9, 'Brenden Gottlieb', 'langworth.tiffany@example.com', '2022-03-10 05:31:04', '$2y$10$zKnjiOXtFAnCwC81bnYnf.nxCupZYqKPiG3.D9GANFT8lNALUr7FK', 'UDpR8NOYrN', '2022-03-10 05:31:06', '2022-03-10 05:31:06'),
(10, 'Thalia Schultz', 'leffler.adaline@example.net', '2022-03-10 05:31:04', '$2y$10$f4hbLAIT4pis7ngj439Ace9nIJHg/svFSKnepkqMdnJderh.Nf9PW', 'jrq7SkVaxH', '2022-03-10 05:31:06', '2022-03-10 05:31:06');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
