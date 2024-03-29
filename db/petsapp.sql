-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2024 a las 16:03:53
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petsapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `photo` varchar(64) NOT NULL DEFAULT 'images/photo-pet.png',
  `kind` varchar(32) NOT NULL,
  `weight` int(3) NOT NULL,
  `age` int(3) NOT NULL,
  `breed` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `name`, `photo`, `kind`, `weight`, `age`, `breed`, `location`) VALUES
(2, 'Roni', '1708985260.jpg', 'Cat', 8, 2, 'British', 'Pereira'),
(3, 'Toby', '1708985394.jpg', 'DOG', 18, 5, 'Puddle', 'Armenia'),
(4, 'Pocho', '1708701107.jfif', 'Dog', 25, 13, 'Criollo', 'Manizales'),
(5, 'Roberta', '1708703398.jpg', 'CAT', 10, 3, 'Criollo', 'Bogota'),
(14, 'Negro', '1708973979.webp', 'Dog', 5, 1, 'Salchicha', 'Buenaventura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `document` bigint(12) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `photo` varchar(64) DEFAULT 'ico-users.svg',
  `phone` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(32) NOT NULL DEFAULT 'Custom'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `document`, `fullname`, `photo`, `phone`, `email`, `password`, `role`) VALUES
(1, 75000001, 'Jeremias Springfield', 'jeremias.png', '312000001', 'jeremias@gmail.com', '$2y$10$sHH84z4BbzM13FmcQvsBM.Ob8gfkr/M1lLnkolNK4zVPKcfiAdf6C', 'Admin'),
(2, 1060647457, 'William McDougal', '1709303076.jfif', '3002346547', 'william@gmail.com', '$2y$10$swVG4Tb7UsilVOnROC4dWO9qkAyJR/9R8uy4dj9qFMpHS..ZGTmHm', 'Custom');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `document` (`document`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
