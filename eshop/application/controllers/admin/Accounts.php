<?php

class Accounts extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Account');
    }

    public function m_account()
    {
        $input = array();
        $accounts = $this->Account->get_list($input);

        $data = array(
            'accounts' => $accounts
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/account/account', $data);
        $this->load->view('admin/footer', $data);
    }

    public function create()
    {
        $data = array(
            'username' => 'admin11',
            'password' => md5('1256'),
            'display_name' => 'baron',
            'address' => '',
            'tel' => '',
            'email' => '',
            'deleted' => 0,
            'avartar_url' => '',
            'account_type' => 0
        );

        if ($this->Account->create($data)) {
            echo 'thêm thành công';
        } else {
            echo 'thêm không thành công';
        }
    }

    public function update()
    {
        $id = 11;
        $data = array(
            'username' => 'admin11',
            'password' => md5('1256'),
            'display_name' => 'baron update 1',
            'address' => '',
            'tel' => '',
            'email' => '',
            'deleted' => 0,
            'avartar_url' => '',
            'account_type' => 0
        );

        if ($this->Account->update($id, $data)) {
            echo 'cập nhật thành công';
        } else {
            echo 'cập nhật không thành công';
        }
    }

    public function delete()
    {
        $id = 11;
        if ($this->Account->delete($id)) {
            echo 'xóa thành công';
        } else {
            echo 'xóa không thành công';
        }
    }


}

?>