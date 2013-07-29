<div class="counts form">
<?php echo $this->Form->create('Count'); ?>
	<fieldset>
		<legend><?php echo __('Add Count'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Mail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_mail'); ?>