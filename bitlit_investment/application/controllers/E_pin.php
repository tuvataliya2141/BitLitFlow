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
        //echo "<pre>"; print_r($_SESSION); die;
        $user_id = $this->session->userdata('user_id');
        $data['my_data'] = $this->admin_payment_model->getTotalMyamountById($user_id);
        $data['am_data'] = $this->admin_payment_model->getAllWalletData($user_id);
         //echo "<pre>"; print_r($data); die;
        $data['view'] = 'e_pin/create_epin';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $credit = $data['my_data']->credit;
            $amount = $_POST['amount'];
            $quantity = $_POST['quantity'];
            $my = $data['my_data']->total;
            $password = md5($_POST['password']);
            $t = $amount * $quantity;
            $upa = $my - $t;
            $data = $this->user_model->getRegistrationCheck($user_id, $password); 
            if ($data) {
                if ($my > $amount) {
                    
                    for($i=1; $i <= $quantity; $i++){
                        $e_pin = 'S' .$this->RandomString(10);
                        $user_data = array(
                            'isused_id' => $user_id,
                            'user_id' => $user_id,
                            'amount' => $amount,
                            'e_pin' => $e_pin,
                            'isused_date' => date('Y-m-d h:i:s')
                        );
                        $up = array(
                            'user_id' => $user_id,
                            'total' => $upa,
                            'debit' => $t, 
                            'credit' => $credit 
                        );
                        $result = $this->e_pin_model->AddEPinMaster($user_data);
                        $result = $this->admin_payment_model->addTotalMyamount($up);
                    }
                    $this->session->set_flashdata('success', "Create E-Pin Generate Successfully.");
                    redirect(base_url('e_pin'));
                } else {
                    $this->session->set_flashdata('error', "You don't have enough balance.");
                    redirect(base_url('e_pin'));
                }
                redirect(base_url('e_pin'));
            } else {
                $this->session->set_flashdata('error', "Invalid Transaction Password.");
                redirect(base_url('e_pin'));
            }
        }
        $this->load->view('admin_master', $data);
    }
    
    public function request_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->admin_payment_model->getAllWalletData($user_id);
         
        $data['view'] = 'e_pin/request_epin';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('tranaction_no', 'tranaction_no', 'numeric|required');
        $this->form_validation->set_rules('qty', 'qty', 'required');
        if ($this->form_validation->run() == TRUE) {
            
            $user_data = array(
                'isused_id' => $user_id,
                'tranaction_no' => $this->input->post('tranaction_no'),
                'amount' => $this->input->post('amount'),
                'qty' => $this->input->post('qty')
            );

            if (isset($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
                $temp_file = $_FILES['image']['tmp_name'];

                $img_name = "request_" . mt_rand(10000, 999999999) . time();
                $path = $_FILES['image']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);

                $user_data['image'] = $img_name . "." . $ext;
                $url = REQ_IMG . $user_data['image'];
                $this->gdb->compress_image($temp_file, $url, 80);
            }
            //echo "<pre>"; print_r($user_data); die;
            $result = $this->e_pin_model->AddRequestEPin($user_data);
            if ($result) {
                $this->session->set_flashdata('success', "Request E-Pin Successfully.");
                redirect(base_url('e_pin/request_epin'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('e_pin/request_epin'));
            }
        }
                    
        
        $this->load->view('admin_master', $data);
    }
    
    public function transfer_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getEPinMasterById($user_id);
        //echo "<pre>"; print_r($data['am_data']); die;
        $data['view'] = 'e_pin/transfer_epin';
        $this->load->view('admin_master', $data);
    }
    
    public function un_used_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getEPinMasterByUnused($user_id);
        //echo "<pre>"; print_r($data['am_data']); die;
        $data['view'] = 'e_pin/un_used_epin';
        $this->load->view('admin_master', $data);
    }
    
    public function used_epin() {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getEPinMasterByUsed($user_id);
        $data['view'] = 'e_pin/used_epin';
        $this->load->view('admin_master', $data);
    }
    
    public function transfer_epin_list() {
        $user_id = $this->session->userdata('user_id');
        $data['from'] = ($this->input->post('from')) ? $this->input->post('from') : '';
        $data['to'] = ($this->input->post('to')) ? $this->input->post('to') : '';
        $data['am_data'] = $this->e_pin_model->getEPinMasterByTranster($user_id, $data['from'], $data['to']);
        //echo "<pre>"; print_r($data['am_data']); die;
        $data['view'] = 'e_pin/transfer_epin_report';
        $this->load->view('admin_master', $data);
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
    
    public function transfer_epin_multiple(){
        $user_id = $this->session->userdata('user_id');
        //echo "<pre>"; print_r($_POST); die;
        if(!empty($_POST)){
            $exp = $_POST['epin_id'];
                $data['am_data'] = $this->e_pin_model->getEPinMasterByShow($exp);    
               // echo '<pre>'; print_r($data['am_data']);
            $data['e_id'] = $exp;
            $data['view'] = 'e_pin/transfer_data';
            $this->load->view('admin_master', $data);
        }
        else{
            redirect(base_url('e_pin'));
        }
    }
    
    public function transfer_epin_show(){
        $user_id = $this->session->userdata('user_id');
        $in = $this->session->flashdata('e_id');
        //echo "<pre>"; print_r($in); die;
        $data['am_data'] = $this->e_pin_model->getEPinMasterByShow($in);    
        $data['e_id'] = $in;
        $data['view'] = 'e_pin/transfer_data';
        $this->load->view('admin_master', $data);
    }
    
    public function transfer_epin_add(){
        //echo "<pre>"; print_r($_POST); die;
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('user_id', 'User Id', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            
            $t_id = $_POST['user_id'];
            $e_id = $_POST['e_pinid'];
            $password = md5($_POST['password']);
            //$t = $amount * $quantity;
            //$upa = $my - $t;
            
            $data = $this->user_model->getRegistrationCheck($user_id, $password);
            
            if ($data) {
                if($data->user_id == $t_id){
                    $this->session->set_flashdata('error', "Please don't enter your id.");
                    $this->session->set_flashdata('e_id',$e_id);
                    redirect(base_url('e_pin/transfer_epin_show'));
                }else{
                    $data1 = $this->user_model->getRegistrationCheckUserId($t_id);
                    if($data1){
                        $u_id = $data1->id;
                        $pin_id = explode(',', $e_id);
                        //echo "<pre>"; print_r($u_id); die;
                        foreach ($pin_id as  $p_id) {
                            $user_data = array(
                                'transfer_id' => $u_id,
                                'isused_id' => $u_id,
                                'transfer_date' => date('Y-m-d h:i:s')
                            );
                            $result = $this->e_pin_model->UpdateEPinMaster($p_id, $user_data);
                        }
                        $this->session->set_flashdata('success', "1 E-pins were Transfered to User Id $data1->user_id.");
                        $this->session->set_flashdata('e_id',$e_id);
                        redirect(base_url('e_pin/transfer_epin'));
                    } else {
                        $this->session->set_flashdata('error', "Please enter correct your id.");
                        $this->session->set_flashdata('e_id',$e_id);
                        redirect(base_url('e_pin/transfer_epin_show')); 
                    }
                }
            } else {
                $this->session->set_flashdata('error', "Invalid Transaction Password.");
                $this->session->set_flashdata('e_id',$e_id);
                redirect(base_url('e_pin/transfer_epin_show'));
            }
        }
        $this->load->view('admin_master', $data);
    }
    
}
