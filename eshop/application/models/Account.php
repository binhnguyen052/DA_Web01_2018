<?php
class Account extends CI_Model
{
    public function login($username, $password)
    {
        $password_md5 = md5($password);

        $query = $this->db->query("SELECT * FROM account WHERE username = '{$username}' AND password = '{$password_md5}'");
        $row = $query->row();

        if (isset($row)) {
            $newdata = array(
                'username' => $username,
                'password' => $password_md5,
                'logged_in' => TRUE,
                'account_type' => $row->account_type
            );

            $this->session->set_userdata($newdata);

            return true;
        }

        return false;
    }

    public function register($data)
    {
        // kiem tra username co ton tai chua?
//        $this->load->model('Account');
//        $check_register = $this->Account->username($data['username']);

        $query = $this->db->query("SELECT * FROM account WHERE username = '{$data['username']}'");
        $row = $query->row();
        // neu chua ton tai thi luu
        if(isset($row))
        {
            $data['register_message'] = 'Tai khoan da duoc su dung !';
        }
       else
       {
           $this->username = $data['username'];
           $this->password = md5($data['password']);
           $this->display_name= $data['display_name'];
           $this->address= $data['address'];
           $this->tel= $data['tel'];
           $this->email= $data['email'];
           $this->db->insert('account', $this);
       }
    }


}