
<?php echo $this->element('action'); ?>

<div class="articles index">
	<h2><?php echo __('Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('introtext'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h(mb_substr($article['Article']['title'],0,20,"UTF-8")); ?>&nbsp;</td>
		<td><?php echo h(mb_substr($article['Article']['introtext'],0,100,"UTF-8")); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['category'],0,100,"UTF-8"); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['created']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['modified']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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