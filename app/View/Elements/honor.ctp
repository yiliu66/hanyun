<head>
	<?php echo $this->Html->css('honor'); ?>
</head>
<body>
	<div class="honor">
		<?php 
		$marks = array(0=>"ISO27001信息安全认证", 1=>"优秀数据中心", 2=>"会员单位", 3=>"常务理事单位", 4=>"节能推荐方案", 5=>"高新技术产品认证", 6=>"民营科技企业", 7=>"软件产品登记证书", 8=>"软件企业认证证书", 9=>"企业法人营业执照");
		for ($honor_i=0; $honor_i<count($marks); $honor_i++) { 
			$img_filename = '/images/'.$marks[$honor_i].'.jpg';?>
		<?php if ($honor_i>3) { ?>
		<div class="honor_background" id="honor_background_2">
		<div class="honor_img">
			<a href="javascript:void(0);" >
			<?php echo $this->Html->image($img_filename, array('width'=>'274', 'height'=>'200', 'onclick' => 'window.open(this.src)')); ?>
			</a>
		</div>
		<?php } else if ($honor_i>0) { ?>
			<div class="honor_background" id="honor_background_1">
			<div class="honor_img">
				<a href="javascript:void(0);">
				<?php echo $this->Html->image($img_filename, array('width'=>'210', 'height'=>'200', 'onclick' => 'window.open(this.src)')); ?>
				</a>
			</div>
		<?php } else {?>
			<div class="honor_background" id="honor_background_0">
			<div class="honor_img">
				<a href="javascript:void(0);">
				<?php echo $this->Html->image($img_filename, array('width'=>'141', 'height'=>'200', 'onclick' => 'window.open(this.src)')); ?>
				</a>
			</div>
		<?php } ?>
		<div style="text-align:center; line-height:18px; <?php if ($honor_i == 0) echo "font-size:12px;" ?>">
			<?php echo $marks[$honor_i]; ?>
		</div>
		</div>
		<?php } ?>
		<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
	</div>
</body>