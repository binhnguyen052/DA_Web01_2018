<!-- https://bootsnipp.com/tags/profile -->
<?php
	include ("./hearder.php");
?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
				<li class="active">Thông tin cá nhân</li>
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

				<div class="col-md-3 ">
					<div class="text-center">
						<img src="../img/user-profile/user.png" class="avatar img-circle img-thumbnail" alt="avatar">
						<h6>Tải lên một ảnh khác...</h6>
						<input type="file" class="text-center center-block file-upload">
					</div>
					</hr>
					<div class="list-group ">
						<a href="#" class="list-group-item list-group-item-action active">Thông tin cá nhân</a>
						<a href="#" class="list-group-item list-group-item-action">User Management</a>
						<a href="#" class="list-group-item list-group-item-action">Used</a>
						<a href="#" class="list-group-item list-group-item-action">Enquiry</a>
						<a href="#" class="list-group-item list-group-item-action">Dealer</a>
						<a href="#" class="list-group-item list-group-item-action">Media</a>
						<a href="#" class="list-group-item list-group-item-action">Post</a>
						<a href="#" class="list-group-item list-group-item-action">Category</a>
						<a href="#" class="list-group-item list-group-item-action">New</a>
						<a href="#" class="list-group-item list-group-item-action">Comments</a>
						<a href="#" class="list-group-item list-group-item-action">Appearance</a>
						<a href="#" class="list-group-item list-group-item-action">Reports</a>
						<a href="#" class="list-group-item list-group-item-action">Settings</a>


					</div>
				</div>
				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h4>Thông tin của bạn</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Tên đăng nhập</label>
											<div class="col-8">
												<!-- <input id="username" name="username" placeholder="Username" class="form-control here" required="required"
												 type="text"> -->
												 <label for="username" class="col-4 col-form-label">Tên đăng****</label>
											</div>
										</div>
										<div class="form-group row">
											<label for="name" class="col-4 col-form-label">Tên</label>
											<div class="col-8">
												<input id="name" name="name" placeholder="Nhập tên" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="lastname" class="col-4 col-form-label">Họ</label>
											<div class="col-8">
												<input id="lastname" name="lastname" placeholder="Nhập họ" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="displayname" class="col-4 col-form-label">Tên hiển thị*</label>
											<div class="col-8">
												<input id="displayname" name="displayname" placeholder="Nhập tên hiển thị" class="form-control here" required="required" type="text">
											</div>
										</div>
										<!-- <div class="form-group row">
											<label for="select" class="col-4 col-form-label">Display Name public as</label>
											<div class="col-8">
												<select id="select" name="select" class="custom-select">
													<option value="admin">Admin</option>
												</select>
											</div>
										</div> -->
										<div class="form-group row">
											<label for="address" class="col-4 col-form-label">Địa chỉ</label>
											<div class="col-8">
												<input id="address" name="address" placeholder="Nhập địa chỉ" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="phonenumber" class="col-4 col-form-label">Điện thoại</label>
											<div class="col-8">
												<input id="phonenumber" name="phonenumber" placeholder="Nhập số điện thoại" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="email" class="col-4 col-form-label">Email</label>
											<div class="col-8">
												<input id="email" name="email" placeholder="Nhập Email" class="form-control here" type="text">
											</div>
										</div>
										<!-- <div class="form-group row">
											<label for="website" class="col-4 col-form-label">Website</label>
											<div class="col-8">
												<input id="website" name="website" placeholder="website" class="form-control here" type="text">
											</div>
										</div> -->
										<div class="form-group row">
											<label for="publicinfo" class="col-4 col-form-label">Thông tin công khai</label>
											<div class="col-8">
												<textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="newpass" class="col-4 col-form-label">Mật khẩu mới</label>
											<div class="col-8">
												<input id="newpass" name="newpass" placeholder="Nhập mật khẩu mới" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="confirmnewpass" class="col-4 col-form-label">Xác nhận mật khẩu</label>
											<div class="col-8">
												<input id="confirmnewpass" name="confirmnewpass" placeholder="Nhập lại mật khẩu mới" class="form-control here" required="required" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="starbind" class="col-4 col-form-label">(*) Thông tin bắt buộc phải có</label>
											
										</div>
										<div class="form-group row">
											<div class="offset-4 col-8">
												<button name="submit" type="submit" class="btn btn-primary">Cập nhật</button>
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>


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
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
						 href="https://colorlib.com" target="_blank">Colorlib</a>
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
