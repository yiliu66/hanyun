<?php echo $this->element('action_server'); ?>
<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($item['Item']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($item['Item']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($item['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Number'); ?></th>
		<th><?php echo __('User Address'); ?></th>
		<th><?php echo __('User Name'); ?></th>
		<th><?php echo __('User Email'); ?></th>
		<th><?php echo __('User Tel'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Checked'); ?></th>
		<th><?php echo __('Checked By'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['order_number']; ?></td>
			<td><?php echo $order['user_address']; ?></td>
			<td><?php echo $order['user_name']; ?></td>
			<td><?php echo $order['user_email']; ?></td>
			<td><?php echo $order['user_tel']; ?></td>
			<td><?php echo $order['item_id']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['checked']; ?></td>
			<td><?php echo $order['checked_by']; ?></td>
			<td><?php echo $order['deleted']; ?></td>
			<td><?php echo $order['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items Disks'); ?></h3>
	<?php if (!empty($item['ItemsDisk'])): ?>
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
		foreach ($item['ItemsDisk'] as $itemsDisk): ?>
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
	<h3><?php echo __('Related Items Mems'); ?></h3>
	<?php if (!empty($item['ItemsMem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Mem Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['ItemsMem'] as $itemsMem): ?>
		<tr>
			<td><?php echo $itemsMem['id']; ?></td>
			<td><?php echo $itemsMem['item_id']; ?></td>
			<td><?php echo $itemsMem['mem_id']; ?></td>
			<td><?php echo $itemsMem['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items_mems', 'action' => 'view', $itemsMem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items_mems', 'action' => 'edit', $itemsMem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items_mems', 'action' => 'delete', $itemsMem['id']), null, __('Are you sure you want to delete # %s?', $itemsMem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Items Mem'), array('controller' => 'items_mems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items Processers'); ?></h3>
	<?php if (!empty($item['itemsProcesser'])): ?>
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
		foreach ($item['itemsProcesser'] as $itemsProcesser): ?>
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
	<h3><?php echo __('Related Disks'); ?></h3>
	<?php if (!empty($item['Disk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Disk'] as $disk): ?>
		<tr>
			<td><?php echo $disk['id']; ?></td>
			<td><?php echo $disk['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disks', 'action' => 'view', $disk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disks', 'action' => 'edit', $disk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disks', 'action' => 'delete', $disk['id']), null, __('Are you sure you want to delete # %s?', $disk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disk'), array('controller' => 'disks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mems'); ?></h3>
	<?php if (!empty($item['Mem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Mem'] as $mem): ?>
		<tr>
			<td><?php echo $mem['id']; ?></td>
			<td><?php echo $mem['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mems', 'action' => 'view', $mem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mems', 'action' => 'edit', $mem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mems', 'action' => 'delete', $mem['id']), null, __('Are you sure you want to delete # %s?', $mem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mem'), array('controller' => 'mems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Processers'); ?></h3>
	<?php if (!empty($item['Processer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Processer'] as $processer): ?>
		<tr>
			<td><?php echo $processer['id']; ?></td>
			<td><?php echo $processer['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'processers', 'action' => 'view', $processer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'processers', 'action' => 'edit', $processer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'processers', 'action' => 'delete', $processer['id']), null, __('Are you sure you want to delete # %s?', $processer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Processer'), array('controller' => 'processers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
