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
        $input = array();
        $products = $this->Product->get_list($input);
        $total = $this->Product->get_total();

        $data = array(
            'products' => $products,
            'total' => $total
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/product/products', $data);
        $this->load->view('admin/footer', $data);
    }

    /*
     * thêm mới 1 sản phẩm
     * */
    public function add()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');

        $check_insert = FALSE;
        //lấy du liệu
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $insert_data = array(
                'name' => $this->input->post('admin_product_name'),
                'image_url' => null,
                'price' => $this->input->post('admin_product_price'),
                'origin' => $this->input->post('admin_product_origin'),
                'date_added' => null,
                'inventory' => $this->input->post('admin_product_inventory'),
                'solds' => null,
                'views' => null,
                'descreibe' => null,
                'deleted' => 0,
                'product_type_id' => null,
                'manufacturer_id' => null,
                'sale' => null,
            );
            $check_insert = $this->Product->_insert($insert_data);
        }


        $data = array(
            'check_insert' => $check_insert
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/product/add', $data);
        $this->load->view('admin/footer', $data);
    }


}