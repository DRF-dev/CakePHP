-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 jan. 2020 à 20:41
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `radio`
--

-- --------------------------------------------------------

--
-- Structure de la table `radios`
--

DROP TABLE IF EXISTS `radios`;
CREATE TABLE IF NOT EXISTS `radios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL,
  `modified` timestamp NOT NULL,
  `name` varchar(50) NOT NULL,
  `frequency` double(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `radios`
--

INSERT INTO `radios` (`id`, `created`, `modified`, `name`, `frequency`) VALUES
(3, '2019-12-02 10:01:11', '2019-12-02 10:01:11', 'Skyrock', 96.00),
(6, '2019-12-02 10:29:10', '2019-12-02 10:29:10', 'France inter', 85.80),
(5, '2019-12-02 10:14:24', '2019-12-02 10:14:24', 'NRJ', 100.30),
(7, '2019-12-02 15:01:46', '2019-12-02 15:01:46', 'Nostalgie', 90.40),
(8, '2019-12-05 19:53:51', '2019-12-05 19:53:51', 'Latina', 98.20);

-- --------------------------------------------------------

--
-- Structure de la table `shows`
--

DROP TABLE IF EXISTS `shows`;
CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL,
  `modified` timestamp NOT NULL,
  `name` varchar(50) NOT NULL,
  `day` date NOT NULL,
  `hour` time NOT NULL,
  `radio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `shows`
--

INSERT INTO `shows` (`id`, `created`, `modified`, `name`, `day`, `hour`, `radio_id`) VALUES
(1, '2019-12-02 13:00:30', '2019-12-02 13:00:30', 'Difool - le morning', '2019-11-01', '06:30:00', 3),
(2, '2019-12-02 13:04:23', '2019-12-02 13:04:23', 'Cauet ', '2019-11-20', '19:15:00', 5),
(3, '2019-12-02 13:07:23', '2019-12-02 13:07:23', 'Le journal de 13h', '2019-10-18', '13:00:00', 6),
(5, '2019-12-02 15:28:07', '2019-12-02 15:28:07', 'Les matins qui chantent', '2019-03-08', '07:27:00', 7),
(6, '2019-12-05 19:55:11', '2019-12-05 19:55:11', 'Le latino show', '2019-11-08', '07:54:00', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
