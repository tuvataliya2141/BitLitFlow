<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        //echo "<pre>"; print_r($_SESSION); die;
        $user_id = $this->session->userdata('user_id');
        $data['profile_data'] = $this->user_model->getAdminProfile($user_id);
        $this->load->view('admin/profile', $data);
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

}
