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
                <form action="<?php echo base_url('e_pin'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Wallet Balance</label>
                                    <div class="col-md-8">
                                        RS : <?= isset($my_data->total) ? $my_data->total : '0.00'; ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Amount
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="number" id="amount" placeholder="Enter amount" name="amount" value="<?php echo set_value('amount'); ?>" data-required="1" class="form-control" />
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
                                        <input type="number" id="amount" placeholder="Enter Quantity" name="quantity" value="<?php echo set_value('quantity'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('quantity'); ?>    
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
 