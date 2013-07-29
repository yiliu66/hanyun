<div class="orders view">
<h2><?php  echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Company'); ?></dt>
		<dd>
			<?php echo h($order['Order']['user_company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($order['Order']['user_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Tel'); ?></dt>
		<dd>
			<?php echo h($order['Order']['user_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Qq'); ?></dt>
		<dd>
			<?php echo h($order['Order']['user_qq']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remark'); ?></dt>
		<dd>
			<?php echo h($order['Order']['remark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processer Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['processer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mem Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['mem_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disk Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['disk_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($order['Order']['checked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked By'); ?></dt>
		<dd>
			<?php echo h($order['Order']['checked_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($order['Order']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($order['Order']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action'); ?>
