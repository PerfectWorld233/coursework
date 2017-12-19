-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema government knowledge
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema govknow
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema govknow
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `govknow` DEFAULT CHARACTER SET latin1 ;
USE `govknow` ;

-- -----------------------------------------------------
-- Table `govknow`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`address` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `postcode` VARCHAR(45) NOT NULL,
  `country` VARCHAR(45) NOT NULL,
  `region` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`contact` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `recordType` TEXT NULL DEFAULT NULL,
  `recordStatus` TEXT NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `instruction` VARCHAR(45) NULL DEFAULT NULL,
  `title` VARCHAR(45) NULL DEFAULT NULL,
  `fname` VARCHAR(45) NULL DEFAULT NULL,
  `lname` VARCHAR(45) NULL DEFAULT NULL,
  `jobtitle` VARCHAR(45) NULL DEFAULT NULL,
  `personType` TEXT NULL DEFAULT NULL,
  `twitter` VARCHAR(45) NULL DEFAULT NULL,
  `linkedln` VARCHAR(45) NULL DEFAULT NULL,
  `professionalInterest` VARCHAR(45) NULL DEFAULT NULL,
  `professionalWeb` VARCHAR(45) NULL DEFAULT NULL,
  `telephone` VARCHAR(45) NULL DEFAULT NULL,
  `telephone2` VARCHAR(45) NULL DEFAULT NULL,
  `mobile` VARCHAR(45) NULL DEFAULT NULL,
  `organisation` VARCHAR(45) NULL DEFAULT NULL,
  `departmentLevel1` VARCHAR(45) NULL DEFAULT NULL,
  `dapartmentLevel2` VARCHAR(45) NULL DEFAULT NULL,
  `biographyText` VARCHAR(45) NULL DEFAULT NULL,
  `notes` VARCHAR(45) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `entry_time` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`address_contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`address_contact` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `address_id` INT(11) NOT NULL,
  `contact_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_address_contact_address_idx` (`address_id` ASC),
  INDEX `fk_address_contact_contact_idx` (`contact_id` ASC),
  CONSTRAINT `fk_address_contact_address`
    FOREIGN KEY (`address_id`)
    REFERENCES `govknow`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_address_contact_contact`
    FOREIGN KEY (`contact_id`)
    REFERENCES `govknow`.`contact` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`organisation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`organisation` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `orgType` TEXT NULL DEFAULT NULL,
  `interestSectorAreas` VARCHAR(45) NULL DEFAULT NULL,
  `twitter` VARCHAR(45) NULL DEFAULT NULL,
  `schoolLowerAge` VARCHAR(45) NULL DEFAULT NULL,
  `schoolHigherAge` VARCHAR(45) NULL DEFAULT NULL,
  `schoolURN` VARCHAR(45) NULL DEFAULT NULL,
  `notes` VARCHAR(45) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`address_organisation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`address_organisation` (
  `id` INT(11) NOT NULL,
  `address_id` INT(11) NOT NULL,
  `organisation_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_address_organisation_address_idx` (`address_id` ASC),
  INDEX `fk_address_organisation_organisation_idx` (`organisation_id` ASC),
  CONSTRAINT `fk_address_organisation_address`
    FOREIGN KEY (`address_id`)
    REFERENCES `govknow`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_address_organisation_organisation`
    FOREIGN KEY (`organisation_id`)
    REFERENCES `govknow`.`organisation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`admin` (
  `id` INT(11) NOT NULL,
  `fname` VARCHAR(45) NULL DEFAULT NULL,
  `lname` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `active` TINYINT(1) NULL DEFAULT NULL,
  `submission` INT(11) NULL DEFAULT NULL,
  `entry_time` DATETIME NULL DEFAULT NULL,
  `userLevel` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`category` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`dataupload`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`dataupload` (
  `id` INT(11) NOT NULL,
  `repository` TEXT NULL DEFAULT NULL,
  `file` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`org_category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`org_category` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `organisation_id` INT(11) NOT NULL,
  `category_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_org_category_category_idx` (`category_id` ASC),
  INDEX `fk_org_category_organisation_idx` (`organisation_id` ASC),
  CONSTRAINT `fk_org_category_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `govknow`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_org_category_organisation`
    FOREIGN KEY (`organisation_id`)
    REFERENCES `govknow`.`organisation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`permission`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`permission` (
  `id` INT(11) NOT NULL,
  `permission` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`role` (
  `id` INT(11) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`permission_role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`permission_role` (
  `id` INT(11) NOT NULL,
  `permission_id` INT(11) NOT NULL,
  `role_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_permission_role_role_idx` (`role_id` ASC),
  INDEX `fk_permission_role_permission_idx` (`permission_id` ASC),
  CONSTRAINT `fk_permission_role_permission`
    FOREIGN KEY (`permission_id`)
    REFERENCES `govknow`.`permission` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_permission_role_role`
    FOREIGN KEY (`role_id`)
    REFERENCES `govknow`.`role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `govknow`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `govknow`.`user` (
  `id` INT(11) NOT NULL,
  `fname` VARCHAR(45) NULL DEFAULT NULL,
  `lname` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `active` TINYINT(1) NOT NULL,
  `submission` INT(11) NULL DEFAULT NULL,
  `entry_time` DATETIME NULL DEFAULT NULL,
  `role_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_role_idx` (`role_id` ASC),
  CONSTRAINT `fk_user_role`
    FOREIGN KEY (`role_id`)
    REFERENCES `govknow`.`role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
