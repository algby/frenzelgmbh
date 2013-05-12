<?php
use \yii\helpers\Html;
use \yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin($this, array(
	'options' => array('class' => 'form-horizontal'),
	'fieldConfig' => array(
			'class' => 'app\components\MyActiveField'
	),
)); ?>

	<?php echo $form->field($model,'reciever_id')->textInput(array('size'=>80,'maxlength'=>128)); ?>
	<?php echo $form->field($model,'subject')->textInput(array('size'=>80,'maxlength'=>128)); ?>
	<?php echo $form->field($model,'msg_body')->textArea(array('rows'=>5,'id'=>'Messages[msg_body]')); ?>
	<?php echo $form->field($model,'is_read')->textInput(array('size'=>80,'maxlength'=>128)); ?>
	
	
	<div class="form-actions">
		<?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Save', null, null, array('class' => 'button bg-color-blue fg-color-white')); ?>
	</div>

<?php ActiveForm::end(); ?>
