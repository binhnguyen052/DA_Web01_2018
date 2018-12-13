<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function register()
    {
        $this->load->view('header');
        $this->load->view('user_register');
        $this->load->view('footer');
    }

    public function login()
    {
        $this->load->view('user_login');
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