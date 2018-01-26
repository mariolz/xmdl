<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller { 

    public function index($page = 'home')
    {
        //echo '3333';die;
        //$this->load->add_package_path(APPPATH.'third_party', FALSE);
        
        $this->load->view('admin/index');
    }
    
}