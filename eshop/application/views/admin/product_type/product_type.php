
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url();?>index.php/admin/managers">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Product Type</li>
            </ol>

            <!-- Page Content -->


            <button data-toggle="collapse" data-target="#demo" class="text-uppercase btn btn-primary">
                click here to add new</button>
            <div id="demo" class="collapse in">
                <hr/>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Tên loại sản phẩm:</label>
                        <input type="text" class="form-control" name="m_product_type_name" required="required">
                    </div>
                    <button type="submit" class="btn btn-success text-uppercase">ADD</button>
                    <?php $alert; $check_insert == TRUE ? $alert = 'Thêm thành công' : $alert = 'thêm thất bại'; ?>
                </form>
            </div>

            <hr/>
            <?php $this->load->view('admin/message'); ?>
            <hr/>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Loại sản phẩm</div>
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
                            <?php foreach ($product_type as $type) {?>
                                <tr>
                                    <td class="text-uppercase"><?php echo $type['name'];?></td>
                                    <td class="text-uppercase"><?php echo $type['deleted'] == 0? 'Enable' : 'Disable';?></td>
                                    <td class="optional">
                                        <a class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/product_types/edit/<?php echo $type['id']; ?>">
                                            <i class="fa fa-edit text-uppercase">sửa</i></a>
                                        
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url();?>admin/product_types/delete/<?php echo $type['id']; ?>"
                                           onclick="return confirmAction()">
                                            <i class="fa fa-times text-uppercase">xóa</i></a></td>

                                    <script language="JavaScript">
                                        function confirmAction() {
                                            return confirm("Bạn có muốn xóa không?")
                                        }
                                    </script>

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
