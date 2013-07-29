<div class="actions">
	<h3><?php echo __('服务器管理'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('所有服务器/云主机类型'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新建服务器/云主机类型'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('所有硬盘价目'), array('controller' => 'items_disks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新添硬盘价目'), array('controller' => 'items_disks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('所有内存价目'), array('controller' => 'items_mems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新添内存价目'), array('controller' => 'items_mems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('所有CPU价目'), array('controller' => 'items_processers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新添CPU价目'), array('controller' => 'items_processers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('所有硬盘类型'), array('controller' => 'disks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新添硬盘类型'), array('controller' => 'disks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('所有内存类型'), array('controller' => 'mems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新添内存类型'), array('controller' => 'mems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('所有CPU类型'), array('controller' => 'processers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新添CPU类型'), array('controller' => 'processers', 'action' => 'add')); ?> </li>
	</ul>
	<h3><?php echo __('后台主页'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('返回后台主页'), array('controller' => 'users', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('安全退出'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>
