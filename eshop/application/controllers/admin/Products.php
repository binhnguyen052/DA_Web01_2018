<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index()
    {
        //$this->load->view('admin/header');
        $this->load->view('admin/products');
        //$this->load->view('admin/footer');
    }
}