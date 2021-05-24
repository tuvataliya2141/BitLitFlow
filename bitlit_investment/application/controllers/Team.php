<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
        $data['view'] = 'team/group_team';
        $this->load->view('admin_master', $data);
    }

    public function my_direct() {        
        $user_id = $this->session->userdata('user_id');
        $data['direct_data'] = $this->user_model->getmyDirectUpliner($user_id);
        //$data['refferal_data'] = $this->user_model->getmyDirectRefferal($user_id);
        //echo "<pre>"; print_r($data); die;
        $data['view'] = 'team/my_direct';
        $this->load->view('admin_master', $data);
    }

    
    

    public function my_downline() {
        //echo "<pre>"; print_r($_SESSION); die;
        $user_id = $this->session->userdata('user_id');
        $data['direct_data'] = $this->user_model->getmyTotalDownline($user_id);
        //$data['refferal_data'] = $this->user_model->getmyDirectRefferal($user_id);
       // echo "<pre>"; print_r($data); die;
        $data['view'] = 'team/my_downline';
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
            $data['team_data'] = $this->common->getRegistrationByUserid($user_id);
           // echo '<pre>'; print_r($data['team_data']); die;
            
            echo json_encode(array('view' => $this->load->view('team/ajax_group_team', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }
    
    public function clcik_group() {
        $uid = $_POST['uid'];
        if ($uid) {
            $data['team_data'] = $this->common->getRegistrationByUserid($uid);
            echo json_encode(array('view' => $this->load->view('team/ajax_group_team', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }
	public function search_group() {
        $uid = $_POST['search'];
        //echo '<pre>'; print_r($uid); die;
        if ($uid) {
            $data['team_data'] = $this->common->getRegistrationBySearch($uid);
            echo json_encode(array('view' => $this->load->view('team/ajax_group_team', $data, true)));
           // echo '<pre>'; print_r($data['team_data']); die;
//echo $data['mobile_data']->site_id;
        }
    }
    function RandomString($length = 8) {
        //$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function RandomStringTokan($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function new_register($uid = "", $pos = "") {
          //echo "<pre>"; print_r($pos); 
          //echo "<pre>"; print_r($id); die;
        $user_id = $this->session->userdata('user_id');
        
        $data['pos'] = $pos;
        $data['up_data'] = $this->user_model->getAdminData($uid);
        $data['last_data'] = $this->user_model->getLastData();
        $data['upliner_data'] = $this->user_model->getAllRegistration();
        $data['upliner'] = $this->user_model->getUpliner($user_id);
        $data['regi_data'] = $this->user_model->getRegistration($user_id);
         //echo "<prE>"; print_r($data['up_data']); die;

        $data['view'] = 'team/new_register';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('refferal_id', 'Select Refferal_Id', 'required');
        $this->form_validation->set_rules('select_position', 'Select Position', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required');
        $this->form_validation->set_rules('member_name', 'Member Name', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required');
        if ($this->form_validation->run() == TRUE) {


            $user_data = array(
                'parent_id' => $user_id,
                'upliner_id' => $this->input->post('upliner_id'),
                'refferal_id' => $this->input->post('refferal_id'),
                'select_position' => $this->input->post('select_position'),
                'email_id' => $this->input->post('email_id'),
                'mobile_no' => $this->input->post('mobile_no'),
                'member_name' => $this->input->post('member_name'),
                'father_name' => $this->input->post('father_name'),
                'creation_date' => date('Y-m-d'),
                'status' => $this->input->post('status')
            );


            $position = $this->input->post('select_position');
            $upliner = $this->input->post('upliner_id');

            $reg = $this->user_model->getRegistration($upliner);
            // echo "<pre>"; print_r($reg); die;
            if ($reg->upliner_id == 0) {
                $array_id[] = 1;
            }
            $downline = $reg->downline;
            $tdownline = $downline + 1;
            $down = array(
                'downline' => $tdownline
            );
            $array_id[] = $upliner;
            //echo "<pre>"; print_r($array_id); die;
            $result = $this->user_model->updateRegistration($upliner, $down);
            $reg_order = $this->user_model->getRegistrationOrderBy($upliner);

            //
            foreach ($reg_order as $row) {
                $id = $row['id'];
                label:
                $reg1 = $this->user_model->getRegistration($id);
                $upid = $reg1->upliner_id;
                if ($upid == '0') {
                    break;
                }
                $reg2 = $this->user_model->getRegistration($upid);
                $down = $reg2->downline;
                $tdown = $down + 1;
                $id = $upid;
                $array_id[] = $id;
                $down = array(
                    'downline' => $tdown
                );
                //echo $id;
                //echo "<pre>"; print_r($array_id);

                $result = $this->user_model->updateRegistration($upid, $down);
                goto label;
            }

            if ($position == 1) {
                $left_d = $reg->left_d;
                $tleft_d = $left_d + 1;
                $ldown = array(
                    'left_d' => $tleft_d
                );
                $result = $this->user_model->updateRegistration($upliner, $ldown);
                $reg_order = $this->user_model->getRegistrationOrderBy($upliner);

                foreach ($reg_order as $row) {
                    $id = $row['id'];
                    label1:

                    $reg1 = $this->user_model->getRegistration($id);
                    $pos = $reg1->select_position;
//                    echo "<prE>"; print_r($reg1); die;
//                    echo "<prE>"; print_r($pos); die;

                    $upid = $reg1->upliner_id;

                    if ($upid == '0') {
                        break;
                    }
                    if ($pos == 1) {
                        $reg2 = $this->user_model->getRegistration($upid);
                        $left_d = $reg2->left_d;

                        $tleft_d = $left_d + 1;

                        $id = $upid;
                        $ldown = array(
                            'left_d' => $tleft_d
                        );
                        $result = $this->user_model->updateRegistration($upid, $ldown);
                    } else {
                        $reg2 = $this->user_model->getRegistration($upid);
                        $right_d = $reg2->right_d;
                        $tright_d = $right_d + 1;
                        $id = $upid;
                        $rdown = array(
                            'right_d' => $tright_d
                        );
                        //                echo "<pre>"; print_r($rdown);
                        $result = $this->user_model->updateRegistration($upid, $rdown);
                    }
                    // echo "<prE>"; print_r($ldown); die;
//                       $result = $this->user_model->updateRegistration($upid, $ldown);
                    goto label1;
                    //echo "<pre>"; print_r($ldown); 
                }
                // die;
            } else if ($position == 2) {
                $right_d = $reg->right_d;
                $tright_d = $right_d + 1;
                $rdown = array(
                    'right_d' => $tright_d
                );
                $result = $this->user_model->updateRegistration($upliner, $rdown);
                $reg_order = $this->user_model->getRegistrationOrderBy($upliner);
                foreach ($reg_order as $row) {
                    $id = $row['id'];
                    label2:

                    $reg1 = $this->user_model->getRegistration($id);
                    $pos = $reg1->select_position;
//                    echo "<prE>"; print_r($reg1); die;
//                    echo "<prE>"; print_r($pos); die;

                    $upid = $reg1->upliner_id;

                    if ($upid == '0') {
                        break;
                    }
                    if ($pos == 1) {
                        $reg2 = $this->user_model->getRegistration($upid);
                        $left_d = $reg2->left_d;

                        $tleft_d = $left_d + 1;

                        $id = $upid;
                        $ldown = array(
                            'left_d' => $tleft_d
                        );
                        $result = $this->user_model->updateRegistration($upid, $ldown);
                    } else {
                        $reg2 = $this->user_model->getRegistration($upid);
                        $right_d = $reg2->right_d;
                        $tright_d = $right_d + 1;
                        $id = $upid;
                        $rdown = array(
                            'right_d' => $tright_d
                        );
                        //                echo "<pre>"; print_r($rdown);
                        $result = $this->user_model->updateRegistration($upid, $rdown);
                    }
                    // echo "<prE>"; print_r($ldown); die;
//                       $result = $this->user_model->updateRegistration($upid, $ldown);
                    goto label2;
                    //echo "<pre>"; print_r($ldown); 
                }
                //  die;
            }
//          

            $user_data['parent_id'] = implode(',', $array_id);
            //echo "<pre>"; print_r($array_id); die;
            //die;
            //echo "<pre>"; print_r($reg_order); die;
            $user_data['binary_pair'] = $user_id;

            $check = $this->input->post('email_id');


            if ($check) {
                $date = date("Y-m-d");
                $uid = 'BI' . $this->RandomString(8);
                $password = $this->RandomStringTokan(10);
                $txn_password = $this->RandomStringTokan(10);

                $message = "<html>";
                $message .= "<body>";
                //$message = $this->load->view('admin/email_data',$data,true);
                // echo $message ; die;   
                $user_data['password'] = md5($password);
                $user_data['txn_password'] = md5($txn_password);
                $user_data['user_id'] = $uid;
                $user_data['pwd'] = base64_encode($password);
                $message = 'This is your User ID. ' . $uid
                        . ' This is your Password. ' . $password
                        . ' This is your transaction Password. ' . $txn_password
                        . ' Thanks.';
                // echo "<pre>"; print_r($message); die;
                $send = mail("$check","your User ID","$message");
                // echo "<pre>"; print_r($send); die;
                if($send){
                 //echo "<pre>"; print_r($user_data); die;
                $result = $this->user_model->addRegistration($user_data);

                if ($result) {
                    $this->session->set_flashdata('success', "Register Added Successfully.");
                    redirect(base_url('team'));
                } else {
                    $this->session->set_flashdata('error', "Error While Inserting Record.");
                    redirect(base_url('team'));
                }
                }
            }
        }
        $this->load->view('admin_master', $data);
    }

}
