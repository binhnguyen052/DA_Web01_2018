
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url();?>index.php/admin/managers">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Account</li>
            </ol>

            <!-- Page Content -->

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Quản lý tài khoản</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Avatar</th>
                                <th>Display Name</th>
                                <th>Address</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Status</th>

                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Avatar</th>
                                <th>Display Name</th>
                                <th>Address</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            <?php foreach ($accounts as $account) {?>
                                <tr>
                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/accounts/edit/<?php echo $account['id']; ?>">
                                            <i class="fa fa-edit text-uppercase"> sửa</i></a>

                                        <a class="btn btn-xs btn-danger" href="#">
                                            <i class="fa fa-times text-uppercase"> Xóa</i></a></td>

                                    <td class="text-uppercase"><?php echo $account['avartar_url'];?></td>
                                    <td class="text-uppercase"><?php echo $account['display_name'];?></td>
                                    <td class="text-uppercase"><?php echo $account['address'];?></td>
                                    <td class="text-uppercase"><?php echo $account['tel'];?></td>
                                    <td class="text-uppercase"><?php echo $account['email'];?></td>
                                    <?php if($account['account_type'] == 0) {echo '<td class="text-primary bg-light">Admin</td>';}
                                    else if($account['account_type'] == 1) {echo '<td class="text-success">Customer</td>';}
                                    ?>
                                    <td class="text-uppercase"><?php echo $account['deleted'] == 0? 'Enable' : 'Disable';?></td>

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
