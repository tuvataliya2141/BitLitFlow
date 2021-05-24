<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Bitlit Flow</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="<?= base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="<?= base_url('assets/pages/css/profile.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       
        <link href="<?= base_url('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/datatables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />

        <link href="<?= base_url('assets/global/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= base_url('assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= base_url('assets/layouts/layout/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/layouts/layout/css/themes/darkblue.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= base_url('assets/layouts/layout/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <script src="<?= base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
		<script src="<?= base_url('assets/pages/scripts/common.js'); ?>" type="text/javascript"></script>
		<script src="<?= base_url('assets/custom/custom.js');?>"  type="text/javascript" ></script>
		 <link href="<?= base_url('assets/global/css/jquery.noty.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/css/noty_theme_default.css'); ?>" rel="stylesheet" type="text/css" />
		
        
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style>.error{color:red;}</style>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?= base_url(); ?>">
                            <img src="<?= base_url('assets/images/logo.png'); ?>" style="width: 100%; margin:7px 0 0;" alt="logo" class="logo-default" />                             
                        </a>
                        <div class="menu-toggler sidebar-toggler">
                        
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <?php $user_name = $this->session->userdata('user_data');
                            //echo "<pre>"; print_r($user_name->member_name); exit;
                             ?>
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    
                                    <span class="username username-hide-on-mobile"><?= $user_name->member_name ?></span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?php echo base_url('profile/userprofile/'. $user_name->id); ?>">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li> 
                                    <li>
                                        <a href="<?php echo base_url('profile/my_wallet/'. $user_name->id); ?>">
                                            <i class="fa fa-btc"></i> My Wallet </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>login/change_password">
                                            <i class="icon-lock"></i> Change Password </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>login/logout">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->

            <!-- BEGIN CONTAINER -->
            <div class="page-container">