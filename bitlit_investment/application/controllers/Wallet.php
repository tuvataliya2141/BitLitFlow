<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        //echo "<pre>"; print_r($_SESSION); die;
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->admin_payment_model->getAllWalletData($user_id);
       // echo "<pre>"; print_r($data); die;
        $data['view'] = 'wallet/wallet';
        $this->load->view('admin_master', $data);
    }
}
