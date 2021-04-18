-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 jan. 2021 à 22:51
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dwwmgarage`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210112200919', '2021-01-12 20:09:25', 35),
('DoctrineMigrations\\Version20210112201115', '2021-01-12 20:11:22', 44),
('DoctrineMigrations\\Version20210112201947', '2021-01-12 20:19:51', 179),
('DoctrineMigrations\\Version20210112210728', '2021-01-12 21:07:32', 67);

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

DROP TABLE IF EXISTS `rendez_vous`;
CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_65E8AA0AA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous_services`
--

DROP TABLE IF EXISTS `rendez_vous_services`;
CREATE TABLE IF NOT EXISTS `rendez_vous_services` (
  `rendez_vous_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  PRIMARY KEY (`rendez_vous_id`,`services_id`),
  KEY `IDX_9B27A34A91EF7EAA` (`rendez_vous_id`),
  KEY `IDX_9B27A34AAEF5A6C1` (`services_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `image`, `prix`) VALUES
(1, 'climatisation', 'climatisation.jpg', 59),
(2, 'distribution', 'distribution.jpg', 249),
(3, 'embrayage', 'embrayage.jpg', 299),
(4, 'freinage', 'freinage.jpg', 69),
(5, 'parallelisme', 'parallelisme.jpg', 39),
(6, 'vidange', 'vidange.jpg', 69);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `phone`, `prenom`, `nom`) VALUES
(1, 'garage@gmail.com', '\"ROLE_ADMIN\"', 'garage', 452648274, 'Garage', 'DWWM'),
(2, 'baptiste.pouilly@icloud.com', '[]', 'Baptiste77', 783572237, 'Baptiste', 'Pouilly'),
(3, 'lassyna@dwwm.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$aGFRMW9hdHp4bExNeGdEVw$pgE/hZhvqf8JbemRRIcRl5PIf/PskNwFHdIz23iXTyU', 745321423, 'Lassyna', 'Sylla');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `FK_65E8AA0AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `rendez_vous_services`
--
ALTER TABLE `rendez_vous_services`
  ADD CONSTRAINT `FK_9B27A34A91EF7EAA` FOREIGN KEY (`rendez_vous_id`) REFERENCES `rendez_vous` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9B27A34AAEF5A6C1` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
