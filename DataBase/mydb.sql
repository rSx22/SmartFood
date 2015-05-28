-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Mai 2015 à 22:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `delivery_days`
--

CREATE TABLE IF NOT EXISTS `delivery_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_delivery` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `liked_things`
--

CREATE TABLE IF NOT EXISTS `liked_things` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appreciation` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `liked_things`
--

INSERT INTO `liked_things` (`id`, `menu_id`, `user_id`, `appreciation`) VALUES
(1, 0, 20, '');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menus`
--

INSERT INTO `menus` (`id`, `name`) VALUES
(0, 'Burger');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_order` datetime DEFAULT NULL,
  `date_delivery` datetime DEFAULT NULL,
  `order_details` varchar(45) DEFAULT NULL,
  `order_price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `orders_has_products`
--

CREATE TABLE IF NOT EXISTS `orders_has_products` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  PRIMARY KEY (`orders_id`,`products_id`),
  KEY `fk_orders_has_products_products1_idx` (`products_id`),
  KEY `fk_orders_has_products_orders1_idx` (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `kcal_ind` int(11) DEFAULT NULL,
  `path_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `kcal_ind`, `path_image`) VALUES
(15, 'jesus', '22.33', 'NICE FRITE', 1234, 'images/picture/jesus.JPG'),
(16, 'frite', '22.33', 'NICE FRITE', 234, 'images/picture/frite.jpg'),
(17, 'jesussss', '123â‚¬', 'NICE FRITE', 1234, 'images/picture/jesussss.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `path_avatar` varchar(45) DEFAULT NULL,
  `postal_code` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email_address`, `address`, `city`, `country`, `phone_number`, `gender`, `age`, `path_avatar`, `postal_code`) VALUES
(15, 'Theophane', '956500', 'ywltjvjh@abyssmail.com', '15 rue de la grouxxxx', 'fghj', 'Franceeeee', '0666666777', 'male', 111, 'images/avatar/Theophane.jpg', 0),
(17, 'rooter', '95650a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, 'Theophaneaa', '95650a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/avatar/Theophaneaa.jpg', 0),
(20, '', '00000000', 'benjamin.robert@supinternet.fr', '36 rue parmentier', 'paris', NULL, '0606060606', 'Homme', 25, 'images/avatar/20.jpg', 75001),
(21, '', '00000000', 'blblbl@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75001),
(22, '', '00000000', 'benjamin.c.robert@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75001);

-- --------------------------------------------------------

--
-- Structure de la table `users_has_orders`
--

CREATE TABLE IF NOT EXISTS `users_has_orders` (
  `users_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`orders_id`),
  KEY `fk_users_has_orders_orders1_idx` (`orders_id`),
  KEY `fk_users_has_orders_users_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `orders_has_products`
--
ALTER TABLE `orders_has_products`
  ADD CONSTRAINT `fk_orders_has_products_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_has_products_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users_has_orders`
--
ALTER TABLE `users_has_orders`
  ADD CONSTRAINT `fk_users_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_orders_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
