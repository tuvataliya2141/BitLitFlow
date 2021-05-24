<?php $this->load->view('admin/login/header_login'); ?>  
<style>
    .error{color:red !important;}
</style>
<body class="login">
    <div class="logo">
        <a></a>
    </div>

    <div class="content">

        <form class="login-form" action="<?php echo base_url(); ?>admin/login" method="post" id="frmlogin">

            <h3 class="form-title">Login to your account</h3>
            <span class="help-inline" style="color:red;font-size:15px;">
                <?php
                if ($this->session->flashdata('msg')) {
                    echo $this->session->flashdata('msg');
                }
                ?>
            </span>
            <?php
            if (isset($msg) && $msg != '') {
                ?>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>

                    <span><?php echo $msg; ?></span>

                </div>
            <?php } ?>         


            <div class="form-group ">

                <label class="control-label visible-ie8 visible-ie9">User Id</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="User Id" name="user_id" value=""/>
                    <?php echo ((form_error('user_id') != "") ? '<span class="help-inline" style="color:red">' . form_error('user_id') . '</span>' : ''); ?>
                </div>
            </div>
            <div class="form-group <?php //echo ((form_error('password') != "") ? "has-error" : "");    ?>">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="pwd" value=""/> </div>
                <?php echo ((form_error('pwd') != "") ? '<span class="help-inline" style="color:red">' . form_error('pwd') . '</span>' : ''); ?>
            </div>
            <div class="form-actions">

                <input type="submit" class="btn green pull-center" id="btnsubmit" name="btnsubmit" value="Login">
            </div>
            <div class="forget-password">
                <h4><a href="<?php echo base_url(); ?>admin/login/forgotpassword" id="forget-password">Forgot your password ?</a></h4>                   

            </div>
        </form>
    </div>

    <?php $this->load->view('admin/login/footer_login'); ?>     
