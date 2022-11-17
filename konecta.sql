-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 13:54:01
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `konecta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `referencia_producto` varchar(100) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `peso_producto` varchar(20) NOT NULL,
  `categoria_producto` varchar(100) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `fechaCreacion_producto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `referencia_producto`, `precio_producto`, `peso_producto`, `categoria_producto`, `stock_producto`, `fechaCreacion_producto`) VALUES
(2, 'Lentejas', 't356ttg34', 2, '1', 'tradicionales', 5636, '2022-11-03'),
(3, 'Mantequilla', 'gwer6523', 343, '1 kilo', 'especial', 355, '2022-11-03'),
(4, 'htrgrd', 'ret5', 5, '1', 'Pesada', 56436, '2022-11-03'),
(5, 'Galletas', 'ghjndh', 6774, '63', '765', 657, '2022-11-16'),
(6, 'Uvas', '564h', 6546, '3', 'Alemanas', 566, '2022-11-10'),
(7, 'salsa rosada', 'ghjndh', 674, '74567', '456h', 657, '2022-11-25'),
(8, 'Galletas', 'ghjndh', 564, '6345', '63', 6356, '2022-11-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_producto` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_producto`, `cantidad_producto`, `id_venta`) VALUES
(8, 3, 53),
(4, 3, 54),
(4, 3, 55),
(4, 3, 56),
(8, 3, 57),
(4, 3, 58),
(8, 3, 59);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_productos` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
