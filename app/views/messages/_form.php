<?php
use \yii\helpers\Html;
use \yii\widgets\ActiveForm;

?>

<?php $form = $this->beginWidget(ActiveForm::className(), array(
	'options' => array('class' => 'form-horizontal'),
	'fieldConfig' => array(
			'class' => 'app\components\MyActiveField'
	),
)); ?>

	<?php echo $form->field($model,'reciever_id')->textInput(array('size'=>80,'maxlength'=>128)); ?>
	<?php echo $form->field($model,'subject')->textInput(array('size'=>80,'maxlength'=>128)); ?>
	<?php echo $form->field($model,'body')->textArea(array('rows'=>10, 'cols'=>70)); ?>
	<?php echo $form->field($model,'is_read')->textInput(array('size'=>80,'maxlength'=>128)); ?>
	
	
	<div class="form-actions">
		<?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Save', null, null, array('class' => 'button bg-color-blue fg-color-white')); ?>
	</div>

<?php $this->endWidget(); ?>
