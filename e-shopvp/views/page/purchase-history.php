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
                                <th>Tên Sản Phẩm</th>
                                <th class="text-center">Đơn Giá</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Ngày Sẽ Giao</th>
                                <th class="text-center">Trạng Thái</th>
                                <th class="text-center">Tổng</th>
                                <th class="text-right"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                             $account_id = -1;
                             if (isset($_SESSION['id'])) { $account_id = $_SESSION['id'];}
                             $sql = $_model_product->get_purchase_history($account_id);
                             //echo $account_id;
                             $result = $db->executeQuery($db->link, $sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    extract($row);
                                    $total = $row['total_pay'];
                                    ?>
                                    <tr>
                                        <td class="thumb"><img class="img-thumbnail" src="<?php echo $href_public; ?>/upload/detail/<?php echo $row['image_url']; ?>" alt=""></td>
                                        <td class="price text-left text-uppercase"><strong><?php echo $row['name']; ?></strong></td>
                                        <td class="price text-center"><strong class="primary-color">$<?php echo $row['price']; ?></strong></td>
                                        <td class="price text-center"><strong><?php echo $row['quantity']; ?></strong></td>
                                        <td class="price text-center"><strong><?php echo $row['date_delivery']; ?></strong></td>
                                        <?php if($row['status'] == 0) {echo '<td class="price text-center text-danger text-uppercase">Chưa giao</td>';}
                                        else if($row['status'] == 1) {echo '<td class="price text-center text-success text-uppercase">Đã giao</td>';}
                                        else if($row['status'] == -1) {echo '<td class="price text-center text-primary text-uppercase">Đang giao</td>';}?>
                                        <td class="total text-center"><strong class="primary-color">$<?php echo $row['price']*$row['quantity']; ?></strong></td>
                                        <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                            <tfoot>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>SHIPING</th>
                                <td colspan="2">Free Shipping</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TOTAL</th>
                                <th colspan="2" class="total">$<?php echo $total; ?></th>
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

