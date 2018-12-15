<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index()
    {
        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();

        $data = array(
            'product_type' => $product_type,
            'manufacturers' => $manufacturers
        );

        $this->load->view('header', $data);
        $this->load->view('products', $data);
        $this->load->view('footer', $data);
    }

    public function detail($id)
    {
            $data = array(
            'title' => 'Product '.$id,
            );
            $this->load->view('product_detail', $data);

    }

    public function checkout()
    {
        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();

        $data = array(
            'product_type' => $product_type,
            'manufacturers' => $manufacturers
        );
        $this->load->view('header', $data);
        $this->load->view('checkout', $data);
        $this->load->view('footer', $data);
    }
}