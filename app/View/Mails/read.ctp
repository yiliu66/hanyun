<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云云主机</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('yunzhuji'); ?>
      <?php echo $this->Html->css('yunyouxiang'); ?>
      <?php echo $this->Html->script(array('price')); ?>
</head>
<body onLoad="findA(5);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
            <div class="level">
            <div>
                <div class="yunzhuji_menu">
                    <ul>
                        <?php $i=2; ?>
                        <?php foreach ($mails as $mail): ?>
                        <li onmouseover='mover_menu(<?php echo $i.','.count($mails); ?>);' id="yunzhuji_menu_<?php echo $i.'"';
                        if($i==2) echo ' class="menu_a"';?>>
                            <?php echo $mail['Mail']['name'];?>
                        </li>
                        <?php $i++;?>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php $i=2; $k=0;?>
                <?php foreach ($mails as $mail): ?>
                <div class="yunyouxiang_level" id="yunzhuji_left_<?php echo $i.'"'; 
                if ($i!=2) echo ' style="display:none;"' ?>>
                	<!-- <div class="yunyouxiang_mail_head">
                        <div class="yunyouxiang_head_img"></div>
                    </div> -->
                	<div class="yunyouxiang_table">
                        <table>
                        	<?php 
                        	$j = 0;
                        	foreach ($mail['Count'] as $count): ?>
                            <tr <?php if ($j%2==0) echo 'class="odd"';?>>
                                <td>
                                <div class="mail_img">
                                    <?php echo $this->Html->image('/images/yunyouxiang_2.png'); ?>
                                </div>
                                <div class="mail_text" style="margin-top:6px;"><?php echo $count['name']; ?>用户</div>
                                </td>
                                <td><div class="mail_text">每用户<?php echo $mail['Mail']['capacity'];?></div></td>
                                <td><div class="mail_text">总共<?php echo (((float)substr($mail['Mail']['capacity'], 0, -1))*$count['name']).substr($mail['Mail']['capacity'], -1); ?><div></td>
                                <td><div class="mail_text"><span id="price_<?php echo $k; ?>"><?php echo $count['MailsCount']['price']*$count['name']; ?></span>元/年<div></td>
                                <td><div class="mail_text"><input id="item_name_<?php echo $k; ?>" name="item_name" value="<?php echo $mail['Mail']['name'].$count['name']; ?>用户" type="hidden">
                                    <a href="javascript:void(0);"  onclick="show('box','close', <?php echo $k; ?>)">
                                        <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                                    </a></div></td>
                            </tr>
                        <?php 
                        $j++;
                        $k++;
                        endforeach ?>
                        </table>
                    </div>
                    <div class="yunyouxiang_sale">
                        <span><?php echo $this->Form->end('/images/yunyouxiang_3.png');?></span>
                        <span style="padding-top:4px;">两年8折，三年7折，5年6折</span>
                    </div>
                    <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>        
                </div>
                <?php $i++; ?>
                <?php endforeach ?>
                <div id="yunyouxiang_advantage" class="yunyouxiang_level">
                    <div class="yunyouxiang_head">
                        <div class="yunyouxiang_head_img"></div>
                    </div>
                    <div class="yunyouxiang_advantage_level">
                        <div class="yunyouxiang_adv">
                            <div class="yunyouxiang_adv_img" id="yunyouxiang_adv_img_1">
                                <div class="adv_text_title">容量巨大</div>
                            </div>
                            <div class="yunyouxiang_adv_text">
                                <div class="adv_text">业内独创企业邮箱G空间，<br>G超大附件，商机 随时随地掌控.
                                </div>
                            </div>
                        </div>
                        <div class="yunyouxiang_adv">
                            <div class="yunyouxiang_adv_img" id="yunyouxiang_adv_img_2">
                                <div class="adv_text_title">安全稳固</div>
                            </div>
                            <div class="yunyouxiang_adv_text">
                                <div class="adv_text">专业加密手段，<br>使您的信息不被泄露。
                                </div>
                            </div>
                        </div>
                        <div class="yunyouxiang_adv">
                            <div class="yunyouxiang_adv_img" id="yunyouxiang_adv_img_3">
                                <div class="adv_text_title">高效快速</div>
                            </div>
                            <div class="yunyouxiang_adv_text">
                                <div class="adv_text">全球数量巨大的云节点，<br>为您快速传递信息。
                                </div>
                            </div>
                        </div>
                        <div class="yunyouxiang_adv">
                            <div class="yunyouxiang_adv_img" id="yunyouxiang_adv_img_4">
                                <div class="adv_text_title">简易管理</div>
                            </div>
                            <div class="yunyouxiang_adv_text">
                                <div class="adv_text">一键式系统安装、备份、<br>远程重启、状态监控等功能。</div>
                            </div>
                        </div>
                    </div>
                    <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
                </div>
                <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
            </div>
        </div>
<?php echo $this->element('footer'); ?>
<?php echo $this->element('user_info'); ?>
</body>
</html>