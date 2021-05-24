<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Admin Ambassadors Club</span>
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
                    <span class="caption-subject bold uppercase">Admin Ambassadors Club</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_12">
                    <thead>
                        <tr>
                            <th> Sno. </th>
                            <th> User Id </th>
                            <th> Total Down Line </th>
                            <th> Action </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($ambassadors_data as $value) { 
                            if($value->downline >= 30){
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $i++; ?></td>
                                    <td><?= $value->user_id; ?></td>
                                    <td><?= $value->downline; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/admin_payment/ambassadors_pay/'.$value->id);?>" class="btn btn-circle btn-sm blue">Pay</a>
                                    </td>
                                </tr> 
                            
                        <?php } 
                        
                        }?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 