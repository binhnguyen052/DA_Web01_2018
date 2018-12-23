<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_types extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Product_type');
    }

    public $model_Product_type = 'Product_type';

    public function m_product_type()
    {

        $product_type = $this->Product_type->get_product_type();
        $check_insert = FALSE;

        //lấy du liệu
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $insert_data = array(
                'name' => $this->input->post('m_product_type_name'),
            );
            $check_insert = $this->Product_type->_insert($insert_data);
        }

        $data = array(
            'product_type' => $product_type,
            'check_insert' => $check_insert
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product_type', $data);
        $this->load->view('admin/footer', $data);




    }


}

?>