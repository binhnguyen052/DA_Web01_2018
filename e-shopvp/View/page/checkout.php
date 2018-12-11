<?php
	include ("./hearder.php");
?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
				<li class="active">Thanh toán</li>
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
				<form id="checkout-form" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Bạn đã có tài khoản chưa? <a href="login.php">Đăng Nhập</a></p>
							<div class="section-title">
								<h3 class="title">Chi Tiết Hóa Đơn</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Họ">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa Chỉ">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Thành Phố">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Quốc Gia">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Số Điện Thoại">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Tạo Tài Khoản ?</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
											<p>
												<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Phương Thức Vận Chuyển</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping -  $0.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Tiêu Chuẩn - $4.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Phương Thức Thanh Toán</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Chuyển Qua Ngân Hàng</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Cheque Payment</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Hệ Thống Paypal </label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Xem Lại Đơn Đặt Hàng</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Sản Phẩm</th>
										<th></th>
										<th class="text-center">Giá</th>
										<th class="text-center">Số Lượng</th>
										<th class="text-center">Tổng</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="thumb"><img src="../img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Tên Sản Phẩm</a>
											<ul>
												<li><span>Kích Thước: XL</span></li>
												<li><span>Màu sắc: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="../img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Tên Sản Phẩm</a>
											<ul>
												<li><span>Kích Thước: XL</span></li>
												<li><span>Màu sắc: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="../img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Tên Sản Phẩm</a>
											<ul>
												<li><span>Kích Thước: XL</span></li>
												<li><span>Màu sắc: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$97.50</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$97.50</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Đặt Hàng</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="../img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p></p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Tài khoản của tôi</h3>
						<ul class="list-links">
							<li><a href="#">Tài khoản của tôi</a></li>
							<li><a href="#">Sản phẩm yêu thích</a></li>
							<li><a href="#">So sánh</a></li>
							<li><a href="#">Thanh toán</a></li>
							<li><a href="login.php">Đăng nhập</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Chăm sóc khách hàng</h3>
						<ul class="list-links">
							<li><a href="#">Về chúng tôi</a></li>
							<li><a href="#">Giao hàng & Gửi trả</a></li>
							<li><a href="#">Hướng dẫn Vận Chuyển</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Giữ liên lạc </h3>
						<p></p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Nhập địa chỉ email">
							</div>
							<button class="primary-btn">Tham gia bản tin</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						1660052 - Nguyễn Đình Bình | 1660056 - Nguyễn Tuấn Cảnh | 1660164 - Nguyễn Anh Hào<br>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>
