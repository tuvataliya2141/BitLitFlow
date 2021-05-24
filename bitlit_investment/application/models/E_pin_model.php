<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class E_pin_model extends CI_Model {

    /**
     * get All user
     */
    public function getAmbassadors() {
        $data = $this->gdb->get($this->common->getRequestEPinTable())->result();
        return $data;
    }
    
    public function getEPinMasterById($id) {
        $this->gdb->select('e.*, u.user_id AS u_id');
        $this->gdb->where('e.isused_id', $id);
        $this->gdb->where('e.status', 0);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.isused_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->result();
        
        return $data;
    }
    
    public function getEPinMasterByUnused($id) {
        $this->gdb->select('e.*, u.user_id AS u_id');
        $this->gdb->where('e.isused_id', $id);
        $this->gdb->where('e.status', 0);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.isused_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->result();
        
        return $data;
    }
    public function getEPinMasterByUnsedAdmin() {
        $this->gdb->select('e.*, u.user_id AS u_id');
        $this->gdb->where('e.status', 0);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.isused_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->result();
        
        return $data;
    }
    
    public function getEPinMasterByUsed($id) {
        $this->gdb->select('e.*, u.user_id AS u_id, d.user_id AS d_id');
        $this->gdb->where('e.isused_id', $id);
        $this->gdb->where('e.status', 1);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.isused_id','LEFT');
        $this->gdb->join($this->common->getRegistrationTable().' AS d','d.id = e.used_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->result();
        
        return $data;
    }
    public function getEPinMasterByUsedAdmin() {
        $this->gdb->select('e.*, u.user_id AS u_id, d.user_id AS d_id');
        $this->gdb->where('e.status', 1);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.isused_id','LEFT');
        $this->gdb->join($this->common->getRegistrationTable().' AS d','d.id = e.used_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->result();
        
        return $data;
    }
    
    public function getRequestEPinAdmin() {
        $this->gdb->select('e.*, u.user_id AS u_id, u.member_name AS name');
        $this->gdb->where('e.status', 0);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.isused_id','LEFT');
        $data = $this->db->get($this->common->getRequestEPinTable().' AS e')->result();
        return $data;
    }
    
    public function getEPinMasterByTranster($id,  $from, $to) {
        $this->gdb->select('e.*, t.user_id AS t_id, u.user_id AS u_id');
        $this->gdb->where('e.user_id', $id);
        $this->gdb->where('e.transfer_id!=', 0);
        $this->gdb->where('e.is_deleted', 0);
        if ($from)
            $this->gdb->where('e.transfer_date >=', date('Y-m-d h:i:s', strtotime(str_replace('/', '-', $from))));
        if ($to)
            $this->gdb->where('e.transfer_date <=', date('Y-m-d h:i:s', strtotime(str_replace('/', '-', $to))));
        $this->gdb->join($this->common->getRegistrationTable().' AS t','t.id = e.transfer_id','LEFT');
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.used_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->result();
        
        return $data;
    }
    
    public function getEPinMasterBySearch($search) {
        $this->gdb->select('e.*, t.user_id AS t_id, u.user_id AS u_id, i.user_id AS i_id');
        $this->gdb->where('e.e_pin', $search);
        $this->gdb->where('e.is_deleted', 0);
        $this->gdb->join($this->common->getRegistrationTable().' AS i','i.id = e.isused_id','LEFT');
        $this->gdb->join($this->common->getRegistrationTable().' AS t','t.id = e.transfer_id','LEFT');
        $this->gdb->join($this->common->getRegistrationTable().' AS u','u.id = e.used_id','LEFT');
        $data = $this->db->get($this->common->getEPinMasterTable().' AS e')->row();
       // echo $this->db->last_query(); die;
        return $data;
    }
    
    public function getEPinMasterByShow($id) {
        $data = $this->gdb->query("SELECT * FROM `e_pin_master` WHERE id IN($id)")->result();
        return $data;
    }
    
    /**
     * Add EPinMaster
     */
    public function AddEPinMaster($data) {
        return $this->gdb->insert($this->common->getEPinMasterTable(), $data);
    }
    
    public function AddRequestEPin($data) {
        return $this->gdb->insert($this->common->getRequestEPinTable(), $data);
    }
    
    public function UpdateEPinMaster($id, $data) {
        $this->db->where('id', $id);
        $this->db->update($this->common->getEPinMasterTable(), $data);
        return $data;
    }
    
    public function UpdateEPinMasterByUser($id, $data) {
        $this->db->where('id', $id);
        $this->db->update($this->common->getEPinMasterTable(), $data);
        return $data;
    }
    
    public function getCopenCheck($e_pin) {
        $this->gdb->where('e_pin', $e_pin);
        return $this->gdb->get($this->common->getEPinMasterTable())->row();
    }
    
    public function deleteEPin($user_id) {
        $this->gdb->where('id', $user_id);
        $data = $this->gdb->delete($this->common->getEPinMasterTable());
        //echo $this->db->last_query(); die;
        return $data;
    }
    
    public function deleteEPinRequest($user_id) {
        $this->gdb->where('id', $user_id);
        $data = $this->gdb->delete($this->common->getRequestEPinTable());
        //echo $this->db->last_query(); die;
        return $data;
    }
    
    public function getRequestEPinById($id) {
        $this->gdb->where('id', $id);
        return $this->gdb->get($this->common->getRequestEPinTable())->row();
    }
    
    public function UpdateRequestEPin($id, $data) {
        $this->db->where('id', $id);
        $this->db->update($this->common->getRequestEPinTable(), $data);
        return $data;
    }
	
	/**
     * Package
     */
    
    
    public function getAllPackage() {
        return $this->gdb->get($this->common->getPackageTable())->result();
    }
    
    public function getPackageById($id) {
        $this->gdb->where('id', $id);
        return $this->gdb->get($this->common->getPackageTable())->row();
    }
    
    public function UpdatePackage($id, $data) {
        $this->db->where('id', $id);
        $this->db->update($this->common->getPackageTable(), $data);
        return $data;
    }
    
     public function AddPackage($data) {
        return $this->gdb->insert($this->common->getPackageTable(), $data);
    }
    
    public function deletePackage($user_id) {
        $this->gdb->where('id', $user_id);
        $data = $this->gdb->delete($this->common->getPackageTable());
        //echo $this->db->last_query(); die;
        return $data;
    }
    
}
