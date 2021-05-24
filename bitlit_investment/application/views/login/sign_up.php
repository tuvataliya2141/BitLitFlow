<?php $this->load->view('login/header_login'); ?>  
<style>
    .error{color:red !important;}
</style>
<body class="login">
    <div class="logo">
        <a></a>
    </div>

    <div class="content">

        <form class="login-form" action="<?php echo base_url(); ?>login/sign_up" method="post" id="frmlogin">

            <h3 class="form-title">Sign Up Your Account</h3>
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
                <label class="control-label visible-ie8 visible-ie9">Email Id</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Id" name="email_id" value=""/>
                    <?php echo ((form_error('email_id') != "") ? '<span class="help-inline" style="color:red">' . form_error('email_id') . '</span>' : ''); ?>
                </div>
            </div> 
            <div class="form-group ">
                <label class="control-label visible-ie8 visible-ie9">Member Name</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Member Name" name="member_name" value=""/>
                    <?php echo ((form_error('member_name') != "") ? '<span class="help-inline" style="color:red">' . form_error('member_name') . '</span>' : ''); ?>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label visible-ie8 visible-ie9">Father Name </label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Father Name" name="father_name" value=""/>
                    <?php echo ((form_error('father_name') != "") ? '<span class="help-inline" style="color:red">' . form_error('father_name') . '</span>' : ''); ?>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label visible-ie8 visible-ie9">Mobile No</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Mobile No" name="mobile_no" value=""/>
                    <?php echo ((form_error('mobile_no') != "") ? '<span class="help-inline" style="color:red">' . form_error('mobile_no') . '</span>' : ''); ?>
                </div>
            </div>
			<div class="form-group ">
                <label class="control-label visible-ie8 visible-ie9">Select Position</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <select class="form-control placeholder-no-fix" name="select_position" value="">
                        <option value=""><i class="fa fa-user"></i>Select Position</option>
                        <option value="1"><i class="fa fa-user"></i>Left</option>
                        <option value="2"><i class="fa fa-user"></i>Right</option>
                    </select>
                    <?php echo ((form_error('select_position') != "") ? '<span class="help-inline" style="color:red">' . form_error('select_position') . '</span>' : ''); ?>
                </div>
            </div>
            
            <div class="form-actions">
                <input type="submit" class="btn green pull-center" id="btnsubmit" name="btnsubmit" value="Sign UP">
            </div>
            
        </form>



    </div>

    <?php $this->load->view('login/footer_login'); ?>     

<script>
    function upliner()
    {
        var up
        alert('hjhj');
    }

</script>

