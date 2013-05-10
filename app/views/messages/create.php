<?php
$this->params['breadcrumbs']=array(
	'Create Message',
);
?>
<h1>Create Message</h1>

<?php echo $this->context->renderPartial('_form', array('model'=>$model)); ?>