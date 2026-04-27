-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 31 oct. 2023 à 15:48
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `created_date`, `updated_date`, `author`, `picture`) VALUES
(1, 'Defense the travel !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in egestas mauris, vitae vestibulum orci. Fusce ac euismod arcu, feugiat tristique elit. Curabitur pharetra dolor placerat lectus lacinia hendrerit. Nulla sit amet commodo tortor, nec faucibus ex. Sed commodo consequat diam, et pulvinar leo suscipit in. Donec ut magna at nulla lacinia maximus. Maecenas id nisl eget tellus tincidunt semper. In commodo dolor purus, sit amet vestibulum dui volutpat a. Phasellus non arcu nec nulla rhoncus auctor. Suspendisse lobortis vel leo id viverra. Pellentesque lobortis metus vel eros viverra, nec convallis risus hendrerit.', '2023-03-06 16:02:04', '2023-03-06 16:02:04', 'Joy', 'https://www-static.cdn-one.com/cmsimages/en_what-is-a-blog-1.png'),
(2, 'How to be more organized...', 'Mauris posuere elementum fringilla. Curabitur ac elit at sapien pellentesque facilisis ut sed felis. In sit amet sapien nec augue iaculis feugiat vitae in leo. Nam auctor justo nec lectus tincidunt, sed tempor quam dictum. Duis vitae ex id ipsum sollicitudin vestibulum ac mattis nisi. Ut ultricies porttitor nisl quis placerat. Nunc ultrices eros id nisi aliquam ullamcorper. Sed pretium diam et dui lacinia, sit amet luctus massa semper. Vivamus purus libero, tristique ut lorem a, tristique ultrices diam. Phasellus non fringilla quam.', '2023-03-12 16:02:04', '2023-03-12 16:02:04', 'Sam', 'https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg'),
(3, 'Designing a good website can be tricky !', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-10-31 14:36:12', '2023-10-31 14:36:12', 'Philippa', 'https://www.redacteur.com/blog/wp-content/uploads/sites/6/2020/07/redacteur-blog-img-une-ecrire-une-actualite-nouvelle-news.jpg'),
(4, 'Driving a new electric car ?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. ', '2023-10-18 13:36:27', '2023-10-18 13:36:27', 'Henry', 'https://www.redacteur.com/blog/wp-content/uploads/sites/6/2020/04/redacteur-blog-img-une-tout-savoir-image-de-marque.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
