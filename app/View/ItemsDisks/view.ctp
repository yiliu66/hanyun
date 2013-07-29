<div class="itemsDisks view">
<h2><?php  echo __('Items Disk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsDisk['ItemsDisk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsDisk['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsDisk['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disk'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsDisk['Disk']['name'], array('controller' => 'disks', 'action' => 'view', $itemsDisk['Disk']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($itemsDisk['ItemsDisk']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_server'); ?>