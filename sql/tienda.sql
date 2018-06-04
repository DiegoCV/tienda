-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 16:24:30
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idADMIN` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDO` varchar(45) DEFAULT NULL,
  `PASS_ADMIN` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `FECHANACIMIENTO` date DEFAULT NULL,
  `FECHAINGRESO` date DEFAULT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCATEGORIA` int(11) NOT NULL,
  `DESCRIPCION` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCLIENTES` int(11) NOT NULL,
  `NOMBRE_CLIENTES` varchar(45) DEFAULT NULL,
  `DIRECCION_CLIENTES` varchar(45) DEFAULT NULL,
  `FECHANACIMIENTO_CLIENTES` date DEFAULT NULL,
  `EMAIL_CLIENTES` varchar(45) DEFAULT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_has_ventas`
--

CREATE TABLE `clientes_has_ventas` (
  `CLIENTES_idCLIENTES` int(11) NOT NULL,
  `CLIENTES_TIENDA_idTIENDA` int(11) NOT NULL,
  `VENTAS_idVENTAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idPRODUCTOS` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(45) DEFAULT NULL,
  `UNIDAD_PRODUCTO` varchar(45) DEFAULT NULL,
  `COSTO_PRODUCTO` varchar(45) DEFAULT NULL,
  `PRECIOVENTA_PRODUCTO` varchar(45) DEFAULT NULL,
  `VALORMINIMO_PRODUCTO` varchar(45) DEFAULT NULL,
  `FECHAINGRESO_PRODUCTO` datetime DEFAULT NULL,
  `CATEGORIA_PRODUCTO` varchar(45) DEFAULT NULL,
  `FECHAVENCIMIENTO_PRODUCTO` varchar(45) DEFAULT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL,
  `CATEGORIA_idCATEGORIA` int(11) NOT NULL,
  `PROVEEDORES_idPROVEEDORES` int(11) NOT NULL,
  `PROVEEDORES_TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idPROVEEDORES` int(11) NOT NULL,
  `NOMBREEMPRESA_PROVEEDORES` varchar(45) DEFAULT NULL,
  `NOMBREEMPLEADO_PROVEEDORES` varchar(45) DEFAULT NULL,
  `DESCUENTO_PROVEEDOR` varchar(45) DEFAULT NULL,
  `FECHAINGRESO_PROVEEDORES` date DEFAULT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `idTIENDA` int(11) NOT NULL,
  `NOMBRE_TIENDA` varchar(45) DEFAULT NULL,
  `DIERECCION_TIENDA` varchar(45) DEFAULT NULL,
  `NIT_TIENDA` varchar(45) DEFAULT NULL,
  `REPRESENTATE_TIENDA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idVENDEDOR` int(11) NOT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVENTAS` int(11) NOT NULL,
  `IVA_VENTAS` varchar(45) DEFAULT NULL,
  `IMPUESTOCONSUMO_VENTAS` varchar(45) DEFAULT NULL,
  `FECHACOMPRA_VENTAS` datetime DEFAULT NULL,
  `VENDEDOR_idVENDEDOR` int(11) NOT NULL,
  `VENDEDOR_TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idADMIN`,`TIENDA_idTIENDA`),
  ADD KEY `fk_ADMIN_TIENDA1_idx` (`TIENDA_idTIENDA`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCATEGORIA`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCLIENTES`,`TIENDA_idTIENDA`),
  ADD KEY `fk_CLIENTES_TIENDA1_idx` (`TIENDA_idTIENDA`);

--
-- Indices de la tabla `clientes_has_ventas`
--
ALTER TABLE `clientes_has_ventas`
  ADD PRIMARY KEY (`CLIENTES_idCLIENTES`,`CLIENTES_TIENDA_idTIENDA`,`VENTAS_idVENTAS`),
  ADD KEY `fk_CLIENTES_has_VENTAS_VENTAS1_idx` (`VENTAS_idVENTAS`),
  ADD KEY `fk_CLIENTES_has_VENTAS_CLIENTES1_idx` (`CLIENTES_idCLIENTES`,`CLIENTES_TIENDA_idTIENDA`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idPRODUCTOS`,`TIENDA_idTIENDA`,`CATEGORIA_idCATEGORIA`,`PROVEEDORES_idPROVEEDORES`,`PROVEEDORES_TIENDA_idTIENDA`),
  ADD KEY `fk_PRODUCTOS_TIENDA1_idx` (`TIENDA_idTIENDA`),
  ADD KEY `fk_PRODUCTOS_CATEGORIA1_idx` (`CATEGORIA_idCATEGORIA`),
  ADD KEY `fk_PRODUCTOS_PROVEEDORES1_idx` (`PROVEEDORES_idPROVEEDORES`,`PROVEEDORES_TIENDA_idTIENDA`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idPROVEEDORES`,`TIENDA_idTIENDA`),
  ADD KEY `fk_PROVEEDORES_TIENDA_idx` (`TIENDA_idTIENDA`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTIENDA`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idVENDEDOR`,`TIENDA_idTIENDA`),
  ADD KEY `fk_VENDEDOR_TIENDA1_idx` (`TIENDA_idTIENDA`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVENTAS`,`VENDEDOR_idVENDEDOR`,`VENDEDOR_TIENDA_idTIENDA`),
  ADD KEY `fk_VENTAS_VENDEDOR1_idx` (`VENDEDOR_idVENDEDOR`,`VENDEDOR_TIENDA_idTIENDA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCLIENTES` int(11) NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCATEGORIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idPRODUCTOS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idPROVEEDORES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idTIENDA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVENTAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `vendedor`
  MODIFY `idVENDEDOR` int(11) NOT NULL AUTO_INCREMENT;
  
  
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_ADMIN_TIENDA1` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_CLIENTES_TIENDA1` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clientes_has_ventas`
--
ALTER TABLE `clientes_has_ventas`
  ADD CONSTRAINT `fk_CLIENTES_has_VENTAS_CLIENTES1` FOREIGN KEY (`CLIENTES_idCLIENTES`,`CLIENTES_TIENDA_idTIENDA`) REFERENCES `clientes` (`idCLIENTES`, `TIENDA_idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CLIENTES_has_VENTAS_VENTAS1` FOREIGN KEY (`VENTAS_idVENTAS`) REFERENCES `ventas` (`idVENTAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_PRODUCTOS_CATEGORIA1` FOREIGN KEY (`CATEGORIA_idCATEGORIA`) REFERENCES `categoria` (`idCATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRODUCTOS_PROVEEDORES1` FOREIGN KEY (`PROVEEDORES_idPROVEEDORES`,`PROVEEDORES_TIENDA_idTIENDA`) REFERENCES `proveedores` (`idPROVEEDORES`, `TIENDA_idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRODUCTOS_TIENDA1` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `fk_PROVEEDORES_TIENDA` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `fk_VENDEDOR_TIENDA1` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_VENTAS_VENDEDOR1` FOREIGN KEY (`VENDEDOR_idVENDEDOR`,`VENDEDOR_TIENDA_idTIENDA`) REFERENCES `vendedor` (`idVENDEDOR`, `TIENDA_idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
