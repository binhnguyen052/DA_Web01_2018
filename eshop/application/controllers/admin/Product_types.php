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
        $message = $this->session->flashdata('message');
        //lấy dữ liệu
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $insert_data = array(
                'name' => $this->input->post('m_product_type_name')
            );
            $check_insert = $this->Product_type->_insert($insert_data);
        }

        $data = array(
            'product_type' => $product_type,
            'check_insert' => $check_insert,
            'message' => $message
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product_type/product_type', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit()
    {
        $id = $this->uri->rsegment('3');
        echo $id;
    }

    public function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);

        //kiểm tra có tồn tại id
        $info = $this->Product_type->get_info($id);
        if (!$info)
        {
            $this->session->set_flashdata('message','Không tồn tại loại sản phẩm cần xóa!');
            redirect('admin/product_types/m_product_type');
        }
        //thực hiện xóa
        $this->Product_type->delete($id);
        $this->session->set_flashdata('message','Xóa thành công!');
        redirect('admin/product_types/m_product_type');
    }
}

?>