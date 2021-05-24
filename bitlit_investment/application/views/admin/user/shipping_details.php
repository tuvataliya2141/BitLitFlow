<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">My Correspendence/Shipping Details</a>
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
                        New Registration Information
                    </span>
                </div>
                <div class="actions">                    
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="<?php echo base_url('admin/user/shipping_details'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">House/Flat NO.
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="house_no" placeholder="Enter House/Flat NO." name="house_no" value="<?php echo set_value('house_no'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('house_no'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Building/Society Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="building_name" placeholder="Enter Building/Society Name" name="building_name" value="<?php echo set_value('building_name'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('building_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Street Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="street_name" placeholder="Enter Street Name" name="street_name" value="<?php echo set_value('street_name'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('street_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Locality/Area
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="locality" placeholder="Enter Street Name" name="locality" value="<?php echo set_value('locality'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('locality'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Village/Post Office
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="village" placeholder="Enter Village/Post Office" name="village" value="<?php echo set_value('village'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('village'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Country
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="country" id="country" onchange="Getstate(this.value)">
                                            <option value="">Select...</option>
                                            <?php foreach ($countrie_data as $countrie) { ?>
                                                <option value="<?= $countrie->id; ?>" <?= ($countrie->id == set_value('country')) ? 'selected="selected"' : ''; ?>><?php echo '+' . $countrie->phonecode . ' ' . $countrie->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    <?php echo form_error('country'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">State
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="state" id="state">
                                        </select>
                                    <?php echo form_error('state'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">District
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="district" placeholder="Enter District" name="district" value="<?php echo set_value('district'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('district'); ?>    
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-md-4">City/Tehsil
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="city" placeholder="Enter City/Tehsil" name="city" value="<?php echo set_value('city'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('city'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Pin Code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="pin_code" placeholder="Enter Pin Code" name="pin_code" value="<?php echo set_value('pin_code'); ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('pin_code'); ?>    
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
                <!-- END FORM-->
            </div>
        </div>
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

    function Getstate(sid) {
        //var sid=$("#user_id").val();
        //alert(sid);
        if (sid != '')
        {
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url() ?>admin/user/Getstate/",
                data: {primary_customer: sid},
                dataType: 'json',
                success: function (response) {
                    //alert(response);
                    $("#state").html(response.view);

                }
            });

        }
    }
</script>    