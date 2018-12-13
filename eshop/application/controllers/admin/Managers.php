<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managers extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function blankt()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/blankt');
        $this->load->view('admin/footer');
    }
}