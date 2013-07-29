<div class="mails form">
<?php echo $this->Form->create('Mail'); ?>
	<fieldset>
		<legend><?php echo __('Add Mail'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('capacity');
		echo $this->Form->input('Count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_mail'); ?>
