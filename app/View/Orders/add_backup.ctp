<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Add Order'); ?></legend>
	<?php
		echo $this->Form->input('order_number');
		echo $this->Form->input('user_company');
		echo $this->Form->input('user_name');
		echo $this->Form->input('user_email');
		echo $this->Form->input('user_tel');
		echo $this->Form->input('user_qq');
		echo $this->Form->input('remark');
		echo $this->Form->input('item_name');
		echo $this->Form->input('processer_name');
		echo $this->Form->input('mem_name');
		echo $this->Form->input('disk_name');
		echo $this->Form->input('checked');
		echo $this->Form->input('checked_by');
		echo $this->Form->input('deleted');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action'); ?>
