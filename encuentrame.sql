-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2012 a las 15:23:15
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `encuentrame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `nombre` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `longitud` float DEFAULT NULL,
  `latitud` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niño`
--

CREATE TABLE IF NOT EXISTS `niño` (
  `comentario` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `idniño` int(10) NOT NULL AUTO_INCREMENT,
  `ciudadid` int(10) NOT NULL,
  PRIMARY KEY (`idniño`),
  KEY `FKniño352757` (`ciudadid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `idpais` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ciudadid` int(10) DEFAULT NULL,
  PRIMARY KEY (`idpais`),
  KEY `FKpais400439` (`ciudadid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rasgoniño`
--

CREATE TABLE IF NOT EXISTS `rasgoniño` (
  `valor` varchar(255) DEFAULT NULL,
  `niñoidniño` int(10) NOT NULL,
  `tiporasgoid` int(10) NOT NULL,
  KEY `FKrasgoniño696666` (`niñoidniño`),
  KEY `FKrasgoniño989012` (`tiporasgoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `comentario` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `idreporte` int(10) NOT NULL AUTO_INCREMENT,
  `niñoidniño` int(10) DEFAULT NULL,
  `ciudadid` int(10) DEFAULT NULL,
  PRIMARY KEY (`idreporte`),
  KEY `FKreporte969038` (`niñoidniño`),
  KEY `FKreporte400054` (`ciudadid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporasgo`
--

CREATE TABLE IF NOT EXISTS `tiporasgo` (
  `nombrerasgo` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `niño`
--
ALTER TABLE `niño`
  ADD CONSTRAINT `FKniño352757` FOREIGN KEY (`ciudadid`) REFERENCES `ciudad` (`id`);

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `FKpais400439` FOREIGN KEY (`ciudadid`) REFERENCES `ciudad` (`id`);

--
-- Filtros para la tabla `rasgoniño`
--
ALTER TABLE `rasgoniño`
  ADD CONSTRAINT `FKrasgoniño989012` FOREIGN KEY (`tiporasgoid`) REFERENCES `tiporasgo` (`id`),
  ADD CONSTRAINT `FKrasgoniño696666` FOREIGN KEY (`niñoidniño`) REFERENCES `niño` (`idniño`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `FKreporte400054` FOREIGN KEY (`ciudadid`) REFERENCES `ciudad` (`id`),
  ADD CONSTRAINT `FKreporte969038` FOREIGN KEY (`niñoidniño`) REFERENCES `niño` (`idniño`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
