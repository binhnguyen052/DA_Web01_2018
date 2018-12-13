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
            <form id="checkout-form" class="clearfix">
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
                        <div class="form-group">
                            <input class="input" type="password" name="r_comfirmpassword" required="required" placeholder="Nhập lại mật khẩu *">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="r_tel" placeholder="Số Điện Thoại">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="r_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="r_address" placeholder="Địa Chỉ">
                        </div>
                        <!-- <div class="form-group">
                            <input class="input" type="text" name="r_city" placeholder="Thành Phố">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="r_country" placeholder="Quốc Gia">
                        </div> -->
                        <!-- <div class="form-group">
                            <input class="input" type="text" name="r_zip-code" placeholder="ZIP Code">
                        </div> -->

                        <div class="form-group">
                            <button name="r_submit" type="submit" class="btn btn-primary">Tạo tài khoản</button>
                        </div>
                        <!-- <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="register">
                                <label class="font-weak" for="register">Tạo Tài Khoản ?</label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        <p>
                                            <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div> -->
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
                            <img src="<?php echo base_url();?>public/img/banner01.jpg" alt="">
                            <div class="banner-caption text-center">
                                <h1 style="color: #F8694A">Giảm giá túi xách</h1>
                                <h3 class="white-color font-weak">Giảm lên đến 50%</h3>
                                <button class="primary-btn">Mua ngay</button>
                            </div>
                        </div>
                        <!-- /banner -->

                        <!-- banner -->
                        <div class="banner banner-1">
                            <img src="<?php echo base_url();?>public/img/banner02.jpg" alt="">
                            <div class="banner-caption">
                                <h1 class="primary-color">Giảm giá<br><span class="white-color font-weak">Lên đến 50%</span></h1>
                                <button class="primary-btn">Mua ngay</button>
                            </div>
                        </div>
                        <!-- /banner -->

                        <!-- banner -->
                        <div class="banner banner-1">
                            <img src="<?php echo base_url();?>public/img/banner03.jpg" alt="">
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

