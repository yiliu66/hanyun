<?php echo $this->element('action'); ?>

<div class="articles view">
<h2><?php  echo __('Article'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($article['Article']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('标题'); ?></dt>
		<dd>
			<?php echo h($article['Article']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('内容'); ?></dt>
		<dd>
			<?php echo $article['Article']['introtext']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('分类'); ?></dt>
		<dd>
			<?php echo $article['Article']['category']; ?>
			&nbsp;
		</dd>
		<dt>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($article['Article']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($article['Article']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($article['Article']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($article['Article']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
