-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2018 a las 02:45:20
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--
CREATE DATABASE IF NOT EXISTS `prueba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prueba`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `resultado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_usuario`, `nombre`, `apellido`, `carrera`, `correo`, `resultado`) VALUES
(1, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(2, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(3, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(4, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(5, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(6, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(7, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(8, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(9, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(10, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(11, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(12, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(13, 'Alejandro', 'LÃ³pez', 'sistemas', 'estepahany@gmail.com', '5'),
(14, 'Estepahany Jazmin', 'Guerrero Vergara', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '5'),
(15, 'Estepahany Jazmin', 'Guerrero Vergara', 'gestion', 'alejandro.lopez.ventura@gmail.com', '5'),
(16, 'Estepahany Jazmin', 'Guerrero Vergara', 'industrial', 'alejandro.lopez.ventura@gmail.com', '1'),
(17, 'Estepahany Jazmin', 'Guerrero Vergara', 'industrial', 'alejandro.lopez.ventura@gmail.com', '1'),
(18, 'Alejandro', 'LÃ³pez', 'sistemas', 'estepahany@gmail.com', '0'),
(19, 'Alejandro', 'LÃ³pez Ventura', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '1'),
(20, 'bob', 'a', 'sistemas', 'botudo.8.31@gmail.com', '0'),
(21, 'Alejandro', 'Lopez ventura', 'gestion', 'alejandro.lopez.ventura@gmail.com', '0'),
(22, 'ghvgh', 'gh', 'sistemas', 'ghj', '0'),
(23, 'ghvgh', 'gh', 'sistemas', 'ghj', '0'),
(24, 'Alex', 'Lopez', 'sistemas', 'estepahany@gmail.com', '1'),
(25, 'vaquer', 'sal', 'sistemas', 'malandroterco@live.com.mx', '0'),
(26, 'REYNALDO', 'asd', 'sistemas', 'botudo.8.31@gmail.com', '1'),
(27, 'Alex', 'LÃ³pez', 'gestion', 'dantesparda60@hotmail.com', '1'),
(28, 'Alex', 'Lopez', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '1'),
(29, 'Alex', 'Lopez', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '3'),
(30, 'Alex', 'Lopez', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '3'),
(31, 'Alex', 'Lopez', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '0'),
(32, 'Alejandro', 'Lopez Ventura', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '0'),
(33, 'Alejandro', 'Lopez Ventura', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '0'),
(34, 'Alejandro', 'Lopez Ventura', 'sistemas', 'alejandro.lopez.ventura@gmail.com', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `opciones` varchar(5) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`opciones`, `nombre`, `apellido`, `usuario`, `password`) VALUES
('1', 'Alejandro', 'Lopez Ventura', 'tachi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('2', 'Aspirante', 'ITMAII', 'alumno', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
