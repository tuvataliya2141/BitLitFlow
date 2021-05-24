<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Request E-Pin</a>
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
                        Request E-Pin
                    </span>
                </div>
                <div class="actions"> 
                </div>
            </div>
            <div class="portlet-body">
                <form action="<?php echo base_url('e_pin/request_epin'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Reference No.
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="number" id="tranaction_no" placeholder="Enter Reference No." name="tranaction_no" value="<?php echo set_value('tranaction_no'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('tranaction_no'); ?>    
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
                                        <input type="number" id="qty" placeholder="Enter Quantity" name="qty" value="<?php echo set_value('qty'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('qty'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Upload Receipt Image
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input required type="file" id="image"  name="image"  data-required="1" class="form-control" />
                                    <?php echo form_error('image'); ?>    
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
 