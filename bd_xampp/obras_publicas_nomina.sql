-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2024 a las 05:42:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siyeca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_publicas_nomina`
--

CREATE TABLE `obras_publicas_nomina` (
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `sueldo_quincenal` decimal(8,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `forma_pago` varchar(15) DEFAULT NULL,
  `tipo_banco` varchar(15) DEFAULT NULL,
  `dias_laborales` varchar(15) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `identificador_nomina` int(11) NOT NULL,
  `no_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `obras_publicas_nomina`
--

INSERT INTO `obras_publicas_nomina` (`hora_entrada`, `hora_salida`, `sueldo_quincenal`, `fecha_pago`, `forma_pago`, `tipo_banco`, `dias_laborales`, `fecha_ingreso`, `identificador_nomina`, `no_empleado`) VALUES
('10:16:51', '20:16:51', 50000.00, '2024-09-05', 'transferencia', 'banamex', 'lunes-viernes', '2024-09-05 20:16:51', 1, 1),
('10:16:51', '20:16:51', 50000.00, '2024-09-05', 'transferencia', 'banamex', 'lunes-viernes', '2024-09-05 20:16:51', 2, 2),
('10:16:51', '20:16:51', 50000.00, '2024-09-05', 'transferencia', 'banamex', 'lunes-viernes', '2024-09-05 20:16:51', 3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obras_publicas_nomina`
--
ALTER TABLE `obras_publicas_nomina`
  ADD PRIMARY KEY (`identificador_nomina`),
  ADD KEY `no_empleado` (`no_empleado`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `obras_publicas_nomina`
--
ALTER TABLE `obras_publicas_nomina`
  ADD CONSTRAINT `obras_publicas_nomina_ibfk_1` FOREIGN KEY (`no_empleado`) REFERENCES `alta_empleados` (`no_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
