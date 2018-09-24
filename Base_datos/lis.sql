-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2018 a las 20:56:43
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_exams`
--

CREATE TABLE `data_exams` (
  `consec` mediumint(8) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lst_name` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `gender` tinyint(3) UNSIGNED NOT NULL,
  `eps` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `col` float NOT NULL,
  `hdl` float NOT NULL,
  `ldl` float NOT NULL,
  `trig` float NOT NULL,
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `data_exams`
--

INSERT INTO `data_exams` (`consec`, `fecha`, `name`, `lst_name`, `age`, `gender`, `eps`, `col`, `hdl`, `ldl`, `trig`, `id`) VALUES
(3, '2018-09-12 00:00:00', 'Andres', 'Felipe', 22, 1, '3', 10, 12, 12, 15, '1036951056'),
(5, '2018-09-12 20:55:48', 'Andres Felipe', 'Castro LondoÃ±o', 24, 1, '3', 5, 5, 5, 5, '1036951056');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qlty_ctrol`
--

CREATE TABLE `qlty_ctrol` (
  `fecha` datetime NOT NULL,
  `col` decimal(10,10) NOT NULL,
  `hdl` decimal(10,10) NOT NULL,
  `ldl` decimal(10,10) NOT NULL,
  `trig` decimal(10,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `set_point_control`
--

CREATE TABLE `set_point_control` (
  `fecha` datetime NOT NULL,
  `col` decimal(10,10) NOT NULL,
  `hdl` decimal(10,10) NOT NULL,
  `ldl` decimal(10,10) NOT NULL,
  `trig` decimal(10,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data_exams`
--
ALTER TABLE `data_exams`
  ADD PRIMARY KEY (`consec`);

--
-- Indices de la tabla `qlty_ctrol`
--
ALTER TABLE `qlty_ctrol`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `set_point_control`
--
ALTER TABLE `set_point_control`
  ADD PRIMARY KEY (`fecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data_exams`
--
ALTER TABLE `data_exams`
  MODIFY `consec` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
