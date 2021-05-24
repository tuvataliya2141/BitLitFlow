<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>User List</span>
        </li>
    </ul>                            
</div>
<!-- END PAGE BAR -->

<div><br></div>
<div class="row">
    <div class="col-md-12">
        <?php $this->load->view('_partials/messages'); ?>
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">User List</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_12">
                    <thead>
                        <tr>
                            <th> User Id. </th>
                            <th> Email Id </th>
                            <th> Member Name </th>
                            <th> Password </th>
                            <th> Txt Password </th>
                            <th> Payment </th>
                            <th> Payment status </th>
                            <th> Action </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php
                        foreach ($user_data as $key => $value) {
                            $id = $value->id;
                            ?>
                            <tr class="odd gradeX">
                                <td><?= $value->user_id; ?></td>
                                <td><?= $value->email_id; ?></td>
                                <td><?= $value->member_name; ?></td>
                                <td><?= base64_decode($value->pwd); ?></td>
                                <td><?= base64_decode($value->txn_pwd); ?></td>
                        <form method="post" action="<?php echo base_url('admin/user/payment_update'); ?>">
                            <td>
                                <?php if ($value->payment_status == 0) { ?>
                                    <select required class="form-control select2me" name="paym" id="paym_<?= $id; ?>" onchange="myFunction(<?= $id; ?>)">
                                        <option value="0">Payment</option>
                                        <option value="10500">10,500</option>
                                        <option value="21000">21,000</option>
                                        <option value="42000">42,000</option>
                                        <option value="84000">84,000</option>
                                    </select>
                                <?php } else { ?> 
                                    <?= $value->payment; ?>
                                <?php } ?>   
                            </td>
                            <td>
                                <?php if ($value->payment_status != 0) { ?>
                                    <span   style="color:green;">Activated</span>
                                <?php } else {
                                    ?>
                                    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                    <input type="submit" style="display:none;" class="btn btn-circle btn-sm blue" id="show_<?= $id; ?>" value="Actuve" name="submit">
                                    <span class="btn btn-circle btn-sm red" style="display:block;" id="hide_<?= $id; ?>">Please Select Payment</span>
                                <?php } ?>

                            </td>
                        </form>
                        <td><a href="<?= base_url('admin/user/userprofile/' . $value->id) ?>" class="btn btn-circle btn-sm green"><i class="fa fa-eye"></i></a></td>
                        </tr> 

                    <?php } ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction(id) {
        var x = document.getElementById('paym_' + id).value;
        //alert (id);
        if (x == '0') {
            $('#show_' + id).css("display", "none");
            $('#hide_' + id).css("display", "block");
        } else {
            $('#show_' + id).css("display", "block");
            $('#hide_' + id).css("display", "none");
        }
    }
</script> 



