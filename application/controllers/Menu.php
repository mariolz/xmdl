<?php
/**
 * menu
 * @author mario
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller { 
    /**
     * 检测menu权限
     */
    function pv() {
        $this->load->add_package_path(APPPATH.'third_party/menu',FALSE);
        $this->load->library('my_menu');
        $this->my_menu->pv();
    }
}