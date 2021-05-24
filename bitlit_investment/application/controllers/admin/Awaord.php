<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Awaord extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->gdb->checkadminlogin();
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
	}
	
	
	public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['awaord_data'] = $this->user_model->getAllAwaord();
	
		
        $data['view'] = 'admin/user/awaord_list';
        $this->load->view('admin/admin_master', $data);
		
    }
	
}
?>