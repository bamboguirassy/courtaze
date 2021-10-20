-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 20 oct. 2021 à 08:44
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bambogroup_courtaze`
--

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

DROP TABLE IF EXISTS `agences`;
CREATE TABLE IF NOT EXISTS `agences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agences_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `slogan`, `domain`, `color`, `description`, `adresse`, `enabled`, `user_id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Toujours plus près de vous !', 'courtaze-immo', '#ee00c1', 'dfyguhij', 'fdj', 0, 3, 'courtaze-immo.png', '2021-10-17 14:56:05', '2021-10-17 14:56:05');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_biens`
--

DROP TABLE IF EXISTS `categorie_biens`;
CREATE TABLE IF NOT EXISTS `categorie_biens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorie_biens_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie_biens`
--

INSERT INTO `categorie_biens` (`id`, `nom`, `description`, `icon`, `created_at`, `updated_at`, `code`) VALUES
(1, 'Studio', 'Studio', 'imind-studio-lightbox', '2021-10-17 18:19:13', '2021-10-17 18:19:13', 'STUDIO'),
(2, 'Appartement', 'Appartement', 'icon54-v2-office-building', '2021-10-17 18:19:56', '2021-10-17 18:19:56', 'APPART'),
(3, 'Chambre', 'Chambre', 'icon54-v1-bedroom', '2021-10-17 18:20:20', '2021-10-17 18:20:20', 'CHAMBRE'),
(4, 'Immeuble', 'Immeuble', 'fa-building-o fa', '2021-10-17 18:21:12', '2021-10-17 18:21:12', 'IMMO'),
(5, 'Terrain', 'Terrain', 'fa-text-width fa', '2021-10-17 18:21:30', '2021-10-17 18:21:30', 'TERRAIN'),
(6, 'Maison d\'hotes', 'Maison d\'hotes', 'icon54-v1-starhotel1', '2021-10-17 18:21:54', '2021-10-17 18:21:54', 'HOTE'),
(7, 'Villa', 'VILLA', 'fa fa-home', NULL, NULL, 'VILLA');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offre_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_offre_id_foreign` (`offre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `nom`, `offre_id`, `created_at`, `updated_at`) VALUES
(1, '616d70f56f56d_9.png', 9, '2021-10-18 13:04:53', '2021-10-18 13:04:53'),
(2, '616d70f574190_9.png', 9, '2021-10-18 13:04:53', '2021-10-18 13:04:53'),
(3, '616d7465335b5_12.png', 12, '2021-10-18 13:19:33', '2021-10-18 13:19:33'),
(4, '616da6642d746_13.jpg', 13, '2021-10-18 16:52:52', '2021-10-18 16:52:52'),
(5, '616da6643096a_13.jpg', 13, '2021-10-18 16:52:52', '2021-10-18 16:52:52'),
(6, '616da8c356ad2_14.jpg', 14, '2021-10-18 17:02:59', '2021-10-18 17:02:59'),
(7, '616da8c359c4d_14.jpg', 14, '2021-10-18 17:02:59', '2021-10-18 17:02:59'),
(8, '616dac22c3f67_15.jpg', 15, '2021-10-18 17:17:22', '2021-10-18 17:17:22'),
(9, '616daca4702b4_16.jpg', 16, '2021-10-18 17:19:32', '2021-10-18 17:19:32'),
(10, '616dadbb48b31_17.jpg', 17, '2021-10-18 17:24:11', '2021-10-18 17:24:11'),
(11, '616df9b9ad036_18.jpg', 18, '2021-10-18 22:48:25', '2021-10-18 22:48:25'),
(12, '616df9b9b0ec6_18.png', 18, '2021-10-18 22:48:25', '2021-10-18 22:48:25'),
(13, '616e09b9936e8_19.jpg', 19, '2021-10-18 23:56:41', '2021-10-18 23:56:41');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_17_121852_create_agences_table', 1),
(6, '2021_10_17_172150_create_categorie_biens_table', 2),
(7, '2021_10_17_184503_create_reseau_socials_table', 3),
(8, '2021_10_18_100541_create_offres_table', 4),
(9, '2021_10_18_102739_create_images_table', 4),
(10, '2021_10_18_113706_update_categorie_biens_table', 5),
(11, '2021_10_18_123556_add_proposition_field_to_offres_table', 6),
(12, '2021_10_18_131038_update_offres_table_change_nombre_chambre_toilette_interieure_with_default_value', 7),
(13, '2021_10_18_165555_add_nombre_etage_to_offres_table', 8);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `categorie_bien_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agence_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombreAppartement` int(11) NOT NULL DEFAULT '0',
  `nombreStudio` int(11) NOT NULL DEFAULT '0',
  `nombreChambre` int(11) NOT NULL DEFAULT '0',
  `isMeuble` tinyint(1) NOT NULL DEFAULT '0',
  `hasGarage` tinyint(1) NOT NULL DEFAULT '0',
  `hasCuisine` tinyint(1) NOT NULL DEFAULT '0',
  `hasToilettePublique` tinyint(1) NOT NULL DEFAULT '0',
  `hasSalon` tinyint(1) NOT NULL DEFAULT '0',
  `hasToiletteInterieure` tinyint(1) NOT NULL DEFAULT '0',
  `niveau` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nombreChambreAvecToilette` int(11) NOT NULL DEFAULT '0',
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `superficie` double(8,2) DEFAULT NULL,
  `longueur` double(8,2) DEFAULT NULL,
  `largeur` double(8,2) DEFAULT NULL,
  `latitude` double(8,2) DEFAULT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `geolocalise` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `proposition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreEtage` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `offres_categorie_bien_id_foreign` (`categorie_bien_id`),
  KEY `offres_user_id_foreign` (`user_id`),
  KEY `offres_agence_id_foreign` (`agence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `visible`, `categorie_bien_id`, `user_id`, `agence_id`, `nombreAppartement`, `nombreStudio`, `nombreChambre`, `isMeuble`, `hasGarage`, `hasCuisine`, `hasToilettePublique`, `hasSalon`, `hasToiletteInterieure`, `niveau`, `nombreChambreAvecToilette`, `ville`, `adresse`, `prix`, `description`, `superficie`, `longueur`, `largeur`, `latitude`, `longitude`, `geolocalise`, `created_at`, `updated_at`, `proposition`, `nombreEtage`) VALUES
(9, 1, 2, 4, NULL, 0, 0, 3, 0, 0, 1, 1, 1, 0, 'Etage', 2, 'Thiès', 'Mbour 3, près de l\'arret TATA 2', 100000, 'Desc', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 13:04:53', '2021-10-18 13:04:53', 'Location', 0),
(12, 1, 3, 4, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Rez-de-chaussée', 0, 'Thiès', 'Sud Stade', 25000, 'Chambre à louer à Sud Stade, Thiès', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 13:19:33', '2021-10-18 13:19:33', 'Location', 0),
(13, 1, 4, 4, NULL, 5, 2, 0, 0, 0, 0, 0, 0, 0, '', 0, 'Dakar', 'Dakar Pikine Wakhinane', 25000000, 'Très bon état', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 16:52:52', '2021-10-18 16:52:52', 'Vente', 3),
(14, 1, 6, 4, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'Kaolack', 'Résidence Mame Diarra', 12000, 'Desc...', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 17:02:59', '2021-10-18 17:02:59', 'Nuitée', 0),
(15, 1, 1, 4, NULL, 0, 0, 1, 1, 0, 1, 1, 1, 0, 'Rez-de-chaussée', 1, 'Keur Massar', 'Keur Massar, près de l\'usine Jambon', 225000, 'Desc. du prod.\r\nTrès intéressant et plein de bonnes choses...', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 17:17:22', '2021-10-18 17:17:22', 'Location', 0),
(16, 1, 5, 4, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'Thiès', 'Keur Massamba GUEYE', 3500000, 'Zone déjà viabilisée avec eau et courant, les terrains d\'à coté sont déjà construits.', 375.00, 25.00, 15.00, NULL, NULL, 0, '2021-10-18 17:19:32', '2021-10-18 17:19:32', 'Vente', 0),
(17, 1, 7, 4, NULL, 2, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'Thiès', 'Sud-Stade près de l\'antenne RTS', 150000, 'L\'étage n\'est pas encore terminé et non prêt à être habité…\r\nSeul le rez-de-chaussée est habitable…', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 17:24:11', '2021-10-18 17:24:11', 'Location', 2),
(18, 1, 2, 4, NULL, 0, 0, 3, 1, 1, 1, 1, 1, 0, 'Rez-de-chaussée', 3, 'Ziguinchor', 'Quartier Lyndiane', 75000, 'Desc.', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 22:48:25', '2021-10-18 22:48:25', 'Location', 0),
(19, 1, 2, 5, NULL, 0, 0, 2, 1, 1, 1, 1, 1, 0, 'Etage', 1, 'Tambacounda', 'Quartier Abbatoirs', 125000, 'Desc de l\'offre, très intéressante, à saisir, occasion en or...', NULL, NULL, NULL, NULL, NULL, 0, '2021-10-18 23:56:41', '2021-10-18 23:56:41', 'Vente', 0);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reseau_socials`
--

DROP TABLE IF EXISTS `reseau_socials`;
CREATE TABLE IF NOT EXISTS `reseau_socials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reseau_socials_nom_unique` (`nom`),
  UNIQUE KEY `reseau_socials_icon_unique` (`icon`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reseau_socials`
--

INSERT INTO `reseau_socials` (`id`, `nom`, `icon`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fa fa-facebook', 'Facebook.png', '2021-10-17 19:13:21', '2021-10-17 19:13:21'),
(2, 'Twitter', 'fa-twitter', 'Twitter.png', '2021-10-17 19:15:36', '2021-10-17 19:15:36'),
(3, 'Instagram', 'fa fa-instagram', 'Instagram.jpg', '2021-10-17 19:16:44', '2021-10-17 19:16:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneWhatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephonePersonnel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `telephoneWhatsapp`, `telephonePersonnel`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@courtaze.com', NULL, '$2y$10$jD1tmfmT2uOFZUGyUpvDUe6Z5.A48.MeB3Nx45/bOv8u4goDbbjeW', 'tTVBznFkUl7aGlXXUPZuHfHE0uWzGR1XNrpuCsWovBDLiKbQCXqKt79vCqR6', 'Admin', '+221780165026', NULL, 1, '2021-10-17 14:53:03', '2021-10-17 14:53:03'),
(3, 'Courtaze Immo', 'agence@courtaze.com', NULL, '$2y$10$kSKR3upp8NwyrFgANZgqZuv.RPgd0MGB1obVmwJ9ogBplOiFQ/Fge', '0xyEpi9iNnR10GnxROzkni0WPjVNf32U889ZKURhZHX3Tlbe8nbL7PE9s78P', 'Agence', '+221780165026', '+221778224128', 1, '2021-10-17 14:56:05', '2021-10-17 14:56:05'),
(4, 'Courtier', 'courtier@courtaze.com', NULL, '$2y$10$eIf8ol/cHK7aKcuQL7589ePo/1hhju/mUd8CJ8pPHvJfgyDp0TNOO', 'kHZtw1PDlZptSa37IB6JyVLj6t4bttpCL672xj7ahBAoedEqufQlqbZ5qCvg', 'Courtier', '+221780165026', NULL, 1, '2021-10-17 14:56:39', '2021-10-17 14:56:39'),
(5, 'Proprietaire', 'proprietaire@courtaze.com', NULL, '$2y$10$gE1nff5.t.jUXVixkD1.ouKTAUbxZniITvp/.Kfzm.oXEjuiHmDUi', 'RKAN28AJhoY2sQNZEDF2diiHX08iuWWZaAATKozYDBLCoyiCVJzD8DxVN9hO', 'Propriétaire', '+221780165026', NULL, 1, '2021-10-17 14:57:20', '2021-10-17 14:57:20'),
(6, 'Client', 'client@courtaze.com', NULL, '$2y$10$HrwrQuWOxMvl7kCpf2iM8.xvATmmZ3wXA/lsg1RoVINY0ctuXrnn6', '0g7GLwDGNFzCvjdbEqoQ6WpeAAvqchvIYizjeI6mqoFFp5h6DmQHkYYKSH9n', 'Client', '+221780165026', NULL, 1, '2021-10-17 14:57:47', '2021-10-17 14:57:47');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agences`
--
ALTER TABLE `agences`
  ADD CONSTRAINT `agences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_offre_id_foreign` FOREIGN KEY (`offre_id`) REFERENCES `offres` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_agence_id_foreign` FOREIGN KEY (`agence_id`) REFERENCES `agences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offres_categorie_bien_id_foreign` FOREIGN KEY (`categorie_bien_id`) REFERENCES `categorie_biens` (`id`),
  ADD CONSTRAINT `offres_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
