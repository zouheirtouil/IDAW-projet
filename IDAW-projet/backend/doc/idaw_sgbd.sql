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
-- Database: `idaw_sgbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `aliments`
--

CREATE TABLE `aliments` (
  `ID_aliments` int(11) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `Nom` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aliments`
--

INSERT INTO `aliments` (`ID_aliments`, `Type`, `Nom`) VALUES
(1, 'autres produits à base de viande', 'Dinde, escalope viennoise ou milanaise ou escalope panée'),
(2, 'poissons cuits', 'Saumon, cuit, sans précision (aliment moyen)'),
(3, 'poissons cuits', 'Cabillaud, cuit, sans précision (aliment moyen)'),
(4, 'poissons cuits', 'Hareng fumé, filet, doux'),
(5, 'poissons cuits', 'Carrelet ou plie, cuit à la vapeur'),
(6, 'poissons cuits', 'Maquereau, rôti/cuit au four'),
(7, 'poissons cuits', 'Truite d\'élevage, fumée'),
(8, 'poissons cuits', 'Bar commun ou loup, rôti/cuit au four'),
(9, 'poissons crus', 'Thon rouge, cru'),
(10, 'poissons crus', 'Bogue, crue'),
(11, 'poissons crus', 'Rouget-barbet de roche, vapeur'),
(12, 'œufs', 'Oeuf, blanc (blanc d\'oeuf), cuit'),
(13, 'œufs', 'Oeuf, jaune (jaune d\'oeuf), cuit'),
(14, 'œufs', 'Oeuf, dur'),
(15, 'viandes cuites', 'Viande blanche, cuite (aliment moyen)'),
(16, 'viandes cuites', 'Viande rouge, cuite (aliment moyen)'),
(17, 'viandes cuites', 'Viande cuite (aliment moyen)'),
(18, 'viandes cuites', 'Volaille, cuite (aliment moyen)'),
(19, 'viandes cuites', 'Boeuf, entrecôte, partie maigre, grillée/poêlée'),
(20, 'charcuteries et assimilés', 'Jambon cuit, fumé'),
(21, 'charcuteries et assimilés', 'Poitrine de porc, fumée, crue'),
(22, 'charcuteries et assimilés', 'Saucisson de Paris, fumé'),
(23, 'fruits', 'Rhubarbe, tige, crue'),
(24, 'fruits', 'Poire, pulpe, crue'),
(25, 'fruits', 'Raisin, cru'),
(26, 'fruits', 'Pomme Granny Smith, pulpe, crue'),
(27, 'fruits', 'Compote, tout type de fruits'),
(28, 'fruits', 'Mangue José, pulpe, crue, prélevée à La Réunion (Mangifera indica L.)'),
(29, 'pâtes, riz et céréales', 'Riz complet, cuit, non salé'),
(30, 'pâtes, riz et céréales', 'Riz blanc, cuit, non salé'),
(31, 'pâtes, riz et céréales', 'Semoule de blé dur, cuite, non salée'),
(32, 'pains et assimilés', 'Pain (aliment moyen)'),
(33, 'pains et assimilés', 'Pain, baguette, courante'),
(34, 'pains et assimilés', 'Pain de mie, courant'),
(35, 'viandes cuites', 'Viande blanche, cuite (aliment moyen)'),
(36, 'viandes cuites', 'Viande rouge, cuite (aliment moyen)'),
(37, 'viandes cuites', 'Viande cuite (aliment moyen)'),
(38, 'viandes cuites', 'Volaille, cuite (aliment moyen)'),
(39, 'viandes cuites', 'Boeuf, entrecôte, partie maigre, grillée/poêlée'),
(40, 'charcuteries et assimilés', 'Jambon cuit, fumé'),
(41, 'charcuteries et assimilés', 'Poitrine de porc, fumée, crue'),
(42, 'charcuteries et assimilés', 'Saucisson de Paris, fumé'),
(43, 'légumes', 'Carotte, crue'),
(44, 'légumes', 'Chou rouge, cru'),
(45, 'légumes', 'Oignon, cru'),
(46, 'légumes', 'Tomate, crue'),
(47, 'légumes', 'Champignon de Paris ou champignon de couche, cru'),
(48, 'légumes', 'Brocoli, cru'),
(49, 'légumes', 'Chou de Bruxelles, cru'),
(50, 'légumes', 'Chou-rave, cru');

-- --------------------------------------------------------

--
-- Table structure for table `apport`
--

CREATE TABLE `apport` (
  `ID_apport` int(11) NOT NULL,
  `Apport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apport`
--

INSERT INTO `apport` (`ID_apport`, `Apport`) VALUES
(1, 'Protéines'),
(2, 'Glucides'),
(3, 'Lipides'),
(4, 'Sucres');

-- --------------------------------------------------------

--
-- Table structure for table `a_pour_apport`
--

CREATE TABLE `a_pour_apport` (
  `ID_apport` int(11) NOT NULL,
  `ID_aliments` int(11) NOT NULL,
  `Ratio` decimal(10,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a_pour_apport`
--

INSERT INTO `a_pour_apport` (`ID_apport`, `ID_aliments`, `Ratio`) VALUES
(1, 1, '14.10000'),
(1, 2, '23.00000'),
(1, 3, '23.10000'),
(1, 4, '18.10000'),
(1, 5, '19.00000'),
(1, 6, '21.50000'),
(1, 7, '23.40000'),
(1, 8, '22.20000'),
(1, 9, '23.30000'),
(1, 10, '17.90000'),
(1, 11, '24.10000'),
(1, 12, '10.30000'),
(1, 13, '16.00000'),
(1, 14, '13.50000'),
(1, 15, '28.10000'),
(1, 16, '26.00000'),
(1, 17, '27.20000'),
(1, 18, '27.60000'),
(1, 19, '25.50000'),
(1, 20, '20.00000'),
(1, 21, '15.60000'),
(1, 22, '13.70000'),
(1, 23, '0.78000'),
(1, 24, '0.30000'),
(1, 25, '0.72000'),
(1, 26, '0.50000'),
(1, 27, '0.50000'),
(1, 28, '0.75000'),
(1, 29, '3.38000'),
(1, 30, '3.06000'),
(1, 31, '3.75000'),
(1, 32, '9.01000'),
(1, 33, '9.06000'),
(1, 34, '7.81000'),
(1, 35, '28.10000'),
(1, 36, '26.00000'),
(1, 37, '27.20000'),
(1, 38, '27.60000'),
(1, 39, '25.50000'),
(1, 40, '20.00000'),
(1, 41, '15.60000'),
(1, 42, '13.70000'),
(1, 43, '0.63000'),
(1, 44, '1.13000'),
(1, 45, '1.10000'),
(1, 46, '0.86000'),
(1, 47, '2.62000'),
(1, 48, '3.95000'),
(1, 49, '3.98000'),
(1, 50, '1.79000'),
(2, 1, '13.50000'),
(2, 2, '0.00000'),
(2, 3, '0.00000'),
(2, 4, '0.00000'),
(2, 5, '0.00000'),
(2, 6, '0.00000'),
(2, 7, '0.69000'),
(2, 8, '0.00000'),
(2, 9, '0.00000'),
(2, 10, '0.00000'),
(2, 11, '0.00000'),
(2, 12, '1.12000'),
(2, 13, '1.31000'),
(2, 14, '0.52000'),
(2, 15, '0.26000'),
(2, 16, '0.02700'),
(2, 17, '0.24000'),
(2, 18, '0.28000'),
(2, 19, '0.10000'),
(2, 20, '0.79000'),
(2, 21, '0.79000'),
(2, 22, '0.60000'),
(2, 23, '1.47000'),
(2, 24, '10.40000'),
(2, 25, '15.70000'),
(2, 26, '11.40000'),
(2, 27, '23.90000'),
(2, 28, '19.30000'),
(2, 29, '32.60000'),
(2, 30, '31.80000'),
(2, 31, '24.00000'),
(2, 32, '54.40000'),
(2, 33, '58.30000'),
(2, 34, '52.30000'),
(2, 35, '0.26000'),
(2, 36, '0.02700'),
(2, 37, '0.24000'),
(2, 38, '0.28000'),
(2, 39, '0.10000'),
(2, 40, '0.79000'),
(2, 41, '0.79000'),
(2, 42, '0.60000'),
(2, 43, '7.59000'),
(2, 44, '4.33000'),
(2, 45, '6.25000'),
(2, 46, '2.49000'),
(2, 47, '3.15000'),
(2, 48, '1.70000'),
(2, 49, '5.67000'),
(2, 50, '2.35000'),
(3, 1, '10.90000'),
(3, 2, '12.50000'),
(3, 3, '0.73000'),
(3, 4, '9.90000'),
(3, 5, '1.89000'),
(3, 6, '15.80000'),
(3, 7, '9.27000'),
(3, 8, '6.51000'),
(3, 9, '6.81000'),
(3, 10, '2.03000'),
(3, 11, '5.20000'),
(3, 12, '0.17000'),
(3, 13, '30.10000'),
(3, 14, '8.62000'),
(3, 15, '6.55000'),
(3, 16, '10.10000'),
(3, 17, '8.04000'),
(3, 18, '5.96000'),
(3, 19, '10.70000'),
(3, 20, '5.80000'),
(3, 21, '26.10000'),
(3, 22, '25.60000'),
(3, 23, '0.23000'),
(3, 24, '0.10000'),
(3, 25, '0.16000'),
(3, 26, '0.50000'),
(3, 27, '0.09200'),
(3, 28, '0.50000'),
(3, 29, '1.00000'),
(3, 30, '0.41000'),
(3, 31, '0.80000'),
(3, 32, '1.61000'),
(3, 33, '1.40000'),
(3, 34, '3.60000'),
(3, 35, '6.55000'),
(3, 36, '10.10000'),
(3, 37, '8.04000'),
(3, 38, '5.96000'),
(3, 39, '10.70000'),
(3, 40, '5.80000'),
(3, 41, '26.10000'),
(3, 42, '25.60000'),
(3, 43, '0.50000'),
(3, 44, '0.50000'),
(3, 45, '0.62000'),
(3, 46, '0.26000'),
(3, 47, '0.36000'),
(3, 48, '0.48000'),
(3, 49, '0.40000'),
(3, 50, '0.10000'),
(4, 1, '1.07000'),
(4, 2, '0.00000'),
(4, 3, '0.00000'),
(4, 4, '0.00000'),
(4, 5, '0.00000'),
(4, 6, '0.00000'),
(4, 7, '0.00000'),
(4, 8, '0.00000'),
(4, 9, '0.00000'),
(4, 10, '0.00000'),
(4, 11, '0.00000'),
(4, 12, '0.70000'),
(4, 13, '0.55000'),
(4, 14, '0.52000'),
(4, 15, '0.00190'),
(4, 16, '0.00000'),
(4, 17, '0.01100'),
(4, 18, '0.00220'),
(4, 19, '0.00000'),
(4, 20, '0.62000'),
(4, 21, '0.75000'),
(4, 22, '0.00000'),
(4, 23, '1.47000'),
(4, 24, '10.40000'),
(4, 25, '15.50000'),
(4, 26, '10.60000'),
(4, 27, '23.10000'),
(4, 28, '18.40000'),
(4, 29, '0.20000'),
(4, 30, '0.20000'),
(4, 31, '3.00000'),
(4, 32, '2.74000'),
(4, 33, '2.30000'),
(4, 34, '7.80000'),
(4, 35, '0.00190'),
(4, 36, '0.00000'),
(4, 37, '0.01100'),
(4, 38, '0.00220'),
(4, 39, '0.00000'),
(4, 40, '0.62000'),
(4, 41, '0.75000'),
(4, 42, '0.00000'),
(4, 43, '6.00000'),
(4, 44, '3.90000'),
(4, 45, '4.80000'),
(4, 46, '2.48000'),
(4, 47, '2.50000'),
(4, 48, '1.70000'),
(4, 49, '2.20000'),
(4, 50, '2.35000');

-- --------------------------------------------------------

--
-- Table structure for table `comporte`
--

CREATE TABLE `comporte` (
  `ID_aliments` int(11) NOT NULL,
  `ID_repas` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comporte`
--

INSERT INTO `comporte` (`ID_aliments`, `ID_repas`, `Quantite`) VALUES
(25, 1, 10),
(30, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `est_compose_de`
--

CREATE TABLE `est_compose_de` (
  `ID_plat` int(11) NOT NULL,
  `ID_aliment` int(11) NOT NULL,
  `Ratio` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `est_compose_de`
--

INSERT INTO `est_compose_de` (`ID_plat`, `ID_aliment`, `Ratio`) VALUES
(50, 2, '0.50000'),
(50, 3, '0.50000');

-- --------------------------------------------------------

--
-- Table structure for table `repas`
--

CREATE TABLE `repas` (
  `ID_repas` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repas`
--

INSERT INTO `repas` (`ID_repas`, `Date`, `Type`, `Login`) VALUES
(1, '2021-03-27 07:10:10', 'Petit Déjeuner', 'issam.kassel@etu.imt-lille-douai.fr'),
(2, '2021-03-27 11:25:41', 'Déjeuner', 'issam.kassel@etu.imt-lille-douai.fr'),
(3, '2021-03-27 19:25:41', 'Diner', 'issam.kassel@etu.imt-lille-douai.fr'),
(4, '2021-03-28 08:00:13', 'Petit Déjeuner', 'zouheir.touil@etu.imt-lille-douai.fr'),
(5, '2021-03-28 12:45:00', 'Dejeuner', 'zouheir.touil@etu.imt-lille-douai.fr'),
(6, '2021-03-28 16:15:44', 'Goûter', 'zouheir.touil@etu.imt-lille-douai.fr');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `Login` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` varchar(50) NOT NULL,
  `Niveau_sportif` int(11) DEFAULT NULL,
  `Besoin_energetique` int(11) DEFAULT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Login`, `Age`, `Sexe`, `Niveau_sportif`, `Besoin_energetique`, `Nom`, `Prenom`) VALUES
('issam.kassel@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'KASSEL', 'Mohammed Issam'),
('jiaqi.gao@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'GAO', 'Jiaqi'),
('lucas.faby@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'FABY', 'Lucas'),
('maya.didon@etu.imt-lille-douai.fr', 21, 'femme', NULL, NULL, 'DIDON', 'Maya'),
('mehdi.lamatig@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'LAMATIG', 'Mehdi'),
('mehdi.moulay.berkchi@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'MOULAY BERKCHI', 'Mehdi'),
('nassim.bouaziz@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'BOUAZIZ', 'Nassim'),
('pauline.pichon@etu.imt-lille-douai.fr', 21, 'femme', NULL, NULL, 'PICHON', 'Pauline'),
('pierre.marque@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'MARQUE', 'Pierre'),
('radia.el.hamdouni@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'EL HAMDOUNI', 'Radia'),
('salah.nourelayne@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'NOURELAYNE', 'Salah Eddine'),
('sam.khosrowshahi@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'KHOSROWSHAHI', 'Sam'),
('thomas.coydon@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'COYDON', 'Thomas'),
('thomas.vinchon@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'VINCHON', 'Thomas'),
('xiao.wang@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'WANG', 'Xiao'),
('xuechu.wang@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'WANG', 'Xuechu'),
('yoann.bordin@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'BORDIN', 'Yoann'),
('zhiwei.pei@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'PEI', 'Zhiwei'),
('zouheir.touil@etu.imt-lille-douai.fr', 21, 'homme', NULL, NULL, 'TOUIL', 'Zouheir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliments`
--
ALTER TABLE `aliments`
  ADD PRIMARY KEY (`ID_aliments`);

--
-- Indexes for table `apport`
--
ALTER TABLE `apport`
  ADD PRIMARY KEY (`ID_apport`);

--
-- Indexes for table `a_pour_apport`
--
ALTER TABLE `a_pour_apport`
  ADD PRIMARY KEY (`ID_apport`,`ID_aliments`),
  ADD KEY `A_pour_apport_ALIMENTS1_FK` (`ID_aliments`);

--
-- Indexes for table `comporte`
--
ALTER TABLE `comporte`
  ADD PRIMARY KEY (`ID_aliments`,`ID_repas`),
  ADD KEY `Comporte_REPAS1_FK` (`ID_repas`);

--
-- Indexes for table `est_compose_de`
--
ALTER TABLE `est_compose_de`
  ADD PRIMARY KEY (`ID_plat`,`ID_aliment`),
  ADD KEY `est_compose_de_ibfk_2` (`ID_aliment`);

--
-- Indexes for table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`ID_repas`),
  ADD KEY `REPAS_UTILISATEURS0_FK` (`Login`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aliments`
--
ALTER TABLE `aliments`
  MODIFY `ID_aliments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `apport`
--
ALTER TABLE `apport`
  MODIFY `ID_apport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `repas`
--
ALTER TABLE `repas`
  MODIFY `ID_repas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a_pour_apport`
--
ALTER TABLE `a_pour_apport`
  ADD CONSTRAINT `A_pour_apport_ALIMENTS1_FK` FOREIGN KEY (`ID_aliments`) REFERENCES `aliments` (`ID_aliments`),
  ADD CONSTRAINT `A_pour_apport_APPORT0_FK` FOREIGN KEY (`ID_apport`) REFERENCES `apport` (`ID_apport`);

--
-- Constraints for table `comporte`
--
ALTER TABLE `comporte`
  ADD CONSTRAINT `Comporte_ALIMENTS0_FK` FOREIGN KEY (`ID_aliments`) REFERENCES `aliments` (`ID_aliments`),
  ADD CONSTRAINT `Comporte_REPAS1_FK` FOREIGN KEY (`ID_repas`) REFERENCES `repas` (`ID_repas`);

--
-- Constraints for table `est_compose_de`
--
ALTER TABLE `est_compose_de`
  ADD CONSTRAINT `est_compose_de_ibfk_1` FOREIGN KEY (`ID_plat`) REFERENCES `aliments` (`ID_aliments`) ON UPDATE CASCADE,
  ADD CONSTRAINT `est_compose_de_ibfk_2` FOREIGN KEY (`ID_aliment`) REFERENCES `aliments` (`ID_aliments`) ON UPDATE CASCADE;

--
-- Constraints for table `repas`
--
ALTER TABLE `repas`
  ADD CONSTRAINT `REPAS_UTILISATEURS0_FK` FOREIGN KEY (`Login`) REFERENCES `utilisateurs` (`Login`) ON UPDATE CASCADE;








