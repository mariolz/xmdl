<?php
/**
 * 检测用户权限表
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_auth extends CI_Model  {  

    private $_my_roles_resource = 'my_roles_resource';
    private $_my_members = 'my_members';
    /**
     * 检验用户权限
     * @param array $role_id 角色id
     * @param array $resource_id 资源id
     * @return object 返回数据对象
     */
    public function checkAuth($role_id,$resource_id) 
    {
        //var_dump($role_id,$resource_id);die;
        $columns = '*';
        $act = 1;
        $this->load->model($this->_my_roles_resource); 
        $result = $this->my_roles_resource->getResourceByRoleId($columns,$role_id,$resource_id,$act)->result_array();
        var_dump($result);die;
        return $result;
    }
    
    
}