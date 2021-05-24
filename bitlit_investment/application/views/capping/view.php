<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Capping Income</span>
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
                    <span class="caption-subject bold uppercase">Capping Income</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 150px;"> Top Up Amount </th>
                            <th> Daily Capping </th>
                            <th> Points </th>
                            <th> Capping Per Day Month </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                            foreach ($royal_data as $royal) { ?>
                                <tr class="odd gradeX">
                                    <td><?= $royal->top_up_amount; ?></td>
                                    <td><?= $royal->daily_capping; ?></td>
                                    <td><?= $royal->points; ?></td>
                                    <td><?= $royal->capping_per_day_month; ?></td>
                                </tr> 
                        <?php } ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 