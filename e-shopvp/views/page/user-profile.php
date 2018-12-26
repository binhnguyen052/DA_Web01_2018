<!-- https://bootsnipp.com/tags/profile -->
<?php
//$rd = getenv('DOCUMENT_ROOT');
//echo $rd."<br>";

include ("../../controllers/home/header.php");

$href_public = '../../public';

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
						<img class="avatar img-circle img-thumbnail" src="<?php echo $href_public;?>/upload/user.png"  alt="avatar">
<!--						<h6>Tải lên một ảnh khác...</h6>-->
						<input type="file" class="text-center center-block file-upload">
					</div>
					</hr>
					<div class="list-group ">
						<a href="#" class="list-group-item list-group-item-action active">Thông tin cá nhân</a>
<!--						<a href="#" class="list-group-item list-group-item-action">User Management</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Used</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Enquiry</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Dealer</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Media</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Post</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Category</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">New</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Comments</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Appearance</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Reports</a>-->
<!--						<a href="#" class="list-group-item list-group-item-action">Settings</a>-->


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
									<form method="POST">
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">Tên hiển thị: <?php echo $_SESSION['display_name'];?></label>
                                            <div class="col-8">
                                                <input id="displayname" name="profile_displayname" placeholder="Đổi tên hiển thị" class="form-control here" required="required" type="text">
                                            </div>
										</div>
<!--										<div class="form-group row">-->
<!--											<label for="name" class="col-4 col-form-label">Tên</label>-->
<!--											<div class="col-8">-->
<!--												<input id="name" name="profile_name" placeholder="Nhập tên" class="form-control here" type="text">-->
<!--											</div>-->
<!--										</div>-->
<!--										<div class="form-group row">-->
<!--											<label for="lastname" class="col-4 col-form-label">Họ</label>-->
<!--											<div class="col-8">-->
<!--												<input id="lastname" name="lastname" placeholder="Nhập họ" class="form-control here" type="text">-->
<!--											</div>-->
<!--										</div>-->
										<!-- <div class="form-group row">
											<label for="select" class="col-4 col-form-label">Display Name public as</label>
											<div class="col-8">
												<select id="select" name="select" class="custom-select">
													<option value="admin">Admin</option>
												</select>
											</div>
										</div> -->
										<div class="form-group row">
											<label for="address" class="col-4 col-form-label">Địa chỉ: </label>
											<div class="col-8">
												<input id="address" name="profile_address" placeholder="Nhập địa chỉ" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="phonenumber" class="col-4 col-form-label">Điện thoại: </label>
											<div class="col-8">
												<input id="phonenumber" name="profile_tel" placeholder="Nhập số điện thoại" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="email" class="col-4 col-form-label">Email: </label>
											<div class="col-8">
												<input id="email" name="profile_email" placeholder="Nhập Email" class="form-control here" type="text">
											</div>
										</div>
										<!-- <div class="form-group row">
											<label for="website" class="col-4 col-form-label">Website</label>
											<div class="col-8">
												<input id="website" name="website" placeholder="website" class="form-control here" type="text">
											</div>
										</div> -->
<!--										<div class="form-group row">-->
<!--											<label for="publicinfo" class="col-4 col-form-label">Thông tin công khai</label>-->
<!--											<div class="col-8">-->
<!--												<textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>-->
<!--											</div>-->
<!--										</div>-->
										<div class="form-group row">
											<label for="newpass" class="col-4 col-form-label">Mật khẩu mới</label>
											<div class="col-8">
												<input id="newpass" name="profile_newpass" placeholder="Nhập mật khẩu mới" class="form-control here" type="text">
											</div>
										</div>
<!--										<div class="form-group row">-->
<!--											<label for="confirmnewpass" class="col-4 col-form-label">Xác nhận mật khẩu</label>-->
<!--											<div class="col-8">-->
<!--												<input id="confirmnewpass" name="confirmnewpass" placeholder="Nhập lại mật khẩu mới" class="form-control here" required="required" type="text">-->
<!--											</div>-->
<!--										</div>-->
										<div class="form-group row">
											<label for="starbind" class="col-4 col-form-label">(*) Thông tin bắt buộc phải có</label>
											
										</div>
										<div class="form-group row">
											<div class="offset-4 col-8">
												<button type="submit" class="btn btn-primary">Cập nhật</button>
											</div>
										</div>

                                        <?php
                                        $message = null;
                                        $password = null;
                                        $display_name = null;
                                        $address = null;
                                        $email = null;
                                        $tel = null;
                                        if(isset($_POST['profile_displayname'])){ $display_name = $_POST['profile_displayname']; }
                                        if(isset($_POST['profile_newpass'])){ $password = $_POST['profile_newpass']; }
                                        if(isset($_POST['profile_address'])){ $address = $_POST['profile_address']; }
                                        if(isset($_POST['profile_email'])){ $email = $_POST['profile_email']; }
                                        if(isset($_POST['profile_tel'])){ $tel = $_POST['profile_tel']; }
                                        $filter = array(
                                            'password' => $password,
                                            'display_name' => $display_name,
                                            'address' => $address,
                                            'tel' => $tel,
                                            'email' => $email,
                                        );

                                            $check_login = $_model_user->update_profile($db->link, $filter, $_SESSION['username']);
                                            if($check_login == TRUE){
                                                $message ='Thông báo: Thay đổi thành công!';
                                            } else {
                                                $message ='Thông báo: Thay đổi thất bại!';
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
<?php
include("./footer.php");
$db->db_close();
?>
<!-- FOOTER -->
