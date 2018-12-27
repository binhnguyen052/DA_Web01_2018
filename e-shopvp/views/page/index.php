<?php
//$rd = getenv('DOCUMENT_ROOT');
//echo $rd."<br>";

include ("../../controllers/home/header.php");

$href_public = '../../public';

?>
    <!-- HOME -->
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="<?php echo $href_public;?>/upload/banner01.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h1 style="color: #F8694A">Giảm giá túi xách</h1>
                            <h3 class="white-color font-weak">Giảm lên đến 50%</h3>
                            <button class="primary-btn">Mua ngay</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="<?php echo $href_public;?>/upload/banner02.jpg" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">Giảm giá<br><span class="white-color font-weak">Lên đến 50%</span></h1>
                            <button class="primary-btn">Mua ngay</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="<?php echo $href_public;?>/upload/banner03.jpg" alt="">
                        <div class="banner-caption">
                            <h1 class="white-color">Sản phẩm <span>mới</span></h1>
                            <button class="primary-btn">Mua ngay</button>
                        </div>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="../../public/upload/banner10.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">Bộ sưu tập mới</h2>

						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="../../public/upload/banner11.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">Bộ sưu tập mới</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="#">
						<img src="../../public/upload/banner12.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">Bộ sưu tập mới</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

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
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sản phẩm mới nhất</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="<?php echo $href_public; ?>/upload/new_product02.png" alt="">
<!--						<div class="banner-caption">-->
<!--							<h2 class="white-color" style="color: #F8694A">Bộ sưu tập<br>mới</h2>-->
<!--							<button class="primary-btn">mua ngay</button>-->
<!--						</div>-->
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
                            <?php $last_entries = $_model_product->get_last_entries();
                                $result = $db->executeQuery($db->link, $last_entries);
                                while ($row = mysqli_fetch_array($result)) {
                                    extract($row);
                                    $product_id = $row['id'];
                                    $product_price = $row['price'];
                                    ?>
                                <!-- Product Single -->
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span>Mới</span>
<!--                                            <span class="sale">-20%</span>-->
                                        </div>
<!--                                        <ul class="product-countdown">-->
<!--                                            <li><span>00 H</span></li>-->
<!--                                            <li><span>00 M</span></li>-->
<!--                                            <li><span>00 S</span></li>-->
<!--                                        </ul>-->
<!--                                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i>Xem nhanh</button>-->
                                        <a class="main-btn quick-view btn"
                                           href="./product-page.php?id=<?php echo $row['id']; ?>"
                                           role="button">Xem Nhanh</a>
                                        <img src="<?php echo $href_public; ?>/upload/<?php echo $row['image_url'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price" style=" color: #F8694A;">$<?php echo $row['price']; ?></h3>
<!--                                        <div class="product-rating">-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-o empty"></i>-->
<!--                                        </div>-->
                                        <h2 class="product-name text-uppercase"><a href="#"><?php echo $row['name'];?></a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            <?php } ?>
						</div>
					</div>
				</div>
				<!-- /Product Slick -->

			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Bán chạy nhất</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
<!--				<div class="col-md-3 col-sm-6 col-xs-6">-->
<!--					<div class="product product-single product-hot">-->
<!--						<div class="product-thumb">-->
<!--							<div class="product-label">-->
<!--								<span class="sale">-20%</span>-->
<!--							</div>-->
<!--							<ul class="product-countdown">-->
<!--								<li><span>00 H</span></li>-->
<!--								<li><span>00 M</span></li>-->
<!--								<li><span>00 S</span></li>-->
<!--							</ul>-->
<!--							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Xem nhanh</button>-->
<!--							<img src="../../public/upload/product01.jpg" alt="">-->
<!--						</div>-->
<!--						<div class="product-body">-->
<!--							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>-->
<!--							<div class="product-rating">-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star-o empty"></i>-->
<!--							</div>-->
<!--							<h2 class="product-name"><a href="#">Xem chi tiết</a></h2>-->
<!--							<div class="product-btns">-->
<!--								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>-->
<!--								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>-->
<!--								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
				<!-- /Product Single -->

				<!-- Product Slick -->
				<div class="col-md-12 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
                            <?php $most_sold = $_model_product->get_most_sold();
                                $result = $db->executeQuery($db->link, $most_sold);
                                while ($row = mysqli_fetch_array($result)) {
                                    extract($row); ?>
                                <!-- Product Single -->
                                <div class="product product-single">
                                    <div class="product-thumb">
<!--                                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Xem nhanh</button>-->
                                        <a class="main-btn quick-view btn"
                                           href="./product-page.php?id=<?php echo $row['id']; ?>"
                                           role="button">Xem Nhanh</a>
                                        <img src="<?php echo $href_public; ?>/upload/<?php echo $row['image_url'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price " style=" color: #F8694A;">$<?php echo $row['price']; ?></h3>
<!--                                        <div class="product-rating">-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-o empty"></i>-->
<!--                                        </div>-->
                                        <h2 class="product-name text-uppercase"><a href="#"><?php echo $row['name']; ?></a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                            <button class="primary-btn add-to-cart" name="index_mview_add_cart"
                                            onclick="js_add_cart()"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            <?php } ?>



						</div>
					</div>
				</div>
				<!-- /Product Slick -->
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
						<h2 class="title">Xem nhiều nhất</h2>
					</div>
				</div>
				<!-- section title -->

                <?php $most_view = $_model_product->get_most_views();
                      $result = $db->executeQuery($db->link, $most_view);
                      while ($row = mysqli_fetch_array($result)) {
                          extract($row); ?>

				<!-- Product Single -->
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
<!--							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Xem nhanh</button>-->
                            <a class="main-btn quick-view btn"
                               href="./product-page.php?id=<?php echo $row['id']; ?>"
                               role="button">Xem Nhanh</a>
							<img src="<?php echo $href_public; ?>/upload/<?php echo $row['image_url'] ?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price" style=" color: #F8694A;">$<?php echo $row['price']; ?></h3>
<!--							<div class="product-rating">-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star"></i>-->
<!--								<i class="fa fa-star-o empty"></i>-->
<!--							</div>-->
							<h2 class="product-name text-uppercase"><a href="#"><?php echo $row['name']; ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

                <?php } ?>

			</div>
			<!-- /row -->


		
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<script language="JavaScript">
    var btn_index_mview_add_cart = document.getElementsByName("index_mview_add_cart");
    // Lặp qua từng phần tử trong kết quả và gán sự kiện
    function js_add_cart() {
        for (var i = 0; i < btn_index_mview_add_cart.length; i++)
        {
            btn_index_mview_add_cart[i].onclick = function()
            {

                <?php
                    $sql = $_model_product->get_product_order_detail($product_id);
                    $js_result = $db->executeQuery($db->link, $sql);
                    $js_row = mysqli_fetch_array($result);

                    extract($js_row);
                    $account_id = $_SESSION['id'];
                    $order_id =  $js_row['product_id'];
                    $check_add_cart = $_model_product->check_add_cart($db->link, $order_id, $product_id);
                    if ($check_add_cart == TRUE){
                        $_model_product->add_cart($db->link, $account_id, $order_id, $product_price);
                    }

                ?>

            };
        }
    }

</script>
<!-- FOOTER -->
<?php

	include("./footer.php");
	$db->db_close();
?>
<!-- FOOTER -->
