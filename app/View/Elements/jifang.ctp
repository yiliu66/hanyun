<head>
	<?php echo $this->Html->css('jifang'); ?>
</head>
<body>
	<div class="jifang">
		<?php 
		$marks = array(0=>"汉云科技办公大楼", 1=>"汉云科技", 2=>"会议室前厅", 3=>"办公区", 4=>"会议室", 5=>"核心网络设备", 6=>"集群服务器", 7=>"机房总览", 8=>"Datacube（架设中）");
		for ($jifang_i=0; $jifang_i<count($marks); $jifang_i++) { ?>
		<div class="jifang_background" >
		<div class="jifang_img">
			<?php $img_filename = '/images/ifang_img_'.$jifang_i.'.jpg'; ?>
			<a href="javascript:void(0);">
			<?php echo $this->Html->image($img_filename, array('width'=>'274', 'height'=>'200', 'onclick' => 'window.open(this.src)')); ?>
			</a>
		</div>
		<div style="text-align:center; line-height:18px;">
			<?php echo $marks[$jifang_i]; ?>
		</div>
		</div>
		<?php } ?>
		<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
	</div>
</body>