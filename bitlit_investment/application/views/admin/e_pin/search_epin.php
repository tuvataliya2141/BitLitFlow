<script type="text/javascript">
    function callback(message)
    {
        var answer = confirm("Are you sure to want delete the user?");
        if (answer) {
            return true;
        }
        return false;
    }
</script>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?= base_url('admin/user'); ?>">Search E-pin </a>
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
                    <span class="caption-subject bold uppercase"> Search E-pin </span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <form method="post" action="<?php echo base_url("admin/e_pin/search_epin"); ?>" id="frmcategory" name="frmcategory" class="form-horizontal">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" id="e_pin" placeholder="Search E-Pin....." name="e_pin" value="<?php echo set_value('e_pin'); ?>" data-required="1" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="btn-group">
                                    <button type="submit" class="btn green" name="submit" value="submit">Search <i class="m-icon-swapright m-icon-white"></i></button>                               
                                </div>
                            </div>

                        </form>
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
                            <th> E-Pin </th>
                            <th> Amount </th>
                            <th> Issued To </th>
                            <th> Issue Date </th>                            
                            <th> Used By </th>
                            <th> Used Date </th>
                            <th> Transfered By </th>
                            <th> Transfered Date </th>                            
                            <th> Status </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" name="chkdlt" class="checkboxes" value="<?php echo isset($am_data->id) ? $am_data->id : ''; ?>" />
                                    <span></span>
                                </label>
                            </td>
                            <td>
                                <?php echo isset($am_data->e_pin) ? $am_data->e_pin : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->amount) ? $am_data->amount : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->i_id) ? $am_data->i_id : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->isused_date) ? $am_data->isused_date : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->u_id) ? $am_data->u_id : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->used_date) ? $am_data->used_date : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->t_id) ? $am_data->t_id : ''; ?>
                            </td>
                            <td>
                                <?php echo isset($am_data->transfer_date) ? $am_data->transfer_date : ''; ?>
                            </td>
                            <?php if(isset($am_data->status)) {?>
                            <td>
                                <?php if ($am_data->status == 0) { ?>
                                    <span class="btn btn-circle btn-xs green"> unused </span>
                                <?php } else { ?>
                                    <span class="btn btn-circle btn-xs blue"> used </span>
                                <?php } ?>
                            </td>
                            <?php } else { ?>
                            <td>
                               
                            </td>
                            <?php } ?>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
