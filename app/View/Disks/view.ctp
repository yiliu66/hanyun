<div class="disks view">
<h2><?php  echo __('Disk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disk['Disk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($disk['Disk']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_server'); ?>
<div class="related">
	<h3><?php echo __('Related Items Disks'); ?></h3>
	<?php if (!empty($disk['ItemsDisk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Disk Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($disk['ItemsDisk'] as $itemsDisk): ?>
		<tr>
			<td><?php echo $itemsDisk['id']; ?></td>
			<td><?php echo $itemsDisk['item_id']; ?></td>
			<td><?php echo $itemsDisk['disk_id']; ?></td>
			<td><?php echo $itemsDisk['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items_disks', 'action' => 'view', $itemsDisk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items_disks', 'action' => 'edit', $itemsDisk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items_disks', 'action' => 'delete', $itemsDisk['id']), null, __('Are you sure you want to delete # %s?', $itemsDisk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Items Disk'), array('controller' => 'items_disks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($disk['Item'])): ?>
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
		foreach ($disk['Item'] as $item): ?>
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
