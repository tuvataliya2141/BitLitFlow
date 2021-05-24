<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('e_pin_model');
        $this->load->library('email');
        $this->gdb->checkadminlogin();
    }

    public function index() {
        $data['am_data'] = $this->e_pin_model->getAllPackage();
        //echo "<prE>"; print_r($data['am_data']); die;
        $data['view'] = 'admin/packege/view';
        $this->load->view('admin/admin_master', $data);
    }
    
    public function add() {
        $user_id = $this->session->userdata('user_id');
        $data['view'] = 'admin/packege/add';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('price', 'Amount', 'required');
        $this->form_validation->set_rules('package', 'Package', 'required');
        if ($this->form_validation->run() == TRUE) {
            $user_data = array(
                'price' => $this->input->post('price'),
                'package' => $this->input->post('package')
            );
            $result = $this->e_pin_model->AddPackage($user_data);
            $this->session->set_flashdata('success', "Package Generate Successfully.");
            redirect(base_url('admin/package'));
           
        }
        $this->load->view('admin/admin_master', $data);
    }
    
    public function edit($id) {
        $user_id = $this->session->userdata('user_id');
        $data['am_data'] = $this->e_pin_model->getPackageById($id);
        $data['view'] = 'admin/packege/edit';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('price', 'Amount', 'required');
        $this->form_validation->set_rules('package', 'Package', 'required');
        if ($this->form_validation->run() == TRUE) {
            $user_data = array(
                'price' => $this->input->post('price'),
                'package' => $this->input->post('package')
            );
            $result = $this->e_pin_model->UpdatePackage($id, $user_data);
            $this->session->set_flashdata('success', "Package Update Successfully.");
            redirect(base_url('admin/package'));
           
        }
        $this->load->view('admin/admin_master', $data);
    }
    
    public function delete($id = '') {
        //echo "<pre>"; print_r($id); die;
        $result = $this->e_pin_model->deletePackage($id);

        if ($result) {
            $this->session->set_flashdata('success', "Package Deleted Successfully.");
            redirect(base_url('admin/package'));
        } else {
            $this->session->set_flashdata('error', "Error While Deleting Record.");
            redirect(base_url('admin/package'));
        }
    }
}
