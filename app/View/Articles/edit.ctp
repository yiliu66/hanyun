<?php echo $this->element('action'); ?>

<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('编辑文章'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		// echo $this->Form->input('introtext');
		echo $this->Fck->fckeditor(array('Article', 'introtext'), $this->html->base, $this->data['Article']['introtext']);
		//		echo $this->Form->input('category');
		echo $this->Form->input('category', array(
			'options' => array('公司公告' => '公司公告', '业界新闻' => '业界新闻'),
			'label'=> '文章类别',
			'div'=>false));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
