<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index()
    {
        $this->load->model('Product');
        $last_products = $this->Product->get_last_entries();
        $most_views = $this->Product->get_most_views();
        $most_sold = $this->Product->get_most_sold();
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();

        $data = array(
            'current_page' => 'home',
            'last_products' => $last_products,
            'most_views' => $most_views,
            'most_sold' => $most_sold,
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
        $this->load->view('header');
        $this->load->view('checkout');
        $this->load->view('footer');
    }
}