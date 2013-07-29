<html  xmlns:wb=“http://open.weibo.com/wb”>
<head>
    <?php echo $this->Html->css(array('index', 'level1', 'level2', 'level3', 'level4', 'menu')); ?>
    <?php echo $this->Html->script(array('utils', 'menu')); ?>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <div id="level_1">
        <div class="level">
            <div class="ts-1-1">
                <?php echo $this->Html->image('/images/1_01.jpg', array('width'=>'36', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-2">              
                <?php echo $this->Html->image('/images/1_02.jpg', array('width'=>'31', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-3">
                <?php echo $this->Html->image('/images/1_03.jpg', array('width'=>'161', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-4">
                <?php echo $this->Html->image('/images/1_04.jpg', array('width'=>'432', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-5">
                <?php echo $this->Html->image('/images/1_05.jpg', array('width'=>'340', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-6">
                <?php echo $this->Html->image('/images/分隔符.gif', array('width'=>'1', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-7">
                <?php echo $this->Html->image('/images/1_06.jpg', array('width'=>'39', 'class'=>'gen-2')); ?>
            </div>
            <div class="ts-1-8">
               <div style="padding-left:100px;">
                   <wb:follow-button uid="3191113122" type="red_1" width="67" height="24"></wb:follow-button>
               </div>
           </div>
           <div class="ts-1-9">
            <?php echo $this->Html->image('/images/1_08.jpg', array('width'=>'57', 'class'=>'gen-2', 'height'=>'31')); ?>
            </div>
           <div class="ts-1-10">
            <?php echo $this->Html->image('/images/分隔符.gif', array('width'=>'1', 'class'=>'gen-2', 'height'=>'31')); ?> </div>
           <div class="ts-1-11">
            <?php echo $this->Html->image('/images/1_09.jpg', array('width'=>'2', 'class'=>'gen-2', 'height'=>'43')); ?>
        </div>
           <div class="ts-1-12">
            <?php echo $this->Html->image('/images/1_10.jpg', array('width'=>'282', 'class'=>'gen-2', 'height'=>'43')); ?></div>
           <div class="ts-1-13">
            <?php echo $this->Html->image('/images/1_11.jpg', array('width'=>'56', 'class'=>'gen-2', 'height'=>'43')); ?></div>
           <div class="ts-1-14">
            <?php echo $this->Html->image('/images/分隔符.gif', array('width'=>'1', 'class'=>'gen-2', 'height'=>'43')); ?></div>
       </div></div>

       <div id="level_2">
        <div class="level">
            <div class="ts-1-15">
                <?php echo $this->Html->image('/images/1_12.jpg', array('width'=>'35', 'class'=>'gen-2', 'height'=>'33')); ?></div>
            <div id="menu">
                <ul>
                    <li id="m_1" class='m_li' onmouseover='mover(1);'><?php echo $this->Html->link(__('首  页'), array('controller' => 'pages', 'action' => 'index')); ?><!-- <a href="..">首&nbsp;&nbsp;&nbsp;&nbsp;页</a> -->
                        <div class="menu_sep"></div></li>
                    <li id="m_2" class='m_li' onmouseover='mover(2);'><?php echo $this->Html->link(__('服务器'), array('controller' => 'items', 'action' => 'read')); ?>
                        <span class="is_hot_ico"></span>
                    <div class="menu_sep"></div></li>
                    <li id="m_3" class='m_li' onmouseover='mover(3);'><?php echo $this->Html->link(__('云主机'), array('controller' => 'items', 'action' => 'cloud')); ?>
                        <span class="is_hot_ico"></span>
                    <div class="menu_sep"></div></li>
                    <li id="m_4" class='m_li' onmouseover='mover(4);'><?php echo $this->Html->link(__('云存储'), array('controller' => 'pages', 'action' => 'yuncunchu')); ?>
                    <div class="menu_sep"></div></li>
                    <li id="m_5" class='m_li' onmouseover='mover(5);'><?php echo $this->Html->link(__('云邮箱'), array('controller' => 'mails', 'action' => 'read')); ?>
                    <div class="menu_sep"></div></li>
                    <li id="m_6" class='m_li' onmouseover='mover(6);'><?php echo $this->Html->link(__('云解决方案'), array('controller' => 'pages', 'action' => 'solutions')); ?>
                    <div class="menu_sep"></div></li>
                    <!-- <li id="m_7" class='m_li' onmouseover='mover(7);'><a href="#">特惠套餐</a>
                    <div class="menu_sep"></div></li> -->
                    <li id="m_7" class='m_li' onmouseover='mover(7);'><?php echo $this->Html->link(__('关于我们'), array('controller' => 'pages', 'action' => 'contacts?menu=2')); ?></li>
                </ul>
            </div>
            <?php echo $this->Html->image('/images/1_31.jpg', array('width'=>'37', 'class'=>'gen-2', 'height'=>'33')); ?>
            <div class="ts-1-35"><?php echo $this->Html->image('/images/分隔符.gif', array('width'=>'1', 'class'=>'gen-2', 'height'=>'38')); ?></div>
        </div>
    </div>
    <div id="level_3">
        <div class="level">
        </div>
    </div>

    <div id="level_4">
        <div class="level">
            <div class="ts-1-39">
                <div class="subbox">
                    <ul class="smenu" style="z-index:inherit">
                        <li style="padding-left:0px; " id="s_1" class='s_li_a'> 欢迎光临汉云科技，我们将竭诚为您提供最优质的服务！ </li>
                        <li style="padding-left:50px;" id="s_2" class='s_li'> 汉云科技自主研发多款节能型集群式服务器，满足您不同需求！ </li>
                        <li style="padding-left:150px;" id="s_3" class='s_li'> 汉云*云主机完美调度IT资源，用户资源按需使用，弹性扩展，在线管理！ </li>
                        <li style="padding-left:280px;" id="s_4" class='s_li'> 汉云*云存储提供移动数据安全存储，轻松管理您的个人数据！ </li>
                        <li style="padding-left:410px;" id="s_5" class='s_li'> 汉云*云邮箱提供海量存储空间，您企业邮局的最佳选择！！ </li>
                        <li style="padding-left:540px;" id="s_6" class='s_li'> 汉云科技为您提供最全面的云解决方案，满足您不同需求！ </li>
                        <!-- <li style="float:right; padding-right:200px;" id="s_7" class='s_li'> <a href="#"  title="服务器">服务器</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"  title="云办公">云办公</a> </li> -->
                        <li style="float:right;" id="s_7" class='s_li'> 
                            <?php echo $this->Html->link(__('关于我们'), array('controller' => 'pages', 'action' => 'contacts?menu=2')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('机房参观'), array('controller' => 'pages', 'action' => 'contacts?menu=3')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('最新公告'), array('controller' => 'pages', 'action' => 'contacts?menu=4')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('荣誉证书'), array('controller' => 'pages', 'action' => 'contacts?menu=5')); ?>&nbsp;&nbsp;&nbsp;&nbsp; 
                            <?php echo $this->Html->link(__('联系我们'), array('controller' => 'pages', 'action' => 'contacts?menu=6')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('付款方式'), array('controller' => 'pages', 'action' => 'contacts?menu=7')); ?>
                        </li>
                    </ul>
                </div>
                <!--subbox end-->
            </div>
        </div>
    </div>
</body>
</html>
