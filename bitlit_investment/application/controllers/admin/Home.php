<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('user_model');
        //$this->gdb->checkadminlogin();
    }

    public function index() {
		$user_id = $this->session->userdata('user_id');
		$data['b_data'] = $this->user_model->user_binary($user_id);
		$data['re_data'] = $this->user_model->user_reword($user_id);
		$data['ro_data'] = $this->user_model->user_royalty($user_id);
		$data['aw_data'] = $this->user_model->user_awaord($user_id);
		
		//echo "<pre>"; print_r($data['wallet_data']);die;
		//echo $user_id;
		//$data['wallet_data']->downline;
		/*$user_id1 = $this->session->userdata('user_id');
					$data['wallet_data'] = $this->user_model->user_wall($user_id1);
						foreach($data['wallet_data'] as $wall)
						{
							foreach($wall->upliner as $upl)
								{
									if($upl->select_position==1)
									{
										 $b = $upl->downline;
										 $b_right =$b+1;	 
									}
								else{
										$c = $upl->downline;
										 $c_right =$c+1;
									}
									
									
								}
							
							if($wall->downline==3 && $b_right==2 && $c_right==1)
								{
									$data['wallet_data1']=$this->user_model->user_wallet_Insert($user_id);
									//echo 100;
								}
							
							if($wall->downline==3 && $b_right==1 && $c_right==2)
								{
									$data['wallet_data1']=$this->user_model->user_wallet_Insert($user_id);
									//echo 100;
								}
							
							//echo $b_right;
							//echo $c_right;
						   //exit;
						}*/
		
		
		
		
		
        $data['view'] = 'admin/dashboard';
		//echo "<pre>"; print_r($data['wallet_data']); exit;
        $this->load->view('admin/admin_master', $data);
		
    }
	


    public function getData() {
        is_ajax();
        $day = isset($_POST['day']) ? $_POST['day'] : '';
        $this->load->view('admin/view_dashboard_trans', $data);
    }

}
