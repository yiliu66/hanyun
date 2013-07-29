<head>
  <?php echo $this->Html->css('level8'); ?>
    <style type="text/css">
    .STYLE21 {
       font-family: Arial, Helvetica, sans-serif
   }
   .STYLE23 {
       font-size: x-large;
       font-weight: bold;
       color: #4e4e4e;
   }
   .STYLE24 {
       font-size: 15px
   }
   .STYLE25 {
       color: #4e4e4e;
       font-family: \9ED1\4F53;;
       font-size: 14px;
   }
   .STYLE28 {
       font-size: 15px;
       color: #4e4e4e;
   }
   </style>
</head>
<body>
    <div id="level_7">
        <div class="level"></div>
    </div>
    <div id="level_8">
       <div class="level">
        <div class="foot_left">
        	<div style="float:left;">
               <ul>
                  <li><?php echo $this->Html->link(__('网站首页'), array('controller' => 'pages', 'action' => 'index')); ?><div class="foot_li_img"></div></li>
                   <li><?php echo $this->Html->link(__('服务器'), array('controller' => 'items', 'action' => 'read')); ?><div class="foot_li_img"></div></li>
                   <li><?php echo $this->Html->link(__('云主机'), array('controller' => 'items', 'action' => 'cloud')); ?><div class="foot_li_img"></div></li>
                   <li><?php echo $this->Html->link(__('云存储'), array('controller' => 'pages', 'action' => 'yuncunchu')); ?><div class="foot_li_img"></div></li>
                   <li><?php echo $this->Html->link(__('云邮箱'), array('controller' => 'mails', 'action' => 'read')); ?><div class="foot_li_img"></div></li>
               </ul>
           </div>
           <div style="float:left; padding-left:50px;">
               <ul>
                   <li><?php echo $this->Html->link(__('云解决方案'), array('controller' => 'pages', 'action' => 'solutions')); ?><div class="foot_li_img"></div></li>
                   <li><a href="../pages/contacts?menu=3">机房参观</a><div class="foot_li_img"></div></li>
                   <li><a href="../pages/contacts?menu=5">荣誉资质</a><div class="foot_li_img"></div></li>
                   <li><a href="../pages/contacts?menu=6">联系我们</a><div class="foot_li_img"></div></li>
                   <li><a href="../pages/contacts?menu=7">付款方式</a><div class="foot_li_img"></div></li>
               </ul>
           </div>
       </div>
       <div class="foot_right">
        <table height="154" border="0" width="500px">
            <tr>
                <td><div align="right" class="STYLE23"> 销售热线：<span class="STYLE21">400-6799-709</span></div></td>
            </tr>
            <tr>
                <td><div align="right" class="STYLE24"> <span class="STYLE25"><span class="STYLE21">7*24h</span>技术服务热线：<span class="STYLE21">400-6799-709</span> 传真:<span class="STYLE21">0514-89793505</span></span></div></td>
            </tr>
            <tr>
                <td><div align="right"><span class="STYLE28"><span class="STYLE21">© 2013 </span>绿色云 <span class="STYLE21">All Rights Reserved.</span></span></div></td>
            </tr>
            <tr>
                <td><div align="right" class="STYLE28">苏<span class="STYLE21">ICP</span>备<span class="STYLE21">11084260</span>号<span class="STYLE21">-2</span></div></td>
            </tr>
            <tr>
                <td><div align="right" class="STYLE28">江苏信息服务产业基地(扬州)<span class="STYLE21">15</span>号楼B栋<span class="STYLE21">4F-5F</span></div></td>
            </tr>
        </table>
    </div>
</div>
</div>
</body>