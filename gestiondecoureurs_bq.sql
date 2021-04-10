-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 25 Mars 2021 à 08:51
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestiondecoureurs_bq`
--
CREATE DATABASE IF NOT EXISTS `gestiondecoureurs_bq` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestiondecoureurs_bq`;

-- --------------------------------------------------------

--
-- Structure de la table `coureurs`
--

CREATE TABLE IF NOT EXISTS `coureurs` (
  `idcoureur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `datenais` date NOT NULL,
  PRIMARY KEY (`idcoureur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `coureurs`
--

INSERT INTO `coureurs` (`idcoureur`, `nom`, `prenom`, `sexe`, `adresse`, `cp`, `ville`, `datenais`) VALUES
(1, 'kk', 'kkk', 'F', 'kkk', 0, 'kkk', '2021-03-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
