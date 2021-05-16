-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 16 mai 2021 à 13:35
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `idadresse` int NOT NULL,
  `Adresse_Code` varchar(45) DEFAULT NULL,
  `City_Name` varchar(45) DEFAULT NULL,
  `Street_Name` varchar(45) DEFAULT NULL,
  `Country` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int NOT NULL,
  `Nom_Categorie` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int NOT NULL,
  `Order_Name` varchar(45) DEFAULT NULL,
  `Description_Commande` text,
  `Price_TTC` varchar(45) DEFAULT NULL,
  `adresse_idadresse` int NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `fk_Commande_adresse1_idx` (`adresse_idadresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande_has_produit`
--

DROP TABLE IF EXISTS `commande_has_produit`;
CREATE TABLE IF NOT EXISTS `commande_has_produit` (
  `Commande_idCommande` int NOT NULL,
  `Produit_idProduit` int NOT NULL,
  `Quantity` int DEFAULT NULL,
  PRIMARY KEY (`Commande_idCommande`,`Produit_idProduit`),
  KEY `fk_Commande_has_Produit_Produit1_idx` (`Produit_idProduit`),
  KEY `fk_Commande_has_Produit_Commande1_idx` (`Commande_idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `idPermission` int NOT NULL,
  `label` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPermission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int NOT NULL,
  `Name_Product` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Product_Price` varchar(45) DEFAULT NULL,
  `Description_Product` text,
  `Product_image` text NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit_has_categorie`
--

DROP TABLE IF EXISTS `produit_has_categorie`;
CREATE TABLE IF NOT EXISTS `produit_has_categorie` (
  `Produit_idProduit` int NOT NULL,
  `Categorie_idCategorie` int NOT NULL,
  PRIMARY KEY (`Produit_idProduit`,`Categorie_idCategorie`),
  KEY `fk_Produit_has_Categorie_Categorie1_idx` (`Categorie_idCategorie`),
  KEY `fk_Produit_has_Categorie_Produit1_idx` (`Produit_idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int NOT NULL AUTO_INCREMENT,
  `LastName` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `MDP` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `LastName`, `FirstName`, `email`, `MDP`) VALUES
(22, 'test', 'test', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(25, 'Unity', 'test', 'amirramy.chatbi@gmail.com', '3a13cf1b5d353a9a89203e3aa7cc5590a64fe4fd');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_has_commande`
--

DROP TABLE IF EXISTS `utilisateur_has_commande`;
CREATE TABLE IF NOT EXISTS `utilisateur_has_commande` (
  `Utilisateur_idUtilisateur` int NOT NULL,
  `Commande_idCommande` int NOT NULL,
  PRIMARY KEY (`Utilisateur_idUtilisateur`,`Commande_idCommande`),
  KEY `fk_Utilisateur_has_Commande_Commande1_idx` (`Commande_idCommande`),
  KEY `fk_Utilisateur_has_Commande_Utilisateur1_idx` (`Utilisateur_idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_has_permission`
--

DROP TABLE IF EXISTS `utilisateur_has_permission`;
CREATE TABLE IF NOT EXISTS `utilisateur_has_permission` (
  `Utilisateur_idUtilisateur` int NOT NULL,
  `Permission_idPermission` int NOT NULL,
  PRIMARY KEY (`Utilisateur_idUtilisateur`,`Permission_idPermission`),
  KEY `fk_Utilisateur_has_Permission_Permission1_idx` (`Permission_idPermission`),
  KEY `fk_Utilisateur_has_Permission_Utilisateur1_idx` (`Utilisateur_idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_Commande_adresse1` FOREIGN KEY (`adresse_idadresse`) REFERENCES `adresse` (`idadresse`);

--
-- Contraintes pour la table `commande_has_produit`
--
ALTER TABLE `commande_has_produit`
  ADD CONSTRAINT `fk_Commande_has_Produit_Commande1` FOREIGN KEY (`Commande_idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `fk_Commande_has_Produit_Produit1` FOREIGN KEY (`Produit_idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `produit_has_categorie`
--
ALTER TABLE `produit_has_categorie`
  ADD CONSTRAINT `fk_Produit_has_Categorie_Categorie1` FOREIGN KEY (`Categorie_idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `fk_Produit_has_Categorie_Produit1` FOREIGN KEY (`Produit_idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `utilisateur_has_commande`
--
ALTER TABLE `utilisateur_has_commande`
  ADD CONSTRAINT `fk_Utilisateur_has_Commande_Commande1` FOREIGN KEY (`Commande_idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `fk_Utilisateur_has_Commande_Utilisateur1` FOREIGN KEY (`Utilisateur_idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `utilisateur_has_permission`
--
ALTER TABLE `utilisateur_has_permission`
  ADD CONSTRAINT `fk_Utilisateur_has_Permission_Permission1` FOREIGN KEY (`Permission_idPermission`) REFERENCES `permission` (`idPermission`),
  ADD CONSTRAINT `fk_Utilisateur_has_Permission_Utilisateur1` FOREIGN KEY (`Utilisateur_idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
