-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2021 at 14:15 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `idaw_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aliment`
--

CREATE TABLE `Aliment` (
  `ID_Aliment` int(11) NOT NULL,
  `Type` varchar(500) DEFAULT NULL,
  `Nom` varchar(500) NOT NULL,
  `Protéines` varchar(500) DEFAULT NULL,
  `Glucides` varchar(500) DEFAULT NULL,
  `Lipides` varchar(500) DEFAULT NULL,
  `Sucres` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Aliment`
--

INSERT INTO `Aliment` (`ID_Aliment`, `Type`, `Nom`, `Protéines`, `Glucides`, `Lipides`, `Sucres`) VALUES
(1, 'autres produits à base de viande', 'Dinde, escalope viennoise ou milanaise ou escalope panée', '14.10000', '13.50000', '10.90000', '1.07000'),
(2, 'poissons cuits', 'Saumon, cuit, sans précision (aliment moyen)', '23.00000', '0.00000', '12.50000', '0.00000'),
(3, 'poissons cuits', 'Cabillaud, cuit, sans précision (aliment moyen)', '23.10000', '0.00000', '0.73000', '0.00000'),
(4, 'poissons cuits', 'Hareng fumé, filet, doux', '18.10000', '0.00000', '9.90000', '0.00000'),
(5, 'poissons cuits', 'Carrelet ou plie, cuit à la vapeur', '19.00000', '0.00000', '1.89000', '0.00000'),
(6, 'poissons cuits', 'Maquereau, rôti/cuit au four', '21.50000', '0.00000', '15.80000', '0.00000'),
(7, 'poissons cuits', 'Truite d\'élevage, fumée', '23.40000', '0.69000', '9.27000', '0.00000'),
(8, 'poissons cuits', 'Bar commun ou loup, rôti/cuit au four', '22.20000', '0.00000', '6.51000', '0.00000'),
(9, 'poissons crus', 'Thon rouge, cru', '23.30000', '0.00000', '6.81000', '0.00000'),
(10, 'poissons crus', 'Bogue, crue', '17.90000', '0.00000', '2.03000', '0.00000'),
(11, 'poissons crus', 'Rouget-barbet de roche, vapeur', '24.10000', '0.00000', '5.20000', '0.00000'),
(12, 'œufs', 'Oeuf, blanc (blanc d\'oeuf), cuit', '10.30000', '1.12000', '0.17000', '0.70000'),
(13, 'œufs', 'Oeuf, jaune (jaune d\'oeuf), cuit', '16.00000', '1.31000', '30.10000', '0.55000'),
(14, 'œufs', 'Oeuf, dur', '13.50000', '0.52000', '8.62000', '0.52000'),
(15, 'viandes cuites', 'Viande blanche, cuite (aliment moyen)', '28.10000', '0.26000', '6.55000', '0.00190'),
(16, 'viandes cuites', 'Viande rouge, cuite (aliment moyen)', '26.00000', '0.02700', '10.10000', '0.00000'),
(17, 'viandes cuites', 'Viande cuite (aliment moyen)', '27.20000', '0.24000', '8.04000', '0.01100'),
(18, 'viandes cuites', 'Volaille, cuite (aliment moyen)', '27.60000', '0.28000', '5.96000', '0.00220'),
(19, 'viandes cuites', 'Boeuf, entrecôte, partie maigre, grillée/poêlée', '25.50000', '0.10000', '10.70000', '0.00000'),
(20, 'charcuteries et assimilés', 'Jambon cuit, fumé', '20.00000', '0.79000', '5.80000', '0.62000'),
(21, 'charcuteries et assimilés', 'Poitrine de porc, fumée, crue', '15.60000', '0.79000', '26.10000', '0.75000'),
(22, 'charcuteries et assimilés', 'Saucisson de Paris, fumé', '13.70000', '0.60000', '25.60000', '0.00000'),
(23, 'fruits', 'Rhubarbe, tige, crue', '0.78000', '1.47000', '0.23000', '1.47000'),
(24, 'fruits', 'Poire, pulpe, crue', '0.30000', '10.40000', '0.10000', '10.40000'),
(25, 'fruits', 'Raisin, cru', '0.72000', '15.70000', '0.16000', '15.50000'),
(26, 'fruits', 'Pomme Granny Smith, pulpe, crue', '0.50000', '11.40000', '0.50000', '10.60000'),
(27, 'fruits', 'Compote, tout type de fruits', '0.50000', '23.90000', '0.16000', '23.10000'),
(28, 'fruits', 'Mangue José, pulpe, crue, prélevée à La Réunion (Mangifera indica L.)', '0.75000', '23.90000', '0.50000', '18.40000'),
(29, 'pâtes, riz et céréales', 'Riz complet, cuit, non salé', '3.38000', '32.60000', '0.09200', '0.20000'),
(30, 'pâtes, riz et céréales', 'Riz blanc, cuit, non salé', '3.06000', '31.80000', '0.41000', '0.20000'),
(31, 'pâtes, riz et céréales', 'Semoule de blé dur, cuite, non salée', '3.75000', '24.00000', '0.80000', '3.00000'),
(32, 'pains et assimilés', 'Pain (aliment moyen)', '9.01000', '54.40000', '1.61000', '2.74000'),
(33, 'pains et assimilés', 'Pain, baguette, courante', '9.06000', '58.30000', '1.40000', '2.30000'),
(34, 'pains et assimilés', 'Pain de mie, courant', '7.81000', '52.30000', '3.60000', '7.80000'),
(35, 'viandes cuites', 'Viande blanche, cuite (aliment moyen)', '28.10000', '0.26000', '6.55000', '0.00190'),
(36, 'viandes cuites', 'Viande rouge, cuite (aliment moyen)', '26.00000', '0.02700', '10.10000', '0.00000'),
(37, 'viandes cuites', 'Viande cuite (aliment moyen)', '27.20000', '0.24000', '8.04000', '27.60000'),
(38, 'viandes cuites', 'Volaille, cuite (aliment moyen)', '27.60000', '0.28000', '5.96000', '27.60000'),
(39, 'viandes cuites', 'Boeuf, entrecôte, partie maigre, grillée/poêlée', '25.50000', '0.10000', '10.70000', '0.00000'),
(40, 'charcuteries et assimilés', 'Jambon cuit, fumé', '15.60000', '0.79000', '5.70000', '0.01100'),
(41, 'charcuteries et assimilés', 'Poitrine de porc, fumée, crue', '13.70000', '0.79000', '26.10000', '0.00220'),
(42, 'charcuteries et assimilés', 'Saucisson de Paris, fumé', '0.63000', '0.60000', '25.60000', '0.00000'),
(43, 'légumes', 'Carotte, crue', '1.13000', '7.59000', '0.50000', '0.62000'),
(44, 'légumes', 'Chou rouge, cru', '1.10000', '4.33000', '0.50000', '0.75000'),
(45, 'légumes', 'Oignon, cru', '0.86000', '6.25000', '0.62000', '6.00000'),
(46, 'légumes', 'Tomate, crue', '2.62000', '2.49000', '0.26000', '2.49000'),
(47, 'légumes', 'Champignon de Paris ou champignon de couche, cru', '3.95000', '2.49000', '0.36000', '3.90000'),
(48, 'légumes', 'Brocoli, cru', '3.98000', '1.70000', '0.48000', '4.80000'),
(49, 'légumes', 'Chou de Bruxelles, cru', '1.79000', '5.67000', '0.40000', '2.48000'),
(50, 'légumes', 'Chou-rave, cru', '1.79000', '2.35000', '0.10000', '2.35000');

-- --------------------------------------------------------

--
-- Table structure for table `Composition`
--

CREATE TABLE `Composition` (
  `ID_plat` int(11) NOT NULL,
  `ID_Aliment` int(11) NOT NULL,
  `Ratio` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Composition`
--

INSERT INTO `Composition` (`ID_plat`, `ID_Aliment`, `Ratio`) VALUES
(50, 2, '0.50000'),
(50, 3, '0.50000');

-- --------------------------------------------------------

--
-- Table structure for table `Consommation`
--

CREATE TABLE `Consommation` (
  `ID_Aliment` int(11) NOT NULL,
  `ID_repas` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Consommation`
--

INSERT INTO `Consommation` (`ID_Aliment`, `ID_repas`, `Quantite`) VALUES
(25, 1, 10),
(30, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `repas`
--

CREATE TABLE `repas` (
  `ID_repas` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repas`
--

INSERT INTO `repas` (`ID_repas`, `Date`, `Type`, `Email`) VALUES
(1, '2021-03-27 07:10:10', 'Petit Déjeuner', 'issam.kassel@etu.imt-lille-douai.fr'),
(2, '2021-03-27 11:25:41', 'Déjeuner', 'issam.kassel@etu.imt-lille-douai.fr'),
(3, '2021-03-27 19:25:41', 'Diner', 'issam.kassel@etu.imt-lille-douai.fr'),
(4, '2021-03-28 08:00:13', 'Petit Déjeuner', 'zouheir.touil@etu.imt-lille-douai.fr'),
(5, '2021-03-28 12:45:00', 'Dejeuner', 'zouheir.touil@etu.imt-lille-douai.fr'),
(6, '2021-03-28 16:15:44', 'Goûter', 'zouheir.touil@etu.imt-lille-douai.fr');

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `Login` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` varchar(50) NOT NULL,
  `Niveau_sportif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateur`
--

INSERT INTO `Utilisateur` (`Login`, `Nom`, `Prenom`, `Age`, `Sexe`, `Niveau_sportif`) VALUES
('issam.kassel@etu.imt-lille-douai.fr', 'KASSEL', 'Mohammed Issam', 21, 'homme', 1),
('jiaqi.gao@etu.imt-lille-douai.fr', 'GAO', 'Jiaqi', 21, 'homme', 1),
('lucas.faby@etu.imt-lille-douai.fr', 'FABY', 'Lucas', 21, 'homme', 2),
('maya.didon@etu.imt-lille-douai.fr', 'DIDON', 'Maya', 21, 'femme', 3),
('mehdi.lamatig@etu.imt-lille-douai.fr', 'LAMATIG', 'Mehdi', 21, 'homme', 3),
('mehdi.moulay.berkchi@etu.imt-lille-douai.fr', 'MOULAY BERKCHI', 'Mehdi', 21, 'homme', 2),
('nassim.bouaziz@etu.imt-lille-douai.fr', 'BOUAZIZ', 'Nassim', 21, 'homme', 1),
('pauline.pichon@etu.imt-lille-douai.fr', 'PICHON', 'Pauline', 21, 'femme', 1),
('pierre.marque@etu.imt-lille-douai.fr', 'MARQUE', 'Pierre', 21, 'homme', 3),
('radia.el.hamdouni@etu.imt-lille-douai.fr', 'EL HAMDOUNI', 'Radia', 21, 'homme', 2),
('salah.nourelayne@etu.imt-lille-douai.fr', 'NOURELAYNE', 'Salah Eddine', 21, 'homme', 2),
('sam.khosrowshahi@etu.imt-lille-douai.fr', 'KHOSROWSHAHI', 'Sam', 21, 'homme', 1),
('thomas.coydon@etu.imt-lille-douai.fr', 'COYDON', 'Thomas', 21, 'homme', 2),
('thomas.vinchon@etu.imt-lille-douai.fr', 'VINCHON', 'Thomas', 21, 'homme', 3),
('xiao.wang@etu.imt-lille-douai.fr', 'WANG', 'Xiao', 21, 'homme', 3),
('xuechu.wang@etu.imt-lille-douai.fr', 'WANG', 'Xuechu', 21, 'homme', 2),
('yoann.bordin@etu.imt-lille-douai.fr', 'BORDIN', 'Yoann', 21, 'homme', 1),
('zhiwei.pei@etu.imt-lille-douai.fr', 'PEI', 'Zhiwei', 21, 'homme', 1),
('zouheir.touil@etu.imt-lille-douai.fr', 'TOUIL', 'Zouheir', 21, 'homme', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Aliment`
--
ALTER TABLE `Aliment`
  ADD PRIMARY KEY (`ID_Aliment`);

--
-- Indexes for table `Composition`
--
ALTER TABLE `Composition`
  ADD PRIMARY KEY (`ID_plat`,`ID_Aliment`),
  ADD KEY `Composition_ibfk_2` (`ID_Aliment`);

--
-- Indexes for table `Consommation`
--
ALTER TABLE `Consommation`
  ADD PRIMARY KEY (`ID_Aliment`,`ID_repas`),
  ADD KEY `Consommation_REPAS1_FK` (`ID_repas`);

--
-- Indexes for table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`ID_repas`),
  ADD KEY `REPAS_UTILISATEURS0_FK` (`Email`);

--
-- Indexes for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Aliment`
--
ALTER TABLE `Aliment`
  MODIFY `ID_Aliment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `repas`
--
ALTER TABLE `repas`
  MODIFY `ID_repas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Composition`
--
ALTER TABLE `Composition`
  ADD CONSTRAINT `Composition_ibfk_1` FOREIGN KEY (`ID_plat`) REFERENCES `Aliment` (`ID_Aliment`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Composition_ibfk_2` FOREIGN KEY (`ID_Aliment`) REFERENCES `Aliment` (`ID_Aliment`) ON UPDATE CASCADE;

--
-- Constraints for table `Consommation`
--
ALTER TABLE `Consommation`
  ADD CONSTRAINT `Consommation_ALIMENTS0_FK` FOREIGN KEY (`ID_Aliment`) REFERENCES `Aliment` (`ID_Aliment`),
  ADD CONSTRAINT `Consommation_REPAS1_FK` FOREIGN KEY (`ID_repas`) REFERENCES `repas` (`ID_repas`);

--
-- Constraints for table `repas`
--
ALTER TABLE `repas`
  ADD CONSTRAINT `REPAS_UTILISATEURS0_FK` FOREIGN KEY (`Email`) REFERENCES `Utilisateur` (`Login`) ON UPDATE CASCADE;








