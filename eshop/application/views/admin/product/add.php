<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>index.php/admin/managers">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>index.php/admin/products/m_product">Product</a>
            </li>
            <li class="breadcrumb-item active">Add</li>
        </ol>

        <!-- Page Content -->
        <form action="" method="POST" class="">
            <div class="title">
                <h3 class="title text-uppercase">Thêm mới sản phẩm</h3>
            </div>

            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input class="input form-control" type="text" name="admin_product_name" required="required"
                       placeholder="Nhập tên sản phẩm (*) . . .">
            </div>
            <div class="form-group">
                <label for="">Hình sản phẩm</label>
                <input type="file" class="form-control-file" name="admin_product_image_url">
            </div>

            <div class="form-group">
                <label for="">Giá</label>
                <input type="number" class="input form-control" name="admin_product_price" required="required"
                       placeholder="Nhập giá (*) . . .">
            </div>

            <div class="form-group">
                <label for="">Xuất xứ</label>
                <input type="number" class="input form-control" name="admin_product_origin" required="required"
                       placeholder="Nhập nơi xuất xứ (*) . . .">
            </div>

            <div class="form-group">
                <label for="example-date-input">Ngày nhập</label>
                <input type="datetime-local" class="input form-control" name="admin_product_date_added" required="required">
            </div>

            <div class="form-group">
                <label for="">Số lượng tồn</label>
                <input type="number" class="input form-control" name="admin_product_inventory" placeholder="Nhập số lượng tồn . . .">
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <?php $alert; $check_insert == TRUE ? $alert = 'Thêm thành công' : $alert = 'thêm thất bại'; ?>
    </form>

        <hr/>
         <div class="text-uppercase"><?php if(isset($alert)) {echo $alert;}?> </div>
        <hr/>



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