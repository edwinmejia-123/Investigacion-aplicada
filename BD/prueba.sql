-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-02-2022 a las 03:19:12
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id_user` int(30) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `Lastname` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `Cellphone` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(350) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `User_type` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `Amount` decimal(25,0) NOT NULL,
  `Registration_date` date NOT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
