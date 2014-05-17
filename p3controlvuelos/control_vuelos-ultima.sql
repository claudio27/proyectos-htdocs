-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-08-2013 a las 11:10:11
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `control_vuelos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(10) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `Rut` varchar(10) DEFAULT NULL,
  `Direccion` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Login`, `Pass`, `Nombre`, `Tipo`, `Rut`, `Direccion`) VALUES
(1, 'admin', 'admin', 'Administrador', 1, '111111111', 'control vuelos'),
(2, 'visita', 'visita', 'visitador', 2, '222222222', 'san bernardo 33'),
(3, 'claudio', 'claudio', 'Claudio Serrano', 2, '177777777', 'la florida'),
(4, 'nadia', 'nadia', 'Nadia Flores', 2, '177733777', 'puente alto'),
(5, 'anamaria', '1234', 'Ana Maria', 2, '112223334', 'calle maria'),
(6, 'juanito', '1234', 'juanito perez', 2, '221112223', 'calle juanito'),
(7, 'juanito', '1234', 'juanito perez', 2, '221112223', 'calle juanito'),
(9, 'lalala', '1234', 'lalelilolu', 2, '331112223', 'lelilulu'),
(10, 'lelele', '1234', 'lalalala', 2, '123334442', 'calle lalalala'),
(11, 'usuario', '1234', 'usuario1', 2, '112234445', 'calle el usuari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_vuelo`
--

CREATE TABLE IF NOT EXISTS `usuario_vuelo` (
  `Id_viaje` int(11) DEFAULT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  `Asiento` int(11) DEFAULT NULL,
  KEY `fk_vuelo` (`Id_viaje`),
  KEY `fk_usuario` (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario_vuelo`
--

INSERT INTO `usuario_vuelo` (`Id_viaje`, `Id_usuario`, `Asiento`) VALUES
(3, 1, 3),
(4, 2, 4),
(4, 4, 6),
(5, 4, 5),
(5, 3, 6),
(4, 3, 2),
(3, 4, 7),
(3, 3, 1),
(4, 5, 8),
(4, 4, 10),
(4, 4, 1),
(3, 4, 9),
(3, 3, 6),
(4, 11, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE IF NOT EXISTS `vuelo` (
  `Id_vuelo` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Destino` varchar(15) DEFAULT NULL,
  `Origen` varchar(15) DEFAULT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Capacidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_vuelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`Id_vuelo`, `Fecha`, `Hora`, `Destino`, `Origen`, `Valor`, `Capacidad`) VALUES
(3, '2013-08-03', '20:00:00', 'Pto Mont', 'Santiago', 20000, 10),
(4, '2013-08-03', '20:00:00', 'Valdivia', 'Santiago', 20000, 10),
(5, '2013-08-03', '20:00:00', 'San Pedro', 'Santiago', 84000, 10),
(6, '2013-08-03', '20:00:00', 'Punta Arenas', 'Santiago', 70000, 10);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `usuario_vuelo`
--
ALTER TABLE `usuario_vuelo`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`),
  ADD CONSTRAINT `fk_vuelo` FOREIGN KEY (`Id_viaje`) REFERENCES `vuelo` (`Id_vuelo`);
