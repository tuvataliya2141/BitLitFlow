<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    /**
     * Return admin profile by email id
     */
    public function getAdminProfile($user_id) {
        $this->gdb->where('user_id', $user_id);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    /**
     * Update admin data
     */
    public function updateAdminData($id, $data) {
        $this->gdb->where('id', $id);
        $data = $this->gdb->update($this->common->getRegistrationTable(), $data);
        //echo $this->db->last_query(); die;
        return $data;
    }

    /**
     * Update admin data
     */
    public function updateDown($id, $data) {
        $this->gdb->where('upliner_id', $id);
        $data = $this->gdb->update($this->common->getRegistrationTable(), $data);
        //echo $this->db->last_query(); die;
        return $data;
    }

    /**
     * Return admin data
     */
    public function getAdminData($id) {
        $this->gdb->where('id', $id);
        return $result = $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    public function getLastData() {
        $data = $this->gdb->query("SELECT * FROM `registration` ORDER BY id DESC LIMIT 1 ")->row();
        return $data;
    }

    /**
     * user login
     */
    public function userLogin($username, $password) {
        $this->gdb->where("(username = '$username' OR mobile_no = '$username')");
        $this->gdb->where('password', md5($password));
        $data = $this->gdb->get($this->common->getUserTable())->row();

        if ($data) {
            $data->image_path = base_url('assets/images/default.png');
            if ($data->user_image)
                $data->image_path = base_url() . PROFILEPIC . $data->user_image;
        }
        return $data;
    }

    /**
     * Add user
     */
    public function addRegistration($data) {
        return $this->gdb->insert($this->common->getRegistrationTable(), $data);
    }

    /**
     * get user
     */
    public function deleteUser($user_id) {
        $this->gdb->where('user_id', $user_id);
        return $this->gdb->delete($this->common->getUserTable());
    }

    /**
     * get All user
     */
    public function getAllRegistrationAdmin($id) {
		$this->gdb->where('id!=',$id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        return $data;
    }
    
    public function getAllRegistration() {
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
     //   $this->gdb->where('if_admin',0);
        return $data;
    }
	
    public function getAllRegistrationRoyalty() {
        $this->gdb->select('r.*,w.status AS wall');
        //$this->gdb->where('r.is_deleted', 0);
        $this->gdb->where('r.award!=',0);
        $this->gdb->join($this->common->getWalletTable().' AS w','w.user_id = r.id','LEFT');
        $data = $this->db->get($this->common->getRegistrationTable().' AS r')->result();
        return $data;
    }

    /**
     * get All user
     */
    public function getUpliner($id) {
        $this->gdb->select(' COUNT(upliner_id) AS upliner, select_position');
        $this->gdb->where('upliner_id', $id);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    /**
     * get All user
     */
    public function getCount($id) {
        //$this->gdb->select('*');
        $this->gdb->where('select_position', $id);
        $this->gdb->order_by('id', 'DESC');
        $dta = $this->gdb->get($this->common->getRegistrationTable())->result();
        //echo $this->db->last_query(); die;
        return $dta;
    }

    /**
     * Return admin data
     */
    public function getDownline($id) {
        $this->gdb->select('upliner_id,downline');
        $this->gdb->where('id', $id);
        $data = $result = $this->gdb->get($this->common->getRegistrationTable())->row();
        // echo $this->db->last_query(); die;
        return $data;
    }

    /**
     * Return admin data
     */
    public function UpdateCheckUid($id, $data) {
        $this->gdb->where('id', $id);
        $this->gdb->where('upliner_id!=', $id);
        $this->gdb->where('downline', 0);
        $this->gdb->update($this->common->getRegistrationTable(), $data);
        //echo $this->db->last_query(); die;
        return $data;
    }

    /**
     * Return admin data
     */
    public function getRegistration($id) {
        $this->gdb->select('*, COUNT(upliner_id) AS upliner');
        $this->gdb->where('id', $id);
        return $result = $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    /**
     * Return admin data
     */
    public function getRegistrationOrderBy($id) {
        $this->gdb->where('id', $id);
        //$this->gdb->where('if_admin', '0');
        $this->gdb->order_by('id', 'DESC');
        return $result = $this->gdb->get($this->common->getRegistrationTable())->result_array();
    }

    /**
     * Return admin data
     */
    public function getCheckupliner($id) {
        $this->gdb->select('*');
        $this->gdb->where('id', $id);
        return $result = $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    /**
     * Return admin data
     */
    public function getRegistrationDataById($id) {
        $this->gdb->select('m.*,r.member_name AS refferal_name, r.user_id AS refferal');
        $this->gdb->where('m.id', $id);
        $this->gdb->where('m.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable() . ' AS r', 'r.id = m.refferal_id', 'LEFT');
        return $result = $this->db->get($this->common->getRegistrationTable() . ' AS m')->row();
    }

    /**
     * Add Block user
     */
    public function addAadharcard($data) {
        return $this->db->insert($this->common->getAadharcardTable(), $data);
    }

    /**
     * Update Block user
     */
    public function updateRegistration($id, $data) {
        $this->gdb->where('id', $id);
        return $this->gdb->update($this->common->getRegistrationTable(), $data);
    }

    /**
     * get Block All user
     */
    public function getAllBlockUser() {
        $this->gdb->where('b.is_deleted', 0);
        $this->gdb->where('u.is_deleted', 0);
        $this->gdb->where('u.is_block', 1);
        $this->gdb->join($this->common->getUserTable() . ' AS u', 'u.user_id = b.user_id', 'LEFT');
        $data = $this->db->get($this->common->getUserBlockTabel() . ' AS b')->result();

        foreach ($data as $key => $value) {
            $data[$key] = $value;
            $data[$key]->image_path = base_url('assets/images/default.png');
            if ($value->user_image)
                $data[$key]->image_path = base_url() . PROFILEPIC . $value->user_image;
        }

        return $data;
    }

    /**
     * get user
     */
    public function getUser($id) {
        $this->gdb->where('user_id', $id);
        $data = $this->gdb->get($this->common->getUserTable())->row();
        if ($data) {
            $data->image_path = base_url('assets/images/default.png');
            if ($data->user_image)
                $data->image_path = base_url() . PROFILEPIC . $data->user_image;
        }
        return $data;
    }

    /**
     * get user details with session
     */
    public function getUserWithSession($token_id, $type) {
        $this->gdb->where('token', $token_id);
        $this->gdb->where('login_type', $type);
        $this->gdb->where('is_active', 1);
        $this->gdb->join($this->common->getUserTable() . ' AS u', 'u.user_id = s.user_id', 'LEFT');
        return $this->gdb->get($this->common->getUserSessionTable() . ' AS s')->row();
    }

    /**
     * check user exists or not
     */
    public function checkUserExists($type, $val) {
        if ($type == 'email')
            $this->gdb->where('email', $val);
        if ($type == 'phone')
            $this->gdb->where('mobile_no', $val);
        if ($type == 'username')
            $this->gdb->where('LOWER(username)', strtolower($val));
        if ($type == 'email' || $type == 'phone' || $type == 'username')
            return $this->gdb->get($this->common->getUserTable())->row();
        return false;
    }

    /**
     * check forgot user exists or not
     */
    public function checkForgotUser($value) {
        $this->gdb->where("(email = '$value' OR mobile_no = '$value')");
        return $this->gdb->get($this->common->getUserTable())->row();
    }

    /**
     * Add Transfer
     */
    public function AddShippingData($data) {
        return $this->gdb->insert($this->common->getShippingTable(), $data);
    }

    /**
     * Add Transfer
     */
    public function AddBankDetailData($data) {
        return $this->gdb->insert($this->common->getBankDetailTable(), $data);
    }

    /**
     * Get Transfer data
     */
    public function getTransferData() {
        $this->gdb->select('*, SUM(amount) AS transfer_amount');
        $this->gdb->group_by('transfer_name');
        return $this->gdb->get($this->common->getTransferTable())->result();
    }

    /**
     * get All Countries
     */
    public function getAllCountries() {
        $data = $this->db->get($this->common->getCountriesTable())->result();
        return $data;
    }

    /**
     * get All Countries
     */
    public function getAllBank() {
        $data = $this->db->get($this->common->getBankTable())->result();
        return $data;
    }

    /**
     * get All user
     */
    public function Getstate($id) {
        $this->gdb->where('country_id', $id);
        $data = $this->db->get($this->common->getStatesTable())->result();
        return $data;
    }

    public function getAadharByUserid($id) {
        $this->gdb->where('user_id', $id);
        $data = $this->db->get($this->common->getAadharcardTable())->row();
        if ($data) {
            $data->image_path = base_url('assets/images/upload.png');
            if ($data->aadhar_image)
                $data->image_path = base_url() . AADHARPIC . $data->aadhar_image;
        }
        //echo $this->db->last_query();
        return $data;
    }

    public function getBankDetailByUserid($id) {
        $this->gdb->where('user_id', $id);
        $data = $this->gdb->get($this->common->getBankDetailTable())->row();
        if ($data) {
            $data->image_path = base_url('assets/images/upload.png');
            if ($data->cheque_image)
                $data->image_path = base_url() . CHEQUE_IMG . $data->cheque_image;

            if ($data->pan_image)
                $data->pan_path = base_url() . PAN_IMG . $data->pan_image;
        }
        return $data;
    }

    /**
     * getGroup Data
     */
    public function getRegistrationByUserid($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, payment_status, downline');
        $this->gdb->where('id', $id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        foreach ($data as $key => $value) {
            $data[$key] = $value;
            $data[$key]->getSecond = $this->getSecond($value->id);
        }
        return $data;
    }
    
    public function getSecond($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        //$this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        foreach ($data as $key => $value) {
            $data[$key] = $value;
            $data[$key]->getThread = $this->getThread($value->id);
        }
        return $data;
       // if ($data) {
           // $data->LTL = ($this->getLTL($data->id)) ? $this->getLTL($data->id) : '0';
//            if($data->LTL == '0'){
//                $data->LTL = $this->getShow();
//                //$data->LTL_NO = 0;
//            }
            //$data->LTR = ($this->getLTR($data->id)) ? $this->getLTR($data->id) : '0';
//            if($data->LTR == '0'){
//                $data->LTR = $this->getShow();
//               // $data->LTL = $data->two = 0;
//            }
       // }
        return $data;
    }
    
    public function getThread($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        foreach ($data as $key => $value) {
            $data[$key] = $value;
            $data[$key]->getForth = $this->getForth($value->id);
        }
        return $data;
    }
    public function getForth($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        
        return $data;
    }

    public function getOne($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getTwo($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getLTR($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();
        if ($data) {
            $data->Three = ($this->getThree($data->id)) ? $this->getThree($data->id) : '0';
            $data->Four = ($this->getFour($data->id)) ? $this->getFour($data->id) : '0';            
        }
        return $data;
    }

    public function getThree($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getFour($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getRF($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();
        if ($data) {
            $data->RTL = ($this->getRTL($data->id)) ? $this->getRTL($data->id) : '0';
//            if($data->RTL == '0'){
//                $data->RTL = $this->getShow();
//               // $data->LTL = $data->two = 0;
//            }
            $data->RTR = ($this->getRTR($data->id)) ? $this->getRTR($data->id) : '0';
//            if($data->RTR == '0'){
//                $data->RTR = $this->getShow();
//               // $data->LTL = $data->two = 0;
//            }
        }
        return $data;
    }

    public function getRTL($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();
        if ($data) {
            $data->Five = $this->getFive($data->id);
            $data->Six = $this->getSix($data->id);
        }
        return $data;
    }

    public function getFive($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getSix($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getRTR($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 2);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();
        if ($data) {
            $data->Seven = ($this->getSeven($data->id)) ? $this->getSeven($data->id) : '0';
            $data->Eight = ($this->getEight($data->id)) ? $this->getEight($data->id) : '0';
        }
        return $data;
    }

    public function getSeven($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }

    public function getEight($id) {
        $this->gdb->select('id, upliner_id, refferal_id, user_id, member_name, select_position, payment_status, downline');
        $this->gdb->where('upliner_id', $id);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();

        return $data;
    }
       
    public function getmyDirectUpliner($id) {
        $data = $this->gdb->query("SELECT * FROM `registration` WHERE `upliner_id`=" . $id . " ")->result();
        return $data;
    }
	
	public function getmyTotalDownline($id) {
        $data = $this->gdb->query("SELECT * FROM `registration` WHERE FIND_IN_SET(" . $id . ", parent_id)")->result();
        return $data;
    }
    
    public function getmyDirectReffer($id) {
        $data = $this->gdb->query("SELECT * FROM `registration` WHERE `refferal_id`=" . $id . " ")->result();
        return $data;
    }

    public function getmyDirectRefferal($id) {
        $this->gdb->where('refferal_id', $id);
        return $this->gdb->get($this->common->getRegistrationTable())->result();
    }

    public function getRegistrationCheck($user_id, $pwd) {
        $this->gdb->where('id', $user_id);
        $this->gdb->where('txn_password', $pwd);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }
	
	public function getRegistrationCheckByUser($user_id) {
        $this->gdb->where('user_id', $user_id);
        $this->gdb->where('if_admin', 0);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    public function getRegistrationCheckUserId($user_id) {
        $data = $this->gdb->query("SELECT * FROM `registration` WHERE `user_id`='$user_id' ")->row();
        // echo $this->db->last_query(); die;
        return $data;
    }
	
    /**
     * Add Transfer
     */
    public function getBankDetailData($user_id) {
        $this->gdb->where('d.user_id', $user_id);
        $this->gdb->join($this->common->getBankTable() . ' AS b', 'b.bankid = d.bank_id', 'LEFT');
        return $this->gdb->get($this->common->getBankDetailTable() . ' AS d')->result();
    }

    /**
     * Add Transfer
     */
    public function AddPaymnetDetail($data) {
        return $this->gdb->insert($this->common->getPaymnetDetailTable(), $data);
    }

    public function getPaymnetDetail($id) {
        $this->gdb->where('d.user_id', $id);
        $this->gdb->where('d.is_deleted', 0);
        $this->gdb->join($this->common->getBankDetailTable() . ' AS bd', 'bd.user_id = d.user_id', 'LEFT');
        $this->gdb->join($this->common->getBankTable() . ' AS b', 'b.bankid = d.bank_id', 'LEFT');
        return $this->db->get($this->common->getPaymnetDetailTable() . ' AS d')->result();
    }

    /**
     * Add Transfer
     */
    public function AddGenerateTicket($data) {
        return $this->gdb->insert($this->common->getGenerateTicketTable(), $data);
    }

    public function getGenerateTicket($id) {
        $this->gdb->where('user_id', $id);
        return $this->gdb->get($this->common->getGenerateTicketTable())->result();
    }

    public function getClubDetail($id) {
        $this->gdb->where('id', $id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        foreach ($data as $key => $value) {
            $data[$key] = $value;
            $data[$key]->last_date = date('d/m/Y', strtotime('+45 days', strtotime(str_replace('/', '-', $value->creation_datetime)))) . PHP_EOL;
            $data[$key]->total = $this->getRefrealData($id);
        }
        return $data;
    }

    public function getRefrealData($id) {
        $this->gdb->select('count(refferal_id) AS total');
        $this->gdb->where('refferal_id', $id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();

        return $data;
    }

    public function getAllRoyaltyIncome() {
        $data = $this->db->get($this->common->getRoyaltyIncomeTable())->result();
        return $data;
    }

    /************************capping awaord royalty codding*********************************/
    public function getAllCapping() {
		
        $data = $this->db->get($this->common->getCappingTable())->result();
        return $data;
    }
	
	public function getAllAwaord() {
		
        $data = $this->db->get($this->common->getAwardRewardTable())->result();
        return $data;
    }
	
	public function getAllRoyalty() {
		
        $data = $this->db->get($this->common->getRoyaltyIncomeTable())->result();
        return $data;
    }
	
	public function getCeckActiveUser($id) {
        $this->gdb->where('id', $id);
        $data = $this->db->get($this->common->getRegistrationTable())->row();
        return $data;
    }
	
	/************************capping awaord royalty codding*********************************/
	
	public function getAllWallet() {
		//$this->gdb->select('*');
		//$this->gdb->where('user_id', $user_id);
		//$this->gdb->select('*');
		$data = $this->db->get($this->common->getWalletTable())->result();
		return $data;
        }
	/************************user awaord reword royalty codding*********************************/
	
	public function user_binary($id) {
		 $this->gdb->select('*, SUM(amount) AS binary_amount');
        $this->gdb->where('user_id', $id);
		$this->gdb->where('type', 'binary');
		
        $data = $this->db->get($this->common->getWalletTable())->row();
        //echo ""; print_r($data); exit;
        return $data;
    }
	
	public function user_reword($id) {
		 $this->gdb->select('*, SUM(amount) AS reword_amount');
        $this->gdb->where('user_id', $id);
		$this->gdb->where('type', 'aword');
		
        $data = $this->db->get($this->common->getWalletTable())->row();
        //echo ""; print_r($data); exit;
        return $data;
    }
	
	public function user_royalty($id) {
		 $this->gdb->select('*, SUM(amount) AS royalty_amount');
        $this->gdb->where('user_id', $id);
		$this->gdb->where('type', 'royalty');
		
        $data = $this->db->get($this->common->getWalletTable())->row();
        //echo ""; print_r($data); exit;
        return $data;
    }
	
	public function user_awaord($id) {
		$this->gdb->select('*, SUM(amount) AS awaord_amount');
        $this->gdb->where('user_id', $id);
		$this->gdb->where('type', 'awaord');
		
        $data = $this->db->get($this->common->getWalletTable())->row();
        //echo ""; print_r($data); exit;        
    }
	
	/************************ awaord reword royalty codding*********************************/
		
	public function user_wall($u_id){
		$data = $this->gdb->query("SELECT * FROM `registration` WHERE `id`=" . $u_id  . " ")->result();
		foreach ($data as $key => $value) {
            $data[$key] = $value;
            $data[$key]->upliner = $this->getDownlineById($u_id);        
        }
       return $data;
	}

	public function getDownlineById($upliner_id) {
		//$this->gdb->select('*');
        $this->gdb->where('upliner_id', $upliner_id);
		//$this->gdb->select('*');
        $data = $this->db->get($this->common->getRegistrationTable())->result();
        return $data;		
    }
	
	public function user_wallet_Insert($u_id){
		 $data = array
		 (
		 'user_id'=>$u_id,
		 'amount'=>1000,
		 'date'=>date('Y-m-d'),
		 'status'=>1,
		 'type'=>'binary'
		 );
		 return $this->db->insert($this->common->getWalletTable(), $data);
        //return $this->db->update($this->common->getWalletTable(), $data);
	}

        public function getWalletData($tl,$left_d) {
            $data = $this->gdb->query("SELECT * FROM wallet where left_d != '$left_d' AND right_d != '$tl' OR left_d = '2' AND right_d = '1' OR left_d = '1' AND right_d = '2'")->result();
//            echo $this->db->last_query(); die;
//            echo "<pre>"; print_r($data); die;
            return $data;
        }
       
        public function getRoyaltyData($ref_id) {
            $data = $this->gdb->query("SELECT count(id) as sponcer, royalty FROM registration where refferal_id = '$ref_id'")->row();
//            echo $this->db->last_query(); die;
//            echo "<pre>"; print_r($data); die;
            return $data;
        }
        
        public function getPaymentData($ref_id) {
            $data = $this->gdb->query("SELECT * FROM registration where refferal_id = '$ref_id' where payment_status != '0'")->result();
            // echo $this->db->last_query(); die;
            // echo "<pre>"; print_r($data); die;
            return $data;
        }
        
        public function getRoyaltyDataByDate($ref_id) {
            $data = $this->gdb->query("SELECT creation_date FROM registration where refferal_id = '$ref_id' AND  payment_status != '0' ORDER BY creation_date DESC")->row();
 //           echo $this->db->last_query(); die;
//           echo "<pre>"; print_r($data); die;
            return $data;
        }
        
        public function getRoyaltyStatus($ref_id) {
            $data = $this->gdb->query("SELECT royalty FROM registration where id = '$ref_id' payment_status != '0'")->row();
//            echo $this->db->last_query(); die;
//            echo "<pre>"; print_r($data); die;
            return $data;
        }
        
        public function getRoyaltyAllData($id) {
            $data = $this->gdb->query("SELECT * FROM registration where id = '$id' payment_status != '0'")->row();
//            echo $this->db->last_query(); die;
//            echo "<pre>"; print_r($data); die;
            return $data;
        }
        
        public function getAwardDataLeft($user_id, $activatedate) {
            $data = $this->gdb->query("SELECT * FROM registration where upliner_id = '$user_id' and select_position = '1' and creation_date >= '$activatedate' AND  payment_status != '0'")->result();
//            echo $this->db->last_query(); die;
            //echo "<pre>"; print_r($data); die;
            return $data;
        }
       
        public function getJoiningDate($user_id) {
            $data = $this->gdb->query("SELECT * FROM registration where id = '$user_id'")->row();
//            echo $this->db->last_query(); die;
//            echo "<pre>"; print_r($data); die;
            return $data;
        }
       
        public function getAwardDataRight($user_id, $activatedate) {
            $data = $this->gdb->query("SELECT * FROM registration where upliner_id = '$user_id' and select_position = '2' and creation_date >= '$activatedate' AND payment_status != '0'")->result();
//            echo $this->db->last_query(); die;
//            echo "<pre>"; print_r($data); die;
            return $data;
        }
        
        // **************************  Binary Data  ***********************
        
        
        public function getBinaryDataLeft($id, $activatedate, $date) {
	    $data = $this->gdb->query("SELECT count(id) as left_id FROM `registration` where FIND_IN_SET(" . $id . ", parent_id) AND select_position = '1' AND creation_date >= '$activatedate' AND creation_date = '$date' AND  payment_status != '0'")->row();            
			return $data;
			
        }
		public function getBinaryDataRight($id, $activatedate, $date) {
	    $data = $this->gdb->query("SELECT count(id) as right_id FROM `registration` where FIND_IN_SET(" . $id . ", parent_id) AND select_position = '2' AND creation_date >= '$activatedate' AND creation_date = '$date' AND  payment_status != '0'")->row();
			return $data;
        }
		public function checkAwardData($id) {
	    $data = $this->gdb->query("SELECT * FROM `wallet` where user_id = '$id' AND type = 'aword'  ORDER BY id DESC")->row();
            return $data;
        }
        
        public function checkRyalityData($id) {
	    $data = $this->gdb->query("SELECT * FROM `wallet` where user_id = '$id' AND type = 'royalty'  ORDER BY id DESC")->row();
            return $data;
        }
        
        public function checkBinaryData($id) {
	    $data = $this->gdb->query("SELECT * FROM `wallet` where user_id = '$id' AND type = 'binary' ORDER BY id DESC")->row();
            return $data;
        }
        
        public function getAllUser_data($id) {
		//$this->gdb->where('w.user_id', $id);
        $this->gdb->where('r.id', $id);
		$this->gdb->join($this->common->getRegistrationTable().' AS w','w.id = r.upliner_id','INNER');
        $data = $this->db->get($this->common->getRegistrationTable().' AS r')->row();
		if($data)
		{
			$data->Seven = ($this->getAllUser_data1($data->refferal_id));
        }
		if($data)
		{
			$data->eight = ($this->getAllUser_data2($data->upliner_id));
        } 
		//echo "<pre>"; print_r($data); exit;
        //echo $this->db->last_query(); die;
        return $data;
    }
	
	public function getAllUser_data1($id) {
		//$this->gdb->where('w.user_id', $id);
        $this->gdb->where('p.id', $id);
		//$this->gdb->join($this->common->getAadharcardTable().' AS w','w.user_id = r.id','INNER');
        $data = $this->db->get($this->common->getRegistrationTable().' AS p')->row();
		//echo "<pre>"; print_r($data); exit;
        //echo $this->db->last_query(); die;
        return $data;
    }
	
	public function getAllUser_data2($id) {
		//$this->gdb->where('w.user_id', $id);
        $this->gdb->where('t.id', $id);
		//$this->gdb->join($this->common->getAadharcardTable().' AS w','w.user_id = r.id','INNER');
        $data = $this->db->get($this->common->getRegistrationTable().' AS t')->row();
		//echo "<pre>"; print_r($data); exit;
        //echo $this->db->last_query(); die;
        return $data;
    }
	
	public function getAllUserKyc_data($id) {
		
        $this->gdb->where('k.user_id', $id);
		
        $data = $this->db->get($this->common->getAadharcardTable().' AS k')->row();
        return $data;
    }
	
	public function getAllUserShipping_data($id) {
		
        $this->gdb->where('k.user_id', $id);
		
        $data = $this->db->get($this->common->getShippingTable().' AS k')->row();
		//echo "<pre>"; print_r($data); exit;
        
        return $data;
    }
	
	public function getAllUserBank_data($id) {
        $this->gdb->where('k.user_id', $id);
		$this->db->join($this->common->getBankTable().' AS b','b.bankid = k.bank_id', 'LEFT'	);
        $data = $this->db->get($this->common->getBankDetailTable().' AS k')->row();
		//echo $this->db->last_query();die;
		//echo "<pre>"; print_r($data); exit;
        
        return $data;
    }
    
    
    public function getAllReward_data() {
        $this->gdb->select('k.* , w. user_id ,w.member_name');
        $this->gdb->where('type','aword');
        $this->gdb->where('if_admin!=','1');
        $this->gdb->join($this->common->getRegistrationTable().' AS w','w.id = k.user_id','left');
        $data = $this->db->get($this->common->getWalletTable().' AS k')->result();
        //echo $this->db->last_query();die;
        //echo "<pre>"; print_r($data); exit;
        return $data;
    }
    
    public function getAllRoyaltyData() {
        $this->gdb->select('k.* , w. user_id ,w.member_name');
        $this->gdb->where('type','royalty');
        $this->gdb->where('if_admin!=','1');
        $this->gdb->join($this->common->getRegistrationTable().' AS w','w.id = k.user_id','left');
        $data = $this->db->get($this->common->getWalletTable().' AS k')->result();
        //echo $this->db->last_query();die;
        //echo "<pre>"; print_r($data); exit;
        return $data;
    }

    public function getAllBinaryData() {
        $this->gdb->select('k.* , w. user_id ,w.member_name');
        $this->gdb->where('type','binary');
        $this->gdb->where('if_admin!=','1');
            $this->gdb->join($this->common->getRegistrationTable().' AS w','w.id = k.user_id','left');
        $data = $this->db->get($this->common->getWalletTable().' AS k')->result();
        //echo $this->db->last_query();die;
            //echo "<pre>"; print_r($data); exit;
        return $data;
    }
	
    public function getRegistrationDataByUpliner() {
        $data = $this->gdb->query("SELECT * FROM `registration` ORDER BY id DESC")->row();
                //echo "<pre>"; print_r($data); exit;
        return $data;
    }
    
    public function UpdateWallet($id, $data) {
        $this->db->where('user_id', $id);
        $this->db->update($this->common->getWalletTable(), $data);
        return $data;
    }
    
    public function UpdateWalletBinary($id, $data) {
        $this->db->where('user_id', $id);
        $this->db->where('type', 'binary');
        $this->db->update($this->common->getWalletTable(), $data);
        return $data;
    }        

}
