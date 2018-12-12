
/* eshop
thứ tự nhập các bảng
ACCOUNT: TaiKhoan
PRODUCT_TYPE: LoaiSanPham
MANUFACTURER: HangSanXuat
PRODUCT: SanPham
PRODUCT_ORDER: DonDatHang	
ORDER_DETAIL: ChiTietDonDatHang

Delete: 1-chưa xóa, 0-đã xóa
AccountType: 0-admin, 1-khách hàng
*/

/*
  `AccountID` INT ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `UserName` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(40) NOT NULL,
  `DisplayName` VARCHAR(40) NOT NULL,
  `Address` VARCHAR(200) NULL,
  `Tel` VARCHAR(11) NULL,
  `Email` VARCHAR(40) NULL,
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
  `AvartarURL` VARCHAR(100) NULL,
  `AccountType` SMALLINT ZEROFILL NOT NULL COMMENT '0: admin, 1: khach hang',
*/

insert into account(UserName, Password, DisplayName, Address, Tel, Email, Deleted, AvartarURL, AccountType)
values
('admin01', '1256', 'Garen', null, null, null, 1, null, 0),
('admin02', '1256', 'Camllie', null, null, null, 1, null, 0),
('admin03', '1256', 'Ezreal', null, null, null, 1, null, 0),
(md5(admin04), md5(1256), 'Aatrox',null, null, null, 1, null, 0),
('user01', '1256', 'Lux', null, null, null, 1, null, 0),
('user02', '1256', 'Jinx', null, null, null, 1, null, 0),
('user03', '1256', 'Olaf', null, null, null, 1, null, 0),
(md5(user04), md5(1256), 'Leona',null, null, null, 1, null, 0);

/*
  `ProductTypeID` INT ZEROFILL NOT NULL PRIMARY KEY,
  `ProductTypeName` VARCHAR(100) NOT NULL COMMENT 'tên nhà sản xuất' UNIQUE,
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
*/

insert into product_type(ProductTypeName, Deleted)
values 
('bag', 1),
('shirt', 1),
('shoe', 1),
('pant', 1),
('watch', 1);

/*
  `ManufacturerID` INT ZEROFILL NOT NULL PRIMARY KEY,
  `ManufactureName` VARCHAR(100) NOT NULL COMMENT 'tên nhà sản xuất' UNIQUE,
  `LogoURL` VARCHAR(100) NULL,
  `Deleted` SMALLINT NOT NULL DEFAULT 1 COMMENT '1: chưa xóa, 0: bị xóa',
*/

insert into manufacturer(ManufacturerName, LogoURL, Deleted)
values 
('adidas', null, 1),
('an phước', null, 1),
('casio', null, 1),
('levi', null, 1),
('nike', null, 1),
('seiko', null, 1),
('việt tiến', null, 1);

/*
  `ProductID` INT ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
  `ProductTypeID` INT ZEROFILL NOT NULL FOREIGN KEY REFERENCES `PRODUCT_TYPE` (`ProductTypeID`),
  `ManufacturerID` INT ZEROFILL NOT NULL FOREIGN KEY  REFERENCES `MANUFACTURER` (`ManufacturerID`),
*/


insert into product(ProductName, ImageURL, Price, Origin, DateAdded, InventoryQuantity, 
AmountSold, ViewCounts, Descreibe, Deleted, ProductTypeID, ManufacturerID)
values 
('adidas white shoes', null, null, null, null, null, null, null, null, 1, 1, 1);

/*
  `ProductOrderID` INT ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
*/

insert into product(AccountID, DateCreate, DateDelivery, TotalAmount, Deleted, Status, 
RecipientName, RecipientTel, AddressNumber, Street, Ward, District, Province)
values 
('adidas white shoes', 6, null, null, null, null, null, '66666A', 'Nguyễn Cửu Phú', 'Tân Kiên', 'Bình Chánh', 'TP.HCM');

/*
  `OrderDetailID` INT ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Quantity` INT NULL,
  `Price` INT NULL,
  `ProductOrderID` INT ZEROFILL NOT NULL FOREIGN KEY  REFERENCES `PRODUCT_ORDER` (`ProductOrderID`),
  `ProductID` INT ZEROFILL NOT NULL FOREIGN KEY  REFERENCES `PRODUCT` (`ProductID`),
*/

insert into product(Quantity, Price, ProductOrderID, ProductID)
values 
(6, 60000, 1, 6);
















