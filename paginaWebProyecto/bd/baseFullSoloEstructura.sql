-- MySQL Workbench Synchronization
-- Generated: 2015-08-16 01:17
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Julian Castaño

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `SIGCO` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Usuarios` (
  `IdUsuario` INT(11) NOT NULL,
  `Nombres` VARCHAR(50) NOT NULL,
  `Apellidos` VARCHAR(50) NOT NULL,
  `Empleo` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(70) NOT NULL,
  `Contrasenia` VARCHAR(50) NOT NULL,
  `Estado` TINYINT(1) NOT NULL,
  `rutaImagen` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`IdUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Clientes` (
  `IdCliente` INT(11) NOT NULL,
  `RazonSocial` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(45) NOT NULL,
  `TelFijo` INT(11) NOT NULL,
  `Email` VARCHAR(70) NOT NULL,
  `NombresContacto` VARCHAR(45) NOT NULL,
  `ApellidosContacto` VARCHAR(45) NOT NULL,
  `CelularContacto` INT(11) NOT NULL,
  `EmailContacto` VARCHAR(70) NOT NULL,
  `IdTipo` INT(11) NOT NULL,
  `IdActividad` INT(11) NOT NULL,
  `IdClasificacion` INT(11) NOT NULL,
  `IdCiudad` INT(11) NOT NULL,
  PRIMARY KEY (`IdCliente`),
  INDEX `fk_Clientes_TiposEmpresas1_idx` (`IdTipo` ASC),
  INDEX `fk_Clientes_ActividadesEmpresas1_idx` (`IdActividad` ASC),
  INDEX `fk_Clientes_Clasificaciones1_idx` (`IdClasificacion` ASC),
  INDEX `fk_Clientes_Ciudades1_idx` (`IdCiudad` ASC),
  CONSTRAINT `fk_Clientes_TiposEmpresas1`
    FOREIGN KEY (`IdTipo`)
    REFERENCES `SIGCO`.`TiposEmpresas` (`IdTipo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Clientes_ActividadesEmpresas1`
    FOREIGN KEY (`IdActividad`)
    REFERENCES `SIGCO`.`ActividadesEmpresas` (`IdActividad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Clientes_Clasificaciones1`
    FOREIGN KEY (`IdClasificacion`)
    REFERENCES `SIGCO`.`Clasificaciones` (`IdClasificacion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Clientes_Ciudades1`
    FOREIGN KEY (`IdCiudad`)
    REFERENCES `SIGCO`.`Ciudades` (`IdCiudad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`TiposEmpresas` (
  `IdTipo` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`IdTipo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`ActividadesEmpresas` (
  `IdActividad` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `PagaIva` TINYINT(1) NOT NULL,
  PRIMARY KEY (`IdActividad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Clasificaciones` (
  `IdClasificacion` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdClasificacion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Productos` (
  `IdProducto` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(50) NOT NULL,
  `Descripcion` VARCHAR(100) NOT NULL,
  `UnidadMedida` VARCHAR(20) NOT NULL,
  `IdIva` INT(11) NOT NULL,
  `ValorBase` INT(11) NOT NULL,
  `IdPresentacion` INT(11) NOT NULL,
  `IdCategoria` INT(11) NOT NULL,
  `Estado` TINYINT(1) NOT NULL,
  `rutaImagen` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  INDEX `fk_Productos_Presentacion1_idx` (`IdPresentacion` ASC),
  INDEX `fk_Productos_CategoriaProducto1_idx` (`IdCategoria` ASC),
  INDEX `fk_Productos_Impuestos_idx` (`IdIva` ASC),
  CONSTRAINT `fk_Productos_Presentacion1`
    FOREIGN KEY (`IdPresentacion`)
    REFERENCES `SIGCO`.`Presentaciones` (`IdPresentacion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Productos_CategoriaProducto1`
    FOREIGN KEY (`IdCategoria`)
    REFERENCES `SIGCO`.`CategoriasProductos` (`IdCategoria`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Productos_Impuestos`
    FOREIGN KEY (`IdIva`)
    REFERENCES `SIGCO`.`Impuestos` (`IdIva`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`CategoriasProductos` (
  `IdCategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdCategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Presentaciones` (
  `IdPresentacion` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdPresentacion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Gestiones` (
  `IdUsuario` INT(11) NOT NULL,
  `IdEmpresa` INT(11) NOT NULL,
  `FechaProgramada` DATE NOT NULL,
  `Estado` ENUM('PENDIENTE', 'CANCELADA', 'COMPLETADA') NOT NULL,
  `Tipo` ENUM('ASESORIA', 'CAPACITACION') NOT NULL,
  `Asunto` VARCHAR(45) NOT NULL,
  `Asistentes` INT(11) NOT NULL,
  `Observaciones` VARCHAR(200) NOT NULL,
  `Lugar` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`IdUsuario`, `FechaProgramada`),
  INDEX `fk_Asesorias_Empresas1_idx` (`IdEmpresa` ASC),
  INDEX `fk_Asesorias_Usuarios1_idx` (`IdUsuario` ASC),
  CONSTRAINT `fk_Asesorias_Empresas1`
    FOREIGN KEY (`IdEmpresa`)
    REFERENCES `SIGCO`.`Clientes` (`IdCliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Asesorias_Usuarios1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `SIGCO`.`Usuarios` (`IdUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`OrdenesDeCompra` (
  `IdOrden` INT(11) NOT NULL AUTO_INCREMENT,
  `Cotizaciones_IdCotizacion` INT(11) NOT NULL,
  `Estado` TINYINT(1) NOT NULL,
  `Fecha` TIMESTAMP NOT NULL,
  `TotalCotizacion` INT(11) NOT NULL,
  `DescuentoTotal` INT(11) NOT NULL,
  `GranTotal` INT(11) NOT NULL,
  `Observaciones` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`IdOrden`),
  INDEX `fk_OrdenDeCompra_Cotizaciones1_idx` (`Cotizaciones_IdCotizacion` ASC),
  CONSTRAINT `fk_OrdenDeCompra_Cotizaciones1`
    FOREIGN KEY (`Cotizaciones_IdCotizacion`)
    REFERENCES `SIGCO`.`Cotizaciones` (`IdCotizacion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Metas` (
  `IdMeta` INT(11) NOT NULL AUTO_INCREMENT,
  `Tipo` ENUM('VENTAS', 'VISITAS') NOT NULL,
  `CantidadValor` INT(11) NOT NULL,
  `FechaInicio` DATE NOT NULL,
  `FechaFin` DATE NOT NULL,
  PRIMARY KEY (`IdMeta`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Cotizaciones` (
  `IdCotizacion` INT(11) NOT NULL AUTO_INCREMENT,
  `Estado` ENUM('VIGENTE', 'CANCELADA', 'OC') NOT NULL,
  `FechaCreacion` TIMESTAMP NOT NULL,
  `ValorTotal` INT(11) NOT NULL,
  `Observaciones` VARCHAR(200) NOT NULL,
  `DescuentoIvaXCliente` TINYINT(1) NOT NULL,
  `IdUsuario` INT(11) NOT NULL,
  `IdCliente` INT(11) NOT NULL,
  PRIMARY KEY (`IdCotizacion`),
  INDEX `fk_Cotizaciones_Usuarios1_idx` (`IdUsuario` ASC),
  INDEX `fk_Cotizaciones_Cliente1_idx` (`IdCliente` ASC),
  CONSTRAINT `fk_Cotizaciones_Usuarios1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `SIGCO`.`Usuarios` (`IdUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Cotizaciones_Cliente1`
    FOREIGN KEY (`IdCliente`)
    REFERENCES `SIGCO`.`Clientes` (`IdCliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`DetallesCotizacion` (
  `IdCotizacion` INT(11) NOT NULL,
  `IdProducto` INT(11) NOT NULL,
  `Cantidad` INT(11) NOT NULL,
  `Iva` INT(11) NOT NULL,
  `Total` INT(11) NOT NULL,
  PRIMARY KEY (`IdCotizacion`, `IdProducto`),
  INDEX `fk_CotizacionDetalles_Cotizaciones1_idx` (`IdCotizacion` ASC),
  INDEX `fk_CotizacionDetalles_Productos1_idx` (`IdProducto` ASC),
  CONSTRAINT `fk_CotizacionDetalles_Cotizaciones1`
    FOREIGN KEY (`IdCotizacion`)
    REFERENCES `SIGCO`.`Cotizaciones` (`IdCotizacion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CotizacionDetalles_Productos1`
    FOREIGN KEY (`IdProducto`)
    REFERENCES `SIGCO`.`Productos` (`IdProducto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`MetasUsuarios` (
  `Usuarios_IdUsuario` INT(11) NOT NULL,
  `Metas_IdMeta` INT(11) NOT NULL,
  PRIMARY KEY (`Usuarios_IdUsuario`, `Metas_IdMeta`),
  INDEX `fk_MetasUsuario_Usuarios1_idx` (`Usuarios_IdUsuario` ASC),
  INDEX `fk_MetasUsuario_Metas1_idx` (`Metas_IdMeta` ASC),
  CONSTRAINT `fk_MetasUsuario_Usuarios1`
    FOREIGN KEY (`Usuarios_IdUsuario`)
    REFERENCES `SIGCO`.`Usuarios` (`IdUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_MetasUsuario_Metas1`
    FOREIGN KEY (`Metas_IdMeta`)
    REFERENCES `SIGCO`.`Metas` (`IdMeta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`RolesUsuarios` (
  `Usuarios_IdUsuario` INT(11) NOT NULL,
  `Roles_IdRolUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`Usuarios_IdUsuario`, `Roles_IdRolUsuario`),
  INDEX `fk_RolUsuario_Usuarios1_idx` (`Usuarios_IdUsuario` ASC),
  INDEX `fk_RolUsuario_Roles1_idx` (`Roles_IdRolUsuario` ASC),
  CONSTRAINT `fk_RolUsuario_Usuarios1`
    FOREIGN KEY (`Usuarios_IdUsuario`)
    REFERENCES `SIGCO`.`Usuarios` (`IdUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_RolUsuario_Roles1`
    FOREIGN KEY (`Roles_IdRolUsuario`)
    REFERENCES `SIGCO`.`Roles` (`IdRolUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Roles` (
  `IdRolUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`IdRolUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Ciudades` (
  `IdCiudad` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdCiudad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Temas` (
  `IdTemas` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdTemas`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Permisos` (
  `IdPermisos` INT(11) NOT NULL AUTO_INCREMENT,
  `Url` VARCHAR(100) NOT NULL,
  `NombrePagina` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdPermisos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`RolesPermisos` (
  `Roles_IdRolUsuario` INT(11) NOT NULL,
  `Permisos_IdPermisos` INT(11) NOT NULL,
  PRIMARY KEY (`Roles_IdRolUsuario`, `Permisos_IdPermisos`),
  INDEX `fk_RolesPermisos_Roles1_idx` (`Roles_IdRolUsuario` ASC),
  INDEX `fk_RolesPermisos_Permisos1_idx` (`Permisos_IdPermisos` ASC),
  CONSTRAINT `fk_RolesPermisos_Roles1`
    FOREIGN KEY (`Roles_IdRolUsuario`)
    REFERENCES `SIGCO`.`Roles` (`IdRolUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_RolesPermisos_Permisos1`
    FOREIGN KEY (`Permisos_IdPermisos`)
    REFERENCES `SIGCO`.`Permisos` (`IdPermisos`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `SIGCO`.`Impuestos` (
  `IdIva` INT(11) NOT NULL AUTO_INCREMENT,
  `Porcentaje` INT(11) NOT NULL,
  PRIMARY KEY (`IdIva`),
  UNIQUE INDEX `Porcentaje_UNIQUE` (`Porcentaje` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
