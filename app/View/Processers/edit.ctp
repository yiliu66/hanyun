<div class="processers form">
<?php echo $this->Form->create('Processer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Processer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>