<?php $this->load->view('header'); ?> 
<?php $this->load->view('side_menu'); ?> 
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?= base_url('profile'); ?>">Profile</a>
        </li>
    </ul>                            
</div>

<!-- END PAGE BAR -->

<div><br></div>
<div class="row">
    <div class="col-md-12">
      <?php $this->load->view('_partials/messages'); ?>
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Profile</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form method="post" action="<?php echo base_url(); ?>profile/edit/<?php echo $profile_data->admin_id; ?>" id="frmprofile" name="frmprofile" class="form-horizontal">
                <input type="hidden" name="action" value="edit" />
                <input type="hidden" name="admin_id" value="<? $profile_data->admin_id ?>" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="username" id="username" type="text" class="form-control" value="<?= isset($profile_data->username) ? $profile_data->username : '' ;?>" /> </div>
                        </div>                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Email Id
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="email_id" id="email_id" type="text" class="form-control" value="<?= isset($profile_data->email_id) ? $profile_data->email_id : '' ;?>" /> </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green" name="submit" value="submit">Submit</button>
                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
<?php $this->load->view('footer'); ?> 

