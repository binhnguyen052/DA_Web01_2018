<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturers extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Manufacturer');
    }

    public $model_Product_type = 'Manufacturer';

    public function m_manufacturer()
    {

        $input = array();
        $manufacturers = $this->Manufacturer->get_list($input);
        $check_insert = null;

        //lấy dữ liệu
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $insert_data = array(
                'name' => $this->input->post('m_manufacturer_name')
            );
            $check_insert = $this->Manufacturer->_insert($insert_data);
        }

        $data = array(
            'manufacturers' => $manufacturers,
            'check_insert' => $check_insert
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/manufacturer/manufacturer', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit()
    {
        $id = $this->uri->rsegment('3');
        echo $id;
    }
}

?>