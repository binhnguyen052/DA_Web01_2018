<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('Product');
        $last_products = $this->Product->get_last_entries();
        $most_views = $this->Product->get_most_views();
        $most_sold = $this->Product->get_most_sold();
        $manufacturers = $this->Product->get_manufacturer();
        $product_type = $this->Product->get_product_type();

        $product_type_manufacturers = $this->Product->get_product_type_manufacturer(1);

        $data = array(
            'current_page' => 'home',
            'last_products' => $last_products,
            'most_views' => $most_views,
            'most_sold' => $most_sold,
            'product_type' => $product_type,
            'manufacturers' => $manufacturers,
            'product_type_manufacturers' => $product_type_manufacturers
        );


        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }
}
