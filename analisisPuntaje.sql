-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2017 a las 01:51:22
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `analisis_puntaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `algebra`
--

CREATE TABLE IF NOT EXISTS `algebra` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `algebra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aritmetica`
--

CREATE TABLE IF NOT EXISTS `aritmetica` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `aritmetica`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biologia`
--

CREATE TABLE IF NOT EXISTS `biologia` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `biologia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `examen` varchar(10) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `examen` (`examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `examen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica`
--

CREATE TABLE IF NOT EXISTS `fisica` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `fisica`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geometria`
--

CREATE TABLE IF NOT EXISTS `geometria` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `geometria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica`
--

CREATE TABLE IF NOT EXISTS `quimica` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `quimica`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razonamiento_matematico`
--

CREATE TABLE IF NOT EXISTS `razonamiento_matematico` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `razonamiento_matematico`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razonamiento_verbal`
--

CREATE TABLE IF NOT EXISTS `razonamiento_verbal` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `razonamiento_verbal`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trigonometria`
--

CREATE TABLE IF NOT EXISTS `trigonometria` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `n_examen` varchar(10) NOT NULL,
  `buenas` int(11) NOT NULL,
  `malas` int(11) NOT NULL,
  `no_contestadas` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `n_examen` (`n_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `trigonometria`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `algebra`
--
ALTER TABLE `algebra`
  ADD CONSTRAINT `algebra_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `aritmetica`
--
ALTER TABLE `aritmetica`
  ADD CONSTRAINT `aritmetica_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `biologia`
--
ALTER TABLE `biologia`
  ADD CONSTRAINT `biologia_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fisica`
--
ALTER TABLE `fisica`
  ADD CONSTRAINT `fisica_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `geometria`
--
ALTER TABLE `geometria`
  ADD CONSTRAINT `geometria_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `quimica`
--
ALTER TABLE `quimica`
  ADD CONSTRAINT `quimica_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `razonamiento_matematico`
--
ALTER TABLE `razonamiento_matematico`
  ADD CONSTRAINT `razonamiento_matematico_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `razonamiento_verbal`
--
ALTER TABLE `razonamiento_verbal`
  ADD CONSTRAINT `razonamiento_verbal_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trigonometria`
--
ALTER TABLE `trigonometria`
  ADD CONSTRAINT `trigonometria_ibfk_1` FOREIGN KEY (`n_examen`) REFERENCES `examen` (`examen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
