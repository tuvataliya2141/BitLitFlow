<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    private $registration = 'registration';
    private $users = 'users';
    private $aadharcard = 'aadharcard';
    private $countries = 'countries';
    private $states = 'states';
    private $shipping = 'shipping';
    private $bank = 'bank';
    private $bank_detail = 'bank_detail';
    private $paymnet_detail = 'paymnet_detail';
    private $generate_ticket = 'generate_ticket';
    private $royalty_income = 'royalty_income';
    private $capping = 'capping';
    private $wallet = 'wallet';
    private $award_reward = 'award_reward';
    private $payment_request = 'payment_request';
    private $total_myamount = 'total_myamount';
    private $e_pin_master = 'e_pin_master';
    private $request_e_pin = 'request_e_pin';
	private $package = 'package';
    
    public function getPackageTable() {
        return $this->package;
    }
	public function getRequestEPinTable() {
        return $this->request_e_pin;
    }
    
    public function getEPinMasterTable() {
        return $this->e_pin_master;
    }
		
    public function getTotalMyamountTable() {
        return $this->total_myamount;
    }
    
    public function getPaymentRequestTable() {
        return $this->payment_request;
    }
    
    public function getAwardRewardTable() {
        return $this->award_reward;
    }
    
    public function getWalletTable() {
        return $this->wallet;
    }
    
    public function getCappingTable() {
        return $this->capping;
    }
    
    public function getRoyaltyIncomeTable() {
        return $this->royalty_income;
    }
    
    public function getGenerateTicketTable() {
        return $this->generate_ticket;
    }

    public function getPaymnetDetailTable() {
        return $this->paymnet_detail;
    }

    public function getBankDetailTable() {
        return $this->bank_detail;
    }

    public function getBankTable() {
        return $this->bank;
    }

    public function getShippingTable() {
        return $this->shipping;
    }

    public function getStatesTable() {
        return $this->states;
    }

    public function getCountriesTable() {
        return $this->countries;
    }

    public function getAadharcardTable() {
        return $this->aadharcard;
    }

    public function getRegistrationTable() {
        return $this->registration;
    }

    public function getUserTable() {
        return $this->users;
    }

    /**
     * return user by id
     */
    public function getUserById($id) {
        $this->gdb->where('user_id', $id);
        return $this->gdb->get($this->users)->row();
    }

    /**
     * Get secure key
     */
    public function getSecureKey() {
        $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $stamp = time();
        $secure_key = $pre = $post = '';
        for ($p = 0; $p <= 10; $p++) {
            $pre .= substr($string, rand(0, strlen($string) - 1), 1);
        }

        for ($i = 0; $i < strlen($stamp); $i++) {
            $key = substr($string, substr($stamp, $i, 1), 1);
            $secure_key .= (rand(0, 1) == 0 ? $key : (rand(0, 1) == 1 ? strtoupper($key) : rand(0, 9)));
        }

        for ($p = 0; $p <= 10; $p++) {
            $post .= substr($string, rand(0, strlen($string) - 1), 1);
        }
        return $pre . '-' . $secure_key . $post;
    }

    /**
     * Add user session data
     */
    public function insertUserSession($data) {
        $this->db->insert($this->user_session, $data);
        return $this->db->insert_id();
    }

    public function getSessionInfo($secret_log_id) {
        $this->db->where('is_active', 1);
        $this->db->where('session_id', $secret_log_id);
        return $this->db->get($this->user_session)->row();
    }

    public function logoutUser($secret_log_id) {
        $data = array('is_active' => 0, 'end_date' => DATETIME);
        $this->db->where('session_id', $secret_log_id);
        $this->db->update($this->user_session, $data);
    }

    public function generatePassword() {
        $post = '';
        $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($p = 0; $p <= 7; $p++) {
            $post .= substr($string, rand(0, strlen($string) - 1), 1);
        }
        return $post;
    }

    /**
     * Array sorting
     */
    public function aasort(&$array, $key, $order) {
        $sorter = array();
        $ret = array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii] = $va->$key;
        }
        if ($order == 'ASC')
            asort($sorter);
        else
            arsort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii] = $array[$ii];
        }
        return $array = array_values($ret);
    }

    /**
     * Send Push Notification
     */
    function sendPush($data, $message_array, $push_data = array()) {

        //require_once(APPPATH . 'libraries/push/ApnsPHP/Autoload.php');

        $device_type = $data['device_type'];
        $register_id = $data['register_id'];
        $badge = $data['badge'] + 1;

        if ($device_type == 1) {
            $apiKey = "AIzaSyCdjkARd1KT__rQKhokX3nSuzOiPfUrUR4";

            $registrationIDs = array($register_id);

            // Message to be sent
            //$message = "Push notification testing by hemal"; 
            // Set POST variables
            //$url = 'https://android.googleapis.com/gcm/send';
            $url = 'https://fcm.googleapis.com/fcm/send';

            $fields = array(
                'registration_ids' => $registrationIDs,
                'data' => $message_array,
            );

            $headers = array(
                'Authorization: key=' . $apiKey,
                'Content-Type: application/json'
            );

            // Open connection
            $ch = curl_init();

            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

            // Execute post
            $result = curl_exec($ch);
            //print_r($result);
            // Close connection
            curl_close($ch);
        }

        if ($device_type == 2) {
            // For I-Phone push	

            $return_array = array();
            $sandbox = true;
            $return_array['success'] = 0;
            // Put your device token here (without spaces):
            //$deviceToken = '42b9fe76ec620caef106eb880769884163b563120f4fa9d6f9d452df150c82e2';
            // Put your private key's passphrase here:
            $passphrase = 'pushchat';

            // Put your alert message here:
            //$message = 'My first push notification!';

            $deviceToken = $register_id;
            $message = $message_array['message'];

            $ctx = stream_context_create();
            stream_context_set_option($ctx, 'ssl', 'local_cert', APPPATH . 'libraries/push/pushcert.pem');

            //stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
            // Open a connection to the APNS server
            if ($sandbox)
                $gateway_url = 'ssl://gateway.sandbox.push.apple.com:2195';
            else
                $gateway_url = 'ssl://gateway.push.apple.com:2195';

            $fp = stream_socket_client(
                    $gateway_url, $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);

            if (!$fp) {
                $return_array['message'] = "Failed to connect: $err $errstr" . PHP_EOL;
            } else {
                //echo 'Connected to APNS' . PHP_EOL;
            }
            // Create the payload body
            $body['aps'] = array(
                'alert' => $message,
                'sound' => 'default',
                'badge' => $badge,
                'data' => $push_data
            );

            //$message_array['sales_flag'] $message_array['inbox_flag']
            // Encode the payload as JSON
            $payload = json_encode($body);

            // Build the binary notification
            $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

            // Send it to the server
            $result = fwrite($fp, $msg, strlen($msg));
            fclose($fp);
            //print_r($result);die;
            if (!$result) {
                $this->updateDeviceById(array('badge' => $badge), $data['id']);
                $return_array['message'] = 'Message not delivered' . PHP_EOL;
            } else {
                $return_array['success'] = 1;
                $return_array['message'] = 'Message successfully delivered' . PHP_EOL;
            }
            return $return_array;
            // Close the connection to the server
        }
    }

    /**
     * Send Email
     */
    function sendMail($toEmail, $subject, $mail_body, $fromEmail = '', $fromName = '', $ccEmails = '', $replyTo = '') {
        $this->load->library('email');
        if (!$fromEmail)
            $fromEmail = FROM_EMAIL;

        if (!$fromName)
            $fromName = PROJECT_NAME;

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://md-in-24.webhostbox.net';
        $config['mail_path'] = 'ssl://md-in-24.webhostbox.net';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '30';
        $config['smtp_user'] = 'test@cearsinfotech.in';
        $config['smtp_pass'] = 'Zb2R^Pt^*[1]';
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from($fromEmail, $fromName);
        $this->email->to($toEmail);
        $this->email->subject($subject);
        $this->email->message($mail_body);

        if ($replyTo != "")
            $this->email->reply_to($replyTo, '');

        if ($ccEmails != "")
            $this->email->cc($ccEmails);
       // echo "<pre>"; print_r($this->email->send()); die;
        return $this->email->send();
        //echo $this->email->print_debugger(); die;
    }
   /** function sendMail($toEmail, $subject, $mail_body, $fromEmail = '', $fromName = '', $ccEmails = '', $replyTo = '') {
        $this->load->library('email');
         if (!$fromEmail)
             $fromEmail = FROM_EMAIL;

         if (!$fromName)
             $fromName = PROJECT_NAME;

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://md-in-24.webhostbox.net';
        $config['mail_path'] = 'ssl://md-in-24.webhostbox.net';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '30';
        $config['smtp_user'] = 'bitlitcoin1@gmail.com';
        $config['smtp_pass'] = 'root@123';
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from($fromEmail, $fromName);
        $this->email->to($toEmail);
        $this->email->subject($subject);
        $this->email->message($mail_body);
        //echo "<pre>"; print_r($this->email); die;
        if ($replyTo != "")
            $this->email->reply_to($replyTo, '');

        if ($ccEmails != "")
            $this->email->cc($ccEmails);
        echo "<pre>"; print_r($this->email->send()); die;
        return $this->email->send();

       // echo $this->email->print_debugger();
        // require_once APPPATH . "third_party/mailer/class.phpmailer.php";
        // $mail = new PHPMailer;

        // $mail->isSMTP();                        // Set mailer to use SMTP
        // $mail->Host = 'smtp.gmail.com';
        //    // Specify main and backup server
        // $mail->SMTPAuth = true;                 // Enable SMTP authentication
        // $mail->Username = 'bitlitcoin1@gmail.com'; // SMTP username suratrealestate2015@gmail.com
        // $mail->Password = 'root@123'; 
        // //echo "<pre>"; print_r($mail->Password); die;      // SMTP password suratrealestate
        // $mail->SMTPSecure = 'ssl';              // Enable encryption, 'ssl' also accepted
        // $mail->Port = '465';   //Port Number

        // $mail->From = $fromEmail;               //From Email Id
        // $mail->FromName = $fromName;  //From Email Id Display Name
        // $mail->addAddress($toEmail);               // Name is optional
        // //$mail->addReplyTo('info@example.com', 'Information');
        // //$mail->addCC('cc@example.com');
        // //$mail->addBCC('bcc@example.com');
        // //$mail->Priority = 1;
        // // MS Outlook custom header
        // // May set to "Urgent" or "Highest" rather than "High"
        // //$mail->AddCustomHeader("X-MSMail-Priority: High");
        // // Not sure if Priority will also set the Importance header:
        // //$mail->AddCustomHeader("Importance: High");
        // //$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        // //$mail->addAttachment('');       // Add attachments
        // //$mail->addAttachment('','');    // Optional name
        // $mail->isHTML(true);              // Set email format to HTML
        // //echo "<pre>"; print_r($mail->isHTML); die;
        // $mail->Subject = $subject;
        // $mail->Body = $mail_body;
        
        // return $mail->send();
        // echo "<pre>"; print_r($mail->send()); die;
        // echo $this->email->print_debugger();
    }*/

    /**
     * Verify user account
     */
    public function verifyAccount($verify_token) {
        $this->gdb->where('verify_token', $verify_token);
        $this->gdb->where('verify_token !=', 1);
        $this->gdb->where('code', 0);
        return $this->gdb->get($this->users)->row();
    }

    /**
     * Verify forgot password
     */
    public function verifyForgot($verify_token) {
        $this->gdb->where('verify_token', $verify_token);
        $this->gdb->where('verify_token !=', 1);
        $this->gdb->where('code !=', 0);
        return $this->gdb->get($this->users)->row();
    }

    /**
     * Successfully verify user account
     */
    public function successVerifyAccount($verify_token) {
        $data['verify_token'] = 1;
        $this->gdb->where('verify_token', $verify_token);
        $this->gdb->where('verify_token !=', 1);
        return $this->gdb->update($this->users, $data);
    }

    /**
     * Successfully verify forgot password
     */
    public function successVerifyForgot($verify_token, $code, $password) {
        $data['verify_token'] = 1;
        $data['code'] = 0;
        $data['password'] = md5($password);
        $this->gdb->where('verify_token', $verify_token);
        $this->gdb->where('code', $code);
        ;
        $this->gdb->where('verify_token !=', 1);
        return $this->gdb->update($this->users, $data);
    }

    /**
     * check verify forgot password code
     */
    public function checkVerifyForgot($verify_token, $code) {
        $data['verify_token'] = 1;
        $this->gdb->where('verify_token', $verify_token);
        $this->gdb->where('code', $code);
        $this->gdb->where('verify_token !=', 1);
        return $this->gdb->get($this->users)->row();
    }
    
    function RandomString($length = 8)
    {
        //$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function RandomStringTokan($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function getRegistrationBySearch($id) {
        $data = $this->gdb->query("SELECT id, upliner_id, refferal_id, user_id, member_name, payment_status FROM `registration` WHERE upper(user_id) LIKE '%$id%' OR lower(user_id) LIKE '%$id%' ")->row();
       //echo $this->db->last_query(); die;
        return $data;
    }
    public function getRegistrationByUserid($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, payment_status');
        $this->gdb->where('id', $id);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        return $data;
    }
    
    public function getLF($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        return $data;
    }
    
    public function getLTL($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getOne($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    public function getTwo($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getLTR($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getThree($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    public function getFour($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getRF($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getRTL($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getFive($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }

    public function getSix($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getRTR($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }
    
    public function getSeven($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }

    public function getEight($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        
        return $data;
    }

    public function getRegistrationByadmin() {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, payment_status');
        $this->gdb->where('user_id', 'BI31225102');
        $this->gdb->where('if_admin', '0');
        $data = $this->gdb->get($this->getRegistrationTable())->row();
        return $data;
    }    
	
	

    

}
