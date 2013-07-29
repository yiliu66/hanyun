<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云科技_致力于打造“绿色云”IaaS公共服务平台，自有技术，自有机房，主营联通服务器租用,联通服务器,联通主机租用,联通云主机租用,联通云主机</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('yuncunchu'); ?>
      <?php echo $this->Html->script(array('price')); ?>
</head>
<body onLoad="findA(4);" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php 
//debug($items); 
        ?>
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
            <div class="level">
                   <div class='yuncunchu'>
                        <div id="yuncunchu_storage" class="yuncunchu_level">
                            <div class="yuncunchu_head">
                                <div class="yuncunchu_head_img"></div>
                            </div>
                            <div class="yuncunchu_subhead">
                                <span>海量安全存储，永久类型的静态数据的长期存储，可随时进行检索、调整、更新。</span>
                            </div>
                            <div class="yuncunchu_table">
                                <table>
                                    <tr>
                                        <th>存储空间</th>
                                        <th>月参考价（元/GB）</th>
                                        <th>年参考价(元/GB)</th>
                                    </tr>
                                    <tr>
                                        <td>0 ~ 1T</td>
                                        <td>0.55</td>
                                        <td>5.5</td>
                                    </tr>
                                    <tr>
                                        <td>1 ~ 5T</td>
                                        <td>0.5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>5 ~ 10T</td>
                                        <td>0.45</td>
                                        <td>4.5</td>
                                    </tr>
                                    <tr>
                                        <td style="border-right:0px;">10T以上</td>
                                        <td colspan="2">
                                            <input id="item_name_0" name="item_name" value="云储存" type="hidden">
                                            <a href="javascript:void(0);"  onclick="show('box','close', 0)">
                                                <?php echo $this->Html->image('/images/yuncunchu_11.png'); ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="yuncunchu_bandwidth">
                                <div>带宽40元/M（无流量限制）</div>
                            </div>
                        </div>
                        <div id="yuncunchu_advantage" class="yuncunchu_level">
                            <div class="yuncunchu_head">
                                <div class="yuncunchu_head_img"></div>
                            </div>
                            <div class="yuncunchu_advantage_level">
                                <div class="yuncunchu_adv">
                                    <div class="yuncunchu_adv_img">
                                        <?php echo $this->Html->image('/images/yuncunchu_3.png', array('class'=>'gen-2')); ?>
                                    </div>
                                    <div class="yuncunchu_adv_text">
                                        <div class="adv_text_title">海量存储</div>
                                        <div class="adv_text">通过分布式架构支持大规模的请求<br>处理与数据传输，存储容量无限制</div>
                                    </div>
                                </div>
                                <div class="yuncunchu_adv">
                                    <div class="yuncunchu_adv_img">
                                        <?php echo $this->Html->image('/images/yuncunchu_4.png', array('class'=>'gen-2')); ?>
                                    </div>
                                    <div class="yuncunchu_adv_text">
                                        <div class="adv_text_title">安全稳定</div>
                                        <div class="adv_text">数据多重加密，分布存放、免费备份、<br>快速恢复，体验高效稳定的云存储</div>
                                    </div>
                                </div>
                                <div class="yuncunchu_adv">
                                    <div class="yuncunchu_adv_img">
                                        <?php echo $this->Html->image('/images/yuncunchu_5.png', array('class'=>'gen-2')); ?>
                                    </div>
                                    <div class="yuncunchu_adv_text">
                                        <div class="adv_text_title">实时共享</div>
                                        <div class="adv_text">同步文件夹可存在于不同终端，根据<br>用户独立ID在不同设备上进行同步
                                        </div>
                                    </div>
                                </div>
                                <div class="yuncunchu_adv">
                                    <div class="yuncunchu_adv_img">
                                        <?php echo $this->Html->image('/images/yuncunchu_6.png', array('class'=>'gen-2')); ?>
                                    </div>
                                    <div class="yuncunchu_adv_text">
                                        <div class="adv_text_title">操作简易</div>
                                        <div class="adv_text">用户无需了解后台的存储细节，通过<br>用户的管理界面，可以直接操纵数据
                                        </div>
                                    </div>
                                </div>
                                <div class="yuncunchu_adv">
                                    <div class="yuncunchu_adv_img">
                                        <?php echo $this->Html->image('/images/yuncunchu_7.png', array('class'=>'gen-2')); ?>
                                    </div>
                                    <div class="yuncunchu_adv_text">
                                        <div class="adv_text_title">节约成本</div>
                                        <div class="adv_text">用户不需要为服务器或存储设备消耗采购和<br>运维成本。真正做到按需使用、按需收费</div>
                                    </div>
                                </div>
                                <div class="yuncunchu_adv">
                                    <div class="yuncunchu_adv_img">
                                        <?php echo $this->Html->image('/images/yuncunchu_8.png', array('class'=>'gen-2')); ?>
                                    </div>
                                    <div class="yuncunchu_adv_text">
                                        <div class="adv_text_title">弹性扩展</div>
                                        <div class="adv_text">云存储系统的有效存储容量<br>不低于30TB，并可弹性扩张</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
<?php echo $this->element('footer'); ?>
<?php echo $this->element('user_info'); ?>
</body>
</html>
