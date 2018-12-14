<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index()
    {
        $this->load->view('header');
        $this->load->view('products');
        $this->load->view('footer');
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