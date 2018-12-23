<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Product');
    }

    public function m_product()
    {
        $products = $this->Product->get_product();

        $data = array(
            'products' => $products
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/products', $data);
        $this->load->view('admin/footer', $data);
    }


}