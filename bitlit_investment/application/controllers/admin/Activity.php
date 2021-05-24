<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $data['view'] = 'admin/activity/request';
        $this->load->view('admin/admin_master', $data);
    }

    public function request_detail() {
        //echo "<prE>"; print_r($data); die;
       // echo "<pre>"; print_r($_POST); die;
        $data['view'] = 'admin/activity/request';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $user_id = $this->session->userdata('admin_id');
            $password = md5($_POST['password']);
            $data = $this->user_model->getRegistrationCheck($user_id, $password); 
            //echo "<pre>"; print_r($data); die;   
            if ($data) {
                redirect(base_url('admin/activity/id_request_detail'));
            } else {
                $this->session->set_flashdata('error', "Invalid Transaction Password.");
                redirect(base_url('admin/activity'));
            }
        }
        $this->load->view('admin/admin_master', $data);
    }

    public function id_request_detail() {
        $user_id = $this->session->userdata('admin_id');
        $data['bank_data'] = $this->user_model->getBankDetailData($user_id);
        //echo "<prE>"; print_r($data); die;
        $data['view'] = 'admin/activity/request_detail';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('request_amount', 'Request Amount', 'required');
        $this->form_validation->set_rules('bank_id', 'Select Bank Id', 'required');
        $this->form_validation->set_rules('payment_mode', 'Select Payment Mode', 'required');
        $this->form_validation->set_rules('deposit_date', 'Deposit Date', 'required');
        $this->form_validation->set_rules('deposit_time', 'Deposit Time', 'required');
        $this->form_validation->set_rules('deposited_by', 'Deposited By', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No', 'required');
        $this->form_validation->set_rules('reason_refernece_no', 'Reason Refernece No', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('deposit_branch', 'Deposit Branch', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
           // echo "<pre>"; print_r($_POST); die;
            
            $user_data = array(
                'user_id' => $user_id,
                'request_amount' => $this->input->post('request_amount'),
                'bank_id' => $this->input->post('bank_id'),
                'payment_mode' => $this->input->post('payment_mode'),
                'deposit_date' => $this->input->post('deposit_date'),
                'deposit_time' => $this->input->post('deposit_time'),
                'deposited_by' => $this->input->post('deposited_by'),
                'contact_no' => $this->input->post('contact_no'),
                'deposit_branch' => $this->input->post('deposit_branch'),
                'status' => $this->input->post('status'),
                'reason_refernece_no' => $this->input->post('reason_refernece_no')
            );
            
            //echo "<pre>"; print_r($user_data); die;
            $result = $this->user_model->AddPaymnetDetail($user_data);
            if ($result) {
                $this->session->set_flashdata('success', "Id Request Added Successfully.");
                redirect(base_url('admin/activity/id_request_detail'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('admin/activity/id_request_detail'));
            }
         }
        $this->load->view('admin/admin_master', $data);
    }


    public function ticket_check() {
        $data['view'] = 'admin/activity/ticket_check';
        $this->load->view('admin/admin_master', $data);
    }

    public function ticket_detail() {
        //echo "<prE>"; print_r($data); die;
       // echo "<pre>"; print_r($_POST); die;
        $data['view'] = 'admin/activity/ticket_detail';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $user_id = $this->session->userdata('user_id');
            $password = md5($_POST['password']);
            $data = $this->user_model->getRegistrationCheck($user_id, $password); 
            //echo "<pre>"; print_r($data); die;   
            if ($data) {
                redirect(base_url('admin/activity/id_ticket_detail'));
            } else {
                $this->session->set_flashdata('error', "Invalid Transaction Password.");
                redirect(base_url('admin/activity/ticket_check'));
            }
        }
        $this->load->view('admin/admin_master', $data);
    }

    public function id_ticket_detail() {
        $user_id = $this->session->userdata('user_id');
        $data['bank_data'] = $this->user_model->getBankDetailData($user_id);
        //echo "<prE>"; print_r($data); die;
        $data['view'] = 'admin/activity/ticket_detail';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('ticket', 'Select Ticket', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $ticket_no ='BI/Ticket/' . $this->RandomString(4);
            $user_data = array(
                'user_id' => $user_id,
                'ticket_no' => $ticket_no,
                'ticket' => $this->input->post('ticket'),
                'subject' => $this->input->post('subject'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
            );
            
            //echo "<pre>"; print_r($user_data); die;
            $result = $this->user_model->AddGenerateTicket($user_data);
            if ($result) {
                $this->session->set_flashdata('success', "Generate Ticket Added Successfully.");
                redirect(base_url('admin/activity/id_ticket_detail'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('admin/activity/id_ticket_detail'));
            }
         }
        $this->load->view('admin/admin_master', $data);
    }

    public function resolve_ticket() {
        $user_id = $this->session->userdata('user_id');
        $data['ticket_data'] = $this->user_model->getGenerateTicket($user_id);
        $data['view'] = 'admin/activity/resolve_ticket';
        $this->load->view('admin/admin_master', $data);
    }

    function RandomString($length = 4)
    {
        //$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    

}
