<?php
    include ("../../controllers/products/header.php");
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
				<form id="checkout-form" class="clearfix" method="POST">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Bạn đã có tài khoản chưa? <a href="login.php">Đăng Nhập</a></p>
							<div class="section-title">
								<h3 class="title">Chi Tiết Hóa Đơn</h3> <br/>
                                <h6 class="title">(*) Thông tin bắt buộc</h6>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" required="required" placeholder="* Tên Người Nhận">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="SĐT Người Nhận">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="email" required="required" placeholder="* Số Nhà">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" required="required" placeholder="* Tên Đường">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" required="required" placeholder="* Phường, xã">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" required="required" placeholder="* Quận, huyện">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" required="required" placeholder="* Tỉnh, thành phố">
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

                        <div class="pull-left">
                            <button type="submit" class="primary-btn">Đặt Hàng</button>
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


				</form>
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

