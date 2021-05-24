<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function getRegistrationLogin($user_id, $pwd) {
        $this->gdb->where('user_id', $user_id);
        $this->gdb->where('password', $pwd);
        $this->gdb->where('if_admin!=', 1);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }
    
    public function getAdminRegistrationLogin($user_id, $pwd) {
        $this->gdb->where('user_id', $user_id);
        $this->gdb->where('password', $pwd);
        $this->gdb->where('if_admin!=', 0);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }

    public function updatePassword($user_id, $data) {
        $this->gdb->where('user_id', $user_id);
        $this->gdb->update($this->common->getRegistrationTable(), $data);
    }
    
    public function updatePasswordById($user_id, $data) {
        $this->gdb->where('id', $user_id);
        $this->gdb->update($this->common->getRegistrationTable(), $data);
    }
    
    public function getCheckUserId($user_id) {
        $this->gdb->where('user_id', $user_id);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }
    
    public function getLoginByUserId($user_id) {
        $this->gdb->where('user_id', $user_id);
        return $this->gdb->get($this->common->getRegistrationTable())->row();
    }
    
    

}
