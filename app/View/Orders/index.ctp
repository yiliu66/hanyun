<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_number'); ?></th>
			<th><?php echo $this->Paginator->sort('user_company'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_tel'); ?></th>
			<th><?php echo $this->Paginator->sort('user_qq'); ?></th>
			<th><?php echo $this->Paginator->sort('remark'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('processer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mem_name'); ?></th>
			<th><?php echo $this->Paginator->sort('disk_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('checked'); ?></th>
			<th><?php echo $this->Paginator->sort('checked_by'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_number']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['user_company']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['user_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['user_email']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['user_tel']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['user_qq']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['remark']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['item_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['processer_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['mem_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['disk_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['checked']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['checked_by']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['deleted']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php if ($order['Order']['checked']) {
				echo $this->Form->postLink(__('Uncheck'), array('action' => 'uncheck', $order['Order']['id']));
			} else {
				echo $this->Form->postLink(__('Check'), array('action' => 'check', $order['Order']['id']));
			}?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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
<?php echo $this->element('action'); ?>
