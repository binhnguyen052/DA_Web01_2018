-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema QuanLySanPham
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema QuanLySanPham
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `QuanLySanPham` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `QuanLySanPham` ;

-- -----------------------------------------------------
-- Table `QuanLySanPham`.`TaiKhoan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `QuanLySanPham`.`TaiKhoan` (
  `MaTaiKhoan` INT ZEROFILL NOT NULL,
  `TenDangNhap` VARCHAR(20) NOT NULL,
  `MatKhau` VARCHAR(20) NOT NULL,
  `TenHienThi` VARCHAR(40) NOT NULL,
  `DiaChi` VARCHAR(200) NULL,
  `DienThoai` VARCHAR(11) NULL,
  `Email` VARCHAR(40) NULL,
  `BiXoa` SMALLINT NOT NULL,
  `HinhDaiDienURL` VARCHAR(100) NULL,
  `MaLoaiTaiKhoan` SMALLINT ZEROFILL NOT NULL COMMENT '0: admin, 1: khach hang',
  `BiXoa` SMALLINT NULL,
  PRIMARY KEY (`MaTaiKhoan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `QuanLySanPham`.`DonDatHang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `QuanLySanPham`.`DonDatHang` (
  `MaDonDatHang` VARCHAR(11) NOT NULL,
  `MaTaiKhoan` INT ZEROFILL NOT NULL,
  `NgayLap` DATETIME NOT NULL,
  `NgayDuKienGiaoHang` DATETIME NOT NULL,
  `TongThanhTien` BIGINT NOT NULL,
  `BiXoa` SMALLINT NULL,
  `TinhTrang` SMALLINT NOT NULL COMMENT '0: chua giao, 1: da giao',
  `TenNguoiNhan` VARCHAR(40) NOT NULL,
  `SDTNguoiNhan` VARCHAR(11) NULL,
  `SoNha` VARCHAR(20) NOT NULL,
  `TenDuong` VARCHAR(20) NOT NULL,
  `Phuong` VARCHAR(20) NOT NULL,
  `Quan` VARCHAR(20) NOT NULL,
  `Tinh` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`MaDonDatHang`),
  INDEX `fk_MaTaiKhoan_MaTaiKhoan_idx` (`MaTaiKhoan` ASC), #VISIBLE,
  CONSTRAINT `fk_MaTaiKhoanDDH_MaTaiKhoanTK`
    FOREIGN KEY (`MaTaiKhoan`)
    REFERENCES `QuanLySanPham`.`TaiKhoan` (`MaTaiKhoan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `QuanLySanPham`.`LoaiSanPham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `QuanLySanPham`.`LoaiSanPham` (
  `MaLoaiSanPham` INT ZEROFILL NOT NULL,
  `TenLoaiSanPham` VARCHAR(100) NULL,
  `BiXoa` SMALLINT NULL,
  PRIMARY KEY (`MaLoaiSanPham`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `QuanLySanPham`.`HangSanXuat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `QuanLySanPham`.`HangSanXuat` (
  `MaHangSanXuat` INT ZEROFILL NOT NULL,
  `TenHangSanXuat` VARCHAR(100) NULL,
  `LogoURL` VARCHAR(100) NULL,
  `BiXoa` SMALLINT NULL,
  `HangSanXuatcol` VARCHAR(45) NULL,
  PRIMARY KEY (`MaHangSanXuat`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `QuanLySanPham`.`SanPham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `QuanLySanPham`.`SanPham` (
  `MaSanPham` INT ZEROFILL NOT NULL,
  `TenSanPham` VARCHAR(100) NULL,
  `HinhURL` VARCHAR(100) NULL,
  `GiaSanPham` INT NULL,
  `XuatXu` VARCHAR(40) NULL,
  `NgayNhap` DATETIME NULL,
  `SoLuongTon` INT NULL,
  `SoLuongBan` INT NULL,
  `SoLuotXem` INT NULL,
  `MoTa` TEXT NULL,
  `BiXoa` SMALLINT NULL,
  `MaLoaiSanPham` INT ZEROFILL NOT NULL,
  `MaHangSanXuat` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`MaSanPham`),
  INDEX `fk_MaLoaiSanPhamSP_MaLoaiSanPhamLSP_idx` (`MaLoaiSanPham` ASC), # VISIBLE,
  INDEX `fk_MaHangSanXuatSP_MaHangSanXuatHSX_idx` (`MaHangSanXuat` ASC), # VISIBLE,
  CONSTRAINT `fk_MaLoaiSanPhamSP_MaLoaiSanPhamLSP`
    FOREIGN KEY (`MaLoaiSanPham`)
    REFERENCES `QuanLySanPham`.`LoaiSanPham` (`MaLoaiSanPham`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MaHangSanXuatSP_MaHangSanXuatHSX`
    FOREIGN KEY (`MaHangSanXuat`)
    REFERENCES `QuanLySanPham`.`HangSanXuat` (`MaHangSanXuat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `QuanLySanPham`.`ChiTietDonDatHang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `QuanLySanPham`.`ChiTietDonDatHang` (
  `MaChiTietDonDatHang` VARCHAR(15) NOT NULL,
  `SoLuong` INT NULL,
  `GiaBan` INT NULL,
  `MaDonDatHang` VARCHAR(11) NOT NULL,
  `MaSanPham` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`MaChiTietDonDatHang`),
  INDEX `fk_MaDonDatHangCTDDH_MaDonDatHangDDH_idx` (`MaDonDatHang` ASC), # VISIBLE,
  INDEX `fk_MaSanPhamCTDDH_MaSanPhamSP_idx` (`MaSanPham` ASC), # VISIBLE,
  CONSTRAINT `fk_MaDonDatHangCTDDH_MaDonDatHangDDH`
    FOREIGN KEY (`MaDonDatHang`)
    REFERENCES `QuanLySanPham`.`DonDatHang` (`MaDonDatHang`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MaSanPhamCTDDH_MaSanPhamSP`
    FOREIGN KEY (`MaSanPham`)
    REFERENCES `QuanLySanPham`.`SanPham` (`MaSanPham`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
