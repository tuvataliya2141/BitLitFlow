<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->r_data['message'] = $this->r_data['data'] = '';
        $this->r_data['success'] = 0;
    }

    /**
     * Return response data
     */
    public function return_data($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }
    
    /**
     * Upload Winner Review Image
     */
    public function upload_winner_review_attch() {
        $this->load->model('user_model');
        $this->r_data['message'] = 'Upload error..!';
        $token_id = isset($_POST['token_id']) ? $_POST['token_id'] : '';
        $user_data = $this->user_model->getUserWithSession($token_id, 'login');

        if (!$user_data) {
            $this->r_data['message'] = 'User not found..!';
            return $this->return_data($this->r_data);
        }

        //Add attchment
        $is_upload = false;
        $attachment = array();
        if (isset($_FILES['attachment']['name'])) {
            foreach ($_FILES['attachment']['name'] as $key => $profile_image) {
                if ($_FILES['attachment']['error'][$key] == 0) {
                    $temp_file = $_FILES['attachment']['tmp_name'][$key];

                    $img_name = mt_rand(10000, 999999999) . time();
                    $path = $_FILES['attachment']['name'][$key];
                    $ext = pathinfo($path, PATHINFO_EXTENSION);

                    $image_data['attachment'] = $img_name . "." . $ext;
                    $url = ATTACHMENT_IMG . $image_data['attachment'];
                    $this->gdb->compress_image($temp_file, $url, 80);
                    $attachment[] = $image_data['attachment'];
                    $is_upload = true;
                }
            }
        }

        if ($is_upload) {
            $this->r_data['data'] = implode(',', $attachment);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Successfully Uploaded..!';
        }
        return $this->return_data($this->r_data);
    }

    /**
     * Upload User Image
     */
    public function upload_user_image() {
        $this->load->model('user_model');
        $this->r_data['message'] = 'Upload error..!';
        $type = isset($_POST['type']) ? $_POST['type'] : '';
        if($type == 'update'){
            $token_id = isset($_POST['token_id']) ? $_POST['token_id'] : '';
            $user_data = $this->user_model->getUserWithSession($token_id, 'login');

            if (!$user_data) {
                $this->r_data['message'] = 'User not found..!';
                return $this->return_data($this->r_data);
            }
        }

        //Upload User image
        $user_image = '';
        if (isset($_FILES['user_image']['name']) && $_FILES['user_image']['error'] == 0) {
            $temp_file = $_FILES['user_image']['tmp_name'];

            $img_name = "user_" . mt_rand(10000, 999999999) . time();
            $path = $_FILES['user_image']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $user_image = $img_name . "." . $ext;
            $url = PROFILEPIC . $user_image;
            $this->gdb->compress_image($temp_file, $url, 80);
            
            $this->r_data['data'] = $user_image;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Successfully Uploaded..!';
        }
        return $this->return_data($this->r_data);
    }
}
