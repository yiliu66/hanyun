<?php 
	echo $this->element('action');
	// echo $javascript->link('ckeditor/ckeditor', NULL, false);  
	// echo $this->Html->script('ckeditor/ckeditor');
?>

<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Add Article'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Fck->fckeditor(array('Article', 'introtext'), $this->html->base, null);
//		echo $this->Form->input('category');
		echo $this->Form->input('category', array(
			'options' => array('公司公告' => '公司公告', '业界新闻' => '业界新闻'),
			'label'=> '文章类别',
			'div'=>false));

			
		// echo $this->Form->input('introtext', array('class'=> 'ckeditor'));
		// echo $fck->load('Article.introtext'); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
