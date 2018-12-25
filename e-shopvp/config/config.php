<?php
/* Các hằng này trả về thông tin về một số ngữ cảnh hiện tại.
 * __FILE__ //Tên tập tin hiện tại.
 * __DIR__ //Đường dẫn thư mục hiện tại.
 * __FUNCTIONS__ //Hàm hiện tại.
 * __CLASS__ //Lớp hiện tại.
 * __METHOD__ //Phương thức hiện tại.
 * __NAMESPACE__ //Namespace hiện tại.
 * */
//biến lưu đường dẫn gốc
$_base_url = 'http://localhost/DoAn_Web01_E404_2018/old/e-shopvp';

$__config = array(
    '_base_url' => $_base_url,

    //các biến tên folder
    'config' => 'config',
    'controllers' => 'controllers',
    'libraries' => 'libraries',
    'models' => 'models',
    'public' => 'public',
    'views' => 'views',


);

//cấu hình kết nối cơ sở dữ liệu
//host
define('DB_HOST', "localhost");
//user sử dụng
define('DB_USER', "root");
//mật khẩu
define('DB_PASSWORD', "");
//database sử dụng
define('DB_DATABASE', "eshopv");
//port: cổng mạng
define('DB_PORT', 3306);

//các biến tên folder




?>