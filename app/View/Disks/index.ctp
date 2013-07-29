<div class="disks index">
	<h2><?php echo __('Disks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disks as $disk): ?>
	<tr>
		<td><?php echo h($disk['Disk']['id']); ?>&nbsp;</td>
		<td><?php echo h($disk['Disk']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disk['Disk']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $disk['Disk']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disk['Disk']['id']), null, __('Are you sure you want to delete # %s?', $disk['Disk']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php echo $this->element('action_server'); ?>