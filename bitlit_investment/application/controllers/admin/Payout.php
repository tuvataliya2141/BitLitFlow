<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payout extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        //echo "<pre>"; print_r($_SESSION); die;
        // $user_id = $this->session->userdata('user_id');
        //$data['profile_data'] = $this->user_model->getAdminProfile($user_id);
        $data['view'] = 'admin/payout/my_payout';
        $this->load->view('admin/admin_master', $data);
    }

    public function my_payout_statement() {
        //echo "<pre>"; print_r($_SESSION); die;
        $user_id = $this->session->userdata('user_id');
        $data['direct_data'] = $this->user_model->getmyDirectUpliner($user_id);
        //$data['refferal_data'] = $this->user_model->getmyDirectRefferal($user_id);
       // echo "<pre>"; print_r($data); die;
        $data['view'] = 'admin/payout/my_payout_statement';
        $this->load->view('admin/admin_master', $data);
    }

    public function royal_payout() {
        $user_id = $this->session->userdata('user_id');
        $data['direct_data'] = $this->user_model->getAllRoyaltyData();
        // echo "<pre>"; print_r($data); die;
        $data['view'] = 'admin/payout/royal_payout';
        $this->load->view('admin/admin_master', $data);
    }

    public function my_reward() {
        $user_id = $this->session->userdata('user_id');
        $data['direct_data'] = $this->user_model->getmyDirectUpliner($user_id);
        //echo "<pre>"; print_r($data); die;
        $data['view'] = 'admin/payout/my_reward';
        $this->load->view('admin/admin_master', $data);
    } 

    public function my_reward_data() {
        $user_id = $this->session->userdata('user_id');
        $data['direct_data'] = $this->user_model->getAllReward_data($user_id);
        //echo "<pre>"; print_r($data); die;
        $data['view'] = 'admin/payout/my_reward';
        $this->load->view('admin/admin_master', $data);
    }

    public function edit($user_id) {
        if ($this->input->post('submit')) {
            $data = array(
                'username' => $this->input->post('username'),
                'email_id' => $this->input->post('email_id')
            );

            $this->user_model->updateAdminData($user_id, $data);
            $this->session->set_flashdata('success', "Profile Edit Successfully.");
            redirect(base_url('admin/profile'));
        }

        $data['profile_data'] = $this->user_model->getAdminData($user_id);
        $this->load->view('admin/profile', $data);
    }

    public function get_group() {
        $user_id = $this->session->userdata('user_id');
        if ($user_id) {
            $data['team_data'] = $this->user_model->getRegistrationByUserid($user_id);
            echo '<pre>'; print_r($data['team_data']); die;
            echo json_encode(array('view' => $this->load->view('admin/user/ajax_state', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }

}
