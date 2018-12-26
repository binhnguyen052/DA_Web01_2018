<?php
//$rd = getenv('DOCUMENT_ROOT');
//echo $rd."<br>";

include ("../../controllers/home/header.php");

$href_public = '../../public';

include_once("../../models/database/model_user.php");
$_model_user = new MUser();
?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang chủ</a></li>
				<li class="active">Đăng kí</li>
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
							<p>Bạn đã có tài khoản chưa?<a href="login.php"> Đăng Nhập</a></p>
							<div class="section-title">
								<h3 class="title">Thông tin đăng kí</h3> <br>
								<h6>(*) Thông tin bắt buộc phải nhập</h6>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="r_first-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="r_last-name" placeholder="Họ">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="r_username" required="required" placeholder="Tên đăng nhập *">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="r_displayname" required="required" placeholder="Tên hiển thị *">
							</div>
							<div class="form-group">
								<input class="input" type="password" name="r_password" required="required" placeholder="Mật khẩu *">
							</div>
<!--							<div class="form-group">-->
<!--								<input class="input" type="password" name="r_comfirmpassword" required="required" placeholder="Nhập lại mật khẩu *">-->
<!--							</div>-->
							<div class="form-group">
								<input class="input" type="tel" name="r_tel" placeholder="Số Điện Thoại">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="r_email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="r_address" placeholder="Địa Chỉ">
							</div>
							<div class="form-group">
								<button name="r_submit" type="submit" class="btn btn-primary">Tạo tài khoản</button>
							</div>

                            <?php
                            $message = null;
                            $username = null;
                            $password = null;
                            $display_name = null;
                            $address = null;
                            $email = null;
                            $tel = null;


                            if(isset($_POST['r_username']) && isset($_POST['r_password'])
                                && isset($_POST['r_displayname'])){
                                $username = $_POST['r_username'];

                                $display_name = $_POST['r_displayname'];
//                                echo $username .'<br>';
//                                echo $password.'<br>';
//                                echo $display_name.'<br>';
                                $check_register = $_model_user->check_register($db->link, $username, $display_name);
                                if($check_register == TRUE && isset($_POST['r_password'])){
                                    $password = $_POST['r_password'];

                                    if(isset($_POST['r_address'])){ $address = $_POST['r_username']; }
                                    if(isset($_POST['r_email'])){ $email = $_POST['r_email']; }
                                    if(isset($_POST['r_tel'])){ $tel = $_POST['r_tel']; }

                                    //thêm tài khoản
                                    $filter = array(
                                        'username' => $username,
                                        'password' => $password,
                                        'display_name' => $display_name,
                                        'address' => $address,
                                        'tel' => $tel,
                                        'email' => $email,
                                    );

                                    $register  = $_model_user->register($db->link, $filter);
                                    if ($register == TRUE){

                                    } else{
                                        $message ='Thông báo: Đăng kí thất bại! ERROR 404';
                                    }
                                } else {
                                    $message ='Thông báo: Tài khoản hoặc tên hiển thị đã tồn tại!';
                                }
                            }
                            ?>

                            <div>
                                <hr/>
                                <?php if(isset($message)) {?>
                                    <p class="bg-info">
                                        <strong class="fa fa-info"> <?php echo $message; ?> </strong>
                                    </p>
                                <?php } ?>
                                <hr/>
                            </div>

						</div>
					</div>

					<div class="col-md-6">

						<div class="section-title">
							<h4 class="title">E-SHOP</h4>
						</div>
						<!-- home slick -->
						<div id="home-slick">
							<!-- banner -->
							<div class="banner banner-1">
								<img src="../img/banner01.jpg" alt="">
								<div class="banner-caption text-center">
									<h1 style="color: #F8694A">Giảm giá túi xách</h1>
									<h3 class="white-color font-weak">Giảm lên đến 50%</h3>
									<button class="primary-btn">Mua ngay</button>
								</div>
							</div>
							<!-- /banner -->

							<!-- banner -->
							<div class="banner banner-1">
								<img src="../img/banner02.jpg" alt="">
								<div class="banner-caption">
									<h1 class="primary-color">Giảm giá<br><span class="white-color font-weak">Lên đến 50%</span></h1>
									<button class="primary-btn">Mua ngay</button>
								</div>
							</div>
							<!-- /banner -->

							<!-- banner -->
							<div class="banner banner-1">
								<img src="../img/banner03.jpg" alt="">
								<div class="banner-caption">
									<h1 class="white-color">Sản phẩm <span>mới</span></h1>
									<button class="primary-btn">Mua ngay</button>
								</div>
							</div>
							<!-- /banner -->
						</div>
						<!-- /home slick -->

						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Phương Thức Vận Chuyển</h4>
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="shipping" id="shipping-1" checked> -->
								<label for="shipping-1">Free Shiping - $0.00</label>
								<div class="caption">
									<p>
										<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo consequat. -->
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="shipping" id="shipping-2"> -->
								<label for="shipping-2">Tiêu Chuẩn - $4.00</label>
								<div class="caption">
									<p>
										<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo consequat. -->
										<p>
								</div>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Phương Thức Thanh Toán</h4>
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="payments" id="payments-1" checked> -->
								<label for="payments-1">Chuyển Qua Ngân Hàng</label>
								<div class="caption">
									<p>
										<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo consequat. -->
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="payments" id="payments-2"> -->
								<label for="payments-2">Cheque Payment</label>
								<div class="caption">
									<p>
										<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo consequat. -->
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="payments" id="payments-3"> -->
								<label for="payments-3">Hệ Thống Paypal </label>
								<div class="caption">
									<p>
										<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo consequat. -->
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
