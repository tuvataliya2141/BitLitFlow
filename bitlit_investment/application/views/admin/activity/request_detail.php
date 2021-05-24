<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Fund Id Request</a>
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
                        Fund Id Request
                    </span>
                </div>

                <div class="actions"> 
                </div>
            </div>
            <div class="portlet-body">
                <form action="<?php echo base_url('admin/activity/id_request_detail'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Request Amount
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="taxt" id="request_amount" placeholder="Enter Request Amount" name="request_amount" value="<?php echo set_value('request_amount');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('request_amount'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Deposit Company Bank
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="bank_id" id="bank_id">
                                            <option value="">Select...</option>
                                            <?php foreach ($bank_data as $bank) { ?>
                                                <option value="<?= $bank->bankid; ?>" <?= ($bank->bankid == set_value('bank_id')) ? 'selected="selected"' : ''; ?>><?= $bank->bank_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    <?php echo form_error('bank_id'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Payment Mode
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="payment_mode" id="payment_mode">
                                            <option value="0">By Cash</option>
                                            <option value="1">By DD</option>
                                            <option value="2">By Cheque</option>
                                            <option value="3">Bank Transfer </option>
                                            <option value="4">Paytm</option>
                                        </select>
                                    <?php echo form_error('payment_mode'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Deposit Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input class="form-control form-control-inline date-picker" name="deposit_date" id="deposit_date" type="text" value="">
                                        <?php echo form_error('deposit_date'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Deposit Time
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input type="text" name="deposit_time" id="deposit_time" class="form-control"> 
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button">
                                                    <i class="fa fa-clock-o"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <?php echo form_error('deposit_time'); ?> 
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Deposited By
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="taxt" id="deposited_by" placeholder="Enter Deposited By" name="deposited_by" value="<?php echo set_value('deposited_by');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('deposited_by'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Contact No
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="taxt" id="contact_no" placeholder="Enter Contact No" name="contact_no" value="<?php echo set_value('contact_no');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('contact_no'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">REASON WITH REFERNECE NUMBER
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="taxt" id="reason_refernece_no" placeholder="ENTER REASON WITH REFERNECE NUMBER" name="reason_refernece_no" value="<?php echo set_value('reason_refernece_no');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('reason_refernece_no'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Deposit Branch
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="taxt" id="deposit_branch" placeholder="Enter Deposit Branch" name="deposit_branch" value="<?php echo set_value('deposit_branch');; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('deposit_branch'); ?>    
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
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function (e)
    {
        $(".date-picker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });

        //$(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
        $('#deposit_time').timepicker({
            minuteStep: 1,
            template: 'modal',
            appendWidgetTo: 'body',
            showSeconds: true,
            showMeridian: false,
            defaultTime: false
        });
    });

    
</script>    