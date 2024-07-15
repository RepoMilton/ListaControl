-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2020 a las 20:58:38
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista_cotejo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `codasig` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `año` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codperm` int(11) NOT NULL,
  `cargouser` varchar(40) DEFAULT NULL,
  `codestu` int(11) DEFAULT NULL,
  `coddoc` int(11) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `codasig` int(11) DEFAULT NULL,
  `codgrado` int(11) DEFAULT NULL,
  `codhora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `coddoc` int(11) NOT NULL,
  `nombres` varchar(60) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codestu` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `genero` varchar(40) NOT NULL,
  `fechanac` date NOT NULL,
  `email` varchar(70) NOT NULL,
  `dni` char(8) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `codgrado` int(11) NOT NULL,
  `seccion` char(2) DEFAULT NULL,
  `aula` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `codhora` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `horainic` varchar(20) DEFAULT NULL,
  `horafin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_cotejo`
--

CREATE TABLE `lista_cotejo` (
  `codlistcot` int(11) NOT NULL,
  `descrip` varchar(240) DEFAULT NULL,
  `numpregunt` int(11) DEFAULT NULL,
  `fecha` varchar(60) DEFAULT NULL,
  `horainic` varchar(20) DEFAULT NULL,
  `horafin` varchar(20) DEFAULT NULL,
  `puntaje` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `coduser` int(11) NOT NULL,
  `user` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`coduser`, `user`, `password`) VALUES
(1, '123', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codasig`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codperm`),
  ADD KEY `fk_carg01` (`codestu`),
  ADD KEY `fk_carg02` (`coddoc`),
  ADD KEY `fk_carg03` (`codgrado`),
  ADD KEY `fk_carg04` (`codasig`),
  ADD KEY `fk_carg05` (`codhora`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`coddoc`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codestu`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`codest`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`codgrado`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`codhora`);

--
-- Indices de la tabla `lista_cotejo`
--
ALTER TABLE `lista_cotejo`
  ADD PRIMARY KEY (`codlistcot`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`coduser`,`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `codestu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `coduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `fk_carg01` FOREIGN KEY (`codestu`) REFERENCES `estudiante` (`codestu`),
  ADD CONSTRAINT `fk_carg02` FOREIGN KEY (`coddoc`) REFERENCES `docente` (`coddoc`),
  ADD CONSTRAINT `fk_carg03` FOREIGN KEY (`codgrado`) REFERENCES `grado` (`codgrado`),
  ADD CONSTRAINT `fk_carg04` FOREIGN KEY (`codasig`) REFERENCES `asignatura` (`codasig`),
  ADD CONSTRAINT `fk_carg05` FOREIGN KEY (`codhora`) REFERENCES `horario` (`codhora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
