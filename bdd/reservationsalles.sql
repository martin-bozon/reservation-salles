-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 juin 2020 à 11:38
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateurs`) VALUES
(20, 'Pitch', 'Pitch reservation salles', '2020-06-12 12:00:00', '2020-06-12 13:00:00', 1),
(19, 'How to', 'Garder son calme en codant', '2020-06-11 17:00:00', '2020-06-11 18:00:00', 1),
(18, 'How to', 'cours de la premiÃ¨re promo', '2020-06-11 19:00:00', '2020-06-11 20:00:00', 1),
(22, 'RÃ©union', 'Important ! DÃ©but projet pro', '2020-06-12 18:00:00', '2020-06-12 19:00:00', 1),
(23, 'ConfÃ©rence', 'VÃ©nÃ©rer moi', '2020-06-16 13:00:00', '2020-06-16 14:00:00', 1),
(24, 'Pitch', 'PrÃ©sentation application rÃ©volutionnaire', '2020-06-16 11:00:00', '2020-06-16 12:00:00', 1),
(25, 'How to', 'Ecoutez moi je suis ', '2020-06-16 10:00:00', '2020-06-16 11:00:00', 3),
(26, 'How to', 'Bien se prÃ©senter', '2020-06-18 10:00:00', '2020-06-18 11:00:00', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Martin', '$2y$10$ycbeRtFDMQRVuH675v5ZIu1YxXS73rvlJ/fNTA9QsFiu7hWMe7kaS'),
(2, 'test', '$2y$10$9xi/xJwvt8ejTlMzECtmr.GAWBJy2A3I./dfl6u2LGjKiOQZ5YeKm'),
(3, 'Le chef', '$2y$10$O2c0fzZ7LZGgMnBVtgLwROcIz32/Ak3/CG.rF0Rqvd/qln0JHcARy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
