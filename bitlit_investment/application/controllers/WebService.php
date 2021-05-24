<?php

/**
 * Description of WebService
 *
 * @author Dinesh Ninave
 */
class WebService extends CI_Controller {

    /**
     * Web service for mobile application.
     * 
     */
    public function service() {
        $this->load->library('web_service');
        $this->web_service->call();
    }

}
