<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_details extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Order_detail');
    }

    public $model_Product_type = 'Order';

    public function m_order_detail()
    {

        $input = array();
        $order_details = $this->Order_detail->get_list($input);
        $check_insert = null;

        //lấy dữ liệu
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $insert_data = array(
                'name' => $this->input->post('m_manufacturer_name')
            );
            $check_insert = $this->Order->_insert($insert_data);
        }

        $data = array(
            'order_details' => $order_details,
            'check_insert' => $check_insert
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/Order_detail/Order_detail', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit()
    {
        $id = $this->uri->rsegment('3');
        echo $id;
    }
}

?>