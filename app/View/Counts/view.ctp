<div class="counts view">
<h2><?php  echo __('Count'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($count['Count']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($count['Count']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Count'), array('action' => 'edit', $count['Count']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Count'), array('action' => 'delete', $count['Count']['id']), null, __('Are you sure you want to delete # %s?', $count['Count']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Counts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Count'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mails'), array('controller' => 'mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail'), array('controller' => 'mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mails'); ?></h3>
	<?php if (!empty($count['Mail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Capacity'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($count['Mail'] as $mail): ?>
		<tr>
			<td><?php echo $mail['id']; ?></td>
			<td><?php echo $mail['name']; ?></td>
			<td><?php echo $mail['capacity']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mails', 'action' => 'view', $mail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mails', 'action' => 'edit', $mail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mails', 'action' => 'delete', $mail['id']), null, __('Are you sure you want to delete # %s?', $mail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<?php echo $this->element('action_mail'); ?></div>
