<?php
/**
 * 检测用户权限表
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_userauth  {  
    private $_CI = null;
    function __construct() {
        //var_dump(555);die;
        $this->_CI = &get_instance();
        
    }
    public function checkAuth() 
    {
        //var_dump(222);die;
        //$role_ids = array(1,2,3);
        //$this->_CI->session->set_userdata('role_ids',array(1,2,3));
        $role_ids = empty($this->_CI->session->userdata('role_ids'))?array(4):$this->_CI->session->userdata('role_ids');
        //var_dump($role_ids);die;
        $url      = $this->_CI->router->fetch_class().DIRECTORY_SEPARATOR.$this->_CI->router->fetch_method();
        
        $this->_CI->load->model('my_resource');
       
        $resource = $this->_CI->my_resource->getResourceByPath('id',$url)->row_array();
        //var_dump($resource);die; 
        if($url == 'menu/pv') {
            return true;
        }
        if(!empty($resource['id']) && !empty($role_ids)) {
            $resource_id = $resource['id'];
            $this->_CI->load->model('my_auth');
            $result = $this->_CI->my_auth->checkAuth($role_ids,$resource_id);
            //var_dump($role_ids,$resource_id);die;
            
            if(empty($result)) {
                echo 'permission denyed!!!';die;
            }
            
        } elseif (empty($resource['id'])) {
            echo '404';die;
        } elseif (empty($role_ids)) {
            echo 'role is not exists';die;
        }
        
    } 
}