<?php $url = $this->getController()->createUrl('post/search'); ?>
<?php echo CHtml::beginForm($url); ?>
<div class="row">
<?php echo CHtml::activeTextField($form,'string') ?>
<?php echo CHtml::error($form,'string'); ?>
<?php echo CHtml::SubmitButton('Start Search'); ?>
</div>
<?php echo CHtml::endForm(); ?>
