<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller { 

    public function view($page = 'home')
    {
        $this->load->library('myuserauth');
        $this->myuserauth->checkAuth(); 
    }
}