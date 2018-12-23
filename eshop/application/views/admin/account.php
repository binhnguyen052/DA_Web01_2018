
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
                                <th>Username</th>
                                <th>Display name</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Display name</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            <?php foreach ($accounts as $account) {?>
                            <tr>
                                <td><?php echo $account['username'];?></td>
                                <td><?php echo $account['display_name'];?></td>
                                <td><?php echo $account['tel'];?></td>
                                <td><?php echo $account['email'];?></td>
                                <td><?php echo $account['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                <?php echo $account['account_type'] == 0 ?
                                    'echo <td class="text-warning bg-dark">Admin</td>':
                                    'echo <td class="text-success">Customer</td>';?>
                                <td>Xóa, sửa</td>
                            </tr>
                            <?php }?>

                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>


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
