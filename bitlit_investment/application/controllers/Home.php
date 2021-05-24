<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
            $this->load->model('user_model');
            $this->load->model('admin_payment_model');
            $this->load->model('e_pin_model');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['check_data'] = $this->user_model->getCeckActiveUser($user_id);
        $data['b_data'] = $this->user_model->user_binary($user_id);
        $data['re_data'] = $this->user_model->user_reword($user_id);
        $data['ro_data'] = $this->user_model->user_royalty($user_id);
        $data['aw_data'] = $this->user_model->user_awaord($user_id);
        $data['amount_data'] = $this->admin_payment_model->getTotalMyamountById($user_id);
       // echo "<pre>"; print_r($data['check_data']); exit;
        $data['view'] = 'dashboard';
        $this->load->view('admin_master', $data);
		
    }
    
    public function buy_package() {
        $user_id = $this->session->userdata('user_id');
		$data['package_data'] = $this->e_pin_model->getAllPackage();
        $data['am_data'] = $this->admin_payment_model->getAllWalletData($user_id);
         
        $data['view'] = 'buy_package';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('payment', 'Package', 'required');
        $this->form_validation->set_rules('e_pin', 'Copoun', 'required');
        if ($this->form_validation->run() == TRUE) {
            $e_pin = $_POST['e_pin'];
            $paym = $_POST['payment'];
            $data = $this->e_pin_model->getCopenCheck($e_pin);
            $c_id = $data->id;
            if ($data) {
                $amt = $data->amount;
                if ($amt == $paym) {
                        $rgs = array(
                            'payment' => $paym,
                            'payment_status' => 1,
                            'activate_date' => date('Y-m-d')
                        );
                        $up = array(
                            'used_id' => $user_id,
                            'status' => 1,
                            'used_date' => date('Y-m-d')
                        );
                        echo "<pre>"; print_r($user_data); 
                        echo "<pre>"; print_r($up); 
                        $result = $this->e_pin_model->UpdateEPinMasterByUser($c_id, $up);
                        $result = $this->user_model->updateRegistration($user_id, $rgs);
                        if ($result) {
                            $this->session->set_flashdata('success', "Your pakege activated Successfully.");
                            redirect(base_url('home'));
                        } else {
                            $this->session->set_flashdata('error', "Error While Inserting Record.");
                            redirect(base_url('home'));
                        }
                } else {
                    $this->session->set_flashdata('error', "Please enter valid coupon.");
                    redirect(base_url('home/buy_package'));
                }
                redirect(base_url('home/buy_package'));
            } else {
                $this->session->set_flashdata('error', "Invalid coupon id.");
                redirect(base_url('home/buy_package'));
            }
            $user_data = array(
                'isused_id' => $user_id,
                'tranaction_no' => $this->input->post('tranaction_no'),
                'amount' => $this->input->post('amount'),
                'qty' => $this->input->post('qty')
            );
            //echo "<pre>"; print_r($user_data); die;
            $result = $this->e_pin_model->AddRequestEPin($user_data);
            if ($result) {
                $this->session->set_flashdata('success', "Request E-Pin Successfully.");
                redirect(base_url('home'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('home'));
            }
        }
                    
        
        $this->load->view('admin_master', $data);
    }


    public function getData() {
        is_ajax();
        $day = isset($_POST['day']) ? $_POST['day'] : '';
        $this->load->view('view_dashboard_trans', $data);
    }

}
