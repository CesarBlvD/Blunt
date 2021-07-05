-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2020 a las 22:28:47
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stblunt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `Id_genero` tinyint(11) NOT NULL,
  `precio_producto` decimal(6,2) DEFAULT NULL,
  `img_producto` varchar(20) DEFAULT NULL,
  `thumb1` varchar(20) DEFAULT NULL,
  `thumb2` varchar(20) DEFAULT NULL,
  `thumb3` varchar(20) DEFAULT NULL,
  `thumb4` varchar(20) DEFAULT NULL,
  `thumb5` varchar(20) DEFAULT NULL,
  `thumb6` varchar(20) DEFAULT NULL,
  `thumb7` varchar(20) DEFAULT NULL,
  `thumb8` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `Id_genero`, `precio_producto`, `img_producto`, `thumb1`, `thumb2`, `thumb3`, `thumb4`, `thumb5`, `thumb6`, `thumb7`, `thumb8`) VALUES
(1, 'Vue.JS', 1, '299.00', '1.jpg', 'thumb1/1.jpg', 'thumb1/2.jpg', 'thumb1/3.jpg', 'thumb1/4.jpg', 'thumb1/5.jpg', 'thumb1/6.jpg', 'thumb1/7.jpg', 'thumb1/8.jpg'),
(2, 'AngularJS', 1, '399.00', '2.jpg', 'thumb2/1.jpg', 'thumb2/2.jpg', 'thumb2/3.jpg', 'thumb2/4.jpg', 'thumb2/5.jpg', 'thumb2/6.jpg', 'thumb2/7.jpg', 'thumb2/8.jpg'),
(3, 'Atom', 1, '499.00', '3.jpg', '3.jpg', '3.jpg', '3.jpg', '3.jpg', '3.jpg', '3.jpg', '3.jpg', '3.jpg'),
(4, 'Redux', 1, '299.00', '4.jpg', '4.jpg', '4.jpg', '4.jpg', '4.jpg', '4.jpg', '4.jpg', '4.jpg', '4.jpg'),
(5, 'NodeJS', 1, '299.00', '5.jpg', '5.jpg', '5.jpg', '5.jpg', '5.jpg', '5.jpg', '5.jpg', '5.jpg', '5.jpg'),
(6, 'Sass', 1, '299.00', '6.jpg', '6.jpg', '6.jpg', '6.jpg', '6.jpg', '6.jpg', '6.jpg', '6.jpg', '6.jpg'),
(7, 'HTML5', 2, '299.00', '7.jpg', '7.jpg', '7.jpg', '7.jpg', '7.jpg', '7.jpg', '7.jpg', '7.jpg', '7.jpg'),
(8, 'GitHub', 2, '299.00', '8.jpg', '8.jpg', '8.jpg', '8.jpg', '8.jpg', '8.jpg', '8.jpg', '8.jpg', '8.jpg'),
(9, 'BULMA', 2, '299.00', '9.jpg', '9.jpg', '9.jpg', '9.jpg', '9.jpg', '9.jpg', '9.jpg', '9.jpg', '9.jpg'),
(10, 'TS', 2, '299.00', '10.jpg', '10.jpg', '10.jpg', '10.jpg', '10.jpg', '10.jpg', '10.jpg', '10.jpg', '10.jpg'),
(11, 'Drupal', 2, '299.00', '11.jpg', '11.jpg', '11.jpg', '11.jpg', '11.jpg', '11.jpg', '11.jpg', '11.jpg', '11.jpg'),
(12, 'JavaScript', 2, '299.00', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `Id_talla` int(11) NOT NULL,
  `talla` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`Id_talla`, `talla`) VALUES
(1, 'Chica'),
(2, 'Mediana'),
(3, 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `Id_genero` tinyint(11) NOT NULL,
  `gen_producto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`Id_genero`, `gen_producto`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `id_gen_producto` (`Id_genero`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`Id_talla`);

--
-- Indices de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`Id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `Id_talla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `Id_genero` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_genero`) REFERENCES `tbl_genero` (`Id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
