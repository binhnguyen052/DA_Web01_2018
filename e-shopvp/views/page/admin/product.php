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
            <li class="breadcrumb-item active">Product</li>
          </ol>

          <!-- Page Content -->


            <div class="card mb-3">
                <div class="card-header">
                    <h4><i class="fas fa-table"></i> Quản lý sản phẩm</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Origin</th>
                                <th>Date Added</th>
                                <th>Type</th>
                                <th>Manufacturer</th>
                                <th>Inventory</th>
                                <th>Sold</th>
                                <th>Views</th>
                                <th>Sale</th>
                                <th>Status</th>
                                <th>Describe</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Origin</th>
                                <th>Date Added</th>
                                <th>Type</th>
                                <th>Manufacturer</th>
                                <th>Inventory</th>
                                <th>Sold</th>
                                <th>Views</th>
                                <th>Sale</th>
                                <th>Status</th>
                                <th>Describe</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            <?php
                                $sql = $_model_admin->get_product();
                                $result = $db->executeQuery($db->link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    extract($row);
                                    $product_type_id = $row['product_type_id'];
                                    $manufacturer_id = $row['manufacturer_id'];
                                    ?>
                                <tr>
                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="#">
                                            <i class="fa fa-edit text-uppercase">sửa</i></a>

                                        <a class="btn btn-xs btn-danger" href="#">
                                            <i class="fa fa-times text-uppercase">Xóa</i></a></td>

                                    <td> <img class="img-thumbnail" src="<?php echo $href_admin_public; ?>/upload/<?php echo $row['image_url']; ?>"</td>
                                    <td class="text-uppercase"><?php echo $row['name'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><?php echo $row['origin'];?></td>
                                    <td><?php echo $row['date_added'];?></td>
                                    <td><?php $one_product_type = $_model_admin->get_one_product_type($product_type_id);
                                        $result_type = $db->executeQuery($db->link, $one_product_type);
                                        while ($row_type = mysqli_fetch_array($result_type))
                                        {extract($row_type); echo $row_type['name'];}?></td>

                                    <td><?php $one_manufacturer = $_model_admin->get_one_manufacturer($manufacturer_id);
                                        $result_manufacturer = $db->executeQuery($db->link, $one_manufacturer);
                                        while ($row_manufacturer = mysqli_fetch_array($result_manufacturer))
                                        {extract($row_manufacturer); echo $row_manufacturer['name'];}?></td>
                                    <td><?php echo $row['inventory'];?></td>
                                    <td><?php echo $row['solds'];?></td>
                                    <td><?php echo $row['views'];?></td>
                                    <td><?php echo $row['sale'];?></td>
                                    <td><?php echo $row['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                    <td><?php echo $row['descreibe'];?></td>
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


<?php
    include("./footer.php");
    $db->db_close();
?>
