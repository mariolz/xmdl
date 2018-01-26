<?php
/**
 * 私信类
 * @author mario
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller { 
    function index() {
        $this->load->add_package_path(APPPATH.'third_party/message',FALSE);
        $this->load->library('my_message');
        $this->my_message->index();
    }
}