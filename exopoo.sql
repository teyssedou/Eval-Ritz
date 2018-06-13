-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2018 at 03:42 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exopoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL COMMENT 'Ce nom existe déjà',
  `year` int(4) NOT NULL COMMENT 'Quatres chiffres max',
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstName`, `nom`, `year`, `comment`) VALUES
(1, 'Mikael', 'Teyssedou', 1983, 'Appelez moi, Dieu!'),
(2, 'Adrien', 'Mariez', 1988, 'EXCELLENT!!!'),
(5, 'Emile', 'Troccaz', 1996, 'J\'ai rien à dire!'),
(6, 'sophie', 'Quehen', 1992, 'J\'ai faim!!!! Je veux du chocolat'),
(19, 'Elisa', 'Demanez', 1997, 'Ta maman'),
(20, 'Benjamin', 'Mellet', 1995, 'Je suis blond et je le vaut bien'),
(32, 'Nicolas', 'Ferreira', 1989, 'Je suis portuguais et je vous merde'),
(33, 'Tristan', 'Chausson', 1980, 'Salut les musclés'),
(39, 'Charlotte', 'Weiber', 1234, 'Oui Maman!!'),
(50, 'Clark', 'Superman', 1893, 'OLA'),
(53, 'Christophe', 'Doignon', 1985, 'J\'ai tout pété');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
