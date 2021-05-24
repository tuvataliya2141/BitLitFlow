<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin1/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?= base_url('admin1/user/user_list'); ?>">User List</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Wallet</span>
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
                    <span class="caption-subject font-blue sbold uppercase">My Wallet</span>
                </div>
            </div>			
            <div class="portlet-body">
                <h1 class="page-title">
                    <div style="padding: 1%; background-color:#edea4e;" class = "text-center">
                        My Wallet
                    </div>
                </h1>
                <!-- END PAGE TITLE-->

                <div class="row">
                    <div class="col-md-12">

						<center><h4><label style="color:red;"><strong>Note:</strong> You can withdraw amount only 7,17 and 27 date in every month.</label></h4></center>
                        <!-- BEGIN PROFILE CONTENT -->
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <!-- BEGIN PORTLET -->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
                                            <div class="">
                                                <?php
                                                isset($binary_data->b_amount) ? $binary = $binary_data->b_amount : $binary = '0';
                                                isset($royalty_data->r_amount) ? $royalty = $royalty_data->r_amount : $royalty = '0';
                                                isset($award_data->a_amount) ? $award = $award_data->a_amount : $award = '0';
                                                $total = $binary + $royalty + $award;
                                                $tds = $total * 10 / 100;
                                                $admin = $total * 5 / 100;
                                                $ewallet = $total * 5 / 100;
                                                $net_amount = $total - $tds - $admin - $ewallet;
                                                ?>
                                                <table class="table table-hover table-light">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Total Binary Income :</a>
                                                            </td>
                                                            <td> <?php echo $binary; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Total Royalty Income :</a>
                                                            </td>
                                                            <td> <?php echo $royalty; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Total Reward Income :</a>
                                                            </td>
                                                            <td> <?php echo $award; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                            <td> <br> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link" style="color:#000000;">Total Income :</a>
                                                            </td>
                                                            <td> <strong style="color:#000000;"><?php echo $total; ?></strong> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                            <td> <br> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">TDS(10%) :</a>
                                                            </td>
                                                            <td> <?php echo $tds; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Admin(5%) :</a>
                                                            </td>
                                                            <td> <?php echo $admin; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">E-Wallet(5%) :</a>
                                                            </td>
                                                            <td> <?php echo $ewallet; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                            <td> <br> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link" style="color:#000000;">Net Amount :</a>
                                                            </td>
                                                            <td> <strong style="color:#000000;"><?php echo $net_amount; ?> </strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-6"></div>
                                                            <?php
                                                            if($net_amount)
                                                            {
                                                            ?>
                                                            <button disabled id="btn_submit" class="btn green">Request For Payment</button>                                                           
                                                            <?php
                                                            }
                                                            else
                                                            {
                                                            ?>
                                                            <button disabled id="btn_submit" class="btn green" disabled>Request For Payment</button>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>														
                                                    </div>									
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>        
    </div>
</div> 
<script>
    $(document).ready(function(){
        $("#btn_submit").click(function(){			
                var bin = <?= $binary; ?>;
                var roy = <?= $royalty; ?>;
                var awa = <?= $award; ?>;
                var tot = <?= $total; ?>;
                var tds = <?= $tds; ?>;
                var admin = <?= $admin; ?>;
                var ewlt = <?= $ewallet; ?>;
                var net = <?= $net_amount; ?>;
                
                $.ajax({
                        type: "POST",
                        url: "<?php echo  base_url('profile/add_wallet'); ?>",
                        data : {bin:bin,roy:roy,awa:awa,tot:tot,tds:tds,admin:admin,ewlt:ewlt,net:net},
                        success: function (response) {                                                                                            
                        }				
                });                               
        });
});
        </script>