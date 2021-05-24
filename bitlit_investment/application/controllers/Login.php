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
		// die;
        if ($this->session->userdata('admin_id'))
            redirect('home');
        $this->form_validation->set_rules('user_id', 'User Id', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');

        $this->form_validation->set_error_delimiters('', '');
        $data['msg'] = '';
        if ($this->form_validation->run() == TRUE) {
            $user_id = $_POST['user_id'];
            $password = md5($_POST['pwd']);
            // $data = $this->login_model->getRegistrationLogin($user_id, $password);
			// print_r($password); die;
            if ($data) {
                $this->session->set_userdata('user_id', $data->id);
                $this->session->set_userdata('user_data', $data);
                $login_id = $this->session->userdata('user_id');

                $total = 0;
                $activatedate = $data->activate_date;
                if ($data->payment) {
                    if ($data->upliner_id != 0) {
//***********************  Royalty Income ******************************\\


                        $id = $data->id;
                        $date = date('Y-m-d');
                        $mytotal_amount = $this->admin_payment_model->getTotalMyamountById($id);
                        $royalty_data = $this->user_model->getRoyaltyData($id);
                        $royalty_data_by_date = $this->user_model->getRoyaltyDataByDate($id);
                        $royalty_status = $this->user_model->getRoyaltyStatus($id);
                        $sponcer = 0;
                        $tsp = 0;
                        $sp = 0;
                        $l = 0;
                        $r = 0;
                        $rstatus = $royalty_status->royalty;
                        $payment_data = $this->user_model->getPaymentData($id);
                        $login_data = $this->user_model->getJoiningDate($id);
                        $left = $login_data->left_d;
                        $right = $login_data->right_d;
                        $roy_data = $this->user_model->getRoyaltyAllData($id);
                        $wallet_data = $this->user_model->checkRyalityData($id);
                        if ($wallet_data) {
                            $spo = $wallet_data->sponcer;
                        } else {
                            $spo = 0;
                        }
                        foreach ($payment_data as $row) {

                            $sp = $row->payment;
                            if ($sp == 10500) {
                                $sponcer = $sponcer + 1;
                            } else if ($sp == 21000) {
                                $sponcer = $sponcer + 2;
                            } else if ($sp == 42000) {
                                $sponcer = $sponcer + 4;
                            } else if ($sp == 84000) {
                                $sponcer = $sponcer + 8;
                            }
                        }
						// echo "<pre>"; print_r($payment_data); die;
                        $current_date = date("Y-m-d");

                        for ($i = 0, $j = 1; $i < 24, $j <= 24; $i++, $j++) {
                            if ($royalty_data_by_date) {
                                $lastjoindate = $royalty_data_by_date->creation_date;
                                if ($lastjoindate >= $activatedate) {
                                    $last_date = date("Y-m-d", strtotime($lastjoindate . " +25 months"));
                                    $next_date = date("Y-m-d", strtotime($lastjoindate . " +" . $i . " months"));
                                    $second_next_date = date("Y-m-d", strtotime($next_date . " +" . $j . " months"));
                                    if ($second_next_date == $current_date) {
                                        $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                    }
                                    if ($next_date == $current_date) {
                                        if ($sponcer > $spo) {
                                            $s = $sponcer - $spo;

                                            if ($s != 1) {
                                                $t = $s % 2;
                                                if ($t == 0) {
                                                    $ta = $s * 1000;
                                                    $amt = array(
                                                        'user_id' => $id,
                                                        'amount' => $ta,
                                                        'date' => $date,
                                                        'type' => 'royalty',
                                                        'left_d' => $left,
                                                        'right_d' => $right,
                                                        'sponcer' => $sponcer
                                                    );
                                                    if ($sponcer != $spo) {
                                                        $total = $total + $ta;
                                                        $result = $this->admin_payment_model->AddWallet($amt);
                                                        $result = $this->user_model->updateRegistration($id, array('royalty' => '1'));
                                                    }
                                                } else if ($t == 1) {
                                                    $ms = $s - 1;
                                                    $ta = $ms * 1000;
                                                    $amt = array(
                                                        'user_id' => $id,
                                                        'amount' => $ta,
                                                        'date' => $date,
                                                        'type' => 'royalty',
                                                        'left_d' => $left,
                                                        'right_d' => $right,
                                                        'sponcer' => $sponcer
                                                    );
                                                    if ($sponcer != $spo) {
                                                        $total = $total + $ta;

                                                        $result = $this->admin_payment_model->AddWallet($amt);
                                                        $result = $this->user_model->updateRegistration($id, array('royalty' => '1'));
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        //die;
                        //***********************  Royalty Income ******************************\\
                        //******************* Award-Reward Data ********************\\
                        $joining_date = $this->user_model->getJoiningDate($id);
                        $jdate = $joining_date->creation_date;
                        $award_data_left = $this->user_model->getAwardDataLeft($id, $activatedate);
                        $award_data_right = $this->user_model->getAwardDataRight($id, $activatedate);
                        $wallet_data = $this->user_model->checkAwardData($id);
                        if ($wallet_data) {
                            $spo = $wallet_data->sponcer;
                        } else {
                            $spo = 0;
                        }
                        foreach ($award_data_left as $row) {
                            $left = $row->downline;
                        }
                        $left = $left + 1;
                        foreach ($award_data_right as $row1) {
                            $right = $row1->downline;
                        }
                        $right = $right + 1;

                        if ($left == $right) {
                            $pair = $left;
                        } else if ($left < $right) {
                            $l = $right - $left;
                            $r = $right - $l;
                            $pair = $r;
                        } else if ($right < $left) {
                            $l = $left - $right;
                            $r = $left - $l;
                            $pair = $r;
                        }

                        $last_date = date("Y-m-d", strtotime($jdate . " +45 days"));
                        $end_last_date = date("Y-m-d", strtotime($last_date . " +90 days"));
                        $awardstatus = $joining_date->award;
                        if ($last_date != $date) {
                            if (($pair >= 10 && $pair < 20) && $awardstatus == 0) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 8000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 10 && $p < 20) {
                                    $total = $total + 8000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '1'));
                                }
                            } else if ($pair >= 20 && $pair < 50) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 12800,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 20 && $p < 50) {
                                    $total = $total + 12800;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '2'));
                                }
                            } else if ($pair >= 50 && $pair < 100) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 32000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 50 && $p < 100) {
                                    $total = $total + 32000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '3'));
                                }
                            } else if ($pair >= 100 && $pair < 250) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 120000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 100 && $p < 250) {
                                    $total = $total + 120000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '4'));
                                }
                            } else if ($pair >= 250 && $pair < 1000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 360000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 250 && $p < 1000) {
                                    $total = $total + 360000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '5'));
                                }
                            } else if ($pair >= 1000 && $pair < 3000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 1000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 1000 && $p < 3000) {
                                    $total = $total + 1000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '6'));
                                }
                            } else if ($pair >= 3000 && $pair < 7500) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 2240000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 3000 && $p < 7500) {
                                    $total = $total + 2240000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '7'));
                                }
                            } else if ($pair >= 7500 && $pair < 15000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 4000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 7500 && $p < 15000) {
                                    $total = $total + 4000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '8'));
                                }
                            } else if ($pair >= 15000 && $pair < 35000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 7200000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 15000 && $p < 35000) {
                                    $total = $total + 7200000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '9'));
                                }
                            } else if ($pair >= 35000 && $pair < 75000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 16000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 35000 && $p < 75000) {
                                    $total = $total + 16000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '10'));
                                }
                            } else if ($pair >= 75000) {
                                $pair = 75000;
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 40000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 75000) {
                                    $total = $total + 40000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '11'));
                                }
                            }
                        } else if ($end_last_date != $date) {
                            if ($pair >= 10 && $pair < 20 && $awardstatus == 0) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 4000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 10 && $p < 20) {
                                    $total = $total + 4000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '1'));
                                }
                            } else if ($pair >= 20 && $pair < 50) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 6400,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 20 && $p < 50) {
                                    $total = $total + 6400;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '2'));
                                }
                            } else if ($pair >= 50 && $pair < 100) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 16000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 50 && $p < 100) {
                                    $total = $total + 16000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '3'));
                                }
                            } else if ($pair >= 100 && $pair < 250) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 60000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 100 && $p < 250) {
                                    $total = $total + 60000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '4'));
                                }
                            } else if ($pair >= 250 && $pair < 1000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 180000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 250 && $p < 1000) {
                                    $total = $total + 180000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '5'));
                                }
                            } else if ($pair >= 1000 && $pair < 3000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 1000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 1000 && $p < 3000) {
                                    $total = $total + 1000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '6'));
                                }
                            } else if ($pair >= 3000 && $pair < 7500) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 2240000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 3000 && $p < 7500) {
                                    $total = $total + 2240000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '7'));
                                }
                            } else if ($pair >= 7500 && $pair < 15000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 4000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 7500 && $p < 15000) {
                                    $total = $total + 4000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '8'));
                                }
                            } else if ($pair >= 15000 && $pair < 35000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 7200000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 15000 && $p < 35000) {
                                    $total = $total + 7200000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '9'));
                                }
                            } else if ($pair >= 35000 && $pair < 75000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 16000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 35000 && $p < 75000) {
                                    $total = $total + 16000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '10'));
                                }
                            } else if ($pair >= 75000) {
                                $pair = 75000;
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 40000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 75000) {
                                    $total = $total + 40000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '11'));
                                }
                            }
                        } else {
                            if ($pair >= 10 && $pair < 20 && $awardstatus == 0) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 4000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 10 && $p < 20) {
                                    $total = $total + 4000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '1'));
                                }
                            } else if ($pair >= 20 && $pair < 50) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 6400,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 20 && $p < 50) {
                                    $total = $total + 6400;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '2'));
                                }
                            } else if ($pair >= 50 && $pair < 100) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 16000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 50 && $p < 100) {
                                    $total = $total + 16000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '3'));
                                }
                            } else if ($pair >= 100 && $pair < 250) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 60000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 100 && $p < 250) {
                                    $total = $total + 60000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '4'));
                                }
                            } else if ($pair >= 250 && $pair < 1000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 180000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 250 && $p < 1000) {
                                    $total = $total + 180000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '5'));
                                }
                            } else if ($pair >= 1000 && $pair < 3000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 500000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 1000 && $p < 3000) {
                                    $total = $total + 500000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '6'));
                                }
                            } else if ($pair >= 3000 && $pair < 7500) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 1120000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 3000 && $p < 7500) {
                                    $total = $total + 1120000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '7'));
                                }
                            } else if ($pair >= 7500 && $pair < 15000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 2000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 7500 && $p < 15000) {
                                    $total = $total + 2000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '8'));
                                }
                            } else if ($pair >= 15000 && $pair < 35000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 3600000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 15000 && $p < 35000) {
                                    $total = $total + 3600000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '9'));
                                }
                            } else if ($pair >= 35000 && $pair < 75000) {
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 8000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 35000 && $p < 75000) {
                                    $total = $total + 8000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '10'));
                                }
                            } else if ($pair >= 75000) {
                                $pair = 75000;
                                $p = $pair - $spo;
                                if ($last_date == $date) {
                                    $result = $this->user_model->UpdateWallet($id, array('status' => '1'));
                                }
                                $amt = array(
                                    'user_id' => $id,
                                    'amount' => 20000000,
                                    'date' => $date,
                                    'type' => 'aword',
                                    'left_d' => $left,
                                    'right_d' => $right,
                                    'sponcer' => $p
                                );
                                if ($p >= 75000) {
                                    $total = $total + 20000000;
                                    $result = $this->admin_payment_model->AddWallet($amt);
                                    $result = $this->user_model->updateRegistration($id, array('award' => '11'));
                                }
                            }
                        }

                        //******************* Award-Reward Data ********************\\
                        // ***********************  Binary Income *********************** \\
                        $date = date('Y-m-d');
                        $joining_date = $this->user_model->getJoiningDate($id);
                        $jdate = $joining_date->creation_date;
                        $last_date = date("Y-m-d", strtotime($jdate . " +7 days"));
                        $login_data = $this->user_model->getJoiningDate($id);
                        if ($login_data->payment_status == 1) {
                            $binary_income_left = $this->user_model->getBinaryDataLeft($id, $activatedate, $date);							
                            $binary_income_right = $this->user_model->getBinaryDataRight($id, $activatedate, $date);
							if ($binary_income_left) {
                                $bleft = $binary_income_left->left_id;								
                            }
							
							if($binary_income_right)
							{
								$bright = $binary_income_right->right_id;	
							}													
							$bin_status = $joining_date->binary_status;
                            $wallet_data = $this->user_model->checkBinaryData($id);
                            $bin = $id;
                            if ($wallet_data) {
                                $spo = $wallet_data->sponcer;
                            } else {
                                $spo = 0;
                            }
                           if ($bleft != 0 && $bright != 0) {
                                if (($bleft == 1 && $bright == 2 || $bleft == 2 && $bright == 1) && ($bin_status == '0')) {

                                    if ($last_date == $date) {
                                        $result = $this->user_model->UpdateWalletBinary($id, array('status' => '1'));
                                    }
                                    $st = $bleft + $bright;
                                    $amt = array(
                                        'user_id' => $bin,
                                        'amount' => 1000,
                                        'date' => $date,
                                        'type' => 'binary',
                                        'left_d' => $bleft,
                                        'right_d' => $bright,
                                        'sponcer' => $st
                                    );
                                    if ($wallet_data) {
                                        if (($st != $spo) && $wallet_data->type == 'binary') {
                                            $total = $total + 1000;
                                            echo "<pre>6";
                                            print_r($amt);
                                            $result1 = $this->admin_payment_model->AddWallet($amt);
                                            //$result = $this->user_model->UpdateWalletBinary($id, $amt);
                                            //$result2 = $this->user_model->updateRegistration($bin, array('binary_status' => '1'));
                                        }
                                    } else {
                                        echo "<pre>6ddd";
                                        print_r($amt);
                                        $total = $total + 1000;
                                        $result1 = $this->admin_payment_model->AddWallet($amt);
                                    }
                                } else if (($bright == $bleft) && ($bleft != 2 && $bright != 2) && ($bleft != 1 && $bright != 1) && ($bin_status == '0')) {
                                    $pair = $bleft;

                                    if ($last_date == $date) {
                                        $result = $this->user_model->UpdateWalletBinary($id, array('status' => '1'));
                                    }
                                    $st = $bleft + $bright;

                                    if ($login_data->payment == '10500') {
                                        if ($pair >= 21) {
                                            $pairs = 21;
                                        } else {
                                            $pairs = $pair - 1;
                                        }
                                    } else if ($login_data->payment == '21000') {
                                        if ($pair >= 28) {
                                            $pairs = 28;
                                        } else {
                                            $pairs = $pair - 1;
                                        }
                                    } else if ($login_data->payment == '42000') {
                                        if ($pair >= 35) {
                                            $pairs = 35;
                                        } else {
                                            $pairs = $pair - 1;
                                        }
                                    } else if ($login_data->payment == '84000') {
                                        if ($pair >= 70) {
                                            $pairs = 70;
                                        } else {
                                            $pairs = $pair - 1;
                                        }
                                    }
                                    $a = $pairs * 1000;
                                    $amt = array(
                                        'user_id' => $bin,
                                        'amount' => $a,
                                        'date' => $date,
                                        'type' => 'binary',
                                        'left_d' => $bleft,
                                        'right_d' => $bright,
                                        'sponcer' => $st
                                    );
                                    if ($wallet_data) {
                                        if (($st != $spo) && $wallet_data->type == 'binary') {
                                            $total = $total + $a;
                                            $result1 = $this->admin_payment_model->AddWallet($amt);
                                            //$result = $this->user_model->UpdateWalletBinary($id, $amt);
                                            //$result2 = $this->user_model->updateRegistration($bin, array('binary_status' => '1'));
                                        }
                                    } else {
                                        if ($wallet_data->user_id != $id) {
                                            echo "<pre>6ddd";
                                            print_r($amt);
                                            $total = $total + $a;
                                            $result1 = $this->admin_payment_model->AddWallet($amt);
                                        }
                                    }
                                } else if (($bleft > $bright) && ($bright == 1) && $bin_status == '0') {

                                    if ($last_date == $date) {
                                        $result = $this->user_model->UpdateWalletBinary($id, array('status' => '1'));
                                    }
                                    $l = $bleft - 2;
                                    $t = $bleft - $l;
                                    if ($t == 2 && $bright == 1) {
                                        $st = $t + $bright;
                                        $amt = array(
                                            'user_id' => $bin,
                                            'amount' => 1000,
                                            'date' => $date,
                                            'type' => 'binary',
                                            'left_d' => $t,
                                            'right_d' => $bright,
                                            'sponcer' => $st
                                        );
                                        if ($wallet_data) {
                                            if (($st != $spo) && $wallet_data->type == 'binary') {
                                                $total = $total + 1000;
                                                echo "<pre>6";
                                                print_r($amt);
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                                //$result = $this->user_model->UpdateWalletBinary($id, $amt);
                                                //$result2 = $this->user_model->updateRegistration($bin, array('binary_status' => '1'));
                                            }
                                        } else {
                                            if ($wallet_data->user_id != $id) {
                                                echo "<pre>6ddd";
                                                print_r($amt);
                                                $total = $total + 1000;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                            }
                                        }
                                    }
                                } else if (($bright > $bleft) && ($bleft == 1) && $bin_status == '0') {
                                    if ($last_date == $date) {
                                        $result = $this->user_model->UpdateWalletBinary($id, array('status' => '1'));
                                    }
                                    $l = $bright - 2;
                                    $t = $bright - $l;
                                    if ($t == 2 && $bleft == 1) {
                                        $st = $bleft + $t;
                                        $amt = array(
                                            'user_id' => $bin,
                                            'amount' => 1000,
                                            'date' => $date,
                                            'type' => 'binary',
                                            'left_d' => $t,
                                            'right_d' => $bright,
                                            'sponcer' => $st
                                        );
                                        if ($wallet_data) {
                                            if (($st != $spo) && $wallet_data->type == 'binary') {
                                                $total = $total + 1000;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                                //$result = $this->user_model->UpdateWalletBinary($id, $amt);
                                                //$result2 = $this->user_model->updateRegistration($bin, array('binary_status' => '1'));
                                            }
                                        } else {
                                            if ($wallet_data->user_id != $id) {
                                                echo "<pre>6ddd";
                                                print_r($amt);
                                                $total = $total + 1000;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                            }
                                        }
                                    }
                                } else if (($bright < $bleft) && ($bleft != 2 && $bright != 1) && ($bin_status == '0')) {

                                    if ($last_date == $date) {
                                        $result = $this->user_model->UpdateWalletBinary($id, array('status' => '1'));
                                    }
                                    $l = $bleft - $bright;
                                    $t = $bleft - $l;
                                    $x = $t - 1;

                                    if ($x) {
                                        $st = $t + $bright;

                                        if ($login_data->payment == '10500') {
                                            if ($pair >= 21) {
                                                $pairs = 21;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        } else if ($login_data->payment == '21000') {
                                            if ($pair >= 28) {
                                                $pairs = 28;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        } else if ($login_data->payment == '42000') {
                                            if ($pair >= 35) {
                                                $pairs = 35;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        } else if ($login_data->payment == '84000') {
                                            if ($pair >= 70) {
                                                $pairs = 70;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        }
                                        $a = $pairs * 1000;
                                        $amt = array(
                                            'user_id' => $bin,
                                            'amount' => $a,
                                            'date' => $date,
                                            'type' => 'binary',
                                            'left_d' => $bleft,
                                            'right_d' => $bright,
                                            'sponcer' => $st
                                        );

                                        if ($wallet_data) {
                                            if (($st != $spo && $wallet_data->type == 'binary')) {
                                                $total = $total + $a;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                                //$result = $this->user_model->UpdateWalletBinary($id, $amt);
                                                //$result2 = $this->user_model->updateRegistration($bin, array('binary_status' => '1'));
                                            }
                                        } else {

                                            if ($wallet_data->user_id != $id) {
                                                $total = $total + $a;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                            }
                                        }
                                    }
                                } else if (($bleft < $bright) && ($bleft != 1 && $bright != 2) && $bin_status == '0') {
                                    if ($last_date == $date) {
                                        $result = $this->user_model->UpdateWalletBinary($id, array('status' => '1'));
                                    }
                                    $l = $bright - $bleft;
                                    $t = $bright - $l;
                                    $x = $t - 1;
                                    if ($x) {
                                        $st = $t + $bright;
                                        if ($login_data->payment == '10500') {
                                            if ($pair >= 21) {
                                                $pairs = 21;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        } else if ($login_data->payment == '21000') {
                                            if ($pair >= 28) {
                                                $pairs = 28;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        } else if ($login_data->payment == '42000') {
                                            if ($pair >= 35) {
                                                $pairs = 35;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        } else if ($login_data->payment == '84000') {
                                            if ($pair >= 70) {
                                                $pairs = 70;
                                            } else {
                                                $pairs = $pair - 1;
                                            }
                                        }
                                        $a = $pairs * 1000;
                                        $amt = array(
                                            'user_id' => $bin,
                                            'amount' => $a,
                                            'date' => $date,
                                            'type' => 'binary',
                                            'left_d' => $bleft,
                                            'right_d' => $bright,
                                            'sponcer' => $st
                                        );
                                        if ($wallet_data) {
                                            if (($st != $spo && $wallet_data->type == 'binary')) {
                                                $total = $total + $a;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                                //$result = $this->user_model->UpdateWalletBinary($id, $amt);
                                                //$result2 = $this->user_model->updateRegistration($bin, array('binary_status' => '1'));
                                            }
                                        } else {
                                            if ($wallet_data->user_id != $id) {
                                                $total = $total + $a;
                                                $result1 = $this->admin_payment_model->AddWallet($amt);
                                            }
                                        }
                                    }
                                }
                            }                            
                        }
                        // ***********************  Binary Income *********************** \\                    
                    }
                    if ($total != 0) {
                        if ($mytotal_amount) {
                            $crt = $mytotal_amount->credit;
                            $aid = $mytotal_amount->user_id;
                        } else {
                            $crt = 0;
                            $aid = $id;
                        }

                        $crd = $crt + $total;
                        $deb = 0;
                        $tol = $crd;
                        $uid = $aid;
                        echo "<pre>total";
                        print_r($total);
                        echo "<pre>crd";
                        print_r($crd);
                        echo "<pre>tol";
                        print_r($tol);
                        echo "<pre>uid";
                        print_r($uid);
                        echo "<pre>crt";
                        print_r($crt);
                        if ($crt != 0) {
                            $pay_data = array(
                                'user_id' => $uid,
                                'credit' => $crd,
                                'debit' => $deb,
                                'total' => $tol
                            );
                            echo "<pre>1";
                            print_r($pay_data);
                            $result = $this->admin_payment_model->UpdateTotalMyamountById($id, $pay_data);
                        } else {
                            $pay_data = array(
                                'user_id' => $uid,
                                'credit' => $crd,
                                'debit' => 0,
                                'total' => $tol
                            );
                            echo "<pre>2";
                            print_r($pay_data);
                            $result = $this->admin_payment_model->addTotalMyamount($pay_data);
                        }
                    }
                }
                //die;
                redirect('home');
            } else {
                $this->session->set_flashdata('msg', "User Id or Password did not matched");
                $data['msg'] = 'User Id and Password did not matched.';
            }
        }
        $this->load->view('login/login', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function change_password() {
        if (isset($_POST) && !empty($_POST)) {
            $data = array(
                'pwd' => base64_encode($this->input->post('newpassword')),
                'password' => md5($this->input->post('newpassword'))
            );
            $id = $this->session->userdata('user_id');
            $this->login_model->updatePasswordById($id, $data);
            redirect('login');
        } else {
            $data['view'] = 'login/changepassword';
            $this->load->view('admin_master', $data);
        }
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

    public function forgotpassword() {
        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        $this->form_validation->set_rules('user_id', 'User Id', 'callback_user_id_check');
        if ($this->form_validation->run() == TRUE) {
            if (isset($_POST) && !empty($_POST)) {
                $user_id = $_POST['user_id'];
                $check = $this->login_model->getLoginByUserId($user_id);
                $email = $check->email_id;
                $new_password = $this->common->generatePassword();

                $message = 'Username : ' . $user_id
                        . ' New Password : ' . $new_password;

                $data = array(
                    'pwd' => base64_encode($this->input->post('newpassword')),
                    'password' => md5($new_password)
                );
                $send = mail("$email", "your New Password", "$message");
                if ($send) {
                    $this->login_model->updatePassword($user_id, $data);
                }
                $this->common->sendMail($mailid,' | New Password', $message);
                redirect('login');
            } else {
                
            }
        }
        $this->load->view('login/forgotpassword');
    }

    function user_id_check($str) {
        if ($this->login_model->getCheckUserId($str)) {
            return true;
        } else {
            $this->form_validation->set_message('user_id_check', 'The  %s is Inncorrect.');
            return false;
        }
    }

    public function RandomString($length = 8) {
        //$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function sign_up() {

        $this->form_validation->set_error_delimiters('<div id="alrt" class="alert alert-danger" style="padding:5px;margin-top:5px;">', '</div>');

        //$this->form_validation->set_rules('upliner_id', 'Select Upliner Id', 'required');
        //$this->form_validation->set_rules('refferal_id', 'Select Refferal_Id', 'required');
        $this->form_validation->set_rules('select_position', 'Select Position', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required');
        $this->form_validation->set_rules('member_name', 'Member Name', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required');
        $upliner = $this->user_model->getRegistrationDataByUpliner();

        if ($this->form_validation->run() == TRUE) {
            $user_id = 'BI' . $this->RandomString(8);
            $password = $this->RandomStringTokan(10);
            $txn_password = $this->RandomStringTokan(10);
            $upliner = $this->user_model->getRegistrationDataByUpliner();
            $upliner = $this->user_model->getRegistrationDataByUpliner();
            $user_data = array(
                //'parent_id' => $user_id,

                'upliner_id' => $upliner->id,
                'refferal_id' => $upliner->id,
                'select_position' => $this->input->post('select_position'),
                'email_id' => $this->input->post('email_id'),
                'mobile_no' => $this->input->post('mobile_no'),
                'member_name' => $this->input->post('member_name'),
                'father_name' => $this->input->post('father_name'),
                'creation_date' => date('Y-m-d'),
                    //'status' => $this->input->post('status')
            );
            $user_data['password'] = md5($password);
            $user_data['txn_password'] = md5($txn_password);
            $user_data['user_id'] = $user_id;
            $user_data['pwd'] = base64_encode($password);
            $user_data['txn_pwd'] = base64_encode($txn_password);

            $position = $this->input->post('select_position');
            $upliner = $upliner->id;
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
                        $result = $this->user_model->updateRegistration($upid, $rdown);
                    }
                    goto label1;
                }
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
                        $result = $this->user_model->updateRegistration($upid, $rdown);
                    }
                    goto label2;
                }
            }
            $result = $this->user_model->addRegistration($user_data);
            redirect(base_url('login'));
        }
        $this->load->view('login/sign_up');
    }

}
