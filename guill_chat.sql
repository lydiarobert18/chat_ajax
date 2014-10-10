-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Juin 2014 à 14:42
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `guill_chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `timeSent` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `username`, `message`, `timeSent`) VALUES
(1, 'yo', 'fdfdsafdasf', 1402056573),
(2, 'yo', 'baba', 1402056607),
(3, 'yo', 'fdasfdsfdasf', 1402057874),
(4, 'yo', 'bbbb', 1402057890),
(5, 'yo', 'abab', 1402057897),
(6, 'yo', 'qqqqqq', 1402057902),
(7, 'yo', 'yoyo', 1402057910),
(8, 'yo', 'qfewfewewf', 1402057916),
(9, 'bla', 'chouchou', 1402057935),
(10, 'yo', 'poutine', 1402057941),
(11, 'yo', 'pouf', 1402057957),
(12, 'yo', 'dasfds', 1402058118),
(13, 'yo', 'dasfds', 1402058118),
(14, 'bla', 'abasbabab', 1402058183),
(15, 'bla', 'fadasf dasdfas dfas dfs', 1402058235),
(16, 'bla', 'qqqq', 1402058279),
(17, 'bla', 'fdsafds', 1402058367),
(18, 'bla', 'qewrew', 1402058370),
(19, 'yo', 'adsfdsfdas', 1402058379),
(20, 'yo', 'adsfdsfdasdasfdfdasfd', 1402058418);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
