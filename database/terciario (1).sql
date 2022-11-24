-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 12:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terciario`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursada`
--

CREATE TABLE `cursada` (
  `id` int(11) NOT NULL,
  `condicion` int(50) NOT NULL COMMENT '1 si es promocional --- 0 si no lo es',
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abreviatura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_m` int(50) NOT NULL COMMENT '0 deshabilitado -- 1 habilitado -- 2 Eliminado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `abreviatura`, `estado_m`) VALUES
(1, 'Sistemas y Metodos', 'SYM', 1),
(2, 'Analisis Matematico I', 'AM1', 1),
(3, 'Sistemas Digitales I', 'SD1', 1),
(4, 'Introduccion a la Programacion', 'IP', 1),
(5, 'Derecho Aplicado a la Informatica', 'DAI', 1),
(6, 'Algebra', 'ALG', 1),
(7, 'Analisis Matematico II', 'AM2', 1),
(8, 'Arquitectura de Computadores', 'AC', 1),
(9, 'Base de Datos', 'BD', 1),
(10, 'Estructura de Datos y Algoritmos', 'EDA', 1),
(11, 'Introduccion a la Ingenieria de Software', 'IIS', 1),
(12, 'Introduccion a las Comunicaciones', 'IC', 1),
(13, 'Sistemas Operativos', 'SO', 1),
(14, 'Laboratorio I', 'L1', 1),
(15, 'Electiva II', 'Elect2', 1),
(16, 'Analisis de Sistemas', 'AS', 1),
(17, 'Probabilidad y Estadistica', 'PE', 1),
(18, 'Computacion Aplicada', 'CA', 1),
(19, 'Laboratorio II', 'L2', 1),
(20, 'Algebra Lineal', 'AL', 1),
(21, 'Diseño de Sistemas', 'DS', 1),
(22, 'Fisica I', 'F1', 1),
(23, 'Laboratorio III', 'L3', 1),
(24, 'Laboratorio IV', 'L4', 1),
(25, 'Auditoria de Sistemas', 'AS', 1),
(26, 'Analisis Matematico III', 'A3', 1),
(27, 'Quimica General', 'QG', 1),
(28, 'Fisica II a', 'F2a', 1),
(29, 'Sistemas de Representacion', 'SR', 1),
(30, 'Fisica II b', 'F2b', 1),
(31, 'Administracion de Proyectos', 'AP', 1),
(32, 'Higiene, Seguridad y Ecologia', 'HSE', 1),
(33, 'Lenguajes Formales y Automatas Finitos', 'LFAF', 1),
(34, 'Laboratorio V', 'L5', 1),
(35, 'Calculo Numerico', 'CN', 1),
(36, 'Analisis de la Informacion y la Decision', 'AID', 1),
(37, 'Planeamiento Estrategico', 'PE', 1),
(38, 'Proyecto de Investigacion I', 'PI1', 1),
(39, 'Seguridad de Redes', 'SR', 1),
(40, 'Fundamentos de Economia y Finanzas', 'FEF', 1),
(41, 'Inteligencia Artificial', 'IA', 1),
(42, 'Practica Profesional Supervisada', 'PPS', 1),
(43, 'Teoria de la Informacion', 'TI', 1),
(44, 'Modelos y Simulacion', 'MS', 1),
(45, 'Trabajo Final de Grado', 'TFG', 1),
(46, 'Electiva IIII', 'Elect4', 1),
(47, 'Electiva IIIII a', 'Elect5a', 1),
(48, 'Electiva IIIII b', 'Elect5b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `id_ac` int(50) NOT NULL COMMENT 'id - alumno_cursada',
  `id_tipo` int(50) NOT NULL COMMENT 'id - tipo_notas',
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planestudio_materia`
--

CREATE TABLE `planestudio_materia` (
  `id` int(11) NOT NULL,
  `id_plan_estudio` int(50) NOT NULL,
  `id_materias` int(50) NOT NULL,
  `ano_plan_materia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `periodo_cursada` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `planestudio_materia`
--

INSERT INTO `planestudio_materia` (`id`, `id_plan_estudio`, `id_materias`, `ano_plan_materia`, `periodo_cursada`) VALUES
(1, 1, 1, '1', '1er Cuatrimestre'),
(2, 1, 2, '1', '1er Cuatrimestre'),
(3, 1, 3, '1', '1er Cuatrimestre'),
(4, 1, 4, '1', '1er Cuatrimestre'),
(5, 1, 5, '1', '1er Cuatrimestre'),
(6, 1, 6, '1', '2do Cuatrimestre'),
(7, 1, 7, '1', '2do Cuatrimestre'),
(8, 1, 8, '1', '2do Cuatrimestre'),
(9, 1, 9, '1', '2do Cuatrimestre'),
(10, 1, 10, '1', '2do Cuatrimestre'),
(11, 1, 11, '2', '1er Cuatrimestre'),
(12, 1, 12, '2', '1er Cuatrimestre'),
(13, 1, 13, '2', '1er Cuatrimestre'),
(14, 1, 14, '2', '1er Cuatrimestre'),
(15, 1, 15, '2', '1er Cuatrimestre'),
(16, 1, 16, '2', '2do Cuatrimestre'),
(17, 1, 17, '2', '2do Cuatrimestre'),
(18, 1, 18, '2', '2do Cuatrimestre'),
(19, 1, 19, '2', '2do Cuatrimestre'),
(20, 1, 20, '2', '2do Cuatrimestre'),
(21, 1, 21, '3', '1er Cuatrimestre'),
(22, 1, 22, '3', '1er Cuatrimestre'),
(23, 1, 23, '3', '1er Cuatrimestre'),
(24, 1, 24, '3', '1er Cuatrimestre'),
(25, 1, 25, '3', '1er Cuatrimestre'),
(26, 1, 26, '3', '2do Cuatrimestre'),
(27, 1, 27, '3', '2do Cuatrimestre'),
(28, 1, 28, '3', '2do Cuatrimestre'),
(29, 1, 29, '3', '2do Cuatrimestre'),
(30, 1, 30, '3', '2do Cuatrimestre'),
(31, 1, 31, '4', '1er Cuatrimestre'),
(32, 1, 32, '4', '1er Cuatrimestre'),
(33, 1, 33, '4', '1er Cuatrimestre'),
(34, 1, 34, '4', '1er Cuatrimestre'),
(35, 1, 35, '4', '1er Cuatrimestre'),
(36, 1, 36, '4', '2do Cuatrimestre'),
(37, 1, 37, '4', '2do Cuatrimestre'),
(38, 1, 38, '4', '2do Cuatrimestre'),
(39, 1, 39, '4', '2do Cuatrimestre'),
(40, 1, 40, '5', '1er Cuatrimestre'),
(41, 1, 41, '5', '1er Cuatrimestre'),
(42, 1, 42, '5', '1er Cuatrimestre'),
(43, 1, 43, '5', '2do Cuatrimestre'),
(44, 1, 44, '5', '2do Cuatrimestre'),
(45, 1, 45, '5', '2do Cuatrimestre'),
(46, 1, 46, '4', '2do Cuatrimestre'),
(47, 1, 47, '5', '1er Cuatrimestre'),
(48, 1, 48, '5', '2do Cuatrimestre');

-- --------------------------------------------------------

--
-- Table structure for table `planestudio_usuario`
--

CREATE TABLE `planestudio_usuario` (
  `id` int(11) NOT NULL,
  `id_plan_estudio_planusuario` int(11) NOT NULL,
  `dni_usuario_planusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan_estudio`
--

CREATE TABLE `plan_estudio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resolucion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_p` int(50) NOT NULL COMMENT '0 deshabilitado -- 1 habilitado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plan_estudio`
--

INSERT INTO `plan_estudio` (`id`, `titulo`, `nombre`, `resolucion`, `estado_p`) VALUES
(1, 'Ingeniero en Informatica', 'Ingenieria en Informatica', '1/22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre_rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado_r` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre_rol`, `estado_r`) VALUES
(1, 'alumno', 1),
(2, 'docente', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles_usuarios`
--

CREATE TABLE `roles_usuarios` (
  `id` int(11) NOT NULL,
  `usuarios_dni` int(50) NOT NULL,
  `rol_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles_usuarios`
--

INSERT INTO `roles_usuarios` (`id`, `usuarios_dni`, `rol_id`) VALUES
(1, 45151275, 1),
(2, 45301126, 2),
(3, 45301126, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_notas`
--

CREATE TABLE `tipo_notas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'parcial - recuperatorio - final -'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio_numero` int(50) NOT NULL COMMENT 'numero del domicilio  ',
  `piso` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'piso del departamento',
  `depto` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'numero del deparmento',
  `localidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'localidad o barrio',
  `partido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal` int(50) NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_alternativo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_alternativo_persona` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'a quien pertenece el telefono alternativo',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `estado_u` int(11) NOT NULL COMMENT 'Es para ver si el usuario esta habilitado o no\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `dni`, `fecha_nacimiento`, `lugar_nacimiento`, `estado_civil`, `domicilio`, `domicilio_numero`, `piso`, `depto`, `localidad`, `partido`, `codigo_postal`, `telefono`, `telefono_alternativo`, `telefono_alternativo_persona`, `email`, `clave`, `fecha_inscripcion`, `estado_u`) VALUES
(1, 'Julian', 'Roberto', 'M', '45151275', '0000-00-00', 'Buenos Aires', 'Soltero', 'Calle 34', 1288, '', '', 'Santa Teresita', 'La Costa', 7107, '', '', '', 'carloscharlywilliams@gmail.com', '', '0000-00-00', 1),
(2, 'Charly', 'Williams', 'M', '45151275', '2022-11-09', 'Buenos Aires', 'Soltero', 'Calle 34 ', 1288, '', '', 'Santa Teresita ', 'La costa', 7107, '3541372647', ' ', '', 'carloscharlywilliams@gmail.com', '1234', '2022-11-16', 1),
(3, 'Tomas', 'Alvarez', 'M', '45301126', '2022-11-02', 'Bs Aires', 'Casado', 'Los geranios ', 1241, '', '', 'Santa Teresita ', 'La costa', 7107, '3541372647', ' ', '', 'tomasalvarez@gmail.com', '1234', '2022-11-23', 1),
(4, 'Tomas', 'Alvarez', 'M', '45301126', '2022-11-10', 'Bs Aires', 'Casado', 'Los geranios ', 1241, '8', '', 'Costa del este ', 'La costa', 7107, '3541372647', ' ', '', 'tomasalvarez@gmail.com', '1234', '2022-11-10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursada`
--
ALTER TABLE `cursada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planestudio_materia`
--
ALTER TABLE `planestudio_materia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planestudio_usuario`
--
ALTER TABLE `planestudio_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_estudio`
--
ALTER TABLE `plan_estudio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_usuarios`
--
ALTER TABLE `roles_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_notas`
--
ALTER TABLE `tipo_notas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursada`
--
ALTER TABLE `cursada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planestudio_materia`
--
ALTER TABLE `planestudio_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `planestudio_usuario`
--
ALTER TABLE `planestudio_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_estudio`
--
ALTER TABLE `plan_estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles_usuarios`
--
ALTER TABLE `roles_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_notas`
--
ALTER TABLE `tipo_notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
