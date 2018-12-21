<?php

class Product extends CI_Model
{
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';

    public $id;
    public $__name;

    function __construct()
    {
        parent::__construct();
    }

    public function get_last_entries($num = 10)
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product} ORDER BY date_added DESC LIMIT {$num}");

        return $query->result_array();
    }

    public function get_most_views($num = 12)
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product} ORDER BY views DESC LIMIT {$num}");

        return $query->result_array();
    }

    public function get_most_sold($num = 10)
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product} ORDER BY solds DESC LIMIT {$num}");

        return $query->result_array();
    }

    public function get_product_type()
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product_type} WHERE deleted = 0 ORDER BY name ASC ");

        return $query->result_array();
    }

    public function get_manufacturer()
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_manufacturer} WHERE deleted = 0 ORDER BY name ASC ");

        return $query->result_array();
    }


    // sử dụng cho thanh menu danh mục, loại sản phẩm có các nhà sản xuất tương ứng
    public function get_product_type_manufacturer($id_type = 1)
    {
        $query = $this->db->query("
        SELECT DISTINCT manufacturer.name, manufacturer.id, manufacturer.logo_url
        FROM manufacturer JOIN product ON manufacturer.id = product.manufacturer_id
		JOIN product_type ON product_type.id = product.product_type_id
        WHERE product_type.id = {$id_type}");

        return $query->result_array();
    }

    public function get_one($filter = array())
    {
        $where = "";
        if (!empty($filter['id'])) {
            $where .= " AND product.id = {$filter['id']}";
        }
        $query = $this->db->query("
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
            WHERE 1 {$where} AND product.deleted = 0
        ");
        return $query->result_array();
    }

    public function get_same_type($id,$start = 0, $limit = 6)
    {
        $where ="";
        if (!empty($id)) {
            $where .= " AND product_type_id = {$id}";
        }

        $query=$this->db->query("
        SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}
        ");
        return $query->result_array();
    }

    public function get_same_manufacturer($id, $start = 0, $limit = 6)
    {
        $where ="";
        if (!empty($id)) {
            $where .= " AND manufacturer_id = {$id}";
        }

        $query=$this->db->query("
        SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}
        ");
        return $query->result_array();
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

        $query = $this->db->query("
            SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}
        ");

       // $sql = "SELECT * FROM `product` WHERE deleted = 0";

        return $query->result_array();
    }

    public function count_all($filter = array())
    {
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $query = $this->db->query("
            SELECT
                COUNT(id) AS num_rows
            FROM product
            WHERE 1 {$where} AND deleted = 0
        ");

        $row = $query->row();

        if (isset($row))
            return $row->num_rows;

        return 0;
    }

    /*
    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    */
}