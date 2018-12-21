<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Chi tiết sản phẩm</li>
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
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-6">
                    <div id="product-main-view">
                       <?php $id_manufacturer; $id_type;
                       foreach ($one_product as $__product) {
                       $id_manufacturer =  $__product['manufacturer_id'];
                       $id_type = $__product['type_id']; ?>
                        <div class="product-view">
                            <img src="<?php echo base_url(); ?>public/upload/<?php echo $__product['image_url']; ?>" alt="">
                        </div>

                    </div>

                    <div id="product-view">
                        <div class="product-view">
                            <img src="<?php echo base_url(); ?>public/upload/<?php echo $__product['image_url']; ?>" alt="">
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-body">
                        <div class="product-label">
                            <span class="text-uppercase"><?php echo $__product['product_name'];?></span>
<!--                            <span class="sale">-20%</span>-->
                        </div>
                        <h2 class="product-name text-uppercase"><?php  ?></h2>
                        <h3 class="product-price" style="color: #8A2454;">$<?php echo $__product['price'];?> </h3>
<!--                        <del class="product-old-price">$45.00</del>-->
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <a href="#">3 Nhận Xét(s) / Thêm Nhận Xét</a>
                        </div>
                        <p class="text-uppercase"><strong>Tình trạng: </strong>Còn hàng</p>
                        <p class="text-uppercase"><strong>Loại: </strong><?php echo $__product['type_name'];?></p>
                        <p class="text-uppercase"><strong>Nhãn Hiệu: </strong><?php echo $__product['manufacturer_name'];?></p>
                        <p class="text-uppercase"><strong>Xuất Xứ: </strong><?php echo $__product['origin'];?></p>
                        <p class="text-uppercase"><strong>Số lượt xem: </strong><?php echo $__product['views'];?></p>
                        <p class="text-uppercase"><strong>Số lượt bán: </strong><?php echo $__product['solds'];?></p>
                        <p><strong class="text-uppercase">Mô tả:</strong><?php echo $__product['descreibe'];?> </p>
                        <div class="product-options">
                            <ul class="size-option">
                                <li><span class="text-uppercase">Size:</span></li>
                                <li class="active"><a href="#">S</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">SL</a></li>
                            </ul>
                            <ul class="color-option">
                                <li><span class="text-uppercase">Color:</span></li>
                                <li class="active"><a href="#" style="background-color:#475984;"></a></li>
                                <li><a href="#" style="background-color:#8A2454;"></a></li>
                                <li><a href="#" style="background-color:#BF6989;"></a></li>
                                <li><a href="#" style="background-color:#9A54D8;"></a></li>
                            </ul>
                        </div>

                        <div class="product-btns">
                            <div class="qty-input">
                                <span class="text-uppercase">QTY: </span>
                                <input class="input" type="number">
                            </div>
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> thêm vào giỏ hàng</button>
                            <div class="pull-right">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
<!--                    <div class="product-tab">-->
<!--                        <ul class="tab-nav">-->
<!--                            <li class="active"><a data-toggle="tab" href="#tab1">Miêu Tả</a></li>-->
<!--                            <li><a data-toggle="tab" href="#tab1">Chi Tiết</a></li>-->
<!--                            <li><a data-toggle="tab" href="#tab2">Nhận Xét(3)</a></li>-->
<!--                        </ul>-->
<!--                        <div class="tab-content">-->
<!--                            <div id="tab1" class="tab-pane fade in active">-->
<!---->
<!--                            </div>-->
<!--                            <div id="tab2" class="tab-pane fade in">-->
<!---->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="product-reviews">-->
<!--                                            <div class="single-review">-->
<!--                                                <div class="review-heading">-->
<!--                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>-->
<!--                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>-->
<!--                                                    <div class="review-rating pull-right">-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star-o empty"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="review-body">-->
<!---->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="single-review">-->
<!--                                                <div class="review-heading">-->
<!--                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>-->
<!--                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>-->
<!--                                                    <div class="review-rating pull-right">-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star-o empty"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="review-body">-->
<!---->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="single-review">-->
<!--                                                <div class="review-heading">-->
<!--                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>-->
<!--                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>-->
<!--                                                    <div class="review-rating pull-right">-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star"></i>-->
<!--                                                        <i class="fa fa-star-o empty"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="review-body">-->
<!---->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <ul class="reviews-pages">-->
<!--                                                <li class="active">1</li>-->
<!--                                                <li><a href="#">2</a></li>-->
<!--                                                <li><a href="#">3</a></li>-->
<!--                                                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-6">-->
<!--                                        <h4 class="text-uppercase">Hãy Viết Đánh Gía Của Bạn</h4>-->
<!--                                        <p>Địa chỉ email của bạn sẽ không được công bố.</p>-->
<!--                                        <form class="review-form">-->
<!--                                            <div class="form-group">-->
<!--                                                <input class="input" type="text" placeholder="Họ Tên" />-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input class="input" type="email" placeholder="Email" />-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <textarea class="input" placeholder="Đánh Giá"></textarea>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <div class="input-rating">-->
<!--                                                    <strong class="text-uppercase">Xếp Hạng Của Bạn: </strong>-->
<!--                                                    <div class="stars">-->
<!--                                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>-->
<!--                                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>-->
<!--                                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>-->
<!--                                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>-->
<!--                                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <button class="primary-btn">Gửi Đi</button>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <hr/>
                </div>

          <?php } ?>

            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">sản phẩm cùng loại</h2>
                </div>
            </div>
            <!-- section title -->


            <?php $products = $this->Product->get_same_type($id_type, 0, 6);
            foreach ($products as $product) {?>
                <!-- Product Single -->
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Xem Nhanh</button>
                            <img src="<?php echo base_url(); ?>public/upload/<?php echo $product['image_url']; ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name text-uppercase"><a href="#"><?php echo $product['name'];?></a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

            <?php }?>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">cùng nhãn hiệu</h2>
                </div>
            </div>
            <!-- section title -->

            <?php $products_manu = $this->Product->get_same_manufacturer($id_manufacturer, 0, 6);
            foreach ($products_manu as $product) {?>
            <!-- Product Single -->
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Xem Nhanh</button>
                        <img src="<?php echo base_url(); ?>public/upload/<?php echo $product['image_url']; ?>" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$32.50</h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name text-uppercase" ><a href="#"><?php echo $product['name'];?></a></h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <?php }?>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->