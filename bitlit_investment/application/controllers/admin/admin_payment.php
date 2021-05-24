<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('Admin_payment_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $data['ambassadors_data'] = $this->Admin_payment_model->getAmbassadors();
        //echo "<prE>"; print_r($data); die;
        $data['view'] = 'admin/admin_payment/admin_ambassadors';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function ambassadors_pay($id) {
        //echo "<pre>"; print_r($id); die;
        $pay_data = array(
            'user_id' => $id,
            'amount' => '3,25,500',
            'date' => date("Y-m-d"),
            'status' => 1
        );
        echo "<pre>"; print_r($pay_data); die;
        $result = $this->Admin_payment_model->AddWallet($pay_data);

        if ($result) {
            $this->session->set_flashdata('success', "Payment Successfully.");
            redirect(base_url('admin/Admin_payment'));
        } else {
            $this->session->set_flashdata('error', "Error While Inserting Record.");
            redirect(base_url('admin/Admin_payment'));
        }
    }
}
