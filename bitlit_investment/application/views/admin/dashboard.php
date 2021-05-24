<style>
.mt-action{padding:5px 0px !important;}
</style>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>                            
</div>
<?php   //echo "<pre>"; print_r($upcoming_data); 
        //echo "<pre>"; print_r($live_data); die;
		//echo $a_left;
		//echo $a_right;
		
		
		?>
<!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Admin Dashboard
                            <small></small>
                        </h1>
                        <!-- END PAGE TITLE-->                                              
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value=""><?php echo $b_data->binary_amount;?></span>
                                        </div>
                                        <div class="desc"> My Binary Income </div>
                                    </div>
                                </a>
                            </div>
                            <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php// echo $items;?>"><?php echo isset($re_data->royalty_amount) ? $re_data->royalty_amount : '0' ; ?></span></div>
                                        <div class="desc"> My Reword Income </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php// echo $users;?>"><?php echo isset($ro_data->royalty_amount) ? $ro_data->royalty_amount : '0' ;?></span>
                                        </div>
                                        <div class="desc"> MY Royalty </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php// echo $items;?>"><?php echo isset($aw_data->awaord_amount) ? $aw_data->awaord_amount : '0' ; ?></span></div>
                                        <div class="desc"> My Awaord </div>
                                    </div>
                                </a>
                            </div>-->
<!--                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                    <div class="visual">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $swap_items;?>">0</span>
                                        </div>
                                        <div class="desc"> Swap Items </div>
                                    </div>
                                </a>
                            </div>-->
                        </div>

<div><br></div>
<!-- END PAGE TITLE-->          