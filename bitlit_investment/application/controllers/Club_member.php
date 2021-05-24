<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Club_member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        //$user_id = $this->session->userdata('user_id');
        //$data['club_data'] = $this->user_model->getClubDetail($user_id);
        //echo "<pre>"; print_r($data['club_data']); die;
        $data['view'] = 'club_member/view';
        $this->load->view('admin_master', $data);
    }
    
    public function royal_income() {
        //$user_id = $this->session->userdata('user_id');
        $data['royal_data'] = $this->user_model->getAllRoyaltyIncome();
        //echo "<pre>"; print_r($data['club_data']); die;
        $data['view'] = 'royal_income/view';
        $this->load->view('admin_master', $data);
    }
    
    public function capping() {
        //$user_id = $this->session->userdata('user_id');
        $data['royal_data'] = $this->user_model->getAllCapping();
        //echo "<pre>"; print_r($data['club_data']); die;
        $data['view'] = 'capping/view';
        $this->load->view('admin_master', $data);
    }
	
	public function award() {
        //$user_id = $this->session->userdata('user_id');
        $data['award_data'] = $this->user_model->getAllAwaord();
        //echo "<pre>"; print_r($data['club_data']); die;
        $data['view'] = 'award/view';
        $this->load->view('admin_master', $data);
    }
}
