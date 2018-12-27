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
            <form id="checkout-form" class="clearfix">
                <div class="col-md-12">
                    <div class="order-summary clearfix">
                        <div class="section-title">
                            <h4 class="title text-primary"><?php echo $_SESSION['display_name']; ?></h4> <br/>
                            <h3 class="title">Xem Đơn Hàng</h3>
                        </div>
                        <table class="shopping-cart-table table">
                            <thead>
                            <tr>
                                <th>Sản Phẩm</th>
                                <th></th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Ngày Giao</th>
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
                                <td class="price text-center"><strong>$32.50</strong></td>
                                <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                <td class="price text-center"><strong>28/12/2018</strong></td>
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
<!--                        <div class="pull-right">-->
<!--                            <button class="primary-btn">Đặt Hàng</button>-->
<!--                        </div>-->
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

