-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2018 a las 19:13:48
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
(5, '2018-09-12 20:55:48', 'Andres Felipe', 'Castro LondoÃ±o', 24, 1, '3', 5, 5, 5, 5, '1036951056'),
(6, '2018-09-12 21:05:37', 'Prueba', 'Pruebita', 24, 1, '1', 10.5, 12.3, 45.1, 33.02, '1036951056'),
(7, '2018-09-13 21:07:22', 'Ana Emilia', 'Castrillon Martines', 74, 2, '3', 15, 15, 15, 15, '32075950'),
(8, '2018-09-13 21:10:20', 'pepito', 'perez', 15, 1, '1', 10, 12, 14, 16, '123456'),
(9, '2018-09-13 21:12:39', 'pepita', 'pepona', 75, 2, '2', 10, 11, 12, 13, '456789'),
(10, '2018-09-24 14:25:02', '', '', 0, 0, '0', 0, 0, 0, 0, ''),
(11, '2018-09-27 14:26:42', '', '', 0, 0, '0', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qlty_ctrol`
--

CREATE TABLE `qlty_ctrol` (
  `fecha` datetime NOT NULL,
  `col1` float DEFAULT NULL,
  `col2` float DEFAULT NULL,
  `hdl1` float DEFAULT NULL,
  `hdl2` float DEFAULT NULL,
  `ldl1` float DEFAULT NULL,
  `ld21` float DEFAULT NULL,
  `trig1` float DEFAULT NULL,
  `trig2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `qlty_ctrol`
--

INSERT INTO `qlty_ctrol` (`fecha`, `col1`, `col2`, `hdl1`, `hdl2`, `ldl1`, `ld21`, `trig1`, `trig2`) VALUES
('2018-09-25 00:00:00', 1, 1.5, 2.5, 0.7, 0.8, 2.4, 4.2, 1.3),
('2018-09-25 09:32:12', 5, 1, 1.2, 0.3, 2.7, 1.1, 1.8, 0.9),
('2018-09-25 14:17:16', 8.2, 3.5, 1.9, 1.3, 4.6, 2.7, 2.6, 1.8),
('2018-09-26 08:01:00', 6.5, 2.8, 1.6, 0.77, 3.95, 1.87, 2.28, 0.972);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `set_point`
--

CREATE TABLE `set_point` (
  `col_min1` float NOT NULL,
  `col_max1` float DEFAULT NULL,
  `hdl_min1` float DEFAULT NULL,
  `hdl_max1` float DEFAULT NULL,
  `ldl_min1` float DEFAULT NULL,
  `ldl_max1` float DEFAULT NULL,
  `trig_min1` float DEFAULT NULL,
  `trig_max1` float DEFAULT NULL,
  `col_min2` float DEFAULT NULL,
  `col_max2` float DEFAULT NULL,
  `hdl_min2` float DEFAULT NULL,
  `hdl_max2` float DEFAULT NULL,
  `ldl_min2` float DEFAULT NULL,
  `ldl_max2` float DEFAULT NULL,
  `trig_min2` float DEFAULT NULL,
  `trig_max2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `set_point`
--

INSERT INTO `set_point` (`col_min1`, `col_max1`, `hdl_min1`, `hdl_max1`, `ldl_min1`, `ldl_max1`, `trig_min1`, `trig_max1`, `col_min2`, `col_max2`, `hdl_min2`, `hdl_max2`, `ldl_min2`, `ldl_max2`, `trig_min2`, `trig_max2`) VALUES
(5.77, 7.48, 1.4, 1.86, 3.44, 4.15, 1.98, 2.33, 2.15, 3.07, 0.544, 0.904, 1.32, 2.02, 0.815, 1.04);

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
-- Indices de la tabla `set_point`
--
ALTER TABLE `set_point`
  ADD PRIMARY KEY (`col_min1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data_exams`
--
ALTER TABLE `data_exams`
  MODIFY `consec` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
