<div id="DeleteItem" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete E-Pin </h4>
            </div>
            <div class="modal-body">
                <p>Are you sure? Do you want to delete this E-Pin ?</p>
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
            <a href="<?= base_url('admin/user'); ?>">Unused E-pin</a>
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
                    <span class="caption-subject bold uppercase"> Unused E-pin</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" id="check_all" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> E-Pin </th>
                            <th> Amount </th>
                            <th> Issue To </th>
                            <th> Issue Date </th>
                            <th> Status </th>                            
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
                                        <?php echo $value->e_pin; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->amount; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->u_id; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->isused_date; ?>
                                    </td>
                                    <td>
                                        <?php if ($value->status == 0) { ?>
                                            <span class="btn btn-circle btn-xs green"> unused </span>
                                        <?php } else { ?>
                                            <span class="btn btn-circle btn-xs blue"> used </span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a onclick="DeleteItem('<?php echo base_url('admin/e_pin/delete/' . $value->id); ?>')" data-backdrop="static" data-keyboard="false" class="btn btn-circle btn-sm red"><i class="fa fa-trash-o"></i></a>
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
