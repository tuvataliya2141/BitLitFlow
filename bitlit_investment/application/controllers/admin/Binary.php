<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Binary extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->gdb->checkadminlogin();
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
	}
	
	
	public function index() {
        $user_id = $this->session->userdata('admin_id');
        $date = date('Y-m-d');
        $data['direct_data'] = $this->user_model->getAllBinaryData();
        	
        $data['view'] = 'admin/payout/binary';
        $this->load->view('admin/admin_master', $data);
		
    }
	
}
?>