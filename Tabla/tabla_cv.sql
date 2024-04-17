-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2024 a las 01:07:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tabla_cv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_cv`
--

CREATE TABLE `tabla_cv` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nacionalidad` varchar(40) NOT NULL,
  `nivel_ingles` varchar(40) NOT NULL,
  `lenguajes` varchar(40) NOT NULL,
  `aptitudes` varchar(100) NOT NULL,
  `habilidades` varchar(100) NOT NULL,
  `perfil` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_cv`
--

INSERT INTO `tabla_cv` (`id`, `nombre`, `apellidos`, `fecha_nacimiento`, `ocupacion`, `celular`, `email`, `nacionalidad`, `nivel_ingles`, `lenguajes`, `aptitudes`, `habilidades`, `perfil`) VALUES
(1, 'Juan Rodrigo', 'Callo Huayna', '2002-03-03', 'Estudiante', '953713569', 'juanc@gmail.com', 'Perú', 'Básico', 'C++', 'Multitasking', 'Creatividad. Colaboración.', 'Estudiante con ganas de aprender'),
(2, 'Jorge Rola', 'Alvares Perez', '2002-07-31', 'Profesor', '957845693', 'peralv@gmail.com', 'Ecuador', 'Intermedio', 'C', 'Proactividad', 'Colaboración.', 'Atento a cualquier innovación.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_cv`
--
ALTER TABLE `tabla_cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_cv`
--
ALTER TABLE `tabla_cv`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
