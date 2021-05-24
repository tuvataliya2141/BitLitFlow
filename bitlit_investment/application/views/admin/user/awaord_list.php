<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>User List</span>
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
                    <span class="caption-subject bold uppercase">User List</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>                                                
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_12">
                    <thead>
                        <tr>
                            <th style="width:160px;">  Id. </th>
                            <th> User Id. </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Total Downline </th>
                            <th> Awaord Income </th>
                            <th> Tax 1 </th>
                            <th> Tax 1 </th>
                            <th> Tax 1 </th>
                            <th> Net Amount </th>
                            <th> Pay </th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                       
                        foreach ($registration as $key => $value) { 
						
                            $id=$value->id;
                            ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $value->id; ?></td>
                                    <td><?php echo $value->user_id; ?></td>
                                    <td><?php echo $value->member_name; ?></td>
                                    <td><?php echo $value->email_id; ?></td>
                                    <td><?php echo $value->downline; ?></td>
                                    <td>
                                    	<?php foreach($awaord_data as $amount)
										 { 
											if($amount->id==$value->award)
											{
												echo $amount->income;
											}
										 } 
										 ?>
                                    </td>
                                    <td><input type="text" name="tax1"></td>
                                    <td><input type="text" name="tax2"></td>
                                    <td><input type="text" name="tax3"></td>
                                    <td></td>
                                    
                                    
                                    <!--<td>
                                    	<select class="form-control select2me" name="paym" id="paym">
                                        	<option value="0">Payment</option>
                                            <option value="10500">10,500</option>
                                           	<option value="21000">21,000</option>
                                            <option value="42000">42,000</option>
                                            <option value="84000">84,000</option>
                                        </select>
                                        <input type="hidden" name="paument_value" id="paument_value" value="">
                                    </td> -->
                                    <td>
                                    <?php if($value->wall != 0){ ?>
                                        <span   style="color:green;">payed</span>
                                        <?php }
										else{ ?>
											<a href="#" class="btn btn-circle btn-sm blue">Pay</a>
										<?php } ?>
										
                                    </td>
                                </tr> 
                            
                        <?php }  ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div> 



