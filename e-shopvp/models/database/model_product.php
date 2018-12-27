<?php

class MProduct
{
    public $tb_account = 'account';
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';
    public $tb_orders = 'orders';
    public $tb_order_detail = 'order_detail';

    public $id;
    public $__name;

    public function get_last_entries($start = 0, $num = 12)
    {
        $query = "SELECT * FROM {$this->tb_product} ORDER BY date_added DESC LIMIT {$start},{$num}";

        return $query;
    }

    public function get_most_views($start = 0, $num = 12)
    {
        $query = "SELECT * FROM {$this->tb_product} ORDER BY views DESC LIMIT {$start},{$num}";

        return $query;
    }

    public function get_most_sold($start = 0, $num = 10)
    {
        $query = "SELECT * FROM {$this->tb_product} ORDER BY solds DESC LIMIT {$start},{$num}";

        return $query;
    }

    public function get_product()
    {
        $query = "SELECT * FROM {$this->tb_product} WHERE deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_product_type()
    {
        $query = "SELECT * FROM {$this->tb_product_type} WHERE deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_manufacturer()
    {
        $query = "SELECT * FROM {$this->tb_manufacturer} WHERE deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_orders()
    {
        $query = "SELECT * FROM {$this->tb_orders} WHERE deleted = 0 ORDER BY id ASC ";

        return $query;
    }

    public function get_order_detail()
    {
        $query = "SELECT * FROM {$this->tb_order_detail} WHERE deleted = 0 ORDER BY id ASC ";

        return $query;
    }

    // sử dụng cho thanh menu danh mục, loại sản phẩm có các nhà sản xuất tương ứng
    public function get_product_type_manufacturer($id_type = 1)
    {
        $query = "
        SELECT DISTINCT manufacturer.name, manufacturer.id, manufacturer.logo_url
        FROM manufacturer JOIN product ON manufacturer.id = product.manufacturer_id
		JOIN product_type ON product_type.id = product.product_type_id
        WHERE product_type.id = {$id_type}";

        return $query;
    }

    public function get_product_by_Condition($filter = array())
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
           //LIMIT {$start}, {$limit}";

        return $query;
    }

    public function get_one_product($filter = array())
    {
        $where = "";
        if (!empty($filter['id'])) {
            $where .= " AND product.id = {$filter['id']}";
        }
        $query = "
            SELECT 
            product.id as product_id,       
            product.name as product_name,
            product_type.id as type_id,       
            product_type.name as type_name,
            manufacturer.id as manufacturer_id,       
            manufacturer.name as manufacturer_name,
            product.price,
            product.origin,
            product.image_url,  
            product.inventory,     
            product.views,
            product.solds,
            product.descreibe
            FROM manufacturer JOIN product ON manufacturer.id = product.manufacturer_id
		    JOIN product_type ON product_type.id = product.product_type_id
            WHERE 1 {$where} AND product.deleted = 0";
        return $query;
    }

    public function get_one_product_type($id)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND product_type.id = {$id}";
        }
        $query = "SELECT * FROM {$this->tb_product_type} WHERE 1 {$where} deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_one_manufacturer($id)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND manufacturer.id = {$id}";
        }
        $query = "SELECT * FROM {$this->tb_manufacturer} WHERE 1 {$where} deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_one_account($id)
    {
        $where = "";

        if (!empty($id)) {
            $where .= " AND product_type_id = {$id}";
        }
        $query = "SELECT * FROM {$this->tb_account} WHERE 1 AND deleted = 0 ORDER BY id ASC";

        return $query;
    }

    public function get_same_type($id, $start = 0, $limit = 6)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND product_type_id = {$id}";
        }

        $query = "SELECT * 
                  FROM product
                  WHERE 1 {$where} AND deleted = 0
                  LIMIT {$start}, {$limit}";
        return $query;
    }

    public function get_same_manufacturer($id, $start = 0, $limit = 6)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND manufacturer_id = {$id}";
        }

        $query = "
        SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}";
        return $query;
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

    public function update_view($conn, $id, $op)
    {
        //lưu lượt xem
        $module_data = 'product';
        $column_update = 'views';
        $id_update = $id;
        $op = $op;
        $session_view = $module_data.'_'.$op.'_'.$id_update;

        // Lấy giá trị session có tên là $module_data . '_' . $op . '_' . $_id
        $chech_view = $_SESSION[$session_view];

        // Kiểm tra, nếu $chech_view rỗng (Truy cập trang lần đầu) thì thực hiện code bên trong
        if(empty($chech_view))
        {
            // Gán giá trị session
            $_SESSION[$session_view] = 1;
            // Thực hiện cập nhật lượt xem
            $query = "UPDATE {$module_data} SET {$column_update} = {$column_update} + 1 WHERE id = {$id_update}";
            mysqli_query($conn, $query);
        }
    }



}

?>

