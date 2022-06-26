-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2022 a las 08:10:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_biblioteca`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarAdicional` (IN `Id` CHAR(15), IN `Direccion` CHAR(40), IN `Telefono` CHAR(13), IN `Edad` TINYINT, IN `Email` CHAR(30))  UPDATE tbl_dato_adicional SET Fk_Id_Pers = Id, Dir_Dom_Adic = Direccion, Tel_Adic = Telefono, Edad_Adic = Edad, Email_Adic = Email WHERE Fk_Id_Pers = Id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPersona` (IN `Id` CHAR(15), IN `Nombre1` CHAR(20), IN `Nombre2` CHAR(20), IN `Apellido1` CHAR(20), IN `Apellido2` CHAR(20), IN `Fecha` DATE, IN `Contra` CHAR(16))  UPDATE tbl_persona SET Id_Pers = Id, Pri_Nom_Pers = Nombre1, Seg_Nom_Pers = Nombre2, Pri_Ape_Pers = Apellido1, Seg_Ape_Pers = Apellido2, Fech_Nac_Pers = Fecha, Contraseña = Contra WHERE Id_Pers = Id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarNuevaPersona` (IN `Id` CHAR(15), IN `Primer_Nombre` CHAR(20), IN `Segundo_Nombre` CHAR(20), IN `Primer_Apellido` CHAR(20), IN `Segundo_Apellido` CHAR(20), IN `Fecha_Nacimiento` DATE, IN `Contraseña` CHAR(16))  INSERT INTO tbl_persona (Id_Pers, Pri_Nom_Pers, Seg_Nom_Pers, Pri_Ape_Pers, Seg_Ape_Pers, Fech_Nac_Pers, Contraseña) VALUES (Id, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Fecha_Nacimiento, Contraseña)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarNuevoAdicional` (IN `Id` CHAR(15), IN `Direccion` CHAR(40), IN `Telefono` CHAR(13), IN `Edad` TINYINT, IN `Email` CHAR(30), IN `Persona` CHAR(15), IN `Genero` CHAR(15))  INSERT INTO tbl_dato_adicional (Id_Dat_Adic, Dir_Dom_Adic, Tel_Adic, Edad_Adic, Email_Adic, Fk_Id_Pers, Fk_Id_Gen) VALUES (Id, Direccion, Telefono, Edad, Email, Persona, Genero)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarAdicional` (IN `Adicional` CHAR(15))  DELETE FROM tbl_dato_adicional WHERE Id_Dat_Adic = Adicional$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPersona` (IN `Persona` CHAR(15))  DELETE FROM tbl_persona WHERE Id_Pers = Persona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Login` (IN `Cedula` CHAR(15), IN `Contra` CHAR(16))  SELECT * FROM tbl_persona
WHERE (Cedula, Contra) = (Id_Pers, Contraseña)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `VerAdicionalPorId` (IN `Adicional` CHAR(15))  SELECT * FROM tbl_dato_adicional
WHERE Fk_Id_Pers = Adicional$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `VerPersonaPorId` (IN `Cedula` CHAR(15))  SELECT * FROM tbl_persona
WHERE Id_Pers = Cedula$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dato_adicional`
--

CREATE TABLE `tbl_dato_adicional` (
  `Id_Dat_Adic` int(15) NOT NULL,
  `Dir_Dom_Adic` char(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_Adic` char(13) COLLATE utf8_spanish2_ci NOT NULL,
  `Edad_Adic` char(3) COLLATE utf8_spanish2_ci NOT NULL,
  `Email_Adic` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fk_Id_Pers` char(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Fk_Id_Gen` char(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_dato_adicional`
--

INSERT INTO `tbl_dato_adicional` (`Id_Dat_Adic`, `Dir_Dom_Adic`, `Tel_Adic`, `Edad_Adic`, `Email_Adic`, `Fk_Id_Pers`, `Fk_Id_Gen`) VALUES
(37, 'Carrera 6 sur # 14-44', '3143621362', '21', 'josedavidgomezavila@gmail.com', '1007752706', '001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `Id_Gen` char(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nom_Gen` char(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`Id_Gen`, `Nom_Gen`) VALUES
('001', 'Masculino'),
('002', 'Femenino'),
('003', 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `Id_Pers` char(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Pri_Nom_Pers` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Seg_Nom_Pers` char(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Pri_Ape_Pers` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Seg_Ape_Pers` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Fech_Nac_Pers` date NOT NULL,
  `Contraseña` char(16) COLLATE utf8_spanish2_ci NOT NULL,
  `Estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`Id_Pers`, `Pri_Nom_Pers`, `Seg_Nom_Pers`, `Pri_Ape_Pers`, `Seg_Ape_Pers`, `Fech_Nac_Pers`, `Contraseña`, `Estado`) VALUES
('1007752706', 'Jose', 'David', 'Gomez', 'Avila', '2000-05-20', '54321', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_dato_adicional`
--
ALTER TABLE `tbl_dato_adicional`
  ADD PRIMARY KEY (`Id_Dat_Adic`),
  ADD KEY `Fk_Id_Pers` (`Fk_Id_Pers`),
  ADD KEY `Fk_Id_Gen` (`Fk_Id_Gen`);

--
-- Indices de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`Id_Gen`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`Id_Pers`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_dato_adicional`
--
ALTER TABLE `tbl_dato_adicional`
  MODIFY `Id_Dat_Adic` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_dato_adicional`
--
ALTER TABLE `tbl_dato_adicional`
  ADD CONSTRAINT `tbl_dato_adicional_ibfk_1` FOREIGN KEY (`Fk_Id_Pers`) REFERENCES `tbl_persona` (`Id_Pers`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_dato_adicional_ibfk_2` FOREIGN KEY (`Fk_Id_Gen`) REFERENCES `tbl_genero` (`Id_Gen`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
