<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Resolve Ticket Report</span>
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
                    <span class="caption-subject bold uppercase">Resolve Ticket Report</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th> Sno. </th>
                            <th> Request Date </th>
                            <th> Ticket No. </th>
                            <th> Ticket Name </th>
                            <th> Subjet </th>
                            <th> Query Desc. </th>
                            <th> Status </th>
                            <th> Resolve Date </th>
                            <th> Admin Remarks </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($ticket_data as $ticket) {
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?= $i++; ?></td>
                                <td><?= $ticket->creation_datetime ?></td>
                                <td><?= $ticket->ticket_no ?></td>
                                <td>
                                    <?php if ($ticket->ticket == 0) { ?>
                                        <span style="color: royalblue;"> Change Mobile No. </span>
                                    <?php } else if ($ticket->ticket == 1){ ?>
                                        <span style="color: #b0e62c;"> Change Pan Card </span>
                                    <?php } else if ($ticket->ticket == 2){ ?>
                                        <span style="color: red;"> Other Supports </span>
                                    <?php } else if ($ticket->ticket == 3){ ?>
                                        <span style="color: green;"> Change Bank A/c No. </span>
                                    <?php } else if ($ticket->ticket == 4){ ?>
                                        <span style="color: pink;"> Change IFSC Code </span>
                                    <?php } else if ($ticket->ticket == 5){ ?>
                                        <span style="color: blue;"> Change Payee Name </span>
                                    <?php } else if ($ticket->ticket == 6){ ?>
                                        <span style="color: purple;"> Change Bank Name & Address </span>
                                    <?php } else if ($ticket->ticket == 7){ ?>
                                        <span style="color: orange;"> Payout Retaled Issues </span>
                                    <?php } ?>
                                </td>
                                <td><?= $ticket->subject ?></td>
                                <td><?= $ticket->description ?></td>
                                <td>
                                    <?php if ($ticket->ticket_status) { ?>
                                        <span style="color: royalblue;"> Complete </span>
                                    <?php } else { ?>
                                        <span style="color: #b0e62c;"> Pending </span>
                                    <?php } ?>
                                </td>
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