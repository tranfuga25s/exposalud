-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
CREATE TABLE IF NOT EXISTS `interesados` (
  `id_interesado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `telefono` text COLLATE utf8_bin NOT NULL,
  `celular` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `curso_biblico_individual` tinyint(1) NOT NULL,
  `curso_biblico_grupal` tinyint(1) DEFAULT NULL,
  `biblia` tinyint(1) DEFAULT NULL,
  `stress` tinyint(1) NOT NULL,
  `psicologia` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `fumar` tinyint(1) DEFAULT NULL,
  `cocina` tinyint(1) DEFAULT NULL,
  `familiar` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_interesado`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=295 ;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
