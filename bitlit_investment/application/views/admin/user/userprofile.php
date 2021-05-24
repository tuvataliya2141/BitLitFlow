<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?= base_url('admin/user/user_list'); ?>">User List</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Profile</span>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-blue"></i>
                    <span class="caption-subject font-blue sbold uppercase">My Profile</span>
                </div>
            </div>
            <div class="portlet-body">
                
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">
                    <div style="padding: 1%; background-color:#edea4e;" class = "text-center">
                        Personal Details
                    </div>
                </h1>
                <!-- END PAGE TITLE-->

                <div class="row">
                    <div class="col-md-12">
                        
                        
                        <!-- BEGIN PROFILE CONTENT -->
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET -->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
                                            <div class="">
                                                <table class="table table-hover table-light">
                                                    <tbody>
														 
														
                                                        <tr>
                                                            <td>
																
                                                                <a href="javascript:;" class="primary-link">User Id :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->user_id) ? $user_data->user_id : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->member_name) ? $user_data->member_name : '' ; ?> </td>
                                                        </tr>
														
														
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Refferal Id :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->Seven->user_id) ? $user_data->Seven->user_id : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link">Refferal Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->Seven->member_name) ? $user_data->Seven->member_name : '' ; ?> </td>
                                                        </tr>
														
														
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Upliner Id :</a>
                                                            </td>															
                                                            <td> <?php echo isset($user_data->eight->user_id) ? $user_data->eight->user_id : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link">Upliner Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->eight->member_name) ? $user_data->eight->member_name : '' ; ?> </td>
                                                        </tr>
														
														
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">User Email Id :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->email_id) ? $user_data->email_id : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link">User Mobile no :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->mobile_no) ? $user_data->mobile_no : ''; ?> </td>
                                                        </tr>
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Position :</a>
                                                            </td>
                                                            <td> <?php
																if($user_data->select_position==1)
																{
																	echo 'Left';
																}
																else{ echo 'right'; }
																?> 
															
															</td>
                                                        </tr>
														
														
														
														
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
                
            </div>
			
			<div class="portlet-body">
                
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">
                    <div style="padding: 1%; background-color:#edea4e;" class="text-center">
                        KYC Details
                    </div>
                </h1>
                <!-- END PAGE TITLE-->

                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- BEGIN PORTLET -->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
                                            <div class="table-scrollable table-scrollable-borderless">
                                                <table class="table table-hover table-light">
                                                    <tbody>
														 
														
                                                        
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> Adharcard Number :</a>
                                                            </td>
                                                            <td> <?php echo isset($user_data->aadhar_no) ? $user_data->aadhar_no : '' ; ?> </td>
                                                        </tr>
														
														
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
                
            </div>
			
			<div class="portlet-body">
                
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">
                    <div style="padding: 1%; background-color:#edea4e;" class = "text-center">
                        Shipping Details
                    </div>
                </h1>
                <!-- END PAGE TITLE-->

                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET -->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
                                            <div >
                                                <table class="table table-hover table-light">
                                                    <tbody>
														 
														
                                                        
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> House Number :</a>
                                                            </td>
                                                            <td> <?php echo isset($Shipping_data->house_no) ? $Shipping_data->house_no : ''; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> Country Code :</a>
                                                            </td>
                                                            <td> <?php echo isset($Shipping_data->country) ? $Shipping_data->country : ''; ?> </td>
                                                        </tr>
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> Building/Society Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($Shipping_data->building_name) ? $Shipping_data->building_name : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> State Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($Shipping_data->state) ? $Shipping_data->state : '' ; ?> </td>
                                                        </tr>
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> City Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($Shipping_data->city) ? $Shipping_data->city : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> Pin_code :</a>
                                                            </td>
                                                            <td> <?php echo isset($Shipping_data->pin_code) ? $Shipping_data->pin_code : '' ; ?> </td>
                                                        </tr>
														
														
														
														
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
                
            </div>
			
			<div class="portlet-body">
                
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">
                    <div style="padding: 1%; background-color:#edea4e;" class = "text-center">
                        Bank Details
                    </div>
                </h1>
                <!-- END PAGE TITLE-->

                <div class="row">
                    <div class="col-md-12">
                       
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET -->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
                                            <div >
                                                <table class="table table-hover table-light">
                                                    <tbody>
														 
														
                                                        
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> Bank Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($bank_data->bank_name) ? $bank_data->bank_name : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> Bank Account Number :</a>
                                                            </td>
                                                            <td> <?php echo isset($bank_data->account_no) ? $bank_data->account_no : '' ; ?> </td>
                                                        </tr>
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> Branch Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($bank_data->account_no) ? $bank_data->account_no : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> Bank Holder Name :</a>
                                                            </td>
                                                            <td> <?php echo isset($bank_data->account_no) ? $bank_data->account_no : '' ; ?> </td>
                                                        </tr>
														
														<tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link"> IFSC Code :</a>
                                                            </td>
                                                            <td> <?php echo isset($bank_data->ifsc_code) ? $bank_data->ifsc_code : '' ; ?> </td>
															<td>
                                                                <a href="javascript:;" class="primary-link"> Pan Number :</a>
                                                            </td>
                                                            <td> <?php echo isset($bank_data->pan_no) ? $bank_data->pan_no : '' ; ?> </td>
                                                        </tr>
														
														
														
														
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
                
            </div>
			
        </div>        
    </div>
</div> 