<div class="itemsProcessers form">
<?php echo $this->Form->create('ItemsProcesser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Items Processer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('processer_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>