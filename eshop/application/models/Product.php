<?php

class Product extends CI_Model
{
    public $table = 'product';

    public $id;
    public $__name;

    public function get_last_entries($num = 10)
    {
        $query = $this->db->query("SELECT * FROM {$this->table} ORDER BY date_added DESC LIMIT {$num}");

        return $query->result_array();
    }

    public function get_most_views($num = 12)
    {
        $query = $this->db->query("SELECT * FROM {$this->table} ORDER BY views DESC LIMIT {$num}");

        return $query->result_array();
    }

    public function get_most_solds($num = 10)
    {
        $query = $this->db->query("SELECT * FROM {$this->table} ORDER BY solds DESC LIMIT {$num}");
        return $query->result_array();
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