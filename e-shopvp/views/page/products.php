<?php
    include ("../../controllers/products/header.php");

?>

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

					<!-- aside widget -->
<!--					<div class="aside">-->
<!---->
<!--						<h3 class="aside-title">Shop by:</h3>-->
<!--						<ul class="filter-list">-->
<!--							<li><span class="text-uppercase">Màu Sắc:</span></li>-->
<!--							<li><a href="#" style="color:#FFF; background-color:#8A2454;">Camelot</a></li>-->
<!--							<li><a href="#" style="color:#FFF; background-color:#475984;">East Bay</a></li>-->
<!--							<li><a href="#" style="color:#FFF; background-color:#BF6989;">Tapestry</a></li>-->
<!--							<li><a href="#" style="color:#FFF; background-color:#9A54D8;">Medium Purple</a></li>-->
<!--						</ul>-->
<!---->
<!--						<ul class="filter-list">-->
<!--							<li><span class="text-uppercase">Kích Thước:</span></li>-->
<!--							<li><a href="#">X</a></li>-->
<!--							<li><a href="#">XL</a></li>-->
<!--						</ul>-->
<!---->
<!--						<ul class="filter-list">-->
<!--							<li><span class="text-uppercase">Giá:</span></li>-->
<!--							<li><a href="#">MIN: $20.00</a></li>-->
<!--							<li><a href="#">MAX: $120.00</a></li>-->
<!--						</ul>-->
<!---->
<!--						<ul class="filter-list">-->
<!--							<li><span class="text-uppercase">Phái:</span></li>-->
<!--							<li><a href="#">Nam</a></li>-->
<!--						</ul>-->
<!---->
<!--						<button class="primary-btn">Xóa Tất Cả</button>-->
<!---->
<!--					</div>-->
					<!-- /aside widget -->

					<!-- aside widget -->
					<!-- <div class="aside">
						<h3 class="aside-title">Lọc Theo Giá</h3>
						<div id="price-slider"></div>
					</div> -->
					<!-- aside widget -->

					<!-- aside widget -->
<!--					<div class="aside">-->
<!--						<h3 class="aside-title">Lọc Theo Màu:</h3>-->
<!--						<ul class="color-option">-->
<!--							<li><a href="#" style="background-color:#475984;"></a></li>-->
<!--							<li><a href="#" style="background-color:#8A2454;"></a></li>-->
<!--							<li class="active"><a href="#" style="background-color:#BF6989;"></a></li>-->
<!--							<li><a href="#" style="background-color:#9A54D8;"></a></li>-->
<!--							<li><a href="#" style="background-color:#675F52;"></a></li>-->
<!--							<li><a href="#" style="background-color:#050505;"></a></li>-->
<!--							<li><a href="#" style="background-color:#D5B47B;"></a></li>-->
<!--						</ul> -->
<!--					</div>-->
					<!-- /aside widget -->

					<!-- aside widget -->
<!--					<div class="aside">-->
<!--						<h3 class="aside-title">Lọc Theo Kích Cỡ:</h3>-->
<!--						<ul class="size-option">-->
<!--							<li class="active"><a href="#">S</a></li>-->
<!--							<li class="active"><a href="#">XL</a></li>-->
<!--							<li><a href="#">SL</a></li>-->
<!--						</ul>-->
<!--					</div>-->
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Lọc Theo Nhãn Hiệu</h3>
						<ul class="list-links">
                            <?php
                                $sql = $_model_product->get_manufacturer();
                                $result = $db->executeQuery($db->link, $sql);
                                while($row = mysqli_fetch_array($result)) {
                                    extract($row); ?>
							<li><a href="./products.php?manufacturer_id=<?php echo $row['id']; ?>">
                                    <?php echo $row['name']; ?>
                                </a></li>
                            <?php } ?>
						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
					<!-- <div class="aside">
						<h3 class="aside-title">Lọc Theo Phái</h3>
						<ul class="list-links">
							<li class="active"><a href="#">Nam</a></li>
							<li><a href="#">Nữ</a></li>
						</ul>
					</div> -->
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Xếp Hạng Cao Nhất</h3>
						<!-- widget product -->
						<div class="product product-widget">
							<div class="product-thumb">
								<img src="../img/thumb-product01.jpg" alt="">
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
								<img src="../img/thumb-product01.jpg" alt="">
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
                            <?php
                            $product_type_id = null;
                            $manufacturer_id = null;
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 12;
                            if (isset($_GET['product_type_id'])) {$product_type_id = $_GET['product_type_id']; }
                            if (isset($_GET['manufacturer_id'])) {$manufacturer_id = $_GET['manufacturer_id']; }
                            $filter = array(
                                'page' => $current_page,
                                'product_type' => $product_type_id,
                                'manufacturer' => $manufacturer_id,
                            );
//                            $sql = $_model_product->get_product_by_Condition($filter);
//                            $result = $db->executeQuery($db->link, $sql);

                            //truy vấn
                            $sql = $_model_product->product_pagination($db->link, $filter = array());
                            $result = $db->executeQuery($db->link, $sql);
                            // tổng số trang
                            $total_records = mysqli_num_rows($result);
                            $total_page = ceil($total_records / $limit);
                            // Giới hạn current_page trong khoảng 1 đến total_page
                            if ($current_page > $total_page){
                                $current_page = $total_page;
                            }
                            else if ($current_page < 1){
                                $current_page = 1;
                            }
                            // Tìm Start
                            $start = ($current_page - 1) * $limit;


                            ?>

                                <div>
                                    <span><h5 class="title text-uppercase">Có:
                                            <?php echo $total_records;?> sản phẩm</h5></span>
                                </div>
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
                            <br/>
							<div class="page-filter">
								<span class="text-uppercase">Hiển Thị:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Trang:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
                            
                                <?php while($row = mysqli_fetch_array($result))
                                {
                                extract($row); ?>
                                <!-- Product Single -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="product product-single">
                                        <div class="product-thumb">
<!--                                            <div class="product-label">-->
<!--                                                <span>Mới</span>-->
<!--                                                <span class="sale">-20%</span>-->
<!--                                            </div>-->
<!--                                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i>Xem Nhanh</button>-->
                                            <a class="main-btn quick-view btn"
                                               href="./product-page.php?id=<?php echo $row['id']; ?>"
                                               role="button">Xem Nhanh</a>
                                            <img src="<?php echo $href_public?>/upload/<?php echo $row['image_url'];?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price" style=" color: #F8694A;">$<?php echo $row['price']; ?></h3>
<!--                                            <div class="product-rating">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-o empty"></i>-->
<!--                                            </div>-->
                                            <h2 class="product-name text-uppercase"><a href="#"><?php echo $row['name']; ?></a></h2>
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
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Trang:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
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

<!-- FOOTER -->
<?php
include("./footer.php");
$db->db_close();
?>
<!-- FOOTER -->
