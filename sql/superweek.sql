-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 23 mai 2023 à 09:39
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `superweek`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `content`, `id_user`) VALUES
(1, 'buritos', 'c\'est un livre sur les buritos !!', 31),
(2, 'guerre et paix', 'i Don\'t want peace ! I want Problems !! Always !!', 31),
(3, 'j\'aime le poulet ', 'miam miam miam', 32),
(4, 'la caverne de la rose d\'or', 'ezfezff fz ezf ezfez fezfezfds fzefzfezf ezfezfezojf fezfjezf fzef zfezf ezf ezfezfjezof ezef ezjofezfn ezfojezf', 31),
(5, 'Knuckles of uganda', 'Do you know Da Way ? ', 31),
(6, 'dadad', 'fezfgzef', 39);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `first_name`, `last_name`, `password`) VALUES
(1, 'reynold.schumm@gmail.com', 'Reynold', 'Schumm', '$2y$10$rlWS9dO0dxCrWp6xuowkf.HMmrtraiXjrfw5Sswho5cSjgztBJEfW'),
(2, 'romaine.bartoletti@gmail.com', 'Romaine', 'Bartoletti', '$2y$10$Mh6h7gz4naX8XkWzY4N79uUvJpOEkUxj0d3WF4r2sAOlS3lLyknlO'),
(3, 'sarina.schumm@gmail.com', 'Sarina', 'Schumm', '$2y$10$ifi8DHCZHwO9hBzhcceE1uCCg5Ay8QYHc5Hly3C6r2ENDYxvUYIB6'),
(4, 'delpha.effertz@gmail.com', 'Delpha', 'Effertz', '$2y$10$VKZjYQmAHw5k5r5PSATQYuDyfeNdRbJNVzuztjPb/czdJ/fhYypPG'),
(5, 'garrett.harber@gmail.com', 'Garrett', 'Harber', '$2y$10$euC2kVjYQthZq9r14s5L9e8mu0dm5oqYEFZ5YUCGK0HYBasxltVwi'),
(6, 'virgie.friesen@gmail.com', 'Virgie', 'Friesen', '$2y$10$UXZHPdJdYb29pembvqbnvOLJA8MEY9I4pDVVhR4MTx5lYX5k1s/MO'),
(7, 'mohammad.steuber@gmail.com', 'Mohammad', 'Steuber', '$2y$10$..NsyWREkOaxGIN5DQxoLezuctegm/51Zld9dG/CaOpqNvCJi/tja'),
(8, 'harley.pacocha@gmail.com', 'Harley', 'Pacocha', '$2y$10$GfXkg/yc51MSjMZSAeRpA.mjgXb3HqfnkLaTm/KBnYbcP3wlLw9mK'),
(9, 'roberto.fadel@gmail.com', 'Roberto', 'Fadel', '$2y$10$7/PHaC4Bvi1RWbEC8UffcumZtHEf4EzXutCkjY7mjq/6s74rTwM36'),
(10, 'sigurd.williamson@gmail.com', 'Sigurd', 'Williamson', '$2y$10$v3wkRMwWldR4hNV1eEpYV.oAEohBHFuAklo2N7CHsUapsUzCw0Tw.'),
(11, 'laila.will@gmail.com', 'Laila', 'Will', '$2y$10$R.nI876YiEoMIRbym.ro4eiFpYzvWI0JdNT5t.koqxBxmxPUHHN5W'),
(12, 'hiram.wisoky@gmail.com', 'Hiram', 'Wisoky', '$2y$10$p6GNKd8SzztznCg5qSiCmuomoZAZPTFuHEnwJR5owTO3w4ennsfXm'),
(13, 'claudia.corwin@gmail.com', 'Claudia', 'Corwin', '$2y$10$tXl4zzy/1VwrhlZciB.CO.S6Cnk/eETyo6yLlTWZj9EmY2R6LVlv2'),
(14, 'ali.kautzer@gmail.com', 'Ali', 'Kautzer', '$2y$10$pgMUSStsRTG3gauKT9kXl.7oUgCbysJiKxsOe/6lLwYYIOU2V0rNe'),
(15, 'duncan.flatley@gmail.com', 'Duncan', 'Flatley', '$2y$10$tIHkmX5gMViXPQP22JCCk.feXyJ9.TQ0wxqVFyqYP/cWOyW8NVmP2'),
(16, 'elmacho@dino.com', 'Dio', 'Brando', '$2y$10$wdWlF7U/qA5D.gnE88RxYO7be219CYPpLNnQFjphYKGPZZyObo74W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
