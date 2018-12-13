<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url();?>public/css/login.css" rel="stylesheet" id="bootstrap-css">
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body id="LoginForm">
<div class="container">
    <!-- <h1 class="form-heading">WELCOME!</h1> -->
    <!-- Logo -->
    <div class="header-logo">
        <a class="logo" href="<?php echo base_url();?>index.php">
            <img src="<?php echo base_url();?>public/img/logo.png" alt="">
        </a>
    </div>
    <!-- /Logo -->
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h1>Đăng nhập</h1>
            </div>

            <form id="Login">

                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Tên đăng nhập hoặc Email">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu">
                </div>
                <div class="forgot">
                    <a href="#">Quên mật khẩu?</a>
                </div>

                <button type="submit" class="btn btn-primary">Đăng nhập</button>

                <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Chưa có tài khoản?
                        </span>

                    <a href="#" class="txt3">
                        Đăng ký ngay
                    </a>
                </div>

            </form>
        </div>
        <p class="botto-text" style="color: black"> 1660052 - Nguyễn Đình Bình | 1660056 - Nguyễn Tuấn Cảnh | 1660164 - Nguyễn Anh Hào</p><br>
        <p class="botto-text" style="color: black">Đồ Án Web</p>
    </div>
</div>


</body>

</html>
