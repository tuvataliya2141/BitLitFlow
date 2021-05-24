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
        $date = date('Y-m-d');
        //if (!$this->session->userdata('admin_id'))
        //redirect('admin/home');
        // echo date('m/d/Y',strtotime('+30 days',strtotime('05/06/2016'))) . PHP_EOL; die;
        $data['last_data'] = $this->user_model->getLastData();
        $data['upliner_data'] = $this->user_model->getAllRegistration();
        $data['upliner'] = $this->user_model->getUpliner($user_id);
        $data['regi_data'] = $this->user_model->getRegistration($user_id);
        //echo "<prE>"; print_r($data['last_data']); die;
        $data['view'] = 'admin1/user/new_register';
       
        
       // die;
        $user_capping_left = $this->admin_payment_model->getCappingDailyLeft($user_id, $date);
	$user_capping_right = $this->admin_payment_model->getCappingDailyRight($user_id, $date);
	$data['capping_list'] = $this->admin_payment_model->getCappingDailyList($date);
       // echo "<prE>"; print_r($user_capping_right); die;
        $dwnl = $user_capping_left->downline;
        $dwnr = $user_capping_right->downline;
        $pay = $user_capping_left->payment;
      // echo "<prE>"; print_r($dwnl); 
       // echo "<prE>"; print_r($dwnr); die;      
        switch($pay){
                case '10500':
                    if($dwnl >= 21 && $dwnr >= 21){
                        $onel = $dwnl - 21;
                        $twol = $dwnl - $onel;
                        $oner = $dwnr - 21;
                        $twor = $dwnr - $oner;                        
                        if($twol == 21 && $twor == 21 && $twol == $twor){
                            $tds = '21000' * 5/100  ;
                            $admin = '21000' * 5/100  ;
                            $e_wallet = '21000' * 5/100  ;
                            $amount = '21000' - $tds - $admin - $e_wallet;
                            $amt = array(
                                'user_id' => $user_id,
                                'amount'=> $amount,
                                'date' => $date,
                                'type' => 'capping'
                            );
                            //echo "<prE>"; print_r($amt); die;
                            $result = $this->admin_payment_model->AddWallet($amt);
                            $result = $this->user_model->updateRegistration($user_id,array('capping' => '1'));
                        }
                    }
                    else  if($dwnl == 21 && $dwnr == 21){    
                        $tds = '21000' * 5/100  ;
                        $admin = '21000' * 5/100  ;
                        $e_wallet = '21000' * 5/100  ;
                        $amount = '21000' - $tds - $admin - $e_wallet;
                        $amt = array(
                            'user_id' => $user_id,
                            'amount'=> $amount,
                            'date' => $date,
                            'type' => 'capping'
                        );
//                        echo "<prE>"; print_r($dwnl);
                          echo "<prE>"; print_r($amt);
                        $result = $this->admin_payment_model->AddWallet($amt);
                        $result = $this->user_model->updateRegistration($user_id,array('capping' => '1'));
                    }
                    break;
                    
                case '21000':
                if($dwnl >= 28 && $dwnr >=28){
                         $onel = $dwnl - 28;
                        $twol = $dwnl - $onel;
                        $oner = $dwnr - 28;
                        $twor = $dwnr - $oner;
                        if($twol == 28 && $twor == 28 && $twol == $twor){
                            $tds = '28000' * 5/100  ;
                            $admin = '28000' * 5/100  ;
                            $e_wallet = '28000' * 5/100  ;
                            $amount = '21000' - $tds - $admin - $e_wallet;
                            $amt = array(
                                'user_id' => $user_id,
                                'amount'=> $amount,
                                'date' => $date,
                                'type' => 'capping'
                            );
                            $result = $this->admin_payment_model->AddWallet($amt);
                            $result = $this->user_model->updateRegistration($user_id,array('capping' => '2'));
                        }
                    }
                   else  if($dwnl == 28 && $dwnr == 28){
                        $tds = '28000' * 5/100  ;
                        $admin = '28000' * 5/100  ;
                        $e_wallet = '28000' * 5/100  ;
                        $amount = '28000' - $tds - $admin - $e_wallet;
                        $amt = array(
                            'user_id' => $user_id,
                            'amount'=> $amount,
                            'date' => $date,
                            'type' => 'capping'
                        );
                        //echo "<prE>"; print_r($amt);
                        $result = $this->admin_payment_model->AddWallet($amt);
                        $result = $this->user_model->updateRegistration($user_id,array('capping' => '2'));
                    }
                    break;
                    
                 case '42000':
                    if($dwnl >= 35 && $dwnr >=35){
                        $onel = $dwnl - 35;
                        $twol = $dwnl - $onel;
                        $oner = $dwnr - 35;
                        $twor = $dwnr - $oner;
                        $tds = '35000' * 5/100  ;
                        $admin = '35000' * 5/100  ;
                        $e_wallet = '35000' * 5/100  ;
                        $amount = '35000' - $tds - $admin - $e_wallet;
                        if($twol == 35 && $twor == 35 && $twol == $twor){
                            $amt = array(
                                'user_id' => $user_id,
                                'amount'=> $amount,
                                'date' => $date,
                                'type' => 'capping'
                            );
                            $result = $this->admin_payment_model->AddWallet($amt);
                            $result = $this->user_model->updateRegistration($user_id,array('capping' => '3'));
                        }
                    }
                    else  if($dwnl == 35 && $dwnr == 35){ 
                        $tds = '35000' * 5/100  ;
                        $admin = '35000' * 5/100  ;
                        $e_wallet = '35000' * 5/100  ;
                        $amount = '35000' - $tds - $admin - $e_wallet;
                        $amt = array(
                            'user_id' => $user_id,
                            'amount'=> $amount,
                            'date' => $date,
                            'type' => 'capping'
                        );
                        //echo "<prE>"; print_r($amt);
                        $result = $this->admin_payment_model->AddWallet($amt);
                        $result = $this->user_model->updateRegistration($user_id,array('capping' => '3'));
                    }
                    break;
                    
                case '84000':
                 if($dwnl >= 70 && $dwnr >=70){
                        $onel = $dwnl - 70;
                        $twol = $dwnl - $onel;
                        $oner = $dwnr - 70;
                        $twor = $dwnr - $oner;
                        if($twol == 70 && $twor == 70 && $twol == $twor){
                            $tds = '70000' * 5/100  ;
                            $admin = '70000' * 5/100  ;
                            $e_wallet = '70000' * 5/100  ;
                            $amount = '70000' - $tds - $admin - $e_wallet;
                            $amt = array(
                                'user_id' => $user_id,
                                'amount'=> $amount,
                                'date' => $date,
                                'type' => 'capping'
                            );
                            $result = $this->admin_payment_model->AddWallet($amt);
                            $result = $this->user_model->updateRegistration($user_id,array('capping' => '4'));
                        }
                    }
                    else  if($dwnl == 70 && $dwnr == 70){
                        $tds = '70000' * 5/100  ;
                        $admin = '70000' * 5/100  ;
                        $e_wallet = '70000' * 5/100  ;
                        $amount = '70000' - $tds - $admin - $e_wallet;
                        $amt = array(
                            'user_id' => $user_id,
                            'amount'=> $amount,
                            'date' => $date,
                            'type' => 'capping'
                        );
                       // echo "<prE>"; print_r($amt);
                        $result = $this->admin_payment_model->AddWallet($amt);
                        $result = $this->user_model->updateRegistration($user_id,array('capping' => '4'));
                    }
                    break;
        }
        
        $data['date_data'] = $this->admin_payment_model->getAwaordData($user_id);
	$aa_left = $this->admin_payment_model->getParentDataLeft($user_id, $data['date_data']->creation_date, $data['date_data']->check);
	$aa_right = $this->admin_payment_model->getParentDataRight($user_id, $data['date_data']->creation_date, $data['date_data']->check);
        $tdwonleft = $aa_left->downline;
        $tdwonright = $aa_right->downline;
        $date = date('Y-m-d');
       // echo "<prE>"; print_r($aa_left); 
       // echo "<prE>"; print_r($aa_right); die;
        if($tdwonleft >= 10 && $tdwonleft < 20 && $tdwonright >= 10 && $tdwonright < 20){
            if($tdwonleft == $tdwonright){
                $tds = '8000' * 5/100  ;
                $admin = '8000' * 5/100  ;
                $e_wallet = '8000' * 5/100  ;
                $amount = '8000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '1'));
            } 
        }
        else  if($tdwonleft >= 20 && $tdwonleft < 50 && $tdwonright >= 20 && $tdwonright < 50){
            if($tdwonleft == $tdwonright){
                $tds = '12800' * 5/100  ;
                $admin = '12800' * 5/100  ;
                $e_wallet = '12800' * 5/100  ;
                $amount = '12800' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '2'));
            } 
        }
        else  if($tdwonleft >= 50 && $tdwonleft < 100 && $tdwonright >= 50 && $tdwonright < 100){
            if($tdwonleft == $tdwonright){
                $tds = '32000' * 5/100  ;
                $admin = '32000' * 5/100  ;
                $e_wallet = '32000' * 5/100  ;
                $amount = '32000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '3'));
            } 
        }
        else  if($tdwonleft >= 100 && $tdwonleft < 250 && $tdwonright >= 100 && $tdwonright < 250){
            if($tdwonleft == $tdwonright){
                $tds = '120000' * 5/100  ;
                $admin = '120000' * 5/100  ;
                $e_wallet = '120000' * 5/100  ;
                $amount = '120000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '4'));
            } 
        }
        else  if($tdwonleft >= 250 && $tdwonleft < 1000 && $tdwonright >= 250 && $tdwonright < 1000){
            if($tdwonleft == $tdwonright){
                $tds = '360000' * 5/100  ;
                $admin = '360000' * 5/100  ;
                $e_wallet = '360000' * 5/100  ;
                $amount = '360000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '5'));
            } 
        }
        else  if($tdwonleft >= 1000 && $tdwonleft < 3000 && $tdwonright >= 1000 && $tdwonright < 3000){
            if($tdwonleft == $tdwonright){
                $tds = '1000000' * 5/100  ;
                $admin = '1000000' * 5/100  ;
                $e_wallet = '1000000' * 5/100  ;
                $amount = '1000000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '6'));
            } 
        }
        else  if($tdwonleft >= 3000 && $tdwonleft < 7500 && $tdwonright >= 3000 && $tdwonright < 7500){
            if($tdwonleft == $tdwonright){
                $tds = '2240000' * 5/100  ;
                $admin = '2240000' * 5/100  ;
                $e_wallet = '2240000' * 5/100  ;
                $amount = '2240000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '7'));
            } 
        }
        else  if($tdwonleft >= 7500 && $tdwonleft < 15000 && $tdwonright >= 7500 && $tdwonright < 15000){
            if($tdwonleft == $tdwonright){
                $tds = '4000000' * 5/100  ;
                $admin = '4000000' * 5/100  ;
                $e_wallet = '4000000' * 5/100  ;
                $amount = '4000000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '8'));
            } 
        }
        else  if($tdwonleft >= 15000 && $tdwonleft < 35000 && $tdwonright >= 15000 && $tdwonright < 35000){
            if($tdwonleft == $tdwonright){
                $tds = '7200000' * 5/100  ;
                $admin = '7200000' * 5/100  ;
                $e_wallet = '7200000' * 5/100  ;
                $amount = '7200000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '9'));
            } 
        }
        else  if($tdwonleft >= 35000 && $tdwonleft < 75000 && $tdwonright >= 35000 && $tdwonright < 75000){
            if($tdwonleft == $tdwonright){
                $tds = '16000000' * 5/100  ;
                $admin = '16000000' * 5/100  ;
                $e_wallet = '16000000' * 5/100  ;
                $amount = '16000000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '10'));
            } 
        }
        else  if($tdwonleft == 75000 && $tdwonright == 75000){
            if($tdwonleft == $tdwonright){
                $tds = '40000000' * 5/100  ;
                $admin = '40000000' * 5/100  ;
                $e_wallet = '40000000' * 5/100  ;
                $amount = '40000000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id,array('award' => '11'));
            } 
        }

        
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
                'creation_date' => $date,
                'status' => $this->input->post('status')
            );

            //echo "<pre>";print_r($user_data);die;
            $position = $this->input->post('select_position');
            $upliner = $this->input->post('upliner_id');
            $reg = $this->user_model->getRegistration($upliner);
            $downline = $reg->downline;
            $tdownline = $downline + 1;
            $down = array(
                'downline' => $tdownline
            );
            $result = $this->user_model->updateRegistration($upliner, $down);
            $reg_order = $this->user_model->getRegistrationOrderBy($upliner);

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
                $down = array(
                    'downline' => $tdown
                );
                $result = $this->user_model->updateRegistration($upid, $down);
                goto label;
                //echo "<pre>"; print_r($reg2); die;
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
                    $upid = $reg1->upliner_id;

                    if ($upid == '0') {
                        break;
                    }
                    $reg2 = $this->user_model->getRegistration($upid);
                    $left_d = $reg2->left_d;

                    $tleft_d = $left_d + 1;

                    $id = $upid;
                    $ldown = array(
                        'left_d' => $tleft_d
                    );
                   // echo "<prE>"; print_r($ldown); die;
                       $result = $this->user_model->updateRegistration($upid, $ldown);
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
                    $upid = $reg1->upliner_id;
                    if ($upid == '0') {
                        break;
                    }
                    $reg2 = $this->user_model->getRegistration($upid);
                    $right_d = $reg2->right_d;
                    $tright_d = $right_d + 1;
                    $id = $upid;
                    $rdown = array(
                        'right_d' => $tright_d
                    );
    //                echo "<pre>"; print_r($rdown);
                       $result = $this->user_model->updateRegistration($upid, $rdown);
                    goto label2;                 
                }
              //  die;
            }
            $reg3 = $this->user_model->getRegistration($user_id);
            $left_d = $reg3->left_d;
            $right_d = $reg3->right_d;
            //echo "<pre>"; print_r($reg3); die;
            if($left_d == 2 && $right_d == 1 || $left_d == 1 && $right_d == 2)
            {
                $amt = array(
                    'user_id' => $user_id,
                    'amount'=> 1000,
                    'date' => $date,
                    'type' => 'binary'
                );
//                echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
            }
            else if($left_d != 2 && $right_d != 1 || $left_d != 1 && $right_d != 2)
            {  
                if($left_d < $right_d)
                {                                                                        
                    $l = $right_d - $left_d;
                    $tl = $right_d - $l;
                    if($tl == $left_d)
                    {
//                        echo "<pre>Left:- "; print_r($left_d);  die;
                        $amt = array(
                        'user_id' => $user_id,
                        'amount'=> 1000,
                        'date' => $date,
                        'type' => 'binary'
                        );
    //                  echo "<prE>"; print_r($amt); die;
                        $result = $this->admin_payment_model->AddWallet($amt);
                    }
                }
                else if($right_d < $left_d)
                {
                    $r = $left_d - $right_d;
                    $tr = $left_d - $r;
                    if($tr == $right_d)
                    {
//                        echo "<pre>Right:- "; print_r($right_d);  die;
                        $amt = array(
                        'user_id' => $user_id,
                        'amount'=> 1000,
                        'date' => $date,
                        'type' => 'binary'
                        );
    //                  echo "<prE>"; print_r($amt); die;
                        $result = $this->admin_payment_model->AddWallet($amt);
                    }                                                       
                }
                else if($right_d == $left_d)
                {
                   $amt = array(
                    'user_id' => $user_id,
                    'amount'=> 1000,
                    'date' => $date,
                    'type' => 'binary'
                    );
//                  echo "<prE>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);                                                       
                }
            }
           
            
            //echo "<pre>"; print_r($reg_order); die;
            $user_data['binary_pair'] = $user_id;

            $check = $this->input->post('email_id');


            if ($check) {
                $user_id = 'BI' . $this->RandomString(8);
                $password = $this->RandomStringTokan(10);
                $txn_password = $this->RandomStringTokan(10);
                $message = 'This is your User ID. ' . $user_id
                        . ' This is your Password. ' . $password
                        . ' This is your transaction Password. ' . $txn_password
                        . ' Thanks.';
                //$message = $this->load->view('admin/email_data',$data,true);//base_url('admin/email_data.php');
                //echo "<pre>"; print_r($message['message']); die;
                $user_data['password'] = md5($password);
                $user_data['txn_password'] = md5($txn_password);
                $user_data['user_id'] = $user_id;

                //$send=$this->common->sendMail($check, "your User ID & your Password", $message);
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'From: Your name <info@address.com>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                //$send = mail("$check","your User ID",$message,$headers);
                // echo "<pre>"; print_r($send); die;
                //if($send){
                // echo "<pre>"; print_r($send); die;
                $result = $this->user_model->addRegistration($user_data);
//                if ($result) {
//                    $w_data = array(
//                        'user_id' => $result,
//                        'amount' => '1000',
//                        'date' => date("Y-m-d"),
//                        'type' => 'binary',
//                        'status' => 1
//                    );
//                    $result = $this->admin_payment_model->AddWallet($w_data);
//                }
                // }
                // echo "<pre>"; print_r($result); die;
                // $result = $this->user_model->addRegistration($user_data);

                if ($result) {
                    $this->session->set_flashdata('success', "Register Added Successfully.");
                    redirect(base_url('admin1/user'));
                } else {
                    $this->session->set_flashdata('error', "Error While Inserting Record.");
                    redirect(base_url('admin1/user'));
                }
            }
        }
        $this->load->view('admin1/admin_master', $data);
    }

    public function kyc_details() {
        $id = $_SESSION['user_id'];
        // echo "<prE>"; print_r($id); die;
        //if (!$this->session->userdata('admin_id'))
        //redirect('admin1/home');
        $data['data'] = $this->user_model->getRegistrationDataById($id);
        //echo "<prE>"; print_r($data); die;

        $data['view'] = 'admin1/user/kyc_details';
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
                redirect(base_url('admin1/user/kyc_details'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('admin1/user/kyc_details'));
            }
        }
        $this->load->view('admin1/admin_master', $data);
    }

    public function shipping_details() {
        $id = $_SESSION['user_id'];

        //if (!$this->session->userdata('admin_id'))
        //redirect('admin1/home');
        $data['data'] = $this->user_model->getRegistrationDataById($id);
        $data['countrie_data'] = $this->user_model->getAllCountries();
        //echo "<prE>"; print_r($data); die;

        $data['view'] = 'admin1/user/shipping_details';

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
                redirect(base_url('admin1/user/shipping_details'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('admin1/user/shipping_details'));
            }
        }
        $this->load->view('admin1/admin_master', $data);
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
        //redirect('admin1/home');
        $data['bank_data'] = $this->user_model->getAllBank();
        //echo "<prE>"; print_r($data); die;

        $data['view'] = 'admin1/user/bank_detail';
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
                redirect(base_url('admin1/user/bank_detail'));
            } else {
                $this->session->set_flashdata('error', "Error While Inserting Record.");
                redirect(base_url('admin1/user/bank_detail'));
            }
        }
        $this->load->view('admin1/admin_master', $data);
    }

    public function change_password() {
        if (isset($_POST) && !empty($_POST)) {
            $data = array(
                'password' => md5($this->input->post('newpassword'))
            );
            $id = $this->session->userdata('user_id');
            //echo "<pre>"; print_r($id); die;
            $this->user_model->updateRegistration($id, $data);
            redirect('admin1/user/change_password');
        } else {
            $data['view'] = 'admin1/user/changepassword';
            $this->load->view('admin1/admin_master', $data);
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
            redirect('admin1/user/txn_password');
        } else {
            $data['view'] = 'admin1/user/txn_password';
            $this->load->view('admin1/admin_master', $data);
        }
    }

    public function user_list() {

        $data['user_data'] = $this->user_model->getAllRegistrationAdmin();
        //$data['bank_data'] = $this->user_model->getBankDetailByUserid($user_id);
        // echo "<prE>"; print_r($data); die;
        $data['view'] = 'admin1/user/user_list';
        $this->load->view('admin1/admin_master', $data);
    }

    public function my_documents() {
        $user_id = $this->session->userdata('user_id');
        $data['aadhar_data'] = $this->user_model->getAadharByUserid($user_id);
        $data['bank_data'] = $this->user_model->getBankDetailByUserid($user_id);
        // echo "<prE>"; print_r($data); die;
        $data['view'] = 'admin1/user/my_documents';
        $this->load->view('admin1/admin_master', $data);
    }

    public function getUplinerName() {
        $primary_customer = $_POST['primary_customer'] + 0;
        //echo '<pre>'; print_r($primary_customer); die;
        if ($primary_customer) {
            $data['name_data'] = $this->user_model->getRegistration($primary_customer);
            //echo '<pre>'; print_r($data['mobile_data']); die;
            echo json_encode(array('view' => $this->load->view('admin1/user/ajax_name', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }

    public function getRefferalName() {
        $primary_customer = $_POST['primary_customer'] + 0;
        //echo '<pre>'; print_r($primary_customer); die;
        if ($primary_customer) {
            $data['refferal_data'] = $this->user_model->getRegistration($primary_customer);
            //echo '<pre>'; print_r($data['mobile_data']); die;
            echo json_encode(array('view' => $this->load->view('admin1/user/ajax_name', $data, true)));
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
            echo json_encode(array('view' => $this->load->view('admin1/user/ajax_state', $data, true)));
            //echo '<pre>'; print_r($primary_customer); die;
//echo $data['mobile_data']->site_id;
        }
    }

    public function user_payment_update($id) {
        //echo "<pre>"; print_r($id); die;
        $data = array(
            'payment_status' => 1
        );
        $this->user_model->updateRegistration($id, $data);
        redirect('admin1/user/user_list');
    }

    public function capping_payment_update($id) {
        //echo "<pre>"; print_r($id); die;
        $data = array(
            'status' => 1
        );
        $this->user_model->updateWallet($id, $data);
        redirect('admin1/capping');
    }

}
