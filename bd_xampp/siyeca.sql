-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2024 a las 05:17:52
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
-- Estructura de tabla para la tabla `alta_empleados`
--

CREATE TABLE `alta_empleados` (
  `no_empleado` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `num_tel` varchar(10) DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `dirreccion` varchar(1000) DEFAULT NULL,
  `profesion` varchar(25) DEFAULT NULL,
  `ocupacion` varchar(25) DEFAULT NULL,
  `tipo_de_sangre` varchar(3) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `estado_civil` varchar(12) DEFAULT NULL,
  `tel_emergencia` varchar(10) DEFAULT NULL,
  `dependencia` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alta_empleados`
--

INSERT INTO `alta_empleados` (`no_empleado`, `nombre`, `edad`, `curp`, `num_tel`, `nacionalidad`, `genero`, `dirreccion`, `profesion`, `ocupacion`, `tipo_de_sangre`, `rfc`, `estado_civil`, `tel_emergencia`, `dependencia`) VALUES
(0, 'rodrigo', NULL, 'fdg45y5hgfb h6nu6u', '8000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'Ana María González ', 36, 'GOLA980725MDFNNNA0', '7351234567', 'mexicano', 'M', 'Calle Morelos 123, Col. Centro, C.P. 62980, Yecapixtla, Morelos', 'Obras Públicas', 'Planificar', 'B+', 'GOLA980725D79', 'casado', '7355432109', 'obras publicas'),
(124, 'Patricia Sánchez Morales', 34, 'SAMT850620MDFCPR00', '7353456789', 'mexicano', 'M', 'Av. Benito Juárez 456, Col. San Isidro, C.P. 62981, Yecapixtla, Morelos', 'Desarrollo Urbano', 'Planificar', 'A+', 'SAMT850620J41', 'devorciado', '7351234567', 'obras publicas'),
(125, 'Verónica Torres Ávila', 54, 'TOVA820115MDFVNC00', '7353456789', 'mexicano', 'M', 'Calle Emiliano Zapata 789, Col. La Joya, C.P. 62982, Yecapixtla, Morelos', 'Ingeniero Civil', 'Planificar', 'B-', 'TOVA820115N26', 'casado', '7359870543', 'obras publicas'),
(126, 'Ricardo Pérez Salazar', 43, 'PESR760309HDFRCR00', '7359876543', 'mexicano', 'H', 'Calle Juárez 101, Col. La Soledad, C.P. 62983, Yecapixtla, Morelos', 'Arquitecto', 'Planificar', 'B-', 'PESR760309A47', 'casado', '7352345678', 'obras publicas'),
(127, 'Gabriela Hernández Mendoza', 43, 'HEMG940726MDFNRB00', '7352345678', 'mexicano', 'M', 'Calle Hidalgo 202, Col. El Paraíso, C.P. 62984, Yecapixtla, Morelos', 'Arquitecto', 'Planificar', 'B+', 'HEMG940726M25', 'casado', '7356789012', 'obras publicas'),
(128, 'Javier López Castillo', 52, 'LOCJ910204HDFLJV00', '7350987654', 'mexicano', 'H', 'Av. de la Revolución 303, Col. El Arbolito, C.P. 62985, Yecapixtla, Morelos', 'Protección Civil', 'Planificar', 'A+', 'LOCJ910204H54', 'soltero', '7358901234', 'proteccion civil'),
(129, 'José Martínez Pérez', 43, 'MAPJ790123HDFJRS00', '7358765432', 'mexicano', 'H', 'Calle de la Paz 404, Col. El Rosario, C.P. 62986, Yecapixtla, Morelos', 'Servicios Públicos', 'Planificar', 'A+', 'MAPJ790123B10', 'casado', '7356789012', 'servicios publicos'),
(130, 'Carlos Alberto García Ramírez', 23, 'GARC800905HDFRRL00', '7356543210', 'mexicano', 'H', 'Calle 5 de Febrero 505, Col. San Miguel, C.P. 62987, Yecapixtla, Morelos', 'Desarrollo Social', 'Planificar', 'A+', 'GARC800905N00', 'casado', '7353456789', 'desarrollo social'),
(131, 'María  Rodríguez Hernández', 43, 'ROFM920415MDFNRR00', '7359876543', 'mexicano', 'M', 'Calle 16 de Septiembre 606, Col. La Loma, C.P. 62988, Yecapixtla, Morelos', 'Seguridad Pública', 'Planificar', 'O+', 'ROFM920415M79', 'casado', '7354321098', 'seguridad publica'),
(132, 'Carlos Alberto Ramirez', 31, 'LORC890715HDFLRC02', '7352079870', 'mexicano', 'H', 'Av. Juárez 707, Col. La Candelaria, C.P. 62989, Yecapixtla, Morelos', 'Secretario General', 'Planificar', 'A+', 'LORC890715R12', 'casado', '7354567890', 'secretario');

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
('10:16:51', '20:16:51', 50000.00, '2024-09-05', 'transferencia', 'banamex', 'lunes-viernes', '2024-09-05 20:16:51', 123, 123),
('10:17:28', '20:17:28', 50000.00, '2024-09-05', 'transferencia', 'banamex', 'lunes-viernes', '2024-09-05 20:17:28', 124, 124),
('10:18:12', '20:18:12', 45000.00, '2024-09-05', 'transferencia', 'bbva', 'lunes-jueves', '2024-09-05 20:18:12', 125, 125),
('10:18:48', '20:18:48', 45000.00, '2024-09-05', 'transferencia', 'bbva', 'lunes-jueves', '2024-09-05 20:18:48', 126, 126),
('10:19:13', '20:19:13', 70000.00, '2024-09-05', 'transferencia', 'bbva', 'lunes-domingo', '2024-09-05 20:19:13', 127, 127);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alta_empleados`
--
ALTER TABLE `alta_empleados`
  ADD PRIMARY KEY (`no_empleado`);

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
