<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Royalty extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->gdb->checkadminlogin();
        $this->load->model('user_model');
        $this->load->model('admin_payment_model');
    }

    public function index() {
       
        $data['view'] = 'admin/user/royalty_list';
        $this->load->view('admin/admin_master', $data);
    }

    public function in() {
        $user_id = $this->session->userdata('admin_id');
        $data['date_data'] = $this->admin_payment_model->getRoyaltyCount($user_id);
        $spo = 0;
        foreach ($data['date_data'] as $value) {
            if ($value->payment == 10500) {
                $spo = $spo + 1;
            } else if ($value->payment == 21000) {
                $spo = $spo + 2;
            } else if ($value->payment == 42000) {
                $spo = $spo + 4;
            } else if ($value->payment == 84000) {
                $spo = $spo + 8;
            }
        }

        if ($spo >= 2 && $spo <= 4) {
            $wallet = 2000;
        } else if ($spo >= 4 && $spo <= 10) {
            $wallet = 4000;
        } else if ($spo >= 10 && $spo <= 26) {
            $wallet = 10000;
        } else if ($spo >= 26 && $spo <= 50) {
            $wallet = 26000;
        } else if ($spo >= 50 && $spo <= 100) {
            $wallet = 50000;
        } else if ($spo == 100) {
            $wallet = 100000;
        }
        echo "<prE>";
        print_r($wallet);
        die;
        echo "<prE>";
        print_r($data['date_data']);
        die;
        if ($tdwonleft >= 10 && $tdwonleft < 20 && $tdwonright >= 10 && $tdwonright < 20) {
            if ($tdwonleft == $tdwonright) {
                $tds = '8000' * 5 / 100;
                $admin = '8000' * 5 / 100;
                $e_wallet = '8000' * 5 / 100;
                $amount = '8000' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount' => $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id, array('award' => '1'));
            }
        } else if ($tdwonleft >= 20 && $tdwonleft < 50 && $tdwonright >= 20 && $tdwonright < 50) {
            if ($tdwonleft == $tdwonright) {
                $tds = '12800' * 5 / 100;
                $admin = '12800' * 5 / 100;
                $e_wallet = '12800' * 5 / 100;
                $amount = '12800' - $tds - $admin - $e_wallet;
                $amt = array(
                    'user_id' => $user_id,
                    'amount' => $amount,
                    'date' => $date,
                    'type' => 'awaord'
                );
                //echo "<prE>"; print_r($amt); die;
                $result = $this->admin_payment_model->AddWallet($amt);
                $result = $this->user_model->updateRegistration($user_id, array('award' => '2'));
            }
        }
        //echo "<prE>"; print_r($data); die;	

        $data['view'] = 'admin/user/royalty_list';
        $this->load->view('admin/admin_master', $data);
    }

}

?>