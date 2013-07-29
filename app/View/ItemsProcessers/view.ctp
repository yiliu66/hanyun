<div class="itemsProcessers view">
<h2><?php  echo __('Items Processer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsProcesser['ItemsProcesser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsProcesser['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsProcesser['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsProcesser['Processer']['name'], array('controller' => 'processers', 'action' => 'view', $itemsProcesser['Processer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($itemsProcesser['ItemsProcesser']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_server'); ?>