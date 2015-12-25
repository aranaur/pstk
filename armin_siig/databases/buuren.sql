-- MySQL Script generated by MySQL Workbench
-- 02/13/15 19:33:48
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`person`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`person` (
  `idperson` INT NOT NULL,
  `name` CHAR(20) NULL,
  `second_name` CHAR(20) NULL,
  `birth_date` DATE NULL,
  `birth_location` TEXT(30) NULL,
  `occupation` TEXT(60) NULL,
  PRIMARY KEY (`idperson`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`highly_rated_music`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`highly_rated_music` (
  `idhighly_rated_music` INT NOT NULL,
  `music_name` TEXT(45) NULL,
  `release_date` DATE NULL,
  `owner` CHAR(20) NULL,
  PRIMARY KEY (`idhighly_rated_music`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`person_has_highly_rated_music`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`person_has_highly_rated_music` (
  `person_idperson` INT NOT NULL,
  `highly_rated_music_idhighly_rated_music` INT NOT NULL,
  PRIMARY KEY (`person_idperson`, `highly_rated_music_idhighly_rated_music`),
  INDEX `fk_person_has_highly_rated_music_highly_rated_music1_idx` (`highly_rated_music_idhighly_rated_music` ASC),
  INDEX `fk_person_has_highly_rated_music_person_idx` (`person_idperson` ASC),
  CONSTRAINT `fk_person_has_highly_rated_music_person`
    FOREIGN KEY (`person_idperson`)
    REFERENCES `mydb`.`person` (`idperson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_person_has_highly_rated_music_highly_rated_music1`
    FOREIGN KEY (`highly_rated_music_idhighly_rated_music`)
    REFERENCES `mydb`.`highly_rated_music` (`idhighly_rated_music`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`person` (`idperson`, `name`, `second_name`,`birth_date`,`birth_location`,`occupation`) VALUES (1, 'armin', 'van Buuren', 1976-25-12.,'Holland','DJ');
INSERT INTO `mydb`.`highly_rated_music` (`idhighly_rated_music`, `music_name`, `release_date`,`owner`) VALUES (1, 'Ping Pong', 2014-03-24, 'armin');