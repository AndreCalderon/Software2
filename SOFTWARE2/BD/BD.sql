SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`historial`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`historial` (
  `idHISTORIAL` INT(11) NOT NULL AUTO_INCREMENT ,
  `enfermedad` VARCHAR(45) NULL DEFAULT NULL ,
  `tratamiento` VARCHAR(45) NULL DEFAULT NULL ,
  `detalle` VARCHAR(45) NULL DEFAULT NULL ,
  `idHistorialPaci` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`idHISTORIAL`) )
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`evaluacion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`evaluacion` (
  `idEvaluacion` INT(11) NOT NULL AUTO_INCREMENT ,
  `sintomas` VARCHAR(45) NULL DEFAULT NULL ,
  `tipoEnfermedad` VARCHAR(45) NULL DEFAULT NULL ,
  `nombreEnfermedad` VARCHAR(45) NULL DEFAULT NULL ,
  `comentarios` VARCHAR(45) NULL DEFAULT NULL ,
  `HISTORIAL_idHISTORIAL` INT(11) NOT NULL ,
  PRIMARY KEY (`idEvaluacion`) ,
  INDEX `fk_EVALUACION_HISTORIAL1` (`HISTORIAL_idHISTORIAL` ASC) ,
  CONSTRAINT `fk_EVALUACION_HISTORIAL1`
    FOREIGN KEY (`HISTORIAL_idHISTORIAL` )
    REFERENCES `mydb`.`historial` (`idHISTORIAL` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`medico`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`medico` (
  `idMEDICO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `apellido` VARCHAR(45) NULL DEFAULT NULL ,
  `especialidad` VARCHAR(45) NULL DEFAULT NULL ,
  `telefono` VARCHAR(45) NULL DEFAULT NULL ,
  `usuarioMed` VARCHAR(45) NULL DEFAULT NULL ,
  `passwordMed` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idMEDICO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`datos_medico`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`datos_medico` (
  `idDATOS_MEDICO` INT(11) NOT NULL AUTO_INCREMENT ,
  `altura` VARCHAR(45) NULL DEFAULT NULL ,
  `peso` VARCHAR(45) NULL DEFAULT NULL ,
  `colesteror` VARCHAR(45) NULL DEFAULT NULL ,
  `ritmoCardiaco` VARCHAR(45) NULL DEFAULT NULL ,
  `alergico` VARCHAR(45) NULL DEFAULT NULL ,
  `presion` VARCHAR(45) NULL DEFAULT NULL ,
  `depresion` VARCHAR(45) NULL DEFAULT NULL ,
  `estres` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idDATOS_MEDICO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`paciente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`paciente` (
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `apellido` VARCHAR(45) NULL DEFAULT NULL ,
  `dni` VARCHAR(45) NULL DEFAULT NULL ,
  `telefono` VARCHAR(45) NULL DEFAULT NULL ,
  `pais` VARCHAR(45) NULL DEFAULT NULL ,
  `departamento` VARCHAR(45) NULL DEFAULT NULL ,
  `DATOS_MEDICO_idDATOS_MEDICO` INT(11) NOT NULL ,
  `idPaciente` INT(11) NOT NULL AUTO_INCREMENT ,
  `usuaruiPac` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NULL DEFAULT NULL ,
  `HISTORIAL_idHISTORIAL` INT(11) NOT NULL ,
  PRIMARY KEY (`idPaciente`) ,
  INDEX `fk_PACIENTE_HISTORIAL1` (`HISTORIAL_idHISTORIAL` ASC) ,
  INDEX `fk_PACIENTE_DATOS_MEDICO1` (`DATOS_MEDICO_idDATOS_MEDICO` ASC) ,
  CONSTRAINT `fk_PACIENTE_DATOS_MEDICO1`
    FOREIGN KEY (`DATOS_MEDICO_idDATOS_MEDICO` )
    REFERENCES `mydb`.`datos_medico` (`idDATOS_MEDICO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PACIENTE_HISTORIAL1`
    FOREIGN KEY (`HISTORIAL_idHISTORIAL` )
    REFERENCES `mydb`.`historial` (`idHISTORIAL` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`cita`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`cita` (
  `idCITA` INT(11) NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NULL DEFAULT NULL ,
  `hora` INT(11) NULL DEFAULT NULL ,
  `PACIENTE_idPaciente` INT(11) NOT NULL ,
  `MEDICO_idMEDICO` INT(11) NOT NULL ,
  `EVALUACION_idEvaluacion` INT(11) NOT NULL ,
  PRIMARY KEY (`idCITA`) ,
  INDEX `fk_CITA_PACIENTE1` (`PACIENTE_idPaciente` ASC) ,
  INDEX `fk_CITA_MEDICO1` (`MEDICO_idMEDICO` ASC) ,
  INDEX `fk_CITA_EVALUACION1` (`EVALUACION_idEvaluacion` ASC) ,
  CONSTRAINT `fk_CITA_EVALUACION1`
    FOREIGN KEY (`EVALUACION_idEvaluacion` )
    REFERENCES `mydb`.`evaluacion` (`idEvaluacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CITA_MEDICO1`
    FOREIGN KEY (`MEDICO_idMEDICO` )
    REFERENCES `mydb`.`medico` (`idMEDICO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CITA_PACIENTE1`
    FOREIGN KEY (`PACIENTE_idPaciente` )
    REFERENCES `mydb`.`paciente` (`idPaciente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;