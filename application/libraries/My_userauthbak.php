<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_userauthbak  {  
    private $_CI = null;
    function __construct() {
        $this->_CI = &get_instance();
    }
    public function checkAuth() 
    {
        /* $res = $this->_CI->db->get('members');
        var_dump($res->result_array());die; */
        /* $this->_CI->load->model('my_auth');
        var_dump($this->_CI->my_auth->checkAuth()); */
        echo 'hai';
    } 
}