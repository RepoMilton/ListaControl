-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2020 a las 09:25:24
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `codest` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET swe7 NOT NULL,
  `apellido` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechanac` date NOT NULL,
  `genero` varchar(30) CHARACTER SET latin1 NOT NULL,
  `dni` char(8) CHARACTER SET latin1 NOT NULL,
  `mail` varchar(60) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(60) CHARACTER SET latin1 NOT NULL,
  `telefono` char(9) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`codest`, `nombre`, `apellido`, `fechanac`, `genero`, `dni`, `mail`, `direccion`, `telefono`) VALUES
(1745, 'Alexander', 'Mendoza Aquije', '1998-04-10', 'Masculino', '25362895', 'alexander14@hotmail.com', 'san vicente', 'san vicen'),
(15236, 'Maria', 'Vera', '2000-09-19', 'Femenino', '58696748', 'vera58@gmail.com', 'lima', '253698749');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`codest`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
