<table width="100%" style="height: 450px">
    <tbody>
        <tr>
            <td class="style5" style="height: 90px; width: 12.5%;">
            </td>
            <td colspan="6"  style="width: 25%; height: 90px;" valign="top" align="center">
				<?php if($team_data->payment_status == 0){ ?>
                <input type="image" onmouseover='ddrivetip("table border="0" cellpadding="0" cellspacing="1" class="containtd" style="font-size:10.5px; font-family:Verdana">\n\
                <tr> <td><strong>Member Id</strong></td><td>FM518236190</td></tr>
                    <tr> <td><strong>Name</strong></td><td>JIGNABEN MISTRY</td></tr>
                    <tr> <td><strong>Refferal Id</strong></td><td>FM754537810</td></tr>
                    <tr> <td><strong>My BV</strong></td><td>0</td></tr>
                    <tr> <td><strong>Unit Volume</strong></td><td>0.00</td></tr>
                    <tr> <td><strong>Joning Date</strong></td><td>11 Apr 2018</td></tr>
                    <tr> <td><strong>Paid Direct: </strong></td><td><strong>UnPaid Direct: </strong></td></tr>
                    <tr> <td><strong>Left Vol: </strong>0.00</td><td><strong>Right Vol: </strong>0.00</td></tr>
                </table>");' onmouseover="ddrivetip(this);"  src="<?= base_url('assets/images/Tree6.png'); ?>"> 
				<?php } else { ?>
				<input type="image" onmouseover='ddrivetip("table border="0" cellpadding="0" cellspacing="1" class="containtd" style="font-size:10.5px; font-family:Verdana">\n\
                <tr> <td><strong>Member Id</strong></td><td>FM518236190</td></tr>
                    <tr> <td><strong>Name</strong></td><td>JIGNABEN MISTRY</td></tr>
                    <tr> <td><strong>Refferal Id</strong></td><td>FM754537810</td></tr>
                    <tr> <td><strong>My BV</strong></td><td>0</td></tr>
                    <tr> <td><strong>Unit Volume</strong></td><td>0.00</td></tr>
                    <tr> <td><strong>Joning Date</strong></td><td>11 Apr 2018</td></tr>
                    <tr> <td><strong>Paid Direct: </strong></td><td><strong>UnPaid Direct: </strong></td></tr>
                    <tr> <td><strong>Left Vol: </strong>0.00</td><td><strong>Right Vol: </strong>0.00</td></tr>
                </table>");' onmouseover="ddrivetip(this);"  src="<?= base_url('assets/images/Tree2.png'); ?>"> 
				<?php } ?>
                <br>
                
                <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->member_name; ?></span>
                <br>
                <span  style="display:inline-block;height:16px;width:199px;font-family: Verdana; font-size: xx-small;
                    color: #004d29;"><?= $team_data->user_id; ?></span>
                <input type="hidden" value="">
            </td>
            <td class="style5" style="height: 90px; width: 12.5%;">
            </td>
        </tr>
        <tr>
            <td style="height: 30px; width: 12.5%;">
            </td>
            <td style="height: 30px;" align="center" colspan="6" valign="top">
                <img  src="<?= base_url('assets/images/1.png'); ?>">
            </td>
            <td style="height: 30px; width: 12.5%;">
            </td>
        </tr>
        <tr>
            <td style="height: 70px; width: 12.5%;">
            </td>
            <?php if($team_data->LF){ ?>
                <td colspan="2" style="width: 25%; height: 70px;" valign="top" align="center">
					<?php if($team_data->LF->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->user_id; ?></span>
                    <br>
                    <span style="display:inline-block;height:16px;width:200px;font-family: Verdana; font-size: xx-small;
                        color: #004d29;"><?= $team_data->LF->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>
                <td style="height: 71px;" colspan="2" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:17px;width:200px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden" value="0">
                    <br>
                </td>
            <?php } ?>
            <td class="style3">
            </td>
            <td class="style5" style="height: 70px; width: 12.5%;">
            </td>
            <?php if($team_data->RF){ ?>
                <td colspan="2" style="width: 25%; height: 70px;" align="center" valign="top">
					<?php if($team_data->RF->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->RF->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana; font-size: xx-small;
                        color: #004d29;"><?= $team_data->RF->member_name; ?> </span>
                    <input type="hidden" value="">
                </td>
            <?php } else { ?>
                <td style="height: 71px;" colspan="2" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:17px;width:200px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden" value="0">
                    <br>
                </td>
            <?php } ?>
            <td class="style5" style="height: 70px; width: 12.5%;">
            </td>
        </tr>
        <tr>
            <td style="height: 27px;" align="center" colspan="4" valign="top">
                <img  src="<?= base_url('assets/images/2.png'); ?>" style="height:25px;width:230px;">
            </td>
            <td style="height: 27px;" align="center" colspan="4" valign="top">
                <img src="<?= base_url('assets/images/2.png'); ?>" style="height:25px;width:230px;">
            </td>
        </tr>
        <tr>
            <?php if($team_data->LF && $team_data->LF->LTL){ //$team_data->LF->LTL ?>
                <td colspan="2" style="height: 71px; width: 25%" align="center" valign="top">
					<?php if($team_data->LF->LTL->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->LTL->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana; font-size: xx-small;
                        color: #004d29;"><?= $team_data->LF->LTL->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
             <?php } else { ?>
                <td style="height: 71px;" colspan="2" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:17px;width:200px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden" value="0">
                    <br>
                </td>
            <?php } ?>
            <?php if($team_data->LF){?>
                <td colspan="2" style="height: 71px; width: 25%" align="center" valign="top">
                    <?php if($team_data->LF->LTR->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->LTR->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana; font-size: xx-small;
                        color: #004d29;"><?= $team_data->LF->LTR->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>
            <td style="height: 71px;" colspan="2" align="center" valign="top">
                <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                <br>
                
                <span style="font-family: Verdana; font-size: xx-small"></span>
                <br>
                <span  style="display:inline-block;height:17px;width:200px;font-family: Verdana;
                    font-size: xx-small; color: #004d29;">Add New</span>
                <input type="hidden" value="0">
                <br>
            </td>
            <?php } ?>
            <?php if($team_data->RF){ ?>
                <td colspan="2" style="height: 71px; width: 25%" align="center" valign="top">
                    <?php if($team_data->RF->RTL->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"><?= $team_data->RF->RTL->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana; font-size: xx-small;
                        color: #004d29;"><?= $team_data->RF->RTL->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>
            <td style="height: 71px; width: 25%;" colspan="2" align="center" valign="top">
                <input type="image"  src="<?= base_url('assets/images/Tree1.png'); ?>">
                <br>
                
                <span style="font-family: Verdana; font-size: xx-small"></span>
                <br>
                <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana;
                    font-size: xx-small; color: #004d29;">Add New</span>
                <input type="hidden" value="0">
            </td>
            <?php } ?>
            <?php if($team_data){ ?>
                <td colspan="2" style="height: 71px; width: 25%" align="center" valign="top">
                    <?php if($team_data->RF->RTR->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"><?= $team_data->RF->RTR->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana; font-size: xx-small;
                        color: #004d29;"><?= $team_data->RF->RTR->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>
            <td style="height: 71px; width: 25%;" colspan="2" align="center" valign="top">
                <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                <br>
                
                <span  style="font-family: Verdana; font-size: xx-small"></span>
                <br>
                <span  style="display:inline-block;height:16px;width:200px;font-family: Verdana;
                    font-size: xx-small; color: #004d29;">Add New</span>
                <input type="hidden" value="0">
            </td>
            
        <?php } ?>
        </tr>
        <tr>
            <td style="height: 27px;" align="center" colspan="2" valign="top">
                <img  src="<?= base_url('assets/images/3.png'); ?>" style="height:25px;width:125px;">
            </td>
            <td style="height: 27px;" align="center" colspan="2" valign="top">
                <img  src="<?= base_url('assets/images/3.png'); ?>" style="height:25px;width:125px;">
            </td>
            <td style="height: 27px;" align="center" colspan="2" valign="top">
                <img  src="<?= base_url('assets/images/3.png'); ?>" style="height:25px;width:125px;">
            </td>
            <td style="height: 27px;" align="center" colspan="2" valign="top">
                <img  src="<?= base_url('assets/images/3.png'); ?>" style="height:25px;width:125px;">
            </td>
        </tr>
        <tr>
            <?php if($team_data){ //$team_data->LF->LTL->one?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <?php if($team_data->LF->LTL->one->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->LTL->one->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;"><?= $team_data->LF->LTL->one->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden" value="0">
                </td>
            <?php } ?>
            <?php if($team_data){ //$team_data->LF->LTL->two?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <?php if($team_data->LF->LTL->two->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->LTL->two->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;"><?= $team_data->LF->LTL->two->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden" value="0">
                </td>
            <?php } ?>
            <?php if($team_data){ //$team_data->LF->LTR->Three?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <?php if($team_data->LF->LTR->Three->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->LTR->Three->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;"><?= $team_data->LF->LTR->Three->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>    
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <input type="image"  src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden"  value="0">
                </td>
            <?php } ?> 
            <?php if($team_data){ //$team_data->LF->LTR->Four?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <?php if($team_data->LF->LTR->Four->payment_status == 0){ ?>
						<input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
					<?php } else { ?>
						<input type="image" src="<?= base_url('assets/images/Tree2.png'); ?>">
					<?php } ?>
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"><?= $team_data->LF->LTR->Four->user_id; ?></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;"><?= $team_data->LF->LTR->Four->member_name; ?> </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?>   
                <td align="center" valign="top" class="style4">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden"  value="0">
                </td>
            <?php } ?>
            <?php if($team_data){ ?>
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree6.png'); ?>">
                    <br>
                    
                    <span  style="font-family: Verdana; font-size: xx-small">123</span>
                    <br>
                    <span  style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">OK </span>
                    <input type="hidden"  value="">
                </td>
            <?php } else { ?> 
                <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                    <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                    <br>
                    
                    <span style="font-family: Verdana; font-size: xx-small"></span>
                    <br>
                    <span style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                        font-size: xx-small; color: #004d29;">Add New</span>
                    <input type="hidden" value="0">
                </td>
            <?php } ?>
            <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                <br>
                
                <span style="font-family: Verdana; font-size: xx-small"></span>
                <br>
                <span style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                    font-size: xx-small; color: #004d29;">Add New</span>
                <input type="hidden"  value="0">
            </td>
            <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                <br>
                
                <span style="font-family: Verdana; font-size: xx-small"></span>
                <br>
                <span style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                    font-size: xx-small; color: #004d29;">Add New</span>
                <input type="hidden" value="0">
            </td>
            <td style="height: 109px; width: 12.5%;" align="center" valign="top">
                <input type="image" src="<?= base_url('assets/images/Tree1.png'); ?>">
                <br>
                
                <span style="font-family: Verdana; font-size: xx-small"></span>
                <br>
                <span style="display:inline-block;height:16px;width:100px;font-family: Verdana;
                    font-size: xx-small; color: #004d29;">Add New</span>
                <input type="hidden" value="0">
            </td>
        </tr>
        <tr>
            <td style="height: 21px; width: 12.5%;">
            </td>
            <td style="height: 21px; width: 12.5%;">
            </td>
            <td style="height: 21px; width: 12.5%;">
            </td>
            <td class="style6">
            </td>
            <td style="height: 21px; width: 12.5%;">
            </td>
            <td style="height: 21px; width: 12.5%;">
            </td>
            <td style="height: 21px; width: 12.5%;">
            </td>
            <td style="height: 21px; width: 12.5%;">
            </td>
        </tr>
        <tr>
            <td align="center" colspan="8">
            </td>
        </tr>
    </tbody>
</table>

<script>
function ddrivetip(x) {
    document.getElementById("data_show").style.display = "block";
}

function hideddrivetip(x) {
    document.getElementById("data_show").style.display = "none";
} 
</script>
                                