-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2023 at 10:06 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `badan_usaha`
--

CREATE TABLE `badan_usaha` (
  `kdpks` int NOT NULL,
  `nib` int DEFAULT NULL,
  `nmbu` varchar(255) DEFAULT NULL,
  `nmdati` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nmkec` varchar(255) DEFAULT NULL,
  `nmpic` varchar(255) DEFAULT NULL,
  `hppic` varchar(255) DEFAULT NULL,
  `jmlp` int DEFAULT NULL,
  `jmlp_tl` int DEFAULT NULL,
  `iuran` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `users` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_bubaru`
--

CREATE TABLE `pemeriksaan_bubaru` (
  `nib` int NOT NULL,
  `nmbu` varchar(255) DEFAULT NULL,
  `nmdati` varchar(255) DEFAULT NULL,
  `nmkec` varchar(255) DEFAULT NULL,
  `nmpic` varchar(255) DEFAULT NULL,
  `hppic` varchar(255) DEFAULT NULL,
  `jmlp` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_buexs`
--

CREATE TABLE `pemeriksaan_buexs` (
  `kdpks` int NOT NULL,
  `nmbu` varchar(255) DEFAULT NULL,
  `nmdati` varchar(255) DEFAULT NULL,
  `nmkec` varchar(255) DEFAULT NULL,
  `nmpic` varchar(255) DEFAULT NULL,
  `hppic` varchar(255) DEFAULT NULL,
  `jmlp` int DEFAULT NULL,
  `jmlp_tl` int DEFAULT NULL,
  `iuran` int DEFAULT NULL,
  `iuran_tl` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_bu`
--

CREATE TABLE `profile_bu` (
  `kdpks` int NOT NULL,
  `nib` int DEFAULT NULL,
  `nmbu` varchar(255) DEFAULT NULL,
  `jmlp` int DEFAULT NULL,
  `jmlp_tl` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telemarketing_bubaru`
--

CREATE TABLE `telemarketing_bubaru` (
  `nib` int NOT NULL,
  `nmbu` varchar(255) DEFAULT NULL,
  `nmdati` varchar(255) DEFAULT NULL,
  `nmkec` varchar(255) DEFAULT NULL,
  `nmpic` varchar(255) DEFAULT NULL,
  `hppic` varchar(255) DEFAULT NULL,
  `jmlp` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telemarketing_buexs`
--

CREATE TABLE `telemarketing_buexs` (
  `kdpks` int NOT NULL,
  `nmbu` varchar(255) DEFAULT NULL,
  `nmdati` varchar(255) DEFAULT NULL,
  `nmkec` varchar(255) DEFAULT NULL,
  `nmpic` varchar(255) DEFAULT NULL,
  `hppic` varchar(255) DEFAULT NULL,
  `jmlp` int DEFAULT NULL,
  `jmlp_tl` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `npp` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `npp`, `username`, `password`, `nama`, `jabatan`, `remember_token`, `created_at`, `created_by`, `updated_at`, `deleted_at`) VALUES
(1, '90001234567', 'asep', '$2a$12$Iah1Y2TOV9AunhgLd5KA6OcnyKNN6EiNO3.LaDiNEbEKKjQnKLvzm', 'Asep Sunandar', 'Staff Telemarketing', NULL, '2023-06-16 02:04:57', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badan_usaha`
--
ALTER TABLE `badan_usaha`
  ADD PRIMARY KEY (`kdpks`);

--
-- Indexes for table `pemeriksaan_bubaru`
--
ALTER TABLE `pemeriksaan_bubaru`
  ADD PRIMARY KEY (`nib`);

--
-- Indexes for table `pemeriksaan_buexs`
--
ALTER TABLE `pemeriksaan_buexs`
  ADD PRIMARY KEY (`kdpks`);

--
-- Indexes for table `profile_bu`
--
ALTER TABLE `profile_bu`
  ADD PRIMARY KEY (`kdpks`);

--
-- Indexes for table `telemarketing_bubaru`
--
ALTER TABLE `telemarketing_bubaru`
  ADD PRIMARY KEY (`nib`);

--
-- Indexes for table `telemarketing_buexs`
--
ALTER TABLE `telemarketing_buexs`
  ADD PRIMARY KEY (`kdpks`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemeriksaan_bubaru`
--
ALTER TABLE `pemeriksaan_bubaru`
  ADD CONSTRAINT `pemeriksaan_bubaru_ibfk_1` FOREIGN KEY (`nib`) REFERENCES `telemarketing_bubaru` (`nib`);

--
-- Constraints for table `pemeriksaan_buexs`
--
ALTER TABLE `pemeriksaan_buexs`
  ADD CONSTRAINT `pemeriksaan_buexs_ibfk_1` FOREIGN KEY (`kdpks`) REFERENCES `badan_usaha` (`kdpks`);

--
-- Constraints for table `profile_bu`
--
ALTER TABLE `profile_bu`
  ADD CONSTRAINT `profile_bu_ibfk_1` FOREIGN KEY (`kdpks`) REFERENCES `badan_usaha` (`kdpks`);

--
-- Constraints for table `telemarketing_buexs`
--
ALTER TABLE `telemarketing_buexs`
  ADD CONSTRAINT `telemarketing_buexs_ibfk_1` FOREIGN KEY (`kdpks`) REFERENCES `badan_usaha` (`kdpks`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
