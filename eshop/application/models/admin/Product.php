<?php
class Product extends CI_Model
{
    public $tb_product = 'product';

    public function get_product()
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_product} WHERE 1");

        return $query->result_array();
    }


}