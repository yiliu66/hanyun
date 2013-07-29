<div class="itemsMems view">
<h2><?php  echo __('Items Mem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsMem['ItemsMem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsMem['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsMem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsMem['Mem']['name'], array('controller' => 'mems', 'action' => 'view', $itemsMem['Mem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($itemsMem['ItemsMem']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_server'); ?>