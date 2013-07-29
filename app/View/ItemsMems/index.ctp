<div class="itemsMems index">
	<h2><?php echo __('Items Mems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mem_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemsMems as $itemsMem): ?>
	<tr>
		<td><?php echo h($itemsMem['ItemsMem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemsMem['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsMem['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemsMem['Mem']['name'], array('controller' => 'mems', 'action' => 'view', $itemsMem['Mem']['id'])); ?>
		</td>
		<td><?php echo h($itemsMem['ItemsMem']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemsMem['ItemsMem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemsMem['ItemsMem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemsMem['ItemsMem']['id']), null, __('Are you sure you want to delete # %s?', $itemsMem['ItemsMem']['id'])); ?>
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