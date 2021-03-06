<?php

class MUser
{
    public $tb_account = 'account';
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';
    public $tb_orders = 'orders';
    public $tb_order_detail = 'order_detail';

    public $id;
    public $__name;


    public function get_account()
    {
        $query = "SELECT * FROM {$this->tb_account} WHERE 1 AND deleted = 0 ORDER BY id ASC";

        return $query;
    }

    public function get_one_account($username)
    {
        $where = "";

        if (!empty($username)) {
            $where .= " AND username = '{$username}'";
        }
        $query = "SELECT * FROM {$this->tb_account} WHERE 1 {$where} AND deleted = 0";

        return $query;
    }

    public function check_login($conn, $username, $password)
    {
        $password_md5 = md5($password);
        $query = "SELECT * FROM account WHERE username = '{$username}' AND password = '{$password_md5}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        $row_extract = mysqli_fetch_array($result);
        extract($row_extract);
        //nếu tồn tại tài khoản
        if ($row > 0) {
            //lưu session
            $_SESSION['id'] = $row_extract['id'];
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['display_name'] = $row_extract['display_name'];
            $_SESSION['address'] = $row_extract['address'];
            $_SESSION['tel'] = $row_extract['tel'];
            $_SESSION['email'] = $row_extract['email'];
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['account_type'] = $row_extract['account_type'];
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check_register($conn, $username, $display_name)
    {
        $query = "SELECT * FROM account WHERE username = '{$username}' AND display_name = '{$display_name}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        //nếu tồn tại tài khoản hoặc tên hiển thị tồn tại
        if ($row <= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function register($conn, $filter = array())
    {
//        echo 'a ' .$filter['username'].'<br>';
//        echo 'a ' .$filter['password'].'<br>';
//        echo 'a ' .$filter['display_name'].'<br>';
//        echo 'a ' .$filter['address'].'<br>';
//        echo 'a ' .$filter['tel'].'<br>';
//        echo 'a ' .$filter['email'].'<br>';
        $address = NULL;
        $email = NULL;
        $tel = NULL;
        if($filter['address'] != null){ $address = $filter['address'];}
        if($filter['email'] != null){ $address = $filter['email'];}
        if($filter['tel'] != null){ $address = $filter['tel'];}

        $query = "
        INSERT INTO account(username, password, display_name, address, tel, email, avartar_url, account_type)
        VALUES('{$filter['username']}', '{$filter['password']}', '{$filter['display_name']}',
        '{$address}', '{$email}', '{$tel}', NULL, 1);";
        $result = mysqli_query($conn, $query);
        //$row = mysqli_num_rows($result);
        //nếu insert thành công
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update_profile($conn, $filter = array(), $username)
    {
        $set = "";
        if (!empty($filter['display_name'])) {
            $set .= "display_name = '{$filter['display_name']}'";
        }

        if (!empty($filter['password'])) {
            $set .= ", password = '{$filter['password']}'";
        }

        if (!empty($filter['address'])) {
            $set .= ", address = '{$filter['address']}'";
        }

        if (!empty($filter['tel'])) {
            $set .= ", tel = '{$filter['tel']}'";
        }

        if (!empty($filter['email'])) {
            $set .= ", email = '{$filter['email']}'";
        }

        $query = "UPDATE account
                  SET {$set}
                  WHERE username = '{$username}'";

        $result = mysqli_query($conn, $query);
        //nếu update thành công
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    public function get_all($filter = array(), $start = 0, $limit = 10)
    {
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $query = "
            SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}";

        // $sql = "SELECT * FROM `product` WHERE deleted = 0";

        return $query;
    }

    public function count_all($conn, $filter = array())
    {
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $query = "
            SELECT *
            FROM product
            WHERE 1 {$where} AND deleted = 0";

        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            return $row = mysqli_num_rows($result);
        }
        return 0;
    }



}

?>