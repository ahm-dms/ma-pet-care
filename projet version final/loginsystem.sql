-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 18 juin 2019 à 21:27
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `loginsystem`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'youssef', 'ed', 'you@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `daten` date NOT NULL,
  `gender` varchar(40) NOT NULL,
  `location` varchar(60) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `prenom`, `nom`, `daten`, `gender`, `location`, `adresse`, `name`, `tel`) VALUES
(1, 'az', 'az', '2019-06-16', 'male', 'azerty', 'azerty 10', 'azer', '0650402010'),
(2, 'qw', 'wqw', '2019-06-16', 'female', 'qwerty', 'qwerty 20', 'qwer', '050140002502'),
(3, 'dsfdg', 'gdfghf', '2019-06-08', 'male', 'vcv', 'cxvxcv 565', 'dfdf', '061524836'),
(4, 'cvdfvfd', 'dsgvfsdg', '2019-06-08', 'female', ' cbvdf', 'dfsgvsdf', 'sdgsdfg', '025326556');

-- --------------------------------------------------------

--
-- Structure de la table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `daten` date NOT NULL,
  `gendre` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `service` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `tarif` int(11) NOT NULL,
  `nbrservice` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `registration`
--

INSERT INTO `registration` (`id`, `name`, `daten`, `gendre`, `description`, `bio`, `service`, `type`, `tarif`, `nbrservice`) VALUES
(3, 'defe', '2019-06-13', 'male', 'sdf', 'sdffs', 'Pet Sitting', 'Dogs', 1, 1),
(4, 'dsfsdgdgds', '2019-06-13', 'male', 'xcwvxcv', 'cxvxvxv', 'Dog Walking', 'Cats', 1, 5),
(5, 'ghg', '2019-06-21', 'male', 'a', 'a', 'Dog Walking', 'Cats', 5, 4),
(6, 'hhkhjk', '2019-06-09', 'male', 'jhkjhkjk', 'hjkhjkjh', 'Pet Sitting', 'Cats', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'you', 'aa@aa.aa', '$2y$10$EhQHdM2aEbvU5CwqzS/.sugx/HDDqKWVTAuoXosri5b7Cf.ISN8p6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
