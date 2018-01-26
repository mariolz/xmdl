<?php
/**
 * 检测用户权限表
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_message  {  
    private $_CI = null;
    function __construct() {
        //var_dump(555);die;
        $this->_CI = &get_instance();
        
    }
    /**
     * 发私信给用户
     */
    public function index() 
    {
        //var_dump('message index');die;
        /* $this->_CI->load->model('my_message');
        $this->my_message->sendMsg(); */
        $this->_CI->load->view('message/test');
        
    } 
}