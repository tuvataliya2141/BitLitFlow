<?php if(@$team_data->member_name) { ?>
<html>

    <br><br>
    <body>
    <center>
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(@$team_data->payment_status == 1){ ?>
                        <img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"><br>
                        <?php } else { ?>
                            <img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"><br>
                        <?php } ?>
                        <p><?= isset($team_data->member_name) ? $team_data->member_name : ''; ?></p>
                        <p><?= isset($team_data->user_id) ? $team_data->user_id : ''; ?></p>
                    </div> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="<?= base_url('assets/images/1.png'); ?>" style="width:53%;">
                    </div>
                </div><br>
                <div class="row">
                    <?php $two_data = $this->common->getLF(@$team_data->id); 
                    if($two_data){ ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php if($two_data->payment_status == 1){ ?>
                                <a href="javascript:" onclick="click_show(<?= $two_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                            <?php } else { ?>
                                <a href="javascript:" onclick="click_show(<?= $two_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                            <?php } ?>
                            <p><?= isset($two_data->user_id) ? $two_data->user_id : ''; ?></p>
                            <p><?= isset($two_data->member_name) ? $two_data->member_name : ''; ?></p>
                        </div>
                    <?php } else {?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="<?= base_url('team/new_register/'. @$team_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div>
                    <?php } ?>
                    <?php @$twos_data = $this->common->getRF($team_data->id); 
                    if($twos_data){ ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php if($twos_data->payment_status == 1){ ?>
                                <a href="javascript:" onclick="click_show(<?= $twos_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                            <?php } else { ?>
                                <a href="javascript:" onclick="click_show(<?= $twos_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                            <?php } ?>
                            <p><?= $twos_data->user_id; ?></p>
                            <p><?= $twos_data->member_name; ?></p>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="<?= base_url('team/new_register/'. @$team_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div>
                    <?php } ?>
                     
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <img src="<?= base_url('assets/images/2.png'); ?>" style="width:56%;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <img src="<?= base_url('assets/images/2.png'); ?>" style="width:56%;">
                    </div>
                </div><br>
                <div class="row">
                    <?php if($two_data){
                        $therd_data = $this->common->getLTL($two_data->id); 
                        if($therd_data){ ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <?php if($therd_data->payment_status == 1){ ?>
                                    <a href="javascript:" onclick="click_show(<?= $therd_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                <?php } else { ?>
                                    <a href="javascript:" onclick="click_show(<?= $therd_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                <?php } ?>
                                <p><?= $therd_data->user_id; ?></p>
                                <p><?= $therd_data->member_name; ?></p>
                            </div>
                         <?php } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="<?= base_url('team/new_register/'. $two_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div>
                         <?php } 
                    } else { ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div> 
                    <?php } ?>
                    
                    <?php if($two_data){
                        $therds_data = $this->common->getLTR($two_data->id); 
                        if($therds_data){ ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <?php if($therds_data->payment_status == 1){ ?>
                                    <a href="javascript:" onclick="click_show(<?= $therds_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                <?php } else { ?>
                                    <a href="javascript:" onclick="click_show(<?= $therds_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                <?php } ?>
                                <p><?= $therds_data->user_id; ?></p>
                                <p><?= $therds_data->member_name; ?></p>
                            </div>
                         <?php } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="<?= base_url('team/new_register/'. $two_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div>
                         <?php } 
                    } else { ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div> 
                    <?php } ?>
                    
                    <?php if($twos_data){
                        $therd_r_data = $this->common->getRTL($twos_data->id); 
                        if($therd_r_data){ ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <?php if($therd_r_data->payment_status == 1){ ?>
                                    <a href="javascript:" onclick="click_show(<?= $therd_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                <?php } else { ?>
                                    <a href="javascript:" onclick="click_show(<?= $therd_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                <?php } ?>
                                <p><?= $therd_r_data->user_id; ?></p>
                                <p><?= $therd_r_data->member_name; ?></p>
                            </div>
                         <?php } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="<?= base_url('team/new_register/'. $twos_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div>
                         <?php } 
                    } else { ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div> 
                    <?php } ?>
                    
                    <?php if($twos_data){
                        $therds_r_data = $this->common->getRTR($twos_data->id); 
                        if($therds_r_data){ ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <?php if($therds_r_data->payment_status == 1){ ?>
                                    <a href="javascript:" onclick="click_show(<?= $therds_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                <?php } else { ?>
                                    <a href="javascript:" onclick="click_show(<?= $therds_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                <?php } ?>
                                <p><?= $therds_r_data->user_id; ?></p>
                                <p><?= $therds_r_data->member_name; ?></p>
                            </div>
                         <?php } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <a href="<?= base_url('team/new_register/'. $twos_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div>
                         <?php } 
                    } else { ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                            <p>Add New</p>
                            <p><br></p>
                        </div> 
                    <?php } ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?= base_url('assets/images/3.png'); ?>" style="width: 57%;">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?= base_url('assets/images/3.png'); ?>" style="width: 57%;">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?= base_url('assets/images/3.png'); ?>" style="width: 57%;">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?= base_url('assets/images/3.png'); ?>" style="width: 57%;">
                    </div>
                </div><br>
                <div class="row">
                    <?php if($two_data){ ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <?php if($therd_data){
                            $forth_l_data = $this->common->getOne($therd_data->id); 
                            if($forth_l_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($forth_l_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $forth_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                        <a href="javascript:" onclick="click_show(<?= $forth_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $forth_l_data->user_id; ?></p>
                                    <p><?= $forth_l_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therd_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } ?>
                            
                            <?php if($therd_data){
                            $forths_r_data = $this->common->getTwo($therd_data->id); 
                            if($forths_r_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($forths_r_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $forths_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                        <a href="javascript:" onclick="click_show(<?= $forths_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $forths_r_data->user_id; ?></p>
                                    <p><?= $forths_r_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therd_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <?php if($therds_data){
                            $five_l_data = $this->common->getThree($therds_data->id); 
                            if($five_l_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($five_l_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $five_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                        <a href="javascript:" onclick="click_show(<?= $five_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $five_l_data->user_id; ?></p>
                                    <p><?= $five_l_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therds_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else { ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <?php } ?>
                            
                            <?php if($therds_data){
                            $fives_r_data = $this->common->getFour($therds_data->id); 
                            if($fives_r_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($fives_r_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $fives_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                        <a href="javascript:" onclick="click_show(<?= $fives_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $fives_r_data->user_id; ?></p>
                                    <p><?= $fives_r_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therds_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else { ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($twos_data){ ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <?php 
                            
                                if($therd_r_data){
                                $six_l_data = $this->common->getFive($therd_r_data->id); 
                                if($six_l_data){ ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <?php if($six_l_data->payment_status == 1){ ?>
                                            <a href="javascript:" onclick="click_show(<?= $six_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                        <?php } else { ?>
                                            <a href="javascript:" onclick="click_show(<?= $six_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                        <?php } ?>
                                        <p><?= $six_l_data->user_id; ?></p>
                                        <p><?= $six_l_data->member_name; ?></p>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <a href="<?= base_url('team/new_register/'. $therd_r_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                        <p>Add New</p>
                                        <p><br></p>
                                    </div>
                                <?php } 
                                } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                                <?php }
                            ?>
                            
                            <?php if($therd_r_data){
                            $sixs_r_data = $this->common->getSix($therd_r_data->id); 
                            if($sixs_r_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($sixs_r_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $sixs_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                        <a href="javascript:" onclick="click_show(<?= $sixs_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $sixs_r_data->user_id; ?></p>
                                    <p><?= $sixs_r_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therd_r_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else { ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <?php if($therds_r_data){
                            $seven_l_data = $this->common->getSeven($therds_r_data->id); 
                            if($seven_l_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($seven_l_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $seven_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                        <a href="javascript:" onclick="click_show(<?= $seven_l_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $seven_l_data->user_id; ?></p>
                                    <p><?= $seven_l_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therds_r_data->id . '/' . 1); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else {?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <?php } ?>
                            
                            <?php if($therds_r_data){
     
                            $sevens_r_data = $this->common->getEight($therds_r_data->id);
                           // echo '<pre>'; print_r($sevens_r_data); die;
                            if($sevens_r_data){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <?php if($sevens_r_data->payment_status == 1){ ?>
                                        <a href="javascript:" onclick="click_show(<?= $sevens_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree2.png'); ?>" style="width:40px;"></a><br>
                                    <?php } else { ?>
                                            <a href="javascript:" onclick="click_show(<?= $sevens_r_data->id; ?>);"><img src="<?= base_url('assets/images/Tree6.png'); ?>" style="width:40px;"></a><br>
                                    <?php } ?>
                                    <p><?= $sevens_r_data->user_id; ?></p>
                                    <p><?= $sevens_r_data->member_name; ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="<?= base_url('team/new_register/'. $therds_r_data->id . '/' . 2); ?>"><img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"></a><br>
                                    <p>Add New</p>
                                    <p><br></p>
                                </div>
                            <?php } 
                            } else { ?>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= base_url('assets/images/Tree1.png'); ?>" style="width:40px;"><br>
                                <p>Add New</p>
                                <p><br></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
<?php } else { ?>
<center>
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1 style="color: red">User Not Found !</h1>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
</center>

<?php } ?>
