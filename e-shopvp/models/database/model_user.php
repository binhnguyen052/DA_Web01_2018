<?php

class MUser
{
    public $tb_account = 'account';
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';

    public $id;
    public $__name;


    public function get_account()
    {
        $query = "SELECT * FROM {$this->tb_account} WHERE 1 AND deleted = 0 ORDER BY id ASC";

        return $query;
    }

    public function check_login($conn, $username, $password)
    {
        $password_md5 = md5($password);
        $query = "SELECT * FROM account WHERE username = '{$username}' AND password = '{$password_md5}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        //nếu tồn tại tài khoản
        if ($row > 0) {
            //lưu session
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['display_name'] = $row['display_name'];
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['account_type'] = $row['account_type'];
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