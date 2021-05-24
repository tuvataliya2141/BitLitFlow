<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>My Royalty Statement</span>
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
                    <span class="caption-subject bold uppercase">My Royalty Statement</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th> SNo </th>
                            <th> PayoutDate </th>
                            <th> Total Direct Bv </th>
                            <th> Paid Amount </th>
                            <th> Royalty Slab Amount </th>
                            <th> Next Royalty Paid Date </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        //foreach ($direct_data as $direct) {
                            
                            ?>
                            <tr class="odd gradeX">
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><?= '0.00' ?></td>
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