<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootpstrap core CSS-->
    <link href="<?php echo base_url(); ?>public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>public/admin/css/sb-admin.css" rel="stylesheet"type="text/css">

    </head>

    <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="width: auto;">

        <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <a class="navbar-brand mr-1 text-info" href="<?php echo base_url();?>index.php">Home</a>

        <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <?php
    //các biến sử dụng trong controller
    $_managers = 'managers';
    $_accounts = 'accounts';
    $_product_types = 'product_types';
    $_products = 'products';
    $_manufacturer = 'manufacturers';
    $_orders = 'orders';
    $_order_detail = 'order_details';
    ?>
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>index.php/admin/managers">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span class="text-uppercase">Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span class="text-uppercase">Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header text-uppercase text-info">management:</h6>
                <a class="dropdown-item" href="<?php echo base_url();?>admin/<?php echo $_accounts; ?>/m_account">Account</a>
                <a class="dropdown-item" href="<?php echo base_url();?>admin/<?php echo $_products; ?>/m_product">Product</a>
                <a class="dropdown-item" href="<?php echo base_url();?>admin/<?php echo $_product_types; ?>/m_product_type">Product Type</a>
                <a class="dropdown-item" href="<?php echo base_url();?>admin/<?php echo $_manufacturer; ?>/m_manufacturer">Manufacturer</a>
                <a class="dropdown-item" href="<?php echo base_url();?>admin/<?php echo $_orders; ?>/m_order">Product Orders</a>
                <a class="dropdown-item" href="<?php echo base_url();?>admin/<?php echo $_order_detail; ?>/m_order_detail">Product Order Details</a>

                <h6 class="dropdown-header text-uppercase text-info">Login Screens:</h6>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/admin/managers/login">Login</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/admin/managers/register">Register</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/admin/managers/forgot_password">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header text-uppercase text-info">Other Pages:</h6>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/admin/managers/p404">404 Page</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/admin/managers/blank">Blank Page</a>
            </div>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="account.php">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-info text-uppercase">account management</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="product.php">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-info text-uppercase">Product Management</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="product-type.php">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-info text-uppercase">Product type Management</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="manufacturer.php">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-info text-uppercase">manufacturer management</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="order.php">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-info text-uppercase">Product orders management</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="order-detail.php">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-info text-uppercase">Product order details</span></a>
        </li> -->

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>index.php/admin/managers/table">
                <i class="fas fa-fw fa-table"></i>
                <span class="text-uppercase">Tables</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>index.php/admin/managers/blankt">
                <i class="fas fa-fw fa-table"></i>
                <span class="text-uppercase">Blankt</span></a>
        </li>
    </ul>
