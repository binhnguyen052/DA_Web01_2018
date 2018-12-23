<?php
class Product_type extends MY_Model
{
    var $table = 'product_type';

    public $tb_account = 'account';
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';

    public function get_product()
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product} WHERE 1");

        return $query->result_array();
    }

    public function get_product_type()
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product_type} WHERE 1");

        return $query->result_array();
    }

    public function _insert($data)
    {

        $query = $this->db->query("SELECT * FROM {$this->table} WHERE name = '{$data['name']}'");
        $row = $query->row();

        if (isset($row)) {
            $data['type_message'] = 'loại sản phẩm đã tồn tại !';
            return FALSE;
        } else {
            $insert_data = array(
                'name' => $data['name']
            );
            $this->db->insert($this->table, $insert_data);
            return TRUE;
        }
    }

}