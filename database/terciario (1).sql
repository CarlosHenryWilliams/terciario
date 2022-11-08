-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 12:57 PM
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
  `estado_m` int(50) NOT NULL COMMENT '0 deshabilitado -- 1 habilitado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `abreviatura`, `estado_m`) VALUES
(68, 'que onda perro', 'dsads', 0),
(69, 'dale', 'amigoooo', 1),
(70, 'one more', 'time', 1),
(71, 'why', 'not', 1),
(73, 'fafaf', 'fafafafa', 1),
(74, 'y', 'ahora', 1),
(75, 'Javier', 'dadada', 1),
(77, 'Eskere', 'dsadsa', 1),
(78, 'Jose', 'Barbabrie', 1),
(79, 'Eskere', 'afsaf', 1),
(80, 'Eskere', 'dadada', 0),
(81, 'Eskere', 'dsadsa', 0),
(82, 'Eskere', 'dadada', 0),
(84, 'Eskere', 'dadada', 0),
(85, 'Eskere', 'dadada', 0),
(138, 'Cambie el titulo', 'alexander_2001_12@hotmail.com', 0),
(139, 'Charly', 'W', 0),
(140, 'Charly', 'a', 0),
(143, 'Charly', 'a', 0),
(144, 'Charly', 'ese', 1),
(145, 'No di', 'maria', 0),
(146, 'No di', 'maria', 0),
(148, 'para', 'tomas', 0),
(149, 'fsafas', 'fsafa', 1),
(150, 'Dewan2', 'Pavonisman2', 0),
(175, 'Tomas', 'W', 1),
(177, 'Tomas', 'ese', 1),
(178, 'Mariveya', 'W', 1),
(179, 'Ahora si muchachos', 'Nosedigamas', 1),
(180, 'Mariveya', 'Josemariallego', 0),
(181, 'Tomas', 'Nisansdad', 1),
(182, 'Mariveya', 'ese', 1);

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
(1, 'titulo1', 'nombre13', 'resolucion1', 0),
(2, 'plandeestudio1', 'Charlyg', 'resolucion11', 0),
(3, 'titulo de plan', 'nombre del plan', 'resolucion del plan', 0),
(4, 'plandeestudio1', 'Charly', 'resolucion12', 0),
(5, 'plandeestudio1tdtt', 'CharlyW', 'resolucion12', 1),
(6, 'titulo14', 'Mariveya', 'eresamkdsaof', 0);

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
(2, 'docente', 1);

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
(1, 'Julian', 'Roberto', 'M', '45151275', '0000-00-00', 'Buenos Aires', 'Soltero', 'Calle 34', 1288, '', '', 'Santa Teresita', 'La Costa', 7107, '', '', '', 'carloscharlywilliams@gmail.com', '', '0000-00-00', 0),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planestudio_materia`
--
ALTER TABLE `planestudio_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_estudio`
--
ALTER TABLE `plan_estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
