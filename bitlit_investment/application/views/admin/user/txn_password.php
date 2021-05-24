<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Txn Password</a>
        </li>
    </ul>                            
</div>
<!-- END PAGE BAR -->

<div><br></div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Txn Password</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form method="post" action="<?php echo base_url(); ?>admin/user/txn_password" id="frmchangepassword" name="frmchangepassword" class="form-horizontal">
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Old Password
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="currentpassword" id="currentpassword" type="password" class="form-control" value="" /> </div>
                        </div>                        
                        <div class="form-group">
                            <label class="control-label col-md-3">New Password
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="newpassword" id="newpassword" type="password" class="form-control" value="" /> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Confirm Password
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="confirmpassword" id="confirmpassword" type="password" class="form-control" value="" /> </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green" name="submit" value="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function (e)
    {
       
        $('#frmchangepassword').validate({
            rules: {
                currentpassword: {
                    required: true
                }, 
                newpassword: {
                    required: true                    
                }, 
                confirmpassword: {
                    required: true,
                    equalTo: "#newpassword"
                }, 
            },
            messages: {
                currentpassword: {
                    required: "Please enter current password."
                },
                newpassword: {
                    required: "Please enter new password."
                },
                confirmpassword: {
                    required: "Please enter confirm password.",
                    equalTo: "Confrim password does not match."
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
    
</script>
