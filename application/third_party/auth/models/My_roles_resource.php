<?php
/**
 * 角色分配资源
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_roles_resource extends CI_Model  {  
    private $_table   = 'roles_resource';
    /**
     * 
     * @param string $columns 表字段
     * @param array $m_id 角色id
     * @return object 返回数据对象角色
     */
    public function getResourceByRoleId($columns,$m_id,$resource_id,$act=0) 
    {
 
        $result = $this->db->select($columns)
                  ->where('resource_id',$resource_id)
                  ->where('ac',$act)
                  ->where_in('roles_id', $m_id)
                   //->limit(10)
                  ->get($this->_table);        
        return $result;
    }
}