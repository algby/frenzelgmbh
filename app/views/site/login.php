<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var yii\base\View $this
 * @var yii\widgets\ActiveForm $form
 * @var app\models\LoginForm $model
 */
$this->title = 'Login';
?>

<section id="content">
	<h1><i class="icon-key"></i> <?php echo Html::encode($this->title); ?></h1>

	<p>Please fill out the following fields to login:</p>

	<?php $form = ActiveForm::begin($this, array(
		'options' => array('class' => 'form-horizontal'),
		'fieldConfig' => array(
			'class' => 'app\components\MyActiveField'
		)
	)); 
	?>
		<?php echo $form->field($model, 'username')->textInput(); ?>
		<?php echo $form->field($model, 'password')->passwordInput(); ?>
		<?php echo $form->field($model, 'rememberMe')->checkbox(); ?>
		<div class="form-actions">
			<?php echo Html::submitButton('Login', null, null, array('class' => 'button bg-color-blue fg-color-white')); ?>
		</div>
	<?php ActiveForm::end(); ?>
</section>