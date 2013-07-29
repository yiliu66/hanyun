<?php echo $this->element('action'); ?>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('tel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
