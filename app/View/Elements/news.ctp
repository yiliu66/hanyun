<?php echo $this->Html->css('news'); ?>


<div id="news">
	<div class="news_left">
		<div class="news_left_top">
			<ul>
				<li class="news_a" onmouseover='news_menu_over(this)' id="news_news_menu">业界新闻</li>
				<li onmouseover='news_menu_over(this)' id="news_bulletin_menu">公司公告</li>
			</ul>
		</div>
		<div class="news_left_sep"><?php echo $this->Html->image('/images/news-3.png'); ?></div>
		<div class="news_left_bottom" style="font-size:12px;">服务热线：400-6799-709</div>
	</div>
	<div class="news_sep"></div>
	<div class="news_articles" style="float:left" id="news_news">
		<div class="news_content">
			<table width="760" class="news_table">
				<?php foreach ($news as $article): ?>
				<tr>
					<td><img src="../images/news-2.png" class="server_front_img"/>
						<span>
						<a href="javascript:show_content('<?php echo h(addcslashes($article['Article']['title'], '\'')); ?>', '<?php echo h($article['Article']['created']); ?>', '<?php echo h(addcslashes($article['Article']['introtext'], '\'')); ?>');">
							<?php echo mb_substr($article['Article']['title'], 0, 36, "UTF-8"); ?>
						</a>
						</span>
					</td>
					<td style="text-align:center; width:100px;">
						<span>
							<?php   echo mb_substr($article['Article']['created'], 0, 10);?>
						</span>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<div class="nodisplay" style="float:left" id="news_bulletin">
	<div class="news_content">
		<table width="760" class="news_table">
			<?php foreach ($bulletin as $article): ?>
			<tr>
				<td><img src="../images/news-2.png" class="server_front_img"/>
						<span>
						<a href="javascript:show_content('<?php echo h(addcslashes($article['Article']['title'], '\'')); ?>', '<?php echo h($article['Article']['created']); ?>', '<?php echo h(addcslashes($article['Article']['introtext'], '\'')); ?>');">
							<?php echo mb_substr($article['Article']['title'], 0, 36, "UTF-8"); ?>
						</a>
						</span>
					</td>
				<td style="text-align:center; width:100px;">
					<span>
						<?php echo mb_substr($article['Article']['created'], 0, 10);?>
					</span>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>

<div class="nodisplay" id="support-maincontent">  
	<div class="support-maincontent-title" id="support-maincontent-title"></div>
	<div class="support01-maincontent1" id="support01-maincontent1"></div>
	<div class="support01-maincontent" id="support01-maincontent"></div>
</div>
<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
</div>


<script type="text/javascript">
function news_menu_over (object) {
	object.className ="news_a";
	var thatmenu;
	var thisarticle;
	var thatarticle;
	if(object.id == "news_news_menu") {
		thatmenu = "news_bulletin_menu";
		thisarticle = "news_news";
		thatarticle = "news_bulletin";
	} else {
		thatmenu = "news_news_menu";
		thisarticle = "news_bulletin";
		thatarticle = "news_news";
	}
	document.getElementById("support-maincontent").className = "nodisplay";
	document.getElementById(thatmenu).className = "";
	document.getElementById(thisarticle).className = "news_articles";
	document.getElementById(thatarticle).className = "nodisplay";
}

function show_content(title, created, introtext) {
	document.getElementById("news_news").className = "nodisplay";
	document.getElementById("news_bulletin").className = "nodisplay";
	document.getElementById("support-maincontent").className = "support-maincontent";
	document.getElementById("support-maincontent-title").innerHTML = title;
	document.getElementById("support01-maincontent1").innerHTML = created;
	document.getElementById("support01-maincontent").innerHTML = introtext;
}
</script>