<?php        
$this->load->view('header');
$this->load->view('side_menu'); 
if(isset($view))
	$this->load->view($view);
$this->load->view('footer');
?>