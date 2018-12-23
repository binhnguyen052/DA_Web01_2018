<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();

        $controller = $this->uri->segment(1);
        switch ($controller)
        {
            case 'admin':
                {
                    //xử lý trang admin ở đây
                    //echo 'trang admin';
                    break;
                }

            default:
                {

                }
        }

    }

}


?>