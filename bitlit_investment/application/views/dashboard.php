<style>
    .mt-action{padding:5px 0px !important;}
</style>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>                            
</div>
<?php
//echo "<pre>"; print_r($upcoming_data); 
//echo "<pre>"; print_r($live_data); die;
?>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Admin Dashboard
    <small></small>
</h1>
 <?php $this->load->view('_partials/messages'); ?>
<!-- END PAGE TITLE-->
<?php if($check_data->payment_status == 0){ ?>
<div class="portlet-body" style="margin-bottom: 4%;">
    <div class="col-md-12" style="background-color:#dff0d8; padding: 2px;">
        <h5> Topup Your Account! <a href="<?= base_url('home/buy_package'); ?>">Click Here</a></h5> 
    </div>
</div>
<br>
<?php } ?>
<br>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value=""><?php echo ($b_data->binary_amount) ? $b_data->binary_amount : '0'; ?></span>
                </div>
                <div class="desc"> My Binary Income </div>
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
                    <span data-counter="counterup" data-value=""><?php echo $re_data->reword_amount ? $re_data->reword_amount : '0'; ?></span></div>
                <div class="desc"> My Reward Income </div>
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
                    <span data-counter="counterup" data-value=""><?php echo $ro_data->royalty_amount ? $ro_data->royalty_amount : '0'; ?></span>
                </div>
                <div class="desc"> MY Royalty </div>
            </div>
        </a>
    </div>
    <?php $user_name = $this->session->userdata('user_data'); ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 yellow" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value=""><?php echo $user_name->user_id; ?></span>
                </div>
                <div class="desc"> MY User Id </div>
            </div>
        </a>
    </div>
    

</div>
<?php   $credit = isset($amount_data->credit) ? $amount_data->credit : '0'; 
        $debit = isset($amount_data->debit) ? $amount_data->debit : '0'; 
        $total_amount = $credit - $debit;
        ?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value=""><?php echo $credit; ?></span>
                </div>
                <div class="desc"> My Total Amount </div>
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
                    <span data-counter="counterup" data-value=""><?php echo $debit; ?></span></div>
                <div class="desc"> My Total Withdrawal Amount </div>
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
                    <span data-counter="counterup" data-value=""><?php echo $total_amount; ?></span>
                </div>
                <div class="desc"> MY Total Pending Amount </div>
            </div>
        </a>
    </div>
    <?php $user_name = $this->session->userdata('user_data'); 
       $date = date('d-m-Y', strtotime($user_name->creation_date))?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 yellow" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value=""><?php echo $date; ?></span>
                </div>
                <div class="desc"> MY Joining Date </div>
            </div>
        </a>
    </div>
    

</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <img src="<?php echo base_url('assets/images/show.jpg'); ?>" style="width:100%;" height="390">
    </div>
</div>

<div><br></div>
<!-- END PAGE TITLE-->          