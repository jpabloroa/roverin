CREATE DATABASE `roverin`;
USE `roverin`;
CREATE TABLE `trabajos` (
    `fechaDeCreacion` DATETIME NOT NULL,
    `codigoConteo` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(20) NULL,
    `correo` VARCHAR(30) NOT NULL,
    `celular` VARCHAR(20) NULL,
    `palabras` VARCHAR(50) NULL,
    `estado` INT(1) NOT NULL,
    `diasDeSolicitud` VARCHAR(4) NULL,
    `mensaje` TINYTEXT NULL
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_unicode_ci;