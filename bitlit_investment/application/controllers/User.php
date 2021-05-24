<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->gdb->checkadminlogin();
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
    }

    public function index() {
        //  echo "<pre>"; print_r($id); die;
        $user_id = $this->session->userdata('user_id');
        //if (!$this->session->userdata('admin_id'))
        //redirect('home');
        // echo date('m/d/Y',strtotime('+30 days',strtotime('05/06/2016'))) . PHP_EOL; die;
        $data['last_data'] = $this->user_model->getLastData();
        $data['upliner_data'] = $this->user_model->getAllRegistration();
        $data['upliner'] = $this->user_model->getUpliner($user_id);
        $data['regi_data'] = $this->user_model->getRegistration($user_id);
        // echo "<prE>"; print_r($data['upliner_data']); die;

        $data['view'] = 'user/new_register';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('upliner_id', 'Select Upliner Id', 'required');
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
            
            if($position == 1)
            {
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
                    if($pos == 1)
                    {
                        $reg2 = $this->user_model->getRegistration($upid);
                        $left_d = $reg2->left_d;

                        $tleft_d = $left_d + 1;

                        $id = $upid;
                        $ldown = array(
                            'left_d' => $tleft_d
                        );
                         $result = $this->user_model->updateRegistration($upid, $ldown);  
                    }
                    else {
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
            }
            else if($position == 2)
            {
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
                    if($pos == 1)
                    {
                        $reg2 = $this->user_model->getRegistration($upid);
                        $left_d = $reg2->left_d;

                        $tleft_d = $left_d + 1;

                        $id = $upid;
                        $ldown = array(
                            'left_d' => $tleft_d
                        );
                         $result = $this->user_model->updateRegistration($upid, $ldown);  
                    }
                    else {
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
                $date=date("Y-m-d");
                $uid ='BI' . $this->RandomString(8);
	            $password = $this->RandomStringTokan(10);
	            $txn_password = $this->RandomStringTokan(10);
	            
	            $message="<html>";
	            $message.= "<body>";
	            //$message = $this->load->view('admin/email_data',$data,true);
	            
	                // echo $message ; die;   
	                $user_data['password'] = md5($password);
	                $user_data['txn_password'] = md5($txn_password);
	                $user_data['user_id'] = $uid ;
	                $user_data['pwd'] = base64_encode($password);
	                $user_data['txn_pwd'] = base64_encode($txn_password);
	                $message='This is your User ID. ' .$uid 
	                    . ' This is your Password. ' .$password
	                    . ' This is your transaction Password. ' .$txn_password
	                    . ' Thanks.';
	                   // echo "<pre>"; print_r($message); die;
	                $send = mail("$check","your User ID","$message");
		                // echo "<pre>"; print_r($send); die;
		                if($send){
		                // echo "<pre>"; print_r($send); die;
		                $result = $this->user_model->addRegistration($user_data);
		               
		                if ($result) {
		                    $this->session->set_flashdata('success', "Register Added Successfully.");
		                    redirect(base_url('user'));
		                } else {
		                    $this->session->set_flashdata('error', "Error While Inserting Record.");
		                    redirect(base_url('user'));
	                	}
                	}
            }
        }
        $this->load->view('admin_master', $data);
    }

    public function kyc_details() {
        $id = $_SESSION['user_id'];
        // echo "<prE>"; print_r($id); die;
        //if (!$this->session->userdata('admin_id'))
        //redirect('home');
        $data['data'] = $this->user_model->getRegistrationDataById($id);
        //echo "<prE>"; print_r($data); die;

        $data['view'] = 'user/kyc_details';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('mother_name', 'Mother Name', 'required');
        $this->form_validation->set_rules('nominee_name', 'Nominee Name', 'required');
        $this->form_validation->set_rules('nominee_relation', 'Nominee Relation', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required');
        $this->form_validation->set_rules('aadhar_no', 'Aadhar No', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_FILES); die;
            $user_data = array(
                'mother_name' => $this->input->post('mother_name'),
                'nominee_name' => $this->input->post('nominee_name'),
                'nominee_relation' => $this->input->post('nominee_relation'),
                'father_name' => $this->input->post('father_name'),
                'status' => $this->input->post('status'),
                'email_id' => $this->input->post('email_id')
            );
            $aadhar = array(
                'user_id' => $id,
                'aadhar_no' => $this->input->post('aadhar_no')
            );
            if (isset($_FILES['img']['name']) && $_FILES['img']['error'] == 0) {
                $temp_file = $_FILES['img']['tmp_name'];

                $img_name = "aadhar_" . mt_rand(10000, 999999999) . time();
                $path = $_FILES['img']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);

                $aadhar['aadhar_image'] = $img_name . "." . $ext;
                $url = AADHARPIC . $aadhar['aadhar_image'];
                $this->gdb->compress_image($temp_file, $url, 80);
            }
            $result = $this->user_model->updateRegistration($id, $user_data);
            $result = $this->user_model->addAadharcard($aadhar);

            if ($result) {
                $this->session->set_flashdata('success', "KYC Details Add Successfully.");
                redirect(base_url('user/kyc_details'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('user/kyc_details'));
            }
        }
        $this->load->view('admin_master', $data);
    }

    public function shipping_details() {
        $id = $_SESSION['user_id'];

        //if (!$this->session->userdata('admin_id'))
        //redirect('home');
        $data['data'] = $this->user_model->getRegistrationDataById($id);
        $data['countrie_data'] = $this->user_model->getAllCountries();
        //echo "<prE>"; print_r($data); die;

        $data['view'] = 'user/shipping_details';

        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('house_no', 'House No', 'required');
        $this->form_validation->set_rules('building_name', 'Building Name', 'required');
        $this->form_validation->set_rules('street_name', 'Street Name', 'required');
        $this->form_validation->set_rules('locality', 'Locality', 'required');
        $this->form_validation->set_rules('village', 'Village', 'required');
        $this->form_validation->set_rules('country', 'Select Country', 'required');
        $this->form_validation->set_rules('district', 'District', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('pin_code', 'Pin Code', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == TRUE) {
            // echo "<pre>"; print_r($_POST); die;
            $user_data = array(
                'house_no' => $this->input->post('house_no'),
                'building_name' => $this->input->post('building_name'),
                'street_name' => $this->input->post('street_name'),
                'locality' => $this->input->post('locality'),
                'village' => $this->input->post('village'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'district' => $this->input->post('district'),
                'city' => $this->input->post('city'),
                'pin_code' => $this->input->post('pin_code'),
                'status' => $this->input->post('status')
            );
            //echo "<pre>"; print_r($user_data); die;
            $result = $this->user_model->AddShippingData($user_data);

            if ($result) {
                $this->session->set_flashdata('success', "Shipping Details Add Successfully.");
                redirect(base_url('user/shipping_details'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('user/shipping_details'));
            }
        }
        $this->load->view('admin_master', $data);
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

    public function bank_detail() {
        $id = $_SESSION['user_id'];
        // echo "<prE>"; print_r($id); die;
        //if (!$this->session->userdata('admin_id'))
        //redirect('home');
        $data['bank_data'] = $this->user_model->getAllBank();
        //echo "<prE>"; print_r($data); die;

        $data['view'] = 'user/bank_detail';
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('bank_id', 'Bank Id', 'required');
        $this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
        $this->form_validation->set_rules('holder_name', 'Holder Name', 'required');
        $this->form_validation->set_rules('account_no', 'Account No', 'required');
        $this->form_validation->set_rules('ifsc_code', 'IFSC Code', 'required');
        $this->form_validation->set_rules('pan_no', 'Pan No.', 'required');

        if ($this->form_validation->run() == TRUE) {
            //echo "<pre>"; print_r($_POST); die;
            $user_data = array(
                'user_id' => $id,
                'bank_id' => $this->input->post('bank_id'),
                'account_no' => $this->input->post('account_no'),
                'branch_name' => $this->input->post('branch_name'),
                'holder_name' => $this->input->post('holder_name'),
                'ifsc_code' => $this->input->post('ifsc_code'),
                'status' => $this->input->post('status'),
                'pan_no' => $this->input->post('pan_no')
            );

            if (isset($_FILES['cheque_image']['name']) && $_FILES['cheque_image']['error'] == 0) {
                $temp_file = $_FILES['cheque_image']['tmp_name'];

                $img_name = "cheque_" . mt_rand(10000, 999999999) . time();
                $path = $_FILES['cheque_image']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);

                $user_data['cheque_image'] = $img_name . "." . $ext;
                $url = CHEQUE_IMG . $user_data['cheque_image'];
                $this->gdb->compress_image($temp_file, $url, 80);
            }

            if (isset($_FILES['img']['name']) && $_FILES['img']['error'] == 0) {
                $temp_file = $_FILES['img']['tmp_name'];

                $img_name = "pan_" . mt_rand(10000, 999999999) . time();
                $path = $_FILES['img']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);

                $user_data['pan_image'] = $img_name . "." . $ext;
                $url = PAN_IMG . $user_data['pan_image'];
                $this->gdb->compress_image($temp_file, $url, 80);
            }

            $result = $this->user_model->AddBankDetailData($user_data);

            if ($result) {
                $this->session->set_flashdata('success', "Bank Details Add Successfully.");
                redirect(base_url('user/bank_detail'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('user/bank_detail'));
            }
        }
        $this->load->view('admin_master', $data);
    }

    public function change_password() {
        if (isset($_POST) && !empty($_POST)) {
            $data = array(
                'password' => md5($this->input->post('newpassword'))
            );
            $id = $this->session->userdata('user_id');
            //echo "<pre>"; print_r($id); die;
            $this->user_model->updateRegistration($id, $data);
            redirect('user/change_password');
        } else {
            $data['view'] = 'user/changepassword';
            $this->load->view('admin_master', $data);
        }
    }

    public function txn_password() {
        if (isset($_POST) && !empty($_POST)) {
            $data = array(
                'txn_password' => md5($this->input->post('newpassword'))
            );
            $id = $this->session->userdata('user_id');
            //echo "<pre>"; print_r($data); die;
            $this->user_model->updateRegistration($id, $data);
            redirect('user/txn_password');
        } else {
            $data['view'] = 'user/txn_password';
            $this->load->view('admin_master', $data);
        }
    }

    public function my_documents() {
        $user_id = $this->session->userdata('user_id');
        $data['aadhar_data'] = $this->user_model->getAadharByUserid($user_id);
        $data['bank_data'] = $this->user_model->getBankDetailByUserid($user_id);
        //echo "<prE>"; print_r($data); die;
        $data['view'] = 'user/my_documents';
        $this->load->view('admin_master', $data);
    }

    public function getUplinerName() {
        $primary_customer = $_POST['primary_customer'] + 0;
        //echo '<pre>'; print_r($primary_customer); die;
        if ($primary_customer) {
            $data['name_data'] = $this->user_model->getRegistration($primary_customer);
            //echo '<pre>'; print_r($data); die;
            echo json_encode(array('view' => $this->load->view('user/ajax_name', $data, true)));
        }
    }

    public function getmydata() {
        $file = base_url('test');
        //echo '<pre>'; print_r($file); die;
        // if (!rmdir($file))
        // {
        // echo ("Error deleting $file");
        // }
        // else
        // {
        // echo ("Deleted $file");
        // }
        $files = glob('http://localhost/bitlit_investment/test/*'); // get all file names
        foreach ($files as $file) {
            echo '<pre>';
            print_r($file);
        }
        die;
        //$files = glob('http://localhost/bitlit_investment/test/{,.}*', GLOB_BRACE);
        //echo delete("http://localhost/bitlit_investment/test/profiler.php");
    }

    public function checkUpliner() {
        $primary_customer = $_POST['primary_customer'] + 0;
        //echo '<pre>'; print_r($primary_customer); die;
        if ($primary_customer) {
            $data['name_data'] = $this->user_model->getRegistration($primary_customer);
            $data['upliner'] = $this->user_model->getUpliner($data['name_data']->id);
            $upliner = $data['upliner']->upliner;
            $select_position = $data['upliner']->select_position;
            if ($upliner == 2) {
                $data['show'] = 'disabled';
            } else if ($upliner == 1 && $select_position == 1) {
                $data['show'] = 'right_show';
            } else if ($upliner == 1 && $select_position == 2) {
                $data['show'] = 'left_show';
            } else {
                $data['show'] = 'show';
            }
            //echo '<pre>'; print_r($data); die;
            echo json_encode(array('view' => $this->load->view('user/ajax_check_name', $data, true)));

            //echo '<pre>'; print_r($upliner); die;
            //echo $one;
        }
    }

    public function getRefferalName() {
        $primary_customer = $_POST['primary_customer'] + 0;
        //echo '<pre>'; print_r($primary_customer); die;
        if ($primary_customer) {
            $data['refferal_data'] = $this->user_model->getRegistration($primary_customer);
            //echo '<pre>'; print_r($data['mobile_data']); die;
            echo json_encode(array('view' => $this->load->view('user/ajax_name', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }

    public function Getstate() {
        $primary_customer = $_POST['primary_customer'] + 0;
        //echo '<pre>'; print_r($primary_customer); die;
        if ($primary_customer) {
            $data['state_data'] = $this->user_model->Getstate($primary_customer);
            //echo '<pre>'; print_r($data['state_data']); die;
            echo json_encode(array('view' => $this->load->view('user/ajax_state', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }

}
