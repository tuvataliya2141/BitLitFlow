<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_payment_model extends CI_Model {

    /**
     * get All user
     */
    public function getAmbassadors() {
        $this->gdb->select('id, user_id, downline, refferal_id, upliner_id');
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        //foreach ($data as $key => $value) {
        //    $data[$key] = $value;
       //     $data[$key]->total = $this->getDownlineCount($value->id);
      //  }
        return $data;
    }
    
    public function getDownlineCount($id) {
        $this->gdb->select('count(downline) AS total_downline');
        $this->gdb->where('refferal_id', $id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        
        return $data;
    }
    
    /**
     * Add Transfer
     */
    public function AddWallet($data) {
        return $this->db->insert($this->common->getWalletTable(), $data);
    }
    
    /************************Capping Data*********************************/
    
    public function getCappingData($id) {
        $date = date('Y-m-d');
        //echo "<prE>"; print_r($date); die;
        $this->gdb->select('id,downline');
        $this->gdb->where('creation_datetime', $date);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();
        echo $this->db->last_query(); 
        return $data;
    }
    
    public function getCappingDailyLeft($id, $date) {
        $data = $this->gdb->query("SELECT count(id) AS downline, parent_id, creation_date, payment, select_position FROM `registration` WHERE FIND_IN_SET(" . $id . ", parent_id) AND select_position = 1 AND "
                . "creation_date = '$date' ")->row();
        //echo $this->db->last_query(); die;
        return $data;
    }
    public function getCappingDailyRight($id, $date) {
        $data = $this->gdb->query("SELECT count(id) AS downline, parent_id, creation_date, payment, select_position FROM `registration` WHERE FIND_IN_SET(" . $id . ", parent_id) AND select_position = 2 AND "
                . "creation_date = '$date' ")->row();
        //echo $this->db->last_query(); die;
        return $data;
    }
    
    /************************Awaord Data*********************************/
    
    public function getAwaordData($id) {
        //$date = date('Y-m-d');
        $this->gdb->select('id, downline, select_position, creation_date, parent_id');
       // $this->gdb->where('creation_datetime', $date);
        $this->gdb->where('select_position', 1);
        $data = $this->gdb->get($this->common->getRegistrationTable())->row();
        if($data){
            $data->check = date('Y-m-d', strtotime('+44 days', strtotime(str_replace('/', '-', $data->creation_date)))) . PHP_EOL;
        }
        //echo "<prE>"; print_r($date); die;
        //echo $this->db->last_query(); die;
        return $data;
    }
    
    public function getParentDataLeft($id, $star_date, $end_date) {
        $data = $this->gdb->query("SELECT count(id) AS downline, parent_id, creation_date, select_position FROM `registration` WHERE FIND_IN_SET(" . $id . ", parent_id) AND select_position = 1 AND "
                . "creation_date >= '$star_date' AND creation_date <= '$end_date' ")->row();
        //echo $this->db->last_query(); die;
        return $data;
    }
    public function getParentDataRight($id, $star_date, $end_date) {
        $data = $this->gdb->query("SELECT count(id) AS downline, parent_id, creation_date, select_position FROM `registration` WHERE FIND_IN_SET(" . $id . ", parent_id) AND select_position = 2 AND "
                . "creation_date >= '$star_date' AND creation_date <= '$end_date' ")->row();
        //echo $this->db->last_query(); die;
        return $data;
    }
    
    /************************Royalty Income Data*********************************/
    
    public function getRoyaltyCount($id) {
        $this->gdb->select('id, refferal_id, payment');
        $this->gdb->where('refferal_id',$id);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        
        return $data;
    }
    
    
//    public function getCappingDailyList($id, $date) {
//        $data = $this->gdb->query("SELECT count(id) AS downline, parent_id, creation_date, payment, select_position FROM `registration` WHERE FIND_IN_SET(" . $id . ", parent_id) AND select_position = 2 AND "
//                . "creation_date = '$date' ")->row();
//        //echo $this->db->last_query(); die;
//        return $data;
//    }
    
    public function getCappingDailyList($date) {
        $this->gdb->select('r.*,w.status AS wall');
        //$this->gdb->where('r.is_deleted', 0);
        $this->gdb->where('w.date',$date);
        $this->gdb->where('w.type','capping');
        $this->gdb->join($this->common->getWalletTable().' AS w','w.user_id = r.id','LEFT');
        $data = $this->db->get($this->common->getRegistrationTable().' AS r')->result();
        return $data;
    }
    
    public function getAwaordListByDate($star_date,$end_date) {
       // $this->gdb->select('id, downline, select_position, creation_date');
        $this->gdb->where('select_position', 1);
        $this->gdb->where('creation_date>=', $star_date);
        $this->gdb->where('creation_date<=', $end_date);
        $data = $this->gdb->get($this->common->getRegistrationTable())->result();
        
        //echo "<prE>"; print_r($date); die;
       // echo $this->db->last_query(); die;
        return $data;
    }
    
    public function getAllWalletData($id) {
        $this->gdb->where('user_id', $id);
        $data = $this->db->get($this->common->getWalletTable())->result();
        return $data;
    }
    
    public function getUesrAmount($id) {
        $this->gdb->where('user_id', $id);
        $this->gdb->where('type', 'binary');
        $data = $this->db->get($this->common->getWalletTable())->result();
        return $data;
    }
    
    public function getmyRoyaltyAmount($id) {
        $this->gdb->where('user_id', $id);
        $this->gdb->where('type', 'royalty');
        $data = $this->db->get($this->common->getWalletTable())->result();
        return $data;
    }
    
    public function getmyAwaordAmount($id) {
        $this->gdb->where('user_id', $id);
        $this->gdb->where('type', 'aword');
        $data = $this->db->get($this->common->getWalletTable())->result();
        return $data;
    }
    
    public function getUesrAmountCount($id) {
        $this->gdb->select('sum(amount) AS b_amount');
        $this->gdb->where('user_id', $id);
        $this->gdb->where('type', 'binary');
        $data = $this->db->get($this->common->getWalletTable())->row();
        return $data;
    }
    public function getmyRoyaltyAmountCount($id) {
        $this->gdb->select('sum(amount) AS r_amount');
        $this->gdb->where('user_id', $id);
        $this->gdb->where('type', 'royalty');
        $data = $this->db->get($this->common->getWalletTable())->row();
        return $data;
    }
    public function getmyAwaordAmountCount($id) {
        $this->gdb->select('sum(amount) AS a_amount');
        $this->gdb->where('user_id', $id);
        $this->gdb->where('type', 'awaord');
        $data = $this->db->get($this->common->getWalletTable())->row();
        return $data;
    }
    
    public function addPaymentRequest($data) {
        return $this->db->insert($this->common->getPaymentRequestTable(), $data);
    }
    
    public function addTotalMyamount($data) {
        return $this->db->insert($this->common->getTotalMyamountTable(), $data);
    }
   
    public function getTotalMyamountById($id) {
        $this->gdb->where('user_id', $id);
        $this->gdb->order_by('id', 'desc');
        return $this->db->get($this->common->getTotalMyamountTable())->row();
    }
    
     public function UpdateTotalMyamountById($id, $data) {
        $this->db->where('user_id', $id);
        $this->db->update($this->common->getTotalMyamountTable(), $data);
        //echo $this->db->last_query(); die;
        return $data;
    }
    
}
