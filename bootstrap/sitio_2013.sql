-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-12-2013 a las 05:51:00
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sitio_2013`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hora` varchar(20) NOT NULL,
  `cliente_ip` varchar(20) NOT NULL,
  `navegador` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcar la base de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `hora`, `cliente_ip`, `navegador`) VALUES
(1, '28/12/13-04:53:53', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(2, '28/12/13-04:54:12', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(3, '28/12/13-04:58:18', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(4, '28/12/13-05:12:50', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(5, '28/12/13-05:12:54', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(6, '28/12/13-05:13:35', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(7, '28/12/13-05:26:07', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(8, '28/12/13-05:37:41', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(9, '28/12/13-05:40:48', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(10, '28/12/13-05:40:50', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(11, '28/12/13-05:41:01', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(12, '28/12/13-05:42:45', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(13, '28/12/13-05:43:01', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(14, '28/12/13-05:43:50', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(15, '28/12/13-05:44:54', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(16, '28/12/13-05:45:15', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(17, '28/12/13-05:46:07', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(18, '28/12/13-05:46:08', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(19, '28/12/13-05:46:11', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(20, '28/12/13-05:46:25', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(21, '28/12/13-05:46:26', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(22, '28/12/13-05:46:32', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(23, '28/12/13-05:46:33', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(24, '28/12/13-05:46:34', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(25, '28/12/13-05:46:34', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(26, '28/12/13-05:46:37', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(27, '28/12/13-05:46:37', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(28, '28/12/13-05:46:38', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(29, '28/12/13-05:46:38', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(30, '28/12/13-05:46:38', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(31, '28/12/13-05:46:39', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(32, '28/12/13-05:46:39', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(33, '28/12/13-05:46:39', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(34, '28/12/13-05:46:40', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(35, '28/12/13-05:46:40', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(36, '28/12/13-05:46:41', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(37, '28/12/13-05:47:18', '::1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.1 (KHTML, like'),
(38, '28/12/13-05:48:56', '127.0.0.1', 'Java/1.7.0_17'),
(39, '28/12/13-05:48:56', '127.0.0.1', 'Java/1.7.0_17'),
(40, '28/12/13-05:48:56', '127.0.0.1', 'Java/1.7.0_17'),
(41, '28/12/13-05:50:06', '::1', 'Mozilla/5.0 (X11; U; Linux i686; es-CL; rv:1.9.2.8) Gecko/20');
