-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 17:30:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `género`
--

CREATE TABLE `género` (
  `GenerID` int(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `género`
--

INSERT INTO `género` (`GenerID`, `nombre`) VALUES
(1, 'Comedia'),
(2, 'Acción'),
(3, 'Aventura'),
(4, 'Ci. Ficcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `PeliID` int(11) NOT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Año` int(11) DEFAULT NULL,
  `GenerID` int(11) DEFAULT NULL,
  `ProdID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`PeliID`, `Titulo`, `Año`, `GenerID`, `ProdID`) VALUES
(1, 'Bee Movie', 2007, 1, 4),
(2, 'Lluvia de hamburguesas', 2009, 1, 6),
(3, 'Dia de la independencia', 1996, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productores`
--

CREATE TABLE `productores` (
  `ProdID` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productores`
--

INSERT INTO `productores` (`ProdID`, `nombre`) VALUES
(1, 'Columbia Pictures'),
(2, '20th Century-Fox'),
(3, 'Warner Bros'),
(4, 'Paramount Pictures'),
(5, 'Universal Pictures'),
(6, 'Sony Pictures Animation');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `género`
--
ALTER TABLE `género`
  ADD PRIMARY KEY (`GenerID`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`PeliID`),
  ADD KEY `GenerID` (`GenerID`),
  ADD KEY `ProdID` (`ProdID`);

--
-- Indices de la tabla `productores`
--
ALTER TABLE `productores`
  ADD PRIMARY KEY (`ProdID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`GenerID`) REFERENCES `género` (`GenerID`),
  ADD CONSTRAINT `peliculas_ibfk_2` FOREIGN KEY (`ProdID`) REFERENCES `productores` (`ProdID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
