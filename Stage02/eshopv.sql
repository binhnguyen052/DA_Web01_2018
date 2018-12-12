-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema eshopv
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema eshopv
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `eshopv` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `eshopv` ;

-- -----------------------------------------------------
-- Table `eshopv`.`ACCOUNT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`ACCOUNT` (
  `AccountID` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `UserName` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(40) NOT NULL,
  `DisplayName` VARCHAR(40) NOT NULL,
  `Address` VARCHAR(200) NULL,
  `Tel` VARCHAR(11) NULL,
  `Email` VARCHAR(40) NULL,
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `AvartarURL` VARCHAR(100) NULL,
  `AccountType` SMALLINT ZEROFILL NOT NULL COMMENT '0: admin, 1: khach hang',
  PRIMARY KEY (`AccountID`),
  UNIQUE INDEX `DisplayName_UNIQUE` (`DisplayName` ASC), #VISIBLE,
  UNIQUE INDEX `UserName_UNIQUE` (`UserName` ASC) #VISIBLE
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`PRODUCT_ORDER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`PRODUCT_ORDER` (
  `ProductOrderID` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `AccountID` INT ZEROFILL NOT NULL,
  `DateCreate` DATETIME NOT NULL COMMENT 'ngày lập',
  `DateDelivery` DATETIME NOT NULL COMMENT 'ngày giao',
  `TotalAmount` BIGINT NOT NULL COMMENT 'tổng tiền',
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `Status` SMALLINT NOT NULL COMMENT '0: chua giao, 1: da giao',
  `RecipientName` VARCHAR(40) NOT NULL COMMENT 'tên người nhận',
  `RecipientTel` VARCHAR(11) NULL COMMENT 'SDT người nhận',
  `AddressNumber` VARCHAR(20) NOT NULL COMMENT 'số nhà',
  `Street` VARCHAR(20) NOT NULL COMMENT 'tên đường',
  `Ward` VARCHAR(20) NOT NULL COMMENT 'phường, xã',
  `District` VARCHAR(20) NOT NULL COMMENT 'quận, huyện',
  `Province` VARCHAR(20) NOT NULL COMMENT 'tỉnh, thành phố',
  PRIMARY KEY (`ProductOrderID`),
  INDEX `fk_AccountID_idx` (`AccountID` ASC), # VISIBLE,
  CONSTRAINT `fk_AccounID_PO`
    FOREIGN KEY (`AccountID`)
    REFERENCES `eshopv`.`ACCOUNT` (`AccountID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`PRODUCT_TYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`PRODUCT_TYPE` (
  `ProductTypeID` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `ProductTypeName` VARCHAR(100) NOT NULL COMMENT 'tên nhà sản xuất',
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  PRIMARY KEY (`ProductTypeID`),
  UNIQUE INDEX `ProductTypeName_UNIQUE` (`ProductTypeName` ASC) #VISIBLE
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`MANUFACTURER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`MANUFACTURER` (
  `ManufacturerID` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `ManufacturerName` VARCHAR(100) NOT NULL COMMENT 'tên nhà sản xuất',
  `LogoURL` VARCHAR(100) NULL,
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  PRIMARY KEY (`ManufacturerID`),
  UNIQUE INDEX `ManufactureName_UNIQUE` (`ManufacturerName` ASC) #VISIBLE
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`PRODUCT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`PRODUCT` (
  `ProductID` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `ProductName` VARCHAR(100) NOT NULL,
  `ImageURL` VARCHAR(100) NULL,
  `Price` INT NULL,
  `Origin` VARCHAR(40) NULL COMMENT 'xuất xứ',
  `DateAdded` DATETIME NULL COMMENT 'ngày nhập',
  `InventoryQuantity` INT NULL COMMENT 'Số lượng tồn',
  `AmountSold` INT NULL COMMENT 'số lượng bán',
  `ViewCounts` INT NULL COMMENT 'số lượt xem',
  `Descreibe` TEXT NULL COMMENT 'mô tả',
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `ProductTypeID` INT ZEROFILL NOT NULL,
  `ManufacturerID` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`ProductID`),
  INDEX `fk_ProductTypeID_idx` (`ProductTypeID` ASC), # VISIBLE,
  INDEX `fk_ManufacturerID_idx` (`ManufacturerID` ASC), # VISIBLE,
  CONSTRAINT `fk_ProductTypeID`
    FOREIGN KEY (`ProductTypeID`)
    REFERENCES `eshopv`.`PRODUCT_TYPE` (`ProductTypeID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ManufacturerID`
    FOREIGN KEY (`ManufacturerID`)
    REFERENCES `eshopv`.`MANUFACTURER` (`ManufacturerID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`ORDER_DETAIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`ORDER_DETAIL` (
  `OrderDetailID` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `Quantity` INT NULL,
  `Price` INT NULL,
  `ProductOrderID` INT ZEROFILL NOT NULL,
  `ProductID` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`OrderDetailID`),
  INDEX `fk_ProductOderID_idx` (`ProductOrderID` ASC), # VISIBLE,
  INDEX `fk_ProductID_idx` (`ProductID` ASC), # VISIBLE,
  CONSTRAINT `fk_ProductOrderID_O`
    FOREIGN KEY (`ProductOrderID`)
    REFERENCES `eshopv`.`PRODUCT_ORDER` (`ProductOrderID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProductID_O`
    FOREIGN KEY (`ProductID`)
    REFERENCES `eshopv`.`PRODUCT` (`ProductID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
