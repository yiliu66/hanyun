<div class="mails view">
<h2><?php  echo __('Mail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['capacity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_mail'); ?>
