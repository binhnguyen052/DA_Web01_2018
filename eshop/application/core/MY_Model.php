<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    //tên table
    var $table = '';

    //khóa chính của table
    var $key = 'id';

    //sắp xếp
    var $order = '';

    //các field select mặc định khi get_list
    var $select = '';


    //public function
    function create($data = array())
    {
        if ($this->db->insert($this->table, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
     * cập nhật 1 dòng
     * $id: khóa chính
     * $data: mảng dữ liệu cần update
     */

    public function update($id, $data)
    {
        if (!$id) {
            return FASLE;
        } else {
            $where = array();
            $where[$this->key] = $id;
            $this->update_rule($where, $data);
            return TRUE;
        }
    }

    /*
     * cập nhật 1 dòng theo điều kiện
     */

    public function update_rule($where, $data)
    {
        if (!$where) {
            return FALSE;
        } else {
            $this->db->where($where);
            $this->db->update($this->table, $data);
            return TRUE;
        }

    }

    public function delete($id)
    {
        if (!$id) {
            return FALSE;
        }
        if (is_numeric($id)) {
            $where = array($this->key => $id);
        } else {
            $where = $this->key . ' IN (' . $id . ') ';
        }
        $this->del_rule($where);
        return TRUE;
    }

    public function del_rule($where)
    {
        if (!$where) {
            return FALSE;
        } else {
            $this->db->where($where);
            $this->db->delete($this->table);
            return TRUE;
        }
    }

    /*
     * thực hiện câu lệnh truy vấn
     * $sql: câu lệnh sql
     */
    public function query($sql)
    {
        $rows = $this->db->query($sql);
        return $rows->result;
    }

    /*
     * lấy thông tin của dòng từ $id
     * $id: id cần lấy
     * $field: cột cần lấy, mặc định lấy tất cả
     * */
    public function get_info($id, $field = '')
    {
        if (!$id) {
            return FALSE;
        } else {
            $where = array();
            $where[$this->key] = $id;
            return $this->get_info_rule($where, $field);
        }
    }

    /*
     * lấy thông tin theo điều kiện
     * $where: mảng điều kiện
     * $field: cột muốn lấy dữ liệu
     * */
    public function get_info_rule($where = array(), $field = '')
    {
        if ($field) {
            $this->db->select($field);
        }
        $this->db->where($where);
        $query = $this->db->get($this->table);
        if ($query->num_rows()) {
            return $query->row();
        }
        return FALSE;
    }

    /*
     * lấy tổng số
     * */
    public function get_total($input = array())
    {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    /*
     * lấy tổng số
     * $field: cột muốn tính tổng
     * */
    public function get_sum($field, $where = array())
    {
        //tính tổng tại 1 field
        $this->db->select_sum($field);

        $this->db->where($where);
        $this->db->from($this->table);

        $row = $this->db->get() - row();
        foreach ($row as $f => $v) {
            $sum = $v;
        }
        return $sum;
    }

    /*
     * lấy 1 dòng
     * */
    public function get_row($input = array())
    {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    /*
     * lấy danh sách
     * $input: mảng các dữ liệu đầu vào muốn lấy
     * */
    public function get_list($input = array())
    {
        //xử lý các dữ liệu đầu vào
        $this->get_list_set_input($input);

        //thực hiện truy vấn dữ liệu
        $query = $this->db->get($this->table);
        //echo $this->db->last_query();
        return $query->result();
    }

    protected function get_list_set_input($input = array())
    {
        //thêm điều kiện cho câu truy vấn truyền qua biến $input['where']
        //(ví dụ: $input['where'] = array( 'email' => 'abc@gmail.com')
        if (isset($input['where']) && $input['where']) {
            $this->db->where($input['where']);
        }

        //tìm dữ liệu theo like
        //$input['like'] => array( 'name' => 'abc')
        if (isset($input['like']) && $input['like']) {
            $this->db->like($input['like'][0], $input['like'][1]);
        }

        //sắp xếp dữ liệu theo order
        //$input['order'] => array( 'id', 'ASC')
        if (isset($input['order'][0]) && isset($input['order'][1])) {
            $this->db->order_by($input['order'][0], $input['order'][1]);
        } else {
            //mặc định sẽ sắp xếp theo id tăng dần
            $order = ($this->order == '') ? array($this->table . '.' . $this->key, 'asc') : $this->order;
            $this->db->order_by($order[0], $order[1]);
        }

        //lấy dữ liệu theo limit
        //$input['limit'] = array('10', '0')
        if (isset($input['limit'][0]) && isset($input['limit'][1])) {
            $this->db->limit($input['limit'][0], $input['limit'][1]);
        }
    }

    public function check_exists($where = array())
    {
        $this->db->where($where);
        //thực hiện câu truy vấn lấy dữ liệu
        //Produces: SELECT * FROM table
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


}

?>