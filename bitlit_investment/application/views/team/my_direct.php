<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>My Direct</span>
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
                    <span class="caption-subject bold uppercase">My Direct</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th> Sno </th>
                            <th> Member Id </th>
                            <th> Member Name </th>
                            <th> Joining Date </th>
                            <th> Upgrade Date </th>
                            <th> Placement </th>
                            <th> Total BV </th>
                            <th> Total Volume </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($direct_data as $direct) {
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?= $i++; ?></td>
                                <td><?= $direct->user_id; ?></td>
                                <td><?= $direct->member_name; ?></td>
                                <td><?= $direct->creation_datetime; ?></td>
                                <td><?= $direct->modification_datetime; ?></td>
                                <td>
                                    <?php if ($direct->select_position == '2') { ?>
                                        <span style="color: royalblue;"> Right Lag </span>
                                    <?php } else if ($direct->select_position == '1'){ ?>
                                        <span style="color: #b0e62c;"> Left Lag </span>
                                    <?php } ?>
                                </td>
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