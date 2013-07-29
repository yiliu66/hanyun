<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云云主机</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('yunzhuji'); ?>
      <?php echo $this->Html->script(array('price')); ?>
</head>
<body onLoad="findA(3);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php 
// debug($items); 
        ?>
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
            <div class="level">
            <div class="yunzhuji">
                <div class="yunzhuji_menu">
                    <ul>
                        <?php $i=2; ?>
                        <?php foreach ($items as $item): ?>
                        <li onmouseover='mover_menu(<?php echo $i.','.count($items); ?>);' id="yunzhuji_menu_<?php echo $i.'"';
                        if($i==2) echo ' class="menu_a"';?>>
                            <?php echo substr($item['Item']['name'], 0, 9); ?>
                        </li>
                        <?php $i++;?>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php $i=2; ?>
                <?php foreach ($items as $item): ?>
                <div class="yunzhuji_left" id="yunzhuji_left_<?php echo $i.'"'; 
                if ($i!=2) echo ' style="display:none;"' ?>>
                    <div class="yunzhuji_arg">
                        <div class="yunzhuji_arg_sale"></div>
                        <dl>
                            <dt style="margin-top:26px;">CPU：</dt>
                            <dd style="margin-top:6px;">   
                                <ul class="yunzhuji_arg_btn">
                                <?php foreach ($item['Processer'] as $processer): ?>
                                    <li <?php if ($processer['ItemsProcesser']['price'] == 0.00) echo ' class="select"';?>
                                        onclick="resetPriceCloud(this)">
                                        <input type="hidden" name="cpu_<?php echo $i;?>" value="<?php echo $processer['ItemsProcesser']['price']; ?>" t-name="<?php echo $processer['name']; ?>" >
                                        <a href="javascript:void(0);">
                                            <i class="ico"><?php echo $processer['name']; ?></i>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                                </ul>
                            </dd>
                        <dt>内存：</dt>
                            <dd>   
                                    <ul class="yunzhuji_arg_btn">
                                    <?php foreach ($item['Mem'] as $mem): ?>
                                    <li <?php if ($mem['ItemsMem']['price'] == 0.00) echo ' class="select"'?>
                                        onclick="resetPriceCloud(this)">
                                        <input type="hidden" name="mem_<?php echo $i;?>" value="<?php echo $mem['ItemsMem']['price']; ?>" t-name="<?php echo $mem['name']; ?>" >
                                        <a href="javascript:void(0);">
                                            <i class="ico"><?php echo $mem['name']; ?></i>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                                </ul>
                            </dd>
                        <dt>硬盘：</dt>
                            <dd>   
                                    <ul class="yunzhuji_arg_btn">
                                    <?php foreach ($item['Disk'] as $disk): ?>
                                    <li <?php if ($disk['ItemsDisk']['price'] == 0.00) echo ' class="select"'?>
                                        onclick="resetPriceCloud(this)">
                                        <input type="hidden" name="disk_<?php echo $i;?>" value="<?php echo $disk['ItemsDisk']['price']; ?>" t-name="<?php echo $disk['name']; ?>" >
                                        <a href="javascript:void(0);">
                                            <i class="ico"><?php echo $disk['name']; ?></i>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                                </ul>
                            </dd>
                            <dt class="yunzhuji_info">带宽：</dt>
                            <dd><span>百兆共享</span></dd>
                            <dt class="yunzhuji_info">IP：</dt>
                            <dd>联通独立IP</dd>
                            <dt class="yunzhuji_info">操作系统：</dt>
                            <dd>Windows/Linux任选</dd>
                        </dl>
                    </div>
                    <div class="yunzhuji_buy">
                        <div class="price_left">
                            <input type="hidden" id="base_price_<?php echo $i;?>" name="base_price_<?php echo $i;?>" value="<?php echo floor($item['Item']['price']) ?>">
                        ￥<span id="price_<?php echo $i; ?>"><?php echo floor($item['Item']['price']) ?></span></div>
                        <div class="price_right">元/年</div>
                        <div class="price_button">
                            <a href="javascript:void(0);"  onclick="show('box','close', <?php echo $i; ?>, 'cloud')">
                                <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach ?>
                <div class="yunzhuji_right"></div>
            </div>
            </div>
        </div>
<?php echo $this->element('footer'); ?>
<?php echo $this->element('user_info'); ?>
</body>
</html>
