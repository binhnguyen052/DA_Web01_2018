<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Sản phẩm</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">

                <div class="aside">
                    <h3 class="aside-title">Lọc Theo Nhãn Hiệu</h3>
                    <ul class="list-links">
                        <?php foreach($manufacturers as $manufacturer) {?>
                        <li><a href="<?php echo base_url(); ?>products?manufacturer=<?php echo $manufacturer['id']; ?>"> <?php echo $manufacturer['name']; ?> </a></li>
                         <?php }?>
                    </ul>
                </div>

                <div class="aside">
                    <h3 class="aside-title">Xếp Hạng Cao Nhất</h3>
                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                            <img src="<?php echo base_url();?>public/img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#">Tên Sản Phẩm</a></h2>
                            <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /widget product -->

                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                            <img src="<?php echo base_url();?>public/img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#">Tên Sản Phẩm</a></h2>
                            <h3 class="product-price">$32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /widget product -->
                </div>
                <!-- /aside widget -->
            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="row-filter">
                            <a href="#"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="sort-filter">
                            <span class="text-uppercase">Sắp Xếp Theo :</span>
                            <select class="input">
                                <option value="0">Vị Trí</option>
                                <option value="0">Giá</option>
                                <option value="0">Xếp Hạng</option>
                            </select>
                            <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Hiển Thị:</span>
                            <select class="input">
                                <option value="9">9</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Trang:</span></li>
                            <?php echo $pagination_links; ?>

                        </ul>
                    </div>
                </div>
                <!-- /store top filter -->

                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                    <div class="row">

                        <?php foreach ($products as $_product) {?>
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>Mới</span>
                                        <span class="sale">-20%</span>
                                    </div>
<!--                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i>Xem Nhanh</button>-->
                                    <a class="main-btn quick-view btn"
                                       href="<?php echo base_url(); ?>products/detail?id=<?php echo $_product['id']; ?>"
                                       role="button">Xem Nhanh</a>
                                    <img class="img-thumbnail"  src="<?php echo base_url();?>public/upload/<?php echo $_product['image_url'];?> " alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price"><?php echo $_product['price']?>$</h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name text-uppercase"><a href="#"><?php echo $_product['name'];?></a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->
                        <?php } ?>

                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="row-filter">
                            <a href="#"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="sort-filter">
                            <span class="text-uppercase">Sắp Xếp Theo:</span>
                            <select class="input">
                                <option value="0">Vị Trí</option>
                                <option value="0">Giá</option>
                                <option value="0">Xếp Hạng</option>
                            </select>
                            <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Hiển Thị:</span>
                            <select class="input">
                                <option value="9">9</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Trang:</span></li>
                            <?php echo $pagination_links; ?>


                        </ul>
                    </div>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

