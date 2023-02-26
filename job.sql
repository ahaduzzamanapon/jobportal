-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 11:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ahaduzzamanapon@gmail.com', '$2y$10$OnLkyoLktVduAOqHFJu12.LfSPZ1lKsHNWPumChPhfcFSR7V2Z03K', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobname` varchar(191) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `employid` int(11) DEFAULT NULL,
  `cv` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `jobname`, `username`, `employid`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'job titel', 'apon', 2, '1675147356.pdf', '2023-01-31 00:42:37', '2023-01-31 00:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `catmodels`
--

CREATE TABLE `catmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catname` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catmodels`
--

INSERT INTO `catmodels` (`id`, `catname`, `created_at`, `updated_at`) VALUES
(1, 'catagory 2', '2023-01-25 09:11:41', '2023-01-25 09:12:06'),
(2, 'catagory 1', '2023-01-25 09:12:20', '2023-01-25 09:12:20'),
(3, 'cat 3', '2023-01-31 00:32:04', '2023-01-31 00:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `employs`
--

CREATE TABLE `employs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyname` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `aboutcompany` varchar(191) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `completeaddress` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `stutus` varchar(191) DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employs`
--

INSERT INTO `employs` (`id`, `companyname`, `image`, `email`, `password`, `phone`, `website`, `aboutcompany`, `city`, `completeaddress`, `facebook`, `linkedin`, `stutus`, `progress`, `created_at`, `updated_at`) VALUES
(2, 'company name', '1675146441.jpg', 'apon@gmail.com', '$2y$10$z5pKkkQmenIZhQPshC8B2e8cEXY4pMi.vA86VzUJx60PHNwU1Z8kS', '017378128767623', 'aponnn', 'about company', 2, 'address', 'fb', 'ln', NULL, 100, '2023-01-31 00:25:00', '2023-01-31 00:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobmodels`
--

CREATE TABLE `jobmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobtitle` varchar(191) NOT NULL,
  `jobdescription` text NOT NULL,
  `jobcompany` text NOT NULL,
  `jobstutus` text NOT NULL,
  `jobeducation` text NOT NULL,
  `jobresponsibilities` text NOT NULL,
  `jobemail` varchar(191) NOT NULL,
  `jobcategories` varchar(191) NOT NULL,
  `offeredsalary` varchar(191) NOT NULL,
  `jobexperience` text NOT NULL,
  `jobgender` varchar(191) NOT NULL,
  `deadline` date NOT NULL,
  `jobcity` varchar(191) NOT NULL,
  `jobaddress` varchar(191) NOT NULL,
  `employid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobmodels`
--

INSERT INTO `jobmodels` (`id`, `jobtitle`, `jobdescription`, `jobcompany`, `jobstutus`, `jobeducation`, `jobresponsibilities`, `jobemail`, `jobcategories`, `offeredsalary`, `jobexperience`, `jobgender`, `deadline`, `jobcity`, `jobaddress`, `employid`, `created_at`, `updated_at`) VALUES
(1, 'job titel', 'job description', 'company name', '1', 'jcguyg', 'responsibilitis', 'apon@gmail.com', '1', '2500', 'gwfkjb', 'both', '2023-02-02', '2', 'jchg', 2, '2023-01-31 00:28:58', '2023-01-31 00:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `locationmodels`
--

CREATE TABLE `locationmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locationmodels`
--

INSERT INTO `locationmodels` (`id`, `location`, `created_at`, `updated_at`) VALUES
(2, 'location 1', '2023-01-25 09:13:29', '2023-01-25 09:13:29'),
(3, 'location2', '2023-01-25 09:13:46', '2023-01-25 09:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_11_26_181429_create_catmodels_table', 1),
(5, '2022_11_28_100403_create_locationmodels_table', 1),
(6, '2022_11_28_170612_create_jobmodels_table', 1),
(7, '2022_12_07_174253_create_settings_table', 1),
(8, '2022_12_20_132319_create_users_table', 1),
(9, '2022_12_25_132816_create_employs_table', 1),
(10, '2022_12_26_224848_create_applications_table', 1),
(11, '2022_12_27_111732_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(191) NOT NULL,
  `titelname` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `titelname`, `created_at`, `updated_at`) VALUES
(1, 'Workhub', 'titel name', NULL, '2023-01-31 00:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `currentsalary` varchar(191) DEFAULT NULL,
  `expectedsalary` varchar(191) DEFAULT NULL,
  `age` varchar(191) DEFAULT NULL,
  `educationlevels` varchar(191) DEFAULT NULL,
  `languages` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `completeaddress` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `progress` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `phone`, `currentsalary`, `expectedsalary`, `age`, `educationlevels`, `languages`, `description`, `completeaddress`, `facebook`, `linkedin`, `password`, `progress`, `created_at`, `updated_at`) VALUES
(2, 'apon', 'apon@gmail.com', NULL, '017378128767623', '200000', '3000000', '22', 'diploma', 'bangla', 'dikjkwhwiugcubwc', 'wfjjbwejb', 'wefjbjkbwf', 'ewfkjhiuwf', '$2y$10$qGczNHkh9sKxamHyqFYsHuTOWUVsfc7bMdNvodSlIHuHo0SYwNLyK', 100, '2023-01-31 00:38:06', '2023-01-31 00:40:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catmodels`
--
ALTER TABLE `catmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employs`
--
ALTER TABLE `employs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobmodels`
--
ALTER TABLE `jobmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locationmodels`
--
ALTER TABLE `locationmodels`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catmodels`
--
ALTER TABLE `catmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employs`
--
ALTER TABLE `employs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobmodels`
--
ALTER TABLE `jobmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locationmodels`
--
ALTER TABLE `locationmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
