-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 déc. 2021 à 13:26
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(13, 'zjkdhdq', 17, '2021-11-27 14:24:16'),
(12, 'allezzz', 17, '2021-11-27 14:19:44'),
(11, 'hello', 17, '2021-11-27 14:07:12'),
(10, 'holahla', 17, '2021-11-27 14:01:44'),
(9, 'eghdgjd', 17, '2021-11-27 13:59:08'),
(8, 'hehejk', 17, '2021-11-27 13:57:01'),
(14, 'lalala', 17, '2021-11-27 14:32:24'),
(15, 'allezla', 17, '2021-11-27 14:37:26'),
(16, 'dsfqnklsdfjlfk', 17, '2021-11-27 14:37:48'),
(17, 'supermysql', 17, '2021-11-27 14:38:21'),
(18, 'Ca marche ?', 39, '2021-11-28 17:23:56'),
(19, 'hey', 39, '2021-11-28 17:27:34'),
(20, 'aaa', 39, '2021-11-28 17:31:23'),
(21, ':)', 39, '2021-11-28 17:40:10'),
(22, ':=', 39, '2021-11-28 17:40:25'),
(23, 'Hey', 48, '2021-12-01 08:43:08'),
(24, 'hola', 48, '2021-12-01 08:43:21'),
(25, 'test', 48, '2021-12-01 08:44:42'),
(26, 'hey', 48, '2021-12-01 08:49:00'),
(27, 'Lolo le veau', 67, '2021-12-01 12:46:32'),
(28, 'vive le cosmos <3\r\n', 67, '2021-12-01 12:46:56'),
(29, 'gnÃ©', 67, '2021-12-01 12:47:16');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'boris', 'boris'),
(44, 'dr', '$2y$10$vl2/mntqBNR.IK/FGs492uCLL4syGCGqszL/96hovPNxD9vojAIqy'),
(43, 'bv', '$2y$10$ivqXKCBfrFfvk4NE435G2uAiHm3odHYOek5IkIM8o.agksfJUZkK6'),
(42, 'ouane', '$2y$10$OUbNFk1ZhSYQOM5rMTZ7nORoN/CxnzQaIawNCtDDLPjqqDhn.PF6a'),
(41, 'lastone', '$2y$10$wQ6aONw7Kb/yHHH.o6FKNeJCxVCuWbuk7B5JjwhNdXw.6LYKRtVp6'),
(40, 'p', '$2y$10$uuBG15yCtesykufgcKfJ0eyeeuJkzEV5AWQ5yDUiqKZtG4JJYdBne'),
(39, 'pm', '$2y$10$.9U5WMas9NK2HhRc0qkJw.OjrAJGO8RVNvIHSI1GKNj4HmnpDQ5N6'),
(38, 'hi', '$2y$10$pPFcuB2jpEIpDfCGinforuMOKUuX63M09s067TXunQEXvSQqlvWWC'),
(37, 'bob', '$2y$10$FNs7Fewil1.RopfsjzspkeptZzRqLhl.YawmF1fX5ipXqll2XQHpW'),
(17, 'wawe', '$2y$10$kj4TBVUMG4PvB8lw3mE.1e8zdfWxf2MqOiD1Lwgv12IcRz3o.oYHi'),
(36, 'ho', '$2y$10$nLJPr5PeEmUz4Lk6vzcece4vl1J0Goc7OZEIEyjcxmdzEUUnHTDa.'),
(35, 'hey', '$2y$10$wx5wlXtRsIUGEDSu9FxUe.i0d6IuMD70zRHqFvSJ4YWLwiXraeTxm'),
(34, 'tib', '$2y$10$JpAkD531rgeX0SKDXHCn0.36SZOsYVmzLxwIyFl2OtAHtl7Qr9lKy'),
(33, 'allez', '$2y$10$QQuSbsOiw0bx.njuBy5lwOkPwFMSXLm8gTP.Mp6pmk/scyKYTbzVm'),
(32, 'letest', '$2y$10$Qj1O.v/o1D9PH0uX3QtMy.iYEOpZxGryZsqTpwin4rDNH4H6L2sbC'),
(31, 'c', '$2y$10$rQRH./nzR9bGrgsqvSMlXO5cnH4ewJoIGjCKJQjS5ShrmQIBY39zy'),
(30, 'b', '$2y$10$yzn6VW.7CZ3x0dHuSoI3k.4hIMlR59IKera.O/d90MJlqT2ZRl6sa'),
(29, 'a', '$2y$10$oYhGCKPn5ePBKmMpb1UBuOxdbs9tiYl78Pwh5VW1d82oG2eFVXPKO'),
(45, 'try', '$2y$10$so5xbKJznu3i8fP1oDdI.ue1TcKOIZaROPW8DcMos7eacNUlda9Aa'),
(46, 'Joh', '$2y$10$79g07ZGfhhFuvAhHNlwH1ug6atXH3hPdhVVkEkGgdKLoTjZ0wvXn.'),
(47, '', '$2y$10$sr.E.GgDk13acXIRBVYHNewxPcU8.FSRVDUTLd.KxvtfWyDNV4H7m'),
(48, 'bu', '$2y$10$kCfSwAuEeXumo4AMRHYjk.cHTKcpN7XSwVpjhnM/LODVIUU0zur3y'),
(49, 'bv', '$2y$10$GooAJq4VSs.hcU2vrAB0Q.fJE8AdIviE5BOGtfUorFHMNj2A/B7D6'),
(50, 'bd', '$2y$10$IsoIU/Mm8Ji6jK.f/TjHU.db.Xaj1jgxTt5qTNVGXYOu0MaI1yLkq'),
(51, '', '$2y$10$rAv9pvzF0WBu/fIuZAuvwerjDTpKS4SU0kwsGr1N4T1Q4s6H2fA3S'),
(52, 'gf', '$2y$10$EtC9psTluJ1FhJtpqKVuReXSAvNGTxawj3lFCPVp1x0D/7bbEWyVO'),
(53, 'tr', '$2y$10$jZilL..JWZzaG88wfj/dHO/E1kDPCRsWxapm.hOcNDfKOicHny9Ci'),
(54, 'tf', '$2y$10$RfYgcsH3UAtnNkvsq3v18.YSi0rEYST2MgLSVT6OkG3rYgXrvLe7.'),
(55, 'jean', '$2y$10$OdhX38LTHADC/XTp0CveL.R4/QgHFNrNhrrsxKvNjQTHFrDHViy7i'),
(56, 'jojo', '$2y$10$TQijiFuvZHEtKqIWc9GhkeCAzms3OsaFrS4KbQY3DG2cTj25uuf4K'),
(57, 'jaja', '$2y$10$EMrteYfidb17OEIKNf5dx.bIuodQ8S1Int1yh4WvSHPQjAmFyMfvK'),
(58, 'qs', '$2y$10$klOh49XbJ.WmaFhIvhWSauJOEyWS.VsjcBz6Eb1FcNd/lB.9FU/8a'),
(59, 'sd', '$2y$10$RUm6PZs3ifYtI03LDQ9sAO9wE76zke48e6Bco0/EdvFwldWBzMtZi'),
(60, 'fd', '$2y$10$iNTi8cnwtJNNnaxcr2Ktf.EH2EoJF6YPam6SPoVu9B7ha2LVi64ta'),
(61, 'jk', '$2y$10$v7UPwKmZ0.omhYgRiucSAuwjlWqwkTPtSSuivi2EeATkUyAIgBmG2'),
(62, 'az', '$2y$10$DWQnLNJ.0j6uAPJuNNUIhu52/uvQMU9ky41FxC.m5JLf5sKQYdDnm'),
(63, 'ml', '$2y$10$W.PWsMEBbyihGQV9GxrPfuAt6LYGSda6a4hRnHbqfp745ldNtQabG'),
(64, 'cc', '$2y$10$r658rO06gH7ECzsE2hXMd.g5xz9HnS3lbBnIZ9b0ooF1OPOvVaBSO'),
(65, 'tom', '$2y$10$ryR3oHBN98SYCtoTRLgtPewccfM4KKR2K161O9biYXp.8MQ2PO2nW'),
(66, 'tom', '$2y$10$hfaLArjgQNUHHqc/eyuG4.OhISA3cT5sbYAH2B3I3RkNg2B2Ef/FG'),
(67, 'po', '$2y$10$7aHT1kzcV6nbHV/vDHl1Du5/0FEvrhtM8mPSJdZKY7PSybnFKJugq'),
(68, 'cxw', '$2y$10$pCCFkBkseLp5z3cNV7sY7ub22mMkKl/B4K5n8RmdzDOOTd4S4momS'),
(69, 'pa', '$2y$10$fK50wCoPqqseS/kzHygCv.XiljF7m1bTQOkUgi0aS0toTM30tbUc.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
