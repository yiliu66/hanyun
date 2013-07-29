<div class="actions">
	<h3><?php echo __('后台主页'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('安全退出'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
	<h4><?php echo __('管理员'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('所有管理员'), array('controller' => 'users', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('新添管理员'), array('controller' => 'users', 'action' => 'add')); ?></li>
	</ul>
	<h4><?php echo __('新闻通告'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('所有新闻通告'), array('controller' => 'articles','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('新添新闻通告'), array('controller' => 'articles','action' => 'add')); ?></li>
	</ul>
	<h4><?php echo __('订单管理'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('未处理订单'), array('controller' => 'orders','action' => 'index', 0)); ?></li>
		<li><?php echo $this->Html->link(__('已处理订单'), array('controller' => 'orders','action' => 'index', 1)); ?></li>
	</ul>
	<h4><?php echo __('服务器管理'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('服务器/云主机管理'), array('controller' => 'items','action' => 'index')); ?></li>
	</ul>
</div>