<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>My Wallet</span>
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
                    <span class="caption-subject bold uppercase">My Wallet</span>
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
                            <th> Date </th>
                            <th> Description </th>
                            <th> Debit </th>
                            <th> Credit </th>
                            <th> Net Balance </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        //foreach ($ticket_data as $ticket) {
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?= $i++; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> 
                        <?php //}
                         ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 