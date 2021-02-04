-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 fév. 2021 à 07:55
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
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `ampoules`
--

DROP TABLE IF EXISTS `ampoules`;
CREATE TABLE IF NOT EXISTS `ampoules` (
  `id_ampoule` int(11) NOT NULL AUTO_INCREMENT,
  `date_changement` datetime NOT NULL,
  `etage` varchar(250) NOT NULL,
  `position_ampoule` varchar(250) NOT NULL,
  `prix_ampoule` float NOT NULL,
  `concierge_id` int(11) NOT NULL,
  PRIMARY KEY (`id_ampoule`),
  KEY `concierge_id` (`concierge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ampoules`
--

INSERT INTO `ampoules` (`id_ampoule`, `date_changement`, `etage`, `position_ampoule`, `prix_ampoule`, `concierge_id`) VALUES
(1, '2021-02-02 00:00:00', 'RDC', 'droite', 20.99, 1),
(2, '2021-02-02 00:00:00', '6', '1', 50, 2),
(3, '2021-02-01 00:00:00', '3', '2', 30.99, 1),
(9, '2021-02-02 14:22:00', '8', '1', 11, 1),
(10, '2021-02-02 15:12:00', '8', 'Fond', 50, 2),
(11, '2021-02-02 16:30:00', 'RDC', 'Fond', 50, 2),
(12, '2021-02-03 14:50:00', '2 étage', 'Droite', 50, 1),
(13, '2021-02-03 14:50:00', '2 étage', 'Droite', 50, 1),
(14, '2021-02-03 14:54:00', '7 étage', 'Droite', 50, 1),
(15, '2021-02-03 14:58:00', '7 étage', 'Gauche', 50, 1),
(16, '2021-02-03 14:58:00', '7 étage', 'Gauche', 50, 1),
(27, '2021-02-03 15:45:00', 'RDC', 'Gauche', 5.99, 2),
(28, '2021-02-03 15:42:00', '6 étage', 'Droite', 100, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ampoules`
--
ALTER TABLE `ampoules`
  ADD CONSTRAINT `ampoules_ibfk_1` FOREIGN KEY (`concierge_id`) REFERENCES `concierges` (`id_concierge`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
