<?php
/**
 *用户
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_members extends CI_Model  {  
    private $_table   = 'members';
    /**
     * 
     * @param string $columns 表字段
     * @param int $m_id 用户id
     * @param string $is_equal 条件的判断 >=<!=
     * @return object 返回数据对象
     */
    public function getMembersById($columns,$m_id,$is_equal = '') 
    {
 
        $result = $this->db->select($columns)
                   ->where('id'.$is_equal, $m_id)
                   //->limit(10)
                   ->get($this->_table);        
        return $result;
    }
    
}