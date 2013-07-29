<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云科技_致力于打造“绿色云”IaaS公共服务平台，自有技术，自有机房，主营联通服务器租用,联通服务器,联通主机租用,联通云主机租用,联通云主机机</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('contacts'); ?>
</head>
<body onLoad="findA(7);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php 
// debug($items); 
        ?>
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
            <div class="level">
            <div class="contacts">
                <div class="contacts_menu">
                    <ul>
                        <?php 
                        $menus = array("关于我们", "机房参观", "最新公告", "荣誉资质", "联系我们", "付款方式");
                        $len = count($menus);
                        for ($i=2; $i<=$len+1; $i++) { ?>
                        <li onmouseover='mover_menu(<?php echo $i.','.$len ?>);' id="yunzhuji_menu_<?php echo $i.'"';
                        if($i == $_GET['menu']) echo ' class="menu_a"';?> >
                        <?php 
                        echo $menus[$i-2];
                        ?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php 
                $content = array(2=>"about", 3=>"jifang", 4=>"news", 5=>"honor", 6=>"contact", 7=>"payment");
                for ($i=2; $i<=$len+1; $i++) { ?>
                <div class="contacts_content" id="yunzhuji_left_<?php echo $i.'"'; 
                if ($i != $_GET['menu']) echo ' style="display:none;"' ?>>
                        <?php echo $this->element($content[$i]); ?>
                </div>
                <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
                <?php } ?>

            </div>
            <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
            </div>
        </div>

<?php echo $this->element('footer'); ?>
</body>
</html>
