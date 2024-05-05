-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 05:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` int(12) NOT NULL,
  `nombreEquipo` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `liga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `equipos`
--

INSERT INTO `equipos` (`idEquipo`, `nombreEquipo`, `pais`, `liga`) VALUES
(1, 'FC Barcelona', 'España', 'LaLiga'),
(3, 'Real madrid', 'Italia', 'LaLiga'),
(5, 'America', 'Colombia', 'Liga betplay');

-- --------------------------------------------------------

--
-- Table structure for table `ligas`
--

CREATE TABLE `ligas` (
  `idLiga` int(12) NOT NULL,
  `nombreLiga` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `ligas`
--

INSERT INTO `ligas` (`idLiga`, `nombreLiga`, `pais`) VALUES
(1, 'LaLiga', 'España'),
(2, 'Premier League', 'Inglaterra'),
(3, 'Serie A', 'Italia'),
(4, 'Bundesliga', 'Alemania'),
(5, 'Ligue 1', 'Francia'),
(7, 'Brasileira', 'Italia'),
(8, 'Liga betplay', 'Colombia');

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE `paises` (
  `idPais` int(12) NOT NULL,
  `nombrePais` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`idPais`, `nombrePais`) VALUES
(1, 'España'),
(2, 'Inglaterra'),
(3, 'Italia'),
(4, 'Alemania'),
(5, 'Francia'),
(8, 'Colombia');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(10) NOT NULL,
  `equipo` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `liga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `id` int(12) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `tblusuarios`
--

INSERT INTO `tblusuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'geronimo trujillo', 'gero11@gero.com', 'gero', '511'),
(2, 'julian posso', 'julianestivenposso@gmail.com', 'jp2903', '1025887629');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`);

--
-- Indexes for table `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`idLiga`);

--
-- Indexes for table `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idPais`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ligas`
--
ALTER TABLE `ligas`
  MODIFY `idLiga` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paises`
--
ALTER TABLE `paises`
  MODIFY `idPais` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
