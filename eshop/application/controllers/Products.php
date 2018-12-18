<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function index()
    {
        $params = $this->input->get();

        //echo '<pre>'; print_r($params); echo '</pre>'; exit();
        $start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();
        $product_type_manufacturers = $this->Product->get_product_type_manufacturer(1);
        $products = $this->Product->get_all($params, $start, 9);
        $total = $this->Product->count_all($params);


        //echo '<pre>'; print_r($products); echo '</pre>'; exit();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'products/index';
        $config['total_rows'] = $total;
        $config['per_page'] = 9;
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        //echo $this->pagination->create_links();
        //die($this->pagination->create_links());

        $data = array(
            'product_type' => $product_type,
            'manufacturers' => $manufacturers,
            'product_type_manufacturers' => $product_type_manufacturers,
            'products' => $products,
            'pagination_links' => $this->pagination->create_links()
        );

        $this->load->view('header', $data);
        $this->load->view('products', $data);
        $this->load->view('footer', $data);
    }

    public function detail($id = '')
    {
        $params = $this->input->get();

        $this->load->model('Product');
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();
        $product_type_manufacturers = $this->Product->get_product_type_manufacturer(1);
        $one_product = $this->Product->get_one($params);
        $data = array(
            'title' => 'Product ' . $id,
            'product_type' => $product_type,
            'manufacturers' => $manufacturers,
            'one_product' => $one_product,
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