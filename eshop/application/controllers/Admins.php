<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
    {

    }

   public function login()
   {
       $this->load->view('header');
        $this->load->view('admin_login');
        $this->load->view('footer');
   }
}