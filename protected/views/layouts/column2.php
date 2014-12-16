<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
		<?php Yii::app()->highslide->init();?>
		<?php Yii::app()->widgetCollapse->init(); ?>
		<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>
		<?php $this->widget('Clock'); ?>
		<?php $this->widget('Calendar');?>
		<?php $this->widget('TagCloud', array(
				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>