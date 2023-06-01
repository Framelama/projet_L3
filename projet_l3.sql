-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 01 juin 2023 à 20:27
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet l3`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID_P` int NOT NULL AUTO_INCREMENT,
  `Libelle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dispo_prod` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix` int NOT NULL,
  `categorie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `typeTransaction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_F` int NOT NULL,
  PRIMARY KEY (`ID_P`),
  KEY `ID_F` (`ID_F`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ID_P`, `Libelle`, `dispo_prod`, `prix`, `categorie`, `typeTransaction`, `description`, `photo`, `Contact`, `ID_F`) VALUES
(19, 'halter', 'disponible', 800, 'muscu', 'vente', 'Haltere bon etat', '1.jpg', '050690590', 7),
(20, 'Corde', 'disponible', 350, 'cardio', 'vente', 'Une bonne corde a sauter', '1-55.jpg', '0780903456', 8),
(17, 'Barre lateral', 'disponible', 90, 'muscu', 'vente', 'une barre de sport', 'barre-halteres-squat-prechargees_1.jpg', '07456578', 7);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_C` int NOT NULL AUTO_INCREMENT,
  `Pseudo_C` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_didentite` int NOT NULL,
  `telephone` int NOT NULL,
  PRIMARY KEY (`ID_C`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_C`, `Pseudo_C`, `Email`, `mdp`, `N_didentite`, `telephone`) VALUES
(5, 'lama ', 'lama@gmail.com', 'lama1', 10291, 8888080);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `ID_F` int NOT NULL AUTO_INCREMENT,
  `Pseudo_F` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code` int NOT NULL,
  PRIMARY KEY (`ID_F`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`ID_F`, `Pseudo_F`, `Email`, `mdp`, `adresse`, `code`) VALUES
(8, 'Ahmed ', 'ahmed@gmail.com', '1010', 'el bouni', 2020),
(7, 'ilyes ', 'ilyes@gmail.com', '1122', 'annaba', 211232);

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `ID_L` int NOT NULL AUTO_INCREMENT,
  `Libelle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Pseudo_C` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_telephone` int NOT NULL,
  `N_didentite` int NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `ID_C` int NOT NULL,
  `ID_P` int NOT NULL,
  PRIMARY KEY (`ID_L`),
  KEY `ID_C` (`ID_C`),
  KEY `ID_P` (`ID_P`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
