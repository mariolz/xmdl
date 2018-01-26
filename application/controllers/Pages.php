<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller { 

    function index() {
        
    }
    public function view($page = 'home')
    {
        phpinfo();die;
        //echo '3333';die;
        //$this->load->add_package_path(APPPATH.'third_party', FALSE);
        $this->load->library('my_redis');
       var_dump($this->my_redis->get("ci_session:".$this->session->session_id));
      die;
        $this->load->view('index');
    }
    function test() {
        $this->lang->load('package', 'english');
        echo $this->lang->line('title');
        
    }
    function menu() {
        //$this->load->helper('redis');
        //$this->load->library('session');
        
        $this->session->set_userdata('test',22223);
        var_dump($this->session->userdata('test'));
    }
    function getIp() {
        $this->load->helper('lbs');
        //print_r(getIp());die;
        var_dump(getInfoByIp('114.91.204.159'));
    }
}