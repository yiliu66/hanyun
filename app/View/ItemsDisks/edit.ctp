<div class="itemsDisks form">
<?php echo $this->Form->create('ItemsDisk'); ?>
	<fieldset>
		<legend><?php echo __('Edit Items Disk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('disk_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>