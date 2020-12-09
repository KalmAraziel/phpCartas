-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2020 a las 05:29:04
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdd_andresruiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE IF NOT EXISTS `datospersonales` (
  `rut` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apppat` varchar(30) DEFAULT NULL,
  `appmat` varchar(30) DEFAULT NULL,
  `domicilio` varchar(30) DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `fechanacimiento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origenes`
--

CREATE TABLE IF NOT EXISTS `origenes` (
  `origen` varchar(30) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `origenes`
--

INSERT INTO `origenes` (`origen`, `descripcion`) VALUES
('tengolucards', 'la mejor tienda de venta de ju');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE IF NOT EXISTS `transacciones` (
  `id` int(11) NOT NULL,
  `rut` varchar(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `factura` int(30) DEFAULT NULL,
  `detalle` varchar(30) DEFAULT NULL,
  `monto` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre_usuario` varchar(30) DEFAULT NULL,
  `clave_acceso` varchar(30) DEFAULT NULL,
  `origen` varchar(30) DEFAULT NULL,
  `nivel_usuario` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_usuario`, `clave_acceso`, `origen`, `nivel_usuario`) VALUES
('andres', '1234', 'tengolucards', '1'),
('cliente', '1234', 'tengolucards', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
