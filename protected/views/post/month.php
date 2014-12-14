<h1>Posts Issued in <i><?php echo date('F, Y', $firstDay); ?></i></h1>

<?php foreach($posts as $post): ?>
<?php $this->renderPartial('_view',array(
	'data'=>$post,
)); ?>
<?php endforeach; ?>

<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>
