<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Edit Package</a>
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
                       Edit Package
                    </span>
                </div>
                <div class="actions"> 
                </div>
            </div>
            <div class="portlet-body">
                <form action="<?php echo base_url('admin/package/edit/' . $am_data->id); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Package
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="package" placeholder="Enter Package" name="package" value="<?php echo ($am_data->package) ? $am_data->package : ''; ?>" data-required="1" class="form-control" />
                                    <?php echo form_error('package'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Amount
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="price" placeholder="Enter Amount" name="price" value="<?php echo ($am_data->price) ? $am_data->price : ''; ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('price'); ?>    
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
 