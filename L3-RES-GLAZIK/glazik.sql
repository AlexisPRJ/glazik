-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 mai 2019 à 09:36
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `glazik`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pass`, `email`) VALUES
(1, 'secretaire', '$2y$10$aCZME5CYlFgisYp9.4IfW.2F3Fm0dm/ruk9YChePYTo6HJEat3mia', 'glazik@gmail.com'),
(2, 'edu', '$2y$10$fMV9W3FWiYxKXaFNGaf.U.BS.w0Fc08lOXuwxvn9JZXL46Mj7Xv9y', 'edu@itescia.fr'),
(16, 'edu3', '$2y$10$ZO5NiMzgCRaWwOgScGVXhuLIAbh43UZAayA7UdTSPMo/1GxS4Tg76', 'test'),
(17, 'touk', '$2y$10$Vel7JOi.TPFwTeOjl4YgmuoMV4sGqGrH3.v6mdG8cz/dOxL5ykaC6', 'touk@gmail.com'),
(18, 'lolo', '$2y$10$PQyutU23ACDCmMJdGbe9OOjjA9xMPTcbu7OkLR0YcR3kPmR9kam8S', 'lolo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
