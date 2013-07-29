<head>
	<?php echo $this->Html->css('payment'); ?>
</head>
<body>
<div id="payment">
	<div class="content">
		<div class="notice_img"></div>
		<div class="notice">
			1.尊敬的客户您好，如果您从银行汇款，为了让您的汇款准确无误地划入您在汉云科技的帐户，<br>
				&nbsp;&nbsp;&nbsp;请汇款后务必尽快联系我们财务人员（0514-85166609）确认汇款。<br>
			2.我司产品均提供正规发票，请及时与财务人员联系（0514-85166609）
		</div>
		<div class="pay_method_img"></div>
		<div class="pay_online_img"></div>
		<div class="pay_online">
			<div class="pay_online_left">
				<div class="pay_online_left_img">
					<a href="https://www.alipay.com/?src=zhifubao" target="_blank"><?php echo $this->Html->image('/images/fukuan-4.png'); ?></a>
				</div>
				<div class="pay_online_left_content">
					名&nbsp;&nbsp;&nbsp;&nbsp;称：江苏汉云信息科技有限公司<br>
					账&nbsp;&nbsp;&nbsp;&nbsp;户：jiajia.wu@han-yun.net
				</div>
			</div>
			<div class="pay_online_left">
				<div class="pay_online_left_img">
					<a href="http://www.boc.cn/" target="_blank"><?php echo $this->Html->image('/images/fukuan-5.png'); ?></a>
				</div>
				<div class="pay_online_left_content">
					名&nbsp;&nbsp;&nbsp;&nbsp;称：江苏汉云信息科技有限公司<br>
				    开户行：中国银行扬州广陵支行<br>
				    账&nbsp;&nbsp;&nbsp;&nbsp;号：5339&nbsp;&nbsp;5954&nbsp;&nbsp;4066
				</div>
			</div>
			<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
		</div>
		<div class="pay_offline_img"></div>
		<div class="pay_online">
			<div class="pay_online_left">
				<div class="pay_online_left_img">
					<?php echo $this->Html->image('/images/fukuan-6.png'); ?>
				</div>
				<div class="pay_online_left_content">
					名&nbsp;&nbsp;&nbsp;&nbsp;称：江苏汉云信息科技有限公司<br>
				    开户行：中国银行扬州广陵支行<br>
				    账&nbsp;&nbsp;&nbsp;&nbsp;号：5339&nbsp;&nbsp;5954&nbsp;&nbsp;4066
				</div>
			</div>
			<div class="pay_online_left">
				<div class="pay_online_left_img">
					<?php echo $this->Html->image('/images/fukuan-7.png'); ?>
				</div>
				<div class="pay_online_left_content">
					名&nbsp;&nbsp;&nbsp;&nbsp;称：江苏汉云信息科技有限公司<br>
				    开户行：江苏扬州农村商业银行城东支行<br>
				    账&nbsp;&nbsp;&nbsp;&nbsp;号：3210&nbsp;&nbsp;1104&nbsp;&nbsp;0120&nbsp;&nbsp;1000&nbsp;&nbsp;0671&nbsp;&nbsp;85
				</div>
				<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
			</div>
		</div>
	</div>
	<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
</div>
</body>