<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>My Payout</span>
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
                    <span class="caption-subject bold uppercase">My Payout</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th> Sno </th>
                            <th> Payout Date </th>
                            <th> Amount </th>
                            <th> Closing Balance </th>
                            <th> Remarks </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($am_data as $amount) { ?>
                            <tr class="odd gradeX">
                                <td><?= $i++; ?></td>
                                <td><?= $amount->date; ?></td>
                                <td><?= $amount->amount; ?></td>
                                <td><?= '0.00' ?></td>
                                <td><?= '0.00' ?></td>
                            </tr> 
                        <?php }
                         ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 