-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 28 août 2023 à 09:37
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `subject` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`nom`, `mail`, `subject`, `message`) VALUES
('nom', 'mail', 'subject', 'message'),
('nom', 'mail', 'subject', 'message'),
('Tana Mullen', 'rybuhaces@mailinator.com', 'Ipsam provident et ', 'Numquam quis nobis e'),
('Tana Mullen', 'rybuhaces@mailinator.com', 'Ipsam provident et ', 'Numquam quis nobis e'),
('Leilani Harrison', 'qotajuv@mailinator.com', 'Vel reprehenderit a', 'Sint ut velit except'),
('mohamed', 'mohamedyani2019@gmail.com', 'iè_o_çp', 'qsdzaf azfd zaf\'cad zd az\\'),
('mohamed_ azezaf', 'mohamedyani2019@gmail.com', 'iè_o_çp-azdazf ', ' zadzaeaze aeaz eza za reae feaf eafa'),
('mohamed_ azezaf', 'mohamedyani2019@gmail.com', 'iè_o_çp-azdazf ', ' zadzaeaze aeaz eza za reae feaf eafa'),
('mohamed_ azezaf', 'mohamedyani2019@gmail.com', 'iè_o_çp-azdazf ', ' zadzaeaze aeaz eza za reae feaf eafa'),
('mohamed_ azezaf', 'mohamedyani2019@gmail.com', 'iè_o_çp-azdazf ', ' zadzaeaze aeaz eza za reae feaf eafa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
