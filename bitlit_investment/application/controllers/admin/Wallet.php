<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $data['view'] = 'admin/wallet/wallet';
        $this->load->view('admin/admin_master', $data);
    }
}
