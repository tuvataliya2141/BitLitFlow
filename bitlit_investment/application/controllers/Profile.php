<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $data['profile_data'] = $this->user_model->getAdminProfile($user_id);
        $this->load->view('profile', $data);
    }

    public function edit($admin_id) {
        if ($this->input->post('submit')) {
            $data = array(
                'username' => $this->input->post('username'),
                'email_id' => $this->input->post('email_id')
            );

            $this->user_model->updateAdminData($admin_id, $data);
            $this->session->set_flashdata('success', "Profile Edit Successfully.");
            redirect(base_url('profile'));
        }

        $data['profile_data'] = $this->user_model->getAdminData($admin_id);
        $this->load->view('profile', $data);
    }
    
     public function userprofile($id) {
        
        $data['user_data'] = $this->user_model->getAllUser_data($id);
        $data['kyc_data'] = $this->user_model->getAllUserKyc_data($id);
        $data['Shipping_data'] = $this->user_model->getAllUserShipping_data($id);
        $data['bank_data'] = $this->user_model->getAllUserBank_data($id);
        //echo "<pre>"; print_r($data); die;
        $data['view'] = 'user/userprofile';
        
        $this->load->view('admin_master',$data);
    }
    
     public function my_wallet($id) {
        $data['binary_data'] = $this->admin_payment_model->getUesrAmountCount($id);
        $data['royalty_data'] = $this->admin_payment_model->getmyRoyaltyAmountCount($id);
        $data['award_data'] = $this->admin_payment_model->getmyAwaordAmountCount($id);
        //echo "<pre>"; print_r($data['binary_data']); 
       //echo "<pre>"; print_r($data['royalty_data']); 
       // echo "<pre>"; print_r($data['award_data']); die;
        $data['view'] = 'user/my_wallet';
        $this->load->view('admin_master',$data);
    }
    
     public function add_wallet() {
        
        $user_id = $this->session->userdata('user_id');
        $user_data = array(
                'user_id' => $user_id,
                'binary_amt' => $this->input->post('bin'),
                'royalty_amt' => $this->input->post('roy'),
                'reward_amt' => $this->input->post('awa'),
                'total_amt' => $this->input->post('tot'),
                'tds' => $this->input->post('tds'),
                'admin' => $this->input->post('admin'),
                'e-wallet' => $this->input->post('ewlt'),
                'net_amt' => $this->input->post('net')
            );
        $reg = $this->admin_payment_model->addPaymentRequest($user_data);
    }

}
