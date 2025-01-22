-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2023 a las 20:54:31
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha_up`) VALUES
(1, 'Falla Software', '2023-11-24 19:37:15'),
(2, 'Falla Comunicaciones', '2023-11-24 19:37:27'),
(3, 'Software Provision', '2023-11-24 19:37:54'),
(4, 'Configuración Punto de red', '2023-11-24 19:37:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `descripcion`, `fecha_up`) VALUES
(1, 'Activo', 'Usuario Dado de alta', '2023-11-21 03:55:12'),
(2, 'Inactivo', 'Usuario Dado de Baja', '2023-11-21 03:55:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_novedades`
--

CREATE TABLE `estado_novedades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_novedades`
--

INSERT INTO `estado_novedades` (`id`, `nombre`, `fecha_up`) VALUES
(1, 'En proceso', '2023-11-24 19:42:14'),
(2, 'En curso', '2023-11-24 19:42:14'),
(3, 'Pendiente ', '2023-11-24 19:42:14'),
(4, 'Cerrado Sin Solucion', '2023-11-24 19:42:14'),
(5, 'Cerrado Con Solucion', '2023-11-24 19:42:14'),
(6, 'Cancelado', '2023-11-24 19:42:14'),
(7, 'Flujo de Tareas', '2023-12-19 20:24:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_tareas`
--

CREATE TABLE `estado_tareas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_peticiones` int(11) DEFAULT NULL,
  `id_categorias` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `archivo` text NOT NULL,
  `id_estado_novedad` int(11) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `titulo`, `id_peticiones`, `id_categorias`, `id_usuario`, `descripcion`, `archivo`, `id_estado_novedad`, `fecha_up`) VALUES
(1, 'Pruebas demo 2', NULL, NULL, 3, 'Pruebas demo 2', '', 1, '2023-12-19 15:45:40'),
(2, 'Pruebas demo 3', NULL, NULL, 3, 'Pruebas demo 3', '', 1, '2023-12-19 15:45:52'),
(3, 'Pruebas demo 4', NULL, NULL, 3, 'Pruebas demo 4', '', 1, '2023-12-19 15:45:59'),
(4, 'Pruebas demo 5', NULL, NULL, 3, 'Pruebas demo 5', '', 1, '2023-12-19 15:46:09'),
(5, 'Pruebas demo 6', NULL, NULL, 3, 'Pruebas demo 6', '', 1, '2023-12-19 15:46:20'),
(6, 'Pruebas demo 7', NULL, NULL, 3, 'Pruebas demo 7', '', 1, '2023-12-19 15:46:54'),
(7, 'Pruebas demo 8', NULL, NULL, 3, 'Pruebas demo 8', '', 1, '2023-12-19 15:47:04'),
(8, 'Pruebas demo 9', NULL, NULL, 3, 'Pruebas demo 9', '', 1, '2023-12-19 15:47:15'),
(9, 'Pruebas demo 10', NULL, NULL, 3, 'Pruebas demo 10', '', 1, '2023-12-19 15:47:24'),
(10, 'Pruebas demo 11', NULL, NULL, 3, 'Pruebas demo 11', '', 1, '2023-12-19 15:47:33'),
(11, 'Pruebas demo 12', 2, NULL, 3, 'Pruebas demo 12', '', 1, '2023-12-21 18:56:53'),
(12, 'Pruebas demo 33', 1, 1, 4, 'Pruebas demo 2', '', 1, '2023-12-20 16:07:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `nombre`, `fecha_up`) VALUES
(1, 'Solicitud', '2023-11-24 19:38:24'),
(2, 'Incidente', '2023-11-24 19:38:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillas`
--

CREATE TABLE `plantillas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plantillas`
--

INSERT INTO `plantillas` (`id`, `descripcion`, `fecha_up`) VALUES
(1, 'Software Provision', '2023-12-19 20:47:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `fecha_up`) VALUES
(1, 'Administra', 'Todos los permisos', '2023-11-21 03:55:50'),
(2, 'Tecnico', 'Permisos Limitados', '2023-11-21 03:55:50'),
(3, 'Cliente', 'Usuario Final', '2023-11-23 19:56:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `id_estado_tareas` int(11) NOT NULL,
  `id_plantillas` int(11) NOT NULL,
  `fecha_up` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nombre`, `descripcion`, `id_estado_tareas`, `id_plantillas`, `fecha_up`) VALUES
(1, '01_Verfica Estado De Elemento y Documenta Informacion.', '', 0, 0, '2023-12-19 16:00:47'),
(2, '02_Verifica y autoriza Instalacion de Software y Documenta.', '', 0, 0, '2023-12-19 16:06:07'),
(3, '03_Instala y Desinstala Software Informado para su proceso.', '', 0, 0, '2023-12-19 16:06:07'),
(4, '04_Verifica el correcto funcionamiento con el usuario y documenta.', '', 0, 0, '2023-12-19 16:06:39'),
(5, '05_Procede a cerrar solicitud con solucion y adjunta Formato de Inventario.', '', 0, 0, '2023-12-19 16:06:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_up` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `id_rol`, `id_estado`, `fecha_up`) VALUES
(2, 'josele88@misena.edu.co', 'J1098657469', 1, 1, '2023-12-09 14:44:25'),
(3, 'lars8890@gmail.com', '1234567890', 2, 1, '2023-12-18 18:19:14'),
(4, 'santilopgo@gmail.com', '1234567890', 3, 1, '2023-12-09 15:06:16'),
(5, 'soporte.tic@ticenergy.co', '1234567890', 3, 1, '2023-12-18 18:27:27'),
(6, 'analista_cgm05@ticenergy.co', '1234567890', 3, 1, '2023-12-21 19:53:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_novedades`
--
ALTER TABLE `estado_novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_tareas`
--
ALTER TABLE `estado_tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_novedades` (`id_peticiones`,`id_categorias`,`id_usuario`,`id_estado_novedad`),
  ADD KEY `id_categorias` (`id_categorias`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estado_novedad` (`id_estado_novedad`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estado_tareas` (`id_estado_tareas`,`id_plantillas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`,`id_estado`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_novedades`
--
ALTER TABLE `estado_novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estado_tareas`
--
ALTER TABLE `estado_tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD CONSTRAINT `novedades_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `novedades_ibfk_2` FOREIGN KEY (`id_peticiones`) REFERENCES `peticiones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `novedades_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `novedades_ibfk_4` FOREIGN KEY (`id_estado_novedad`) REFERENCES `estado_novedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
