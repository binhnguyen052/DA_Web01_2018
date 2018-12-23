
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url();?>index.php/admin/managers">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Manufacturer</li>
            </ol>

            <!-- Page Content -->
            <button data-toggle="collapse" data-target="#demo" class="text-uppercase btn btn-primary">
                click here to add new</button>
            <div id="demo" class="collapse in">
                <hr/>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Tên nhà sản xuất:</label>
                        <input type="text" class="form-control" name="m_manufacturer_name" required="required">
                    </div>

                    <button type="submit" class="btn btn-success text-uppercase">ADD</button>
                    <?php $alert; $check_insert == TRUE ? $alert = 'Thêm thành công': $alert = 'thêm thất bại'; ?>
                </form>
            </div>

            <hr/>
            <div class="text-uppercase"><?php echo $alert;?> </div>
            <hr/>

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
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            <?php foreach ($manufacturers as $manufacturer) {?>
                                <tr>
                                    <td class="text-uppercase"><?php echo $manufacturer['name'];?></td>
                                    <td class="text-uppercase"><?php echo $manufacturer['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/product_types/edit/<?php echo $manufacturer['id']; ?>">
                                            <i class="fa fa-edit text-uppercase">sửa</i></a>

                                        <a class="btn btn-xs btn-danger" href="#">
                                            <i class="fa fa-times text-uppercase">Xóa</i></a></td>
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