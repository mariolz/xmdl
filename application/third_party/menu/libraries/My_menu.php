<?php
/**
 * 检测用户权限表
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_menu  {  
    private $_CI = null;
    function __construct() {
        //var_dump(555);die;
        $this->_CI = &get_instance();
        
    }
    /**
     * 发私信给用户
     */
    public function pv() 
    {
        $role_ids = empty($this->_CI->session->userdata('role_ids'))?array(4):$this->_CI->session->userdata('role_ids');
        $this->_CI->load->model('my_roles_resource');
       
        $resource = $this->_CI->my_roles_resource->getPvByRole('resource_id',$role_ids)->result_array();
        echo json_encode($resource);
    } 
}