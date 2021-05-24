<?php foreach ($state_data as $state) { 
	?>
    <option value="<?= $state->id; ?>" <?= ($state->id == set_value('state')) ? 'selected="selected"' : ''; ?>><?php echo $state->name; ?></option>
<?php } ?>