<?php

//biến lưu đường link
include_once ("../../libraries/page.php");

include_once("../../models/database/model_product.php");
$_model_product = new MProduct();

include_once("../../models/database/model_user.php");
$_model_user = new MUser();


$currentURL = curPageURL();
$__home = 'http://localhost/DoAn_Web01_E404_2018/e-shopvp/views/page/index.php';
$href_public = '../../public';

// style=" color: #F8694A;"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-SHOP HTML Template</title> <!-- tiêu đề -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo $href_public;?>/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo $href_public;?>/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $href_public;?>/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo $href_public;?>/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo $href_public;?>/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo $href_public;?>/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--	[if lt IE 9]>-->
    <!--		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--		<![endif]-->

</head>

<body>

<!-- HEADER -->
<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-left">
                <span>Chào mừng đến với E-shop!</span>
            </div>
            <div class="pull-right">
                <ul class="header-top-links">
                    <li><a href="#">Cửa hàng</a></li> <!-- Tên Mục  -->
                    <li><a href="#">Bản tin</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li class="dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="#">English (ENG)</a></li>
                            <li><a href="#">Russian (Ru)</a></li>
                            <li><a href="#">French (FR)</a></li>
                            <li><a href="#">Spanish (Es)</a></li>
                        </ul>
                    </li>
                    <li class="dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="#">USD ($)</a></li>
                            <li><a href="#">EUR (€)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="index.php">
                        <img src="<?php echo $href_public;?>/upload/logo.png" alt="">

                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form method="POST" >
                        <input class="input search-input" type="text" name="header_search" required="required" name="header_search"  placeholder="Nhập từ khóa tìm kiếm">
                        <select class="input search-categories">
                            <option value="0">TÌM KIẾM</option>
                            <option value="1">Danh mục 01</option>
                            <option value="1">Danh mục 02</option>
                        </select>
                        <button type="submit" id="btn_header_search_id" class="search-btn">
                            <i class="fa fa-search"></i></button>
                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">Tài khoản của tôi<i class="fa fa-caret-down"></i></strong>
                        </div>
                        <a href="./login.php" class="text-uppercase">Đăng nhập</a>/
                        <a href="./register.php" class="text-uppercase">Đăng kí</a>
                        <ul class="custom-menu">
                            <li><a href="./user-profile.php"><i class="fa fa-user-o"></i>Tài khoản của tôi</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i>Sản phẩm yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i>So sánh</a></li>
                            <li><a href="#"><i class="fa fa-check"></i>Thanh toán</a></li>
                            <li><a href="#"><i class="fa fa-unlock-alt"></i>Đăng nhập</a></li>
                            <li><a href="#"><i class="fa fa-user-plus"></i>Tạo tài khoản</a></li>
                            <li><a href="#"><i class="fa fa-user-plus"></i>Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- /Account -->

                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty">3</span>
                            </div>
                            <strong class="text-uppercase">Giỏ hàng của tôi:</strong>
                            <br>
                            <span>35.20$</span>
                        </a>
                        <div class="custom-menu">
                            <div id="shopping-cart">
                                <div class="shopping-cart-list">
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="<?php echo $__config['public'];?>/upload/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Xem chi tiết</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="<?php echo $__config['public'];?>/upload/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Xem chi tiết</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="shopping-cart-btns">
                                    <button class="main-btn">View Cart</button>
                                    <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /Cart -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav <?php if(isset($currentURL)  && $currentURL == $__home )
            { echo 'show-on-home' ;} else { echo 'show-on-click';} ?> ">
                <span class="category-header">Danh mục <i class="fa fa-list"></i></span>
                <ul class="category-list">

                    <!-- vùng hiển thị menu -->
                    <?php
                    //lấy danh sách loại sản phẩm từ database
                    $sql = $_model_product->get_product_type();
                    $result = $db->executeQuery($db->link, $sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        extract($row); ?>
                        <li class='dropdown side-dropdown'>
                            <a class='dropdown-toggle' data-toggle="dropdown" aria-expanded='true' >
                                <?php echo $row['name']; ?> <i class='fa fa-angle-right'></i> </a>

                            <div class="custom-menu">
                                <div class="row">
                                    <?php
                                    $sql2 = $_model_product->get_product_type_manufacturer($row['id']);
                                    $result2 = $db->executeQuery($db->link, $sql2);
                                    while($row2 = mysqli_fetch_array($result2)) {
                                        extract($row2); ?>
                                        <div class="col-md-4">
                                            <ul class="list-links" >
                                                <li><a href="./products.php?page=1&product_type_id=<?php echo $row['id']?>&manufacturer_id=<?php echo $row2['id']; ?>">
                                                        <h3 class="text-uppercase" style=" color: #F8694A;"> <?php echo $row2['name'];?></h3></a>
                                                </li>
                                                <li><hr/></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                </div>
                                    <?php }?>
                                    <!-- https://ephoto360.com/hieu-ung-chu/hieu-ung-chu-bong-do-155.html  -->
                                    <div class="col-md-4">
                                        <a href="./products.php?product_type_id=<?php echo $row['id'];?>">
                                            <h3 class="text-uppercase text-info">xem tất cả</h3></a>
                                    </div>
                               </div>
                        </li>
                    <?php } ?>

                    <li><a href="./products.php?">Xem tất cả</a></li>

                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="index.php">Trang chủ </a></li>

                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Nhà
                            sản xuất <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <?php
                                $sql = $_model_product->get_manufacturer();
                                $result = $db->executeQuery($db->link, $sql);
                                while ($row = mysqli_fetch_array($result))
                                {
                                    extract($row); ?>
                                    <div class='col-md-3'>
                                        <div class='hidden-sm hidden-xs'>
                                            <a class='banner banner-1' href='./products.php?page=1&manufacturer_id=<?php echo $row['id']; ?>'>
                                                <img src='<?php echo $href_public;?>/upload/<?php echo $row['logo_url'];?>' alt=''>
                                            </a>
                                            <hr>
                                        </div>
                                        <ul class="list-links">
                                            <li><h3 class="list-links-title"><a href="#"><?php echo $row['name']; ?></a></h3></li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Thời
                            trang nữ <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-md-12">
                                    <hr>
                                    <a class="banner banner-1" href="#">
                                        <img src="<?php echo $href_public;?>/upload/banner05.jpg" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Thời
                            trang nam <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo $href_public;?>/upload/banner06.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Women’s</h3>
                                            </div>
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo $href_public;?>/upload/banner07.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Men’s</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo $href_public;?>/upload/banner08.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Accessories</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo $href_public;?>/upload/banner09.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Bags</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3>
                                        </li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Giảm giá</a></li>
                    <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Các
                            trang<i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="./products.php">Các sản phẩm</a></li>
<!--                            <li><a href="./page/product-page.php">Chi tiết sản phẩm</a></li>-->
                            <li><a href="./page/checkout.php">Thanh toán</a></li>
                            <li><a href="./admin/index.php">Admin (test view)</a></li>
                            <li><a href="./blank.php">Blank</a></li>
<!--                            <li><a href="./page/register.php">user-profile (test view)</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->



