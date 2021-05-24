<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Create E-Pin</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <?php $this->load->view('_partials/messages'); ?>
        <!-- BEGIN VALIDATION STATES-->

        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-blue"></i>
                    <span class="caption-subject font-blue sbold uppercase">
                        Create E-Pin
                    </span>
                </div>
                <div class="actions"> 
                </div>
            </div>
            <div class="portlet-body">
                <div class="col-md-12" style="background-color:#dff0d8; padding: 10px;">
                    <h4>Selected Epins</h4>
                   <?php foreach ($am_data as $key => $value) { ?>
                    <span><b><?= $value->e_pin; ?></b> of amount RS. <b><?= $value->amount; ?></b></span><br> 
                   <?php } ?>
                </div>
            </div>
                <div class="portlet-body">
                <form action="<?php echo base_url('e_pin/transfer_epin_add'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="e_pinid" value="<?= $e_id; ?>">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Transefer To
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="user_id" placeholder="Enter Transefer To" name="user_id" value="<?php echo set_value('user_id'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('user_id'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Wallet Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="password" id="amount" placeholder="Enter Wallet Password" name="password" value="<?php echo set_value('password'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('password'); ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-4 col-md-9">
                                <button type="submit" class="btn green">Generate</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
