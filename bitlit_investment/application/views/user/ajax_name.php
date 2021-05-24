<?php if(isset($name_data) ? $name_data : ''){ ?>
<input type="text" name="upliner_name" disabled="disabled" value="<?php echo $name_data->member_name; ?>" data-required="1" class="form-control" />
<?php } else { ?>
    <input type="text" name="refferal_name" disabled="disabled" value="<?php echo $refferal_data->member_name; ?>" data-required="1" class="form-control" />
<?php } ?>


    
