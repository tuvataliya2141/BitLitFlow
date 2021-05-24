<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">My Bank Details</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">
         <?php $this->load->view('_partials/messages'); ?>
        <!-- BEGIN VALIDATION STATES-->
        <form action="<?php echo base_url('user/bank_detail'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-blue"></i>
                        <span class="caption-subject font-blue sbold uppercase">
                            My Bank Details
                        </span>
                    </div>

                    <div class="actions"> 
                    <h4>Kindly update your bank details on your Future Maker ID, so that Future Maker can transfer your payouts on correct bank details.</h4>                   
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Bank Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="bank_id" id="bank_id">
                                            <option value="">Select...</option>
                                            <?php foreach ($bank_data as $bank) { ?>
                                                <option value="<?= $bank->bankid; ?>" <?= ($bank->bankid == set_value('bank_id')) ? 'selected="selected"' : ''; ?>><?php echo $bank->bank_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    <?php echo form_error('bank_id'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Account No
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="account_no" placeholder="Enter Account No" name="account_no" value="<?php echo set_value('account_no');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('account_no'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Branch Name and Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="branch_name" placeholder="Enter Account No" name="branch_name" value="<?php echo set_value('branch_name');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('branch_name'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">A/c Holder Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="holder_name" placeholder="Enter A/c Holder Name" name="holder_name" value="<?php echo set_value('holder_name'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('holder_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">IFSC Code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="ifsc_code" placeholder="Enter IFSC Code" name="ifsc_code" value="<?php echo set_value('ifsc_code'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('ifsc_code'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Upload Cancel Cheque
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input required type="file" id="cheque_image"  name="cheque_image"  data-required="1" class="form-control" />
                                    <?php echo form_error('cheque_image'); ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-blue"></i>
                                <span class="caption-subject font-blue sbold uppercase">
                                    My Identifical Details
                                </span>
                            </div>
                            <div class="actions">                    
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Pan Card NO.
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" id="pan_no" placeholder="Enter Pan Card NO." name="pan_no" value="<?php echo set_value('pan_no'); ?>" data-required="1" class="form-control" />
                                            <?php echo form_error('pan_no'); ?>    
                                            </div>
                                        </div>
                                        <div class="form-group">											
                                            <label class="control-label col-md-4">Upload Pan Card Image <span class="required"> * </span></label>
                                            <div class="col-md-8">
                                                <input required type="file" id="img"  name="img"  data-required="1" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="status" value="1" name="status">  I have read & understand carefully the terms & conditions of Bitlit Investment. Ltd and also agreed to abide by the same.
                                        <?php echo form_error('status'); ?>  
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END VALIDATION STATES-->
    </div>
</div>

<script>
    $(document).ready(function() {
        var date_input=$('input[name="datepicker"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    });

    
</script>    