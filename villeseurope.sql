-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Janvier 2015 à 10:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `villeseurope`
--
CREATE DATABASE IF NOT EXISTS `villeseurope` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `villeseurope`;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE IF NOT EXISTS `villes` (
  `idV` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomV` varchar(30) NOT NULL,
  `paysV` varchar(20) NOT NULL,
  PRIMARY KEY (`idV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`idV`, `nomV`, `paysV`) VALUES
(1, 'Istanbul', 'Turquie'),
(2, 'Moscou', 'Russie'),
(3, 'Londres', 'Grande-Bretagne'),
(4, 'Saint-Petersbourg', 'Russie'),
(5, 'Berlin', 'Allemagne'),
(6, 'Madrid', 'Espagne'),
(7, 'Rome', 'Italie'),
(8, 'Kiev', 'Ukraine'),
(9, 'Paris', 'France'),
(10, 'Bucarest', 'Roumanie'),
(11, 'Minsk', 'Bélarussie'),
(12, 'Hambourg', 'Allemagne'),
(13, 'Varsovie', 'Pologne'),
(14, 'Vienne', 'Autriche'),
(15, 'Barcelone', 'Espagne'),
(16, 'Kharkiv', 'Ukraine'),
(17, 'Nischni Nowgorod', 'Russie'),
(18, 'Munich', 'Allemagne'),
(19, 'Milan', 'Italie'),
(20, 'Stockholm', 'Suède'),
(21, 'Prague', 'République Tchèque'),
(22, 'Samara', 'Russie'),
(23, 'Sofia', 'Bulgarie'),
(24, 'Belgrade', 'Serbie'),
(25, 'Kasan', 'Russie'),
(26, 'Ufa', 'Russie'),
(27, 'Dnipropetrovsk', 'Ukraine'),
(28, 'Copenhague', 'Danemark'),
(29, 'Donetsk', 'Ukraine'),
(30, 'Rostow', 'Russie'),
(31, 'Birmingham', 'Grande-Bretagne'),
(32, 'Perm', 'Russie'),
(33, 'Odessa', 'Ukraine'),
(34, 'Cologne', 'Allemagne'),
(35, 'Naples', 'Italie'),
(36, 'Volgograd', 'Russie'),
(37, 'Dublin', 'Irlande'),
(38, 'Bruxelles', 'Belgique'),
(39, 'Woronesh', 'Russie'),
(40, 'Turin', 'Italie'),
(41, 'Saratow', 'Russie'),
(42, 'Marseille', 'France'),
(43, 'Zaporojie', 'Ukraine'),
(45, 'Léopol', 'Ukraine'),
(46, 'Oslo', 'Norvège'),
(47, 'Zagreb', 'Croatie'),
(48, 'Athènes', 'Grèce'),
(49, 'Valence ', 'Espagne'),
(50, 'Cracovie', 'Pologne'),


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
