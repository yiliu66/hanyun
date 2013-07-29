<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云服务器</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('fuwuqi'); ?>
      <?php echo $this->Html->script(array('price')); ?>
      <style type="text/css">
      <!--
      .STYLE2 {
       color: #1f880d;
       font-size: 24px;
       font-weight: bold;
}
.STYLE3 {
	color: #ff0000;
	font-size: 20px;
	font-weight: bold;
}
.STYLE4 {color: #4e4e4e}
-->
</style>
</head>
<body onLoad="findA(2);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php 
//debug($items); 
        ?>
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
                <div class="level">
                       <div class='fuwuqi'>
                              <div class='fuwuqi_1'>
                                     <div class='fuwuqi_1_1'>
                                            服务器
                                    </div>
                            </div>
                            <?php $i=2; ?>
                            <?php foreach ($items as $item): ?>
                            <div class='fuwuqi_<?php echo $i; ?>'>
                                <div class="server_img"></div>
                                <div style="
                                float:left;
                                margin-left:25px;
                                margin-top:10px;
                                width:4px;
                                height:180px;" class="server_img_<?php echo $i; ?>"></div>
                                <div class="server_arg">
                                        <ul>
                                                <input id="item_name_<?php echo $i; ?>" name="item_name" value="<?php echo $item['Item']['name']; ?>" type="hidden">
                                                <li><font class="cpu"><?php echo $item['Item']['name']; ?></font></li>
                                                <li><font style="font-family:Arial;">CPU</font>：
                                                        <font style="font-family:Arial;">
                                                                <?php foreach ($item['Processer'] as $processer): ?>
                                                                <input type="radio" name="cpu_<?php echo $i; ?>" value="
                                                                <?php echo $processer['ItemsProcesser']['price']; ?>"
<?php if ($processer['ItemsProcesser']['price'] == 0.00) echo ' checked="checked"'?> onclick="resetPrice(this)" t-name="<?php echo $processer['name']; ?>" >
                                                                <?php echo $processer['name']; ?>
                                                        <?php endforeach ?>
                                                </li>
                                        </font>
                                        <li>内存：
                                                <font style="font-family:Arial;">
                                                        <?php foreach ($item['Mem'] as $mem): ?>
                                                        <input type="radio" name="mem_<?php echo $i; ?>" value="<?php echo $mem['ItemsMem']['price']; ?>"
<?php if ($mem['ItemsMem']['price'] == 0.00) echo ' checked="checked"'?> onclick="resetPrice(this)" t-name="<?php echo $mem['name']; ?>" >
                                                        <?php echo $mem['name']; ?>
                                                <?php endforeach ?>
                                        </font>
                                </li>
                                <li>硬盘：
                                        <font style="font-family:Arial;">
                                                <?php foreach ($item['Disk'] as $disk): ?>
                                                <input type="radio" name="disk_<?php echo $i; ?>" value="<?php echo $disk['ItemsDisk']['price']; ?>"
<?php if ($disk['ItemsDisk']['price'] == 0.00) echo ' checked="checked"'?> onclick="resetPrice(this)" t-name="<?php echo $disk['name']; ?>" >
                                                <?php echo $disk['name']; ?>
                                        <?php endforeach ?>
                                </font>
                        </li>
                        <li>带宽：百兆共享<span style="padding-left:60px;"><font style="font-family:Arial;">IP</font>：联通独立<font style="font-family:Arial;">IP</font></span></li>
                        <li>服务：<font style="font-family:Arial;">7*24</font>技术支持</li>
                        <li>机房：江苏联通数据机房，高速带宽接入</li>
                </ul>
        </div>
        <div class="server_buy">
                <div class="price_left">
                        <input type="hidden" id="base_price_<?php echo $i;?>" name="base_price_<?php echo $i;?>" value="<?php echo floor($item['Item']['price']) ?>">
                        ￥<span id="price_<?php echo $i; ?>"><?php echo floor($item['Item']['price']) ?></span></div>
                <div class="price_right">元/年</div>
                <div class="price_button">
                    <a href="javascript:void(0);"  onclick="show('box','close', <?php echo $i; ?>, 'read')">
                        <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                    </a>
                </div>
        </div>
</div>
<?php $i++; ?>
<?php endforeach ?>
<!-- End Save for Web Slices -->
</div>
</div>
<?php echo $this->element('footer'); ?>
<?php echo $this->element('user_info'); ?>
</body>
</html>
