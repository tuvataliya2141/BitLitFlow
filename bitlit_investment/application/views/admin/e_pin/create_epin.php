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
                <form action="<?php echo base_url('admin/e_pin'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Amount
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="amount" id="amount">
                                            <option value="">Select...</option>
                                            <?php foreach ($package_data as $package) { ?>
                                                <option value="<?= $package->price; ?>"><?= $package->package; ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php echo form_error('amount'); ?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Quantity
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="amount" placeholder="Enter Quantity" name="quantity" value="<?php echo set_value('quantity'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('quantity'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Assign To User
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="user_id" placeholder="Enter User Id" name="user_id" value="<?php echo set_value('user_id'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('user_id'); ?>    
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
 