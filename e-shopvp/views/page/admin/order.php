<?php
  include("./header.php");
  ?>

    <div id="wrapper">


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Product Orders</li>
          </ol>

          <!-- Page Content -->


            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4><i class="fas fa-table"></i> Đơn hàng</h4></div>
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
                            <?php
                            $sql = $_model_admin->get_orders();
                            $result = $db->executeQuery($db->link, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                extract($row); ?>
                                <tr>
                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="order_update.php?orders_id=<?php echo $row['id']; ?>">
                                            <i class="fa fa-edit text-uppercase">sửa</i></a>

<!--                                        <a class="btn btn-xs btn-danger" href="#">-->
<!--                                            <i class="fa fa-times text-uppercase">Xóa</i></a></td>-->

                                    <td><?php $one_account = $_model_admin->get_one_account($row['account_id']);
                                        $result_account = $db->executeQuery($db->link, $one_account);
                                        while ($row_account = mysqli_fetch_array($result_account))
                                        {extract($row_account); echo $row_account['display_name'];}?></td>

                                    <td class="text-uppercase"><?php echo $row['date_create'];?></td>
                                    <td class="text-uppercase"><?php echo $row['date_delivery'];?></td>
                                    <td class="text-uppercase"><?php echo $row['total_pay'];?></td>
                                    <td class="text-uppercase"><?php echo $row['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                    <?php if($row['status'] == 0) {echo '<td class="text-danger">Chưa giao</td>';}
                                    else if($row['status'] == 1) {echo '<td class="text-success">Đã giao</td>';}
                                    else if($row['status'] == -1) {echo '<td class="text-primary">Đang giao</td>';}?>
                                    <td class="text-uppercase"><?php echo $row['recipient_name'];?></td>
                                    <td class="text-uppercase"><?php echo $row['recipient_tel'];?></td>
                                    <td class="text-uppercase"><?php echo $row['address_number'];?></td>
                                    <td class="text-uppercase"><?php echo $row['street'];?></td>
                                    <td class="text-uppercase"><?php echo $row['ward'];?></td>
                                    <td class="text-uppercase"><?php echo $row['district'];?></td>
                                    <td class="text-uppercase"><?php echo $row['province'];?></td>
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
