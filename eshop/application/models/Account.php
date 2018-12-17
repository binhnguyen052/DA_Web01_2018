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
}