<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function index()
    {
        $params = $this->input->get();

        //echo '<pre>'; print_r($params); echo '</pre>'; exit();
        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();
        $product_type_manufacturers = $this->Product->get_product_type_manufacturer(1);
        $products = $this->Product->get_all($params);
        //echo '<pre>'; print_r($products); echo '</pre>'; exit();

        $data = array(
            'product_type' => $product_type,
            'manufacturers' => $manufacturers,
            'product_type_manufacturers' => $product_type_manufacturers,
            'products' => $products
        );

        $this->load->view('header', $data);
        $this->load->view('products', $data);
        $this->load->view('footer', $data);
    }

    public function detail($id = '')
    {
        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();
        $product_type_manufacturers = $this->Product->get_product_type_manufacturer(1);
        $data = array(
            'title' => 'Product ' . $id,
            'product_type' => $product_type,
            'manufacturers' => $manufacturers,
            'product_type_manufacturers' => $product_type_manufacturers
        );
        $this->load->view('header', $data);
        $this->load->view('product_detail', $data);
        $this->load->view('footer', $data);
    }

    public function checkout()
    {
        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();
        $product_type_manufacturers = $this->Product->get_product_type_manufacturer(1);
        $data = array(
            'product_type' => $product_type,
            'manufacturers' => $manufacturers,
            'product_type_manufacturers' => $product_type_manufacturers
        );
        $this->load->view('header', $data);
        $this->load->view('checkout', $data);
        $this->load->view('footer', $data);
    }
}