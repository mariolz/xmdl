<?php
/**
 *资源
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_resource extends CI_Model  {  
    private $_table   = 'resource';
    /**
     * 
     * @param string $columns 表字段
     * @param int $m_id 资源id
     * @param string $is_equal 条件的判断 >=<!=
     * @return object 返回数据对象
     */
    public function getResourceById($columns,$m_id,$is_equal = '') 
    {
 
        $result = $this->db->select($columns)
                   ->where('id'.$is_equal, $m_id)
                   //->limit(10)
                   ->get($this->_table);        
        return $result;
    }
    /**
     *
     * @param string $columns 表字段
     * @param int $path 资源路径
     * @param string $is_equal 条件的判断 >=<!=
     * @return object 返回数据对象
     */
    public function getResourceByPath($columns,$path,$is_equal = '')
    {
    
        $result = $this->db->select($columns)
        ->where('path'.$is_equal, $path)
        //->limit(10)
        ->get($this->_table);
        return $result;
    }
}