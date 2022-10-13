-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql308.byetcluster.com
-- Généré le :  jeu. 13 oct. 2022 à 11:38
-- Version du serveur :  10.3.27-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `unaux_28414183_city`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idxAdmin` int(10) NOT NULL,
  `userAdmin` varchar(50) NOT NULL,
  `passAdmin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chaussures`
--

CREATE TABLE `chaussures` (
  `idxChaussure` int(9) NOT NULL,
  `idxMarque` int(9) NOT NULL,
  `taille` int(2) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  `nomChaussure` varchar(25) NOT NULL,
  `images` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chaussures`
--

INSERT INTO `chaussures` (`idxChaussure`, `idxMarque`, `taille`, `couleur`, `prix`, `nomChaussure`, `images`) VALUES
(1, 3, 45, 'Rouge', 50000, 'SPARCO', 'Nike VaporMax 2020.png'),
(2, 1, 35, 'Gris', 23000, 'ADENCO', 'Nike Air Force.webp'),
(3, 2, 40, 'Jaune', 40000, 'NIKE ZOOM', 'Nike VaporMax Gost.webp'),
(4, 3, 45, 'Rouge', 50000, 'SPARCO', 'Nike VaporMax.png'),
(5, 4, 33, 'Jaune', 47000, 'TIBERLAND', 'Tiberland haute.webp'),
(6, 4, 40, 'Noir', 67000, 'TIBERLAND', 'Tiberland.webp'),
(7, 2, 45, 'Noir', 35000, 'AIR ZOOM', 'Nike air Zoom.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `idxClient` int(9) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `contact` int(11) NOT NULL,
  `ville` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `idxCommande` int(9) NOT NULL,
  `idxClient` int(9) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detailcommandes`
--

CREATE TABLE `detailcommandes` (
  `idxCommande` int(9) NOT NULL,
  `idxChaussure` int(9) NOT NULL,
  `quantite` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `idxMarque` int(9) NOT NULL,
  `marque` varchar(25) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`idxMarque`, `marque`, `logo`) VALUES
(1, 'Adidas', 'Adidas.png'),
(3, 'Puma', 'puma.png'),
(4, 'Tiberlande', 'Tiberlande.png'),
(14, 'Nike', 'nike.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idxAdmin`);

--
-- Index pour la table `chaussures`
--
ALTER TABLE `chaussures`
  ADD PRIMARY KEY (`idxChaussure`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idxClient`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`idxCommande`),
  ADD KEY `idxClient` (`idxClient`);

--
-- Index pour la table `detailcommandes`
--
ALTER TABLE `detailcommandes`
  ADD KEY `idxCommande` (`idxCommande`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`idxMarque`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idxAdmin` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chaussures`
--
ALTER TABLE `chaussures`
  MODIFY `idxChaussure` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `idxClient` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `idxCommande` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `idxMarque` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`idxClient`) REFERENCES `clients` (`idxClient`);

--
-- Contraintes pour la table `detailcommandes`
--
ALTER TABLE `detailcommandes`
  ADD CONSTRAINT `detailcommandes_ibfk_1` FOREIGN KEY (`idxCommande`) REFERENCES `commandes` (`idxCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
