-- MySQL Script generated by MySQL Workbench
-- Tue May  8 20:24:20 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema tienda
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tienda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tienda` DEFAULT CHARACTER SET utf8 ;
USE `tienda` ;

-- -----------------------------------------------------
-- Table `tienda`.`TIENDA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`TIENDA` (
  `idTIENDA` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE_TIENDA` VARCHAR(45) NULL,
  `DIERECCION_TIENDA` VARCHAR(45) NULL,
  `NIT_TIENDA` VARCHAR(45) NULL,
  `REPRESENTATE_TIENDA` VARCHAR(45) NULL,
  PRIMARY KEY (`idTIENDA`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`ADMIN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`ADMIN` (
  `idADMIN` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NULL,
  `APELLIDO` VARCHAR(45) NULL,
  `PASS_ADMIN` VARCHAR(45) NULL,
  `DIRECCION` VARCHAR(45) NULL,
  `FECHANACIMIENTO` DATE NULL,
  `FECHAINGRESO` DATE NULL,
  `TIENDA_idTIENDA` INT NOT NULL,
  PRIMARY KEY (`idADMIN`, `TIENDA_idTIENDA`),
  INDEX `fk_ADMIN_TIENDA1_idx` (`TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_ADMIN_TIENDA1`
    FOREIGN KEY (`TIENDA_idTIENDA`)
    REFERENCES `tienda`.`TIENDA` (`idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`CATEGORIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`CATEGORIA` (
  `idCATEGORIA` INT NOT NULL,
  `DESCRIPCION` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCATEGORIA`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`PROVEEDORES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`PROVEEDORES` (
  `idPROVEEDORES` INT NOT NULL AUTO_INCREMENT,
  `NOMBREEMPRESA_PROVEEDORES` VARCHAR(45) NULL,
  `NOMBREEMPLEADO_PROVEEDORES` VARCHAR(45) NULL,
  `DESCUENTO_PROVEEDOR` VARCHAR(45) NULL,
  `FECHAINGRESO_PROVEEDORES` DATE NULL,
  `TIENDA_idTIENDA` INT NOT NULL,
  PRIMARY KEY (`idPROVEEDORES`, `TIENDA_idTIENDA`),
  INDEX `fk_PROVEEDORES_TIENDA_idx` (`TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_PROVEEDORES_TIENDA`
    FOREIGN KEY (`TIENDA_idTIENDA`)
    REFERENCES `tienda`.`TIENDA` (`idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`PRODUCTOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`PRODUCTOS` (
  `idPRODUCTOS` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE_PRODUCTO` VARCHAR(45) NULL,
  `UNIDAD_PRODUCTO` VARCHAR(45) NULL,
  `COSTO_PRODUCTO` VARCHAR(45) NULL,
  `PRECIOVENTA_PRODUCTO` VARCHAR(45) NULL,
  `VALORMINIMO_PRODUCTO` VARCHAR(45) NULL,
  `FECHAINGRESO_PRODUCTO` DATETIME NULL,
  `CATEGORIA_PRODUCTO` VARCHAR(45) NULL,
  `FECHAVENCIMIENTO_PRODUCTO` VARCHAR(45) NULL,
  `TIENDA_idTIENDA` INT NOT NULL,
  `CATEGORIA_idCATEGORIA` INT NOT NULL,
  `PROVEEDORES_idPROVEEDORES` INT NOT NULL,
  `PROVEEDORES_TIENDA_idTIENDA` INT NOT NULL,
  PRIMARY KEY (`idPRODUCTOS`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`),
  INDEX `fk_PRODUCTOS_TIENDA1_idx` (`TIENDA_idTIENDA` ASC),
  INDEX `fk_PRODUCTOS_CATEGORIA1_idx` (`CATEGORIA_idCATEGORIA` ASC),
  INDEX `fk_PRODUCTOS_PROVEEDORES1_idx` (`PROVEEDORES_idPROVEEDORES` ASC, `PROVEEDORES_TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_PRODUCTOS_TIENDA1`
    FOREIGN KEY (`TIENDA_idTIENDA`)
    REFERENCES `tienda`.`TIENDA` (`idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUCTOS_CATEGORIA1`
    FOREIGN KEY (`CATEGORIA_idCATEGORIA`)
    REFERENCES `tienda`.`CATEGORIA` (`idCATEGORIA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUCTOS_PROVEEDORES1`
    FOREIGN KEY (`PROVEEDORES_idPROVEEDORES` , `PROVEEDORES_TIENDA_idTIENDA`)
    REFERENCES `tienda`.`PROVEEDORES` (`idPROVEEDORES` , `TIENDA_idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`VENDEDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`VENDEDOR` (
  `idVENDEDOR` INT NOT NULL,
  `TIENDA_idTIENDA` INT NOT NULL,
  PRIMARY KEY (`idVENDEDOR`, `TIENDA_idTIENDA`),
  INDEX `fk_VENDEDOR_TIENDA1_idx` (`TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_VENDEDOR_TIENDA1`
    FOREIGN KEY (`TIENDA_idTIENDA`)
    REFERENCES `tienda`.`TIENDA` (`idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`VENTAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`VENTAS` (
  `idVENTAS` INT NOT NULL AUTO_INCREMENT,
  `IVA_VENTAS` VARCHAR(45) NULL,
  `IMPUESTOCONSUMO_VENTAS` VARCHAR(45) NULL,
  `FECHACOMPRA_VENTAS` DATETIME NULL,
  `VENDEDOR_idVENDEDOR` INT NOT NULL,
  `VENDEDOR_TIENDA_idTIENDA` INT NOT NULL,
  PRIMARY KEY (`idVENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`),
  INDEX `fk_VENTAS_VENDEDOR1_idx` (`VENDEDOR_idVENDEDOR` ASC, `VENDEDOR_TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_VENTAS_VENDEDOR1`
    FOREIGN KEY (`VENDEDOR_idVENDEDOR` , `VENDEDOR_TIENDA_idTIENDA`)
    REFERENCES `tienda`.`VENDEDOR` (`idVENDEDOR` , `TIENDA_idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`CLIENTES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`CLIENTES` (
  `idCLIENTES` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE_CLIENTES` VARCHAR(45) NULL,
  `DIRECCION_CLIENTES` VARCHAR(45) NULL,
  `FECHANACIMIENTO_CLIENTES` DATE NULL,
  `EMAIL_CLIENTES` VARCHAR(45) NULL,
  `TIENDA_idTIENDA` INT NOT NULL,
  PRIMARY KEY (`idCLIENTES`, `TIENDA_idTIENDA`),
  INDEX `fk_CLIENTES_TIENDA1_idx` (`TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_CLIENTES_TIENDA1`
    FOREIGN KEY (`TIENDA_idTIENDA`)
    REFERENCES `tienda`.`TIENDA` (`idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tienda`.`CLIENTES_has_VENTAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tienda`.`CLIENTES_has_VENTAS` (
  `CLIENTES_idCLIENTES` INT NOT NULL,
  `CLIENTES_TIENDA_idTIENDA` INT NOT NULL,
  `VENTAS_idVENTAS` INT NOT NULL,
  PRIMARY KEY (`CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`),
  INDEX `fk_CLIENTES_has_VENTAS_VENTAS1_idx` (`VENTAS_idVENTAS` ASC),
  INDEX `fk_CLIENTES_has_VENTAS_CLIENTES1_idx` (`CLIENTES_idCLIENTES` ASC, `CLIENTES_TIENDA_idTIENDA` ASC),
  CONSTRAINT `fk_CLIENTES_has_VENTAS_CLIENTES1`
    FOREIGN KEY (`CLIENTES_idCLIENTES` , `CLIENTES_TIENDA_idTIENDA`)
    REFERENCES `tienda`.`CLIENTES` (`idCLIENTES` , `TIENDA_idTIENDA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CLIENTES_has_VENTAS_VENTAS1`
    FOREIGN KEY (`VENTAS_idVENTAS`)
    REFERENCES `tienda`.`VENTAS` (`idVENTAS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
