<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Award Reward Income</span>
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
                    <span class="caption-subject bold uppercase">Award Reward Income</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
							<th> Pair </th>
                            <th> Designation </th>                           
							<th> Income </th>                            
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                            foreach ($award_data as $award) { ?>
                                <tr class="odd gradeX">
                                    <td><?= $award->pair; ?></td>
                                    <td><?= $award->designation; ?></td>
                                    <td><?= $award->income; ?></td>                                    
                                </tr> 
                        <?php } ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 