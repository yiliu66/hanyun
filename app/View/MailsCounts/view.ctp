<div class="mailsCounts view">
<h2><?php  echo __('Mails Count'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mailsCount['MailsCount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailsCount['Mail']['name'], array('controller' => 'mails', 'action' => 'view', $mailsCount['Mail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailsCount['Count']['name'], array('controller' => 'counts', 'action' => 'view', $mailsCount['Count']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($mailsCount['MailsCount']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_mail'); ?>
