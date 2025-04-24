-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2025 at 08:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `smallDescription` varchar(255) NOT NULL,
  `bigDescription` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `name`, `location`, `address`, `email`, `phone`, `website`, `smallDescription`, `bigDescription`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hajar & Mohamed Voyages', 'Marrakech', '123 Rue d el massira, 75001 Marrakech', 'hajaramezdaou@gmail.com', '+212 706 109034', 'https://google.com', 'Spécialiste des voyages spirituels depuis plus de 15 ans', 'Al-Safar Voyages est spécialisée dans l\'organisation de voyages spirituels depuis plus de 15 ans. Notre équipe expérimentée vous accompagne dans chaque étape de votre pèlerinage, de la préparation administrative à l\'accompagnement spirituel sur place. Nous proposons des hébergements à proximité des lieux saints et des guides francophones qualifiés.', '/placeholder.svg', NULL, '2025-04-24 11:28:45'),
(2, 'Barakah Tours', 'Marseille', '45 La Canebière, 13001 Marseille', 'info@barakahtours.com', '+33 4 91 23 45 67', 'www.barakah-tours.com', 'Voyages personnalisés avec accompagnement spirituel', 'Barakah Tours vous propose des voyages personnalisés avec un accompagnement spirituel de qualité. Notre agence familiale met l\'accent sur le confort et la proximité des lieux saints. Nous offrons des formules adaptées à tous les budgets et des facilités de paiement.', '/placeholder.svg', NULL, NULL),
(3, 'Al-Safar Voyages', 'Paris', '    123 Rue de Rivoli, 75001 Paris\r\n', 'contact@alsafar.com', '+33 1 23 45 67 89', 'www.alsafar-voyages.com', 'Al-Safar Voyages est spécialisée dans l\'organisation de voyages spirituels depuis plus de 15 ans.', 'Al-Safar Voyages est spécialisée dans l\'organisation de voyages spirituels depuis plus de 15 ans. Notre équipe expérimentée vous accompagne dans chaque étape de votre pèlerinage, de la préparation administrative à l\'accompagnement spirituel sur place. Nous proposons des hébergements à proximité des lieux saints et des guides francophones qualifiés.', NULL, NULL, NULL),
(4, 'Noor Travel', 'Lyon', '88 Rue de Marseille, 69007 Lyon', 'contact@noortravel.fr', '+33 4 78 12 34 56', 'www.noortravel.fr', 'Noor Travel vous accompagne dans l’organisation de vos voyages religieux avec professionnalisme et bienveillance', 'Noor Travel vous accompagne dans l’organisation de vos voyages religieux avec professionnalisme et bienveillance. Nous proposons des circuits adaptés à tous, avec des hébergements confortables et une assistance 24/7.', NULL, NULL, NULL),
(5, 'Iqra Voyages', 'Toulouse', '27 Avenue des Minimes, 31200 Toulouse', 'service@iqravoyages.com', '+33 5 61 23 45 67', 'www.iqravoyages.com', 'Depuis plus de 10 ans, Iqra Voyages organise des séjours Omra et Hajj avec des formules flexibles', 'Depuis plus de 10 ans, Iqra Voyages organise des séjours Omra et Hajj avec des formules flexibles, un encadrement spirituel complet, et une assistance dédiée à chaque étape du voyage.', NULL, NULL, NULL),
(6, 'Dar El Salam Travel', 'Nice', '5 Promenade des Anglais, 06000 Nice', 'contact@darelsalam.fr', '+33 4 93 12 34 56', 'www.darelsalam.fr', 'Dar El Salam Travel vous propose des séjours spirituels tout compris avec des guides expérimentés et un service client de qualité', 'Dar El Salam Travel vous propose des séjours spirituels tout compris avec des guides expérimentés et un service client de qualité. Nos offres allient confort, spiritualité et accompagnement personnalisé.', NULL, NULL, NULL),
(7, 'Safa Travel', 'Lille', '14 Place du Général de Gaulle, 59800 Lille', 'hello@safatravel.fr', '+33 3 20 11 22 33', 'www.safatravel.fr', 'Safa Travel est votre partenaire de confiance pour vos pèlerinages à La Mecque. ', 'Safa Travel est votre partenaire de confiance pour vos pèlerinages à La Mecque. Nos offres combinent accessibilité, qualité d’hébergement et accompagnement spirituel constant pour une expérience inoubliable.', NULL, NULL, NULL),
(9, 'mmm', 'Marrakech', '123 Rue d el massira, 75001 Marrakech', 'qsdfqsdf@qfs.qsd', '+212 706 109034', 'https://google.com', 'qsdfqsf', 'qsdfqsdfqsfqsdf', NULL, '2025-04-24 16:30:26', '2025-04-24 16:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_21_114100_create_agencies_table', 1),
(5, '2025_04_21_114139_create_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `departure` varchar(255) NOT NULL,
  `agency_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`features`)),
  `itinerary` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`itinerary`)),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `included` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`included`)),
  `excluded` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`excluded`)),
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `type`, `duration`, `price`, `departure`, `agency_id`, `description`, `features`, `itinerary`, `start_date`, `end_date`, `whatsapp_number`, `included`, `excluded`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Omra Ramadan 2026', 'Omra', '14 jours', 3500.00, 'Paris', 1, 'Profitez d\'une Omra exceptionnelle pendant le mois sacré de Ramadan. Cette offre premium comprend un vol direct Paris-Jeddah, un hébergement 5 étoiles à proximité immédiate des lieux saints, tous les transferts en bus climatisé, et un accompagnement spirituel par des guides francophones expérimentés. Les repas du Suhoor et de l\'Iftar sont inclus, ainsi qu\'une visite guidée des sites historiques de Médine.', '[\"Vol direct Paris-Jeddah\", \"Hébergement 5 étoiles\", \"Proximité immédiate des lieux saints\", \"Transferts en bus climatisé\", \"Guide spirituel francophone\", \"Repas Suhoor et Iftar inclus\", \"Visite des sites historiques\"]', '[\"Jour 1-2: Vol Paris-Jeddah et transfert à Médine\", \"Jour 3-6: Séjour à Médine avec visites guidées\", \"Jour 7: Transfert à La Mecque et préparation pour l\'Omra\", \"Jour 8-13: Séjour à La Mecque et rituels de l\'Omra\", \"Jour 14: Retour à Jeddah et vol pour Paris\"]', '2026-05-01', '2026-05-14', '+33123456789', '[\"Billet d\'avion aller-retour\", \"Visa d\'entrée Omra\", \"Hébergement en chambre double\", \"Transferts en bus climatisé\", \"Accompagnement spirituel\", \"Repas mentionnés dans l\'itinéraire\"]', '[\"Assurance voyage\", \"Dépenses personnelles\", \"Pourboires\", \"Sacrifice (Hady)\"]', '[\"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\", \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\", \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\"]', '2025-04-21 14:44:10', '2025-04-21 14:44:10'),
(2, 'Omra Standard', 'Omra', '10 jours', 2800.00, 'Marseille', 2, 'Une Omra accessible et confortable avec un excellent rapport qualité-prix. Cette offre comprend un vol avec escale Marseille-Jeddah, un hébergement 4 étoiles à proximité raisonnable des lieux saints, tous les transferts en bus climatisé, et un accompagnement spirituel par des guides francophones. L\'offre inclut également la visite des principaux sites historiques de Médine.', '[\"Vol avec escale depuis Marseille\", \"Hébergement 4 étoiles\", \"Distance raisonnable des lieux saints\", \"Transferts en bus climatisé\", \"Guide spirituel francophone\", \"Visite des principaux sites historiques\"]', '[\"Jour 1-2: Vol Marseille-Jeddah et transfert à Médine\", \"Jour 3-4: Séjour à Médine avec visites guidées\", \"Jour 5: Transfert à La Mecque et préparation pour l\'Omra\", \"Jour 6-9: Séjour à La Mecque et rituels de l\'Omra\", \"Jour 10: Retour à Jeddah et vol pour Marseille\"]', '2026-04-10', '2026-04-19', '+33423456789', '[\"Billet d\'avion aller-retour\", \"Visa d\'entrée Omra\", \"Hébergement en chambre double\", \"Transferts en bus climatisé\", \"Accompagnement spirituel\"]', '[\"Repas (demi-pension en option)\", \"Assurance voyage\", \"Dépenses personnelles\", \"Pourboires\", \"Sacrifice (Hady)\"]', '[\"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\", \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\", \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\"]', '2025-04-21 14:44:10', '2025-04-21 14:44:10'),
(3, 'Omra Al-Noor', 'Omra', '10 jours', 2800.00, 'Marrakech', 4, 'Une Omra accessible et confortable avec un excellent rapport qualité-prix. Cette offre comprend un vol avec escale Marseille-Jeddah, un hébergement 4 étoiles à proximité raisonnable des lieux saints, tous les transferts en bus climatisé, et un accompagnement spirituel par des guides francophones. L\'offre inclut également la visite des principaux sites historiques de Médine.', '[\"Vol avec escale depuis Marseille\",\r\n\"Hébergement 4 étoiles\",\r\n\"Distance raisonnable des lieux saints\",\r\n\"Transferts en bus climatisé\",\r\n\"Guide spirituel francophone\",\r\n\"Visite des principaux sites historiques\"]', '[\r\n      \"Jour 1-2: Vol Marseille-Jeddah et transfert à Médine\",\r\n      \"Jour 3-4: Séjour à Médine avec visites guidées\",\r\n      \"Jour 5: Transfert à La Mecque et préparation pour l\'Omra\",\r\n      \"Jour 6-9: Séjour à La Mecque et rituels de l\'Omra\",\r\n      \"Jour 10: Retour à Jeddah et vol pour Marseille\"\r\n    ]', '2025-04-14', '2025-04-24', '+33423456789', '[\r\n      \"Billet d\'avion aller-retour\",\r\n      \"Visa d\'entrée Omra\",\r\n      \"Hébergement en chambre double\",\r\n      \"Transferts en bus climatisé\",\r\n      \"Accompagnement spirituel\"\r\n    ]', '[\"Repas (demi-pension en option)\",\r\n      \"Assurance voyage\",\r\n      \"Dépenses personnelles\",\r\n      \"Pourboires\",\r\n      \"Sacrifice (Hady)\"\r\n    ]', '[\"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\",\r\n      \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\",\r\n      \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\"\r\n    ]', '2025-04-16 11:13:30', '2025-04-19 11:13:30'),
(4, 'Hajj Standard', 'Hajj\r\n', '10 jours', 2800.00, 'Marseille', 7, 'Une Omra accessible et confortable avec un excellent rapport qualité-prix. Cette offre comprend un vol avec escale Marseille-Jeddah, un hébergement 4 étoiles à proximité raisonnable des lieux saints, tous les transferts en bus climatisé, et un accompagnement spirituel par des guides francophones. L\'offre inclut également la visite des principaux sites historiques de Médine.', '[\"Vol avec escale depuis Marseille\", \"Hébergement 4 étoiles\", \"Distance raisonnable des lieux saints\", \"Transferts en bus climatisé\", \"Guide spirituel francophone\", \"Visite des principaux sites historiques\"]', '[\"Jour 1-2: Vol Marseille-Jeddah et transfert à Médine\", \"Jour 3-4: Séjour à Médine avec visites guidées\", \"Jour 5: Transfert à La Mecque et préparation pour l\'Omra\", \"Jour 6-9: Séjour à La Mecque et rituels de l\'Omra\", \"Jour 10: Retour à Jeddah et vol pour Marseille\"]', '2026-04-10', '2026-04-19', '+33423456789', '[\"Billet d\'avion aller-retour\", \"Visa d\'entrée Omra\", \"Hébergement en chambre double\", \"Transferts en bus climatisé\", \"Accompagnement spirituel\"]', '[\"Repas (demi-pension en option)\", \"Assurance voyage\", \"Dépenses personnelles\", \"Pourboires\", \"Sacrifice (Hady)\"]', '[\"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\", \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\", \"https://images.unsplash.com/photo-1466442929976-97f336a657be?auto=format&fit=crop&w=800&h=600\"]', '2025-04-16 11:13:30', '2025-04-19 11:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4JorZBwNZsHhaSmfYd18rcNQzzY1Q5V0loCBFJqI', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSE9XZVpraEJ3aHBTUVhuSmdtcktOdXl3VjVxZkY3STJpZXZ2MnZKNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wcm9kdWN0cy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1745516941),
('pOUhpG0NWJLmKcGKEfXjRxgRpq7CABgU6bI5hhsF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlo0dmlaWDg4dURmZWw1a3o3THNoeGhEOER0REdzNHA4QklNQlBiciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745253858),
('QBsX8m20vfqYo8nGIxCQgzPCm4UDIQCE6kG0mKV2', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQTVYSjBVaWZxVGd2TEhKd0RNRm1EazByV0trbXpTTnFleHhHRHVjdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbiI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1745432080),
('WFMbvRUpEjFrJ7Gj9cKHrT4FIREIoD91K0FYm8gd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVhEd3ZjcVg5TUFGaWtZa0JBUzlFZFh5UnhuanFqZVdxSWlvRTBGaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745236166);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-04-21 10:46:34', '$2y$12$u1cisSGbb3ktffZogq2iJe90TX.0ymnWmulNQyVZnZJ5cXCvN5DBq', 'uYHioGYANI', '2025-04-21 10:46:34', '2025-04-21 10:46:34'),
(2, 'mmm', 'mmm@mmm.mm', NULL, '$2y$12$hsfVni1QlDKpBYmmrwSNK.6siH1BI8psYKqsA6j3ZsIVyyJNjatk.', 'EaXlyefhjymQi8Ldb9oqFIoPz6PXdp1qaj6xtfWTl68gNOiGlqcC8Tqspp7b', '2025-04-23 15:38:00', '2025-04-23 15:38:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agencies_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_agency_id_foreign` (`agency_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_agency_id_foreign` FOREIGN KEY (`agency_id`) REFERENCES `agencies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
