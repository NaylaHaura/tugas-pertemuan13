-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_lessential
CREATE DATABASE IF NOT EXISTS `db_lessential` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_lessential`;

-- Dumping structure for table db_lessential.artikels
CREATE TABLE IF NOT EXISTS `artikels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_asli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.artikels: ~3 rows (approximately)
INSERT INTO `artikels` (`id`, `judul`, `slug`, `isi`, `gambar`, `link_asli`, `penulis`, `created_at`, `updated_at`) VALUES
	(1, 'Profil PT L Essential, Produsen Skincare dan Kosmetik Berstandar BPOM dan Halal', 'profil-pt-l-essential-produsen-skincare-dan-kosmetik-berstandar-bpom-dan-halal', 'PT L Essential adalah perusahaan yang bergerak di bidang produksi kosmetik. PT L Essential adalah produsen skincare dan kosmetik yang sudah menjalankan kegiatan usahanya sejak tahun 2004 dan terus berkembang sampai sekarang.', 'artikel1.jpg', 'https://www.liputan6.com/hot/read/5178336/profil-pt-l-essential-produsen-skincare-dan-kosmetik-berstandar-bpom-dan-halal', 'Laudia Tysara', '12 January 2023', NULL),
	(2, '3 Produk Baru PT L’Essential Jawab Persoalan Kulit Perempuan Indonesia', '3-produk-baru-pt-lessential-jawab-persoalan-kulit-perempuan-indonesia', 'PT L\'Essential memastikan semua bahan yang digunakan telah tersertifikasi BPOM...', 'artikel2.png', 'https://www.marketeers.com/3-produk-baru-pt-lessential-jawab-persoalan-kulit-perempuan-indonesia/', 'Muhammad Perkasa Al Hafiz', '14 September 2022', NULL),
	(4, 'Total Pendapatan Bisnis Skincare Meningkat 48%, Yuk Jadi Owner!', 'total-pendapatan-bisnis-skincare-meningkat-48-yuk-jadi-owner', 'Industri kecantikan Indonesia tengah mengalami transformasi signifikan dengan maraknya tren skincare. Fenomena ini muncul seiring dengan meningkatnya minat masyarakat terhadap produk perawatan kulit lokal. Selain itu, kesadaran akan pentingnya menggunakan produk yang aman serta bersertifikasi BPOM dan halal juga tumbuh beriringan. ', 'artikel4.jpg', 'https://l-essential.com/uncategorized/total-pendapatan-bisnis-skincare-meningkat-48-yuk-jadi-owner/', 'Admin L\'Essential', '1 February 2025', NULL);

-- Dumping structure for table db_lessential.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.cache: ~0 rows (approximately)

-- Dumping structure for table db_lessential.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.cache_locks: ~0 rows (approximately)

-- Dumping structure for table db_lessential.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.contacts: ~0 rows (approximately)

-- Dumping structure for table db_lessential.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_lessential.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.jobs: ~0 rows (approximately)

-- Dumping structure for table db_lessential.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.job_batches: ~0 rows (approximately)

-- Dumping structure for table db_lessential.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_04_28_094601_create_services_table', 1),
	(5, '2026_04_28_102900_create_products_table', 1),
	(6, '2026_05_05_055353_create_artikels_table', 1),
	(7, '2026_05_05_091132_create_contacts_table', 2),
	(8, '2026_06_17_000001_create_company_profiles_table', 3),
	(9, '2026_06_17_000002_create_galeris_table', 3);

-- Dumping structure for table db_lessential.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_lessential.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_eksternal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.products: ~6 rows (approximately)
INSERT INTO `products` (`id`, `created_at`, `updated_at`, `nama_produk`, `kategori`, `deskripsi`, `gambar`, `link_eksternal`) VALUES
	(2, NULL, NULL, 'Theraskin', 'House Brands', 'Fokus pada solusi kulit berjerawat, kontrol minyak, dan pencerahan kulit (glowing).', 'theraskin.jpg', NULL),
	(4, NULL, '2026-06-17 23:08:10', 'Cortafluci', 'House Brands', 'Produk farmasi dengan kandungan aktif khusus untuk penggunaan profesional.', 'cortafluci.png', NULL),
	(5, NULL, NULL, 'Dermamome', 'Produk Ethical', 'Kategori produk farmasi/kosmetik untuk kebutuhan klinik.', 'dermamome.jpg', NULL),
	(6, NULL, NULL, 'Esclob', 'Produk Ethical', 'Produk dengan kandungan aktif tertentu di bawah pengawasan profesional.', 'esclob.png', NULL),
	(7, NULL, NULL, 'Melaqiderm', 'Produk Ethical', 'Solusi perawatan kulit untuk penggunaan khusus di klinik kecantikan.', 'mela.jpg', 'https://l-essential.com/melaqiderm/'),
	(11, '2026-06-17 23:07:50', '2026-06-17 23:07:50', 'Youthera', 'House Brands', 'Produk perawatan kulit untuk menjaga kesehatan dan keremajaan kulit.', '1781762870_youthera.jpg', NULL);

-- Dumping structure for table db_lessential.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_layanan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.services: ~4 rows (approximately)
INSERT INTO `services` (`id`, `created_at`, `updated_at`, `nama_layanan`, `deskripsi`) VALUES
	(1, NULL, NULL, 'Full Contract Manufacturing (ODM)', 'Layanan one-stop service mencakup konsultasi, formulasi produk oleh tim R&D, penyediaan bahan baku, pengemasan, hingga produk siap jual.'),
	(2, NULL, NULL, 'Semi Contract Manufacturing', 'Meliputi formulasi dan produksi, namun klien menyediakan kemasan sendiri.'),
	(3, NULL, NULL, 'Pure Contract Manufacturing', 'Hanya melayani proses produksi dan pengisian (filling) di mana formula dan bahan baku disediakan oleh klien.'),
	(4, NULL, NULL, 'Layanan Tambahan', 'Pengemasan (packing) dan pengisian produk (filling) saja.');

-- Dumping structure for table db_lessential.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.sessions: ~13 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('0EcglNnqNPGs4m7q7dzt6YWCicLX2rB9qDA39mR4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2lhbFp4TEtPNTd4anpxVFYxeWNVM1g5aEpRVjJKbXpKVzJYMVB5SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781761680),
	('8KX5F4D8m8ShRTRumUJCsYPfEGCvqgToMSUPZuoz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWNtY3dzUnhzS1RtbHBqQjhUQTRjcFk1eHlLbDI3SVR6aHBsN2llaCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1781758036),
	('b6LhpDDU9MNxv7Vtba4rtS8jIb7sFraoLw4rcISx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXNvcHNkTzYxaVR3NUtiVjJ3TUZkYU1DM1doakFIUDBZVVVybERhVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781762808),
	('bGd4BiSoo5jdhbfEk4mm9KHiT19g6sJ33HZRG0ww', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakZ2Mk5rSWhnUVJ0M0pDbk9BMXFxdkJUZFg2SW9PbzZ4S0poR3JWTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781762361),
	('CctLumX6tpRBZcVjknzQDD5d4yNYnUSI4UodrJyK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGhEODNBSW9pM1RHcEZra290NkJNNGtvMTJOdXVicFhIOUF6VGh4dyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781760534),
	('cuPHiTqJn7YbIiLdTAgFEkXszoY1qzyc0gNfrljh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnhsVG9Za0FBNlhhTlBVVEJGR25VQ3M2M21IMnhTRFBBVVZFY1pWRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781759947),
	('h3FvZblJXelKwCk7pg4UeGuYSIB5sjRE9y9ff4ha', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTU5WNWkzenVSTWx6aURvYVFsWUJtWTJOM0lWNkROODFBVlRCUDk4WCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781761421),
	('lpSJH3VSRBCZvwS9G34lpqeiBc0WfuUGSH5ED5Oh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVk9LdVlkTHh4U1RUYnIwdUJTY25GbmZOeFRnSnc4aHdWNHZoRUpwdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781762969),
	('p13UNoQC4nXfPBUSzRI8Agqcjy8SQTXSrDgXYQte', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWlXS3N3RGdFdENRODNtYU50Wnh1RXNuU3FPVjN5elBIUHRtVkxucyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781761547),
	('Q6HTrKMnYR03ELRyriC7Uexf6sVgnANTlIxRDiVk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWNJMFpjTVVJTXk1amtPOGtZbk5NV3dTdVdjYUV0VkJ3WGl4Vk0xVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781762690),
	('qaRxXpCJtLRLGKkMIoZyv3AVdw6EOlJakaTO6s0j', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzBCOU00VVZ5TzFaUlc4ZnZOQ1JiUUd6dGNtak1XV1F1Q0VlWFlrWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781762113),
	('RdfLgF5X3Ounwfz773FOW7LbKLQbq9Mb800tv2nv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.124.2 Chrome/148.0.7778.97 Electron/42.2.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFRTWnJqMGd2OUhFMG1EUlVpUjJxRXNDRzdnN0h2bkI4UHZTbHhLMSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1781757872),
	('uFTDrnxrOrEMoDg3hcPxxhFCXbP9Qtu2L215Jqd3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOG5MNWZXZk5ldjFkNU1PbG9UemJYMFplcHpVTzJQQTBtRWhRZWJTdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1781761958);

-- Dumping structure for table db_lessential.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_lessential.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'hauranayla27@gmail.com', '2026-05-04 23:27:36', '$2y$12$6U93gzzf5dG4IlDpxs.fDefd7vJEo5LkxTIopsqCyvP/5ScfGlXuG', 'ztv88XcrB9', '2026-05-04 23:27:37', '2026-06-16 23:59:50'),
	(2, 'Admin L\'Essential', 'admin@lessential.co.id', NULL, '$2y$12$csuyvKQHzZSkaaTFiH4IZ.dMtwaQ4VYwYudvUc.XjeyDwjEhZlgbS', NULL, '2026-06-17 21:49:27', '2026-06-17 21:49:27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
