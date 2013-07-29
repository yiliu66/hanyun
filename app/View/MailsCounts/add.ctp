<div class="mailsCounts form">
<?php echo $this->Form->create('MailsCount'); ?>
	<fieldset>
		<legend><?php echo __('Add Mails Count'); ?></legend>
	<?php
		echo $this->Form->input('mail_id');
		echo $this->Form->input('count_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_mail'); ?>
