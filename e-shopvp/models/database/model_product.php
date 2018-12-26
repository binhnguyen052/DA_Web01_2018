<?php

class MProduct
{
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';

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
            product.name as product_name ,
            product_type.id as type_id,       
            product_type.name as type_name,
            manufacturer.id as manufacturer_id,       
            manufacturer.name as manufacturer_name,
            product.price,
            product.origin,
            product.image_url,       
            product.views,
            product.solds,
            product.descreibe
            FROM manufacturer JOIN product ON manufacturer.id = product.manufacturer_id
		    JOIN product_type ON product_type.id = product.product_type_id
            WHERE 1 {$where} AND product.deleted = 0";
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

}

?>

