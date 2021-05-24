<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Request Detail</span>
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
                    <span class="caption-subject bold uppercase">Request Detail</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>                                                
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th> Sno. </th>
                            <th> Amount </th>
                            <th> Compnay Bank </th>
                            <th> IFSC Code </th>
                            <th> Branch </th>
                            <th> Deposited By </th>
                            <th> Contact No. </th>
                            <th> Deposite Date </th>
                            <th> Deposite Time </th>
                            <th> Request Date </th>
                            <th> Remark </th>
                            <th> Pay Mode </th>
                            <th> Status </th>
                            <th> Resolve Date </th>
                            <th> Admin Remark </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($report_data as $report) {
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?= $i++; ?></td>
                                <td><?= $report->request_amount; ?></td>
                                <td><?= $report->bank_name; ?></td>
                                <td><?= $report->ifsc_code; ?></td>
                                <td><?= $report->branch_name; ?></td>
                                <td><?= $report->deposited_by; ?></td>
                                <td></td>
                                <td><?= $report->deposit_date; ?></td>
                                <td><?= $report->deposit_time; ?></td>
                                <td><?= $report->creation_datetime; ?></td>
                                <td></td>
                                <td></td>
                                <td><span style="color: #b0e62c;"> Pending </span></td>
                                <td></td>
                                <td></td>
                            </tr> 
                        <?php }
                         ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 