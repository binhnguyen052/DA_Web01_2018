<?php
class Account extends MY_Model
{
    var $table =  'account';

    public $tb_account = 'account';

    public function get_account()
    {
        $query = $this->db->query("SELECT * FROM {$this->tb_account} WHERE 1");

        return $query->result_array();
    }


}