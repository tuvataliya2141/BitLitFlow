<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_terms_model extends CI_Model {

    /**
     * return all faqs
     */
    public function getAllFaqs() {
        return  $this->gdb->get($this->common->getFaqsTable())->result();
        
    }
	/**
     * return all Legal
     */
    public function getAllLegal() {
		$this->gdb->where('type','term_condition');
        return  $this->gdb->get($this->common->getAdminTermTable())->result();
        
    }
	/**
     * return all Winning_tips
     */
    public function getAllWinning_tips() {
		$this->gdb->where('type','winning_tips');
		return $this->gdb->get($this->common->getAdminTermTable())->result();
       
    }
	/**
     * return all about
     */
    public function getAllAbout() {
		$this->gdb->where('type','about');
        return $this->gdb->get($this->common->getAdminTermTable())->result();
        
    }
	/**
     * add faqs
     */
    public function insertFaqs($data) {
        $this->gdb->insert($this->common->getFaqsTable(), $data);
    }
	/**
     * add legal
     */
    public function insertLegal($data) {
        $this->gdb->insert($this->common->getAdminTermTable(), $data);
    }
	/**
     * add Winning_tips
     */
    public function insertWinning_tips($data) {
        $this->gdb->insert($this->common->getAdminTermTable(), $data);
    }
	/**
     * add about
     */
    public function insertAbout($data) {
        $this->gdb->insert($this->common->getAdminTermTable(), $data);
    }
	/**
     * return faqs  by faq_id
     */
    public function getFaqsById($faq_id) {
        $this->gdb->where('faq_id', $faq_id);
        return $this->gdb->get($this->common->getFaqsTable())->row();
    }
	/**
     * update faqs
     */
    public function updateFaqs($faq_id, $data) {
        $this->gdb->where('faq_id', $faq_id);
        $this->gdb->update($this->common->getFaqsTable(), $data);
    }
	/**
     * return faqs  by Winning_id
     */
    public function getWinning_tipsById($id) {
        $this->gdb->where('id', $id);
        return $this->gdb->get($this->common->getAdminTermTable())->row();
    }
	/**
     * update Winning_tips
     */
    public function updateWinning_tips($id, $data) {
        $this->gdb->where('id', $id);
        $this->gdb->update($this->common->getAdminTermTable(), $data);
    }
	/**
     * return faqs  by legal_id
     */
    public function getlegalById($id) {
        $this->gdb->where('id', $id);
        return $this->gdb->get($this->common->getAdminTermTable())->row();
    }
	/**
     * update legal
     */
    public function updatelegal($id, $data) {
        $this->gdb->where('id', $id);
        $this->gdb->update($this->common->getAdminTermTable(), $data);
    }
	/**
     * return faqs  by about_id
     */
    public function getAboutById($id) {
        $this->gdb->where('id', $id);
        return $this->gdb->get($this->common->getAdminTermTable())->row();
    }
	/**
     * update legal
     */
    public function updateAbout($id, $data) {
        $this->gdb->where('id', $id);
        $this->gdb->update($this->common->getAdminTermTable(), $data);
    }
	
	/**
     * return all howtomoney
     */
    public function getAllHowToMoney() {
		$this->gdb->where('type','howtomoney');
        return $this->gdb->get($this->common->getAdminTermTable())->result();
        
    }
	
	/**
     * add howtomoney
     */
    public function insertHowToMoney($data) {
        $this->gdb->insert($this->common->getAdminTermTable(), $data);
    }
	
	/**
     * return howtomoney  by howtomoney_id
     */
    public function getHowToMoneyById($howtomoney_id) {
        $this->gdb->where('id', $howtomoney_id);
        return $this->gdb->get($this->common->getAdminTermTable())->row();
    }
	
	/**
     * update howtomoney
     */
    public function updateHowToMoney($howtomoney_id, $data) {
        $this->gdb->where('id', $howtomoney_id);
        $this->gdb->update($this->common->getAdminTermTable(), $data);
    }
    
    /**
     * delete howtomoney 
     */
    public function deleteHowToMoney($id) {
        $this->gdb->where('id', $id);
        $this->gdb->delete($this->common->getAdminTermTable());
    }
    
    	/**
     * return all howtodeals
     */
    public function getAllHowToDeals() {
		$this->gdb->where('type','howtodeals');
        return $this->gdb->get($this->common->getAdminTermTable())->result();
        
    }
	
	/**
     * add howtodeals
     */
    public function insertHowToDeals($data) {
        $this->gdb->insert($this->common->getAdminTermTable(), $data);
    }
	
	/**
     * return howtodeals  by howtodeals_id
     */
    public function getHowToHowToDeals($howtodeals_id) {
        $this->gdb->where('id', $howtodeals_id);
        return $this->gdb->get($this->common->getAdminTermTable())->row();
    }
	
	/**
     * update howtodeals
     */
    public function updateHowToDeals($howtodeals_id, $data) {
        $this->gdb->where('id', $howtodeals_id);
        $this->gdb->update($this->common->getAdminTermTable(), $data);
    }
    
    /**
     * delete HowToDeals 
     */
    public function deleteHowToDeals($id) {
        $this->gdb->where('id', $id);
        $this->gdb->delete($this->common->getAdminTermTable());
    }
}
