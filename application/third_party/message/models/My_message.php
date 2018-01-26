<?php
/**
 * 用户私信
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class My_message extends CI_Model  {  

    private $_table = 'messages';
    /**
     * 发送私信界面
     * @param string $from 发送者
     * @param string $to 接收者
     */
    public function sendMsg($from,$to,$data) 
    {
        //var_dump($role_id,$resource_id);die;
        try{
            $this->db->insert($this->_table, $data);
            return $this->db->insert_id();
        }catch (Exception $e) {
            return false;
        }

    }
    
    
}