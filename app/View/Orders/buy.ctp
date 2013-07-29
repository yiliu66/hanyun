<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云科技_致力于打造“绿色云”IaaS公共服务平台，自有技术，自有机房，主营联通服务器租用,联通服务器,联通主机租用,联通云主机租用,联通云主机</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <style type="text/css">
		.error-message {
			color: #9E2424;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			-ms-box-shadow: none;
			-o-box-shadow: none;
			box-shadow: none;
			text-shadow: none;
		}

		form .error-message {
			color: #9E2424;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			-ms-box-shadow: none;
			-o-box-shadow: none;
			box-shadow: none;
			text-shadow: none;
			-moz-border-radius: none;
			-webkit-border-radius: none;
			border-radius: none;
			border: none;
			background: none;
			margin: 0;
			padding-left: 4px;
			padding-right: 0;
		}

		form .error {
			background: #FFDACC;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			border-radius: 4px;
			font-weight: normal;
		}
		</style>
</head>
<body onLoad="findA(1);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php echo $this->element('header'); ?>
        <div id="level_6" style="height:580px;">
            <div class="level">
		        <div id="box" style="background-image:url(../images/tanchuang1.jpg); height:560px; width:450px; display:block; margin:10px; margin-left:275px;">
		        	 <span id="close" onclick="history.go(-1);">关闭</span>
				    <div style="margin-top:40px; margin-left:20px; margin-right:20px;">
						<div id="item_info_table">
							<table style="border:0px;">
								<tr>
									<td><font color="red">产品名称</font>：</td>
									<td id="item_info_name">通用型服务器</td>
								<tr>
								<tr>
									<td></td>
									<td id="item_info_cpu">CPU：i3-2100<td>
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
			</div>
		</div>
		<?php echo $this->element('footer'); ?>
</body>
</html>