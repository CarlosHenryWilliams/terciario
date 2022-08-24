-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 06:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(1, 'Sociales', 'Ss', 0),
(2, 'Nisman', 'Nisman', 0),
(3, 'jose', 'jose', 0),
(4, 'NISMAN', 'jose', 0),
(5, 'Jose', 'Jose', 0),
(6, 'fsafsa', 'fsafsaf', 0),
(7, 'Javier', 'dasdaad', 0),
(8, 'fsafsa', 'fsafasf', 0),
(9, 'fsafsa', 'dadada', 0),
(10, 'FSAFSA', 'FSADSA', 0),
(11, 'raraa', 'ESKERE', 0),
(12, 'New', 'Titan', 0),
(13, 'FSAFSA', 'FAFA', 0),
(14, 'Eskere', 'gualeguaycu', 0),
(15, 'jose', 'lopez', 1);

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
  `id_materias` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan_estudio`
--

CREATE TABLE `plan_estudio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resolucion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_p` int(50) NOT NULL COMMENT '0 deshabilitado -- 1 habilitado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `telefono` int(50) NOT NULL,
  `telefono_alternativo` int(50) NOT NULL,
  `telefono_alternativo_persona` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'a quien pertenece el telefono alternativo',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursada`
--
ALTER TABLE `cursada`
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
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_notas`
--
ALTER TABLE `tipo_notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
