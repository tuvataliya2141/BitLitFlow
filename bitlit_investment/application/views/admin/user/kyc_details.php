<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">My KYC Details</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">
         <?php $this->load->view('_partials/messages'); ?>
        <!-- BEGIN VALIDATION STATES-->
        <form action="<?php echo base_url('admin/user/kyc_details'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-blue"></i>
                        <span class="caption-subject font-blue sbold uppercase">
                            My KYC Details
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
                                    <label class="control-label col-md-4">Refferal ID
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="refferal_id" disabled="disabled" name="refferal_id" value="<?php echo $data->refferal; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('refferal_id'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Member Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="member_name" disabled="disabled" name="member_name" value="<?php echo $data->member_name; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('member_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Mobile No.
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="mobile_no" disabled="disabled" name="mobile_no" value="<?php echo $data->mobile_no; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('mobile_no'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Father's Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="father_name" placeholder="Enter Father's Name" name="father_name" value="<?php echo $data->father_name; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('father_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Nominee Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="nominee_name" placeholder="Enter Nominee Name" name="nominee_name" value="<?php echo set_value('nominee_name'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('nominee_name'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Refferal Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="refferal_name" disabled="disabled" name="refferal_name" value="<?php echo $data->refferal_name; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('refferal_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Date of Joining
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="date_join" disabled="disabled" name="date_join" value="<?php echo $data->creation_datetime; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('date_join'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Email Id
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="email_id" placeholder="Enter Email Id" name="email_id" value="<?php echo $data->email_id; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('email_id'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Mother's Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="mother_name" placeholder="Enter Mother's Name" name="mother_name" value="<?php echo set_value('mother_name'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('mother_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Nominee Relation
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="nominee_relation" placeholder="Enter Nominee Relation" name="nominee_relation" value="<?php echo set_value('nominee_relation'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('nominee_relation'); ?>    
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
                                            <label class="control-label col-md-4">Aadhar Card NO
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" id="aadhar_no" placeholder="Enter Aadhar Card NO" name="aadhar_no" value="<?php echo set_value('aadhar_no'); ?>" data-required="1" class="form-control" />
                                            <?php echo form_error('aadhar_no'); ?>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Upload Aadhar Card Image <span class="required"> * </span></label>											
                                            <div class="col-md-8">
                                                <input type="file" id="img"  name="img"  data-required="1" class="form-control" />
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