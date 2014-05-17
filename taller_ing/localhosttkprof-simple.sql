-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-12-2011 a las 01:13:58
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tkprof-db`
--
CREATE DATABASE `tkprof-db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tkprof-db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instruccion`
--

CREATE TABLE IF NOT EXISTS `instruccion` (
  `idinstruccion` int(11) NOT NULL AUTO_INCREMENT,
  `instruccion` varchar(45) DEFAULT NULL,
  `tabla` varchar(100) DEFAULT NULL,
  `campos` varchar(1000) DEFAULT NULL,
  `sesion_idsesion` int(11) NOT NULL,
  `totales_idtotales` int(11) NOT NULL,
  PRIMARY KEY (`idinstruccion`),
  KEY `fk_instruccion_sesion` (`sesion_idsesion`),
  KEY `fk_instruccion_totales1` (`totales_idtotales`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `instruccion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE IF NOT EXISTS `sesion` (
  `idsesion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idsesion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `sesion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totales`
--

CREATE TABLE IF NOT EXISTS `totales` (
  `idtotales` int(11) NOT NULL AUTO_INCREMENT,
  `count` int(11) DEFAULT NULL,
  `cpu` int(11) DEFAULT NULL,
  `elapsed` int(11) DEFAULT NULL,
  `disk` int(11) DEFAULT NULL,
  `query` int(11) DEFAULT NULL,
  `current` int(11) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtotales`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `totales`
--

