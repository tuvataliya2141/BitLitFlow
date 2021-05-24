<div id="DeleteItem" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Package </h4>
            </div>
            <div class="modal-body">
                <p>Are you sure? Do you want to delete this Package ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<form id="deletemultiple" action="" method="post">
    <input type="hidden" name="matches" value="">
</form> 
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?= base_url('admin/user'); ?>">Package</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">

        <?php $this->load->view('_partials/messages'); ?>

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Package</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="<?php echo base_url('admin/package/add'); ?>" id="sample_editable_1_new" class="btn sbold green">
                                    Add New Package
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" id="check_all" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> package </th>
                            <th> Amount </th>
                            <th> status </th>
                            <th> Actions </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($am_data)):
                            foreach ($am_data as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" name="chkdlt" class="checkboxes" value="<?php echo $value->id; ?>" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <?php echo $value->package; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->price; ?>
                                    </td>
                                    <td>
                                        <?php if ($value->status == 0) { ?>
                                            <span class="btn btn-circle btn-xs green"> Active </span>
                                        <?php } else { ?>
                                            <span class="btn btn-circle btn-xs blue"> Deactive </span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/package/edit/' . $value->id); ?>" class="btn btn-squre btn-sm blue"><i class="fa fa-edit"></i></a>
                                        <a onclick="DeleteItem('<?php echo base_url('admin/package/delete/' . $value->id); ?>')" data-backdrop="static" data-keyboard="false" class="btn btn-circle btn-sm red"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>

                            <?php } else: ?>

                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
