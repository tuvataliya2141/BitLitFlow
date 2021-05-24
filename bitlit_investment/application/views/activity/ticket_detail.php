<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Generate Ticket</a>
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
                        Generate Ticket
                    </span>
                </div>

                <div class="actions"> 
                </div>
            </div>
            <div class="portlet-body">
                <form action="<?php echo base_url('activity/id_ticket_detail'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Select Ticket
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="ticket" id="ticket">
                                            <option value="0">Change Mobile No.</option>
                                            <option value="1">Change Pan Card</option>
                                            <option value="2">Other Supports</option>
                                            <option value="3">Change Bank A/c No. </option>
                                            <option value="4">Change IFSC Code</option>
                                            <option value="5">Change Payee Name</option>
                                            <option value="6">Change Bank Name & Address</option>
                                            <option value="7">Payout Retaled Issues</option>
                                        </select>
                                    <?php echo form_error('ticket'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Regarding Subject
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="taxt" id="subject" placeholder="Enter Regarding Subject" name="subject" value="<?php echo set_value('subject');; ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('subject'); ?>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Query Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description" rows="3"><?php echo set_value('description');; ?></textarea>
                                        <?php echo form_error('description'); ?>  
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