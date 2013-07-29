<?php echo $this->element('action_server'); ?>
<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('Disk');
		echo $this->Form->input('Mem');
		echo $this->Form->input('Processer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
