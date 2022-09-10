-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 09:34 PM
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
(1, 'titulo1', 'nombre1', 'resolucion1', 1),
(2, 'plandeestudio1', 'Charly', 'resolucion11', 1),
(3, 'titulo de plan', 'nombre del plan', 'resolucion del plan', 1),
(4, 'plandeestudio1', 'Charly', 'resolucion12', 1),
(5, 'plandeestudio1', 'CharlyW', 'resolucion12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plan_estudio`
--
ALTER TABLE `plan_estudio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan_estudio`
--
ALTER TABLE `plan_estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
