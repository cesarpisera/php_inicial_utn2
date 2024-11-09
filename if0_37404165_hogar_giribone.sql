-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql113.infinityfree.com
-- Tiempo de generación: 09-11-2024 a las 09:47:07
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_37404165_hogar_giribone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas_giribone`
--

CREATE TABLE `consultas_giribone` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `consultas_giribone`
--

INSERT INTO `consultas_giribone` (`id`, `nombre`, `email`, `mensaje`) VALUES
(1, 'Cesar', 'cesarpisera@gmail.com', 'Que edad tiene Torito ?'),
(2, '', '', ''),
(3, 'Belen', 'camilabelengaso@hotmail.com', 'Buenos dÃ­as, quisiera saber si la Negra continÃºa con olor a cochinillo.'),
(4, 'pepe', 'pepe@elgrillo.com.ar', 'Hola, soy pepe el grillo.'),
(5, 'Tomas Rojas', 'rojas-tomasaugusto@hotmail.com', 'hola gordo traicionero!'),
(6, 'Hugo', 'hugo@hugo', 'Soy Hugo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas_giribone`
--
ALTER TABLE `consultas_giribone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas_giribone`
--
ALTER TABLE `consultas_giribone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
