<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payout extends CI_Controller {

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
        $data['am_data'] = $this->admin_payment_model->getUesrAmount($user_id);
        //echo "<pre>"; print_r($data); die;
        $data['view'] = 'payout/my_payout';
        $this->load->view('admin_master', $data);
    }

    public function royal_payout() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->admin_payment_model->getmyRoyaltyAmount($user_id);
        // echo "<pre>"; print_r($data); die;
        $data['view'] = 'payout/my_royalty';
        $this->load->view('admin_master', $data);
    }

    public function my_reward() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->admin_payment_model->getmyAwaordAmount($user_id);
        // echo "<pre>"; print_r($data); die;
        $data['view'] = 'payout/my_reward';
        $this->load->view('admin_master', $data);
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

    public function get_group() {
        $user_id = $this->session->userdata('user_id');
        if ($user_id) {
            $data['team_data'] = $this->user_model->getRegistrationByUserid($user_id);
            echo '<pre>'; print_r($data['team_data']); die;
            echo json_encode(array('view' => $this->load->view('user/ajax_state', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }

}
