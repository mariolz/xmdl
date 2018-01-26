<?php
/**
 * 用户权限检测
 * @author mario
 *
 */
class Hooks_MyUserAuth {
    private $CI = null;
    function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->add_package_path(APPPATH.'third_party/auth',True);
        $this->CI->load->library('my_userauth');
        
        //$this->CI->load->view('test');
    }
    public function checkAuth() 
    {
        $this->CI->my_userauth->checkAuth();
       
    } 
}