<?php

  //thêm thư viện database.php để kết nối cơ sở dữ liệu
include_once("../../../Model/database/database.php");

  //khởi tạo biến database
  $db = new Database();
  $db->db_connect();
?>

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
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <h1>Blank Page</h1>
          <hr> 
          <p>This is a great starting point for new custom pages.</p>
            ok
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

<?php
  $db->db_close();
?>
