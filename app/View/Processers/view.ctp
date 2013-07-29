<div class="processers view">
<h2><?php  echo __('Processer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($processer['Processer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($processer['Processer']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_server'); ?>
<div class="related">
	<h3><?php echo __('Related Items Processers'); ?></h3>
	<?php if (!empty($processer['ItemsProcesser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Processer Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($processer['ItemsProcesser'] as $itemsProcesser): ?>
		<tr>
			<td><?php echo $itemsProcesser['id']; ?></td>
			<td><?php echo $itemsProcesser['item_id']; ?></td>
			<td><?php echo $itemsProcesser['processer_id']; ?></td>
			<td><?php echo $itemsProcesser['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items_processers', 'action' => 'view', $itemsProcesser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items_processers', 'action' => 'edit', $itemsProcesser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items_processers', 'action' => 'delete', $itemsProcesser['id']), null, __('Are you sure you want to delete # %s?', $itemsProcesser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Items Processer'), array('controller' => 'items_processers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($processer['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($processer['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['name']; ?></td>
			<td><?php echo $item['created']; ?></td>
			<td><?php echo $item['created_by']; ?></td>
			<td><?php echo $item['modified']; ?></td>
			<td><?php echo $item['modified_by']; ?></td>
			<td><?php echo $item['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
