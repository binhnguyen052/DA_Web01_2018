<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function register()
    {
        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();

        $data = array(
            'product_type' => $product_type,
            'manufacturers' => $manufacturers
        );

        $this->load->view('header', $data);
        $this->load->view('user_register', $data);
        $this->load->view('footer', $data);
    }

    public function login()
    {
        $data = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Account');

            $check_login = $this->Account->login($username,$password);

            if ($check_login) {
                // chuyen qua trang chu
                $account_type = $this->session->userdata('account_type');
                if($account_type==1){
                    redirect('products');
                }
                if($account_type==0)
                {
                    redirect('admin/managers');
                }
                //die($account_type);
            } else {
                $data['login_message'] = 'Thong tin dang nhap sai';
            }
        }

        $this->load->view('user_login', $data);
    }

    public function  profile()
    {
        $this->load->view('header');
        $this->load->view('user_profile');
        $this->load->view('footer');
    }

    public function checkout()
    {
        $this->load->view('header');
        $this->load->view('user_checkout');
        $this->load->view('footer');
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Product '.$id,
        );
        $this->load->view('product_detail', $data);
    }

}