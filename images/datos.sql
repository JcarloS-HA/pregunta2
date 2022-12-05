CREATE TABLE Usuario (
    cod BIGINT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(20),
    pass VARCHAR(100),
    rol VARCHAR(10)
);
CREATE TABLE Persona (
    cod BIGINT AUTO_INCREMENT PRIMARY KEY,
    ci VARCHAR(20),
    primer_apellido VARCHAR(20),
    segundo_apellido VARCHAR(20),
    nombre VARCHAR(20),
    fecha DATE
);


CREATE TABLE IF NOT EXISTS `flujo` (
  `flujo` varchar(3) DEFAULT NULL,
  `proceso` varchar(3) DEFAULT NULL,
  `proceso_siguiente` varchar(3) DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL,
  `rol` varchar(10) DEFAULT NULL,
  `pantalla` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `flujo` (`flujo`, `proceso`, `proceso_siguiente`, `tipo`, `rol`, `pantalla`) VALUES
('F1', 'P1', 'P2', 'I', 'alumno', 'inicial'),
('F1', 'P2', 'P3', 'P', 'alumno', 'datos'),
('F1', 'P3', 'P4', 'p', 'kardex', 'lista'),
('F1', 'P4', '', 'C', 'prefacultativo', 'aprobado'),
('F1', 'P5', '', 'F', 'prefacultativo', 'reprobado'),
('F1', 'P6', 'P7', 'P', 'Kardex', 'documento'),
('F1', 'P7', 'P8', 'P', 'Kardex', 'registro'),
('F1', 'P8', '', 'F', 'Kardex', 'boleta');




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujocondicion`
--

CREATE TABLE IF NOT EXISTS `flujocondicion` (
  `flujo` varchar(5) DEFAULT NULL,
  `proceso` varchar(5) DEFAULT NULL,
  `procesoSI` varchar(5) DEFAULT NULL,
  `procesoNO` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujocondicion`
--

INSERT INTO `flujocondicion` (`flujo`, `proceso`, `procesoSI`, `procesoNO`) VALUES
('F1', 'P4', 'P6', 'P5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujotramite`
--

CREATE TABLE IF NOT EXISTS `flujotramite` (
  `Flujo` varchar(5) DEFAULT NULL,
  `proceso` varchar(5) DEFAULT NULL,
  `nro_tramite` varchar(10) DEFAULT NULL,
  `fechaini` datetime DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujotramite`
--

INSERT INTO `flujotramite` (`Flujo`, `proceso`, `nro_tramite`, `fechaini`, `fechafin`, `usuario`) VALUES
('F1', 'P1', '500', '2022-10-18 00:00:00', '2022-10-18 15:00:00', '123456'),
('F1', 'P2', '500', '2022-10-18 15:00:00', '2028-11-22 08:37:34', '741258'),
('F1', 'P1', '554', '2022-10-18 00:00:00', NULL, 'moises'),
('F2', 'P2', '100', NULL, NULL, 'moises'),
('F3', 'P3', '150', NULL, NULL, 'maria'),
('F1', 'P3', '500', '2028-11-22 08:36:03', NULL, NULL),
('F1', 'P3', '500', '2028-11-22 08:37:34', NULL, NULL),
('F1', 'P3', '500', '2022-11-28 08:38:31', NULL, NULL),
('F1', 'P3', '500', '0000-00-00 00:00:00', NULL, NULL),
('F1', 'P2', '554', '2022-11-28 08:42:00', NULL, 'moises'),
('F1', 'P3', '554', '2022-11-28 08:43:00', NULL, 'moises');