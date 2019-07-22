-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-07-2019 a las 15:47:32
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bAndinaLaravel`
--
CREATE DATABASE IF NOT EXISTS `bAndinaLaravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bAndinaLaravel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `varietal_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prod_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `spec` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `prod_code` int(10) UNSIGNED DEFAULT NULL,
  `pic` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `varietal_id`, `prod_name`, `spec`, `price`, `prod_code`, `pic`, `created_at`, `updated_at`) VALUES
(2, '1', 'Malbec Andina Arduino', 'Las uvas tienden a tener un color oscuro y abundantes taninos, y se hicieron conocidas por ser una de seis uvas permitidas en las mezclas del vino de Burdeos.', 360, 11, NULL, '2019-07-14 22:00:48', '2019-07-14 22:00:48'),
(3, '2', 'Andina Terrazas ', 'La cabernet sauvignon es una de las uvas tintas más conocidas del mundo. Crece en casi todas las grandes zonas vitícolas, en un diverso espectro de climas, desde el valle del Okanagan al valle de la B', 670, 89, '/images/mockup-botella.png', '2019-07-14 22:02:29', '2019-07-14 22:02:29'),
(4, '5', 'condor merlot', 'Merlot pertenece a la misma familia que los \"cabernet\". El vino merlot se caracteriza por su finura y suavidad, sin dejar de ser aromático y carnoso. Es de color rubí muy intenso, de graduación median', 546, 45, NULL, '2019-07-14 22:14:26', '2019-07-14 22:14:26'),
(5, '6', 'nieve', 'La cabernet franc es una de las uvas tintas más plantadas en el mundo. Se usa, sobre todo, para mezclarse con la cabernet sauvignon y la merlot en el vino de Burdeos', 342, 65, NULL, '2019-07-14 22:16:31', '2019-07-14 22:16:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `name` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `surname` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `user` varchar(100) COLLATE utf8_bin NOT NULL,
  `country` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `older` int(1) DEFAULT NULL,
  `avatar` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `varietales`
--

DROP TABLE IF EXISTS `varietales`;
CREATE TABLE `varietales` (
  `id` int(11) NOT NULL,
  `varietal` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `varietales`
--

INSERT INTO `varietales` (`id`, `varietal`, `created_at`, `updated_at`) VALUES
(1, 'malbec', '2019-07-18 13:42:03', '0000-00-00 00:00:00'),
(2, 'Cabernet Sauvignon', '2019-07-18 13:42:03', '0000-00-00 00:00:00'),
(5, '	\r\nmerlot', '2019-07-18 13:42:23', '0000-00-00 00:00:00'),
(6, '	\r\nCabernet Franc', '2019-07-18 13:42:23', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `varietales`
--
ALTER TABLE `varietales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `varietales`
--
ALTER TABLE `varietales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
