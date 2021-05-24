<?php $this->load->view('login/header_login'); ?>  
<style>
#email-error
{
    color:red;
}
#password-error
{
    color:red;
}
</style>
<body class=" login">

    <div class="logo">
        <a></a>
    </div>

    <div class="content">

        <form class="login-form" action="<?php echo base_url(); ?>login/forgotpassword" method="post" id="frmforgotpassword">

            <h3 class="form-title">Forget Password</h3>
            <p> Enter your User Id address below to reset your password. </p>
            <span class="help-inline" style="color:red;font-size:15px;">
                <?php if($this->session->flashdata('msg')) { 
                        echo $this->session->flashdata('msg');
                } ?>
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
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter User Id" name="user_id" value=""/>
                    <?php echo form_error('user_id'); ?>
                </div>
            </div>            
            <div class="form-actions">
                <a href="<?php echo base_url(); ?>login" class="btn red btn-outline">Back</a>                
                <input type="submit" class="btn green pull-center" id="btnsubmit" name="btnsubmit" value="Submit">
            </div>
        </form>
    </div>
<script type="text/javascript">
    $(document).ready(function (e)
    {   
//        $('#frmforgotpassword').validate({
//            rules: {
//                email: {
//                    required: true
//                },                 
//            },
//            messages: {
//                email: {
//                    required: "Please enter email id."
//                },                  
//            },
//            highlight: function (element) {
//                $(element).parent().addClass('error')
//            },
//            unhighlight: function (element) {
//                $(element).parent().removeClass('error')
//            },
//            submitHandler: function (form) {
//                form.submit();
//            }
//        });        
        
    });
    
</script>
<?php $this->load->view('login/footer_login'); ?>     
