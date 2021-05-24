<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $data['view'] = 'admin/reports/reports_check';
        $this->load->view('admin/admin_master', $data);
    }

    public function reports_detail() {
        //echo "<prE>"; print_r($data); die;
       // echo "<pre>"; print_r($_POST); die;
        $data['view'] = 'admin/reports/reports_check';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $user_id = $this->session->userdata('user_id');
            $password = md5($_POST['password']);
            $data = $this->user_model->getRegistrationCheck($user_id, $password); 
            //echo "<pre>"; print_r($data); die;   
            if ($data) {
                redirect(base_url('admin/reports/my_reports_detail'));
            } else {
                $this->session->set_flashdata('error', "Invalid Transaction Password.");
                redirect(base_url('admin/reports'));
            }
        }
        $this->load->view('admin/admin_master', $data);
    }

    public function my_reports_detail() {
        $user_id = $this->session->userdata('user_id');
        $data['report_data'] = $this->user_model->getPaymnetDetail($user_id);
        //echo "<pre>"; print_r($data); die;
        $data['view'] = 'admin/reports/reports';
        $this->load->view('admin/admin_master', $data);
    }
}
