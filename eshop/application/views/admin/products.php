<div id="wrapper">


    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url();?>index.php/admin/managers">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Product</li>
            </ol>

            <!-- Page Content -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Quản lý sản phẩm</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
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
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
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
                                <th>Action</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            <?php foreach ($products as $product) {?>
                                <tr>
                                    <td> <img class="img-thumbnail" src="<?php echo base_url(); ?>public/upload/<?php echo $product['image_url'];?>"</td>
                                    <td><?php echo $product['name'];?></td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $product['origin'];?></td>
                                    <td><?php echo $product['date_added'];?></td>
                                    <td><?php $one_product_type = $this->Product->get_one_product_type($product['product_type_id']);
                                        foreach ($one_product_type as $type){ echo $type['name'];}?></td>
                                    <td><?php $one_manufacturer = $this->Product->get_one_manufacturer($product['manufacturer_id']);
                                        foreach ($one_manufacturer as $manufacturer){ echo $manufacturer['name'];}?></td>
                                    <td><?php echo $product['inventory'];?></td>
                                    <td><?php echo $product['solds'];?></td>
                                    <td><?php echo $product['views'];?></td>
                                    <td><?php echo $product['sale'];?></td>
                                    <td><?php echo $product['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                    <td><?php echo $product['descreibe'];?></td>
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