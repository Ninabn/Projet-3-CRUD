-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 02 fév. 2021 à 15:34
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
  PRIMARY KEY (`id_ampoule`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ampoules`
--

INSERT INTO `ampoules` (`id_ampoule`, `date_changement`, `etage`, `position_ampoule`, `prix_ampoule`) VALUES
(1, '2021-02-02 00:00:00', 'RDC', 'droite', 20.99),
(2, '2021-02-02 00:00:00', '6', '1', 50),
(3, '2021-02-01 00:00:00', '3', '2', 30.99),
(9, '2021-02-02 14:22:00', '8', '1', 11),
(10, '2021-02-02 15:12:00', '8', 'Fond', 50),
(11, '2021-02-02 16:30:00', 'RDC', 'Fond', 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
