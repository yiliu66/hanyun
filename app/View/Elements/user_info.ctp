<head>
	<?php
	/**
		 * The first condition includes the form_ajax.js file in every view of a controller that implements a form. 
		 * Remember item 3 of our to-do list? The second condition automatically loads a Controller JavaScript file if the 
		 * file exists, i.e. webroot/js/controller.js.
		 */
		
		// if($this->Form != null) {
		// 	echo $this->Html->script('form_ajax');
		// 	echo $this->Html->script('orders');
		// }
	?>
</head>
<body>
<div id="box">
    <span id="close" onclick="hide('box');">关闭</span>
    <div style="margin-top:40px; margin-left:20px; margin-right:20px;">
			<div id="item_info_table">
				<table style="border:0px;">
					<tr>
						<td><font color="red">产品名称</font>：</td>
						<td id="item_info_name">通用型服务器</td>
					<tr>
					<tr>
						<td></td>
						<td id="item_info_cpu">CPU：i3-2100</td>
					<tr>
					<tr>
						<td></td>
						<td id="item_info_mem">内存：4G</td>
					<tr>
					<tr>
						<td></td>
						<td id="item_info_disk">硬盘：1T</td>
					<tr>
					<tr>
						<td></td>
						<td id="item_info_price">价格：1T</td>
					<tr>
				</table>
			</div>
			<div class="orders form">
			<?php echo $this->Form->create('Order', array('controller' => 'Orders', 'action' => 'buy')); ?>
			<fieldset>
				<legend><?php echo __('请填写您的信息，带“<font color="red">*</font>”为必填项'); ?></legend>
			<?php
				echo $this->Form->input('item_name', array('type' => 'hidden'));
				echo $this->Form->input('processer_name', array('type' => 'hidden'));
				echo $this->Form->input('mem_name', array('type' => 'hidden'));
				echo $this->Form->input('disk_name', array('type' => 'hidden'));
				echo $this->Form->input('price', array('type' => 'hidden'));
			?>
			<div id="user_info_table">
				<table>
					<tr>
						<td>姓名：</td>
						<td>
							<?php echo $this->Form->input('user_name', array('label' => false, 'size' => '40')); ?>
						</td>
						<td><font color="red">*</font></td>
					</tr>
					<tr>
						<td>公司名称：</td>
						<td>
							<?php echo $this->Form->input('user_company', array('label' => false, 'size' => '40')); ?>
						</td>
						<td><font color="red">*</font></td>
					</tr>
					<tr>
						<td>联络电话：</td>
						<td>
							<?php echo $this->Form->input('user_tel', array('label' => false, 'size' => '40')); ?>
						</td>
						<td><font color="red">*</font></td>
					</tr>
					<tr>
						<td>QQ：</td>
						<td>
							<?php echo $this->Form->input('user_qq', array('label' => false, 'size' => '40')); ?>
						</td>
						<td><font color="red">*</font></td>
					</tr>
					<tr>
						<td>E-mail：</td>
						<td>
							<?php echo $this->Form->input('user_email', array('label' => false, 'size' => '40')); ?>
						</td>
						<td><font color="red">*</font></td>
					</tr>
					<tr>
						<td>备注：</td>
						<td>
							<?php echo $this->Form->input('remark', array('label' => false, 'size' => '40')); ?>
						</td>
					</tr>
				</table>
			</div>
			</fieldset>
		<?php echo $this->Form->end(__('确认购买')); ?>
		</div>
    </div>
</div>
</body>