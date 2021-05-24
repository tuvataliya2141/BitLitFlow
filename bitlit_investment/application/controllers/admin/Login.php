<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
        $this->load->library('email');
    }

    public function index() {
        if ($this->session->userdata('user_id'))
            redirect('admin/home');
        $this->form_validation->set_rules('user_id', 'User Id', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');

        $this->form_validation->set_error_delimiters('', '');
        $data['msg'] = '';
        if ($this->form_validation->run() == TRUE) {
            $user_id = $_POST['user_id'];
            $password = md5($_POST['pwd']);
            $data = $this->login_model->getAdminRegistrationLogin($user_id, $password);
            // echo "<pre>"; print_r($data); die;           
            if ($data) {
                $this->session->set_userdata('user_id', $data->id);
                $this->session->set_userdata('user_data', $data);
                $login_id = $this->session->userdata('user_id');		                
                redirect('admin/home');
            } else {
                $this->session->set_flashdata('msg', "User Id or Password did not matched");
                $data['msg'] = 'User Id and Password did not matched.';
            }
        }
        $this->load->view('admin/login/login', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    public function change_password() {
        if (isset($_POST) && !empty($_POST)) {
            $data = array(
                'pwd' => base64_encode($this->input->post('newpassword')),
                'password' => md5($this->input->post('newpassword'))
            );
            //echo "<pre>"; print_r($data); die;
            $id = $this->session->userdata('user_id');
            //echo "<prE>"; print_r($id); die;
            $this->login_model->updatePasswordById($id, $data);
            redirect('admin/login');
        } else {
            $data['view'] = 'admin/login/changepassword';
            $this->load->view('admin/admin_master', $data);
        }
    }

    public function forgotpassword() {
        if (isset($_POST) && !empty($_POST)) {
            $mailid = $_POST['email'];
            $new_password = $this->common->generatePassword();
            $message = 'New Password : ' . $new_password;

            $data = array(
                'pwd' => base64_encode($this->input->post('newpassword')),
                'password' => md5($new_password)
            );
            $this->login_model->updatePassword(1, $data);

            $this->common->sendMail($mailid, PROJECT_NAME . ' | New Password', $message);
            redirect('admin/login');
        } else {
            $this->load->view('admin/login/forgotpassword');
        }
    }

}