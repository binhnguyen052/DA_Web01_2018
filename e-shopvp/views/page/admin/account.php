<?php
  include("./header.php");
  ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Account</li>
          </ol>

          <!-- Page Content -->

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4><i class="fas fa-table"></i> Quản lý tài khoản</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Display Name</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Display Name</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            $sql = $_model_admin->get_account();
                            $result = $db->executeQuery($db->link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                extract($row); ?>

                                <tr>
                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="#">
                                            <i class="fa fa-edit text-uppercase">sửa</i></a>

                                        <a class="btn btn-xs btn-danger" href="#">
                                            <i class="fa fa-times text-uppercase">Xóa</i></a></td>

                                    <td class="text-uppercase font-weight-bold"><?php echo $row['display_name']; ?></td>
                                    <?php if($row['account_type'] == 0) {echo '<td class="text-warning bg-dark font-weight-bold">Admin</td>';}
                                    else if($row['account_type'] == 1) {echo '<td class="text-primary font-weight-bold">Customer</td>';} ?>
                                    <td class="text-uppercase"><?php echo $row['deleted'] == 0? 'Enable' : 'Disable';?></td>
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


<?php
    include("./footer.php");
?>
