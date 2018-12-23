
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url();?>index.php/admin/managers">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Product Orders</li>
            </ol>

            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Nhà sản xuất</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Account Name</th>
                                <th>Date Create</th>
                                <th>Date Delivery</th>
                                <th>Total Pay</th>
                                <th>Deleted</th>
                                <th>Status</th>
                                <th>Recipient Name</th>
                                <th>Recipient Tel</th>
                                <th>Address Number</th>
                                <th>Street</th>
                                <th>Ward</th>
                                <th>District</th>
                                <th>Province</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Account Name</th>
                                <th>Date Create</th>
                                <th>Date Delivery</th>
                                <th>Total Pay</th>
                                <th>Deleted</th>
                                <th>Status</th>
                                <th>Recipient Name</th>
                                <th>Recipient Tel</th>
                                <th>Address Number</th>
                                <th>Street</th>
                                <th>Ward</th>
                                <th>District</th>
                                <th>Province</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            <?php foreach ($orders as $order) {?>
                                <tr>

                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/orders/edit/<?php echo $order['id']; ?>">
                                            <i class="fa fa-edit text-uppercase">sửa</i></a>

                                        <a class="btn btn-xs btn-danger" href="#">
                                            <i class="fa fa-times text-uppercase">Xóa</i></a></td>

                                    <td><?php $one_account = $this->Order->get_one_account($order['account_id']);
                                        foreach ($one_account as $account){ echo $account['display_name'];}?></td>
                                    <td class="text-uppercase"><?php echo $order['date_create'];?></td>
                                    <td class="text-uppercase"><?php echo $order['date_delivery'];?></td>
                                    <td class="text-uppercase"><?php echo $order['total_pay'];?></td>
                                    <td class="text-uppercase"><?php echo $order['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                    <?php if($order['status'] == 0) {echo '<td class="text-danger">Chưa giao</td>';}
                                    else if($order['status'] == 1) {echo '<td class="text-success">Đã giao</td>';}
                                    else if($order['status'] == -1) {echo '<td class="text-primary">Đang giao</td>';}
                                    ?>
                                    <td class="text-uppercase"><?php echo $order['recipient_name'];?></td>
                                    <td class="text-uppercase"><?php echo $order['recipient_tel'];?></td>
                                    <td class="text-uppercase"><?php echo $order['address_number'];?></td>
                                    <td class="text-uppercase"><?php echo $order['street'];?></td>
                                    <td class="text-uppercase"><?php echo $order['ward'];?></td>
                                    <td class="text-uppercase"><?php echo $order['district'];?></td>
                                    <td class="text-uppercase"><?php echo $order['province'];?></td>


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
