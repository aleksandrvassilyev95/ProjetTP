-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 21 oct. 2019 à 11:00
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bug`
--

-- --------------------------------------------------------

--
-- Structure de la table `bug`
--

CREATE TABLE `bug` (
  `id` int(100) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bug`
--

INSERT INTO `bug` (`id`, `description`, `titre`, `statut`, `date`) VALUES
(1, 'Le formulaire ne s\'affiche pas correctement dans une application.', 'Le formulaire ne s\'affiche pas', 0, '2019-10-18 13:28:22'),
(2, 'Le bouton d\'activation d\'application ne fonctionne pas quand on l\'appuie  ', 'Le bouton ne fonctionne pas', 0, '2019-10-18 13:28:22'),
(4, 'A cause de votre application ma femme a commencé de faire la programmation', 'Votre application a cassé ma vie', 0, '2019-10-18 13:28:22'),
(161, 'Apllication ne function pas ', 'Bug d\'application', 0, '2019-10-21 06:56:33'),
(168, '<script text=\"text/javascript\">alert(\'Hacked\')</script>', 'Bugtest', 0, '2019-10-21 07:52:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bug`
--
ALTER TABLE `bug`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
