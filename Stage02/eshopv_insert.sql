
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
Status: 0: chưa giao, 1: đã giao
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
(md5('admin04'), md5('1256'), 'Aatrox',null, null, null, 1, null, 0),

('user01', '1256', 'Lux', null, null, null, 1, null, 1),
('user02', '1256', 'Jinx', null, null, null, 1, null, 1),
('user03', '1256', 'Olaf', null, null, null, 1, null, 1),
(md5('user04'), md5('1256'), 'Leona',null, null, null, 1, null, 1);

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

/*
1('adidas', null, 1),
2('an phước', null, 1),
3('casio', null, 1),
4('levi', null, 1),
5('nike', null, 1),
6('seiko', null, 1),
7('việt tiến', null, 1);

1('bag', 1),
2('shirt', 1),
3('shoe', 1),
4('pant', 1),
5('watch', 1);
*/

insert into product(ProductName, ImageURL, Price, Origin, DateAdded, InventoryQuantity, 
AmountSold, ViewCounts, Descreibe, Deleted, ProductTypeID, ManufacturerID)
values 
 -- adidas
('adidas aop national', 'adidas_bags01.jpg', 50, 'USA', date_sub(now(), interval '0:0' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas school bags', 'adidas_bags02.jpg', 45, 'USA', date_sub(now(), interval '0:0' hour_minute), 20, 12, 0, null, 1, 1, 1),
('black adidas duffle', 'adidas_bags03.jpg', 40, 'USA', date_sub(now(), interval '0:0' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas Adibreak', 'adidas_pants01.jpg', 50, 'USA', date_sub(now(), interval '0:1' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas women', 'adidas_pants02.jpg', 55, 'USA', date_sub(now(), interval '0:1' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas dh4558 usa', 'adidas_pants03.jpg', 55, 'USA', date_sub(now(), interval '0:1' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas white t shirt', 'adidas_shirts01.jpg', 55, 'USA', date_sub(now(), interval '0:2' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas polo sports', 'adidas_shirts02.jpg', 55, 'USA', date_sub(now(), interval '0:2' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas - TShirts', 'adidas_shirts03.jpg', 55, 'USA', date_sub(now(), interval '0:2' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Adidas Prophere', 'adidas_shoes01.jpg', 45, 'USA', date_sub(now(), interval '0:3' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas superstar', 'adidas_shoes02.jpg', 120, 'USA', date_sub(now(), interval '0:3' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas ultra boost', 'adidas_shoes03.jpg', 150, 'USA', date_sub(now(), interval '0:3' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas R1', 'adidas_shoes04.jpg', 300, 'USA', date_sub(now(), interval '0:3' hour_minute), 20, 12, 0, null, 1, 1, 1),
('adidas supertar', 'adidas_shoes05.jpg', 150, 'USA', date_sub(now(), interval '0:3' hour_minute), 20, 12, 0, null, 1, 1, 1),

 -- an phước
('An phuoc short', 'anphuoc_pant01.jpg', 25, 'Vietnam', date_sub(now(), interval '0:4' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Anphuoc ASH000227', 'anphuoc_pant02.jpg', 30, 'Vietnam', date_sub(now(), interval '0:4' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc ASH000247', 'anphuoc_pant03.jpg', 50, 'Vietnam', date_sub(now(), interval '0:4' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc Dr. Denim', 'anphuoc_pant04.jpg', 55, 'Vietnam', date_sub(now(), interval '0:4' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc ASN001500', 'anphuoc_shirts01.jpg', 50, 'Vietnam', date_sub(now(), interval '0:5' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc ASD000924', 'anphuoc_shirts02.jpg', 55, 'Vietnam', date_sub(now(), interval '0:5' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc ASN001343', 'anphuoc_shirts03.jpg', 56, 'Vietnam', date_sub(now(), interval '0:5' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc  ATH000221', 'anphuoc_shirts04.jpg', 55, 'Vietnam', date_sub(now(), interval '0:5' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc ASDN001113', 'anphuoc_shirts05.jpg', 50, 'Vietnam', date_sub(now(), interval '0:5' hour_minute), 20, 12, 0, null, 1, 1, 1),
('An Phuoc ADDN11100', 'anphuoc_shirts06.jpg', 45, 'Vietnam', date_sub(now(), interval '0:5' hour_minute), 20, 12, 0, null, 1, 1, 1),

-- casio
('casio era 600d', 'casio_watches01.jpg', 55, 'Japan', date_sub(now(), interval '0:6' hour_minute), 20, 12, 0, null, 1, 1, 1),
('casio men', 'casio_watches02.jpg', 50, 'Japan', date_sub(now(), interval '0:6' hour_minute), 20, 12, 0, null, 1, 1, 1),
('casio dw5900 bb', 'casio_watches03.jpg', 45, 'Japan', date_sub(now(), interval '0:6' hour_minute), 20, 12, 0, null, 1, 1, 1),

-- levi
('Levi Jeans', 'levi_bags01.jpg', 100, 'USA', date_sub(now(), interval '0:7' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Levis small bag', 'levi_bags02.jpg', 140, 'USA', date_sub(now(), interval '0:7' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Levi Basic', 'levi_bags03.jpg', 100, 'USA', date_sub(now(), interval '0:7' hour_minute), 20, 12, 0, null, 1, 1, 1),

-- nike
('nike taka', 'nike_shirts01.jpg', 25, 'USA', date_sub(now(), interval '0:8' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nike cv9888', 'nike_shirts02.jpg', 200, 'USA', date_sub(now(), interval '0:8' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nike Notre Dame', 'nike_shirts03.jpg', 100, 'USA', date_sub(now(), interval '0:8' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nike homer simpson', 'nike_shirts04.jpg', 100, 'USA', date_sub(now(), interval '0:8' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nike t shirt', 'nike_shirts05.jpg', 100, 'USA', date_sub(now(), interval '0:8' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nikeair force', 'nike_shoes01.jpg', 140, 'USA', date_sub(now(), interval '0:9' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nike air max', 'nike_shoes02.jpg', 150, 'USA', date_sub(now(), interval '0:9' hour_minute), 20, 12, 0, null, 1, 1, 1),
('nike air max', 'nike_shoes03.jpg', 100, 'USA', date_sub(now(), interval '0:9' hour_minute), 20, 12, 0, null, 1, 1, 1),

-- seiko
('Seiko army', 'seiko_watches01.jpg', 200, 'Japan', date_sub(now(), interval '0:10' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Seiko 5', 'seiko_watches02.jpg', 140, 'Japan', date_sub(now(), interval '0:10' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Seiko srz469p1', 'seiko_watches03.jpg', 100, 'Japan', date_sub(now(), interval '0:10' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Seiko 5 snkk71', 'seiko_watches04.jpg', 100, 'Japan', date_sub(now(), interval '0:10' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Seiko szzc42', 'seiko_watches05.jpg', 80, 'Japan', date_sub(now(), interval '0:10' hour_minute), 20, 12, 0, null, 1, 1, 1),

-- việt tiến
('Viettien so 97', 'viettien_pants01.jpg', 25, 'Vietnam', date_sub(now(), interval '0:11' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien so 92', 'viettien_pants02.jpg', 35, 'Vietnam', date_sub(now(), interval '0:11' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien so 57', 'viettien_pants03.jpg', 45, 'Vietnam', date_sub(now(), interval '0:11' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien 8C0037 CT4', 'viettien_shirts01.jpg', 25, 'Vietnam', date_sub(now(), interval '0:12' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien 1E0853NT5', 'viettien_shirts02.jpg', 30, 'Vietnam', date_sub(now(), interval '0:12' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien 1E1006NT6', 'viettien_shirts03.jpg', 40, 'Vietnam', date_sub(now(), interval '0:12' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien 1E0857NK5', 'viettien_shirts04.jpg', 35, 'Vietnam', date_sub(now(), interval '0:12' hour_minute), 20, 12, 0, null, 1, 1, 1),
('Viettien1E0854NT5', 'viettien_shirts05.jpg', 44, 'Vietnam', date_sub(now(), interval '0:12' hour_minute), 20, 12, 0, null, 1, 1, 1);


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

insert into product_order(AccountID, DateCreate, DateDelivery, TotalAmount, Deleted, Status, 
RecipientName, RecipientTel, AddressNumber, Street, Ward, District, Province)
values  
(6, now(), date_add(now(), interval '2:0' hour_minute), 200, 1, 0, 'Phú', null, '150A', 'Võ Thị Sáu', 'Tân Kiên', 'Quận 3', 'TP.HCM'),
(8, now(), date_add(now(), interval '2:0' hour_minute), 200, 1, 0, 'Sáu', null, '20', 'Tống Văn Trân', 'Tân Kiên', 'Quận 11', 'TP.HCM');

/*
  `OrderDetailID` INT ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Quantity` INT NULL,
  `Price` INT NULL,
  `ProductOrderID` INT ZEROFILL NOT NULL FOREIGN KEY  REFERENCES `PRODUCT_ORDER` (`ProductOrderID`),
  `ProductID` INT ZEROFILL NOT NULL FOREIGN KEY  REFERENCES `PRODUCT` (`ProductID`),
*/

insert into order_detail(Quantity, Price, ProductOrderID, ProductID)
values 
(6, 50, 1, 1);
















