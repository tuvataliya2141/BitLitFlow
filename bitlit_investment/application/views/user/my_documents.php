<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">My Documents</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-blue"></i>
                    <span class="caption-subject font-blue sbold uppercase">
                        My Documents
                    </span>
                </div>

                <div class="actions"> 
                </div>
            </div>
            <div class="portlet-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Pan Card</h4>
                            <div class="profile-sidebar" style="width: 450px;">
                                <div class="portlet light profile-sidebar-portlet" style="height: 240px;border-style: inset;">
                                   <img src="<?= isset($bank_data->pan_path) ? $bank_data->pan_path : base_url('assets/images/upload.png'); ?>" style="left: 242px;width: 400px;height: 204px;padding-left: 40px;padding-bottom: 30px;" class="img-responsive" alt="">
                                </div>
                            </div>
                            <h4>Cancel Cheque</h4>
                            <div class="profile-sidebar" style="width: 450px;">
                                <div class="portlet light profile-sidebar-portlet" style="height: 240px;border-style: inset;">
                                    <img src="<?= isset($bank_data->image_path) ? $bank_data->image_path : base_url('assets/images/upload.png'); ?>" style="left: 242px;width: 400px;height: 204px;padding-left: 40px;padding-bottom: 30px;" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Adhar Card</h4>
                            <div class="profile-sidebar" style="width: 450px;">
                                <div class="portlet light profile-sidebar-portlet" style="height: 240px;border-style: inset;">
                                    <img src="<?= isset($aadhar_data->image_path) ? $aadhar_data->image_path : base_url('assets/images/upload.png'); ?>" style="left: 242px;width: 400px;height: 204px;padding-left: 40px;padding-bottom: 30px;" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   