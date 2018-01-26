<?php
/**
 * 菜单控制
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_roles_resource extends CI_Model  {  

    private $_table = 'roles_resource';
    /**
     * 获取菜单
     * @param string $columns 字段
     * @param array $ids 角色id
     */
    public function getPvByRole($columns='*',$ids) 
    {
        //var_dump($role_id,$resource_id);die;
        try{
            $result = $this->db->select($columns)
                    ->where('ac',1)
                    ->where_in('roles_id', $ids)
                    //->limit(10)
                    ->get($this->_table);
            return $result;
        }catch (Exception $e) {
            return false;
        }

    }
    
    
}