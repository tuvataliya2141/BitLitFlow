<?php

/**
 * Authentication class.
 * 
 * @author Dinesh Ninave
 */
class auth {

    /**
     * CodeIgniter instance.
     * 
     * @var object 
     */
    private $CI;

    /**
     * Intialization.
     */
    public function __construct() {
        $this->CI = &get_instance();
    }

    /**
     * Check user session is active or not.
     * if not active it redirects to default route set.
     * 
     */
    public function check() {
       
        if (!isset($_SESSION['menu_access'])) {
            $this->CI->session->sess_destroy();
            redirect('?redirect=' . urlencode(current_url()));
            
        }

        if (!$this->CI->session->userdata('user_id')) {
            redirect('?redirect=' . urlencode(current_url()));
        }
        else {
            $module = $this->CI->router->fetch_module();

            #Special replacing
            $module = in_array($module, array("user", "usergroup")) ? "admin" : $module;
            $module = in_array($module, array("account")) ? "dashboard" : $module;

            if (!isset($_SESSION['menu_access'][$module]) || $_SESSION['menu_access'][$module] === 'N') {
                redirect('restricted');
            }
        }
    }

}
