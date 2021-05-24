<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class E_pin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
        $this->load->model('e_pin_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
		$data['package_data'] = $this->e_pin_model->getAllPackage();
        $data['am_data'] = $this->admin_payment_model->getAllWalletData($user_id);
        // echo "<pre>"; print_r($data); die;
        $data['view'] = 'admin/e_pin/create_epin';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required');
        $this->form_validation->set_rules('user_id', 'User Id', 'required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $amount = $_POST['amount'];
            $quantity = $_POST['quantity'];
            $my = $data['my_data']->total;
            $user = $_POST['user_id'];
            $t = $amount * $quantity;
            $upa = $my - $t;
            $data = $this->user_model->getRegistrationCheckByUser($user);
            if ($data) {
                for ($i = 1; $i <= $quantity; $i++) {
                    $e_pin = 'A' .$this->RandomString(10);
                    $user_data = array(
                        'isused_id' => $data->id,
                        'amount' => $amount,
                        'e_pin' => $e_pin,
                        'isused_date' => date('Y-m-d')
                    );
                    $result = $this->e_pin_model->AddEPinMaster($user_data);
                }
                $this->session->set_flashdata('success', "Create E-Pin Generate Successfully.");
                redirect(base_url('admin/e_pin'));
            } else {
                $this->session->set_flashdata('error', "Invalid user id.");
                redirect(base_url('admin/e_pin'));
            }
        }
        $this->load->view('admin/admin_master', $data);
    }
        
    function RandomString($length = 10) {
        //$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    public function search_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['e_pin'] = ($this->input->post('e_pin')) ? $this->input->post('e_pin') : '';
        $data['am_data'] = $this->e_pin_model->getEPinMasterBySearch($data['e_pin']);
        //echo "<pre>"; print_r($data['am_data']); die;
        $data['view'] = 'admin/e_pin/search_epin';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function un_used_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getEPinMasterByUnsedAdmin();
        //echo "<pre>"; print_r($data['am_data']); die;
        $data['view'] = 'admin/e_pin/un_used_epin';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function delete($id = '') {
        //echo "<pre>"; print_r($id); die;
        $result = $this->e_pin_model->deleteEPin($id);

        if ($result) {
            $this->session->set_flashdata('success', "E-pin Deleted Successfully.");
            redirect(base_url('admin/e_pin/un_used_epin'));
        } else {
            $this->session->set_flashdata('error', "Error While Deleting Record.");
            redirect(base_url('admin/e_pin/un_used_epin'));
        }
    }
    
    public function request_delete($id = '') {
        $result = $this->e_pin_model->deleteEPinRequest($id);
        if ($result) {
            $this->session->set_flashdata('success', "Request E-pin Deleted Successfully.");
            redirect(base_url('admin/e_pin/epin_request'));
        } else {
            $this->session->set_flashdata('error', "Error While Deleting Record.");
            redirect(base_url('admin/e_pin/epin_request'));
        }
    }
    
    public function used_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getEPinMasterByUsedAdmin();
        $data['view'] = 'admin/e_pin/used_epin';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function epin_request() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getRequestEPinAdmin();
        //echo "<pre>"; print_r($data['am_data']); die;
        $data['view'] = 'admin/e_pin/epin_request';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function approve($id) {
        $user_id = $this->session->userdata('user_id');
        $am_data = $this->e_pin_model->getRequestEPinById($id);
        //echo "<pre>"; print_r($data); die;
        $amount = $am_data->amount;
        $qty = $am_data->qty;
        $isused_id = $am_data->isused_id;
        for ($i = 1; $i <= $qty; $i++) {
            $e_pin = $this->RandomString(10);
            $user_data = array(
                'isused_id' => $isused_id,
                'amount' => $amount,
                'e_pin' => $e_pin,
                'isused_date' => date('Y-m-d')
            );
            //echo "<pre>"; print_r($user_data); die;
            $result = $this->e_pin_model->AddEPinMaster($user_data);
            $result = $this->e_pin_model->UpdateRequestEPin($id, array('status' => 1));
        }
        $this->session->set_flashdata('success', "Create E-Pin Generate Successfully.");
        redirect(base_url('admin/e_pin/epin_request'));
            
        
        $this->load->view('admin/admin_master', $data);
    }

}
