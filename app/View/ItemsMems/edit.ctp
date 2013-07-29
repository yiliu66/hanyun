<div class="itemsMems form">
<?php echo $this->Form->create('ItemsMem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Items Mem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('mem_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>