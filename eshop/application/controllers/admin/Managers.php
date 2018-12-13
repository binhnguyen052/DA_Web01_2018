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

    public  function register()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/register');
        $this->load->view('admin/footer');
    }

    public function table()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/tables');
        $this->load->view('admin/footer');
    }

    public function account()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/account');
        $this->load->view('admin/footer');
    }


}