<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-SHOP HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>public/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>public/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <a class="logo" href="<?php echo base_url();?>index.php">
                        <img src="<?php echo base_url();?>public/img/logo.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Nhập từ khóa tìm kiếm">
                        <select class="input search-categories">
                            <option value="0">DANH MỤC</option>
                            <option value="1">Danh mục 01</option>
                            <option value="1">Danh mục 02</option>
                        </select>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
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
                         <a href="<?php echo base_url();?>index.php/users/login" class="text-uppercase">Đăng nhập</a>/<a href="<?php echo base_url();?>index.php/users/register" class="text-uppercase">Đăng kí</a>
                        <ul class="custom-menu">
                            <li><a href="#"><i class="fa fa-user-o"></i>Tài khoản của tôi</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i>Sản phẩm yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i>So sánh</a></li>
                            <li><a href="#"><i class="fa fa-check"></i>Thanh toán</a></li>
                            <li><a href="login.php"><i class="fa fa-unlock-alt"></i>Đăng nhập</a></li>
                            <li><a href="#"><i class="fa fa-user-plus"></i>Tạo tài khoản</a></li>
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
                                            <img src="<?php echo base_url();?>public/img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Xem chi tiết</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="<?php echo base_url();?>public/img/thumb-product01.jpg" alt="">
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
            <div class="category-nav <?php if(isset($current_page) && $current_page == 'home') echo 'show-on-home'; else echo 'show-on-click'; ?>">
                <span class="category-header">Danh mục <i class="fa fa-list"></i></span>
                <ul class="category-list">

                    <?php foreach ($product_type as $ptype) {?>
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <?php echo $ptype['name'];
                            $product_type_manufacturers = $this->Product->get_product_type_manufacturer($ptype['id']); ?>
                            <i class="fa fa-angle-right"></i></a>

                        <div class="custom-menu">
                            <div class="row">
                                <?php foreach ($product_type_manufacturers as $p) {?>
                                    <div class="col-md-4">
                                       <ul class="list-links" >

                                           <li><a href="<?php echo base_url(); ?>products?product_type=<?php echo $ptype['id']; ?>&manufacturer=<?php echo $p['id']; ?>">
                                                   <h3 class="text-uppercase" style=" color: #F8694A;"> <?php echo $p['name']; ?></h3></a> </li>
                                           <li><hr/></li>
<!--                                       <li><h3 class="list-links-title text-center"> <a href="#">--><?php //echo $p['name']; ?><!-- </a> </h3></li>-->
<!--                                       <li><a href="#">Women’s Clothing</a></li>-->
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                <?php }?>

                                <!-- https://ephoto360.com/hieu-ung-chu/hieu-ung-chu-bong-do-155.html  -->
                                <div class="col-md-4">
                                    <a href="<?php echo base_url(); ?>products?product_type=<?php echo $ptype['id']; ?>">
                                        <h3 class="text-uppercase text-info">xem tất cả</h3></a>
                                </div>

<!--                            <div class="row hidden-sm hidden-xs">-->
<!--                                <div class="col-md-12">-->
<!--                                    <hr>-->
<!--                                    <a class="banner banner-1" href="#">-->
<!--                                        <img src="--><?php //echo base_url();?><!--public/img/banner05.jpg" alt="">-->
<!--                                        <div class="banner-caption text-center">-->
<!--                                            <h2 class="white-color">NEW COLLECTION</h2>-->
<!--                                            <h3 class="white-color font-weak">HOT DEAL</h3>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>


                    </li>

                    <?php }?>

                    <li><a href="<?php echo base_url(); ?>products">Xem tất cả</a></li>

                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">

                    <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>

                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Nhà sản xuất<i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">

                             <?php foreach($manufacturers as $manufacturer) {?>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="<?php echo base_url();?>products?manufacturer=<?php echo $manufacturer['id'];?>">
                                            <img class="img-thumbnail" src="<?php echo base_url();?>public/upload/<?php echo $manufacturer['logo_url']; ?>" alt="">
<!--                                            <div class="banner-caption text-center">-->
<!--                                                <h3 class="white-color text-uppercase"></h3>-->
<!--                                            </div>-->
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li><h3 class="list-links-title"><a href="#"><?php echo $manufacturer['name']; ?></a></h3></li>
<!--                                        <li><a href="#"></a></li>-->
                                    </ul>
                                </div>
                            <?php }?>

                            </div>
                        </div>
                    </li>

                    <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Thời trang nữ <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
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
                                            <h3 class="list-links-title">Categories</h3></li>
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
                                            <h3 class="list-links-title">Categories</h3></li>
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
                                        <img src="<?php echo base_url();?>public/img/banner05.jpg" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Thời trang nam <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo base_url();?>public/img/banner06.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Women’s</h3>
                                            </div>
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
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
                                            <img src="<?php echo base_url();?>public/img/banner07.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Men’s</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
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
                                            <img src="<?php echo base_url();?>public/img/banner08.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Accessories</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
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
                                            <img src="<?php echo base_url();?>public/img/banner09.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Bags</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
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

                    <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Các trang<i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="<?php echo base_url();?>index.php">Trang chủ</a></li>
                            <li><a href="<?php echo base_url(); ?>products">Các sản phẩm</a></li>
                            <li><a href="<?php echo base_url(); ?>products/checkout">Thanh toán</a></li>
                            <li><a href="<?php echo base_url();?>admin/managers">Admin (test view)</a></li>
                            <li><a href="<?php echo base_url();?>index.php">Blank</a></li>
<!--                            <li><a href="--><?php //echo base_url();?><!--index.php/users/profile">user-profile (test view)</a></li>-->
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