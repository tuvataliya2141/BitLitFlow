<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>My Rewards Statement</span>
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
                    <span class="caption-subject bold uppercase">My Rewards Statement</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_12">
                    <thead>
                        <tr>
                            <th> Date </th>
                            <th> User Id </th>                           
                            <th> User name </th>
                            <th> Amount </th>
                            <th> TDS(10%) </th>
                            <th> Admin(5%) </th>
                            <th> E-Wallet(5%) </th>
                            <th> Net Amount </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($direct_data as $direct) {
                            $tds=$direct->amount*10/100;
                            $admin=$direct->amount*5/100;
                            $e_wallet=$direct->amount*5/100;
                            $tamt=$direct->amount - $tds - $admin - $e_wallet;
                            ?>                                                        
                            <tr class="odd gradeX">
                                <td><?= $direct->date; ?></td>
                                <td><?= $direct->user_id; ?></td>
                                <td><?= $direct->member_name; ?></td>
                                <td><?= $direct->amount; ?></td>
                                <td><?= $tds; ?></td>
                                <td><?= $admin; ?></td>
                                <td><?= $e_wallet; ?></td>
                                <td><?= $tamt; ?></td>
                            </tr> 
                        <?php }
                         ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 