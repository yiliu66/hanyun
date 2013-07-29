<div class="mems form">
<?php echo $this->Form->create('Mem'); ?>
	<fieldset>
		<legend><?php echo __('Add Mem'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>