<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_redis  {  
    private $_CI    = null;
    private $_redis = null;
    function __construct() {
        $this->_CI = &get_instance();
        $this->_CI->config->load('redis');
        $host_info = ($this->_CI->config->item('default'));
        $this->_redis = new Redis();
        $this->_redis->connect($host_info['hostname'], $host_info['port']);
    }
    public function get($key) 
    {
        return $this->_redis->get($key);
    } 
}