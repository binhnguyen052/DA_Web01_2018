

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>/admin/managers">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Product Order Details</li>
                </ol>

                <!-- Page Content -->
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Chi tiết đơn đặt hàng</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Order Id</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($order_details as $detail) {?>
                                    <tr>
                                        <td class="optional">
                                            <a class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/order_details/edit/<?php echo $detail['id']; ?>">
                                                <i class="fa fa-edit text-uppercase">sửa</i></a>

                                            <a class="btn btn-xs btn-danger" href="#">
                                                <i class="fa fa-times text-uppercase">Xóa</i></a></td>

                                        <td class="text-uppercase"><?php $one_product = $this->Order_detail->get_one_product($detail['product_id']);
                                            foreach ($one_product as $product){ echo $product['name'];}?></td>
                                        <td class="text-uppercase"><?php echo $detail['quantity'];?></td>
                                        <td class="text-uppercase"><?php echo $detail['price'];?></td>
                                        <td class="text-uppercase"><?php echo $detail['order_id'];?></td>

                                    </tr>
                                <?php }?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
                <!-- DataTables Example -->





            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2018</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->
