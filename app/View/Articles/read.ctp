<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云云主机</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('news'); ?>
</head>
<body onLoad="findA(1);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php 
// debug($items); 
        ?>
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
            <div class="level">
	            <div class="support-maincontent" id="support-maincontent" style="float:none;">  
					<div class="support-maincontent-title" id="support-maincontent-title"><?php echo h($article['Article']['title']); ?></div>
					<div class="support01-maincontent1" id="support01-maincontent1"><?php echo $article['Article']['created']; ?></div>
					<div class="support01-maincontent" id="support01-maincontent"><?php echo $article['Article']['introtext']; ?></div>
				</div>
				<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
            </div>
        </div>
<?php echo $this->element('footer'); ?>
</body>
</html>
