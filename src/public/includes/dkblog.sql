-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 28 Février 2015 à 11:16
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.4-14+deb7u10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dkblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `illustration` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'service_client.jpg',
  `categorie` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'marketing',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `description`, `contenu`, `date`, `illustration`, `categorie`) VALUES
(7, 'Mon titre numéro 1', 'Le Web donne à chacun accès à une infinité de ressources de façon immédiate et ciblée. ', 'Le Web donne à chacun accès à une infinité de ressources de façon immédiate et ciblée. Quel que soit le service ou le produit recherché, il est possible de trouver, non pas un, mais des dizaines de sites qui répondent avec précision au besoin spécifique. </br>\r\nFaites preuve de transparence</br>\r\nEn donnant à vos visiteurs la possibilité d’évaluer et de commenter vos services, vous affichez publiquement ce que l’on pense de vous. Vous pouvez intégrer une application de commentaires ou encore d’évaluation afin de leur permettre de s’exprimer. Afficher un tableau de prix ou de comparaison pourrait également s’avérer judicieux. Enfin, présentez votre équipe – il est toujours rassurant de mettre un visage sur un interlocuteur virtuel, rédigez une page « à propos » détaillée et mettez en valeur les articles de presse qui vous mentionnent.</br>\r\nCes outils ne contribuent pas directement à améliorer votre service client à proprement parler, mais constituent un moyen efficace pour établir votre réputation en tant qu’entreprise transparente et honnête. </br>N’est-ce pas là le point de départ de toute relation professionnelle durable ?\r\n', '2014-12-31 09:44:15', 'service_client.jpg', 'marketing'),
(8, 'Mon titre numéro 1', 'Le Web donne à chacun accès à une infinité de ressources de façon immédiate et ciblée.', 'Le Web donne à chacun accès à une infinité de ressources de façon immédiate et ciblée. Quel que soit le service ou le produit recherché, il est possible de trouver, non pas un, mais des dizaines de sites qui répondent avec précision au besoin spécifique. </br>\r\nFaites preuve de transparence</br>\r\nEn donnant à vos visiteurs la possibilité d’évaluer et de commenter vos services, vous affichez publiquement ce que l’on pense de vous. Vous pouvez intégrer une application de commentaires ou encore d’évaluation afin de leur permettre de s’exprimer. Afficher un tableau de prix ou de comparaison pourrait également s’avérer judicieux. Enfin, présentez votre équipe – il est toujours rassurant de mettre un visage sur un interlocuteur virtuel, rédigez une page « à propos » détaillée et mettez en valeur les articles de presse qui vous mentionnent.</br>\r\nCes outils ne contribuent pas directement à améliorer votre service client à proprement parler, mais constituent un moyen efficace pour établir votre réputation en tant qu’entreprise transparente et honnête. </br>N’est-ce pas là le point de départ de toute relation professionnelle durable ?\r\n', '2014-12-31 09:44:15', 'service_client.jpg', 'marketing'),
(25, 'Nouveau !! Une page blog ', 'Nouveau !! Une page blog ', 'Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog Nouveau !! Une page blog ', '2015-02-14 13:25:29', 'service_client.jpg', 'marketing');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
