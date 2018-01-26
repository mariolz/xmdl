<?php
/**
 * 角色
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_roles extends CI_Model  {  
    private $_table   = 'roles';
    /**
     * 
     * @param string $columns 表字段
     * @param int $m_id 用户id
     * @param string $is_equal 条件的判断 >=<!=
     * @return object 返回数据对象角色
     */
    public function getRolesByMemberId($columns,$m_id,$is_equal = '') 
    {
 
        $result = $this->db->select($columns)
                   ->where('id'.$is_equal, $m_id)
                   //->limit(10)
                   ->get($this->_table);        
        return $result;
    }
}