<?php
$this->params['breadcrumbs']=array(
	'Create Message',
);
?>
<h1>Create Message</h1>

<?php $this->beginWidget('app\components\MyClipWidget', array('id'=>'sidebar')); ?>
	<ul>
		<li><a href="#">Test</a></li>
		<li class="sticker sticker-color-blue"><a>Item</a></li>
		<li><a><i class="icon-cube"></i>Item</a></li>
	</ul>
<?php $this->endWidget(); ?>

<?php echo $this->context->renderPartial('_form', array('model'=>$model)); ?>