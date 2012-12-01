-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2012 a las 13:24:34
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.3.15

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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `longitud` float DEFAULT NULL,
  `latitud` float DEFAULT NULL,
  `paisidpais` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKciudad870850` (`paisidpais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstadoNiño`
--

CREATE TABLE IF NOT EXISTS `EstadoNiño` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niño`
--

CREATE TABLE IF NOT EXISTS `niño` (
  `idniño` int(10) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `fechanacimiento` date NOT NULL,
  `ciudadid` int(10) NOT NULL,
  `EstadoNiñoid` int(10) NOT NULL,
  PRIMARY KEY (`idniño`),
  KEY `FKniño352757` (`ciudadid`),
  KEY `FKniño943030` (`EstadoNiñoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `idpais` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rasgoniño`
--

CREATE TABLE IF NOT EXISTS `rasgoniño` (
  `valor` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `niñoidniño` int(10) NOT NULL,
  `tiporasgoid` int(10) NOT NULL,
  KEY `FKrasgoniño696666` (`niñoidniño`),
  KEY `FKrasgoniño989012` (`tiporasgoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `idreporte` int(10) NOT NULL AUTO_INCREMENT,
  `niñoidniño` int(10) DEFAULT NULL,
  `ciudadid` int(10) DEFAULT NULL,
  PRIMARY KEY (`idreporte`),
  KEY `FKreporte969038` (`niñoidniño`),
  KEY `FKreporte400054` (`ciudadid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporasgo`
--

CREATE TABLE IF NOT EXISTS `tiporasgo` (
  `nombrerasgo` varchar(255) COLLATE utf8_bin NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FKciudad870850` FOREIGN KEY (`paisidpais`) REFERENCES `pais` (`idpais`);

--
-- Filtros para la tabla `niño`
--
ALTER TABLE `niño`
  ADD CONSTRAINT `FKniño943030` FOREIGN KEY (`EstadoNiñoid`) REFERENCES `EstadoNiño` (`id`),
  ADD CONSTRAINT `FKniño352757` FOREIGN KEY (`ciudadid`) REFERENCES `ciudad` (`id`);

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
