<div class="disks form">
<?php echo $this->Form->create('Disk'); ?>
	<fieldset>
		<legend><?php echo __('Edit Disk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>