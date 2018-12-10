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
-- Table `eshopv`.`TaiKhoan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`TaiKhoan` (
  `MaTaiKhoan` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `TenDangNhap` VARCHAR(20) NOT NULL,
  `MatKhau` VARCHAR(20) NOT NULL,
  `TenHienThi` VARCHAR(40) NOT NULL,
  `DiaChi` VARCHAR(200) NULL,
  `DienThoai` VARCHAR(11) NULL,
  `Email` VARCHAR(40) NULL,
  `BiXoa` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `HinhDaiDienURL` VARCHAR(100) NULL,
  `MaLoaiTaiKhoan` SMALLINT ZEROFILL NOT NULL COMMENT '0: admin, 1: khach hang',
  PRIMARY KEY (`MaTaiKhoan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`DonDatHang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`DonDatHang` (
  `MaDonDatHang` VARCHAR(11) NOT NULL,
  `MaTaiKhoan` INT ZEROFILL NOT NULL,
  `NgayLap` DATETIME NOT NULL,
  `NgayDuKienGiaoHang` DATETIME NOT NULL,
  `TongThanhTien` BIGINT NOT NULL,
  `BiXoa` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
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
    REFERENCES `eshopv`.`TaiKhoan` (`MaTaiKhoan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`LoaiSanPham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`LoaiSanPham` (
  `MaLoaiSanPham` INT ZEROFILL NOT NULL,
  `TenLoaiSanPham` VARCHAR(100) NULL,
  `BiXoa` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  PRIMARY KEY (`MaLoaiSanPham`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`HangSanXuat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`HangSanXuat` (
  `MaHangSanXuat` INT ZEROFILL NOT NULL,
  `TenHangSanXuat` VARCHAR(100) NULL,
  `LogoURL` VARCHAR(100) NULL,
  `BiXoa` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `HangSanXuatcol` VARCHAR(45) NULL,
  PRIMARY KEY (`MaHangSanXuat`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`SanPham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`SanPham` (
  `MaSanPham` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `TenSanPham` VARCHAR(100) NULL,
  `HinhURL` VARCHAR(100) NULL,
  `GiaSanPham` INT NULL,
  `XuatXu` VARCHAR(40) NULL,
  `NgayNhap` DATETIME NULL,
  `SoLuongTon` INT NULL,
  `SoLuongBan` INT NULL,
  `SoLuotXem` INT NULL,
  `MoTa` TEXT NULL,
  `BiXoa` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `MaLoaiSanPham` INT ZEROFILL NOT NULL,
  `MaHangSanXuat` INT ZEROFILL NOT NULL,
  PRIMARY KEY (`MaSanPham`),
  INDEX `fk_MaLoaiSanPhamSP_MaLoaiSanPhamLSP_idx` (`MaLoaiSanPham` ASC), # VISIBLE,
  INDEX `fk_MaHangSanXuatSP_MaHangSanXuatHSX_idx` (`MaHangSanXuat` ASC), # VISIBLE,
  CONSTRAINT `fk_MaLoaiSanPhamSP_MaLoaiSanPhamLSP`
    FOREIGN KEY (`MaLoaiSanPham`)
    REFERENCES `eshopv`.`LoaiSanPham` (`MaLoaiSanPham`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MaHangSanXuatSP_MaHangSanXuatHSX`
    FOREIGN KEY (`MaHangSanXuat`)
    REFERENCES `eshopv`.`HangSanXuat` (`MaHangSanXuat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eshopv`.`ChiTietDonDatHang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eshopv`.`ChiTietDonDatHang` (
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
    REFERENCES `eshopv`.`DonDatHang` (`MaDonDatHang`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MaSanPhamCTDDH_MaSanPhamSP`
    FOREIGN KEY (`MaSanPham`)
    REFERENCES `eshopv`.`SanPham` (`MaSanPham`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
