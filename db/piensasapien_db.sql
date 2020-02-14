-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2020 a las 23:55:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piensasapien_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `nombreCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `usuariosId` int(11) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `passwordHash` varchar(60) NOT NULL,
  `email` varchar(45) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`usuariosId`, `userName`, `passwordHash`, `email`, `imagen`) VALUES
(26, 'prueba', '$2y$10$p.VSILCLe9qN2ofygar3JO7QzXJ9s/AEUf4Edi1Z.rSvFjiQterXS', 'lula@lula.com', 'img\\Foto_Usuario.png'),
(28, 'reg', '$2y$10$VbJN7CmXh/4Bah82OVXICebMy/r6CkCjA3CYlhzOWHeB4aB8urVVW', 'nuevo@nuevo.com', 'img\\Foto_Usuario.png'),
(30, 'lula', '$2y$10$nb4fW7GPVt1mf8e9AjfaG.7fq5nJhQ1WtoGdEMt.TEFrLEn3KLF2.', 'emailnuevo@nofalla.com', 'img\\Foto_Usuario.png'),
(36, 'martita', '$2y$10$JyIOHciwqnqOUojEja.kAO9Pbv3hnck5OqoR.WkR7/7X8dU51QqWm', 'marta@mail.com', 'img\\Foto_Usuario.png'),
(37, 'kiko', '$2y$10$ZQjQy.5.0HELQa8S8m5XdeNwfcnGUCWALnsGre/Ho5f/7BEZCmLmi', 'kiko@gmail.com', 'img\\Foto_Usuario.png'),
(38, 'kiko', '$2y$10$ZQjQy.5.0HELQa8S8m5XdeNwfcnGUCWALnsGre/Ho5f/7BEZCmLmi', 'kiko@gmail.com', 'img\\Foto_Usuario.png'),
(39, 'pepitin', '$2y$10$Drww5EkYA94E1/cPzbGJROK71ybCfIlzMFAfq4OBH.KiKzlU1Ova.', 'pepe@mail.com', 'img\\Foto_Usuario.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPregunta` int(10) UNSIGNED NOT NULL,
  `pregunta` varchar(200) DEFAULT NULL,
  `respuestaCorrecta` varchar(100) DEFAULT NULL,
  `respuestaErronea1` varchar(100) DEFAULT NULL,
  `respuestaErronea2` varchar(100) DEFAULT NULL,
  `respuestaErronea3` varchar(100) DEFAULT NULL,
  `quizzesId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quizzes`
--

CREATE TABLE `quizzes` (
  `quizzesId` int(10) UNSIGNED NOT NULL,
  `quizzes_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`usuariosId`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPregunta`),
  ADD KEY `quizzesId` (`quizzesId`);

--
-- Indices de la tabla `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quizzesId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `usuariosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPregunta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quizzesId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`quizzesId`) REFERENCES `quizzes` (`quizzesId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
