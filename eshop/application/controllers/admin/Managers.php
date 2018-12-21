<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managers extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }


    public function m_account()
    {
        $this->load->model('admin/Account');
        $accounts = $this->Account->get_account();

        $data = array(
          'accounts' => $accounts
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/account', $data);
        $this->load->view('admin/footer', $data);
    }

    public function m_product()
    {
        $this->load->model('admin/Product');
        $products = $this->Product->get_product();

        $data = array(
            'products' => $products
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/products', $data);
        $this->load->view('admin/footer', $data);
    }

    public function m_product_type()
    {

        $this->load->model('admin/Product');
        $products = $this->Product->get_product();
        $one_product_type = $this->Product->get_one_product_type();

        $data = array(
            'products' => $products,
            'one_product_type' => $one_product_type
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product_type', $data);
        $this->load->view('admin/footer', $data);
    }

    public function m_order()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/order');
        $this->load->view('admin/footer');
    }

    public function m_order_detail()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/order_detail');
        $this->load->view('admin/footer');
    }

    public function m_manufacturer()
    {
        $this->load->model('admin/Product');
        $manufacturers = $this->Product->get_manufacturer();
        $one_manufacturer = $this->Product->get_one_manufacturer();

        $data = array(
            'manufacturers' => $manufacturers,
            'one_manufacturer' => $one_manufacturer
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/manufacturer', $data);
        $this->load->view('admin/footer', $data);
    }

    public  function login()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/login');
        $this->load->view('admin/footer');
    }

    public  function register()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/register');
        $this->load->view('admin/footer');
    }

    public  function forgot_password()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/forgot_password');
        $this->load->view('admin/footer');
    }

    public function p404()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/404');
        $this->load->view('admin/footer');
    }

    public function blank()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/blank');
        $this->load->view('admin/footer');
    }


    public function table()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/tables');
        $this->load->view('admin/footer');
    }

    public function blankt()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/blankt');
        $this->load->view('admin/footer');
    }
}