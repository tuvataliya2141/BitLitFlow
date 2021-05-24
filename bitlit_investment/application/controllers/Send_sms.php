<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Send_sms extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /**
     * Send SMS
     */
    public function send_sms_data($data) {
        $this->load->model('product_model');
        $mobile_number = $data['mobile_number'];
        $product_name = $data['product_name'];

        $flag = 0;
        $contents = file_get_contents('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=8fPfQbo6lEqUoJy02fCNFg&senderid=DELFRU&channel=2&flashsms=0&number='
                . $mobile_number . '&text="' . $product_name . '"%20deal%20is%20activated%20and%20Live!%20Start%20Deal%20Now!&route=1&DCS=0');

        $result = json_decode($response);
        if ($result) {
            foreach ($deal_data as $value) {
                $this->product_model->updateDealDetail($value, array('sms' => 1));
                $flag = 1;
            }
        }

        return $flag;
    }

}
